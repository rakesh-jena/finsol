<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\OTPCode;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    public function generateOTP($user_id)
    {
        $otp = rand(123456, 999999);
        OTPCode::updateOrCreate([
            'user_id' => $user_id,
        ], [
            'code' => $otp,
            'expiry' => Carbon::now()->addMinutes(10),
        ]);

        return $otp;
    }

    public function resendOTP($id)
    {
        $otp = rand(123456, 999999);
        $code = OTPCode::where('user_id', $id);
        $code->update([
            'code' => $otp,
            'expiry' => Carbon::now()->addMinutes(10),
        ]);

        $user = User::where('id', $id)->first();
        $res = $this->sendOTP($user->mobile, $otp);

        if($res->getStatus() === 0)
        {
            return view('user.auth.otp', compact('user'));
        }
    }

    public function checkOTP(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'code' => 'required|max:6',
        ]);

        $code = OTPCode::where('user_id', $request->input('user_id'))->first();
        if (Carbon::now()->lte(Carbon::parse($code->expiry))) {
            if ($request->input('code') === $code->code) {
                $user = User::where('id', $code->user_id)->first();
                Auth::login($user);
                return redirect()->route('home');
            }
        } else {
            return "OTP Expired. Send new OTP.";
        }
    }

    public function sendOTP($mobile, $otp)
    {
        $basic = new \Vonage\Client\Credentials\Basic("26370151", "pp7rNfKvnGp51XIR");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(new \Vonage\SMS\Message\SMS('91'.$mobile, 'FINSOL', 'Your OTP for Finsol is ' . $otp . '.'));
        $message = $response->current();

        return $message;
    }

    public function generateOTPForm(Request $request)
    {
        $credentials = $request->validate([
            'mobile' => ['required', 'exists:users', 'max:10'],
        ]);

        $user = User::where('mobile', $request->input('mobile'))->first();
        $otp = $this->generateOTP($user->id);

        $res = $this->sendOTP($request->input('mobile'), $otp);

        if($res->getStatus() === 0)
        {
            return view('user.auth.otp', compact('user'));
        }
    }
}
