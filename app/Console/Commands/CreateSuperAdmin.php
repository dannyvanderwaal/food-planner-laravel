<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateSuperAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-super-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a super admin user interactively';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter user\'s name');
        $email = $this->ask('Enter user\'s email');
        $password = $this->secret('Enter user\'s password');

        // Create the user
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        // Assign the 'super-admin' role to the user
        $role = Role::where('name', 'super-admin')->first();
        if ($role) {
            $user->assignRole($role);
            $this->info('User created with super-admin role!');
        } else {
            $this->error('Super-admin role not found.');
        }
    }
}
