<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.php');
?>




<!-------------------------- bo_table :  mainSwiper  -------------------------->
<?php echo latest('pic_swiper','mainswiper',5,100); ?>




<!-------------------------- bo_table :  고객이 인정한 맛, 회사소개 -------------------------->

<div class="container margin-top-110 margin-bottom-110 jjy_company">
	<!-- LATEST : company -->	
	<?php echo latest('company','company', 1, 24); ?>
	
</div>




<!-------------------------- 제품안내 갤러리 -------------------------->
<div class="container margin-top-110 margin-bottom-110 jjy_bestmenu jjy_best_menu">
	<!-- LATEST : bestmenu -->
	<?php echo latest('bestmenu', 'bestmenu', 9, 24); ?>
</div>




<!-------------------------- 영상 게시판 -------------------------->

<div class="margin-top-110 margin-bottom-110 jjy_bestmenu jjy_mv position-relative">
	<!-- LATEST :  -->

	<?php echo latest('mov','movie',1,100)?>
</div>
<!-- <div class="back_img"></div> -->









<!-------------------------- 이벤트 게시판 -------------------------->
<div class="padding-top-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
			</div>
		</div>
	</div>
</div>











<!-------------------------- 

지도 : 구글지도로 주소를 검색하신 다음에 공유버튼을 클릭하여 iframe 형식으로 가져오시면 됩니다.

-------------------------->
<div class="container-fluid">
	<input type="hidden" value="<?php echo G5_THEME_URL?>" id="send_url">
	<div class="row">
		<div class="col-md-6" style="padding:0px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.8712817288642!2d127.6344159516823!3d37.298184379750005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35635d8af4a6c211%3A0x9b0b7257a5a5a5cc!2z7Jes7KO87Iuc7LKt!5e0!3m2!1sko!2skr!4v1654254206256!5m2!1sko!2skr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
		</div>
		<div class="col-md-6 text-left" style="padding:30px; background:#f5f5f5;">
			<!-- 타이틀 -->
			<div class="margin-bottom-40">
				<h2 class="en1">Contact US</h2>
			</div>
			<div class="row">
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_name" value="" placeholder="담당자">
				</div><!-- /col -->
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_phone" value="" placeholder="연락처">
				</div><!-- /col -->
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_email" value="" placeholder="이메일">
				</div><!-- /col -->
			</div><!-- /row -->
			<div class="row">
				<div class="col-md-12">
					  <div class="form-group">
						<textarea class="form-control" name="ety_content" value="" id="ety_content" rows="3"></textarea>
					  </div>
				</div>
				<div class="col-md-12 margin-bottom-20">
					  <div class="form-check">
						<input type="checkbox" name="agree" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">약관동의</label>
					  </div>
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-dark ks4 sendmail">문의하기</button>
				</div>
			</div><!-- /row -->					
		</div>
	</div>
</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');