<!DOCTYPE html>
<html>
<head>
	<title>View Blogs</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
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
			background:#9F0324;
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
	</style>

</head>

  <body>

		<div id="header">

			<h2>All Blogs Posted</h2>

		</div>

		<div id="main">
      <h2>
        <p id="demo"></p>

    <script>
    document.getElementById("demo").innerHTML = Date();
    </script>

     </h2>
      <h2>
    <?php
      $title_content = file_get_contents('head.txt');
      echo $title_content;
      ?>
    </h2>

    </br>

      <h6>
      <?php
      $body_content = file_get_contents('body.txt');
      echo $body_content;
      ?>
    </h6>




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
