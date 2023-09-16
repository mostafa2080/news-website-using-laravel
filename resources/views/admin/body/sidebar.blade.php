@php
    $id = Auth::user()->id;
    $userid = App\Models\User::find($id);
    $status = $userid->status;
    
@endphp

<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>


                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>




                <li class="menu-title mt-2">Menu</li>



                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.category') }}">All Category</a>
                            </li>
                            <li>
                                <a href="{{ route('add.category') }}">Add Category</a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li>
                    <a href="#sidebarEcommerce1" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> SubCategory </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce1">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.subcategory') }}">All SubCategory</a>
                            </li>
                            <li>
                                <a href="{{ route('add.subcategory') }}">Add SubCategory</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#newspost" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> News Post Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="newspost">
                        <ul class="nav-second-level">
                            <li>
                                <a href="">All News Post</a>
                            </li>
                            <li>
                                <a href="">Add News Post</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#banner" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Banner Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="banner">
                        <ul class="nav-second-level">

                            <li>
                                <a href="">All Banner</a>
                            </li>


                        </ul>
                    </div>
                </li>



                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Photo Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="">Photo Gallery</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#video" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Video Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="video">
                        <ul class="nav-second-level">
                            <li>
                                <a href="">Video Gallery</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#live" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Live Tv Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="live">
                        <ul class="nav-second-level">
                            <li>
                                <a href="">Update Live TV</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#review" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Review Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="review">
                        <ul class="nav-second-level">
                            <li>
                                <a href="">Pending Review</a>
                            </li>

                            <li>
                                <a href="">Approve Review</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#review" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Seo Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="review">
                        <ul class="nav-second-level">
                            <li>
                                <a href="">Update Seo </a>
                            </li>



                        </ul>
                    </div>
                </li>




                <li class="menu-title mt-2">Setting</li>


                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span> Setting Admin User </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="">All Admin</a>
                            </li>

                            <li>
                                <a href="">Add Admin </a>
                            </li>


                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Roles And Permission </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="">All Permission</a>
                            </li>
                            <li>
                                <a href="">All Roles</a>
                            </li>

                            <li>
                                <a href="">Roles in Permission</a>
                            </li>

                            <li>
                                <a href="">All Roles in Permission</a>
                            </li>

                        </ul>
                    </div>
                </li>



            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
