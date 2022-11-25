<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
//	header('Location: '.$uri.'/src/hello.php');
//	header('Location: '.$uri.'/src/portfolio.php');
	header('Location: '.$uri.'/src/fuji/fujip.php');
	exit;
?>
Something is wrong with the XAMPP installation :-(
