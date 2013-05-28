<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Koding test mertcan</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="http://koding.com/hello/css/style.css">
<!--[if IE]>
      	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<style>
a {color:rgba(255,255,255,0.5)}
</style>
</head>
<body class="php">
<div id="container">
	<div id="main" role="main">
		<header><a href="http://koding.com">Koding.com</a></header>
	</div>
    <nav>
    <ul style="list-style-type:none;">

     <?php
     	
     	$path = "/Users/mertcanekren/Sites/mertcanekren.koding.com/website/tutorials/";
        $pt = opendir($path);         
        while(gettype($name=readdir($pt))!=boolean){
            if($name != "." && $name != ".."){
                echo "<li><a href=/tutorials/".trim($name).">".trim($name)."</a></li>";   
            }         
        }         
        closedir($pt);      
      ?>
    </ul>  
    </nav>
	<footer>
	<h4></h4>
	<p>
		<a href="http://www.mertcanekren.com">mertcanekren.com</a>
	</p>
	</footer>
</div>
</body>
</html>
