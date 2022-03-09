<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div
                        class="flex justify-between p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Reports
                                Module</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                This is the module to view, create and edit reports
                            </p>
                        </div>
                        <div class="py-3 inline-flex rounded-md shadow">
                            <a href="{{ route('reports.index') }}"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                View Module </a>
                        </div>
                    </div>

                    @if (Auth::user()->hasPermissionTo('reports module'))
                    <div
                        class="mt-3 flex justify-between p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Incidents
                                Module</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                This is the module to view, create and edit incidents
                            </p>
                        </div>
                        <div class="py-3 inline-flex rounded-md shadow">
                            <a href="{{ route('incidents.index') }}"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                View Module </a>
                        </div>
                    </div>

                    <div
                        class="mt-3 flex justify-between p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Customers
                                Module</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                This is the module to view, create and edit customers
                            </p>
                        </div>
                        <div class="py-3 inline-flex rounded-md shadow">
                            <a href="{{ route('customers.index') }}"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                View Module </a>
                        </div>
                    </div>

                    <div
                        class="mt-3 flex justify-between p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Assets
                                Module</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                This is the module to view, create and edit assets
                            </p>
                        </div>
                        <div class="py-3 inline-flex rounded-md shadow">
                            <a href="{{ route('assets.index') }}"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                View Module </a>
                        </div>
                    </div>
                    @endif

                    <div
                        class="mt-3 flex justify-between p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Notes
                                Module</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                This is the module to view, create and edit notes
                            </p>
                        </div>
                        <div class="py-3 inline-flex rounded-md shadow">
                            <a href="#"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                View Module </a>
                        </div>
                    </div>

                    @if (Auth::user()->hasPermissionTo('roles module'))
                    <div
                        class="mt-3 flex justify-between p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Roles
                                Module</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                This is the module to view, create and edit roles
                            </p>
                        </div>
                        <div class="py-3 inline-flex rounded-md shadow">
                            <a href="#"
                                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                View Module </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
