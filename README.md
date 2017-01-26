c58import_users
================

This concrete5 block allow to import massively users into a concrete5.8 websites (works on c5.8, to try on c5.7)

Todos: CRUD / CSS

Version: 1.0.0
Date: 2016-01-26
 
Developer: Fred Radeff <fradeff@akademia.ch>

License: GPL v3

Git: https://github.com/zpartakov/c58import_users

Install notes
=============
- install as a standard c5 block
- import mysql table importc56users and populate with your datas, using import csv
- adapt config.inc.php with your values
- make a backup of the table, as the block empty it
- create a protected page and put the bloc on it
- run the protected page
