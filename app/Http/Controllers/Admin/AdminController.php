<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard
     */
    public function dashboard()
    {
        $stats = [
            'total_users' => \App\Models\User::count(),
            'admin_users' => \App\Models\User::where('role', 'admin')->count(),
            'regular_users' => \App\Models\User::where('role', 'user')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }

    /**
     * Display users management page
     */
    public function users()
    {
        $users = \App\Models\User::paginate(15);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Update user role
     */
    public function updateUserRole(Request $request, \App\Models\User $user)
    {
        $request->validate([
            'role' => 'required|in:user,admin'
        ]);

        $user->update(['role' => $request->role]);

        return redirect()->back()->with('success', 'User role updated successfully.');
    }
}
