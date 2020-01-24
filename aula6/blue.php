<?php
$name = $_GET["name"];
$sobrenome = $_GET["sobrenome"];
$n1 = $_GET["number1"];
$n2 = $_GET["number2"];
$op = $_GET["operador"];
$nomecompleto = "$name $sobrenome";
$t1 = $op == "+";
$t2 = $op == "-";
$t3 = $op == "*";
$t4 = $op == "/";

if ($op == "+") {
    $result = $n1 + $n2;
} else if ($op == "-") {
    $result = $n1 - $n2;
} else if ($op == "*") {
    $result = $n1 * $n2;
} else if ($op == "/") {
    $result = $n1 / $n2;
}

?>
<!doctype>
<html>
	<head>
		<title>Dados</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="XvX.css">
	</head>
	<body background="https://images.alphacoders.com/988/thumb-1920-988021.jpg">
            <form action="mephisto.php">
			<p>
			<h2>Dados recebidos</h2>
			</p>
			<p>
			<CENTER><FONT COLOR=BLUE SIZE=30px>TABELA</FONT></CENTER>
			</p>
			<BR>
			<center><table BORDER=10></center>
			<tr>
				<th>Senhor(a):<?php echo $nomecompleto;?></th>
			</tr>
			<tr>
				<td><?php echo $n1;?></td>
			<tr>
			</tr>
				<td><?php echo $op;?></td>
			</tr>
			<tr>
				<td><?php echo $n2;?></td>
			</tr>
			<tr>
				<td>=<?php echo $result;?></td>
			</tr>
		</table>
                <input type="submit" value="Voltar">            
            </form>
	</body>
</html>
