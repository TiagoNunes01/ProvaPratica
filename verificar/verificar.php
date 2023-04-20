<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   	 <a href="?imagem=note"><img src="note.jpg" width="500px"></a>
 
   	 <a href="?imagem=comp"><img src="comp.jpg" width="500px"></a>


<?php 
	if (isset($_GET['imagem'])){
		$imagem = $_GET['imagem'];
		if ($imagem == 'note') {
			header('Location: notebook.php');
				
		}else if ($imagem == 'comp') {
			header('Location: comp.php');

		}


	}
?>



</body>
</html>