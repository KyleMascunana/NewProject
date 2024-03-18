<?php

namespace App\Listeners;

use App\Models\Report;
use App\Models\Customer;
use App\Events\CustomerCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateReportForCustomer
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CustomerCreated $event)
    {
        // Retrieve the newly created customer instance
        $customer = $event->customer;

        // Create a new report for the customer
        $report = new Report();
        $report->customer_id = $customer->id;

        // Populate other report attributes as needed
        $report->save();
    }

}
