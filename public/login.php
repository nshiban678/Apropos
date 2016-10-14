<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["name"]))
        {
            apologize("You must provide your name.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE name = ?", $_POST["name"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (crypt($_POST["password"], $row["hash"]) == $row["hash"])
            {
                // remember that user's now logged in by storing user's name in session
                $_SESSION["name"] = $row["name"];
                
                // redirect to portfolio
                redirect("/");
            }
           var_dump(crypt($_POST["password"], $row["hash"]) == $row["hash"]);
        }
        
        // else apologize
        apologize("Invalid username and/or password.");
        
    }
    else
    {
        // else render form
        render("indexexp2.php");
    }

?>
