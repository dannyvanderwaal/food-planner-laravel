<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the different application roles
        $this->createRoles();

        // Create the different application permissions
        $this->createPermissions();

        // Assign permissions to the different roles
        $this->assignPermissions();
    }

    /**
     * Create the different application roles.
     * @return void
     */
    private function createRoles(): void
    {
        // Default application roles
        // TODO: Move the roles to config constants to fix possible human errors
        $roles = ['super-admin', 'admin', 'moderator', 'user'];

        foreach ($roles as $role) {
            $existingRole = Role::where('name', $role)->first();
            if (!$existingRole) { // Check if the role exists before creating it
                Role::create(['name' => $role]);
            }
        }
    }

    /**
     * Create the different application permissions
     * @return void
     */
    private function createPermissions(): void
    {
        // Default application permissions
        // TODO: Move the permissions to config constants to fix possible human errors
        $permissions[] = 'force delete';

        // Shops TODO: move the permissions to separate classes
        $permissions[] = 'view shops';
        $permissions[] = 'create shops';
        $permissions[] = 'edit shops';
        $permissions[] = 'destroy shops';
        $permissions[] = 'restore shops';

        foreach ($permissions as $permission) {
            $existingPermission = Permission::where('name', $permission)->first();
            if (!$existingPermission) {
                Permission::create(['name' => $permission]);
            }
        }
    }

    /**
     * Assign permissions to the different roles
     * @return void
     */
    private function assignPermissions(): void
    {
        // Default application permissions
        // TODO: Move the permissions to config constants to fix possible human errors
        $permissions[] = 'force delete';

        // Shops TODO: move the permissions to separate classes
        $permissions[] = 'view shops';
        $permissions[] = 'create shops';
        $permissions[] = 'edit shops';
        $permissions[] = 'destroy shops';
        $permissions[] = 'restore shops';

        // TODO: Assign permissions to each role in different functions
        $role = Role::where('name', 'super-admin')->first();

        foreach ($permissions as $permission) {
            $existingPermission = Permission::where('name', $permission)->first();

            if (!$existingPermission) {
                $existingPermission = Permission::create(['name' => $permission]);
            }

            // Check if the role does not have this permission
            if (!$role->hasPermissionTo($existingPermission)) {
                $role->givePermissionTo($existingPermission);
            }
        }
    }
}




