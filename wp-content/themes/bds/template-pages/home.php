<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<main>
	<!-- <div class="clc-popup"><a href="javascript:void(0)" class="clc-popup-time d-none" data-toggle="modal" data-target="#modal-regis-form">1q23123</a></div>  -->
	<section class="box-slide-banner">
		<div class="slide-banner">
			<?php while ( has_sub_field('slide_banner' ) ) : ?>
				<div class="item-slide">
					<div class="item-banner"><a href="javascript:void(0)"><img src="<?php echo get_sub_field( 'ing_slide' )['url']; ?>" class="img-fluid w-100" alt=""></a></div>
				</div>
			<?php endwhile; ?> 
		</div>
	</section>
	<section class="box-endow">
		<div class="container">
			<div class="list-endow">
				<div class="row">
					<div class="col-md-6">
						<div class="item-endow">
							<div class="txt-endow">
								<h3 class="text-center">
									<p><?php the_field('tieu_dề') ?></p>
								</h3>
								<div class="desc-endow">
									<?php the_field('nội_dung') ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="item-endow endow-form">
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
	</section>
	<section class="box-sakura" style="background: url('<?php echo __BASE_URL__ ?>/images/sakura.jpg') no-repeat center; background-size: cover;">
		<div class="container">
			<div class="title text-uppercase text-center">
				<h2><?php the_field('title_NB') ?></h2>
			</div>
			<div class="content-sakura">
				<div class="row">
					<div class="col-md-6">
						<div class="thumbs-rooms">
							<div class="slide-for">
								<?php while ( has_sub_field('ảnh_slide' ) ) : ?>
									<div class="item-slide">
										<div class="item-for"><a href="javascript:void(0)"><img src="<?php echo get_sub_field( 'ảnh_dại_diện' )['url']; ?>" class="img-fluid w-100" alt=""></a></div>
									</div>
								<?php endwhile; ?>
							</div>
							<div class="slide-nav">
								<?php while ( has_sub_field('ảnh_slide' ) ) : ?>
									<div class="item-slide">
										<div class="item-nav"><a href="javascript:void(0)"><img src="<?php echo get_sub_field( 'ảnh_dại_diện' )['url']; ?>" class="img-fluid w-100" alt=""></a></div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="detail-thumbs">
							<div class="desc">
								<?php the_field('content_NB') ?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-price">
							<div class="content-form">
								<h3 class="text-center"><?php the_field('price_nhat') ?></h3>
								<div class="file-icon">
									<img src="<?php echo __BASE_URL__ ?>/images/file.png" class="img-fluid" alt="">
									<span><?php the_field('tieu_dề_file') ?></span> 
								</div>
								<ul>
									<li><input type="text" class="txt_field" placeholder="Họ và tên" required></li>
									<li><input type="text" class="txt_field" placeholder="Số điện thoại" required></li>
									<li>
										<select>
										  <option value="">Bảng giá & CSBH</option>
										  <option value="Tải Bảng giá căn hộ Studio, 1PN, 2PN, 3PN?">Tải Bảng giá căn hộ Studio, 1PN, 2PN, 3PN?</option>
										  <option value="Chính sách bán hàng chi tiết?">Chính sách bán hàng chi tiết?</option>
										  <option value="Phương thức thanh toán?">Phương thức thanh toán?</option>
										  <option value="Tiêu chuẩn bàn giao?">Tiêu chuẩn bàn giao?</option>
										  <option value="Tải mặt bằng">Tải mặt bằng</option> 
										</select>
									</li>
									<li><input type="submit" class="btn_field" value="TẢI XUỐNG NGAY"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-ruby" style="background: url('<?php echo __BASE_URL__ ?>/images/ruby.jpg') no-repeat center; background-size: cover;">
		<div class="container">
			<div class="title text-center">
				<h2><?php the_field('title_ruby') ?></h2>
			</div>
			<div class="content-ruby">
				<div class="row">
					<div class="col-md-6">
						<div class="thumbs-rooms">
							<div class="slide-for">
								<?php while ( has_sub_field('ảnh_slide_ruby' ) ) : ?>
									<div class="item-slide">
										<div class="item-for"><a href="javascript:void(0)"><img src="<?php echo get_sub_field( 'ảnh' )['url']; ?>" class="img-fluid w-100" alt=""></a></div>
									</div>
								<?php endwhile; ?>
							</div>
							<div class="slide-nav">
								<?php while ( has_sub_field('ảnh_slide_ruby' ) ) : ?>
									<div class="item-slide">
										<div class="item-nav"><a href="javascript:void(0)"><img src="<?php echo get_sub_field( 'ảnh' )['url']; ?>" class="img-fluid w-100" alt=""></a></div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="detail-thumbs">
							<div class="desc">
								<?php the_field('content_ruby') ?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-price">
							<div class="content-form">
								<h3 class="text-center"><?php the_field('price_ruby') ?></h3>
								<div class="file-icon">
									<img src="<?php echo __BASE_URL__ ?>/images/file.png" class="img-fluid" alt="">
									<span><?php the_field('file_ruby') ?></span>
								</div>
								<ul>
									<li><input type="text" class="txt_field" placeholder="Họ và tên" required></li>
									<li><input type="text" class="txt_field" placeholder="Số điện thoại" required></li>
									<li>
										<select>
										  <option value="">Bảng giá & CSBH</option>
										  <option value="Tải Bảng giá căn hộ Studio, 1PN, 2PN, 3PN?">Tải Bảng giá căn hộ Studio, 1PN, 2PN, 3PN?</option>
										  <option value="Chính sách bán hàng chi tiết?">Chính sách bán hàng chi tiết?</option>
										  <option value="Phương thức thanh toán?">Phương thức thanh toán?</option>
										  <option value="Tiêu chuẩn bàn giao?">Tiêu chuẩn bàn giao?</option>
										  <option value="Tải mặt bằng">Tải mặt bằng</option> 
										</select>
									</li>
									<li><input type="submit" class="btn_field" value="TẢI XUỐNG NGAY"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-miami">
		<div class="container">
			<div class="title text-center">
				<h2><?php the_field('title_mi') ?></h2>
			</div>
			<div class="content-ruby">
				<div class="row">
					<div class="col-md-6">
						<div class="thumbs-rooms">
							<div class="slide-for">
								<?php while ( has_sub_field('ảnh_slide_mi' ) ) : ?>
									<div class="item-slide">
										<div class="item-for"><a href="javascript:void(0)"><img src="<?php echo get_sub_field( 'ảnh' )['url']; ?>" class="img-fluid w-100" alt=""></a></div>
									</div>
								<?php endwhile; ?>
							</div>
							<div class="slide-nav">
								<?php while ( has_sub_field('ảnh_slide_mi' ) ) : ?>
									<div class="item-slide">
										<div class="item-nav"><a href="javascript:void(0)"><img src="<?php echo get_sub_field( 'ảnh' )['url']; ?>" class="img-fluid w-100" alt=""></a></div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="detail-thumbs">
							<div class="desc">
								<?php the_field('content_mi') ?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-price">
							<div class="content-form">
								<h3 class="text-center"><?php the_field('price_mi') ?></h3>
								<div class="file-icon">
									<img src="<?php echo __BASE_URL__ ?>/images/file.png" class="img-fluid" alt="">
									<span><?php the_field('file_mi') ?></span>
								</div>
								<ul>
									<li><input type="text" class="txt_field" placeholder="Họ và tên" required></li>
									<li><input type="text" class="txt_field" placeholder="Số điện thoại" required></li>
									<li>
										<select>
										  <option value="">Bảng giá & CSBH</option>
										  <option value="Tải Bảng giá căn hộ Studio, 1PN, 2PN, 3PN?">Tải Bảng giá căn hộ Studio, 1PN, 2PN, 3PN?</option>
										  <option value="Chính sách bán hàng chi tiết?">Chính sách bán hàng chi tiết?</option>
										  <option value="Phương thức thanh toán?">Phương thức thanh toán?</option>
										  <option value="Tiêu chuẩn bàn giao?">Tiêu chuẩn bàn giao?</option>
										  <option value="Tải mặt bằng">Tải mặt bằng</option> 
										</select>
									</li>
									<li><input type="submit" class="btn_field" value="TẢI XUỐNG NGAY"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-galery">
		<div class="container">
			<div class="title text-center">
				<h2>Hình ảnh thực tế dự án</h2>
			</div>
			<div class="list-gall">
				<div class="row">
					<?php while ( has_sub_field('danh_sach_hinh_ảnh' ) ) : ?>
						<div class="col-md-4 col-sm-6 col-6">
							<div class="item-gall">
								<div class="avarta"><a href="<?php echo get_sub_field('images')['url'] ?>" data-fancybox="winner"><img src="<?php echo get_sub_field('images')['url'] ?>" class="img-fluid w-100" alt=""></a></div>
							</div>
						</div>
					<?php endwhile; ?>
					<div class="col-md-12">
						<div class="btn-price text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form"><span>NHẬN TƯ VẤN 24/7</span><span>TRẢI NGHIÊM DỰ ÁN NGAY</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-smart-city" id="tongquan" style="background: url('<?php echo __BASE_URL__ ?>/images/taymo.jpg') no-repeat center; background-size: cover;">
		<div class="container">
			<div class="content-taymo">
				<h2><?php the_field('tieu_dề_vin') ?></h2>
				<h3><?php the_field('tieu_dề_nhỏ') ?></h3>
				<div class="desc">
					<?php the_field('content_vin') ?>
				</div>
				<div class="btn-price text-center">
					<a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">BẢNG GIÁ CĂN HỘ 1, 2, 3 PN</a>
				</div>
			</div>
		</div>
	</section>
	<section class="box-maps" id="vitri" style="background: url('<?php echo get_field('banner_vin')['url'] ?>') no-repeat center; background-size: cover">
		<div class="container">
			<div class="content-maps"> 
				<div class="row">
					<div class="col-md-6">
						<div class="avarta"><img src="<?php echo get_field('avr_maps')['url'] ?>" class="img-fluid w-100" alt=""></div>
					</div>
					<div class="col-md-6">
						<div class="txt-maps">
							<div class="title text-center">
								<h2><?php the_field('title_maps') ?></h2>
							</div>
							<div class="desc">
								<?php the_field('content_maps') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-environment" id="tienich">
		<div class="container">
			<div class="title text-center">
				<h2>
					<?php the_field('title_mt') ?>
				</h2>
			</div>
			<div class="list-envir">
				<div class="row">
					<?php while ( has_sub_field('danh_sach_' ) ) : ?>
						<div class="col-md-4 col-sm-6 col-6">
							<div class="item-envir text-center">
								<div class="avarta"><img src="<?php echo get_sub_field('avr_mt')['url'] ?>" class="img-fluid w-100" alt=""></div>
								<div class="info">
									<h4><?php  the_sub_field('title_avr_mt') ?></h4>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="box-ground" id="phankhu">
		<div class="avarta"><img src="<?php echo get_field('avr_matbang')['url'] ?>" class="img-fluid w-100" alt=""></div>
	</section>
	<section class="box-price-rooms" id="canho">
		<div class="container">
			<div class="title text-center">
				<h2><?php the_field('title_canho') ?></h2>
			</div>
			<div class="list-rooms">
				<div class="slide-rooms">
					<?php while ( has_sub_field('danh_sach_can_hộ' ) ) : ?>

						<div class="item-slide">
							<div class="item-rooms">
								<div class="avarta text-center"><img src="<?php echo get_sub_field('avr_canho')['url'] ?>" class="img-fluid" alt=""></div>
								<div class="info">
									<h3><?php  the_sub_field('name_canho') ?></h3>
									<div class="desc">
										<?php  the_sub_field('nội_dung_canho') ?>
									</div>
									<div class="price">
										<p>Giá niêm yết từ: <?php  the_sub_field('gia_niem_yết') ?></p>
										<p>Giá sau giảm trừ: <?php  the_sub_field('gia_giảm_trừ') ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="btn-regis-form text-center text-uppercase"><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">Liên hệ tư vấn chọn căn</a></div>
			</div>
		</div>
	</section>
	<section class="box-bottom">
		<div class="container">
			<div class="title text-center">
				<h2><?php the_field('title_room') ?></h2>
			</div>
			<div class="list-hourse">
				<div class="row">
					<?php while ( has_sub_field('danh_sach_ảnh_room' ) ) : ?>
						<div class="col-md-3">
							<div class="item-hourse"><img src="<?php echo get_sub_field('avr_room')['url'] ?>" class="img-fluid w-100" alt=""></div>
						</div>
					<?php endwhile; ?>
					<div class="col-md-12">
						<div class="btn-price text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">ĐĂNG KÝ NHẬN BẢNG GIÁ</a>
						</div>
					</div>	
				</div>
			</div>
			<div class="desc-house">
				<h2><?php the_field('nội_dung_room') ?></h2>
			</div>
			<div class="hotline-bot text-center">
				<p>Liên hệ chuyên viên tư vấn để nhận chính sách ưu đãi ngay </p>
				<a href="tel: <?php the_field('số_hotline','option') ?>">HOTLINE : <?php the_field('số_hotline','option') ?></a>
			</div>
			<div class="list-btn-form">
				<ul>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">Tải bảng giá Quỹ căn rẻ nhất dự án</a></li>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">Tải bảng giá căn cập nhật nhất hôm nay</a></li>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">Tải bảng giá Quỹ căn View nội khu </a></li>
					<li><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-regis-form">Tải bảng giá căn hộ VIP View hồ, công viên</a></li>
				</ul>
			</div>
		</div>
	</section>
</main>
<?php get_footer() ?>   