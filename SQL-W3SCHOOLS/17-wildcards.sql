/*A wildcard character is used to substitute one or more characters in a string.*/


/*Wildcard Characters in MS Access
Symbol	Description	                                                Example
*	    Represents zero or more characters	                        bl* finds bl, black, blue, and blob
?	    Represents a single character	                            h?t finds hot, hat, and hit
[]	    Represents any single character within the brackets	        h[oa]t finds hot and hat, but not hit
!	    Represents any character not in the brackets	            h[!oa]t finds hit, but not hot and hat
-	    Represents any single character within the specified range	c[a-b]t finds cat and cbt
#	    Represents any single numeric character	                    2#5 finds 205, 215, 225, 235, 245, 255, 265, 275, 285, and 295*/



/*Wildcard Characters in SQL Server
Symbol	Description	Example
%	    Represents zero or more characters	                        bl% finds bl, black, blue, and blob
_	    Represents a single character	                            h_t finds hot, hat, and hit
[]	    Represents any single character within the brackets	        h[oa]t finds hot and hat, but not hit
^	    Represents any character not in the brackets	            h[^oa]t finds hit, but not hot and hat
-	    Represents any single character within the specified range	c[a-b]t finds cat and cbt*/



/*The following SQL statement selects all customers with a City starting with "ber":*/
SELECT * FROM Customers WHERE City LIKE 'ber%';


/*The following SQL statement selects all customers with a City containing the pattern "es": */
SELECT * FROM Customers WHERE City LIKE '%es%';


/*The following SQL statement selects all customers with a City starting with any character, followed by "ondon":*/
SELECT * FROM Customers WHERE City LIKE '_ondon';


/*The following SQL statement selects all customers with a City starting with "L", followed by any character, 
followed by "n", followed by any character, followed by "on":*/
SELECT * FROM Customers WHERE City LIKE 'L_n_on';

/*The following SQL statement selects all customers with a City starting with "b", "s", or "p":*/
SELECT * FROM Customers WHERE City LIKE '[bsp]%';


/*The following SQL statement selects all customers with a City starting with "a", "b", or "c":*/
SELECT * FROM Customers WHERE City LIKE '[a-c]%';


/*The two following SQL statements select all customers with a City NOT starting with "b", "s", or "p":*/
SELECT * FROM Customers WHERE City LIKE '[!bsp]%';


/*The two following SQL statements select all customers with a City NOT starting with "b", "s", or "p":*/
SELECT * FROM Customers WHERE City LIKE '[!bsp]%';
/*Or:*/
SELECT * FROM Customers WHERE City NOT LIKE '[bsp]%';