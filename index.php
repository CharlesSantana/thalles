<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
  <form action="home.php" method="get">
  Sua idade:  <input type="number" name="age" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php 
  $idade = $_GET['age'];
  
  if($idade >= 18){
   echo "Você já pode dirigir!";
  }else{
   echo "Você ainda não pode dirigir!";
  }
 ?>
 </body>
</html>
