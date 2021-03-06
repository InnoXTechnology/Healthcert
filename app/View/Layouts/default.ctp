<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<?php echo $this->Html->charset(); ?>
	<title>กรมวิชาการเกษตร</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script src="<?= "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] ?>/js/jquery-1.8.1.js"></script>
	<script src="<?= "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] ?>/js/bootstrap.js"></script>
</head>
<body>
	<div class="topBackground">
		<div class="head1">
			<img src="<?= "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] ?>/img/logo.png" style="margin-top:10px; float:left; margin-left:45px; margin-bottom:-60px; "/>
			<p style="margin-top:70px;" id="headtext">ระบบยื่นคำขอและออกใบรับรองคุณภาพสินค้าเกษตร</p>
		</div>
	</div>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
	<div class="footer">
		<div class="footerContainer" align="center">
			<strong style="font-size:22px;">กรมวิชาการเกษตร กระทรวงเกษตรและสหกรณ์</strong>
			<br/>50 ถนนพหลโยธิน แขวงลาดยาว เขตจตุจักร กรุงเทพฯ 10900
			<br/>โทรศัพท์ : 0-2579-0151-8
		</div>
	</div>
</body>
</html>
