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
            'roles' => 'i,sh,s,u,a,d',
            'users' => 'i,sh,s,u,a,d',
            "units" => 'i,sh,s,u,a,d',
            "brands" => 'i,sh,s,u,a,d',

            "store_types" => 'i,sh,s,u,a,d',
            "sizes" => 'i,sh,s,u,a,d',
            "stores" => 'i,sh,s,u,a,d',
            "categories" => 'i,sh,s,u,a,d',
            "products" => 'i,sh,s,u,a,d',
            'additions' => 'i,sh,s,u,a,d',
            'wishlists'=>'i,sh',
            'home' => 'i',
            "cities" => 'i,sh,s,u,a,d',
            "regions" => 'i,sh,s,u,a,d',
            "settings" => 'i,sh,s,u,a,d',


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
        'd' => 'destroy',
        'a'=>'active',
        'sh' => 'show',
    ],
];
