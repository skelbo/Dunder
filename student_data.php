<?php 

$student_inventory = [
	'INSERT INTO inventory VALUES (
	"AA01-005",
	"Harry Potter and the Order of the Phoenix",
	"The beginning of the end.",
	"JK Rowling",
	"aa01-005.jpg",
	1001,
	10.99,
	"Colchester",
	8,
	20 );',
	'INSERT INTO inventory VALUES (
	"AA01-006",
	"Harry Potter and the Deathly Hallows",
	"Day my life ended",
	"JK Rowling",
	"aa01-006.jpg",
	1001,
	14.80,
	"Colchester",
	51,
	10 );',
	'INSERT INTO inventory VALUES (
	"AA01-011",
	"Zimmer 483",
	"Second studio album",
	"Tokio Hotel",
	"aa01-011.jpg",
	1002,
	3.99 ,
	"Colchester",
	4,
	30 );',
	'INSERT INTO inventory VALUES (
	"AA01-012",
	"Darkness",
	"His ninth solo studio album",
	"Darren Hayes",
	"aa01-012.jpg",
	1002,
	5.12 ,
	"Colchester",
	2,
	20 );',
	'INSERT INTO inventory VALUES (
	"AA01-017",
	"Battle For Azeroth",
	"A game which has something for everyone and offers hundreds of hours of fun. For the Alliance!",
	"Blizzard Entertainment",
	"aa01-017.jpg",
	1003,
	29.87 ,
	"Colchester",
	250,
	500 );',
	'INSERT INTO inventory VALUES (
	"AA01-018",
	"Zanzarah",
	"An exquisite fantasy, adventure, shooter game. A mix of best genres. Must try.",
	"THQ",
	"aa01-018.jpg",
	1003,
	7.50 ,
	"Colchester",
	10,
	25 );',
	'INSERT INTO inventory VALUES (
	"AA01-023",
	"Friends - Season 5",
	"The classic award winning comedy show.",
	"Warner Home Video",
	"aa01-023.jpg",
	1004,
	10.99 ,
	"Colchester",
	8,
	40 );',
	'INSERT INTO inventory VALUES (
	"AA01-024",
	"Sherlock Holmes - Season 1-4",
	"Complete collection of the famous detective and his loyal partner''s adventures.",
	"BBC",
	"aa01-024.jpg",
	1004,
	8.49 ,
	"Colchester",
	16,
	44 );'
	
];

# The above adds two hypothetical books to your database. You need to change
# this so that it adds your two books, two CDs two DCDs and two games.
#
# Not that each INSERT is a single-quote delimited string, ends in a semi-colon
# and has commas between the arguments.

?>
