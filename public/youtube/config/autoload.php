<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('googleapi');
$autoload['drivers'] = array();
$autoload['helper'] = array('youtube');
$autoload['config'] = array();

$lang_list = get_all_file_from_folder(APPPATH."../public/youtube/language/english");
$autoload_lang = array();
if(!empty($lang_list)){
	foreach ($lang_list as $key => $value) {
		$value = explode("/", $value);
		$value = end($value);
		$value = explode("_", $value);
		$value = $value[0];
		$autoload_lang[] = $value;
	}
}

$autoload['language'] = $autoload_lang;
$autoload['model'] = array();