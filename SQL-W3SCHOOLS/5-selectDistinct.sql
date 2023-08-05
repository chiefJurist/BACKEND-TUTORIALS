/*The following SQL statement selects only the DISTINCT values from the "Country" column in the "Customers" table:*/
SELECT DISTINCT CustomerName, City FROM Customers;

/*The following SQL statement lists the number of different (distinct) customer countries:*/
SELECT COUNT(DISTINCT Country) FROM Customers;

/*Note: The example above will not work in Firefox! Because COUNT(DISTINCT column_name) 
is not supported in Microsoft Access databases. Firefox is using Microsoft Access in our examples.*/
SELECT Count(*) AS DistinctCountries FROM (SELECT DISTINCT Country FROM Customers);