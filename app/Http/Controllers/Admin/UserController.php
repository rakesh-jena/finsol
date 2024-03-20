<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper as Helper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Block;
use App\Models\District;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $user = Auth::user();
        switch ($user->type_of_user) {
            case "State Office":
                $data['users'] = User::select(
                    'name',
                    'image',
                    'status',
                    'aadhaar',
                    'mobile',
                    'email',
                    'id'
                )->where("state", $user->access_level_id)->orderBy('id', 'DESC')->get();
                break;

            case "District Office":
                $data['users'] = User::select(
                    'name',
                    'image',
                    'status',
                    'aadhaar',
                    'mobile',
                    'email',
                    'id'
                )->where("district", $user->access_level_id)->orderBy('id', 'DESC')->get();
                break;

            case "Block Office":
                $data['users'] = User::select(
                    'name',
                    'image',
                    'aadhaar',
                    'mobile',
                    'status',
                    'email',
                    'id'
                )->where("block", $user->access_level_id)->orderBy('id', 'DESC')->get();
                break;

            default:
                $data['states'] = State::orderBy('name', 'asc')->get();
                if(request()->has('state') && request('state') != null)
                {   
                    if(request()->has('district') && request('district') != null)
                    {
                        if(request()->has('block') && request('block') != null)
                        {                   
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

        return view('admin.pages.users.index')->with($data);
    }

    public function allEmployees()
    {
        $data['users'] = Admin::select('*')->get();
        return view('admin.pages.employee.list')->with($data);
    }

    public function ajax()
    {
        $items = User::select(
            'name',
            'image',
            'status',
            'email',
            'id'
        )->orderBy('id', 'DESC');

        return DataTables::of($items)->make(true);
    }

    public function show($item_id)
    {
        $item = User::find($item_id);
        if (empty($item)) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.pages.users.show', [
            'item' => $item,
        ]);
    }

    public function change_status(Request $request)
    {
        $item_id = $request->get('item_id');
        $item = User::find($item_id);

        if (empty($item)) {
            return response()->json([
                'success' => false,
                'message' => 'Item not found!',
            ], 404);
        } else {
            if ($item->status == User::ACTIVE || $item->status == User::NOT_ACTIVE) {
                $item->status = ($item->status == User::ACTIVE ? User::NOT_ACTIVE : User::ACTIVE);
                $item->save();

                return response()->json([
                    'success' => true,
                    'message' => 'Item status successfully changed.',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Item not found!',
                ], 404);
            }
        }
    }

    public function delete(Request $request)
    {
        $item_id = $request->get('item_id');
        $item = User::find($item_id);

        if (empty($item)) {
            return response()->json([
                'success' => false,
                'message' => 'Item not found!',
            ], 404);
        } else {
            $item->delete();

            return response()->json([
                'success' => true,
                'message' => 'Item successfully deleted.',
            ], 200);
        }
    }

    public function addUserForm(Request $request)
    {
        $states = State::orderBy('name', 'asc')->get();
        $routeUrl = Helper::getBaseUrl($request);
        return view('admin.auth.register', compact('states', 'routeUrl'));
    }

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);
    }

    public function addUser(Request $request)
    {
        $this->validator($request->all())->validate();
        $inputs = $request->all();
        $inputs['password'] = Hash::make($inputs['password']);
        switch ($request->type_of_user) {
            case "State Office":
                $inputs['access_level_id'] = $request->state;
                break;
            case "District Office":
                $inputs['access_level_id'] = $request->district;
                break;
            case "Block Office":
                $inputs['access_level_id'] = $request->block;
                break;
            default:
                $inputs['access_level_id'] = 0;
        }
        $user = Admin::create($inputs);
        $permission = DB::table('model_has_roles')->insert(
            [
                'role_id' => 1,
                'model_id' => $user->id,
                'model_type' => 'App\Models\Admin',
            ]
        );
        return redirect('admin/users/all')->with(['message' => 'User Created successfully']);
    }

    public function profile()
    {
        $data['user'] = Auth::user();
        return view('admin.auth.profile')->with($data);
    }

    public function profile_employee($id)
    {
        $data['employee'] = Auth::user();
        return view('admin.auth.profile')->with($data);
    }
}
