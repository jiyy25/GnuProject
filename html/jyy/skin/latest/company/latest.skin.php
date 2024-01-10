<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$thumb_width = 925;
$thumb_height = 450;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="center-heading margin-top-40">
		<h2><?php echo $bo_subject; ?></h2>
</div>
<div class="d-lg-flex justify-content-between jjy_picBox">
    <div class="com_imgbox">
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
        <div class="company_li">
            <a href="<?php echo $wr_href; ?>" class="lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>
        </div>
        </div>
    <div class="contentBox ml-4">
    <?php echo $list[$i]['wr_content'] ;?>
                <a href="<?php echo $list[$i]['wr_link1'] ;?>" class="p-2 border"><?php echo $list[$i]['wr_subject'] ;?></a>
    </div>
    <?php }  ?>


    
</div>
