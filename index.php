<?php



$z = "head_body.txt";

if(count(file($z)) == 0){

  header('Location: login.html');
}
else{


  header('Location: viewBlog.php');
}

?>
