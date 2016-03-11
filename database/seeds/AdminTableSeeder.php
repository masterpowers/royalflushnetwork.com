<?php

use Illuminate\Database\Seeder;
use App\User;



class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@mydomain.com';
        $user->password = bcrypt('admin');
        $user->verified = true;
        $user->save();
        // Assign Abilities to Admin
        Bouncer::allow('admin')->to(['ban-users', 'add-products', 'edit-products', 'show-products', 'delete-products', 'add-category', 'edit-category', 'show-category', 'delete-category']);
        // Assign Abilities to customer
        Bouncer::allow('customer')->to(['edit-profile', 'add-products', 'edit-products', 'show-products', 'delete-products', 'add-category', 'edit-category', 'show-category', 'delete-category']);
        // Assign User a Role
        Bouncer::assign('admin')->to($user);
    }
}
