<?php

require_once(dirname(__FILE__) . "/../../vendors/php-ffmpeg/autoload.php");
require_once(dirname(__FILE__) . "/../../vendors/ffmpeg-php/FFmpegAutoloader.php");		
require_once(dirname(__FILE__) . "/../FfmpegVideoFile.php");
FfmpegVideoTranscoding::$qtrotate_binary = dirname(__FILE__) . "/../../vendors/qtrotate/qtrotate.py";

global $argv;
$video = new FfmpegVideoFile($argv[1], array("rotation" => TRUE));
$video->saveImageByPercentage($argv[2], floatval($argv[3]));