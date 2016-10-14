<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // ensure presence of username
        if (empty($_POST["name"])) 
        {
            apologize("You must provide a username.");
        }
        // ensure presence of password
        else if (empty($_POST["password"]))
        {
            apologize("You must provide a password.");
        }
        
        $result = query("INSERT INTO users (name, email, hash, quote) VALUES(?, ?, ?, ?)",
        $_POST["name"], $_POST["email"], crypt($_POST["password"]), $_POST["quote"]);
        
        if ($result === false)
        {
            apologize("Your name already exists!");
        }
        
        
        redirect("/");
    }

?>
