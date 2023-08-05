/*The MIN() function returns the smallest value of the selected column.

The MAX() function returns the largest value of the selected column.*/

SELECT MIN(column_name) FROM table_name WHERE condition;
SELECT MIN(Price) AS SmallestPrice FROM Products;

SELECT MAX(column_name) FROM table_name WHERE condition;
SELECT MAX(Price) AS LargestPrice FROM Products;