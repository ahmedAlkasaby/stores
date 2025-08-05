<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold">@lang('site.woudyan') </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @if (auth()->user()->hasPermission('home.index'))
            <li class="menu-item @if ($class == 'home') active @endif">
                <a href="{{ route('dashboard.home.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>{{ __('site.home') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('settings.index'))
            <li class="menu-item @if ($class == 'settings') active @endif">
                <a href="{{ route('dashboard.settings.show', 1) }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div>{{ __('site.settings') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('products.index'))
            <li class="menu-item @if ($class == 'products') active @endif">
                <a href="{{ route('dashboard.products.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                    <div>{{ __('site.products') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('roles.index'))
            <li class="menu-item @if ($class == 'roles') active @endif">
                <a href="{{ route('dashboard.roles.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>{{ __('site.role') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('contacts.index'))
            <li class="menu-item @if ($class == 'contacts') active @endif">
                <a href="{{ route('dashboard.contacts.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-mail-opened"></i>
                    <div>{{ __('site.contacts') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('delivery_times.index'))
            <li class="menu-item @if ($class == 'delivery_times') active @endif">
                <a href="{{ route('dashboard.delivery_times.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-forms"></i>
                    <div>{{ __('site.delivery_times') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('pages.index'))
            <li class="menu-item @if ($class == 'pages') active @endif">
                <a href="{{ route('dashboard.pages.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-files"></i>
                    <div>{{ __('site.pages') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('payments.index'))
            <li class="menu-item @if ($class == 'payments') active @endif">
                <a href="{{ route('dashboard.payments.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                    <div>{{ __('site.payments') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('addresses.index'))
            <li class="menu-item @if ($class == 'addresses') active @endif">
                <a href="{{ route('dashboard.addresses.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-map"></i>
                    <div>{{ __('site.addresses') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('orders.index'))
            <li class="menu-item @if ($class == 'orders') active @endif">
                <a href="{{ route('dashboard.orders.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                    <div>{{ __('site.orders') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('activity_logs.index'))
            <li class="menu-item @if ($class == 'activity_logs') active @endif">
                <a href="{{ route('dashboard.activity_logs.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-id"></i>
                    <div>{{ __('site.activity_logs') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('reviews.index'))
            <li class="menu-item @if ($class == 'reviews') active @endif">
                <a href="{{ route('dashboard.reviews.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-star"></i>
                    <div>{{ __('site.reviews') }}</div>
                </a>
            </li>
        @endif

        @if (auth()->user()->hasPermission('services.index'))
            <li class="menu-item @if ($class == 'services') active @endif">
                <a href="{{ route('dashboard.services.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>{{ __('site.services') }}</div>
                </a>
            </li>
        @endif

        @if (auth()->user()->hasPermission('brands.index'))
            <li class="menu-item @if ($class == 'brands') active @endif">
                <a href="{{ route('dashboard.brands.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-table"></i>
                    <div>{{ __('site.brand') }}</div>
                </a>
            </li>
        @endif

        @if (auth()->user()->hasPermission('units.index'))
            <li class="menu-item @if ($class == 'units') active @endif">
                <a href="{{ route('dashboard.units.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                    <div>{{ __('site.unit') }}</div>
                </a>
            </li>
        @endif

        @if (auth()->user()->hasPermission('sizes.index'))
            <li class="menu-item @if ($class == 'sizes') active @endif">
                <a href="{{ route('dashboard.sizes.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                    <div>{{ __('site.size') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('categories.index'))
            <li class="menu-item @if ($class == 'categories') active @endif">
                <a href="{{ route('dashboard.categories.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                    <div>{{ __('site.category') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('additions.index'))
            <li class="menu-item @if ($class == 'additions') active @endif">
                <a href="{{ route('dashboard.additions.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-checkbox"></i>
                    <div>{{ __('site.additions') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('sliders.index'))
            <li class="menu-item @if ($class == 'sliders') active @endif">
                <a href="{{ route('dashboard.sliders.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                    <div>{{ __('site.sliders') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('wishlists.index'))
            <li class="menu-item @if ($class == 'wishlists') active @endif">
                <a href="{{ route('dashboard.wishlists.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-bookmark"></i>
                    <div>{{ __('site.wishlists') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasPermission('notifications.index'))
            <li class="menu-item @if ($class == 'notifications') active @endif">
                <a href="{{ route('dashboard.notifications.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-bookmark"></i>
                    <div>{{ __('site.notifications') }}</div>
                </a>
            </li>
        @endif
        @if (auth()->user()->isAbleTo(['users.index']))
            <li class="menu-item @if (isset($class) && in_array($class, ['admin', 'delivery', 'client'])) active @endif">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div>{{ __('site.users') }}</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item  @if (isset($class) && $class == 'admin') active @endif">
                        <a href="{{ route('dashboard.users.index', ['type' => 'admin']) }}" class="menu-link">
                            <div>{{ __('site.users') }}</div>
                        </a>
                    </li>
                    <li class="menu-item @if (isset($class) && $class == 'client') active @endif">
                        <a href="{{ route('dashboard.users.index', ['type' => 'client']) }}" class="menu-link">
                            <div>{{ __('site.clients') }}</div>
                        </a>
                    </li>
                    <li class="menu-item @if (isset($class) && $class == 'delivery') active @endif">
                        <a href="{{ route('dashboard.users.index', ['type' => 'delivery']) }}" class="menu-link">
                            <div>{{ __('site.deliveries') }}</div>
                        </a>
                    </li>

                </ul>
            </li>
        @endif
        @if (auth()->user()->hasPermission('cities.index'))
            <li class="menu-item @if (isset($class) && in_array($class, ['cities', 'regions'])) active @endif">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-building"></i>
                    <div>{{ __('site.cities') }}</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item  @if (isset($class) && $class == 'cities') active @endif">
                        <a href="{{ route('dashboard.cities.index') }}" class="menu-link">
                            <div>{{ __('site.cities') }}</div>
                        </a>
                    </li>
                    <li class="menu-item  @if (isset($class) && $class == 'regions') active @endif">
                        <a href="{{ route('dashboard.regions.index') }}" class="menu-link">
                            <div>{{ __('site.regions') }}</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        
        <li class="menu-item ">
            <a href="{{ route('dashboard.cache', ['redirect' => url()->current()]) }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-bookmark"></i>
                <div>{{ __('site.optimize') }}</div>
            </a>
        </li>









    </ul>
</aside>
<!-- / Menu -->
