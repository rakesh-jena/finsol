<?php

namespace App\Http\Controllers\User\Auth;

use App\Helpers\Helper as Helper;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\OTPCode;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm(Request $request)
    {
        $states = State::all();
        $routeUrl = Helper::getBaseUrl($request);
        return view('user.auth.register', compact('states', 'routeUrl'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'numeric', 'unique:users', 'max:10'],
            'password' => ['required', 'string', 'min:6'],
            //'aadhaar' => ['required', 'unique:users', 'min:12']
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'state' => $data['state'],
            'district' => $data['district'],
            'block' => $data['block'],
            'aadhaar' => $data['aadhaar'],
        ]);
        session()->flash('message', 'Thank you for registering!');

        $otp = rand(123456, 999999);
        OTPCode::updateOrCreate([
            'user_id' => $user->id,
        ], [
            'code' => $otp,
            'expiry' => Carbon::now()->addMinutes(10),
        ]);

        $basic = new \Vonage\Client\Credentials\Basic("26370151", "pp7rNfKvnGp51XIR");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(new \Vonage\SMS\Message\SMS('91'.$user->mobile, 'FINSOL', 'Your OTP for Finsol is ' . $otp . '.'));
        $message = $response->current();

        if($message->getStatus() === 0)
        {
            return view('user.auth.otp', compact('user'));
        }
    }
}
