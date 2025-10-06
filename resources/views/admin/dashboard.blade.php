<x-admin-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
            <p class="text-sm text-gray-600">Welcome back, {{ Auth::user()->name }}! Here's your business overview.</p>
        </div>
    </x-slot>

    <div class="space-y-6">
        <!-- Stats Overview - Colorful Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Users - Purple Gradient -->
            <div class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl p-6 text-white shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-sm font-medium">Total Users</p>
                        <p class="text-3xl font-bold mt-2">{{ $stats['total_users'] }}</p>
                        <div class="flex items-center mt-2">
                            <svg class="w-4 h-4 text-green-300 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-green-300 text-sm font-medium">+12%</span>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-xl p-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Revenue - Blue Gradient -->
            <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 text-white shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm font-medium">Monthly Revenue</p>
                        <p class="text-3xl font-bold mt-2">$24,500</p>
                        <div class="flex items-center mt-2">
                            <svg class="w-4 h-4 text-green-300 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-green-300 text-sm font-medium">+8.2%</span>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-xl p-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Orders - Orange Gradient -->
            <div class="bg-gradient-to-br from-orange-400 to-orange-600 rounded-2xl p-6 text-white shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-orange-100 text-sm font-medium">Total Orders</p>
                        <p class="text-3xl font-bold mt-2">1,847</p>
                        <div class="flex items-center mt-2">
                            <svg class="w-4 h-4 text-green-300 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-green-300 text-sm font-medium">+15.3%</span>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-xl p-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Growth - Red Gradient -->
            <div class="bg-gradient-to-br from-red-500 to-red-700 rounded-2xl p-6 text-white shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-red-100 text-sm font-medium">Growth Rate</p>
                        <p class="text-3xl font-bold mt-2">23.5%</p>
                        <div class="flex items-center mt-2">
                            <svg class="w-4 h-4 text-green-300 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-green-300 text-sm font-medium">+5.1%</span>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-xl p-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics Chart -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">Analytics Overview</h3>
                    <p class="text-gray-600 text-sm">Monthly performance metrics</p>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1 text-sm bg-blue-100 text-blue-700 rounded-lg font-medium">7 Days</button>
                    <button class="px-3 py-1 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">30 Days</button>
                    <button class="px-3 py-1 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">90 Days</button>
                </div>
            </div>

            <!-- Chart Container -->
            <div class="relative h-80 bg-gray-50 rounded-xl p-4">
                <!-- Simulated Chart with SVG -->
                <svg class="w-full h-full" viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg">
                    <!-- Grid Lines -->
                    <defs>
                        <pattern id="grid" width="80" height="30" patternUnits="userSpaceOnUse">
                            <path d="M 80 0 L 0 0 0 30" fill="none" stroke="#e5e7eb" stroke-width="1"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#grid)" />

                    <!-- Chart Area -->
                    <path d="M 50 250 Q 150 200 200 180 T 350 160 T 500 140 T 650 120 T 750 100"
                          fill="none"
                          stroke="url(#gradient)"
                          stroke-width="3"/>

                    <!-- Gradient Definition -->
                    <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#8b5cf6;stop-opacity:1" />
                            <stop offset="50%" style="stop-color:#3b82f6;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#10b981;stop-opacity:1" />
                        </linearGradient>

                        <linearGradient id="areaGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color:#8b5cf6;stop-opacity:0.3" />
                            <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:0.05" />
                        </linearGradient>
                    </defs>

                    <!-- Area Fill -->
                    <path d="M 50 250 Q 150 200 200 180 T 350 160 T 500 140 T 650 120 T 750 100 L 750 280 L 50 280 Z"
                          fill="url(#areaGradient)"/>

                    <!-- Data Points -->
                    <circle cx="50" cy="250" r="4" fill="#8b5cf6"/>
                    <circle cx="200" cy="180" r="4" fill="#3b82f6"/>
                    <circle cx="350" cy="160" r="4" fill="#10b981"/>
                    <circle cx="500" cy="140" r="4" fill="#f59e0b"/>
                    <circle cx="650" cy="120" r="4" fill="#ef4444"/>
                    <circle cx="750" cy="100" r="4" fill="#8b5cf6"/>
                </svg>

                <!-- Chart Labels -->
                <div class="absolute bottom-2 left-0 right-0 flex justify-between px-4 text-xs text-gray-500">
                    <span>Jan</span>
                    <span>Feb</span>
                    <span>Mar</span>
                    <span>Apr</span>
                    <span>May</span>
                    <span>Jun</span>
                </div>
            </div>

            <!-- Chart Stats -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-6 pt-6 border-t border-gray-200">
                <div class="text-center">
                    <p class="text-2xl font-bold text-gray-900">2.4k</p>
                    <p class="text-xs text-gray-500">New Users</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-gray-900">1.8k</p>
                    <p class="text-xs text-gray-500">Active Users</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-gray-900">847</p>
                    <p class="text-xs text-gray-500">Page Views</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-gray-900">23.5%</p>
                    <p class="text-xs text-gray-500">Bounce Rate</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-gray-900">4.2m</p>
                    <p class="text-xs text-gray-500">Total Revenue</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions & Recent Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Quick Actions -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="{{ route('admin.users.index') }}" class="flex flex-col items-center p-4 rounded-xl bg-gradient-to-br from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 transition-all duration-200 group">
                            <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-900 text-center">Users</span>
                        </a>

                        <a href="#" class="flex flex-col items-center p-4 rounded-xl bg-gradient-to-br from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 transition-all duration-200 group">
                            <div class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-900 text-center">Blog</span>
                        </a>

                        <a href="#" class="flex flex-col items-center p-4 rounded-xl bg-gradient-to-br from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 transition-all duration-200 group">
                            <div class="w-10 h-10 bg-purple-500 rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-900 text-center">Products</span>
                        </a>

                        <a href="#" class="flex flex-col items-center p-4 rounded-xl bg-gradient-to-br from-orange-50 to-orange-100 hover:from-orange-100 hover:to-orange-200 transition-all duration-200 group">
                            <div class="w-10 h-10 bg-orange-500 rounded-xl flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-900 text-center">Settings</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recent Activity & System Status -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Recent Activity -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Recent Activity</h3>
                        <button class="text-sm text-blue-600 hover:text-blue-700 font-medium">View All</button>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 p-3 rounded-xl bg-blue-50 border border-blue-100">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">New user registered</p>
                                <p class="text-xs text-gray-500">John Doe joined the platform</p>
                            </div>
                            <span class="text-xs text-gray-400">2m ago</span>
                        </div>

                        <div class="flex items-center space-x-3 p-3 rounded-xl bg-green-50 border border-green-100">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">New order received</p>
                                <p class="text-xs text-gray-500">Order #1847 - $2,450</p>
                            </div>
                            <span class="text-xs text-gray-400">15m ago</span>
                        </div>

                        <div class="flex items-center space-x-3 p-3 rounded-xl bg-purple-50 border border-purple-100">
                            <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">Blog post published</p>
                                <p class="text-xs text-gray-500">"Manufacturing Trends 2024"</p>
                            </div>
                            <span class="text-xs text-gray-400">1h ago</span>
                        </div>

                        <div class="flex items-center space-x-3 p-3 rounded-xl bg-orange-50 border border-orange-100">
                            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">Product updated</p>
                                <p class="text-xs text-gray-500">CNC Machine X1 specifications</p>
                            </div>
                            <span class="text-xs text-gray-400">3h ago</span>
                        </div>
                    </div>
                </div>

                <!-- System Status -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">System Health</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center justify-between p-4 bg-green-50 rounded-xl border border-green-100">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-green-900">Server</p>
                                    <p class="text-xs text-green-700">Online</p>
                                </div>
                            </div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-green-50 rounded-xl border border-green-100">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7c0 2.21-3.582 4-8 4s-8-1.79-8-4z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-green-900">Database</p>
                                    <p class="text-xs text-green-700">Connected</p>
                                </div>
                            </div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-xl border border-blue-100">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-blue-900">Performance</p>
                                    <p class="text-xs text-blue-700">Excellent</p>
                                </div>
                            </div>
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-purple-50 rounded-xl border border-purple-100">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-purple-900">Security</p>
                                    <p class="text-xs text-purple-700">Protected</p>
                                </div>
                            </div>
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
