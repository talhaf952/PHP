<?php
//Data Function
Echo "Date Time Format:\n\n";
// Outputs the current day of the month in two digits
echo "Date today is:";
echo date('d');
//A textual representation of a day (e.g., Mon, Tue, Wed):
echo "\nDay today is: ";
echo date('D');
//A full textual representation of a day (e.g., Monday, Tuesday):
echo "\nDay today is: ";
echo date('l');
//Month (01 - 12):
echo "\n\nCurrent month is: ";
echo date('m');
// Outputs the abbreviated month name
echo "\nCurrent month is: ";
echo date('M');
//A full textual representation of a month (e.g., January, February):
echo "\nCurrent month is: ";
echo date('F');
//Year with four digits (e.g., 2023):
echo "\n\nCurrent Year is: ";
echo date('Y');//y in 2 digits(23), Y in 4 digits(2023).
//Hour in 24-hour format (00 - 23):
echo "\nCurrent Hour is: ";
echo date('H'); //h in 12 hour format, H in 24 hour format
//Minutes (00 - 59):
echo "\nCurrent Minutes are: ";
echo date('i');
//Seconds (00 - 59):
echo "\nCurrent Seconds are: ";
echo date('s');
//Lowercase "am" or "pm":
echo "\nCurrent am/pm: ";
echo date('a');
//Uppercase "am" or "pm":
echo "\nCurrent am/pm: ";
echo date('A');



?>
