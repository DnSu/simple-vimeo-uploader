<?php
require("../vendor/vimeo/vimeo-api/autoload.php");
require("./config.php");


$lib = new \Vimeo\Vimeo($client_id, $client_secret);
$lib->setToken($personal_token);

$file = $argv[1];

if(is_file($file)){
	//$file = '/var/www/html/vimeo_upload/data/SampleVideo_1080x720_1mb.mp4';
	echo $file."\n";
	$response = $lib->upload($file, false);
} else {
	echo "File not found ($file).\n";
}
