<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/Users/andrewyardley/projects/wordpress-headless/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/Users/andrewyardley/projects/wordpress-headless/wp-content/wflogs/');
	include_once '/Users/andrewyardley/projects/wordpress-headless/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>