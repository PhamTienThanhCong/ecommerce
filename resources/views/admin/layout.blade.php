<?php
    $user = Auth::user();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>2N | @yield('title')</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{!! asset('admin-asset/css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="{!! asset('admin-asset/css/bar.css') !!}">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admin-asset/css/pignose.calender.css') !!}" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="{!! asset('admin-asset/css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="{!! asset('admin-asset/css/style4.css') !!}">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="{!! asset('admin-asset/css/fontawesome-all.css') !!}" rel="stylesheet">
    <script src="{!! asset('admin-asset/js/font.js') !!}" crossorigin="anonymous"></script>
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="{{route('get-admin-home')}}">LAPTOP SHOP</a>
                </h1>
                <span><img src="{!! asset('admin-asset/images//2Nlogo.png')!!}" style="max-width: 100px; margin-left: -14px;"></span>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="{{route('get-admin-home')}}">
                        <i class="fa fa-th-large"></i>
                        T???ng Quan
                    </a>
                </li>
                <li>
                    <a href="#nhanvien" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        Nh??n Vi??n
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="nhanvien">
                        <li>
                            <a href="{{route('get-add-admin')}}">Th??m Nh??n Vi??n</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-admin')}}">Danh S??ch Nh??n Vi??n</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#khachhang" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        Kh??ch H??ng
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="khachhang">
                        <li>
                            <a href="{{route('get-list-customer')}}">Danh S??ch Kh??ch H??ng</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#nhacungcap" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-user-secret"></i>
                        Nh?? Cung C???p
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="nhacungcap">
                        <li>
                            <a href="{{route('get-add-supplier')}}">Th??m Nh?? Cung C???p</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-supplier')}}">Danh S??ch Nh?? Cung C???p</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#danhmucsanpham" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-list-alt"></i>
                        Danh M???c S???n Ph???m
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="danhmucsanpham">
                        <li>
                            <a href="{{route('get-add-category')}}">Th??m Danh M???c S???n Ph???m</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-category')}}">Li???t K?? Danh M???c S???n Ph???m</a>
                        </li>
                    </ul>
                </li>
               
                <li>
                    <a href="#thuonghieu" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-list-alt"></i>
                        Th????ng Hi???u
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="thuonghieu">
                        <li>
                            <a href="{{route('get-add-brand')}}">Th??m Th????ng Hi???u</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-brand')}}">Li???t K?? Th????ng Hi???u</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#sanpham" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-list-alt"></i>
                        S???n Ph???m
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="sanpham">
                        <li>
                            <a href="{{route('get-add-product')}}">Th??m S???n Ph???m</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-product')}}">Li???t K?? S???n Ph???m</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#magiamgia" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-ticket"></i>
                        M?? Gi???m Gi??
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="magiamgia">
                        <li>
                            <a href="{{route('get-add-voucher')}}">Th??m M?? Gi???m Gi??</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-voucher')}}">Li???t K?? M?? Gi???m Gi??</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#khohang" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-list-alt"></i>
                        Kho H??ng
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="khohang">
                        <li>
                            <a href="{{route('get-bill-import-depot')}}">L???p Phi???u Nh???p H??ng</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-depot')}}">Th???ng K?? Kho H??ng</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-bill-depot')}}">Danh S??ch H??a ????n Nh???p</a>
                        </li>

                        
                    </ul>
                </li>
                <li>
                    <a href="#donhang" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-list-alt"></i>
                        ????n H??ng
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="donhang">
                        <li>
                            <a href="{{route('get-list-bill')}}">T???t C??? ????n H??ng</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-billNotConfirm')}}">Ch??a X??c Nh???n</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-billConfirm')}}">???? X??c Nh???n</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-billCancle')}}">???? H???y</a>
                        </li>
                        <li>
                            <a href="{{route('get-list-billSuccess')}}">Th??nh C??ng</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="">
                    <a href="{{route('get-list-depot')}}">
                        <i class="fa fa-list-alt"></i>
                        Kho H??ng
                    </a>
                </li> -->
                
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    
                    <ul class="top-icons-agileits-w3layouts float-right">
                    <li class="nav-item dropdown show">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="far fa-bell"></i>
                                <?php 
                                if($count_bill_not_comfirm > 0)
                                {
                                    echo '<span class="badge">'.$count_bill_not_comfirm.'</span>';
                                }
                                ?>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1 show" style="display: none;">
                                <h3 class="sub-title-w3-agileits">????n H??ng M???i</h3>
                                @foreach($take_3_bill_not_comfirm as $bill)
                                <a href="{{route('get-detail-bill',$bill->id)}}" class="dropdown-item mt-3">
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Kh??ch H??ng: {{$bill->customer->name}}</span><br>Th??nh Ti???n: <?php echo number_format($bill->price_Checkout).'??' ?></p>
                                        <h6>Ng??y: 
                                        <?php 
                                        $date=date_create($bill->date_create);
                                        echo date_format($date,'d-m-Y'); 
                                        ?>
                                        </h6>
                                    </div>
                                </a>
                                @endforeach
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('get-list-billNotConfirm')}}">Xem Th??m</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-2">
                                <h3 class="sub-title-w3-agileits">Li??n k???t nhanh</h3>
                                <a href="{{route('get-list-category')}}" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-list-alt mr-3"></i>Danh M???c S???n Ph???m</h4>
                                </a>
                                <a href="{{route('get-list-brand')}}" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-list-alt mr-3"></i>Th????ng Hi???u</h4>
                                </a>
                                <a href="{{route('get-list-product')}}" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-list-alt mr-3"></i>S???n Ph???m</h4>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="{!! asset('uploads/avatar_admin')!!}/{{$user->avatar ??''}}" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">{{$user->name ?? ''}}</h3>
                                        <a href="mailto:{{$user->email}}">{{$user->email ?? ''}}</a>
                                    </div>
                                </div>
                                <a href="{{route('get-detail-admin',$user->id)}}" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>T??i Kho???n C???a T??i</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('get-admin-logout')}}">????ng Xu???t</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            @yield('content')


        </div>
    </div>


    <!-- Required common Js -->
    <script src="{!! asset('admin-asset/js/jquery-2.2.3.min.js') !!}"></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="{!! asset('admin-asset/js/modernizr.js') !!}"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    
    <!-- profile-widget-dropdown js-->
    <script src="{!! asset('admin-asset/js/script.js') !!}"></script>
    <!--// profile-widget-dropdown js-->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="{!! asset('admin-asset/js/bootstrap.min.js') !!}"></script>
    <!-- //Js for bootstrap working -->
        <script src="{!! asset('admin-asset/ckeditor/ckeditor.js') !!}"></script>
        <script>
        CKEDITOR.replace('ck');
        </script>
</body>

</html>