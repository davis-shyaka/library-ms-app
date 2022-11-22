<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions - user
        Permission::firstOrCreate(['name' => 'view books']);
        Permission::firstOrCreate(['name' => 'view authors']);
        Permission::firstOrCreate(['name' => 'view categories']);


        // create permissions - book
        Permission::firstOrCreate(['name' => 'add book']);
        Permission::firstOrCreate(['name' => 'update book']);
        Permission::firstOrCreate(['name' => 'delete book']);
        Permission::firstOrCreate(['name' => 'lend book']);
        // Permission::firstOrCreate(['name' => 'view book']);

        // create permissions - author
        Permission::firstOrCreate(['name' => 'add author']);
        Permission::firstOrCreate(['name' => 'update author']);
        Permission::firstOrCreate(['name' => 'delete author']);
        // Permission::firstOrCreate(['name' => 'view author']);

        // create permissions - category
        Permission::firstOrCreate(['name' => 'add category']);
        Permission::firstOrCreate(['name' => 'update category']);
        Permission::firstOrCreate(['name' => 'delete category']);
        // Permission::firstOrCreate(['name' => 'view category']);

        // create roles and assign created permissions

        // this can be done as separate statements
        // $role = Role::create(['name' => 'writer']);
        // $role->givePermissionTo('edit articles');

        // or may be done by chaining
        $role = Role::firstOrCreate(['name' => 'student'])
            ->givePermissionTo([
                'view books',
                'view authors',
                'view categories',
            ]);

        $role = Role::firstOrCreate(['name' => 'librarian'])
            ->givePermissionTo([
                'view books',
                'view authors',
                'view categories',
                'add book',
                'add author',
                'add category',
                'lend book'
            ]);

        $role = Role::firstOrCreate(['name' => 'director'])
            ->givePermissionTo(
                [
                    'view books',
                    'view authors',
                    'view categories',
                    'add book',
                    'update book',
                    'lend book',
                    'delete book',
                    'add author',
                    'update author',
                    'delete author',
                    'add category',
                    'update category',
                    'delete category',
                ]
            );

        $role = Role::firstOrCreate(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
