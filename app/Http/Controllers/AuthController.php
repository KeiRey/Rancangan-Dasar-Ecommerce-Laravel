<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Socialite;
use App\Verification;
use App\User;
use App\Mail\VerificationMail;
use App\SocialAccount;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view('barang.login');
    }
    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('email','password'))){
    		return redirect('/barang');
        }
        return redirect('/login');
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
    public function registrasi()
    {
        return view('barang.registrasi');
    }
    public function simpanregistrasi(Request $request)
    {
        // dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'level' => 'pembeli',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        $provider = Socialite::driver('facebook')->user();
        $account = SocialAccount::where('provider', 'facebook')->where('provider_user_id',$provider->getId())->first();
        if($account){
            $user = $account->user;
        }else{
            $akun = new SocialAccount([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);
            $orang = User::where('email',$provider->getEmail())->first();
            if(!$orang){
                $orang = User::create([
                    'name' => $provider->getName(),
                    'level' => 'pembeli',
                    'email' => $provider->getEmail(),
                    'password' => '',
                    'verified' => '1'
                ]);
            }
            $akun->user()->associate($orang);
            $akun->save();
            $user = $orang;
        }
        auth()->login($user);
        return redirect()->to('/barang');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $provider = Socialite::driver('google')->user();
        $account = SocialAccount::where('provider', 'google')->where('provider_user_id',$provider->getId())->first();
        if($account){
            $user = $account->user;
        }else{
            $akun = new SocialAccount([
                'provider_user_id' => $provider->getId(),
                'provider' => 'google'
            ]);
            $orang = User::where('email',$provider->getEmail())->first();
            if(!$orang){
                $orang = User::create([
                    'name' => $provider->getName(),
                    'level' => 'pembeli',
                    'email' => $provider->getEmail(),
                    'password' => '',
                    'verified' => '1'
                ]);
            }
            $akun->user()->associate($orang);
            $akun->save();
            $user = $orang;
        }
        auth()->login($user);
        return redirect()->to('/barang');
    }
}
