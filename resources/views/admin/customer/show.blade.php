<x-admin-layout>

            <div class="py-5">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg p-3">
                        <div class="flex justify-end p-3">
                            <a href="{{ route('admin.customer.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                        </div>

                        <div class="p-3">
                            <label class="uppercase text-2xl font-extrabold pl-5">Customer Details</label>
                        </div>

                        <div class="flex justify-end p-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="bg-yellow-500 text-white hover:bg-yellow-900 pl-5 rounded px-4 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Billing History
                            </button>
                        </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-bold text-5xl uppercase" id="exampleModalLabel">Billing History</h1>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table w-100 text-center" id="tablesData">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-center text-lg uppercase">Payment Date</th>
                                                    <th class="align-middle text-center text-lg uppercase">Payment Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($customer->details as $detail)
                                                <tr>
                                                    <td class="align-middle text-center text-lg uppercase">{{ $detail->latest_payment }}</td>
                                                    <td class="align-middle text-center text-lg uppercase ">{{ $detail->payment_status }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="set_date" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                <div class="mt-2 text-lg uppercase">
                                    <input type="text" value="{{ $customer->name }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="client_id" class="block text-sm font-medium leading-6 text-gray-900">Email</label>

                                <div class="mt-2 text-lg uppercase">
                                    <input type="text" value="{{ $customer->email }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Start Date</label>

                                <div class="mt-2 text-lg uppercase">
                                    <input type="text" value="{{ $customer->start_date }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact Number</label>

                                <div class="mt-2 text-lg uppercase">
                                    <input type="text" value="{{ $customer->contact }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="business_name" class="block text-sm font-medium leading-6 text-gray-900">Business Name</label>

                                <div class="mt-2 text-lg uppercase">
                                    <input type="text" value="{{ $customer->business_name }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="user_status" class="block text-sm font-medium leading-6 text-gray-900">User Status</label>

                                <div class="mt-2 text-lg uppercase">
                                    <input type="text" value="{{ $customer->user_status }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="payment_status" class="block text-sm font-medium leading-6 text-gray-900">Current Package Plan</label>

                                <div class="mt-2 text-lg uppercase">
                                    <input type="text" value="{{ $customer->package }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                </div>


                                <div class="sm:col-span-3">
                                    <label for="business_location" class="block text-sm font-medium leading-6 text-gray-900">Business Location</label>

                                    <div class="mt-2 text-lg uppercase">
                                        <input type="text" value="{{ $customer->business_location }}" disabled autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

    </x-admin-layout>
