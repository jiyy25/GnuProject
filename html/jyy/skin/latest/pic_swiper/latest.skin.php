<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 1920;
$thumb_width2 = 768;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;

$board_file_path = G5_DATA_PATH . '/file/' . $bo_table;
$board_file_url = G5_DATA_URL . '/file/' . $bo_table;

?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<div class="swiper <?php echo $bo_table; ?> jjySwiper" >
    <div class="swiper-wrapper">
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    $list[$i]['file'] = get_file($bo_table, $list[$i]['wr_id']);

    //두번쨰 첨부파일까지 출력
    $thumb1_src = $board_file_url . "/" . thumbnail($list[$i]['file'][0]['file'], $board_file_path, $board_file_path, $thumb_width,'', false,true);
    $thumb2_src = $board_file_url . "/" . thumbnail($list[$i]['file'][1]['file'], $board_file_path, $board_file_path, $thumb_width2,'', false,true);

    // if($thumb['src']) {
    //     $img = $thumb['ori'];
    // } else {
    //     $img = G5_IMG_URL.'/no_img.png';
    //     $thumb['alt'] = '이미지가 없습니다.';
    // }
    // $img_content = '<img src="'.$img.'" class="img-fluid" alt="'.$thumb['alt'].'" >';
    // $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    $wr_href = $list[$i]['wr_link1'];
    ?>
        <div  class="swiper-slide d-flex justify-content-center">
          
            <?php           
            echo "<a href=\"".$wr_href."\"> ";          
            // echo  $img_content; 
            echo   '<img src="'.$thumb1_src.'" class="img-fluid d-none d-lg-block" alt="'.$thumb['alt'].'" >';
            echo   '<img src="'.$thumb2_src.'" class="img-fluid d-lg-none" alt="'.$thumb['alt'].'" >';
           
            
            echo "</a>";
            ?>
           
        </div>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    게시물이 없습니다.
    <?php }  ?>
    </div>
     <div class="swiper-pagination "></div>
     <div class="btnBox d-lg-block d-none">
        <div class="swiper-button-prev swiperPB"></div>
        <div class="swiper-button-next swiperNB"></div>
     </div>
     
</div>
<script>
const swiper = new Swiper('.swiper.<?php echo $bo_table; ?>', {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      rewind: true,
  loop: true, 
  pagination: {
    el: '.swiper.<?php echo $bo_table; ?> .swiper-pagination',
    renderBullet: function (index, className) {
          return `<span class=" ${className} dot "> ${(index + 1)}</span>`;
        },
  }, 
  navigation: {
    nextEl: '.swiper.<?php echo $bo_table; ?> .swiper-button-next ',
    prevEl: '.swiper.<?php echo $bo_table; ?> .swiper-button-prev ',
  }
});
</script>