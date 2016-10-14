#html form => gettopic.php -> guess_topic.py
#!/usr/bin/env/python
from bs4 import BeautifulSoup
import urllib2
import MySQLdb
import string
import sys

conn = MySQLdb.connect(db='quotes', passwd='crimson', user='jharvard')
topics = ['art', 'beauty', 'birthday', 'business', 'change', 'dreams', 'education', 
		  'experience', 'faith', 'family', 'forgiveness', 'friendship', 'funny', 
		   'happiness', 'inspirational', 'intelligence', 'imagination', 'leadership',
		   'life', 'love', 'marriage', 'motivational', 'movies', 'music', 'nature', 
		  'peace', 'politics', 'religion', 'sports', 'success', 'time', 'trust', 'wisdom']

def guess_topic(phrase):
    words = phrase.split()
    totals = {}
    probs = {}
    cursor = conn.cursor()
    for top in topics:
#        print top
        cursor.execute("SELECT sum(occurrences) FROM words WHERE topic='%s'" % top)
        totals[top] = cursor.fetchone()[0]
        probs[top] = 0
#    print totals
    for word in words:
        clean_word = ''.join([i for i in word if i not in string.punctuation])
        # sum of all occurrences
        for topic in topics:
            cursor.execute("SELECT occurrences FROM words WHERE topic='%s' AND word='%s'" % (topic, clean_word))
            occ = cursor.fetchone()
            if occ:
#                print "%s : %s : %s" % (topic, occ, clean_word)
                probs[topic] = probs[topic] + occ[0]/totals[topic]
    return sorted(probs.iteritems(), key=lambda x:x[1], reverse=True)[0][0]
   
   
space = " "
sys.argv[1:]
input_phrase = space.join(sys.argv)

topic=guess_topic(input_phrase)

print topic   
