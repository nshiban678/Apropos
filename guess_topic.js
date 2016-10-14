<script>
    if (empty(var _POST["phrase"]))
    {
        alert("Enter a phrase!");
    }

    var topics = ['art', 'beauty', 'birthday', 'business', 'change', 'dreams', 'education', 
	      'experience', 'faith', 'family', 'forgiveness', 'friendship', 'funny', 
	       'happiness', 'inspirational', 'intelligence', 'imagination', 'leadership',
	       'life', 'love', 'marriage', 'motivational', 'movies', 'music', 'nature', 
	      'peace', 'politics', 'religion', 'sports', 'success', 'time', 'trust', 'wisdom'];

    var words = $_POST["phrase"].split(" ")
    var totals = []
    var probs = []
    var sum = []
    for var top in topics
    {
        var result = query("SELECT SUM(occurrences) AS sum FROM words WHERE topic=?", var top);
        var sum[var top] = var result[0]["sum"];
        var probs[var top] = 0;
    }
    for var word in words
    {
        for var topic in topics
        {
            var result = query("SELECT occurrences FROM words WHERE topic=? AND word=?", var topic, var word);
            
            if(var result === false)
            {           
                alert("Failed to select occurences");
            }
            
            if (count(var result) > 0)
            {          
                var occ = var result[0];
                var probs[var topic] = var probs[var topic] + var occ["occurrences"]/var sum[var topic];
            }
        
        }
    var topic = arsort(var probs)[0][0];  
    }
</script>
