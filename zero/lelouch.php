<?php
$method = $_SERVER["REQUEST_METHOD"];
$ehPost = $method == "post";
$n1 = $_POST["materias"];

if ($n1 == "Quimica") {
    $result = 5.50;
} else if ($n1 == "Matematica") {
    $result = 7.20;
} else if ($n1 == "Educação fisica") {
    $result = 10;
} else if ($n1 == "Biologia") {
    $result = 6.20;
} else if ($n1 == "") {
    $result = "";
}
?>

<html>
<body>
	<form method="post">
		<section>
			<p><label>Notas</label>
			<select name="materias">
				<option></option>
				<option value="Quimica">Quimica</option>
				<option value="Matematica">Matematica</option>
				<option value="Educação fisica">Educação fisica</option>
				<option value="Biologia">Biologia</option>
			</select></p>
		</section>
		<menu>
			<input type="submit" value="Confirmar"/>
		</menu>
		<p><label>Nota de <?php echo $n1;?>:<?php echo $result;?></p></label>
	</form>
</body>
</html>
