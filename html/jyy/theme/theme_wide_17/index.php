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
	<?php echo latest('bestmenu', 'bestmenu', 16, 24); ?>
</div>




<!-------------------------- 영상 게시판 -------------------------->

<div class="margin-top-110 margin-bottom-110 jjy_bestmenu jjy_mv position-relative">
	<!-- LATEST :  -->

	<?php echo latest('mov','movie',1,100)?>
</div>
<!-- <div class="back_img"></div> -->









<!-------------------------- 이벤트 게시판 -------------------------->
<div class="padding-top-60 jjy_event">
	<div class="container">
		<?php echo latest('event_block','eventtime', 3, 100);?>
	</div>
</div>











<!-------------------------- 

지도 : 구글지도로 주소를 검색하신 다음에 공유버튼을 클릭하여 iframe 형식으로 가져오시면 됩니다.

-------------------------->
<!-- <div class="container-fluid">
	<input type="hidden" value="<?php echo G5_THEME_URL?>" id="send_url">
	<div class="row">
		<div class="col-md-6" style="padding:0px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.8712817288642!2d127.6344159516823!3d37.298184379750005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35635d8af4a6c211%3A0x9b0b7257a5a5a5cc!2z7Jes7KO87Iuc7LKt!5e0!3m2!1sko!2skr!4v1654254206256!5m2!1sko!2skr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
		</div>
		<div class="col-md-6 text-left" style="padding:30px; background:#f5f5f5;">
			<div class="margin-bottom-40">
				<h2 class="en1">Contact US</h2>
			</div>
			<div class="row">
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_name" value="" placeholder="담당자">
				</div>
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_phone" value="" placeholder="연락처">
				</div>
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_email" value="" placeholder="이메일">
				</div>
			</div>
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
			</div>			
		</div>
	</div>
</div> -->



<!-- 가맹문의 폼태그 영역 -->

<div class="jjy_storeform">
	<div class="container d-flex flex-column flex-lg-row  justify-content-between align-items-center">
		<div class="store_title d-flex flex-sm-column flex-row mx-2 align-items-center">
			<strong class="text-center">가맹문의</strong>
			<span class="text-center">1992-0825</span>
		</div>
		<form action="" class="jjy_form d-flex flex-column flex-lg-row m-1">
			<div class="formbox d-flex flex-column flex-sm-row justify-content-between align-items-center">
				<div class="form1 mr-sm-2 mb-1 mb-lg-0">
					<input type="text" placeholder="이름" class="border">
				</div>
				<div class="form2 mr-sm-2 mb-1 mb-lg-0">
					<input type="text" placeholder="전화번호" class="border">
				</div>
			</div>
			<div class="d-flex flex-column flex-sm-row align-items-center ">
				<select name="user_area" id="user_area" class="border  mr-sm-2 mb-2 mb-md-0">
					<option value="">가맹희망지역</option>
					<option value="">서울</option>
					<option value="">대전</option>
					<option value="">대구</option>
					<option value="">부산</option>
				</select>
				<button class="">문의하기</button>
				
			</div>
			<div class ="text-center align-items-center d-flex flex-column flex-lg-row agreeBox ml-1">
				<label for="agree2">
					<p>개인정보 처리방침 동의</p>
					<input type="checkbox" id="agree" class="agree text-center">
				</label>
				
			</div>
			
			
		</form>
	</div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');