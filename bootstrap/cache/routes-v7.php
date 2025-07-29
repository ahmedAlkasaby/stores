<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/queries/explain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.queries.explain',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fa9de2wjsp1embhD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/regions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'regions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delivery_times' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_times.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/register/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xKmUMn9qmX0gBjjr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LBDMkbul4pNU4ZyG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::byDKNp3f7CDC3k8f',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DXEOEuGJxEcSVntS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/forget/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6r3zzxEw610VxyDV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/rest/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C2sU6Zz6YtWCvyUC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mjrZYnxMtq0XJIAy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wishlists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6xCPzgKet1SgZnNU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YP8jQsDsnA1urTZE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cart_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart_items.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cart_items.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uu1zpTAgIzP3kTPH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NFlZsU3t2vvv1Bz4',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/change/address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3jVVknBGkSx5Aj7M',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/change/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FuKRyE4vQuwpJSf0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/change/image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8XzxbRI5lyxhUqnQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/change/available' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H0sqlNG2r9qe84vs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/change/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eDAugCynQjVZAQr3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/change/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JQcGiNS7YGrtvMwC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v2/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HsiNaQffjVzKu7FH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.login.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.login.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.home.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sizes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sizes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/brands/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/units/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/additions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/additions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/cities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/regions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/regions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/contacts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/delivery_times' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.delivery_times.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.delivery_times.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/delivery_times/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.delivery_times.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/payments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.addresses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.addresses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/addresses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.addresses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sliders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sliders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sliders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sliders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/wishlists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.wishlists.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.wishlists.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/wishlists/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.wishlists.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/coupons/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.reviews.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/activity_logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.activity_logs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notifications.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notifications.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/notifications/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notifications.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/cache/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cache',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/api/(?|services/([^/]++)(*:106)|c(?|a(?|tegories/([^/]++)(*:139)|rt_items/([^/]++)(?|(*:167)))|ities/([^/]++)(*:191))|p(?|roducts/([^/]++)(*:220)|a(?|yments/([^/]++)(*:247)|ges/([^/]++)(*:267)))|regions/([^/]++)(*:293)|delivery_times/([^/]++)(*:324)|addresses/([^/]++)(?|(*:353))|orders/([^/]++)(?|(*:380)))|/dashboard/(?|p(?|ro(?|file/change_(?|lang/([^/]++)(*:441)|theme/([^/]++)(*:463))|ducts/(?|([^/]++)(?|(*:492)|/edit(*:505)|(*:513))|active/([^/]++)(*:537)|feature/([^/]++)(*:561)|returned/([^/]++)(*:586)))|a(?|ges/(?|([^/]++)(?|(*:618)|/edit(*:631)|(*:639))|active/([^/]++)(*:663))|yments/(?|([^/]++)(?|(*:693)|/edit(*:706)|(*:714))|active/([^/]++)(*:738))))|r(?|oles/([^/]++)(?|(*:769)|/edit(*:782)|(*:790))|egions/(?|([^/]++)(?|(*:820)|/edit(*:833)|(*:841))|restore/([^/]++)(*:866)|force_delete/([^/]++)(*:895)|active/([^/]++)(*:918)))|u(?|sers/(?|([^/]++)(?|(*:951)|/edit(*:964)|(*:972))|active/([^/]++)(*:996))|nits/(?|([^/]++)(?|(*:1024)|/edit(*:1038)|(*:1047))|restore/([^/]++)(*:1073)|force_delete/([^/]++)(*:1103)|toggle_active/([^/]++)(*:1134)))|s(?|e(?|rvices/(?|([^/]++)(?|(*:1174)|/edit(*:1188)|(*:1197))|active/([^/]++)(*:1222))|ttings/([^/]++)(?|(*:1250)|/edit(*:1264)|(*:1273)))|izes/(?|([^/]++)(?|(*:1303)|/edit(*:1317)|(*:1326))|restore/([^/]++)(*:1352)|force_delete/([^/]++)(*:1382)|active/([^/]++)(*:1406))|liders/(?|([^/]++)(?|(*:1437)|/edit(*:1451)|(*:1460))|active/([^/]++)(*:1485)))|brands/(?|([^/]++)(?|(*:1517)|/edit(*:1531)|(*:1540))|restore/([^/]++)(*:1566)|force_delete/([^/]++)(*:1596)|active/([^/]++)(*:1620))|add(?|itions/(?|([^/]++)(?|(*:1657)|/edit(*:1671)|(*:1680))|restore/([^/]++)(*:1706)|force_delete/([^/]++)(*:1736)|active/([^/]++)(*:1760))|resses/([^/]++)(?|(*:1788)|/edit(*:1802)|(*:1811)))|c(?|ategories/(?|([^/]++)(?|(*:1850)|/edit(*:1864)|(*:1873))|restore/([^/]++)(*:1899)|force_delete/([^/]++)(*:1929)|active/([^/]++)(*:1953))|ities/(?|([^/]++)(?|(*:1983)|/edit(*:1997)|(*:2006))|restore/([^/]++)(*:2032)|force_delete/([^/]++)(*:2062)|active/([^/]++)(*:2086))|o(?|ntacts/(?|([^/]++)(?|(*:2121)|/edit(*:2135)|(*:2144))|active/([^/]++)(*:2169))|upons/(?|([^/]++)(?|(*:2199)|/edit(*:2213)|(*:2222))|active/([^/]++)(*:2247)|finish/([^/]++)(*:2271))))|messages/send/([^/]++)(*:2305)|delivery_times/(?|([^/]++)(?|(*:2343)|/edit(*:2357)|(*:2366))|active/([^/]++)(*:2391))|wishlists/([^/]++)(?|(*:2422)|/edit(*:2436)|(*:2445))|orders/(?|([^/]++)(?|(*:2476)|/edit(*:2490)|(*:2499))|c(?|ancel/([^/]++)(*:2527)|hange_status/([^/]++)(*:2557)))|getCategoryByService/([^/]++)(*:2597))|/(.*)(*:2612))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.show',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      167 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart_items.show',
          ),
          1 => 
          array (
            0 => 'cart_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cart_items.destroy',
          ),
          1 => 
          array (
            0 => 'cart_item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities.show',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.show',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.show',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'regions.show',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery_times.show',
          ),
          1 => 
          array (
            0 => 'delivery_time',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.show',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.update',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.destroy',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profile.change.lang',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profile.change.theme',
          ),
          1 => 
          array (
            0 => 'theme',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.active',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.feature',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.products.returned',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      618 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pages.show',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pages.edit',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pages.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pages.destroy',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pages.active',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payments.show',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payments.edit',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payments.update',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payments.destroy',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payments.active',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.show',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.edit',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.update',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.destroy',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.restore',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.force_delete',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.regions.active',
          ),
          1 => 
          array (
            0 => 'region',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.active',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.show',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.edit',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.update',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.destroy',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.restore',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.force_delete',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.units.active',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.show',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.edit',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.update',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.destroy',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.active',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.show',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.edit',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.update',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.destroy',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.show',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.edit',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.update',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.destroy',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.restore',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1382 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.force_delete',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sizes.active',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sliders.show',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sliders.edit',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sliders.update',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sliders.destroy',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sliders.active',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.show',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.edit',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.restore',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.force_delete',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1620 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.active',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1657 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.show',
          ),
          1 => 
          array (
            0 => 'addition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1671 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.edit',
          ),
          1 => 
          array (
            0 => 'addition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.update',
          ),
          1 => 
          array (
            0 => 'addition',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.destroy',
          ),
          1 => 
          array (
            0 => 'addition',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.restore',
          ),
          1 => 
          array (
            0 => 'addition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.force_delete',
          ),
          1 => 
          array (
            0 => 'addition',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.additions.active',
          ),
          1 => 
          array (
            0 => 'addition',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.addresses.show',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.addresses.edit',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1811 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.addresses.update',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.addresses.destroy',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1899 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.restore',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.force_delete',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.active',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.show',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.edit',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.update',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.destroy',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2032 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.restore',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.force_delete',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.active',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.show',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.edit',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.update',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.destroy',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.seen',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.show',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.edit',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.update',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.destroy',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.active',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.coupons.finish',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contacts.sendMessage',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.delivery_times.show',
          ),
          1 => 
          array (
            0 => 'delivery_time',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.delivery_times.edit',
          ),
          1 => 
          array (
            0 => 'delivery_time',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.delivery_times.update',
          ),
          1 => 
          array (
            0 => 'delivery_time',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.delivery_times.destroy',
          ),
          1 => 
          array (
            0 => 'delivery_time',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.delivery_times.active',
          ),
          1 => 
          array (
            0 => 'delivery_time',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.wishlists.show',
          ),
          1 => 
          array (
            0 => 'wishlist',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.wishlists.edit',
          ),
          1 => 
          array (
            0 => 'wishlist',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.wishlists.update',
          ),
          1 => 
          array (
            0 => 'wishlist',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.wishlists.destroy',
          ),
          1 => 
          array (
            0 => 'wishlist',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.edit',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.cancel',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.change_status',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RXhDD9DOu5PIAXEF',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.queries.explain' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_debugbar/queries/explain',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'as' => 'debugbar.queries.explain',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fa9de2wjsp1embhD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fa9de2wjsp1embhD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'services.index',
        'uses' => 'App\\Http\\Controllers\\Api\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'services.show',
        'uses' => 'App\\Http\\Controllers\\Api\\ServiceController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\ServiceController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'categories.index',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'categories.show',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'products.index',
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'products.show',
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'cities.index',
        'uses' => 'App\\Http\\Controllers\\Api\\CityController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CityController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'cities.show',
        'uses' => 'App\\Http\\Controllers\\Api\\CityController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\CityController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'regions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'regions.index',
        'uses' => 'App\\Http\\Controllers\\Api\\RegionController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\RegionController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'regions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'regions.show',
        'uses' => 'App\\Http\\Controllers\\Api\\RegionController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\RegionController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'payments.index',
        'uses' => 'App\\Http\\Controllers\\Api\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\PaymentController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'payments.show',
        'uses' => 'App\\Http\\Controllers\\Api\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\PaymentController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_times.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/delivery_times',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'delivery_times.index',
        'uses' => 'App\\Http\\Controllers\\Api\\DeliveryTimeController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\DeliveryTimeController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery_times.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/delivery_times/{delivery_time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'delivery_times.show',
        'uses' => 'App\\Http\\Controllers\\Api\\DeliveryTimeController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\DeliveryTimeController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'pages.index',
        'uses' => 'App\\Http\\Controllers\\Api\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\PageController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'as' => 'pages.show',
        'uses' => 'App\\Http\\Controllers\\Api\\PageController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\PageController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xKmUMn9qmX0gBjjr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/register/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@check_register',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@check_register',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::xKmUMn9qmX0gBjjr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LBDMkbul4pNU4ZyG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@register',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::LBDMkbul4pNU4ZyG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::byDKNp3f7CDC3k8f' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::byDKNp3f7CDC3k8f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DXEOEuGJxEcSVntS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::DXEOEuGJxEcSVntS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6r3zzxEw610VxyDV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/forget/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\ForgetPasswordController@ForgetPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\ForgetPasswordController@ForgetPassword',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::6r3zzxEw610VxyDV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C2sU6Zz6YtWCvyUC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/rest/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\RestPasswordController@RestPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\RestPasswordController@RestPassword',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::C2sU6Zz6YtWCvyUC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mjrZYnxMtq0XJIAy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mjrZYnxMtq0XJIAy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6xCPzgKet1SgZnNU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wishlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WishListController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\WishListController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6xCPzgKet1SgZnNU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YP8jQsDsnA1urTZE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wishlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WishListController@toggle',
        'controller' => 'App\\Http\\Controllers\\Api\\WishListController@toggle',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YP8jQsDsnA1urTZE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart_items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cart_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'cart_items.index',
        'uses' => 'App\\Http\\Controllers\\Api\\CartItemController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CartItemController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart_items.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cart_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'cart_items.store',
        'uses' => 'App\\Http\\Controllers\\Api\\CartItemController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\CartItemController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart_items.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cart_items/{cart_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'cart_items.show',
        'uses' => 'App\\Http\\Controllers\\Api\\CartItemController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\CartItemController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart_items.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/cart_items/{cart_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'cart_items.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\CartItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\CartItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'addresses.index',
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'addresses.store',
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'addresses.show',
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'addresses.update',
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'addresses.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'orders.index',
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'orders.store',
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'orders.show',
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'as' => 'orders.update',
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uu1zpTAgIzP3kTPH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@index',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::Uu1zpTAgIzP3kTPH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NFlZsU3t2vvv1Bz4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@update',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::NFlZsU3t2vvv1Bz4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3jVVknBGkSx5Aj7M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/change/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@changeAddress',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@changeAddress',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::3jVVknBGkSx5Aj7M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FuKRyE4vQuwpJSf0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/change/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@changePassword',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::FuKRyE4vQuwpJSf0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8XzxbRI5lyxhUqnQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/change/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@changeImage',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@changeImage',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::8XzxbRI5lyxhUqnQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H0sqlNG2r9qe84vs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/change/available',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@changeAvailable',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@changeAvailable',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::H0sqlNG2r9qe84vs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eDAugCynQjVZAQr3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/change/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@changeTheme',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@changeTheme',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::eDAugCynQjVZAQr3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JQcGiNS7YGrtvMwC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/change/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
          3 => 'auth-api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProfileController@changeLang',
        'controller' => 'App\\Http\\Controllers\\Api\\ProfileController@changeLang',
        'namespace' => NULL,
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::JQcGiNS7YGrtvMwC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HsiNaQffjVzKu7FH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v2/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'userLangApi',
          2 => 'checkSettingOpen',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V2\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V2\\HomeController@index',
        'namespace' => NULL,
        'prefix' => 'api/v2',
        'where' => 
        array (
        ),
        'as' => 'generated::HsiNaQffjVzKu7FH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RXhDD9DOu5PIAXEF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:51:"function () {
    return \\redirect(\'/dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000ba00000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RXhDD9DOu5PIAXEF',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.login.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AuthController@viewLogin',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AuthController@viewLogin',
        'as' => 'dashboard.login.view',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.login.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AuthController@login',
        'as' => 'dashboard.login.login',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.home.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\HomeController@index',
        'as' => 'dashboard.home.index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AuthController@logout',
        'as' => 'dashboard.logout',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profile.change.lang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profile/change_lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProfileController@changeLang',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProfileController@changeLang',
        'as' => 'dashboard.profile.change.lang',
        'namespace' => NULL,
        'prefix' => 'dashboard/profile',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profile.change.theme' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profile/change_theme/{theme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProfileController@changeTheme',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProfileController@changeTheme',
        'as' => 'dashboard.profile.change.theme',
        'namespace' => NULL,
        'prefix' => 'dashboard/profile',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.roles.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.roles.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.roles.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.roles.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.roles.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.users.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.users.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.users.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.users.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.users.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.users.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.users.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/active/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UserController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UserController@active',
        'as' => 'dashboard.users.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.services.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.services.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.services.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.services.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/{service}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.services.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.services.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.services.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/active/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@active',
        'as' => 'dashboard.services.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sizes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sizes.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sizes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sizes.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/sizes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sizes.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sizes/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sizes.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sizes/{size}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sizes.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/sizes/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sizes.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/sizes/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sizes.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sizes/restore/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@restore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@restore',
        'as' => 'dashboard.sizes.restore',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.force_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/sizes/force_delete/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@forceDelete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@forceDelete',
        'as' => 'dashboard.sizes.force_delete',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sizes.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sizes/active/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SizeController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SizeController@active',
        'as' => 'dashboard.sizes.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.brands.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.brands.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.brands.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.brands.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.brands.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.brands.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.brands.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands/restore/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@restore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@restore',
        'as' => 'dashboard.brands.restore',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.force_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/brands/force_delete/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@forceDelete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@forceDelete',
        'as' => 'dashboard.brands.force_delete',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands/active/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@active',
        'as' => 'dashboard.brands.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.units.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/units/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.units.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.units.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.units.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/units/{unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.units.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.units.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.units.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/units/restore/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@restore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@restore',
        'as' => 'dashboard.units.restore',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.force_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/units/force_delete/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@forceDelete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@forceDelete',
        'as' => 'dashboard.units.force_delete',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.units.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/units/toggle_active/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\UnitController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\UnitController@active',
        'as' => 'dashboard.units.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/additions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.additions.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/additions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.additions.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/additions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.additions.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/additions/{addition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.additions.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/additions/{addition}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.additions.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/additions/{addition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.additions.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/additions/{addition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.additions.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/additions/restore/{addition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@restore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@restore',
        'as' => 'dashboard.additions.restore',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.force_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/additions/force_delete/{addition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@forceDelete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@forceDelete',
        'as' => 'dashboard.additions.force_delete',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.additions.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/additions/active/{addition}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AdditionController@active',
        'as' => 'dashboard.additions.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.categories.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.categories.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.categories.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.categories.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.categories.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.categories.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/restore/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@restore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@restore',
        'as' => 'dashboard.categories.restore',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.force_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/categories/force_delete/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@forceDelete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@forceDelete',
        'as' => 'dashboard.categories.force_delete',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/active/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoryController@active',
        'as' => 'dashboard.categories.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.cities.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.cities.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.cities.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.cities.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities/{city}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.cities.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.cities.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.cities.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities/restore/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@restore',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@restore',
        'as' => 'dashboard.cities.restore',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.force_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/cities/force_delete/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@forceDelete',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@forceDelete',
        'as' => 'dashboard.cities.force_delete',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities/active/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\CityController@active',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CityController@active',
        'as' => 'dashboard.cities.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.regions.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/regions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.regions.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/regions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.regions.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.regions.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/regions/{region}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.regions.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.regions.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/regions/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.regions.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/regions/restore/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@restore',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@restore',
        'as' => 'dashboard.regions.restore',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.force_delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/regions/force_delete/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@forceDelete',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@forceDelete',
        'as' => 'dashboard.regions.force_delete',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.regions.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/regions/active/{region}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\RegionController@active',
        'controller' => 'App\\Http\\Controllers\\dashboard\\RegionController@active',
        'as' => 'dashboard.regions.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.settings.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.settings.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.settings.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.settings.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/{setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.settings.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.settings.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.settings.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\SettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\SettingController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.contacts.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/contacts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.contacts.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.contacts.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.contacts.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/contacts/{contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.contacts.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.contacts.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.contacts.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.seen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/contacts/active/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@seen',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@seen',
        'as' => 'dashboard.contacts.seen',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contacts.sendMessage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/messages/send/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactController@sendMessage',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactController@sendMessage',
        'as' => 'dashboard.contacts.sendMessage',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.delivery_times.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/delivery_times',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.delivery_times.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.delivery_times.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/delivery_times/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.delivery_times.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.delivery_times.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/delivery_times',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.delivery_times.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.delivery_times.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/delivery_times/{delivery_time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.delivery_times.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.delivery_times.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/delivery_times/{delivery_time}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.delivery_times.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.delivery_times.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/delivery_times/{delivery_time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.delivery_times.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.delivery_times.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/delivery_times/{delivery_time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.delivery_times.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.delivery_times.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/delivery_times/active/{delivery_time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@active',
        'controller' => 'App\\Http\\Controllers\\dashboard\\DeliveryTimeController@active',
        'as' => 'dashboard.delivery_times.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.pages.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PageController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.pages.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PageController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PageController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.pages.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PageController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.pages.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PageController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PageController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.pages.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PageController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PageController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.pages.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PageController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PageController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.pages.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\PageController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PageController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pages.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/active/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\PageController@active',
        'controller' => 'App\\Http\\Controllers\\dashboard\\PageController@active',
        'as' => 'dashboard.pages.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.payments.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/payments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.payments.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.payments.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.payments.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/payments/{payment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.payments.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.payments.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.payments.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payments.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/payments/active/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PaymentController@active',
        'as' => 'dashboard.payments.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.addresses.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AddressController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.addresses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.addresses.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AddressController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AddressController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.addresses.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AddressController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AddressController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.addresses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.addresses.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AddressController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AddressController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.addresses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/addresses/{address}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.addresses.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AddressController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AddressController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.addresses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.addresses.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AddressController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AddressController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.addresses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.addresses.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\AddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sliders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sliders.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sliders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sliders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sliders.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sliders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sliders.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sliders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sliders/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sliders.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sliders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sliders/{slider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sliders.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sliders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/sliders/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sliders.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sliders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/sliders/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.sliders.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sliders.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sliders/active/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SliderController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SliderController@active',
        'as' => 'dashboard.sliders.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.wishlists.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/wishlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.wishlists.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.wishlists.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/wishlists/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.wishlists.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.wishlists.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/wishlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.wishlists.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.wishlists.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/wishlists/{wishlist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.wishlists.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.wishlists.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/wishlists/{wishlist}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.wishlists.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.wishlists.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/wishlists/{wishlist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.wishlists.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.wishlists.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/wishlists/{wishlist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.wishlists.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\WishlistController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.orders.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.orders.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.orders.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.orders.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.orders.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.orders.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.orders.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/cancel/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@cancel',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@cancel',
        'as' => 'dashboard.orders.cancel',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.change_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/orders/change_status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\OrderController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\dashboard\\OrderController@changeStatus',
        'as' => 'dashboard.orders.change_status',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.coupons.index',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/coupons/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.coupons.create',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.coupons.store',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.coupons.show',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/coupons/{coupon}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.coupons.edit',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.coupons.update',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.coupons.destroy',
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/coupons/active/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@active',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@active',
        'as' => 'dashboard.coupons.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.coupons.finish' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/coupons/finish/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\CouponController@finish',
        'controller' => 'App\\Http\\Controllers\\dashboard\\CouponController@finish',
        'as' => 'dashboard.coupons.finish',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.products.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.products.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.products.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.products.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.products.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.products.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.products.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/products/active/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@active',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@active',
        'as' => 'dashboard.products.active',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.feature' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/products/feature/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@feature',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@feature',
        'as' => 'dashboard.products.feature',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.products.returned' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/products/returned/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@returned',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@returned',
        'as' => 'dashboard.products.returned',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/getCategoryByService/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ProductController@getCategoryByService',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ProductController@getCategoryByService',
        'as' => 'dashboard.',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\dashboard\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\dashboard\\ReviewController@index',
        'as' => 'dashboard.reviews.index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.activity_logs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/activity_logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ActivityLogController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ActivityLogController@index',
        'as' => 'dashboard.activity_logs.index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notifications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.notifications.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notifications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/notifications/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.notifications.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notifications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'as' => 'dashboard.notifications.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cache/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'check.permission',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CacheController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CacheController@index',
        'as' => 'dashboard.cache',
        'namespace' => NULL,
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
