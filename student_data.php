<?php 

$student_inventory = [
	'INSERT INTO inventory VALUES (
	"AA01-005",
	"Dogs",
	"Brilliant book.",
	"Jane Smith",
	"aa01-005.jpg",
	1001,
	3.55,
	"Colchester",
	1,
	15 );',
	'INSERT INTO inventory VALUES (
	"AA01-006",
	"Cats",
	"Excellent",
	"John Jones",
	"aa01-006.jpg",
	1001,
	4.99,
	"Southend",
	0,
	5 );',
	
];

# The above adds two hypothetical books to your database. You need to changeojijij
# this so that it adds your two books, two CDs two DCDs and two games.
#
# Not that each INSERT is a single-quote delimited string, ends in a semi-colon
# and has commas between the arguments.

?>
