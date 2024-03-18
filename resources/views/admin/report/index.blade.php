<x-admin-layout>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5">Report List</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view report details to the system here.</p>
                        </div>


                    </div>
                    <table id="" class="display">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th>ID#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No.</th>
                                <th>Business Name</th>
                                <th>User Status</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $report->customer_id }}</td>
                                    <td>{{ $report->customer->name }}</td>
                                    <td>{{ $report->customer->email }}</td>
                                    <td>{{ $report->customer->contact }}</td>
                                    <td>{{ $report->customer->business_name }}</td>
                                    <td>
                                        @if ($report->customer->user_status == 'active')
                                        <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                            {{ $report->customer->user_status }}
                                        </span>
                                    @elseif($report->customer->user_status == 'inactive')
                                        <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">
                                            {{ $report->customer->user_status }}
                                        </span>
                                    @elseif($report->customer->user_status == 'suspended')
                                        <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                            {{ $report->customer->user_status }}
                                        </span>
                                    @endif
                                    </td>
                                        <td>
                                            @if ($report->customer->payment_status == 'paid')
                                            <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                                {{ $report->customer->payment_status }}
                                            </span>
                                        @elseif($report->customer->payment_status == 'unpaid')
                                            <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">
                                                {{ $report->customer->payment_status }}
                                            </span>
                                        @elseif($report->customer->payment_status == 'cancelled')
                                            <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                                {{ $report->customer->payment_status }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="items-center">
                                            <div class="flex space-x-3">
                                                <a href="{{ route('admin.report.show', $report->customer->id) }}" class="text-purple-500 hover:text-purple-900"><i class="fa-solid fa-eye"></i></a>
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


