<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="d-flex justify-content-start font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Report') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Existing Report</h3>
                        <p class="mt-1 text-sm text-gray-600">Please change any details in the form to modify the
                            report.</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('reports.update', $report) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="reference_no"
                                            class="block text-sm font-medium text-gray-700">Reference
                                            No</label>
                                        <input type="text" name="reference_no" id="reference_no"
                                            value="{{ $report->reference_no }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                        <input type="text" name="title" id="title" value="{{ $report->title }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="incident_id"
                                        class="block text-sm font-medium text-gray-700">Incident</label>
                                    <select id="incident_id" name="incident_id"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($incidents as $incident)
                                        <option value="{{ $incident->id }}" @if ($report->incident_id == $incident->id)
                                            selected
                                            @endif>{{ $incident->subject }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="customer_id"
                                        class="block text-sm font-medium text-gray-700">Customer</label>
                                    <select id="customer_id" name="customer_id"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}" @if ($report->customer_id == $customer->id)
                                            selected
                                            @endif>{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-6 flex rounded-md shadow justify-between">
                                <div class="ml-3 inline-flex rounded-md shadow">
                                    <a href="{{ url()->previous() }}"
                                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                                        Cancel </a>
                                </div>
                                <button type="submit"
                                    class="px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
