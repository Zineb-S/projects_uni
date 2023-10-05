import stanza
import sys
import MySQLdb
import torch
import torchvision

stanza.download('en')
# This downloads the English models for the neural pipeline
def main(id):
    """
    nlp = stanza.Pipeline('en') # This sets up a default neural pipeline in English
    #doc = nlp("Barack Obama was born in Hawaii.  He was elected president in 2008.")
    doc = nlp("obama")
    doc.sentences[0].print_dependencies()
    print(doc.sentences[0])
    """

    nlp = stanza.Pipeline(lang='en', processors='tokenize,sentiment')
    print('0 : negative sentiment ')
    print('1 : neutral sentiment ')
    print('2 : positive sentiment ')

    #doc = nlp('This student have a bright future')
    #doc = nlp('This student does not have a bright future')

    doc = nlp('this student has great potential . he is hardworking ')
    #for i, sentence in enumerate(doc.sentences):
      #  print(i, sentence.sentiment)


    db=MySQLdb.connect("localhost","root","","myway")

    Executesp=db.cursor()
    Executesp.callproc('StudentGrades',id)
    results =  Executesp.fetchall()
    p=0
    neutral=0
    n=0
    for x in results:
        print(x[-1])
        if x[-1]!=None:
            for i, sentence in enumerate(nlp(x[-1]).sentences):
                if sentence.sentiment==1:
                    neutral+=1
                if sentence.sentiment == 0:
                    n+=1
                if sentence.sentiment == 2:
                    p+=1
    if n>p :
        return "neg"
    if p>n :
        return  "pos"
    else:
        return "neut"


