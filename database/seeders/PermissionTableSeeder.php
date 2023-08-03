<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        //Permissions
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'programa-list',
            'programa-create',
            'programa-edit',
            'programa-delete',
            'aprendiz-list',
            'aprendiz-create',
            'aprendiz-edit',
            'aprendiz-delete',
            'comite-list',
            'comite-create',
            'comite-edit',
            'comite-delete',
            'grupo-list',
            'grupo-create',
            'grupo-edit',
            'grupo-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
