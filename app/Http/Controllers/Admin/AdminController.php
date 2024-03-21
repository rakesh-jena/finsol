<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification\UserCaDetail;
use App\Models\Certification\UserNetworthDetail;
use App\Models\Certification\UserTurnoverDetail;
use App\Models\CompaniesAct\UserAdtDetail;
use App\Models\CompaniesAct\UserAocDetail;
use App\Models\CompaniesAct\UserDinkycDetail;
use App\Models\CompaniesAct\UserMgtDetail;
use App\Models\CompaniesAct\UserMinutesDetail;
use App\Models\CompaniesAct\UserStatutoryAuditDetail;
use App\Models\Instamojo;
use App\Models\LegalWork;
use App\Models\LoanFinance\CMA;
use App\Models\LoanFinance\Estimated;
use App\Models\LoanFinance\ProjectReport;
use App\Models\User;
use App\Models\UserCompanyDetail;
use App\Models\UserEpfDetail;
use App\Models\UserEsicDetail;
use App\Models\UserFactoryLicenseDetail;
use App\Models\UserFssaiDetail;
use App\Models\UserGstDetail;
use App\Models\UserHufDetail;
use App\Models\UserImportExportDetail;
use App\Models\UserISIDetail;
use App\Models\UserIsoDetail;
use App\Models\UserItrDetail;
use App\Models\UserLabourDetail;
use App\Models\UserPanDetail;
use App\Models\UserPartnershipDetail;
use App\Models\UserShopDetail;
use App\Models\UserTanDetail;
use App\Models\UserTaxauditDetail;
use App\Models\UserTdsDetail;
use App\Models\UserTrademarkDetail;
use App\Models\UserTrustDetail;
use App\Models\UserUdamyDetail;
use App\Models\Block;
use App\Models\District;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

        View::share('nav', 'dashboard');
    }

    public function index()
    {
        $user = Auth::user();
        $total = 0;
        $users = User::where('type_of_user', 'Customer');
        switch ($user->type_of_user) {
            case "State Office":
                $count = $users->where("state", $user->access_level_id)->count();
                $userIds = $users->select("id")->where("state", $user->access_level_id)->get()->toArray();
                foreach (Instamojo::where('staus', 'Credit')->whereIn('user_id', $userIds)->get() as $transaction) {
                    $total += (int) $transaction->amount;
                }
                break;
            case "District Office":
                $count = $users->where("district", $user->access_level_id)->count();
                $userIds = $users->select("id")->where("district", $user->access_level_id)->get()->toArray();
                foreach (Instamojo::where('staus', 'Credit')->whereIn('user_id', $userIds)->get() as $transaction) {
                    $total += (int) $transaction->amount;
                }
                break;
            case "Block Office":
                $count = $users->where("block", $user->access_level_id)->count();
                $userIds = $users->select("id")->where("block", $user->access_level_id)->get()->toArray();
                foreach (Instamojo::where('staus', 'Credit')->whereIn('user_id', $userIds)->get() as $transaction) {
                    $total += (int) $transaction->amount;
                }
                break;
            default:
                $count = $users->count();
                foreach (Instamojo::where('staus', 'Credit')->get() as $transaction) {
                    $total += (int) $transaction->amount;
                }
        }

        return view('admin.pages.dashboard', compact('user', 'count', 'total'));
    }

    public function user_list()
    {
        $user = Auth::user();
        switch ($user->type_of_user) {
            case 'State Office':
                $data['users'] = User::select('name', 'image', 'mobile', 'aadhaar', 'status', 'email', 'id')
                    ->where('state', $user->access_level_id)
                    ->orderBy('id', 'DESC')
                    ->get();
                break;

            case 'District Office':
                $data['users'] = User::select('name', 'image', 'mobile', 'aadhaar', 'status', 'email', 'id')
                    ->where('district', $user->access_level_id)
                    ->orderBy('id', 'DESC')
                    ->get();
                break;

            case 'Block Office':
                $data['users'] = User::select('name', 'image', 'mobile', 'aadhaar', 'status', 'email', 'id')
                    ->where('block', $user->access_level_id)
                    ->orderBy('id', 'DESC')
                    ->get();
                break;

            default:
                if (request()->has('state') && request('state') != null) {
                    if (request()->has('district') && request('district') != null) {
                        if (request()->has('block') && request('block') != null) {
                            $data['users'] = User::where('block', request('block'))->orderBy('created_at', 'DESC')->get();
                        } else {
                            $data['users'] = User::where('district', request('district'))->orderBy('created_at', 'DESC')->get();
                        }
                    } else {
                        $data['users'] = User::where('state', request('state'))->orderBy('created_at', 'DESC')->get();
                    }
                } else {
                    $data['users'] = User::orderBy('created_at', 'DESC')->get();
                }
        }

        return $data;
    }

    public function all_forms($status)
    {
        $list = AdminController::user_list();
        $users = [];
        foreach ($list['users'] as $user) {
            $users[] = (int) $user->id;
        }

        $forms = new \Illuminate\Database\Eloquent\Collection();
        $forms = $forms->concat(
            CMA::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/loan-finance/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserPanDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserGstDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserTanDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserEpfDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserEsicDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserHufDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserTrustDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserTrademarkDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserCompanyDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserUdamyDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserPartnershipDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserImportExportDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserFactoryLicenseDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserLabourDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserShopDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserIsoDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserFssaiDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserItrDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserTdsDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserTaxauditDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserISIDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/forms/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            Estimated::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/loan-finance/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            ProjectReport::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/loan-finance/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            LegalWork::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/legal-work/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserTurnoverDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/certification/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserNetworthDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/certification/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserCaDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/certification/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserMinutesDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/companiesact/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserStatutoryAuditDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/companiesact/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserDinkycDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/companiesact/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserAocDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/companiesact/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserAdtDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/companiesact/dashboard/details';
                    return $post;
                }),
        );
        $forms = $forms->concat(
            UserMgtDetail::where('status', $status)
                ->whereIn('user_id', $users)
                ->orderBy('id', 'DESC')
                ->get()
                ->map(function ($post) {
                    $post['url'] = 'admin/user/companiesact/dashboard/details';
                    return $post;
                }),
        );

        return $forms;
    }

    public function status_list($status)
    {
        $data['states'] = State::orderBy('name', 'asc')->get();
        if (request()->has('state') && request('state') != null)
            $data['districts'] = District::where('state_id', request('state'))->orderBy('name', 'asc')->get();
        if (request()->has('district') && request('district') != null)
            $data['blocks'] = Block::where('district_id', request('district'))->orderBy('name', 'asc')->get();
        switch ($status) {
            case 'processing':
                $data['forms'] = AdminController::all_forms(1);
                break;
            case 'query-raised':
                $data['forms'] = AdminController::all_forms(2);
                break;
            case 'query-updated':
                $data['forms'] = AdminController::all_forms(3);
                break;
            case 'approved':
                $data['forms'] = AdminController::all_forms(4);
                break;
            default:
        }

        return view('admin.pages.status.dashboard')->with($data);
    }

    public function form_list(Request $request)
    {
        $list = AdminController::user_list();
        $users = [];
        foreach ($list['users'] as $user) {
            $users[] = (int) $user->id;
        }
        $data['states'] = State::orderBy('name', 'asc')->get();
        if (request()->has('state') && request('state') != null)
            $data['districts'] = District::where('state_id', request('state'))->orderBy('name', 'asc')->get();
        if (request()->has('district') && request('district') != null)
            $data['blocks'] = Block::where('district_id', request('district'))->orderBy('name', 'asc')->get();
            
        switch ($request->form_type) {
            case 'pan':
                $data['forms'] = UserPanDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/pan');
                break;
            case 'tan':
                $data['forms'] = UserTanDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/tan');
                break;
            case 'gst':
                $data['forms'] = UserGstDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/gsttype/details');
                break;
            case 'epf':
                $data['forms'] = UserEpfDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/epf');
                break;
            case 'esic':
                $data['forms'] = UserEsicDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/esic');
                break;
            case 'huf':
                $data['forms'] = UserHufDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/huf');
                break;
            case 'trust':
                $data['forms'] = UserTrustDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/trust');
                break;
            case 'trademark':
                $data['forms'] = UserTrademarkDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/trademark');
                break;
            case 'company':
                $data['forms'] = UserCompanyDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/company');
                break;
            case 'udamy':
                $data['forms'] = UserUdamyDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/udamy');
                break;
            case 'partnership':
                $data['forms'] = UserPartnershipDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/partnership');
                break;
            case 'import':
                $data['forms'] = UserImportExportDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/importexport');
                break;
            case 'factory':
                $data['forms'] = UserFactoryLicenseDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/factorylicense');
                break;
            case 'labour':
                $data['forms'] = UserLabourDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/labour');
                break;
            case 'shop':
                $data['forms'] = UserShopDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/shop');
                break;
            case 'iso':
                $data['forms'] = UserIsoDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/iso');
                break;
            case 'fssai':
                $data['forms'] = UserFssaiDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/fssai');
                break;
            case 'itr':
                $data['forms'] = UserItrDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/itr');
                break;
            case 'tds':
                $data['forms'] = UserTdsDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/tdr');
                break;
            case 'tax':
                $data['forms'] = UserTaxauditDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/taxaudit');
                break;
            case 'isi':
                $data['forms'] = UserISIDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/forms/dashboard/details/isi');
                break;
            case 'cma':
                $data['forms'] = CMA::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/loan-finance/details/cma');
                break;
            case 'estimated':
                $data['forms'] = Estimated::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/loan-finance/details/estimated');
                break;
            case 'project_report':
                $data['forms'] = ProjectReport::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/loan-finance/details/projectReport');
                break;
            case 'legal':
                $data['forms'] = LegalWork::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/legal-work/details');
                break;
            case 'mgt':
                $data['forms'] = UserMgtDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/companiesact/details/mgt');
                break;
            case 'adt':
                $data['forms'] = UserAdtDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/companiesact/details/adt');
                break;
            case 'aoc':
                $data['forms'] = UserAocDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/companiesact/details/aoc');
                break;
            case 'minute':
                $data['forms'] = UserMinutesDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/companiesact/details/minutes');
                break;
            case 'din_kyc':
                $data['forms'] = UserDinkycDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/companiesact/details/dinkyc');
                break;
            case 'sa':
                $data['forms'] = UserStatutoryAuditDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/companiesact/details/statutoryaudit/');
                break;
            case 'ca':
                $data['forms'] = UserCaDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/certification/details/ca');
                break;
            case 'worth':
                $data['forms'] = UserNetworthDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/certification/details/networth');
                break;
            case 'turnover':
                $data['forms'] = UserTurnoverDetail::whereIn('status', [1, 2, 3, 4])
                    ->whereIn('user_id', $users)
                    ->orderBy('id', 'DESC')
                    ->get();
                $data['url'] = url('admin/user/certification/details/turnover');
                break;
            default:
        }

        return view('admin.pages.forms.dashboard')->with($data);
    }
}
