#!/usr/bin/env/python
from bs4 import BeautifulSoup
import urllib2
import MySQLdb
import string

r = urllib2.Request("http://www.pokec.sk", headers={"User-Agent": "Python-urlli~"})
urllib2.urlopen(r).read()

topics = ['art', 'beauty', 'birthday', 'business', 'change', 'dreams', 'education', 
		  'experience', 'faith', 'family', 'forgiveness', 'friendship', 'funny', 
		   'happiness', 'inspirational', 'intelligence', 'imagination', 'leadership',
		   'life', 'love', 'marriage', 'motivational', 'movies', 'music', 'nature', 
		  'peace', 'politics', 'religion', 'sports', 'success', 'time', 'trust', 'wisdom']
		  
url_prefix = 'http://www.brainyquote.com/quotes/topics/topic_'

conn = MySQLdb.connect(db='quotes', passwd='crimson', user='jharvard')

def get_quotes():
    quotes = {}
    print topics
    for topic in topics:
        quotes[topic] = get_topic_quotes(topic)
    return quotes
    
def get_topic_quotes(topic):
    quotes = []
    for page in range(1):
        if page > 0:
            url = url_prefix + topic + str(page) + '.html'
        else:
            url = url_prefix + topic + '.html'
        print url
        opener = urllib2.build_opener()
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
		for q in quotes[topic]:
			words = q.split()
			for word in words:
				clean_word = ''.join([i for i in word if i not in string.punctuation])
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
		conn.commit()
	cursor.close()

def get_quotelist(quotes):
    cursor = con.cursor()
    for topic in quotes:
        for quote in quotes[topic]:
            cursor.execute("INSERT INTO quotelist (topic, quote) VALUES ('%s','%s')" % (topic, quote))
    cursor.close()


if __name__ == "__main__":
#	phrase = raw_input("Gimme a phrase! ")
#	guess_topic(phrase)
    quotes = get_quotes()
    for topic in quotes:
        print topic 
        for q in quotes[topic]:
            print q

