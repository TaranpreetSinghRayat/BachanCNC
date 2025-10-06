<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                <p class="text-gray-600">Welcome back, {{ Auth::user()->name }}! Here's what's happening with your business today.</p>
            </div>
            <div class="flex items-center space-x-3">
                <div class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ now()->format('M d, Y') }}
                </div>
            </div>
        </div>
    </x-slot>

    <div class="space-y-6">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Users -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-medium text-gray-600">Total Users</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $stats['total_users'] }}</p>
                        <p class="text-xs text-green-600 font-medium">+12% from last month</p>
                    </div>
                </div>
            </div>

            <!-- Admin Users -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-red-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-medium text-gray-600">Administrators</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $stats['admin_users'] }}</p>
                        <p class="text-xs text-gray-500 font-medium">Full access users</p>
                    </div>
                </div>
            </div>

            <!-- Content Editors -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-medium text-gray-600">Content Editors</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $stats['editor_users'] }}</p>
                        <p class="text-xs text-gray-500 font-medium">Content managers</p>
                    </div>
                </div>
            </div>

            <!-- Regular Users -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-medium text-gray-600">Regular Users</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $stats['regular_users'] }}</p>
                        <p class="text-xs text-gray-500 font-medium">Standard access</p>
                    </div>
                </div>
            </div>
        </div>

            <!-- Welcome Message -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Welcome to the Admin Panel</h3>
                    <p class="text-gray-600 mb-4">
                        You are logged in as an administrator. From here you can manage users, content, and system settings.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border rounded-lg p-4">
                            <h4 class="font-semibold text-gray-800 mb-2">User Management</h4>
                            <p class="text-gray-600 text-sm mb-3">Manage user accounts and permissions.</p>
                            <a href="{{ route('admin.users.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Manage Users
                            </a>
                        </div>
                        
                        <div class="border rounded-lg p-4">
                            <h4 class="font-semibold text-gray-800 mb-2">System Status</h4>
                            <p class="text-gray-600 text-sm mb-3">System is running normally.</p>
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                                <span class="text-sm text-green-600 font-medium">All systems operational</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
