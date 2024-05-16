<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $newStaticpermission = [];

    public function getPermission($permissions, $menus)
    {
        if (array_key_exists('permission-name', $menus)) {
            array_push($this->newStaticpermission, ['name' => $menus['permission-name'], 'guard_name' => 'web']);
        } elseif (array_key_exists('sub_menus', $menus)) {

            $this->getPermissionOfSubMenu($permissions, $menus['sub_menus']);
        }
    }

    public function getPermissionOfSubMenu($permissions, $subMenu)
    {
        foreach ($subMenu as $key => $sub_menu) {
//            if($key==1) {
//                dd($permissions);
//            }
            $this->getPermission($permissions, $sub_menu);
        }
    }

    public function run()
    {
//        $permissions = [
//            [
//                'name' => 'list role-permissions',
//                'guard_name' => 'web'
//
//            ],
//            [
//                'name' => 'update role-permissions',
//                'guard_name' => 'web'
//
//            ],
//
//        ];
//        $newPermission=[];
//        foreach (config('frontend.mainMenu') as $menus) {
//            $this->getPermission($newPermission,$menus);
//
//        }
//       $newArray= array_merge($permissions,$this->newStaticpermission);
//        $newArray=array_map("unserialize", array_unique(array_map("serialize", $newArray)));
        $newPermission = [];
        foreach (config('available-permission.menusPermissions') as $permission) {
            if (is_array($permission)) {
                foreach ($permission as $key => $permissionValues) {
                    if (is_array($permissionValues)) {
                        foreach ($permissionValues as $subKey => $subPermission) {
                            array_push($newPermission, ['name' => $subKey, 'guard_name' => 'web']);
                        }
                    } else {
                        array_push($newPermission, ['name' => $key, 'guard_name' => 'web']);
                    }
                }
            }
        }
        $newArray = array_map("unserialize", array_unique(array_map("serialize", $newPermission)));
        foreach ($newArray as $data) {
            Permission::firstOrCreate($data);
        }
    }
}
