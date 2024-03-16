<x-admin-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-3">
                        <a href="{{ route('admin.customer.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                    </div>
                    <div class="p-6 text-gray-900">
                        <label class=" text-2xl">Update Customer</label>
                        <p class="mt-1 text-md leading-6 text-gray-600">You can add new customers by filling up the form below.</p>
                    <hr>
                        <div class="flex flex-col pt-5">
                                <form method="POST" action="{{ route('admin.customer.update', $customer->id) }}">
                                    @csrf

                                    @method('PUT')

                                    <div class="border-b border-gray-900/10 pb-12">
                                        <h2 class="text-base font-semibold leading-7 text-gray-900">Customer Update</h2>
                                            <p class="mt-1 text-sm leading-6 text-gray-600">Read the data inputted before saving.</p>

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                <div class="sm:col-span-3">
                                                    <label for="start_date" class="block text-sm font-medium leading-6 text-gray-900">Start Date</label>
                                                    <div class="mt-2">
                                                        <input type="date" name="start_date" value="{{ $customer->start_date }}" id="set_date" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="client_id" class="block text-sm font-medium leading-6 text-gray-900">Client ID</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="client_id" id="client_id" value="{{ $customer->client_id }}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="package" class="block text-sm font-medium leading-6 text-gray-900">Package</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="package" id="package" value="{{ $customer->package }}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Fullname</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="name" id="name" value="{{ $customer->name }}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                                    <div class="mt-2">
                                                        <input type="email" name="email" value="{{ $customer->email }}" id="email" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact Number</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="contact" id="contact" value="{{ $customer->contact }}" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="user_status" class="block text-sm font-medium leading-6 text-gray-900">User Status</label>
                                                    <div class="mt-2">
                                                            <select name="user_status"  value="{{ $customer->user_status }}" class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option disabled>-- Select Below --</option>
                                                                <option class="text-sm text-gray-700" value="active">Active</option>
                                                                <option class="text-sm text-gray-700" value="inactive">Inactive</option>
                                                                <option class="text-sm text-gray-700" value="suspended">Suspended</option>
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="business_name" class="block text-sm font-medium leading-6 text-gray-900">Business Name</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="business_name" value="{{ $customer->business_name }}" id="business_name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="col-span-full">
                                                    <label for="business_location" class="block text-sm font-medium leading-6 text-gray-900">Business Location</label>
                                                        <div class="mt-2">
                                                            <textarea id="business_location" value="{{ $customer->business_location }}" name="business_location" rows="3" placeholder="Write your address here..." class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                        </div>
                                                </div>

                                                </div>
                                                <div class="sm:col-span-6 pt-5 justify-end flex">
                                                    <button type="submit" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white rounded-md p-5">Update</button>
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
