<?php

namespace App\Http\Controllers\User\Auth;

use App\Helpers\Helper as Helper;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\User;
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

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'numeric', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            //'aadhaar' => ['required', 'unique:users']
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
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
    }

    public function showRegistrationForm(Request $request)
    {
        $states = State::all();
        $routeUrl = Helper::getBaseUrl($request);
        return view('user.auth.register', compact('states', 'routeUrl'));
    }
}
