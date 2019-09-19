<?php
if (isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $real_user = 'mansuri97';
  $real_pass = 'queenmary';

    if ($username == $real_user && $password== $real_pass)
    { $file = fopen("userDetails.txt","w+");
      fwrite($file,$username."/r/n");
      fclose($file);
      header('Location: addentry.html');
    }

    else
    {
      header('Location: login.html');
    }
}
?>
