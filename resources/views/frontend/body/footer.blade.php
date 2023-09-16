@php
    $cdate = new DateTime();
@endphp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<header class="themesbazar_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">

                <div class="row">
                    <div class="col-md-6">

                        <div class="date">
                            <i class="lar la-calendar"></i>
                            {{ $cdate->format('l d-m-Y') }}
                        </div>

                    </div>

                    <div class="col-md-6">

                        <select class="form-select changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                            </option>

                            <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bangla
                            </option>

                            <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi
                            </option>

                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>French
                            </option>

                        </select>

                    </div>

                </div>




            </div>





            <div class="col-lg-3 col-md-3">

                <form class="header-search" action="" method="post">
                    @csrf

                    <input type="text" name="search" placeholder=" Search Here " required="">
                    <button type="submit" value="Search"> <i class="las la-search"></i> </button>
                </form>

            </div>
            <div class="col-lg-4 col-md-4">
                <div class="header-social">
                    <ul>
                        <li> <a href="https://www.facebook.com/" target="_blank" title="facebook"><i
                                    class="lab la-facebook-f"></i> </a> </li>
                        <li><a href="https://twitter.com/" target="_blank" title="twitter"><i class="lab la-twitter">
                                </i> </a></li>

                        @auth
                            <li><a href=""><b> Logout </b></a> </li>
                        @else
                            <li><a href=""><b> Login </b></a> </li>
                            <li> <a href=""> <b>Register</b> </a> </li>
                        @endauth


                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="logo-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="{{ url('/') }}" title="NewsFlash">
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="NewsFlash" title="NewsFlash">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="banner">
                        <a href=" " target="_blank">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>


<div class="menu_section sticky" id="myHeader">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mobileLogo">
                    <a href=" " title="NewsFlash">
                        <img src="assets/images/footer_logo.gif" alt="Logo" title="Logo">
                    </a>
                </div>
                <div class="stellarnav dark desktop"><a href=" " class="menu-toggle full"><span
                            class="bars"><span></span><span></span><span></span></span> </a>
                    <ul id="menu-main-menu" class="menu">
                        <li id="menu-item-89"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89">
                            <a href="{{ url('/') }} " aria-current="page"> <i class="fa-solid fa-house-user"></i>
                                HOME</a>
                        </li>



                        <li id="menu-item-291"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-291 has-sub">
                            <a href="">
                            </a>



                            <ul class="sub-menu">
                                <li id="menu-item-294"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294">
                                    <a href="">


                                    </a>
                                </li>

                            </ul>


                            <a class="dd-toggle" href=" "><span class="icon-plus"></span></a>
                        </li>



                        <li id="menu-item-277"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-277"><a
                                href=" ">ARCRIVE</a></li>

                    </ul>
                    <a class="dd-toggle" href=" "><span class="icon-plus"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
