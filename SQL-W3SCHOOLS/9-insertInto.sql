/*It is possible to write the INSERT INTO statement in two ways:

1. Specify both the column names and the values to be inserted:*/
INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);



/*2. If you are adding values for all the columns of the table, you do not need to specify the column names in the SQL query. However, make sure the order of the values is in the same order as the columns in the table. 
Here, the INSERT INTO syntax would be as follows:*/
INSERT INTO table_name VALUES (value1, value2, value3, ...);



/*It is also possible to only insert data in specific columns.

The following SQL statement will insert a new record, but only insert data in the "CustomerName", "City", 
and "Country" columns (CustomerID will be updated automatically):*/
INSERT INTO Customers (CustomerName, City, Country) VALUES ('Cardinal', 'Stavanger', 'Norway');