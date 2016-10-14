<?php

// configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["phrase"]))
        {
            apologize("Please type in phrase.");
        }     
        //get rid of useless words
        
        exec("python guess_topic.py" + $_POST["phrase"], $output)
        render("indexexp2.html", ["topic" => $output])
        
    }
    else
    {
        // else render form
        redirect("/");
        render("indexexp2.html");
    }

?>
