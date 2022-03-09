<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="d-flex justify-content-start font-semibold text-xl text-gray-800 leading-tight">
                {{ __('View Incident') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Incident Information</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Details about the incident that is stored in the system.
                </p>
            </div>

            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Subject</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $incident->subject }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Description</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $incident->description }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Category</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $incident->category }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Product</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $incident->product }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Reports</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            @foreach ($incident->reports as $report)
                            <a href="{{ route('reports.show', $report) }}"
                                class="inline-flex items-center justify-center px-5 py-3 text-xs border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                {{ $report->reference_no }} </a>
                            @endforeach
                        </dd>
                    </div>
                    {{-- <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate"> resume_back_end_developer.pdf </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download
                                        </a>
                                    </div>
                                </li>
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate"> coverletter_back_end_developer.pdf
                                        </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div> --}}
                </dl>
            </div>
            <div class="flex justify-between px-4 py-5 sm:px-6">
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="{{ route('incidents.index') }}"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                        Back </a>
                </div>
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('incidents.edit', $incident) }}"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Edit </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
