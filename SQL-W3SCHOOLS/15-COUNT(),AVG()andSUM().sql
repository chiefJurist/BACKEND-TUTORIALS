/*The COUNT() function returns the number of rows that matches a specified criterion.*/
SELECT COUNT(column_name) FROM table_name WHERE condition;
SELECT COUNT(ProductID) FROM Products;

/*The AVG() function returns the average value of a numeric column. */
SELECT AVG(column_name) FROM table_name WHERE condition;
SELECT AVG(Price) FROM Products;


/*The SUM() function returns the total sum of a numeric column. */
SELECT SUM(column_name) FROM table_name WHERE condition;
SELECT SUM(Quantity) FROM OrderDetails;