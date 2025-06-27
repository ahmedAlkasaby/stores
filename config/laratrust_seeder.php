<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'super_admin' => [
            'roles' => 'i,sh,s,u,d,a',
            'users' => 'i,sh,s,u,d,a',
            "units" => 'i,sh,s,u,d,a',
            "brands" => 'i,sh,s,u,d,a',
            "store_types" => 'i,sh,s,u,d,a',
            "sizes" => 'i,sh,s,u,d,a',
            "stores" => 'i,sh,s,u,d,a',
            "additions" => 'i,sh,s,u,d,a',
            "categories" => 'i,sh,s,u,d,a',
        ],
        'admin' => [
            'users' => 'i,sh,s,u,d,a',
            "store_types" => 'i,u,d',

        ],

    ],

    'permissions_map' => [
        'i' => 'index',
        's' => 'store',
        'u' => 'update',
        'd' => 'delete',
        'a'=>'active',
        'sh' => 'show',
    ],
];
