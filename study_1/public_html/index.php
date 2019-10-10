<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Study project</title>
	<link rel="stylesheet" href="/style2.css">
</head>
<body>
	<h1>Study project</h1>
	<form action="/index.php" method="">
		<label for="">Name</label>
		<input name="name" class="name"type="text">
		<label for="">Skills</label>
		<textarea class="skills_list" name="skills_list" id="" cols="50" rows="3"><?php echo $_GET["skills_list"];
		?></textarea>
		<label for="">Level</label>
		<textarea class="skills_lvl" name="skills_lvl" id="" cols="50" rows="3"><?php echo $_GET["skills_lvl"]; ?></textarea>
		<label for="">Items</label>
		<textarea class="items_list" name="items_list" id="" cols="50" rows="3"><?= $_GET['items_list'] ?></textarea>
		<label for="">Items count</label>
		<textarea name="items_count" id="" cols="50" rows="3"><?= $_GET['items_count'] ?></textarea>
		<button type="submit" class="submit_btn">Submit</button>
	</form>
	<?php 
		print_r($_GET);
		// Из введенных данных нужно вывести массив
		$skill = explode(',', $_GET['skills_list']);
		$lvl = explode(',', $_GET['skills_lvl']);
		$items = explode(',', $_GET['items_list']);
		$count = explode(',', $_GET['items_count']);
		echo "<br>";
		print_r($lvl);
		echo "<br>";
		print_r($skill);
		// Конечная задача вывести маркированный список скилов
	?>
	<div>
		<ul>
			<?php foreach ($skill as $key => $value): ?>
			<li>
				<?php echo $value ?> - <?php echo $lvl[$key]
				//При одинаковом значении ключей, можно использовать переменную $key из имеющегося цикла?>
			</li>
			<?php endforeach ?>
		</ul>
		<ul>
			<?php foreach ($items as $k => $v): ?>
				<li>
					<?php echo $v ?> - <?php echo $count[$k] ?>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
	<div>
		<h3>
			Работа с одномерным массивом
		</h3>
		<ul>
			<?php 
				$myfriends = ['Timentiy', 'Dash', 'Ed', 'Dimon', 'den', 'Ann', 'Max'];
				$ages = [12, 15, 90, 40, 53, 18, 20]; ?>
			<?php foreach ($myfriends as $key => $value): ?>
				<?php $i = $i + 1 ?>
				
				<li class="item">
					<?=	$value ?> - <?= $ages[$key] ?>
				</li>
			
			<?php endforeach ?>

		</ul>
		<style>
			.item{
				color:brown;
			}
		</style>
			<p class="">Количество эл-ов в массиве: <?php echo $i; ?></p>
			<p>3 друг с конца <?php echo $myfriends[$i - 3] ?></p>
			<div class="wrapper">
	</div>

	<!-- <?php 
		$films// = array ("name" => array("0" => "Чужой","1" => "Один дома","2" => "Титаник","3" => "Люди Икс","4" => "Изгой"), 
						//"date" => array("0" => "1979", "1" => "1990", "2" => "1997", "3" => "2000", "4" => "2000"),
						//"producer" => array("0" => "Ридли Скотт","1" => "Крис Коламбус","2" => "Крис Коламбус","3" => "Крис Коламбус","4" => "Крис Коламбус"),
						//"budget" => array("0" => "Многоденег","1" => "Многоденег","2" => "Многоденег","3" => "Многоденег","4" => "Многоденег"),
						//"fees" => array("0" => "Многоденег","1" => "Многоденег","2" => "Многоденег","3" => "Многоденег","4" => "Многоденег"))
	?> -->
	<div>
		<h3>Работа с массивами на примере таблицы</h3>
		<?php 
			/*
			$films = array('name' => array('Чужой','Один дома','Титатик','Люди Икс','Изгой'),
							'date' => array('1979','1990','1997','2000','2000'),
							'producer' => array('Somebody','Somebody','Somebody','Somebody','Somebody'),
							'budget' => array('Многоденег','Многоденег','Многоденег','Многоденег','Многоденег'),
							'fees' => array('Многоденег','Многоденег','Многоденег','Многоденег','Многоденег'));
			*/
		?>
		<?php 
			$films = [[
				 'name' => 'Titanic',
				 'date' => '2000',
				 'producer' => 'kameron',
				 'budget' => 100000,
				 'fees' => 10000,
				], [
				 'name' => 'Matrix',
				 'date' => '2001',
				 'producer' => 'somebody',
				 'budget' => 1000,
				 'fees' => 100,			
				]];

		 ?>
		<p>Цикл должен закрываться должен на том же уровне</p>
		<table>
			<thead>Films</thead>
			<thead>
				<tr>
					<th>Название</th>
					<th>Дата</th>
					<th>Режиссёр</th>
					<th>Бюджет</th>
					<th>Сборы</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($films as $key => $value): ?>
					<tr>
						<td><?= $value['name'] ?></td>
						<td><?= $value['date'] ?></td>
						<td><?= $value['producer'] ?></td>
						<td><?= $value['budget'] ?></td>
						<td><?= $value['fees'] ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

	<div style="margin-top: 20px;">
		<h3>Практика на понимание конкатенации</h3>
		<?php 
			$SimpleString = 'Petropavlovsk';
			$SimpleString .= '-Kamchatsk';
			echo $SimpleString;
			echo "<br>";
			echo $SimpleString[0], $SimpleString[4], $SimpleString[14];
		?>
		<h3>Операции с разными типами данных</h3>
		<?php 
			$SimpleNumber = 5;
			echo "Число 5 - false = ", $SimpleNumber - false;
			echo "<br>";
			echo "Число 6 + true = ",$SimpleNumber + true;
		?>
	</div>
	<h3>Задачи</h3>
	<div>
		<p>Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.</p>
		<?php 
			$letters = abcde;
			echo $letters;
			echo "<br>";
			$letters[0] = '!';
			echo "Результат: ", $letters;
		 ?>
	</div>
	<div>
		<p>Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.</p>
		<?php 
			$num = '1,2,3,4,5';
			// $num = '12345';
			/*Я думаю эту задачу можно было бы решить циклом, но я пока амёба*/
			//$sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
			$sum = array_sum(explode(',', $num));
			// $sum = array_sum($num); не рабочий вариант, требует чтобы переменная была строковой
			echo $num;
			echo "<br>";
			echo "Сумма: ", $sum;
		?>
	</div>
	<div>
		<p>Cкрипт, который считает количество секунд в часе, в сутках, в месяце.</p>
		<?php
			$sec = 60;
			$min = $sec * 60;
			$hour = $min * 60;
			$day = $hour * 24;
			$month = $day * 30;
			echo "Секунд в минуте: ", $min;
			echo "<br>";
			echo "Секунд в часе: ", $hour;
			echo "<br>";
			echo "Секунд в дне: ", $day;
			echo "<br>";
			echo "Секунд в 30-дневном месяце: ", $month;

		?>
	</div>
</body>