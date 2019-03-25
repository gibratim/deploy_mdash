<?php

use App\User;
use Illuminate\Database\Seeder;
use jeremykenedy\LaravelRoles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Add Roles
         *
         */
        if (Role::where('slug', '=', 'admin')->first() === null) {
            $adminRole = Role::create([
                'name'        => 'Admin',
                'slug'        => 'admin',
                'description' => 'Admin Role',
                'level'       => 5,
            ]);
        }

        if (Role::where('slug', '=', 'team')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Team',
                'slug'        => 'team',
                'description' => 'Team Member',
                'level'       => 4,
            ]);
        }

        if (Role::where('slug', '=', 'researcher')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Researcher',
                'slug'        => 'researcher',
                'description' => 'Research Member',
                'level'       => 3,
            ]);
        }

        if (Role::where('slug', '=', 'investor')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Investor',
                'slug'        => 'investor',
                'description' => 'Investing Member',
                'level'       => 2,
            ]);
        }


        if (Role::where('slug', '=', 'user')->first() === null) {
            $userRole = Role::create([
                'name'        => 'User',
                'slug'        => 'user',
                'description' => 'User Role',
                'level'       => 1,
            ]);
        }

        
        if (Role::where('slug', '=', 'unverified')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Unverified',
                'slug'        => 'unverified',
                'description' => 'Unverified Role',
                'level'       => 0,
            ]);
        }
    }
}
