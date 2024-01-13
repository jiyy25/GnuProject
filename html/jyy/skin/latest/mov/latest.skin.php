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
    <div class="back_img">
    <div class="container d-flex justify-content-between align-items-center mv_all position-absolute">
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?> 
        <div class ="mv_texbox">
        <a href="<?php echo $list[$i]['wr_link1']?>">
        <?php echo $list[$i]['wr_content']?>
        </a>

        <a class="mv_btn text-center" href="<?php echo $list[$i]['wr_link1']?>">창업문의</a>
        </div>

        <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/v61F2kOmb3E?si=uZskxr6evYwdh7ko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

    <?php }  ?>
    </div>
    </div>
    </div>


