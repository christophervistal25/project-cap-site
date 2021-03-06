<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>{{ config('app.name') }} |  @yield('page-title')</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('/dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        @include('templates-2.mobile_menu')
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="http://surigaodelsur.ph/images/logo.png">
                    <span class="hidden xl:block text-white text-lg ml-3"> SurSur-<span class="font-medium">ATP</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                @auth('admin')
                <ul>
                    <li>
                        <a href="index.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="grid"></i> </div>
                            <div class="side-menu__title"> Generate QR <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('personnel.create') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                                    <div class="side-menu__title"> Personnel </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-dashboard.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                                    <div class="side-menu__title"> Establishment </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                            <div class="side-menu__title"> People <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> View All </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="edit-3"></i> </div>
                                    <div class="side-menu__title"> Edit Personnel </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                            <div class="side-menu__title"> Checkers <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> View All </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="edit-3"></i> </div>
                                    <div class="side-menu__title"> Edit Checker </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Establishments <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> View All </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="edit-3"></i> </div>
                                    <div class="side-menu__title"> Edit Establishment </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="map"></i> </div>
                            <div class="side-menu__title"> Track <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-crud-data-list.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Data List </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-crud-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Form </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
                            <div class="side-menu__title"> Settings <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endauth

                @auth('municipal')
                <ul>
                    <li>
                        <a href="index.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Menu Layout <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="index.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Side Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-dashboard.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Simple Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="top-menu-dashboard.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Top Menu </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-file-manager.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-point-of-sale.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                            <div class="side-menu__title"> Point of Sale </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-chat.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                            <div class="side-menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-post.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                            <div class="side-menu__title"> Post </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                            <div class="side-menu__title"> Crud <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-crud-data-list.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Data List </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-crud-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Form </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                            <div class="side-menu__title"> Settings <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-users-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <lia>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                            <div class="side-menu__title"> Profile <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-profile-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-profile-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-profile-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </lia>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                            <div class="side-menu__title"> Pages <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Wizards <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-wizard-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-wizard-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-wizard-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Blog <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-blog-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-blog-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-blog-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Pricing <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-pricing-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-pricing-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Invoice <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-invoice-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-invoice-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> FAQ <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-faq-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-faq-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-faq-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="login-login.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Login </div>
                                </a>
                            </li>
                            <li>
                                <a href="login-register.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Register </div>
                                </a>
                            </li>
                            <li>
                                <a href="main-error-page.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-update-profile.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-change-password.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Components <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Grid <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-regular-table.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-datatable.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Datatable</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-accordion.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Accordion </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-button.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Button </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-modal.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Modal </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-alert.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Alert </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-progress-bar.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Progress Bar </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-tooltip.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Tooltip </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-dropdown.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Dropdown </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-toast.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Toast </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-typography.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Typography </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-icon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Icon </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-loading-icon.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Loading Icon </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                            <div class="side-menu__title"> Forms <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="side-menu-regular-form.html" class="side-menu side-menu--active">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Regular Form </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-datepicker.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Datepicker </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-select2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Select2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-file-upload.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-wysiwyg-editor.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Wysiwyg Editor </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-validation.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title"> Widgets <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-chart.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-slider.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-image-zoom.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endauth
            </nav>
            <!-- END: Side Menu -->
             <!-- BEGIN: Content -->
 <div class="content">
    <!-- BEGIN: Top Bar -->
   <div class="top-bar">
       <!-- BEGIN: Breadcrumb -->
       <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
       <!-- END: Breadcrumb -->
       <!-- BEGIN: Search -->
       <div class="intro-x relative mr-3 sm:mr-6">
           <div class="search hidden sm:block">
               <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
               <i data-feather="search" class="search__icon"></i>
           </div>
           <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
           <div class="search-result">
               <div class="search-result__content">
                   <div class="search-result__content__title">Pages</div>
                   <div class="mb-5">
                       <a href="" class="flex items-center">
                           <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                           <div class="ml-3">Mail Settings</div>
                       </a>
                       <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                           <div class="ml-3">Users & Permissions</div>
                       </a>
                       <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                           <div class="ml-3">Transactions Report</div>
                       </a>
                   </div>
                   <div class="search-result__content__title">Users</div>
                   <div class="mb-5">
                       <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 image-fit">
                               <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-3.jpg">
                           </div>
                           <div class="ml-3">Edward Norton</div>
                           <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">edwardnorton@left4code.com</div>
                       </a>
                       <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 image-fit">
                               <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-3.jpg">
                           </div>
                           <div class="ml-3">Denzel Washington</div>
                           <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">denzelwashington@left4code.com</div>
                       </a>
                       <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 image-fit">
                               <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-9.jpg">
                           </div>
                           <div class="ml-3">Morgan Freeman</div>
                           <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">morganfreeman@left4code.com</div>
                       </a>
                       <a href="" class="flex items-center mt-2">
                           <div class="w-8 h-8 image-fit">
                               <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-8.jpg">
                           </div>
                           <div class="ml-3">Keira Knightley</div>
                           <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">keiraknightley@left4code.com</div>
                       </a>
                   </div>
                   <div class="search-result__content__title">Products</div>
                   <a href="" class="flex items-center mt-2">
                       <div class="w-8 h-8 image-fit">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/preview-1.jpg">
                       </div>
                       <div class="ml-3">Nike Tanjun</div>
                       <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                   </a>
                   <a href="" class="flex items-center mt-2">
                       <div class="w-8 h-8 image-fit">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/preview-9.jpg">
                       </div>
                       <div class="ml-3">Nikon Z6</div>
                       <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Photography</div>
                   </a>
                   <a href="" class="flex items-center mt-2">
                       <div class="w-8 h-8 image-fit">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/preview-12.jpg">
                       </div>
                       <div class="ml-3">Sony A7 III</div>
                       <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Photography</div>
                   </a>
                   <a href="" class="flex items-center mt-2">
                       <div class="w-8 h-8 image-fit">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/preview-13.jpg">
                       </div>
                       <div class="ml-3">Samsung Q90 QLED TV</div>
                       <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                   </a>
               </div>
           </div>
       </div>
       <!-- END: Search -->
       <!-- BEGIN: Notifications -->
       <div class="intro-x dropdown relative mr-auto sm:mr-6">
           <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
           <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
               <div class="notification-content__box dropdown-box__content box">
                   <div class="notification-content__title">Notifications</div>
                   <div class="cursor-pointer relative flex items-center ">
                       <div class="w-12 h-12 flex-none image-fit mr-1">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-3.jpg">
                           <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                       </div>
                       <div class="ml-2 overflow-hidden">
                           <div class="flex items-center">
                               <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a>
                               <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">03:20 PM</div>
                           </div>
                           <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                       </div>
                   </div>
                   <div class="cursor-pointer relative flex items-center mt-5">
                       <div class="w-12 h-12 flex-none image-fit mr-1">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-3.jpg">
                           <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                       </div>
                       <div class="ml-2 overflow-hidden">
                           <div class="flex items-center">
                               <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                               <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                           </div>
                           <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                       </div>
                   </div>
                   <div class="cursor-pointer relative flex items-center mt-5">
                       <div class="w-12 h-12 flex-none image-fit mr-1">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-9.jpg">
                           <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                       </div>
                       <div class="ml-2 overflow-hidden">
                           <div class="flex items-center">
                               <a href="javascript:;" class="font-medium truncate mr-5">Morgan Freeman</a>
                               <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                           </div>
                           <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                       </div>
                   </div>
                   <div class="cursor-pointer relative flex items-center mt-5">
                       <div class="w-12 h-12 flex-none image-fit mr-1">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-8.jpg">
                           <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                       </div>
                       <div class="ml-2 overflow-hidden">
                           <div class="flex items-center">
                               <a href="javascript:;" class="font-medium truncate mr-5">Keira Knightley</a>
                               <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                           </div>
                           <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                       </div>
                   </div>
                   <div class="cursor-pointer relative flex items-center mt-5">
                       <div class="w-12 h-12 flex-none image-fit mr-1">
                           <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-10.jpg">
                           <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                       </div>
                       <div class="ml-2 overflow-hidden">
                           <div class="flex items-center">
                               <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                               <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                           </div>
                           <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- END: Notifications -->
       <!-- BEGIN: Account Menu -->
       <div class="intro-x dropdown w-8 h-8 relative">
           <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
               <img alt="Midone Tailwind HTML Admin Template" src="/dist/images/profile-5.jpg">
           </div>
           <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
               <div class="dropdown-box__content box bg-theme-38 text-white">
                   <div class="p-4 border-b border-theme-40">
                       <div class="font-medium">Edward Norton</div>
                       <div class="text-xs text-theme-41">Software Engineer</div>
                   </div>
                   <div class="p-2">
                       <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                       <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                       <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                       <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                   </div>
                   <div class="p-2 border-t border-theme-40">
                       <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                   </div>
               </div>
           </div>
       </div>
       <!-- END: Account Menu -->
   </div>
   <!-- END: Top Bar -->
           @yield('content')
        </div>
        <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('/dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
