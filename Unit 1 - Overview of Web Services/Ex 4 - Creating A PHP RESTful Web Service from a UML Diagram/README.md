# CIS 266: Unit 1 Lesson Plan 4 – Creating a PHP RESTful Web Service from a UML Diagram

### Objectives: 
-	Continue the process of understanding the use of middleware PHP OOP for creating a Web Service
-	Students create a set of PHP DB emulator classes based on the Sailboat UML diagram shown below, a set of class testers, and a 
RESTful Web Service Provider and Test Client for the DB emulator classes

##
Universal Modeling Language (UML) Class Diagrams are often used in industry to describe classes showing the class name, accessible
properties & methods.  Your CIS249 textbook & the Internet provide detailed information on UML Class Diagrams.  Here’s a sample of 
a UML Class Diagram representing a Sailboat class that can be used for storing Sailboat information in objects. Note that this UML 
diagram does include data types even though the related PHP class would typically not specify data type. 

| Sailboat  | The top section of the UML Class Diagram is used to display the exact name of the class. |
| ------------- |--- |
| -boatName : string | The middle section is used |
| -ownerName : string  | to specify the exact |
| -numberOfSails : int | name and data types of |
| -price : double | each of the class/object properties |
| _______________________________ |
| +getFormatedPrice() : string  | The bottom section is used to provide exact names of the methods in the |
| +toString() : string  | class and the types of data passed to and returned from each method. |

If you do not understand how to create a Sailboat class from the above UML Class Diagram, then I recommend you read the related 
information in your CIS249 textbook, search the Internet for information on UML Class Diagrams, and/or ask your instructor. 
Your Unit 1 Exam will provide you with a UML Class Diagram and require you to develop related classes and a Web Service similar to 
the approach used in this assignment.

## Lab Assignment: Unit1_Ex4

1.	Create a new folder named LstF_Unit1_Ex4 in your CIS266\Students folder (i.e., the path must be:  C:\wamp64\www\CIS266\Students\LstF_Unit1_Ex4)
2.	Create new subfolders named ServiceClient & ServiceProvider in CIS266\Students\LstF_Unit1_Ex4 and place all the PHP classes you develop below in your ServiceProvider folder. 
3.	Create a PHP Sailboat class based on the above UML Class Diagram.  Note that the class name must be exactly as shown in the top section of the above diagram (i.e., Sailboat) and your source code will be saved as Sailboat.php, the properties must have identical names and data types as outlined in the middle section of the diagram, and the Sailboat class must have at least the two methods shown in the bottom section of the diagram and they must return the data types shown. Additionally, the class must also include a 0-argument “default” constructor method along with standard “getter” & “setter” methods for all properties.  These standard methods are often not shown in the class diagram since they are often assumed to be included in all classes. 
 
4.	Create a PHP class named SailboatDB.php which emulates a database API for the above Sailboat class similar to the ProductDB class from Unit1 which includes a getSailboat( ) method that creates a Sailboat object using a 0-argument “default” constructor method and returns a Sailboat object with all the information stored on a sailboat based on the sailboat name passed to the getSailboat( ) method.  I suggest you model this method after the getProduct( ) method in the ProductDB class that was provided in sample code in Unit1_Ex3. Include at least 5 different Sailboats in your emulator class and have it return a “Unknown Sailboat” if the String passed to the getSailboat( ) method is not valid/included in the “DB”. 

5.	Create a class named SailboatAPI to be used as the application interface for a PHP RESTful web service based on the API class that was provided in Unit1_Ex3. This class must expose two methods, one to create a SailboatDB object without any input to the method (i.e., by calling its default constructor method) and one that accepts a String from a Web Service Test Client (or any client such as the simple PHP test client you will create) which it passes to the getSailboat( ) method in the SailboatDB object and then returns the String returned to it from the getSailboat( ) method.

6.	Create & run a simple SailboatAPI_Tester.php similar to the API tester from Unit1_Ex3 that tests the methods in your SailboatAPI class.

7.	After insuring that your SailboatAPI class is fully operational, then create a PHP RESTful Web Service Client & Provider similar to those in Unit1_Ex3.
 
8.	Combine the following into a Microsoft Word document & save the document as a file named LstF_Unit1_Ex4.pdf (be sure to include 
your URL/Address bar in your captures): 
    *	Captures of the outputs after you run your SailboatAPI_Tester.php web app which must test your SailboatAPI class and display the 
  result(s).
     *	Captures of the outputs after utilizing your PHP RESTful Web Service Client to select & display at least 3 different valid 
  sailboat names which were included in your SailboatDB class AND a non-valid sailboat name (i.e, a sailboat name which was not 
  included in your SailboatDB “emulator” class).
