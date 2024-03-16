<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = Customer::all();
        $details = Detail::paginate(5);
        return view('admin.customer.index', compact('customers', 'details'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $start_date = $request->start_date;
        $client_id = $request->client_id;
        $package = $request->package;
		$name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $business_name = $request->business_name;
        $business_location = $request->business_location;
        $user_status = $request->user_status;

        $data = new Customer;

        $data->start_date = $start_date;
        $data->client_id = $client_id;
        $data->package = $package;
        $data->name = $name;
        $data->email = $email;
        $data->contact = $contact;
        $data->business_name = $business_name;
        $data->business_location = $business_location;
        $data->user_status = $user_status;

        $data->save();
        return to_route('admin.detail.create')->with('message', 'Customer has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $customer->load('details');
        return view('admin.customer.show', compact('customer'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([

        ]);

        $customer->update($request->all());
        return to_route('admin.customer.index')->with('message', 'Customer has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return back()->with('message', 'Customer has been deleted successfully.');
    }
}
