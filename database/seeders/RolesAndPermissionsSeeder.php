<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions
        $permissions = [
            // User Management
            ['name' => 'users.view', 'display_name' => 'View Users', 'description' => 'Can view user list', 'group' => 'users'],
            ['name' => 'users.create', 'display_name' => 'Create Users', 'description' => 'Can create new users', 'group' => 'users'],
            ['name' => 'users.edit', 'display_name' => 'Edit Users', 'description' => 'Can edit user details', 'group' => 'users'],
            ['name' => 'users.delete', 'display_name' => 'Delete Users', 'description' => 'Can delete users', 'group' => 'users'],
            ['name' => 'users.manage-roles', 'display_name' => 'Manage User Roles', 'description' => 'Can assign/remove roles from users', 'group' => 'users'],

            // Role & Permission Management
            ['name' => 'roles.view', 'display_name' => 'View Roles', 'description' => 'Can view roles list', 'group' => 'roles'],
            ['name' => 'roles.create', 'display_name' => 'Create Roles', 'description' => 'Can create new roles', 'group' => 'roles'],
            ['name' => 'roles.edit', 'display_name' => 'Edit Roles', 'description' => 'Can edit role details', 'group' => 'roles'],
            ['name' => 'roles.delete', 'display_name' => 'Delete Roles', 'description' => 'Can delete roles', 'group' => 'roles'],
            ['name' => 'permissions.manage', 'display_name' => 'Manage Permissions', 'description' => 'Can assign/remove permissions from roles', 'group' => 'roles'],

            // Blog Management
            ['name' => 'blog.view', 'display_name' => 'View Blog Posts', 'description' => 'Can view blog posts', 'group' => 'blog'],
            ['name' => 'blog.create', 'display_name' => 'Create Blog Posts', 'description' => 'Can create new blog posts', 'group' => 'blog'],
            ['name' => 'blog.edit', 'display_name' => 'Edit Blog Posts', 'description' => 'Can edit blog posts', 'group' => 'blog'],
            ['name' => 'blog.edit-own', 'display_name' => 'Edit Own Blog Posts', 'description' => 'Can edit own blog posts only', 'group' => 'blog'],
            ['name' => 'blog.delete', 'display_name' => 'Delete Blog Posts', 'description' => 'Can delete blog posts', 'group' => 'blog'],
            ['name' => 'blog.publish', 'display_name' => 'Publish Blog Posts', 'description' => 'Can publish/unpublish blog posts', 'group' => 'blog'],
            ['name' => 'blog.categories', 'display_name' => 'Manage Blog Categories', 'description' => 'Can manage blog categories', 'group' => 'blog'],

            // Page Management
            ['name' => 'pages.view', 'display_name' => 'View Pages', 'description' => 'Can view pages', 'group' => 'pages'],
            ['name' => 'pages.create', 'display_name' => 'Create Pages', 'description' => 'Can create new pages', 'group' => 'pages'],
            ['name' => 'pages.edit', 'display_name' => 'Edit Pages', 'description' => 'Can edit pages', 'group' => 'pages'],
            ['name' => 'pages.delete', 'display_name' => 'Delete Pages', 'description' => 'Can delete pages', 'group' => 'pages'],

            // Product Management
            ['name' => 'products.view', 'display_name' => 'View Products', 'description' => 'Can view products', 'group' => 'products'],
            ['name' => 'products.create', 'display_name' => 'Create Products', 'description' => 'Can create new products', 'group' => 'products'],
            ['name' => 'products.edit', 'display_name' => 'Edit Products', 'description' => 'Can edit products', 'group' => 'products'],
            ['name' => 'products.delete', 'display_name' => 'Delete Products', 'description' => 'Can delete products', 'group' => 'products'],

            // Lead Management
            ['name' => 'leads.view', 'display_name' => 'View Leads', 'description' => 'Can view leads', 'group' => 'leads'],
            ['name' => 'leads.edit', 'display_name' => 'Edit Leads', 'description' => 'Can edit lead status', 'group' => 'leads'],
            ['name' => 'leads.delete', 'display_name' => 'Delete Leads', 'description' => 'Can delete leads', 'group' => 'leads'],

            // Media Management
            ['name' => 'media.view', 'display_name' => 'View Media', 'description' => 'Can view media library', 'group' => 'media'],
            ['name' => 'media.upload', 'display_name' => 'Upload Media', 'description' => 'Can upload media files', 'group' => 'media'],
            ['name' => 'media.delete', 'display_name' => 'Delete Media', 'description' => 'Can delete media files', 'group' => 'media'],

            // System Settings
            ['name' => 'settings.view', 'display_name' => 'View Settings', 'description' => 'Can view system settings', 'group' => 'settings'],
            ['name' => 'settings.edit', 'display_name' => 'Edit Settings', 'description' => 'Can edit system settings', 'group' => 'settings'],

            // Admin Dashboard
            ['name' => 'admin.access', 'display_name' => 'Access Admin Panel', 'description' => 'Can access admin panel', 'group' => 'admin'],
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                ['name' => $permission['name']],
                $permission
            );
        }

        // Create Roles
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Full system access with all permissions',
                'permissions' => 'all' // Special case for all permissions
            ],
            [
                'name' => 'editor',
                'display_name' => 'Editor',
                'description' => 'Can manage content (blog, pages, products) but not users or system settings',
                'permissions' => [
                    'admin.access',
                    'blog.view', 'blog.create', 'blog.edit', 'blog.delete', 'blog.publish', 'blog.categories',
                    'pages.view', 'pages.create', 'pages.edit', 'pages.delete',
                    'products.view', 'products.create', 'products.edit', 'products.delete',
                    'leads.view', 'leads.edit',
                    'media.view', 'media.upload', 'media.delete',
                ]
            ],
            [
                'name' => 'author',
                'display_name' => 'Author',
                'description' => 'Can create and edit own blog posts',
                'permissions' => [
                    'admin.access',
                    'blog.view', 'blog.create', 'blog.edit-own',
                    'media.view', 'media.upload',
                ]
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
                'description' => 'Regular user with basic access',
                'permissions' => []
            ],
        ];

        foreach ($roles as $roleData) {
            $role = Role::updateOrCreate(
                ['name' => $roleData['name']],
                [
                    'display_name' => $roleData['display_name'],
                    'description' => $roleData['description'],
                    'is_active' => true,
                ]
            );

            // Assign permissions to role
            if ($roleData['permissions'] === 'all') {
                // Admin gets all permissions
                $allPermissions = Permission::all();
                $role->permissions()->sync($allPermissions->pluck('id'));
            } elseif (!empty($roleData['permissions'])) {
                $permissions = Permission::whereIn('name', $roleData['permissions'])->get();
                $role->permissions()->sync($permissions->pluck('id'));
            }
        }

        // Assign admin role to the specified user
        $adminUser = User::where('email', 'fear126@live.com')->first();
        if ($adminUser) {
            $adminRole = Role::where('name', 'admin')->first();
            $adminUser->roles()->sync([$adminRole->id]);
        }
    }
}
