<!DOCTYPE html>
<html lang="pt-br">
<?php 
    ob_start();
    require 'connection.php';
?>
<head>
      <meta charset="utf8">
      <title>Form</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="script" href="registration.html"/>
</head>
<body>
     <form action="form.php" method="post">
        <fieldset>
            <legend>Formulário</legend>
            <label for="impressora">Impressora Relacionada ao Toner</label><br>
            <select name="select">
            <option value="oki-es4172lp mfp">OKI-ES4172LP MFP</option>
            <option value="oki-mc573" selected>OKI-MC573</option>
            <option value="xerox-workcentre 6605dn">XEROX-WORKCENTRE 6605DN</option>
            </select><br>		
            <label for="toner">Toner</label><br>
            <input type="color" name="yellow" placeholder="Cor do Toner"><br><br>
	    <label for="data e hora">Data e Hora</label><br>
            <input type="datetime-local" name="data-hora"/>
	    <input type="submit" name="env"
        </fieldset>
     </form>
</body>
</html>
<?php 
	ob_end_flush();
?>
