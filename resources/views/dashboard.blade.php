<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">{{ __("You're logged in!") }}</h3>

                    <p class="text-gray-600 mb-4">Welcome to your dashboard. Here you can manage your profile and access various features.</p>

                    @if(auth()->user()->isAdmin())
                        <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-red-800">Admin Access Available</h4>
                                    <p class="text-sm text-red-700 mt-1">You have administrator privileges.</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Access Admin Panel
                                </a>
                            </div>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border rounded-lg p-4">
                            <h4 class="font-semibold text-gray-800 mb-2">Profile Settings</h4>
                            <p class="text-gray-600 text-sm mb-3">Update your account information and preferences.</p>
                            <a href="{{ route('profile.edit') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                Edit Profile →
                            </a>
                        </div>

                        <div class="border rounded-lg p-4">
                            <h4 class="font-semibold text-gray-800 mb-2">Account Status</h4>
                            <p class="text-gray-600 text-sm mb-3">Your account is active and verified.</p>
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                                <span class="text-sm text-green-600 font-medium">Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
