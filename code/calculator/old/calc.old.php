<?php
$ost="28+17-4*3+1";
$i=0;
while (len($ost)>1){
	$i++;
	$m=$ost;
	while(len($m)>1){

	}

}


?>
цикл по одному символу.
берем очередной символ и проверяем (функцией), не является ли он управляющим  (+-*/ и т.д.)
если да, то предыдущий остаток приравниваем переменной "число один", а управляющий - идеттицицируем.
упрвляющие символы бывают разного приоритета вычислений.
можно сперва определить позиции верхних УС, потом средних и младших (степень, умножить/разделить и сложение=вычитание). Соответственно высшие УС выполняются раньше, но нужно сперва определить цифры.
поэтому делаем табличку: 1ая колонка (длина бесконечна) - цифры и УС, вторая - их определения. Все это записываем в БД (уж коли нам надо использовать БД). Еще есть скобки. с ними сложнее, с ними попозже.
сначала ищем высшие символы - и сполняем их. схлопываем табличку на вышедшие из оборота возведенные в степень числа  (левые и правые).  Можно не слопывать, а проверять левые и правые числа функциями, которые будут искать игнорируя шрамы от счисленных чисел.
я бы разобрал табличку на управляющие символы и определил бы их качество, а междунимные - определил бы в цифры. Проверить надо - из чисел ли они состоят и есть ли в них не числа (буквы и спецсимволы).
потом в три приема счислил бы высшие, средние и низшие счисления. А так же ванильные =)) (шутка)
И выдал бы результат.
а передевать можно для начала целым выражением. Но для этого его (выражение) нужно сначала собрать джаваскриптом. Его задачи использовать не было, но и никто не запрещал. Но его надо изучать.
Поэтому передавать будем посимвольно, по мере ввода. пхп будет накапливать все это в базе, отображая на экране веб-странички введенное, а по нажатию (передаче) "равно" - вычислять. Логично.
<button type="button" onclick="myFunction("0")">"0"</button>
<button type="button" onclick="myFunction("1")">"1"</button>
<button type="button" onclick="myFunction("2")">"2"</button>
<button type="button" onclick="myFunction("3")">"3"</button>
<button type="button" onclick="myFunction("4")">"4"</button>
<button type="button" onclick="myFunction("5")">"5"</button>
<button type="button" onclick="myFunction("6")">"6"</button>
<button type="button" onclick="myFunction("7")">"7"</button>
<button type="button" onclick="myFunction("8")">"8"</button>
<button type="button" onclick="myFunction("9")">"9"</button>
<button type="button" onclick="myFunction("calc.php")">"calc.php"</button>
<button type="button" onclick="myFunction("calcweb.php")">"calcweb.php"</button>
<button type="button" onclick="myFunction("cod.sh")">"cod.sh"</button>
<button type="button" onclick="myFunction("script.htm")">"script.htm"</button>
<button type="button" onclick="myFunction("scritp.htm")">"scritp.htm"</button>
<button type="button" onclick="myFunction("/")">"/"</button>
<button type="button" onclick="myFunction("+")">"+"</button>
<button type="button" onclick="myFunction("-")">"-"</button>
<button type="button" onclick="myFunction("=")">"="</button>
