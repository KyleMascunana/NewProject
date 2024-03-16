<x-admin-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-3">
                        <a href="{{ route('admin.detail.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                    </div>
                    <div class="p-6 text-gray-900">
                        <label class=" text-2xl">Update Customer Payment</label>
                        <p class="mt-1 text-md leading-6 text-gray-600">You can add new customer payment by filling up the form below.</p>
                    <hr>
                        <div class="flex flex-col pt-5">
                            <form method="POST" action="{{ route('admin.detail.update', $detail->id) }}">
                                @csrf

                                @method('PUT')

                                    <div class="border-b border-gray-900/10 pb-12">
                                        <h2 class="text-base font-semibold leading-7 text-gray-900"> Edit Customer Payment</h2>

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                                <div class="sm:col-span-3">
                                                    <label for="customer_id" class="block text-sm font-medium leading-6 text-gray-900">Customer ID: {{ $detail->customer_id }}</label>
                                                    <div class="mt-2">
                                                            <select name="customer_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option selected>-- Select Below --</option>
                                                               @foreach ($customers as $customer)
                                                                    <option class="text-sm text-gray-700" value="{{ $customer->id }}">{{ $customer->id }} - {{ $customer->name }}</option>
                                                               @endforeach
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="latest_payment" class="block text-sm font-medium leading-6 text-gray-900">Customer Payment</label>
                                                    <div class="mt-2">
                                                        <input type="date" name="latest_payment" id="latest_payment" value="{{ $detail->latest_payment }}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="payment_status" class="block text-sm font-medium leading-6 text-gray-900">Payment Status: {{ $detail->payment_status }}</label>
                                                    <div class="mt-2">
                                                            <select name="payment_status" class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option selected>-- Select Below --</option>
                                                                <option class="text-sm text-gray-700" value="paid">Paid</option>
                                                                <option class="text-sm text-gray-700" value="unpaid">Unpaid</option>
                                                                <option class="text-sm text-gray-700" value="cancelled">Cancelled</option>
                                                            </select>
                                                    </div>

                                                </div>
                                                <div class="sm:col-span-6 pt-5 justify-end flex">
                                                    <button type="submit" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white rounded-md p-5">Save</button>
                                                </div>
                                            </div>

                                        </div>


                                </form>

                        </div>


                    </div>
                </div>
        </div>
    </div>

    </x-admin-layout>
