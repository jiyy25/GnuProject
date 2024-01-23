<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <div class="center-heading margin-top-40">
		<h2><?php echo $bo_subject; ?></h2>
	</div>
    <?php for($i=0; $i<$list_count; $i++){ 
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            ?>
    <div class="back_img py-3" style="background-image:url(<?php echo $img; ?>); ">
    <?php } ?>
    <div class="container d-lg-flex justify-content-between align-items-stretch mv_all py-3 my-5">
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?> 
        <div class ="mv_texbox col-lg-4 w-auto py-5 d-flex flex-column justify-content-between mb-3 mb-lg-0 ">
            <a href="<?php echo $list[$i]['wr_link1']?>">
            <?php echo $list[$i]['wr_content']?>
            </a>
            <a class="mv_btn text-center" href="<?php echo $list[$i]['wr_link1']?>">창업문의</a>
        </div>
        <div class="col-lg-7">
            <div class="position-relative ml-lg-5 overflow-hidden" style="height:0; padding-top:56%; border-radius:10px; " >
            <iframe class="position-absolute w-100 h-100" style="top:0; left:0;"   src="https://www.youtube.com/embed/<?php echo $list[$i]['wr_subject']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            
        </div>

    <?php }  ?>
    </div>
    </div>
    </div>


