<?php 

//$foods = array('[pasta','fish','potata');


<?php

// Example delimited text
$delimitedtext = "apple+banana++orange+++grape";

// Split on one or more consecutive plus signs
$details = preg_split("/\++/", $delimitedtext);

// Display results
echo "<pre>";
print_r($details);
echo "</pre>";

?>



?>