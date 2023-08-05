/*The SELECT TOP clause is used to specify the number of records to return.

The SELECT TOP clause is useful on large tables with thousands of records. 
Returning a large number of records can impact performance.

Note: Not all database systems support the SELECT TOP clause. 
MySQL supports the LIMIT clause to select a limited number of records, 
while Oracle uses FETCH FIRST n ROWS ONLY and ROWNUM.*/


/*SQL Server / MS Access Syntax:*/
SELECT TOP number or percent column_name(s) FROM table_name WHERE condition;
SELECT TOP 3 * FROM Customers;
SELECT TOP 50 PERCENT * FROM Customers;
SELECT TOP 3 * FROM Customers WHERE Country='Germany';


/*MySQL Syntax:*/
SELECT column_name(s) FROM table_name WHERE condition LIMIT number;
SELECT * FROM Customers LIMIT 3;
SELECT * FROM Customers WHERE Country='Germany' LIMIT 3;


/*Oracle 12 Syntax:*/
SELECT column_name(s) FROM table_name ORDER BY column_name(s) FETCH FIRST number ROWS ONLY;
SELECT * FROM Customers FETCH FIRST 3 ROWS ONLY;
SELECT * FROM Customers FETCH FIRST 50 PERCENT ROWS ONLY;
SELECT * FROM Customers WHERE Country='Germany' FETCH FIRST 3 ROWS ONLY;


/*Older Oracle Syntax:*/
SELECT column_name(s) FROM table_name WHERE ROWNUM <= number;


/*Older Oracle Syntax (with ORDER BY):*/
SELECT * FROM (SELECT column_name(s) FROM table_name ORDER BY column_name(s)) WHERE ROWNUM <= number;