Usando PHP você deve fazer um programa que acenda e apague a lâmpada
<br>
<html>
<head>
	<title>Exibir Imagem com PHP</title>
</head>
<body>
	<form method="post">
		<select name="imagem">
			<option value="acesa.png">acesa</option>
			<option value="apagada.png">apagada</option>
		</select>
		<input type="submit" name="exibir" value="Exibir">
	</form>

	<?php
		if (isset($_POST['exibir'])) {
			$imagemSelecionada = $_POST['imagem'];
			switch ($imagemSelecionada) {
				case 'acesa.png':
					echo '<img src="acesa.png">';
					break;
				case 'apagada.png':
					echo '<img src="apagada.png">';
					break;
				default:
					echo 'Selecione uma imagem para exibir';
					break;
			}
		}
	?>
</body>
</html>