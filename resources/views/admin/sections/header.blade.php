<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo">
                    <span style="color: #fff; font-wight:bold; font-size:18px">
                        SRMS
                    </span>
                </a>
            </div>

            <button type="button" class="px-3 btn btn-sm font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="align-middle ri-menu-2-line"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>


        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-search-line"></i>
                </button>
                <div class="p-0 dropdown-menu dropdown-menu-lg dropdown-menu-end"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="m-0 mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="ri-search-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ri-notification-3-line"></i>
                    <span class="noti-dot"></span>
                </button>
                <div class="p-0 dropdown-menu dropdown-menu-lg dropdown-menu-end"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="ri-shopping-cart-line"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="ri-checkbox-circle-line"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="text-center btn btn-sm btn-link font-size-14" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">Julia</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                            class="align-middle ri-user-line me-1"></i> Profile</a>

                    {{--  <a class="dropdown-item" href="#"><i class="align-middle ri-wallet-2-line me-1"></i> My Wallet</a>  --}}
                    <a class="dropdown-item d-block" href="{{ route('admin.password.change') }}"><i
                            class="ri-settings-2-line align-middle me-1"></i> Change Password</a>
                    {{--  <a class="dropdown-item" href="#"><i class="align-middle ri-lock-unlock-line me-1"></i> Lock screen</a>  --}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i
                            class="align-middle ri-shut-down-line me-1 text-danger"></i> Logout</a>
                </div>
            </div>


        </div>
    </div>
</header>
