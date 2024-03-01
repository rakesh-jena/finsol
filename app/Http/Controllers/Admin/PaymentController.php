<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instamojo;
use App\Models\PaymentValue;
use App\Models\User;
use App\Models\State;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function userPaymentDetails($userId)
    {        
        $data['user'] = User::where('id', $userId)->first();
        $data['transaction'] = Instamojo::select('*')->where('user_id', $userId)->orderBy('updated_at', 'DESC')->get();
        
        return view('admin.pages.users.payment')->with($data);
    }

    public function allTransactions()
    {
        $data['states'] = State::orderBy('name', 'asc')->get();
        if(request()->has('state') && request('state') != null)
        {   
            if(request()->has('district') && request('district') != null)
            {
                if(request()->has('block') && request('block') != null)
                {
                    $users = User::select('id')->where('block', request('block'))->get()->toArray();                    
                    $data['transaction'] = Instamojo::select('*')->whereIn('user_id', $users)->orderBy('updated_at', 'DESC')->get();
                } else {
                    $users = User::select('id')->where('district', request('district'))->get()->toArray();                    
                    $data['transaction'] = Instamojo::select('*')->whereIn('user_id', $users)->orderBy('updated_at', 'DESC')->get();
                }
            } else {
                $users = User::select('id')->where('state', request('state'))->get()->toArray();
                $data['transaction'] = Instamojo::select('*')->whereIn('user_id', $users)->orderBy('updated_at', 'DESC')->get();
            }
        } else {
            $data['transaction'] = Instamojo::select('*')->orderBy('updated_at', 'DESC')->get();
        }

        if(request()->has('from') && request()->has('to'))
        {
            $data['transaction'] = $data['transaction']->intersect(Instamojo::whereBetween('created_at', [request('from'), request('to')])->orderBy('updated_at', 'DESC')->get());
        }
        
        $total = 0;
        foreach($data['transaction'] as $trans)
        {
            if($trans->staus === 'Credit')
            {
                $total += (int)$trans->amount;
            }
        }

        $data['total'] = $total;
        return view('admin.pages.payment.history.transactions')->with($data);
    }

    public function updateFormValue(Request $request)
    {
        $form = PaymentValue::where('id', $request->id)->update([
            'value' => $request->value,
        ]);

        return $form;
    }

    public function showFormValue()
    {
        $data['values'] = PaymentValue::select('*')->orderBy('updated_at', 'DESC')->get();
        // $documents = Documents::select('*')->get();
        // $pre = 'a';
        // foreach($documents as $doc)
        // {
        //     $type = $doc->gst_type_val;
        //     if($type != $pre)
        //     {
        //         $pre = $type;
        //         $forms = PaymentValue::firstOrCreate([
        //             'form_type' => $doc->for_multiple
        //         ],[
        //             'form' => $doc->for_multiple,
        //             'value' => 80,
        //         ]);
        //     }
        // }
        return view('admin.pages.payment.formValue.list')->with($data);
    }
}
