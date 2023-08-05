--The CREATE TABLE statement is used to create a new table in a database.

--Syntax:
CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
);


--The following example creates a table called "Persons" that contains five columns: 
--PersonID, LastName, FirstName, Address, and City:
CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);




--Create Table Using Another Table:

/*A copy of an existing table can also be created using CREATE TABLE.
The new table gets the same column definitions. All columns or specific columns can be selected.
If you create a new table using an existing table, the new table will be filled 
with the existing values from the old table.*/

--Syntax:
CREATE TABLE new_table_name AS
    SELECT column1, column2,...
    FROM existing_table_name
    WHERE ....;


--The following SQL creates a new table called "TestTables" (which is a copy of the "Customers" table):
CREATE TABLE TestTable AS SELECT customername, contactname FROM customers;