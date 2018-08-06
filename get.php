<?php 
error_reporting(1);
header('Content-Type: application/json');
if ( !isset( $_GET['id'] ) || !$_GET['id'] ) {
	header( 'Content-Type: application/json' );
	$log = array(
		'error' => true,
		'message' => 'Kontol, Lo Belom Masukin "ID" NGENTOD'
	);
	exit( json_encode( $log ) );
}
$id = $_GET['id'];
$url = file_get_contents('https://www.mp4upload.com/embed-'.$id.'.html'); 
$mp4u = explode('quot', $url);
$mp4u = explode('|282', $mp4u[1]);
$www = explode('|www', $url);
$www = explode('|', $www[2]); 
$link = ('https://www'.$www[0].'.mp4upload.com:282/d/'.$www[40].'/video.mp4');
exit( json_encode( $link ) )
?>
