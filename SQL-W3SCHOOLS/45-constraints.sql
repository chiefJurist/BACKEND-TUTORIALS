/*Constraints can be specified when the table is created with the CREATE TABLE statement, 
or after the table is created with the ALTER TABLE statement.*/

--Syntax
CREATE TABLE table_name (
    column1 datatype constraint,
    column2 datatype constraint,
    column3 datatype constraint,
    ....
);

/*
SQL Constraints
SQL constraints are used to specify rules for the data in a table.

Constraints are used to limit the type of data that can go into a table. This ensures the accuracy and reliability of the data in the table. If there is any violation between the constraint and the data action, the action is aborted.

Constraints can be column level or table level. Column level constraints apply to a column, and table level constraints apply to the whole table.

The following constraints are commonly used in SQL:

NOT NULL     - Ensures that a column cannot have a NULL value
UNIQUE       - Ensures that all values in a column are different
PRIMARY KEY  - A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table
FOREIGN KEY  - Prevents actions that would destroy links between tables
CHECK        - Ensures that the values in a column satisfies a specific condition
DEFAULT      - Sets a default value for a column if no value is specified
CREATE INDEX - Used to create and retrieve data from the database very quickly