<head>
    <meta http-equiv="Refresh" content="20" />
	<title>calc</title><!--'отправка, но пока пхп не прикручено - просто очистка-->
	<script>
		function cliear() {  //'клиир - очистка.
		    document.getElementById('demo').innerHTML = ""; 
		}
	</script>
	<script>
		function send(symbol) { 
		    document.getElementById('demo').innerHTML = ""; 
		}
	</script>
	<script>
		function formStroki(symbol) {
		    document.getElementById('demo').innerHTML = document.getElementById('demo').innerHTML + symbol;
		}
	</script>
</head>
<body>
<button type="button" onclick="cliear()">C</button>
<button type="button" onclick="formStroki(1)">1</button>
<button type="button" onclick="formStroki(2)">2</button>
<button type="button" onclick="formStroki(3)">3</button>
<button type="button" onclick="formStroki(4)">4</button>
<button type="button" onclick="formStroki(5)">5</button>
<button type="button" onclick="formStroki(6)">6</button>
<button type="button" onclick="formStroki(7)">7</button>
<button type="button" onclick="formStroki(8)">8</button>
<button type="button" onclick="formStroki(9)">9</button>
<button type="button" onclick="formStroki(0)">0</button>
<button type="button" onclick="formStroki('*')">*</button>
<button type="button" onclick="formStroki('/')">/</button>
<button type="button" onclick="formStroki('+')">+</button>
<button type="button" onclick="formStroki('-')">-</button>
<button type="button" onclick="formStroki('mx')">mx</button>
<button type="button" onclick="formStroki('xm')">xm</button>
<button type="button" onclick="formStroki(',')">,</button>


<form action=calc.php method="POST">
	<p id="demo">
<?php
echo("php is work<br><br>");
var_dump($_POST);
if(isset($_POST["demo"])){
    $str = $_POST["demo"];
};
if(isset($_POST["value"])){
    $str = $_POST["value"];
};



$n = $_POST['order'];

echo("$n");

?>
</p><br>
	<input type="submit" value="="> 
</form>

	     </body>
