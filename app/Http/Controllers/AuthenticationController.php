<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    public function create()
    {
        return view('auth.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($validated, $request->has('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended();
    }

    public function register_create()
    {
        return view('auth.register');
    }

    public function register_store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:customers',
            'whatsapp_number' => 'required|starts_with:+|unique:customers,nomor_whatsapp',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'date_of_birth' => 'required|date',
            'sex' => ['required', Rule::in(['L', 'P'])],
            'address' => 'required',
        ]);

        $customer = new Customer;
        $customer->nama_depan = $validated['first_name'];
        $customer->nama_belakang = $validated['last_name'];
        $customer->email = $validated['email'];
        $customer->nomor_whatsapp = $validated['whatsapp_number'];
        $customer->password = Hash::make($validated['password']);
        $customer->tanggal_lahir = $validated['date_of_birth'];
        $customer->jenis_kelamin = $validated['sex'];
        $customer->alamat = $validated['address'];

        $user = new User;
        $user->name = "$customer->nama_depan $customer->nama_belakang";
        $user->email = $customer->email;
        $user->phone = $customer->nomor_whatsapp;
        $user->password = $customer->password;

        $role = new Role;
        $role->role = 'customer';

        DB::transaction(function () use ($customer, $user, $role) {
            $customer->save();
            $customer->user()->save($user);
            $user->roles()->save($role);
        });

        Auth::login($user);

        return redirect()->route('homepage');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('auth.create');
    }
}
