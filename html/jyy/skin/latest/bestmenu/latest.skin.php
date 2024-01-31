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
    <ul class="d-flex m-0 titleul">
        <li>
        <h3 class="lat_title" data-set=".drink" >추천음료</h3>
        </li>
        <li>
        <h3 class="lat_title" data-set=".dessert" >디저트</h3>
        </li>
    </ul>
    

    <div class="bst_9menu d-lg-flex align-items-center justify-content-center p-3">

    <?php
    for ($i=1; $i<2; $i++) {
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
        <div class="bst_big bst_itemli d-flex justify-content-center flex-column align-items-center <?php  if ($list[$i]['ca_name']) echo  $list[$i]['ca_name']  ?>">
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
        <?php }  ?>


        <div class="bst_small row align-items-center text-center justify-content-center">
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
        <div class="bst_itemli col-lg-3 <?php  if ($list[$i]['ca_name']) echo  $list[$i]['ca_name']  ?>">
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

    <script>
    $(function(){
        $(".bst_itemli").hide()
        $(".bst_itemli.drink").show()
       // lat_title을 클릭한 경우의 이벤트
       let datafliter = "";
       $('.lat_title').click(function(){
        datafliter= $(this).data("set");
        $('.bst_big').hide()
        $(".bst_itemli").hide()
        $(datafliter).show()
        });
    })
    </script>
</div>
