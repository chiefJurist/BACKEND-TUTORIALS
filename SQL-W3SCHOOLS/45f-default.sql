/*The DEFAULT constraint is used to set a default value for a column.

The default value will be added to all new records, if no other value is specified.*/



--SQL DEFAULT on CREATE TABLE
--The following SQL sets a DEFAULT value for the "City" column when the "Persons" table is created:
--My SQL / SQL Server / Oracle / MS Access:
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    City varchar(255) DEFAULT 'Sandnes'
);


--The DEFAULT constraint can also be used to insert system values, by using functions like GETDATE():
CREATE TABLE Orders (
    ID int NOT NULL,
    OrderNumber int NOT NULL,
    OrderDate date DEFAULT GETDATE()
);



--SQL DEFAULT on ALTER TABLE
--To create a DEFAULT constraint on the "City" column when the table is already created, use the following SQL:

--MySQL:
ALTER TABLE Persons ALTER City SET DEFAULT 'Sandnes';

--SQL Server:
ALTER TABLE Persons ADD CONSTRAINT df_City DEFAULT 'Sandnes' FOR City;

--MS Access:
ALTER TABLE Persons ALTER COLUMN City SET DEFAULT 'Sandnes';

--Oracle:
ALTER TABLE Persons MODIFY City DEFAULT 'Sandnes';



--DROP a DEFAULT Constraint
--To drop a DEFAULT constraint, use the following SQL:

--MySQL:
ALTER TABLE Persons ALTER City DROP DEFAULT;

--SQL Server / Oracle / MS Access:
ALTER TABLE Persons ALTER COLUMN City DROP DEFAULT;

--SQL Server:
ALTER TABLE Persons ALTER COLUMN City DROP DEFAULT;