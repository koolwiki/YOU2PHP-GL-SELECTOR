<?php
/*
@在浏览器选择YOU2PHP缺省国家和地区
2018-7-28
*/
$gls=array(
"HK"=>"香港",
"TW"=>"台湾",
"JP"=>"日本",
"KR"=>"韩国",
"US"=>"美国",
"FR"=>"法国",
"UK"=>"英国",
"DE"=>"德国",
"IN"=>"印度");
//可以增加更多的选项

$gl=(isset($_COOKIE['gl']) && $_COOKIE['gl'])?$_COOKIE['gl']:'HK';
if(!isset($gls[$gl])){$gl='HK';}

$select[]="<select id='select_gl'>";
foreach($gls as $k=>$v){
	$is_selected=($k==$gl)?' selected ':'';
	$select[]="  <option value =\"$k\"{$is_selected}>$v</option>";
}
$select[]="</select>";
echo join("\n",$select);
?>

<script>
$(document).ready(function() {
	$("#select_gl").change(function(){
		var gl=$(this).children('option:selected').val()
		document.cookie="gl="+gl;
		window.location.reload()
	})
})
</script>
