<?php

/**
 * Autoload file
 *
 * You will not need this if you are using Composer.
 * https://getcomposer.org
 *
 * PSR-4 standard: http://www.php-fig.org/psr/psr-4/
 */

spl_autoload_register(function( $class )	{

	$prefix = 'Jabran\\';

	$base_dir = defined('CLASS_SRC_DIR') ? CLASS_SRC_DIR : dirname(__FILE__) . '/src';

	$len = strlen($prefix);

	if ( strncmp($prefix, $class, $len) !== 0 ) {
		return;
	}

	$rel_class = substr($class, $len);

	$file = $base_dir . DIRECTORY_SEPARATOR . str_replace('\\', '/', $rel_class) . '.php';

	if ( file_exists($file) ) {
		require $file;
	}

});