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
                    <i class="ti ti-md ti-moon"></i>
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
                    {{-- <li>
                      <a class="dropdown-item" href="{{ route('dashboard.profile.change.theme',['theme' => 'semi_dark']) }}">
                        <span class="align-middle"><i class="ti ti-sun me-2"></i>{{ __('site.semi_dark') }}</span>
                      </a>
                    </li> --}}

                </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- Notification -->
            @include('admin.notifications.includes.notification_profile',['notifications' => auth()->user()->notificationsUnread()->get(), 'notificationCount' => auth()->user()->notificationsUnread()->count()])
            <!--/ Notification -->

            {{-- Short Cuts --}}
            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" aria-expanded="false">
                    <i class="ti ti-layout-grid-add ti-md"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                            <h5 class="text-body mb-0 me-auto">{{ __('site.shortcut') }}</h5>
                        </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container ps">
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-files fs-4"></i>
                                </span>
                                <a href="{{ route('dashboard.pages.index') }}"
                                    class="stretched-link">{{ __('site.pages') }}</a>
                                <small class="text-muted mb-0">{{ __('site.pages_management') }}</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-file-invoice fs-4"></i>
                                </span>
                                <a href="" class="stretched-link">{{ __('site.products') }}</a>
                                <small class="text-muted mb-0">{{ __('site.products_management') }}</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-users fs-4"></i>
                                </span>
                                <a href="{{ route('dashboard.users.index', ['type' => 'client']) }}"
                                    class="stretched-link">{{ __('site.clients') }}</a>
                                <small class="text-muted mb-0">{{ __('site.clients_management') }}</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-lock fs-4"></i>
                                </span>
                                <a href="{{ 'dashboard.roles.index' }}"
                                    class="stretched-link">{{ __('site.roles') }}</a>
                                <small class="text-muted mb-0">{{ __('site.roles_management') }}</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-chart-bar fs-4"></i>
                                </span>
                                <a href="{{ route('dashboard.home.index') }}"
                                    class="stretched-link">{{ __('site.dashboard') }}</a>
                                <small class="text-muted mb-0">{{ __('site.dashboard') }}</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                    <i class="ti ti-settings fs-4"></i>
                                </span>
                                <a href="{{ route('dashboard.settings.show', 1) }}"
                                    class="stretched-link">{{ __('site.settings') }}</a>
                                <small class="text-muted mb-0">{{ __('site.settings') }}</small>
                            </div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- / Short Cuts -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src={{ url('admin/assets/img/avatars/1.png') }} alt class="h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('dashboard.users.edit', ['user' => auth()->user()->id]) }}">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src={{ url('admin/assets/img/avatars/1.png') }} alt
                                            class="h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block">{{ auth()->user()->first_name }}</span>
                                    <small class="text-muted">{{ __('site.admin') }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>

                    <li>
                        <a class="dropdown-item"
                            href="{{ route('dashboard.users.edit', ['user' => auth()->user()->id]) }}">
                            <i class="ti ti-user-check me-2 ti-sm"></i>
                            <span class="align-middle">Profile</span>
                        </a>
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
