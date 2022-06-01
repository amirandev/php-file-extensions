<?php
$extensions = [
	'audio' => [
		'mp3', 'weba', 'flac', 'midi', 'wav', 'm4a', 'wma', 'wave',
		'aac', 'opus', 'm4p', 'mp2', 'amr', 'ogg', 'ac3', 'aif',
		'aifc', 'aiff', 'au', 'caf', 'm4b', 'oga', 'sfark', 'voc'
	],
	'video' => [
		'3g2', '3gp', '3gpp', 'avi', 'cavs', 'dv', 'dvr', 'flv',
		'm2ts', 'm4v', 'mkv', 'mod', 'mov', 'mp4', 'mpeg', 'mpg',
		'mts', 'mxf', 'ogg', 'rm', 'rmvb', 'swf', 'ts', 'vob',
		'webm', 'wmv', 'wtv'
	],
	'image' => [
		'3fr', 'arw', 'avif', 'bmp', 'cr2', 'cr3', 'crw', 'dcr',
		'dng', 'eps', 'erf', 'gif', 'heic', 'icns', 'ico', 'jfif',
		'jpeg', 'jpg', 'mos', 'mrw', 'nef', 'odd', 'odg', 'orf',
		'pef', 'png', 'ppm', 'ps', 'psd', 'raf', 'raw', 'rw2', 
		'tif', 'tiff', 'webp', 'x3f', 'xcf', 'xps'
	]
];

$mediaTypes = [
	'audio', 'video', 'image'
];

function check($ext, $mediaType){
	global $extensions, $mediaTypes;
	$ext = strtolower(trim($ext));
	$mediaType = strtolower(trim($mediaType));
	if(!array_key_exists($mediaType, $extensions)) return false;

	return in_array($ext, $extensions[$mediaType]) ? true : false;
}


// var_dump(check('png', 'image'));

