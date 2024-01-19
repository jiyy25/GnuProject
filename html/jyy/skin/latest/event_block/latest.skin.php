<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
$thumb_width = 400;
$thumb_height = 470;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="event_pic margin-bottom-100">
    <h2 class="lat_title text-center mb-5"><?php echo $bo_subject ?></h2>
    <ul class="mt-5 d-md-flex justify-content-center justify-content-lg-between align-items-center">
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
    
        <li class="event_li border text-center p-2 mb-3 mb-lg-0 mt-3">
            <a href="<?php echo $wr_href; ?>" class="lt_img mb-1"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>
            <?php

            echo "<a href=\"".$wr_href."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];
            echo "</a>";
			


            ?>
            <span><?php echo $list[$i]['wr_content']?></span>
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>

</div>
