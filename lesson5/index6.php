<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

/*Задача №1*/

echo '<b>Задача №1 - Создайте функцию drawTable() или Table(). Задайте для функции три аргумента: $col, $row, $color. Отрисуйте таблицу умножения 3 раза с разным цветом., вызывая свою функцию с произвольными параметрами. </b></br></br>';

function Table($col, $row, $color){
echo '<table border="1">';
for($i=1;$i<=$col;$i++){
    echo '<tr>';
    for($j=1;$j<=$row;$j++){
        echo "<td style='background-color:{$color}'>".$i*$j.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
}
Table($col=5, $row=15, $color = '#FFD700');
Table($col=8, $row=5, $color = '#BDB76B');
Table($col=10, $row=10, $color = '#FF0000');
echo '</br><hr>';

/*Задача №2*/

echo '<b>Задача №2 - Создайте функцию MainMenu() с двумя аргументами. Первый аргумент $menu - в него будет передаваться массив, содержащий структуру меню. Второй аргумент $type со значением по умолчанию равным true. Данный параметр указывает, каким образом будет отрисовано меню - вертикально или горизонтально. Измените код таким образом, чтобы меню отрисовывалось в зависимости от входящего параметра $type - либо вертикально, либо горизонтально. Отрисуйте оба таких меню. </b></br></br>';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<? include ('menu.php'); ?>
<div class="wrapper">
	<div class="header">
		<div class="inner-header">
			<div id="nav">
			<? if ($menu) :?>
				<ul>
					<? foreach ($menu as $page): ?>
						<? if($page->menu_id == 1 && $page->visible): ?>
							<li><a href="<? echo $page->url; ?>"><? echo $page->name; ?></a></li>
						<? endif; ?>
					<? endforeach;?>
				</ul>
			<? endif; ?>
		</div>
		</div>
	</div>
</body>
</html>





<?php
function MainMenu($menu, $type=true){
	
}

?>
