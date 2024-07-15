<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;

class SignUpController extends Controller
{
    public function showStep1()
    {
        return view('user.onboard.step1');
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        $request->session()->put('signup.email', $request->email);

        return redirect()->route('signup.step2');
    }

    public function showStep2()
    {
        return view('user.onboard.step2');
    }

    public function postStep2(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
        ]);

        $request->session()->put('signup.password', Hash::make($request->password));

        $user = User::create([
            'email' => $request->session()->get('signup.email'),
            'password' => $request->session()->get('signup.password'),
            'account_number' => $this->generateUniqueAccountNumber(),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('signup.account-type');
    }

    public function showAccountType()
    {
        return view('user.onboard.account-type');
    }

    public function postAccountType(Request $request)
    {
        $request->validate([
            'account_type' => 'required|string',
        ]);

        $user = Auth::user();
        $user->account_type = $request->account_type;
        $user->save();

        return redirect()->route('signup.step3');
    }

    public function showStep3()
    {
        return view('signup.step3');
    }

    public function postStep3(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return redirect()->route('signup.address');
    }

    public function showAddress()
    {
        return view('signup.address');
    }

    public function postAddress(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->address = $request->address;
        $user->save();

        return redirect()->route('signup.tax-info');
    }

    public function showTaxInfo()
    {
        return view('signup.tax-info');
    }

    public function postTaxInfo(Request $request)
    {
        $request->validate([
            'tax_number' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->tax_number = $request->tax_number;
        $user->save();

        return redirect()->route('signup.success');
    }

    public function showSuccess()
    {
        return view('signup.success');
    }

    private function generateUniqueAccountNumber()
    {
        do {
            $accountNumber = mt_rand(10000000, 99999999);
        } while (User::where('account_number', $accountNumber)->exists());

        return $accountNumber;
    }
}
