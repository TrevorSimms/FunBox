DESCRIPTION
--------------

FunBox is a project demonstrating my current PHP abilities. As it stands, it is a simple account creating app that
collects your personal information and stores it in an XML "account" file that it creates automatically. From this
account, you can access your info by going to the homepage after you login and clicking the "Account Info" button. 
It runs off XAMPP on my system and I use SourceTree as my Git client. 


PROJECT STRUCTURE
--------------------

Content                     |  Folder
-----------------------------------------------
index.php & other main pages   Project's Root Directory "/"

CSS Files                      "/styles"

JS Files                       "/scripts"

PHP include files              "/phpData"

XML "account" files            "/docs/xml"


PROJECT GOALS
---------------

-> Replace XML storage system with a SQL Database.

-> Create an object for 'addAccount()' and 'getAccount()'

-> Create 'deleteAccount()' function that erases an account

--> Add ability to send E-Mails

--> Create an "Admin" user

---> Use LAMP 

---> Fix the ugly UI

---> Add Message Board functionality