<!DOCTYPE html>
<html>
<head>
	<title>Monte seu computador</title>
</head>
<body>
	<a href="?imagem=note"><img src="note.jpg" width="250px"></a>
	<?php 
		if(isset($_POST['nome']) && isset($_POST['cpu']) && isset($_POST['memoria']) && isset($_POST['armazenamento']) && isset($_POST['so'])) {
			$nome = $_POST['nome'];
			$cpu = $_POST['cpu'];
			$memoria = $_POST['memoria'];
			$armazenamento = $_POST['armazenamento'];
			$so = $_POST['so'];

			echo "<h1>Parabéns $nome, seu computador está pronto!</h1>
			<p>Processador: $cpu</p>
			<p>Memória: $memoria</p>
			<p>Armazenamento: $armazenamento</p>
			<p>Sistema Operacional: $so</p>";
		} else {
			echo '<form method="post">
				<h2>Escolha suas peças</h2><br>
				<label for="nome">Nome:</label>
				<input type="text" name="nome">
				<br>
				<label for="cpu">Preocessador:</label>
				<select id="cpu" name="cpu" required>
					<option value="Intel Core i5">Intel Core i5 - R$ 699,99</option>
					<option value="Intel Core i7">Intel Core i7 - R$ 1.449,99</option>
					<option value="AMD Ryzen 5">AMD Ryzen 5 - R$ 569,99</option>
					<option value="AMD Ryzen 7">AMD Ryzen 7 - R$ 1.399,99</option>
				</select>
				<br>
				<label for="memoria">Memoria:</label>
				<select id="memoria" name="memoria" required>
					<option value="4GB de memoria">4GB de memoria - R$ 65,99</option>
					<option value="8GB de memoria">8GB de memoria - R$ 172,99</option>
					<option value="16GB de memoria">16GB de memoria - R$ 309,99</option>
					<option value="32GB de memoria">32GB de memoria - 400,99</option>
				</select>
				<br>
				<label for="armazenamento">Armazenamentor:</label>
				<select id="armazenamento" name="armazenamento" required>
					<option value="500GB HB">500GB HD - R$ 105,80</option>
					<option value="1TB de HD">2TB de HD - R$ 369,99</option>
					<option value="150GB SSD">120GB SSD - R$ 82,99</option>
					<option value="250GB SSD">1tb SSD - R$ 359,99</option>
				</select>
				<br>
				<label for="so">Sistema operacional:</label>
				<select id="so" name="so" required>
					<option value="Windows 10">Windows 10 - R$ 864,00</option>
					<option value="Linux">Linux</option>
				</select>
				<br>
				<input type="submit" value="Enviar">
			</form>';
		}
	?>
</body>
</html>
