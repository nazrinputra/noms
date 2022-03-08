<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="d-flex justify-content-start font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Incident') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Existing Incident</h3>
                        <p class="mt-1 text-sm text-gray-600">Please change any details in the form to modify the
                            incident.</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('incidents.update', $incident) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="subject"
                                            class="block text-sm font-medium text-gray-700">Subject</label>
                                        <input type="text" name="subject" id="subject" value="{{ $incident->subject }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        Description </label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" rows="3"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                            placeholder="Brief description for the incidents.">{{ $incident->description }}</textarea>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="category"
                                        class="block text-sm font-medium text-gray-700">Category</label>
                                    <select id="category" name="category"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option disabled>Select One</option>
                                        <option>Failure</option>
                                        <option>Warning</option>
                                        <option>Critical</option>
                                    </select>
                                </div>

                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="product"
                                            class="block text-sm font-medium text-gray-700">Product</label>
                                        <input type="text" name="product" id="product" value="{{ $incident->product }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
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
