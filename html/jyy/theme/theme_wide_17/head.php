<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가



include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');


// 팝업추가
if(defined('_INDEX_')) {
    include G5_BBS_PATH.'/newwin.inc.php';
}

?>



<?php include_once(G5_THEME_PATH.'/navication.php');?>


<?php 
	if($bo_table){
		include_once(G5_THEME_PATH.'/top_banner.php'); 
	}
?>
