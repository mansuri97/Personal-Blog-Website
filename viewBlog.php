<!DOCTYPE html>
<html>
<head>
	<title>View Blogs</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type = "text/css">
  .fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
  }

  .fa:hover {
      opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  	.buttonSubmit
		{
      margin-left:120px;
    }

		p,h5
		{
    margin-left:50px;
  	}

		body,
		html {
			margin:0;
			padding:0;
			color:#000;
			background:#a7a09a;
		}
		#wrap {

			margin:0 auto;
			background:#99c;
		}
		#header {
	    	padding:5px 10px;
			background:#ddd;
		}
		h1 {
		    margin:0;
				text-align: center;
	    }
		#nav {
			padding:5px 10px;
			background:#c99;
		}
		#nav ul {
			margin:0;
			padding:0;
			list-style:none;
		}
		#nav li {
			display:inline;
			margin:0;
			padding:0;
		}
		#main {
			float:left;
			width:75%;
			padding:10px;
			background:#3146ea;
		}
		h2 {
			margin:0 0 1em;
			margin-left: 100px;
		}
		#sidebar {
			float:right;
			width:22%;
			padding:10px;
			background:#a7a09a;
		}
		#footer {
			clear:both;
			padding:5px 10px;
			background:#cc9;
		}
		#footer p {
			margin:0;
	    }
		* html
		#footer {
			height:1px;
		}

		p.title1{
font-family: 'Bookman Old Style';
color:black;
font-size: 30px;
		}

		p.body1{
font-family: 'Arial Unicode MS';
color:white;
font-size: 25px;
		}

		p.date1{
font-family: 'arial';
color:#green;
font-size: 12px;
		}




	</style>

</head>

  <body>

		<div id="header">

			<h1>All Blogs Posted</h1>

		</div>




    <?php

			$file_name1 = "head_body.txt";
			$lines = file($file_name1);
			$lineCounter = COUNT(FILE($file_name1))-1;
			$file_name2 = fopen("recentEntries.txt", "r+") or die("Unable to open file!");

			while($lineCounter>=0)
			{
				$tempo = $lines[$lineCounter];
				$lineCounter = $lineCounter - 1;
				fwrite($file_name2,$tempo);
			}

			fclose($file_name2);
			$arrayTitle = array();
			$arrayBody = array();
			$arrayDate = array();
			$newFile = "recentEntries.txt";
			$read1 = fopen($newFile,'r');


			while(!feof($read1)){
$arrayDate[] = fgets($read1);
$arrayTitle[] = fgets($read1);
		$arrayBody[] = fgets($read1);


			}

			fclose($read1);
			echo"<div id='main'>";

			for($i=0;$i<count($arrayDate);$i++)
			{
				echo '<pre>'; print_r("<td><p class='date1'> $arrayDate[$i]</p></td>"); echo '</pre>';
				echo '<pre>'; print_r("<td><p class='title1'> $arrayTitle[$i]</p></td>"); echo '</pre>';
				echo'<pre>'; print_r("<td><p class='body1'> $arrayBody[$i]</p></td>"); echo '</pre>';
				echo '<hr style="height:2px;border:none;color:black;background-color:black;"/>';
			}

			?>






</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</div>

<div id="sidebar">

	<ul>
		<li><a href="index.php">Home</a></li>
    <li><a href="addentry.html">Add Entry</a></li>
    <li><a href="https://en-gb.facebook.com/" class="fa fa-facebook"></a></li>
		<li><a href="https://twitter.com/login?lang=en-gb" class="fa fa-twitter"></a></li>
	</ul>
</div>

<div id="footer">
	<p>2018</p>
</div>


  </body>

</html>
