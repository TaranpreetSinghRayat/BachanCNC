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
            'admin_users' => \App\Models\User::whereHas('roles', function($query) {
                $query->where('name', 'admin');
            })->count(),
            'editor_users' => \App\Models\User::whereHas('roles', function($query) {
                $query->where('name', 'editor');
            })->count(),
            'author_users' => \App\Models\User::whereHas('roles', function($query) {
                $query->where('name', 'author');
            })->count(),
            'regular_users' => \App\Models\User::whereHas('roles', function($query) {
                $query->where('name', 'user');
            })->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }

    /**
     * Display users management page
     */
    public function users()
    {
        $users = \App\Models\User::with('roles')->paginate(15);
        $roles = \App\Models\Role::where('is_active', true)->get();
        return view('admin.users.index', compact('users', 'roles'));
    }

    /**
     * Update user role
     */
    public function updateUserRole(Request $request, \App\Models\User $user)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id'
        ]);

        $role = \App\Models\Role::findOrFail($request->role_id);
        $user->roles()->sync([$role->id]);

        return redirect()->back()->with('success', 'User role updated successfully.');
    }
}
