<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Cайт</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<? include ('menu.php'); ?>
<div class="wrapper">
	<div class="header">
		<div class="inner-header">
			<div id="nav">
			<? if ($menu) :?>
				<ul>
					<? foreach ($menu as $page):?>
						<? if($page->menu_id == 1 && $page->visible): ?>
							<li><a href="<? echo $page->url; ?>"><? echo $page->name; ?></a></li>
						<? endif; ?>
					<? endforeach;?>
				</ul>
			<? endif; ?>
		</div>
		</div>
	</div>
	<div class="row">
	<div class="sidebar">
		<?include('categories_example.php');?>
			<? if ($categories):?> 
			<ul>
			<?foreach ($variable as $categ) :?>
				<div class="inner-sidebar"><? echo "<li>$category->name</li>";?></div>
			<?endforeach;?>
			</ul>
	</div>
	
	<div class="content clearfix">
		<? include('products.php'); ?>
		<? if ($products):?> 
			<? foreach ($products as $product):?>
				<div class="product">
					<div class="image"></div>
					<div class="name"><? echo $product->name; ?></div>
					<select>
						<? foreach ($product->variants as $variant) :?>
							<option><? echo $variant->price.' - '.$variant->stock; ?></option>
						<? endforeach;?>
					</select>
				</div>
			<? endforeach;?>
		<? endif;?>
	</div>
		
	</div>
	<div class="footer">
		<div class="inner-footer">Футер</div>
	</div>

</div>

</body>
</html>