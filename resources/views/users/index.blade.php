<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="d-flex justify-content-start font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Users') }}
            </h2>
            <div class="inline-flex rounded-md shadow">
                <a href="{{ route('users.create') }}"
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
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left dark:text-white text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left dark:text-white text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Roles</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                <form action="{{ route('users.update', $user) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $user->name }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{
                                            $user->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <select id="role_id" name="role_id"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option disabled>Select One</option>
                                                @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" @if ($user->hasRole($role))
                                                    selected
                                                    @endif>{{ ucwords($role->name) }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button type="submit"
                                                class="px-6 py-1 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Save</button>
                                        </td>
                                    </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
