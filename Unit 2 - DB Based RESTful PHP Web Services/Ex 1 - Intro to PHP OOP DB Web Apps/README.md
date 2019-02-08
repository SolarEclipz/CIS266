# CIS 266 – Web Services Unit 2 Lesson Plan 1 – Intro to PHP OOP DB Web Applications
### Objectives: 
•	Understand basic Object Oriented Programming (OOP) DB related concepts using PHP
•	Students use MurachDB_Sample3 code as the basis for creating both a PHP procedural approach and an OOP based Web App approach for 
their own unique MySQL table

Overview: In a Web Service, database information is most often accessed / provided by the Service Provider and generally DB’s and/or 
Service Providers would be drawn on the right hand side and called the “backend” of an application with the client being the 
“frontend” and the provider’s application software being “middleware” or “business logic”. However, the client 
(sometimes called the web service “consumer”) might be storing the information obtained from the provider’s database in its own DB. 
So, here’s how I would draw a web service data flow diagram:  

 (Optional Human viewer) <-> Client <-> Service Provider <-> (Optional DB_Access_Class <-> Database)
 
The Service Client might be just an application that utilizes the information from the Service Provider without the information being 
observed by a human being other than possibly in a report generated asynchronously or it might be built into some other client 
application such as an Android application using Google Maps. 

The Service Provider typically would utilize a database and/or another web service provider.

As a programmer, you might be writing the Service Provider application, the Client application, or both sides if you are creating 
the web service for an in-house use (i.e., the clients work for your corporation).

Since enterprise level applications typically involve multiple tiers and each tier might utilize many 
software modules / classes / components. It’s extremely important for the programmer to test each component of the application they 
create before the classes/components are integrated into a combined application since it can be extremely difficult to debug a 
distributed web service application if one or more of the components are not functioning correctly. Our CIS266 tester code is 
designed to insure that the classes / API’s / Clients work properly before publishing them as a Web Service. Some of the CIS266 
RESTful WS testers include a web app based front end client to do a simple test of the web service before JavaScript/AJAX is
used to decode the JSON message and display it in a web page using innerHTML. 

One way I view software these days is as “Lego blocks” which we use to build / develop an application. The “lego” blocks could be 
classes contained in a standard library in our SDK, custom classes designed by ourselves or others in our corporation for re-use, 
and/or even web services “Lego blocks”.

## Lab Assignment: Unit2_Ex1 (OOP / PHP Classes & Testers):
1.	I’ve included a procedural PHP program named “MurachDB_Procedural.php” in the MurachDB_Sample3 folder that attempts to connect 
up to a MySQL database & send / display returned information from the DBMS. If the provided procedural code displays DB errors, 
then check that you have a “murachdb” database on your MySQL DBMS and, if not, use the “murachdb.sql” file to import it into your DBMS.
Using a simple procedural program to do initial testing of DB connections, DB contents, records in databases, etc. can be a quick/easy 
way to test DB code.
2.	Review the procedural “MurachDB_Procedural.php” code to make sure you fully understand it.
3.	Then review the MurachDB_Access.php sample class code that utilizes an OOP approach to provide the same features/functions as the procedural code to make sure you understand it and the functions in it.
4.	Go through all the links in the index.html file that are inside the MurachDB_Sample3 folder to understand each link & how the associated code works.
5.	Create a website folder named lstf_unit2_ex1 in your “C:\wamp64\www\CIS266\Students\” folder and a procedural php program named lstf_displayTable.php based on the sample procedural code provided that displays all the records in a unique MySQL table of yours (i.e., you may use an existing table other than the murachdb tables or create a new MySQL table for this exercise but you MUST place the table in a MySQL database named “students” & include lstf in table name). 
6.	After testing that your procedural approach works, then create files/code/folders in your lstf_unit2_ex1 folder similar to what is necessary for the first two links on the index.html page of the MurachDB_Sample3 sample code I provided to function (i.e., Web app procedural DB & OOP DB approach).
 
7.	Test that your two index.html links are fully functional & then capture sufficient inputs/outputs to demonstrate both the links and their associated code work properly and paste the captures into a new Microsoft Word document and save the document as an industry standard .pdf document named LstF_Unit2_Ex1.pdf. Make sure to include the address bar in your captures!

8.	Export your unique MySQL table as a .sql file named lstf_unit2_ex1.sql.
