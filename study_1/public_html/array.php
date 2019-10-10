<?php 

echo "Имя: ".$personal["name"];
echo "Email: ".$personal["email"];
for ($i=0;$i<sizeof($beer);$i++)
echo $beer[$i]."<br>";

?>


/*Стрёмный вывод массива*/
<?php
$myfriends = ['Timentiy', 'Dash', 'Ed', 'Dimon', 'den', 'Ann', 'Max'];
$ages = [12, 15, 90, 40, 53, 18, 20];
echo "<ul>";

echo "<li class='item'>";
echo $myfriends[0];
echo $ages[0];
echo "</li>";

echo "<li class='item'>";
echo $myfriends[1];
echo $ages[1];
echo "</li>";

echo "<li class='item'>";
echo $myfriends[2];
echo $ages[2];
echo "</li>";

echo "<li class='item'>";
echo $myfriends[3];
echo $ages[3];
echo "</li>";

echo "<li class='item'>";
echo $myfriends[4];
echo $ages[4];
echo "</li>";

echo "</ul>";

$i = 0;

?>


	<?php 

		echo $films;
		$films = array('name' => array('Чужой','Один дома','Титатик','Люди Икс','Изгой'),
						'date' => array('1979','1990','1997','2000','2000', '1000'),
						'producer' => array('Somebody','Somebody','Somebody','Somebody','Somebody'));



	for($i = 0; $i < count($films['date']); $i++) {
		echo $films['date'][$i] . '<br>';
	}	

	foreach ($films['date'] as $key => $value) {
		echo $value . '<br>';
	}

	$arr = [[1, 2], [3, 4, 6, 7, 8, 9], [5, 6]];

	for($i = 0; $i < count($arr); $i++) {
		$value = $arr[$i];
		for($j = 0; $j < count($value); $j++) {
			echo $value[$j];
		}
		echo '<br>';
	}

	foreach ($arr as $key => $value) {
		foreach ($value as $k => $v) {
			echo $v;
		}
		echo "<br>";
	}

	print_r($arr[0]);
		echo "<br>";
	print_r($arr[1]);
		echo "<br>";
	print_r($arr[2]);

	$arr = [
		'numbers' => [1, [2, 3], 4, 5, 6, 7],
		'letters' => ['a', 'b', 'c', 'd'],
	];

	echo "<br>";
	echo "numbers:";
	foreach ($arr['numbers'] as $key => $value) {
		
		if(is_array($value))
			foreach ($value as $k => $v) {
				echo $v;
			}
		else 
			echo $value;
	}
	echo "letters:";
	foreach ($arr['letters'] as $key => $value) {
		
		if(is_array($value))
			foreach ($value as $k => $v) {
				echo $v;
			}
		else 
			echo $value;
	}

	// как вывести все числа?
	// нужно проходится по каждому элементу
	// но ведь может встретится еще массив вместо цифры, что делать?
	// тогда нужно проверять что из себя представляет значение, цифра или массив и если это массив, то еще раз идти циклом уже по значению
	// как проверять что значение это массив?
	// нужно использовать функцию is_array



	// идем по каждому элементу циклом
	// проверяем что из себя представляет значение
	// если это массив, то запускаем еще один цикл
	// иначе просто выводим число

	?>
<table>
	<tr>
		<td></td>
	</tr>
</table>