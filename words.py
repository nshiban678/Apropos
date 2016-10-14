#!/usr/bin/env/python
from bs4 import BeautifulSoup
import urllib2
import MySQLdb
import string

topics = ['age', 'alone', 'amazing', 'anger', 'art', 'attitude', 'beauty', 'best', 'business', 'change', 'courage', 'death', 'dreams', 'education', 
		  'experience', 'failure', 'faith', 'family', 'fear', 'fitness', 'food', 'forgiveness', 'freedom', 'friendship', 'funny', 'government', 'great', 
		   'happiness', 'health', 'home', 'hope', 'inspirational', 'intelligence', 'imagination', 'knowledge', 'leadership', 'learning', 
		   'life', 'love', 'marriage', 'medical', 'men', 'money', 'motivational', 'movies', 'music', 'nature', 'parenting', 'patience',  
		  'peace', 'pet', 'politics', 'religion', 'respect', 'science', 'society', 'sports', 'strength', 'success', 'technology', 'time' , 'trust', 'wisdom', 'women', 'work'];
		  
url_prefix = 'http://www.brainyquote.com/quotes/topics/topic_'

conn = MySQLdb.connect(db='quotes', passwd='crimson', user='jharvard')

def get_quotes():
    quotes = {}
    # print topics
    for topic in topics:
        quotes[topic] = get_topic_quotes(topic)
    return quotes
    
def get_topic_quotes(topic):
    quotes = []
    for page in range(10):
        if page > 0:
            url = url_prefix + topic + str(page) + '.html'
        else:
            url = url_prefix + topic + '.html'
        print url
        opener = urllib2.build_opener()
        # header spoof
        opener.addheaders = [('User-agent', 'Mozilla/5.0')]
        k = opener.open(url)
        if k.code not in (300,301,302,303,307): 
            soup = BeautifulSoup(k.read())
            qlist = soup.find_all(class_='bqQuoteLink')
            for q in qlist:
                quotes.append(q.find('a').text)
                
    return quotes


def insert_quotes(quotes):
	for topic in quotes:
		wordmap = {}
		#wordmap2 = {}
		for q in quotes[topic]:
			words = q.split()
			for word in words:
				clean_word = ''.join([i for i in word if i not in string.punctuation])
				#clean_string = ''.join([clean_word])
				if clean_word in wordmap:
					wordmap[clean_word] += 1
				else:
					wordmap[clean_word] = 1
				print clean_word + " " + str(wordmap[clean_word])
		insert_wordmap(wordmap, topic)

def insert_wordmap(wm, topic):
	cursor = conn.cursor()
	for word in wm:
		cursor.execute("INSERT INTO words (topic, word, occurrences) VALUES ('%s', '%s', %s)" % (topic, word, wm[word]))
		cursor.execute("DELETE FROM words WHERE word = 'in'")
		cursor.execute("DELETE FROM words WHERE word = 'is'")
		cursor.execute("DELETE FROM words WHERE word = 'the'")
		cursor.execute("DELETE FROM words WHERE word = 'a'")
		cursor.execute("DELETE FROM words WHERE word = 'an'")
		cursor.execute("DELETE FROM words WHERE word = 'of'")
		cursor.execute("DELETE FROM words WHERE word = 'to'")
		cursor.execute("DELETE FROM words WHERE word = 'by'")
		cursor.execute("DELETE FROM words WHERE word = 'for'")
		cursor.execute("DELETE FROM words WHERE word = 'it'")
		conn.commit()
	cursor.close()

def make_quotelist(quotes):
    cursor = conn.cursor()
    for topic in quotes:
        for q in quotes[topic]:
            cursor.execute("INSERT INTO quotelist (topic, quote) VALUES (%s, %s)", (topic, q)) 

if __name__ == "__main__":

    quotes = get_quotes()
    print quotes
    make_quotelist(quotes)
    insert_quotes(quotes)
