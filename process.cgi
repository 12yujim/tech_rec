#!/usr/bin/python
import cgi
from semantics3 import Products

print "Content-Type: text/html"     # HTML is following
print                               # blank line, end of headers

print "<html><body>"

print "HI"

form = cgi.FieldStorage()
search_result = form['searchquery'].value

'''
def generate_quiz(x):
	return {
		'12855': []
		'12181': []
		'23042': []
		'13813': []
		'4672' : []
		'2848' : []		
	}
'''

products = Products(
  api_key = "SEM3898F8F6810124C200EE3D04D0FCADACE",
  api_secret = "OWU4MWQ4ZDFhNzZmNzAxZjMyYzg0YzhkZjBjODZmZDc"
)
products.products_field( "cat_id", search_result)
products.products_field( "")


results = products.get_products()

total_count = results[u'total_results_count'] 

print len(finalresults.count)
#print "Results of query:\n", results



print "</body></html>"