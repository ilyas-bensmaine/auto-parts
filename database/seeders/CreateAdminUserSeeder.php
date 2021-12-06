<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@autoparts.com',
            'is_admin' => true,
            'password' => bcrypt('password')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        // simple user
        $user = User::create([
            'name' => 'User2',
            'email' => 'user2@autoparts.com',
            'is_admin' => false,
            'password' => bcrypt('password')
        ]);
        $role = Role::create(['name' => 'Simple-user']);
        $user->assignRole([$role->id]);
        $plan = app('rinvex.subscriptions.plan')->find(1);
        $user->newSubscription('main', $plan);
    }
}
