<?php

$frameworks = array("CakePhp","Symfony", "ZendFramework", "CodeIgniter", "Laravel");
?>
 
 
 <?php

$assoc_array=["books"=>"pairs"]
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hallo</title>
</head>
<body>
    
    
    <h1>Aufgabe 22</h1>
  
<ol>
  <li>CakePhp</li>
  <li>Symfony</li>
  <li>ZendFramework</li>
  <li>CodeIgniter</li>
  <li>Laravel</li>
</ol>
    
 <?php

$books=["Englisch"=>"lernen", "spanisch"=>"sprechen","italianisch"=>"schreiben"];
?>
   <h2>Aufgabe 25</h2>
<ul>
<?php
foreach($books as $key=>$book)
    echo '<li><strong>'.$key.'</strong> '.$book.'</li>';
?>
</ul>
   

   
</body>
</html>
        
        