<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->Html->script("jquery-1.11.2.js");
		echo $this->Html->css("kai.css");
		echo $this->Html->script("kai.js");
		echo $this->Html->script("imgLiquid-min.js");
		echo $this->Html->script("polyfill.object-fit.min.js");


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $scripts_for_layout;
	?>

	<!-- Jquery 導入 -->
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

	<?php
	echo $this->Html->script('bootstrap.min.js');
	echo $this->Html->css('bootstrap.min.css');
	echo $this->Html->css('polyfill.object-fit.css');
	echo $this->Html->css('style.css')
	?>
	<script type="text/javascript">
		$(document).ready(function() {
    		$(".img-resize").imgLiquid({
    			fill:false, //アス比維持
    		});
		});
	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			objectFit.polyfill({
				selector: 'img-obfit',
				fittype: 'cover'
			});
		});
	</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<nav class="navbar navbar-default">
			  <div class="container-fluid"  style="margin:0 auto;">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			     <a class="navbar-brand" href="#"><? echo $this->Html->image('kokologo.png', array('alt' => 'kokokara', 'class' => 'header-klogo-img', ));?></a>
			 	 
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <!-- <li><a href="#">Home<span class="sr-only"></span></a></li> -->
			        <li class="header-btn-lg-1"><a href="#" class="dropdown-toggle header-gal" style="border-left:1px solid #ededed;" data-toggle="dropdown" role="button" aria-expanded="false">国内インターン <span class="caret"></span></a>
			        　　<!--
			        	<ul class="dropdown-menu" role="menu">
			            <li><?php echo $this->Html->link('長期インターン', array('controller' => 'events', 'action' => 'category', 1)); ?></li>
			            <li><?php echo $this->Html->link('短期インターン', array('controller' => 'events', 'action' => 'category', 2)); ?></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			      		-->
			        </li>
			        <li class="header-btn-lg-2"><?php echo $this->Html->link('海外インターン', array('controller' => 'events', 'action' => 'category', 3), array('class' => 'header-gal')); ?></li>
			        <li class="header-btn-lg-3"><?php echo $this->Html->link('留学', array('controller' => 'events', 'action' => 'category', 5), array('class' => 'header-gal')); ?></li>
			        <li class="header-btn-lg-4"><?php echo $this->Html->link('習い事', array('controller' => 'events', 'action' => 'category', 7), array('class' => 'header-gal')); ?></li>
			        <li class="header-btn-lg-5"><?php echo $this->Html->link('おもしろい', array('controller' => 'events', 'action' => 'category', 8), array('class' => 'header-gal')); ?></li>
			        <li class="header-btn-lg-6"><?php echo $this->Html->link('合宿', array('controller' => 'events', 'action' => 'category', 6), array('class' => 'header-gal')); ?></li>
			        <li class="header-btn-lg-7"><?php echo $this->Html->link('学生団体', array('controller' => 'events', 'action' => 'category', 9), array('class' => 'header-gal')); ?></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	<!--
			      	<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li> 
			    	-->
			        <li><a href="#">kokokaraって？</a></li>
			        <li class="header-login-btn"><a href="#"> ログイン></a></li>
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
			<!-- 		
			<h1><?php echo $this->Html->link('kokokara', '/'); ?></h1>
		-->
</body>
</html>
