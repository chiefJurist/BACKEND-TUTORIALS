/*The ANY and ALL operators allow you to perform a comparison between a single column value and a range of other values.*/



/*The ANY operator:
    returns a boolean value as a result
    returns TRUE if ANY of the subquery values meet the condition
    ANY means that the condition will be true if the operation is true for any of the values in the range.
*/

/*ANY Syntax: */
SELECT column_name(s) FROM table_name WHERE column_name operator ANY(SELECT column_name FROM table_name WHERE condition);


/*The following SQL statement lists the ProductName if it finds ANY records in the OrderDetails table has Quantity 
equal to 10 (this will return TRUE because the Quantity column has some values of 10): */
SELECT ProductName FROM Products WHERE ProductID = ANY( SELECT ProductID FROM OrderDetails WHERE Quantity = 10);


/*The following SQL statement lists the ProductName if it finds ANY records in the OrderDetails table has 
Quantity larger than 99 (this will return TRUE because the Quantity column has some values larger than 99): */
SELECT ProductName FROM Products WHERE ProductID = ANY (SELECT ProductID FROM OrderDetails WHERE Quantity > 99);







/*The ALL operator:
    returns a boolean value as a result
    returns TRUE if ALL of the subquery values meet the condition
    is used with SELECT, WHERE and HAVING statements
    ALL means that the condition will be true only if the operation is true for all values in the range.
*/

/*ALL Syntax With SELECT: */
SELECT ALL column_name(s) FROM table_name WHERE condition;


/*ALL Syntax With WHERE or HAVING: */
SELECT column_name(s) FROM table_name WHERE column_name operator ALL(SELECT column_name FROM table_name WHERE condition);


/*The following SQL statement lists the ProductName if it finds ANY records in the OrderDetails table has Quantity 
larger than 1000 (this will return FALSE because the Quantity column has no values larger than 1000): */
SELECT ProductName FROM Products WHERE ProductID = ANY (SELECT ProductID FROM OrderDetails WHERE Quantity > 1000);


/*The following SQL statement lists ALL the product names: */
SELECT ALL ProductName FROM Products WHERE TRUE;


/*The following SQL statement lists the ProductName if ALL the records in the OrderDetails table has Quantity equal to 10. 
This will of course return FALSE because the Quantity column has many different values (not only the value of 10):*/
SELECT ProductName FROM Products WHERE ProductID = ALL (SELECT ProductID FROM OrderDetails WHERE Quantity = 10);