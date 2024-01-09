<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function index()
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        return view('customer.create');
    }

    public function store(Request $request)
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

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

        try {
            DB::transaction(function () use ($customer, $user, $role) {
                $customer->save();
                $customer->user()->save($user);
                $user->roles()->save($role);
            });

            $success = true;
        } catch (Exception $e) {
            $success = false;
        }

        return redirect()->route('customers.create')
            ->with('status', [
                'success' => $success,
                'message' => $success ?
                    "Customer data added successfully" :
                    'Unable to save customer data',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        $validated = $request->validate([
            'email' => 'nullable|email|unique:customers',
            'whatsapp_number' => 'nullable|starts_with:+|unique:customers,nomor_whatsapp',
            'password' => 'confirmed',
            'date_of_birth' => 'date',
            'sex' => [Rule::in(['L', 'P'])],
        ]);

        $user = $customer->user;

        if ($value = $request->first_name) {
            $customer->nama_depan = $value;
            $user->name = "$customer->nama_depan $customer->nama_belakang";
        }
        if ($value = $request->last_name) {
            $customer->nama_belakang = $value;
            $user->name = "$customer->nama_depan $customer->nama_belakang";
        }
        if ($value = $validated['email']) {
            $customer->email = $value;
            $user->email = $customer->email;
        }
        if ($value = $validated['whatsapp_number']) {
            $customer->nomor_whatsapp = $value;
            $user->phone = $customer->nomor_whatsapp;
        }
        if ($value = $validated['password']) {
            $customer->password = Hash::make($value);
            $user->password = $customer->password;
        }
        if ($value = $validated['date_of_birth']) {
            $customer->tanggal_lahir = $value;
        }
        if ($value = $validated['sex']) {
            $customer->jenis_kelamin = $value;
        }
        if ($value = $request->address) {
            $customer->alamat = $value;
        }

        $role = new Role;
        $role->role = 'customer';

        try {
            DB::transaction(function () use ($customer, $user, $role) {
                $customer->save();
                $user->save();
                $user->roles()->save($role);
            });

            $success = true;
        } catch (Exception $e) {
            $success = false;
        }

        return redirect()->route('customers.edit', $customer->idcustomers)
            ->with('status', [
                'success' => $success,
                'message' => $success ?
                    "Customer data saved successfully" :
                    'Unable to save customer data',
            ]);
    }

    public function destroy(Customer $customer)
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        $customer->delete();
    }

    public function modal_edit(Customer $customer)
    {
        if (!Gate::allows('manage-transaction')) {
            abort(403);
        }

        return view('customer.modal.edit', compact('customer'));
    }
}
