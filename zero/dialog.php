<?php
$method = $_SERVER["REQUEST_METHOD"];
$ehPost = $method == "post";
$n1 = $_POST["Quimica"];

if ($n1 == "Bimestre_1º") {
    $result = 5.50;
} else if ($n1 == "Bimestre_2º") {
    $result = 7.20;
} else if ($n1 == "Bimestre_3º") {
    $result = 10;
} else if ($n1 == "Bimestre_4º") {
    $result = 6.20;
} else if ($n1 == "") {
    $result = "";
}
?>

<html>
<body>
<dialog opn id="favDialog">
        <form method="post">
                <section>
                        <p><label for="materia">Nota</label>
                        <select name="Quimica">
				<option></option>
				<option value="Bimestre_1º">Bimestre1</option>
				<option value="Bimestre_2º">Bimestre2</option>
				<option value="Bimestre_3º">Bimestre3</option>
				<option value="Bimestre_4º">Bimestre4</option>
			</select></p>
                </section>
                <menu>
                        <button id="cancel" type="reset">Cancelar</button>
                        <input type="submit" value="Confirmar"/>
                </menu>
        </form>
</dialog>
<p><label>Nota de <?php echo $n1;?>  :   <?php echo $result;?></p></label>    
</body>
<menu>
        <button id="updateDetails">Quimica</button>
</menu>
<script>
(function() {
        var updateButton = document.getElementById('updateDetails');
        var cancelButton = document.getElementById('cancel');
        var favDialog = document.getElementById('favDialog');

  // O botão Update abre uma Dialog
        updateButton.addEventListener('click', function() {
                favDialog.showModal();
        });
  // O botão cancelButtom fecha uma Dialog
        cancelButton.addEventListener('click', function() {
                favDialog.close();
         });
})();
</script>
</html>
