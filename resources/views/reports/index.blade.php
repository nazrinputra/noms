<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="d-flex justify-content-start font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reports') }}
            </h2>
            <div class="inline-flex rounded-md shadow">
                <a href="{{ route('reports.create') }}"
                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Add </a>
            </div>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left dark:text-white text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Reference No</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left dark:text-white text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left dark:text-white text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Customer</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left dark:text-white text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Incident</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($reports as $report)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $report->reference_no }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{
                                        $report->customer->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{
                                        $report->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{
                                        $report->incident->subject }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('reports.show', $report->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" style="text-align:center; padding-top: 1rem; padding-bottom: 1rem;">
                                        There is no data to display here
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $reports->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
