/*Be careful when updating records. If you omit the WHERE clause, ALL records will be updated!*/

UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;

UPDATE Customers SET ContactName='Juan' WHERE Country='Mexico';