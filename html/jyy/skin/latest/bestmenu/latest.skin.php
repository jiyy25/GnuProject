<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 177;
$thumb_height = 177;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="center-heading margin-top-40">
		<h2 class=""><?php echo $bo_subject ?></h2>
	</div>
<div class="bst_pic_lt">
    <ul class="d-flex">
        <li>
        <h3 class="lat_title">추천메뉴</h3>
        </li>
        <li>
        <h3 class="lat_title">디저트</h3>
        </li>
    </ul>
    

    <div class="bst_9menu d-flex align-items-center p-3">
    <?php
    $thumb = get_list_thumbnail($bo_table, $list[0]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[0]['wr_id']);
    ?>
        <div class="bst_big">
            <a href="<?php echo $wr_href; ?>" class="bst_lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>
            <?php
            echo "<a href=\"".$wr_href."\"> ";
            if ($list[0]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[0]['subject'];
            echo "</a>";
            ?>

        </div>


        <div class="bst_small row">
    <?php
    for ($i=1; $i<$list_count; $i++) {
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
        <div class="bst_itemli col-3 align-items-center text-center">
            <a href="<?php echo $wr_href; ?>" class="bst_lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>
            <?php

            echo "<a href=\"".$wr_href."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];
            echo "</a>";
			
            ?>

        </div>
    <?php }  ?>
    </div>




    </div>


    

</div>
