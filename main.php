<?php
/*
Plugin Name: Investment Fund Management Plugin

Description: Description
Author: Nguyễn Tiến Đạt
Author URI: http://fb.com/ntd.15
Version: 1.0
License: GPL2
Text Domain: languages
*/

/*

    Copyright (C) Year  Nguyễn Tiến Đạt  tiendatbt19@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//register bootstrap framework

/**
 * Register style sheet.
 */

include 'inc/config.php';

// Db functionp
include 'inc/db.php';
 
// Init plugin
include 'inc/init_plugin.php';


/*Add tab on member page of buddypress*/
include 'inc/buddypress-custom.php';

// Ajax handle
// include 'inc/ajax_handle.php';


// Shortcode
// include 'inc/short_code.php';
