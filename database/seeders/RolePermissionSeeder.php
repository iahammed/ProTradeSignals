<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'      => 'owner',
                'label'     => 'owner',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'manager',
                'label'     => 'Manager',
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('roles')->insert($roles);

        $permissions = [
            [
                'name'      => 'read_role',
                'label'     => 'Read a role',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'add_role',
                'label'     => 'Add a role',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'update_role',
                'label'     => 'Update role',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'delete_role',
                'label'     => 'Delete role',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'read_permission',
                'label'     => 'Read a permission',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'add_permission',
                'label'     => 'Add a permission',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'update_permission',
                'label'     => 'Update permission',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'delete_permission',
                'label'     => 'Delete permission',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'read_package',
                'label'     => 'Read a package',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'add_package',
                'label'     => 'Add a package',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'update_package',
                'label'     => 'Update package',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'delete_package',
                'label'     => 'Delete package',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'read_user',
                'label'     => 'Read a user',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'add_user',
                'label'     => 'Add a user',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'update_user',
                'label'     => 'Update user',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'delete_user',
                'label'     => 'Delete user',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'read_transaction',
                'label'     => 'Read a transaction',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'add_transaction',
                'label'     => 'Add a transaction',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'update_transaction',
                'label'     => 'Update transaction',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'delete_transaction',
                'label'     => 'Delete transaction',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'read_agreement',
                'label'     => 'Read a agreement',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'add_agreement',
                'label'     => 'Add a agreement',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'update_agreement',
                'label'     => 'Update agreement',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'delete_agreement',
                'label'     => 'Delete agreement',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'read_payment',
                'label'     => 'Read a payment',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'add_payment',
                'label'     => 'Add a payment',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'update_payment',
                'label'     => 'Update payment',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'delete_payment',
                'label'     => 'Delete payment',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'system',
                'label'     => 'System management',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'pusher',
                'label'     => 'Pusher manager',
                'created_at' => Carbon::now(),
            ],
            [
                'name'      => 'backoffice',
                'label'     => 'Backoffice manager',
                'created_at' => Carbon::now(),
            ]
            
        ];
        DB::table('permissions')->insert($permissions);

        $permission_role = [
            [
                'permission_id' => 1,
                'role_id'       => 1
            ],
            [
                'permission_id' => 2,
                'role_id'       => 1
            ],
            [
                'permission_id' => 3,
                'role_id'       => 1
            ],
            [
                'permission_id' => 4,
                'role_id'       => 1
            ],
            [
                'permission_id' => 5,
                'role_id'       => 1
            ],
            [
                'permission_id' => 6,
                'role_id'       => 1
            ],
            [
                'permission_id' => 7,
                'role_id'       => 1
            ],
            [
                'permission_id' => 8,
                'role_id'       => 1
            ],
            [
                'permission_id' => 9,
                'role_id'       => 1
            ],
            [
                'permission_id' => 10,
                'role_id'       => 1
            ],
            [
                'permission_id' => 11,
                'role_id'       => 1
            ],
            [
                'permission_id' => 12,
                'role_id'       => 1
            ],
            [
                'permission_id' => 13,
                'role_id'       => 1
            ],
            [
                'permission_id' => 14,
                'role_id'       => 1
            ],
            [
                'permission_id' => 15,
                'role_id'       => 1
            ],
            [
                'permission_id' => 16,
                'role_id'       => 1
            ],
            [
                'permission_id' => 17,
                'role_id'       => 1
            ],
            [
                'permission_id' => 18,
                'role_id'       => 1
            ],
            [
                'permission_id' => 19,
                'role_id'       => 1
            ],
            [
                'permission_id' => 20,
                'role_id'       => 1
            ],
            [
                'permission_id' => 21,
                'role_id'       => 1
            ],
            [
                'permission_id' => 22,
                'role_id'       => 1
            ],
            [
                'permission_id' => 23,
                'role_id'       => 1
            ],
            [
                'permission_id' => 24,
                'role_id'       => 1
            ],
            [
                'permission_id' => 25,
                'role_id'       => 1
            ],
            [
                'permission_id' => 26,
                'role_id'       => 1
            ],
            [
                'permission_id' => 27,
                'role_id'       => 1
            ],
            [
                'permission_id' => 28,
                'role_id'       => 1
            ],
            [
                'permission_id' => 29,
                'role_id'       => 1
            ],
            [
                'permission_id' => 30,
                'role_id'       => 1
            ],
            [
                'permission_id' => 31,
                'role_id'       => 1
            ]

        ];
        DB::table('permission_role')->insert($permission_role);
        
        $role_user = [
            [
                'role_id'   => 1,
                'user_id'   => 1
            ]
        ];
        DB::table('role_user')->insert($role_user);

        $plans = [
            [
                'name' => 'Trial',
                'description' => 'Trial',
                'price' => 0.00
            ],
            [
                'name' => 'Monthly',
                'description' => 'Monthly',
                'price' => 10.00
            ],
            [                
                'name' => 'Yearly',
                'description' => 'Yearly',
                'price' => 100.00
            ]
        ];

        DB::table('plans')->insert($plans);


    }
}
