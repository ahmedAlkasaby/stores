<nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Language -->
            <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-language rounded-circle ti-md"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @if (auth()->user()->lang == 'ar')
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('dashboard.profile.change.lang', ['lang' => 'en']) }}">
                                <span class="align-middle">{{ __('site.english') }}</span>
                            </a>
                        </li>
                    @endif
                    @if (auth()->user()->lang == 'en')
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('dashboard.profile.change.lang', ['lang' => 'ar']) }}">
                                <span class="align-middle">{{ __('site.arabic') }}</span>
                            </a>
                        </li>
                    @endif



                </ul>
            </li>
            <!--/ Language -->

            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-sun me-2"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('dashboard.profile.change.theme', ['theme' => 'light']) }}">
                            <span class="align-middle"><i class="ti ti-sun me-2"></i>{{ __('site.light') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('dashboard.profile.change.theme', ['theme' => 'dark']) }}">
                            <span class="align-middle"><i class="ti ti-sun me-2"></i>{{ __('site.dark') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('dashboard.profile.change.theme', ['theme' => 'semi_dark']) }}">
                            <span class="align-middle"><i class="ti ti-sun me-2"></i>{{ __('site.semi_dark') }}</span>
                        </a>
                    </li>

                </ul>
            </li>
            <!-- / Style Switcher-->



            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src={{ url('admin/assets/img/avatars/1.png') }} alt class="h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src={{ url('admin/assets/img/avatars/1.png') }} alt
                                            class="h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block">{{ auth()->user()->first_name }}</span>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>



                    <li>
                        <a class="dropdown-item" href="{{ route('dashboard.logout') }}" target="_blank">
                            <i class="ti ti-logout me-2 ti-sm"></i>
                            <span class="align-middle">{{ __('site.logout') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>


</nav>
