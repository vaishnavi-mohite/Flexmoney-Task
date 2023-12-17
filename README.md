# Flexmoney-Task
The following file have source code in HTML, CSS , Bootstrap for front-end development. For APIs and Backend development I used Php and SQL.The text file is also attached in that ER Diagram with its all attributes explained included.

HTML (registration.html):
1)Form Structure:
The HTML form is created with various input fields for collecting user information.
Bootstrap CSS is linked for styling purposes.
2)Form Fields:
Input fields for first name, last name, age, and payment fee are included.
Radio buttons for selecting gender.
A dropdown menu for selecting the batch time.
3)Form Submission:
The form is set to submit data to "connect.php" using the POST method.

PHP (connect.php):
1)Data Retrieval:
PHP retrieves the user input from the submitted form using the $_POST superglobal.
2)Database Connection:
A connection to the MySQL database is established using the mysqli class.
3)Data Insertion:
The retrieved data is then inserted into the "registration" table of the database.
Prepared statements are used to prevent SQL injection.
4)Response Handling:
The success or failure of the database operation is echoed back to the user.
