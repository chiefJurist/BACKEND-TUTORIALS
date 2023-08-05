/*The GROUP BY statement groups rows that have the same values into summary rows, 
like "find the number of customers in each country".

The GROUP BY statement is often used with aggregate functions 
(COUNT(), MAX(), MIN(), SUM(), AVG()) to group the result-set by one or more columns.*/


/*GROUP BY Syntax: */
SELECT column_name(s) FROM table_name WHERE condition GROUP BY column_name(s) ORDER BY column_name(s);


/*The following SQL statement lists the number of customers in each country: */
SELECT COUNT(CustomerID), Country FROM Customers GROUP BY Country;



/*GROUP BY With JOIN Example
The following SQL statement lists the number of orders sent by each shipper: */
SELECT Shippers.ShipperName, COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID GROUP BY ShipperName;