<?php
require("../vendor/vimeo/vimeo-api/autoload.php");
require("./config.php");


$lib = new \Vimeo\Vimeo($client_id, $client_secret);
$lib->setToken($personal_token);

$file = $argv[1];

//$file = '/var/www/html/vimeo_upload/data/SampleVideo_1080x720_1mb.mp4';
if(is_file($file)){
	echo 'Uploading '.$file."...\n";

	//upload vidoe here
	$response = $lib->upload($file, false);


	//find last slash
	$slash = 0;
	if(strrpos($file, '\\')!==false){
		$slash = strrpos($file, '\\')+1;
	} else if(strrpos($file, '/')!==false){
		$slash = strrpos($file, '/')+1;
	}

	//update video filename
	$vid_name = substr($file, $slash);
	$response = $lib->request($response, array('name' => $vid_name), 'PATCH');

} else {
	echo "File not found ($file).\n";
}
