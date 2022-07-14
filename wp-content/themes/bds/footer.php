<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bds
 */

?>

<footer>
    <div class="quick-call">
        <a href="tel:<?php the_field('số_hotline','option') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1408 1896.0833" class="" fill="rgba(234, 242, 255, 1)"> <path d="M1408 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5T959 1520t-47.5-14.5T856 1485t-49-18q-98-35-175-83-128-79-264.5-215.5T152 904q-48-77-83-175-3-9-18-49t-20.5-55.5T16 577 3.5 519.5 0 467q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"></path> </svg>
        </a>
    </div>
    <div class="fter-top">
        <div class="container">
            <div class="logo text-center"><img src="<?php echo __BASE_URL__ ?>/images/logo-light.png" class="img-fluid" alt=""></div>
            <div class="content-fter">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item-fter">
                            <div class="title-fter"><?php the_field('title_fter','option') ?></div>
                            <?php the_field('nội_dung','option') ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-fter">
                            <div class="title-fter">LIÊN HỆ TƯ VẤN</div>
                            <div class="form-fter">
                                <div class="item-fter"><input type="text" placeholder="Họ và tên" class="txt_field"></div>
                                <div class="item-fter"><input type="text" placeholder="Số điện thoại" class="txt_field"></div>
                                <div class="item-fter"><input type="submit" value="Gửi thông tin" class="btn_field"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <p>©2020 All right reserved Vinhomes</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
