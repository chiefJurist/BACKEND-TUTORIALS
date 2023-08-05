/*A JOIN clause is used to combine rows from two or more tables, based on a related column between them.*/



/*we can create the following SQL statement (that contains an INNER JOIN), 
that selects records that have matching values in both tables:*/
SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON  Orders.CustomerID=Customers.CustomerID;



/*
(INNER) JOIN:         Returns records that have matching values in both tables
LEFT (OUTER) JOIN:    Returns all records from the left table, and the matched records from the right table
RIGHT (OUTER) JOIN:   Returns all records from the right table, and the matched records from the left table
FULL (OUTER) JOIN:    Returns all records when there is a match in either left or right table
*/