/*The DELETE statement is used to delete existing records in a table.*/

DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';

/*It is possible to delete all rows in a table without deleting the table. 
This means that the table structure, attributes, and indexes will be intact:

The following SQL statement deletes all rows in the "Customers" table, without deleting the table:*/
DELETE FROM Customers;