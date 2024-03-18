<x-admin-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5">Customer List</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view or add new customer to the system here.</p>
                        </div>

                        <div class="sm:col-span-3 mt-2">
                            <div class="flex justify-end p-3">
                                <a href="{{ route('admin.customer.create') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white
                                    rounded-md"><i class="fa-solid fa-plus"></i> New Customer</a>
                            </div>

                        </div>

                    </div>
                    <table id="" class="display">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Customer No.</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Client ID</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Contact No.</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">User Status</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($customers as $customer)
                                <tr>
                                    <td class="p-3 text-sm text-center">{{ $customer->id }}</td>
                                    <td class="p-3 text-sm text-center">{{ $customer->client_id }}</td>
                                    <td class="p-3 text-gray-700 text-sm text-center">{{ $customer->name }}</td>
                                    <td class="p-3 text-gray-700 text-sm text-center">{{ $customer->contact }}</td>
                                    <td class="p-3 text-gray-100 text-sm text-center">
                                        @if ($customer->user_status == 'active')
                                        <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                            {{ $customer->user_status }}
                                        </span>
                                    @elseif($customer->user_status == 'inactive')
                                        <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">
                                            {{ $customer->user_status }}
                                        </span>
                                    @elseif($customer->user_status == 'suspended')
                                        <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                            {{ $customer->user_status }}
                                        </span>
                                    @endif
                                    <td>
                                        <div class="items-center">
                                <div class="flex space-x-3">
                                    <a href="{{ route('admin.customer.edit', $customer->id) }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.customer.show', $customer->id) }}" class="text-purple-500 hover:text-purple-900"><i class="fa-solid fa-eye"></i></a>
                                    <form action="{{ route('admin.customer.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-900"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <br>
                    </div>
                </div>
        </div>
    </div>



    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5">Customer Detail</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view or add new customer details to the system here.</p>
                        </div>
                        <div class="sm:col-span-3 mt-2">
                            <div class="flex justify-end p-3">
                                <a href="{{ route('admin.detail.create') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white
                                    rounded-md"></i>New Customer Details</a>

                            </div>
                        </div>


                    </div>
                    <table id="" class="display">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Customer ID</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Lastest Payment</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Payment Status</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($details as $payment)
                                <tr>
                                    <td class="p-3 text-sm text-center">{{ $payment->customer_id }}</td>
                                    <td class="p-3 text-sm text-center">{{ $payment->latest_payment }}</td>
                                    <td class="p-3 text-gray-100 text-sm text-center">
                                        @if ($payment->payment_status == 'paid')
                                        <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                            {{ $payment->payment_status }}
                                        </span>
                                    @elseif($payment->payment_status == 'unpaid')
                                        <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">
                                            {{ $payment->payment_status }}
                                        </span>
                                    @elseif($payment->payment_status == 'cancelled')
                                        <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                            {{ $payment->payment_status }}
                                        </span>
                                    @endif
                                    </td>
                                    <td>
                                        <div class="items-center">
                                            <div class="flex space-x-3">
                                                <a href="{{ route('admin.detail.edit', $payment->id) }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{ route('admin.detail.destroy', $payment->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500 hover:text-red-900"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <br>
                    </div>
                </div>
        </div>
    </div>

    </x-admin-layout>
