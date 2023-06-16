<?php
	// 1
	echo "Задание №1<br>";
	$var = "Hello";
	echo "$var[0] $var[1] $var[4] <br><br>";

	// 2
	echo "Задание №2<br>";
	$sec = pow(60, 2);
	echo "$sec секунд в часе <br><br>";

	//3
	echo "Задание №3<br>";
	$var = 1;
	$var += 12;
	$var -= 14;
	$var *= 5;
	$var /= 7;
	$var += 1;
	$var -= 1;
	echo "$var <br><br>";

	//4
	echo "Задание №4<br>";
	$a = 3;
	echo "$a <br><br>";

	//5
	echo "Задание №5<br>";
	$a = 10;
	$b = 2;
	echo $a+$b; echo "<br>";
	echo $a-$b; echo "<br>";
	echo $a*$b; echo "<br>";
	echo $a/$b; echo "<br><br>";

	//6
	echo "Задание №6<br>";
	$c = 15;
	$d = 2;
	$result = $c+$d;
	echo "$result <br><br>";

	//7
	echo "Задание №7<br>";
	$a=10;
	$b=2;
	$c=5;
	echo $a+$b+$c; echo "<br><br>";

	//8
	echo "Задание №8<br>";
	$a=17;
	$b=10;
	$c=$a-$b; 
	$d = 7;
	$result = $d + $c;
	echo "$result <br><br>";

	//9
	echo "Задание №9<br>";
	$text = "Привет, Мир!";
	echo "$text <br><br>";

	//10
	echo "Задание №10<br>";
	$text1 = "Привет ";
	$text2 = "Мир!";
	$result = $text1 . $text2;
	echo "$result <br><br>";

	//11
	echo "Задание №11<br>";
	$name = "моё имя";	
	echo "Привет, $name! <br><br>";

	//12
	echo "Задание №12<br>";
	$age = 20;
	echo "Мне $age лет! <br><br>";

	//13
	echo "Задание №13<br>";
	$text = "abcde";
	echo "$text[0] $text[2] $text[4] <br><br>";

	//14
	echo "Задание №14<br>";
	$text[0] = "!";
	echo "$text <br><br>";

	//15
	echo "Задание №15<br>";
	$num = "12345";
	echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
	echo "<br><br>";

	//16
	echo "Задание №16<br>";
	$secForHour = pow(60,2);
	$secForDay = $secForHour*24;
	$secForMonth = $secForDay*30;
	echo "$secForHour секунд в часе <br>";
	echo "$secForDay секунд в дне <br>";
	echo "$secForMonth секунд в месяце <br><br>";

	//17
	echo "Задание №17<br>";
	$hour = 13;
	$minut = 28;
	$second = 59;

	echo $hour.":".$minut.":".$second;
	echo "<br><br>";

	//18
	echo "Задание №18<br>";
	$var = 13;
	$var = pow($var, 2);
	echo $var;
	echo "<br><br>";

	//19
	echo "Задание №19<br>";
	$var = 47;
	$var += 7;
	$var -= 18;
	$var *= 10;
	$var /= 20;
	echo $var;
	echo "<br><br>";

	//20
	echo "Задание №20<br>";
	$text = 'Я';
	$text .=' хочу';
	$text .=' знать';
	$text .=' PHP!';
	echo $text;
	echo "<br><br>";

	//21
	echo "Задание №21<br>";
	$var = 10;
	$var++;
	$var++;
	$var--;
	echo $var;
	echo "<br><br>";

	//22
	echo "Задание №22<br>";
	$var = 10;
	$var += 7;
	$var++;
	$var--;
	$var += 12;
	$var *= 7;
	$var -= 15;
	echo $var;
	echo "<br><br>";
?>