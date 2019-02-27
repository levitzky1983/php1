
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
		$title = 'MINIMALISTICA';
		$h1 = 'Minimalistica';
		$date = date("Y");
    ?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<?php echo "<title>$title</title>";	//первый способ?> 
</head>
<body>
	<div id="content">
		<?php echo '<h1>'.$h1.'</h1>';//второй способ?>		
		<ul id="menu">
			<li><a href="#">home</a></li>
			<li><a href="#">archive</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	
		<div class="post">
			<div class="details">
				<h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>
				<h3>Задание *</h3>
				<p>
				<?php
					 echo 'var a = 1;<br>var b = 2;<br>a = a + b;<br>b = a - b;<br>a = a - b;';	 
				?>
				</p>
			
			</div>
			<div class="body">
				<p>
				<?php
				echo '<h3>Задание 3</h3><br>';
					$a = 5;
					$b = '05';
					echo '$a = 5; <br>$b = \'05\';<br>';
					echo 'var_dump($a == $b); результат: ';
					var_dump($a == $b);
					echo 'Т.к. "==" не сравнивает типы данных и в итоге получается, что 5 равно 5<br><br>';
					echo 'var_dump((int)\'012345\'); результат: ';
					var_dump((int)'012345');
					echo 'Т.к. число приведено к типу integer, соответственно нуль слева отбрасывается<br><br>';
					echo 'var_dump((float)123.0 === (int)123.0); результат: ';
					var_dump((float)123.0 === (int)123.0); 
					echo 'Т.к."===" проверяет еще тип данных, а в данном случае они разные<br><br>';
					echo 'var_dump((int)0 === (int)\'hello, world\'); результат: ';
					var_dump((int)0 === (int)'hello, world'); 
					echo 'Результат true, так как тип данных одинаковый, а при преобразовании строки в integer php выдает 0';
				?>
				</p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3><a href="#">Ut enim risus rhoncus</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col">
			<h3><a href="#">Maecenas iaculis leo</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Quisque consectetur odio</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		
		<div id="footer">
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <?php echo $date.' year'//Текущий год?> <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>