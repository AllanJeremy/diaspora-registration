<?php defined('BASEPATH') or exit('No direct script access allowed');

// Get an asset from the public assets folder
function get_asset_url($asset_name,$asset_folder=NULL)
{
    $asset_folder = (isset($asset_folder))?$asset_folder.'/':'';
    $asset_url = base_url('assets/'.$asset_folder.$asset_name);
    
    return $asset_url;
}

// Get a flag's url
function get_flag_url($country_code,$dimensions=32)
{
    $dimensions = (string)$dimensions;
    $subfolder = $dimensions.'x'.$dimensions;# Eg. 16x16 for 16 by 16 flag icons, convention over configuration

    $asset_name = $country_code.'.png';
    $asset_url = get_asset_url($asset_name,'img/flags/'.$subfolder);

    return $asset_url;
}