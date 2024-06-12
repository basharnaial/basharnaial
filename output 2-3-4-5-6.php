<?php

  $lessonName = "concatenions" ;
  $homepage   = "PHP - " . $lessonName;
  $heading    = "Welcome to " . $lessonName;
  $breif      = "This Lesson Talk About " . $lessonName . "  And how to use it with smart";
  $languages   = "<ul>";
  $languages  .= "<li>PHP</li>";
  $languages  .= "<li>HTML</li>";
  $languages  .= "<li>css</li>";
  $languages  .= "<li>Java Script</li>";
  $languages  .= "</ul>";
?>







<!DOCYTPE HTML>
<html>
<head> 
	<meta charset="UTF-8">

<title><?php echo $homepage; ?></title>

</head>

<body> 

<h1> <?php echo $heading; ?> </h1>
<p> <?php echo $breif; ?> </p>

<h2> The Languages I Love </h2>
               
<?php echo $languages;  ?> 


</body>



</html>
