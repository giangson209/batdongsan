<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bds
 */

?> 
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
   <div class="header-pc">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-md-3">
                   <div class="logo"><a href=""><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div>
               </div>
               <div class="col-md-6">
                   <div class="h-menu">
                       <ul>
                           <li><a href="#tongquan" class="clc-scroll">Tổng quan</a></li>
                           <li><a href="#vitri" class="clc-scroll">Vị trí</a></li>
                           <li><a href="#tienich" class="clc-scroll">Tiện ích</a></li>
                           <li><a href="#phankhu" class="clc-scroll">Phân khu</a></li>
                           <li><a href="#canho" class="clc-scroll">Căn hộ</a></li>
                           <li><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">Liên hệ</a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="hot-line">
                       <a href="tel: <?php the_field('số_hotline','option') ?>">
                           <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1408 1896.0833" class="" fill="rgba(234, 242, 255, 1)"> <path d="M1408 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5T959 1520t-47.5-14.5T856 1485t-49-18q-98-35-175-83-128-79-264.5-215.5T152 904q-48-77-83-175-3-9-18-49t-20.5-55.5T16 577 3.5 519.5 0 467q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"></path> </svg>
                           <span><?php the_field('số_hotline','option') ?></span>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="header-mobile">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-md-6 col-sm-6 col-6">
                   <div class="logo"><a href="javascript:void(0)"><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div>
               </div>
               <div class="col-md-6 col-sm-6 col-6">
                   <div class="btn-bar-menu">
                       <a href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                   </div>
               </div>
           </div>
       </div>
       <div class="nav-menu">
           <ul>
               <li><a href="#tongquan" class="clc-scroll">Tổng quan</a></li>
               <li><a href="#vitri" class="clc-scroll">Vị trí</a></li>
               <li><a href="#tienich" class="clc-scroll">Tiện ích</a></li>
               <li><a href="#phankhu" class="clc-scroll">Phân khu</a></li>
               <li><a href="#canho" class="clc-scroll">Căn hộ</a></li>
               <li><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">Liên hệ</a></li>
           </ul>
       </div>
   </div>
</header>

<section class="box-popup">
    <div class="popup-regis">
        <div class="modal fade modal-regis" id="modal-regis-form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="content-popup">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="item-endow endow-form mt-0">
                                <div class="logo text-center"><img src="<?php echo __BASE_URL__ ?>/images/logo-light.png" class="img-fluid" alt=""></div>
                                <h3>ĐĂNG KÝ NHẬN BẢNG GIÁ MỚI NHẤT</h3>
                                <div class="form-regis">
                                    <div class="item-regis"><input type="text" placeholder="Họ và tên" class="txt_field"></div>
                                    <div class="item-regis"><input type="text" placeholder="Số điện thoại" class="txt_field"></div>
                                    <div class="item-regis text-center"><p><i>Loại hình căn hộ Anh/Chị quan tâm:</i></p></div>
                                    <div class="item-regis">
                                        <div class="i-check">
                                            <input type="checkbox" id="1001"><label for="1001">Căn hộ Studio</label>
                                        </div>
                                        <div class="i-check">
                                            <input type="checkbox" id="1002"><label for="1002">Căn hộ 1 phòng ngủ</label>
                                        </div>
                                        <div class="i-check">
                                            <input type="checkbox" id="1003"><label for="1003">Căn hộ 2 phòng ngủ</label>
                                        </div>
                                        <div class="i-check">
                                            <input type="checkbox" id="1004"><label for="1004">Căn hộ 3 phòng ngủ</label>
                                        </div>
                                    </div>
                                    <div class="item-regis"><input type="submit" value="NHẬN NGAY" class="btn_field"></div>
                                    <div class="item-regis text-center">
                                        <div class="note"><i>*Thông tin của quý khách luôn được bảo mật tuyệt đối.</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>