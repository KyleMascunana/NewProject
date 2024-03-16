<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Customer;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Detail::all();
        return view('admin.detail.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('admin.detail.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer_id = $request->customer_id;
        $latest_payment = $request->latest_payment;
        $payment_status = $request->payment_status;

        $data = new Detail;

        $data->customer_id = $customer_id;
        $data->latest_payment = $latest_payment;
        $data->payment_status = $payment_status;

        $data->save();
        return to_route('admin.customer.index')->with('message', 'Customer Payment has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail $detail)
    {
        $customers = Customer::all();
        return view('admin.detail.edit', compact('detail', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        $request->validate([

        ]);

        $detail->update($request->all());
        return to_route('admin.customer.index')->with('message', 'Customer has been Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();

        return back()->with('message', 'Customer has been deleted successfully.');
    }
}
