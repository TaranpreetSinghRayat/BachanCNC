<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold">All Users</h3>
                        <p class="text-gray-600">Manage user accounts and their roles.</p>
                    </div>

                    <!-- Users Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        User
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Joined
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center">
                                                        <span class="text-sm font-medium text-gray-700">
                                                            {{ strtoupper(substr($user->name, 0, 2)) }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                                    <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($user->roles->count() > 0)
                                                @foreach($user->roles as $role)
                                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full mr-1 mb-1
                                                        @if($role->name === 'admin') bg-red-100 text-red-800
                                                        @elseif($role->name === 'editor') bg-purple-100 text-purple-800
                                                        @elseif($role->name === 'author') bg-yellow-100 text-yellow-800
                                                        @else bg-green-100 text-green-800
                                                        @endif">
                                                        {{ $role->display_name }}
                                                    </span>
                                                @endforeach
                                            @else
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                                    No Role
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->created_at->format('M d, Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            @if($user->id !== auth()->id())
                                                <form method="POST" action="{{ route('admin.users.update-role', $user) }}" class="inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="role_id" onchange="this.form.submit()"
                                                            class="text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                                                        <option value="">Select Role</option>
                                                        @foreach($roles as $role)
                                                            <option value="{{ $role->id }}"
                                                                {{ $user->roles->contains('id', $role->id) ? 'selected' : '' }}>
                                                                {{ $role->display_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </form>
                                            @else
                                                <span class="text-gray-400 text-sm">Current User</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                            No users found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    @if($users->hasPages())
                        <div class="mt-6">
                            {{ $users->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
