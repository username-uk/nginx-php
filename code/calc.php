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
		    document.forms[0].elements[0].value =  document.forms[0].elements[0].value + symbol;
		    //document.getElementById('demo').innerHTML = document.getElementById('demo').innerHTML + symbol;
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


<form action=calc.php name=calcF method="GET">
<!--	<p id="demo">-->
<input type="text" name="demo"> 
<?php
echo("php is work<br><br>");
var_dump($_GET);
if(isset($_GET["demo"])){
    $str = $_GET["demo"];
};
if(isset($_GET["value"])){
    $str = $_GET["value"];
};



$n = $_GET['order'];

echo("$n");

?>
</p><br>
	<input type="submit" value="="> 
</form>

	     </body>
