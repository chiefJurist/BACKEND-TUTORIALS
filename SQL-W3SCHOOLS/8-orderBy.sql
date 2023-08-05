/*The ORDER BY keyword is used to sort the result-set in ascending or descending order.

The ORDER BY keyword sorts the records in ascending order by default. 
To sort the records in descending order, use the DESC keyword.*/

SELECT * FROM Customers ORDER BY Country;

SELECT * FROM Customers ORDER BY Country DESC;


/*The following SQL statement selects all customers from the "Customers" table, sorted by the "Country" and the "CustomerName" column. 
This means that it orders by Country, but if some rows have the same Country, it orders them by CustomerName:*/
SELECT * FROM Customers ORDER BY Country, CustomerName;


/*The following SQL statement selects all customers from the "Customers" table, 
sorted ascending by the "Country" and descending by the "CustomerName" column:*/
SELECT * FROM Customers ORDER BY Country ASC, CustomerName DESC;