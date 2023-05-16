<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                @if(session()->has('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative m-4" role="alert">
                        <strong class="font-bold">{{ session('message') }}</strong>
                    </div>
                @endif

                <div class="flex justify-between items-center px-6 py-4">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Roles') }}
                    </h2>
                    <a href="{{ route('roles.create') }}" class="btn btn-primary">Create Role</a>
                </div>

                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900" scope="col">ID</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900" scope="col">Role Name</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900" scope="col">Status</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900" scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td scope="row" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $role->id }}</th>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $role->name }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $role->status ? 'Active' : 'Inactive' }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Edit</a>
                                    {{-- <a href="{{ route('roles.delete', $role->id) }}" class="btn btn-danger">Delete</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </div>
</x-app-layout>
