<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="d-flex justify-content-start font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Incidents') }}
            </h2>
            <div class="inline-flex rounded-md shadow">
                <a href="{{ route('incidents.create') }}"
                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Add </a>
            </div>
        </div>
    </x-slot>

    <div class="p-6">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Subject</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Product</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($incidents as $incident)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $incident->subject }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{
                                        $incident->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{
                                        $incident->category }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{
                                        $incident->product }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('incidents.show', $incident->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $incidents->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
