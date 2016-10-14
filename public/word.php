<?php

require_once("config.php");

// query your database for the quote
 $topic = query("SELECT topic FROM words WHERE topic = ?", $_SESSION["topic"]); 


// render the template passing in the quote variables

render("indexexp2.html", ["title" => "word", "quote" => $quote]);

exec($command);


?>

