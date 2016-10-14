<?php
require("../includes/config.php"); 
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
   if (empty($_POST["phrase"]))
   {
           apologize("Enter a phrase!");
   }

   $topics = ['age', 'alone', 'amazing', 'anger', 'art', 'attitude', 'beauty', 'best', 'business', 'change', 'courage', 'death', 'dreams', 'education', 
		  'experience', 'failure', 'faith', 'family', 'fear', 'food', 'forgiveness', 'freedom', 'friendship', 'funny', 'government', 'great', 
		   'happiness', 'health', 'home', 'hope', 'inspirational', 'intelligence', 'imagination', 'knowledge', 'leadership', 'learning', 
		   'life', 'love', 'marriage', 'medical', 'men', 'money', 'motivational', 'movies', 'music', 'nature', 'parenting', 'patience',  
		  'peace', 'politics', 'religion', 'science', 'society', 'sports', 'strength', 'success', 'technology', 'time', 'trust', 'wisdom', 'women', 'work'];
   $words = explode(" ", $_POST["phrase"]);
   $totals = array();
   $probs = array();
   $sum = array();
   foreach($topics as $top)
   {
       $result = query("SELECT SUM(occurrences) AS sum FROM words WHERE topic=?", $top);
       $sum[$top] = $result[0]["sum"];
       $probs[$top] = 0;
       $probs2[$top] = 0;
   }
   foreach($words as $word)
   {
       foreach($topics as $topic)
       {

            $part_of_query = "(word='";
            foreach($words as $word)
	        {   
	            $part_of_query = $part_of_query .$word ."' OR word='";
            }
            $part_of_query =  substr($part_of_query , 0, -10); 
            $part_of_query = $part_of_query.")";

           $result = query("SELECT occurrences from words WHERE topic=? AND $part_of_query", $topic);
           
           
           if($result === false)
           {
           
               apologize("Failed to select occurences");
           
           }
           
           if (count($result) > 0)
           {
           
               $occ = $result[0];
               if ($probs[$topic] == 0)
               {
                    $probs[$topic] = $probs[$topic] + $occ["occurrences"]/$sum[$topic];
               }
               else
               {
                    $probs[$topic] = $probs[$topic] * ($occ["occurrences"]/$sum[$topic]);
               }
           }
       }
    }
       arsort($probs);
        $ntopic = key($probs);
        $probs2 = array();
        $result2 = query("SELECT * FROM quotelist WHERE topic =?", $ntopic);
        $length = count($result2);
        $wordsinquote = array();
        $sum2 = array();
        $occurrences = 0;
        for ($k = 0; $k < $length; $k++)
        {
            $quotestring = preg_replace('/[^a-z]+/i', '_', $result2[$k]["quote"]);
            $wordsinquote = explode(" ", $quotestring);
            $sum2[$k] = count($wordsinquote);
            $probs2[$k] = 0;
            #remember $words is the array of words from the inputted phrase
            foreach($words as $word)
            {
                #preg_grep returns an array where the elements match the string pattern of $word, get length of that array to see number of times
                $occ = count(preg_grep("/$word/", $wordsinquote));
                #var_dump(preg_grep("/$word/", $wordsinquote));
                $occurrences = $occurrences + $occ;
            }
            $probs2[$k] = $probs2[$k] + $occurrences/$sum2[$k];
        } 

        $maxs = array_keys($probs2, max($probs2));
        $max = $maxs[0];
        # this should be the quote
        $quote = $result2[$max]["quote"];
        render("quote_display.php", ["quote" => $quote, "probs" => $probs]);
}


else {
   render("indexexp2.php");
   redirect("/");
}
?>
