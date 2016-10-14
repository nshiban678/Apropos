<?php

    require("../includes/config.php");

    if(!(isset($_SESSION["name"])))
    {
        apologize("You must be logged in to rate!");
    }
        
    $rating = query("UPDATE quotelist SET upvotes = ? WHERE quote = ?", $_POST["rating"], $quote);
     
     redirect("/");   

?>
