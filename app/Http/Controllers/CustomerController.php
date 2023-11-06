<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
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

        $success = $customer->save();

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
