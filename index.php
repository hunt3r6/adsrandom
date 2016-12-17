<?php 

/*$result_random = rand(1,9); 
if($result_random <= 3){

	require ('part/head.php');
	require ('ads/ads300x250.php');
	require ('part/footer.php');

}else if($result_random <= 6){

	require ('part/head.php');
	require ('ads/ads728x90.php');
	require ('part/footer.php');

}else{

	require ('part/head.php');
	require ('ads/ads160x600.php');
	require ('part/footer.php');
} 

clearstatcache();*/
$domain = $_SERVER['SERVER_NAME'];
$a = "www.foodbeas.com";

if ($domain == $a ) {
	echo "betul";
}elseif ($domain == $b) {
	
}elseif ($domain == $c) {
	
}

?>