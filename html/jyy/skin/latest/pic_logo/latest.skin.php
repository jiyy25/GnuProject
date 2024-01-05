<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 300;
$thumb_height = 42;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <?php
    for ($i=0; $i<$list_count; $i++) {
        
        $img_link_html = '';
        
        $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);

            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            // $img_content = '<img src="'.$img.'" alt="'.$list[$i]['subject'].'" >';
            $img_link_html = '<a href="http://'.$list[$i]['wr_link1'].'" class="'.$bo_table.$i.'" ><img src="'.$img.'" alt="'.$list[$i]['subject'].'" ></a>';
    

    ?>
            <?php echo $img_link_html; ?>

    <?php }  ?>
