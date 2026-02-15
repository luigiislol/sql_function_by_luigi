<!DOCTYPE html>
<html>
<head>
    <title>MySQL Functions Demonstration</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f5f5f5;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 50px;
            font-size: 14px;
            background-color: white;
        }

        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
            font-weight: bold;
        }

        td {
            border: 1px solid #ddd;
            padding: 10px 12px;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<h1>MySQL Functions Demonstration</h1>

<!-- ================= STRING FUNCTIONS ================= -->
<h2>MySQL String Functions</h2>
<table>
<tr>
<th>SQL Function</th>
<th>Description</th>
<th>Example Code</th>
<th>Example Output</th>
</tr>

<tr><td>ASCII</td><td>Returns the ASCII value of first character</td><td>SELECT ASCII(student_name) FROM students;</td><td><a href="view.php?category=string&func=ASCII">View Output</a></td></tr>
<tr><td>CHAR_LENGTH</td><td>Length of string in characters</td><td>SELECT CHAR_LENGTH(student_name) FROM students;</td><td><a href="view.php?category=string&func=CHAR_LENGTH">View Output</a></td></tr>
<tr><td>CHARACTER_LENGTH</td><td>Length of string in characters</td><td>SELECT CHARACTER_LENGTH(student_name) FROM students;</td><td><a href="view.php?category=string&func=CHARACTER_LENGTH">View Output</a></td></tr>
<tr><td>CONCAT</td><td>Concatenate strings</td><td>SELECT CONCAT(student_name,' - ',course) FROM students;</td><td><a href="view.php?category=string&func=CONCAT">View Output</a></td></tr>
<tr><td>CONCAT_WS</td><td>Concatenate strings with separator</td><td>SELECT CONCAT_WS(' | ',student_name,course) FROM students;</td><td><a href="view.php?category=string&func=CONCAT_WS">View Output</a></td></tr>
<tr><td>FIELD</td><td>Index position of a value in list</td><td>SELECT student_name, FIELD(course,'CS','Math','Physics') FROM students;</td><td><a href="view.php?category=string&func=FIELD">View Output</a></td></tr>
<tr><td>FIND_IN_SET</td><td>Position of string in list</td><td>SELECT student_name, FIND_IN_SET(course,'CS,Math,Physics') FROM students;</td><td><a href="view.php?category=string&func=FIND_IN_SET">View Output</a></td></tr>
<tr><td>FORMAT</td><td>Format number</td><td>SELECT FORMAT(gpa,2) FROM students;</td><td><a href="view.php?category=string&func=FORMAT">View Output</a></td></tr>
<tr><td>INSERT</td><td>Insert string at position</td><td>SELECT INSERT(student_name,2,3,'XYZ') FROM students;</td><td><a href="view.php?category=string&func=INSERT">View Output</a></td></tr>
<tr><td>INSTR</td><td>Position of substring</td><td>SELECT INSTR(student_name,'a') FROM students;</td><td><a href="view.php?category=string&func=INSTR">View Output</a></td></tr>
<tr><td>LCASE</td><td>Convert to lowercase</td><td>SELECT LCASE(student_name) FROM students;</td><td><a href="view.php?category=string&func=LCASE">View Output</a></td></tr>
<tr><td>LEFT</td><td>Extract left characters</td><td>SELECT LEFT(student_name,4) FROM students;</td><td><a href="view.php?category=string&func=LEFT">View Output</a></td></tr>
<tr><td>LENGTH</td><td>String length in bytes</td><td>SELECT LENGTH(student_name) FROM students;</td><td><a href="view.php?category=string&func=LENGTH">View Output</a></td></tr>
<tr><td>LOCATE</td><td>Position of substring</td><td>SELECT LOCATE('a',student_name) FROM students;</td><td><a href="view.php?category=string&func=LOCATE">View Output</a></td></tr>
<tr><td>LOWER</td><td>Convert to lowercase</td><td>SELECT LOWER(student_name) FROM students;</td><td><a href="view.php?category=string&func=LOWER">View Output</a></td></tr>
<tr><td>LPAD</td><td>Left pad string</td><td>SELECT LPAD(student_name,10,'*') FROM students;</td><td><a href="view.php?category=string&func=LPAD">View Output</a></td></tr>
<tr><td>LTRIM</td><td>Remove leading spaces</td><td>SELECT LTRIM(notes) FROM students;</td><td><a href="view.php?category=string&func=LTRIM">View Output</a></td></tr>
<tr><td>MID</td><td>Extract substring</td><td>SELECT MID(student_name,2,3) FROM students;</td><td><a href="view.php?category=string&func=MID">View Output</a></td></tr>
<tr><td>POSITION</td><td>Position of substring</td><td>SELECT POSITION('a' IN student_name) FROM students;</td><td><a href="view.php?category=string&func=POSITION">View Output</a></td></tr>
<tr><td>REPEAT</td><td>Repeat string</td><td>SELECT REPEAT(student_name,2) FROM students;</td><td><a href="view.php?category=string&func=REPEAT">View Output</a></td></tr>
<tr><td>REPLACE</td><td>Replace substring</td><td>SELECT REPLACE(student_name,'a','@') FROM students;</td><td><a href="view.php?category=string&func=REPLACE">View Output</a></td></tr>
<tr><td>REVERSE</td><td>Reverse string</td><td>SELECT REVERSE(student_name) FROM students;</td><td><a href="view.php?category=string&func=REVERSE">View Output</a></td></tr>
<tr><td>RIGHT</td><td>Extract right characters</td><td>SELECT RIGHT(student_name,4) FROM students;</td><td><a href="view.php?category=string&func=RIGHT">View Output</a></td></tr>
<tr><td>RPAD</td><td>Right pad string</td><td>SELECT RPAD(student_name,10,'*') FROM students;</td><td><a href="view.php?category=string&func=RPAD">View Output</a></td></tr>
<tr><td>RTRIM</td><td>Remove trailing spaces</td><td>SELECT RTRIM(notes) FROM students;</td><td><a href="view.php?category=string&func=RTRIM">View Output</a></td></tr>
<tr><td>SPACE</td><td>Return spaces</td><td>SELECT CONCAT(student_name,SPACE(5),'X') FROM students;</td><td><a href="view.php?category=string&func=SPACE">View Output</a></td></tr>
<tr><td>STRCMP</td><td>Compare two strings</td><td>SELECT STRCMP(student_name,'Alice') FROM students;</td><td><a href="view.php?category=string&func=STRCMP">View Output</a></td></tr>
<tr><td>SUBSTR</td><td>Extract substring</td><td>SELECT SUBSTR(student_name,2,3) FROM students;</td><td><a href="view.php?category=string&func=SUBSTR">View Output</a></td></tr>
<tr><td>SUBSTRING</td><td>Extract substring</td><td>SELECT SUBSTRING(student_name,2,4) FROM students;</td><td><a href="view.php?category=string&func=SUBSTRING">View Output</a></td></tr>
<tr><td>SUBSTRING_INDEX</td><td>Substring before delimiter</td><td>SELECT SUBSTRING_INDEX(student_name,' ',1) FROM students;</td><td><a href="view.php?category=string&func=SUBSTRING_INDEX">View Output</a></td></tr>
<tr><td>TRIM</td><td>Remove leading and trailing spaces</td><td>SELECT TRIM(notes) FROM students;</td><td><a href="view.php?category=string&func=TRIM">View Output</a></td></tr>
<tr><td>UCASE</td><td>Convert to uppercase</td><td>SELECT UCASE(student_name) FROM students;</td><td><a href="view.php?category=string&func=UCASE">View Output</a></td></tr>
<tr><td>UPPER</td><td>Convert to uppercase</td><td>SELECT UPPER(student_name) FROM students;</td><td><a href="view.php?category=string&func=UPPER">View Output</a></td></tr>
</table>


<!-- ================= NUMERIC FUNCTIONS ================= -->
<h2>MySQL Numeric Functions</h2>
<table>
<tr>
<th>SQL Function</th>
<th>Description</th>
<th>Example Code</th>
<th>Example Output</th>
</tr>

<tr><td>ABS</td><td>Absolute value</td><td>SELECT ABS(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=ABS">View Output</a></td></tr>
<tr><td>ACOS</td><td>Arc cosine</td><td>SELECT ACOS(0.5) AS result;</td><td><a href="view.php?category=numeric&func=ACOS">View Output</a></td></tr>
<tr><td>ASIN</td><td>Arc sine</td><td>SELECT ASIN(0.5) AS result;</td><td><a href="view.php?category=numeric&func=ASIN">View Output</a></td></tr>
<tr><td>ATAN</td><td>Arc tangent</td><td>SELECT ATAN(1) AS result;</td><td><a href="view.php?category=numeric&func=ATAN">View Output</a></td></tr>
<tr><td>ATAN2</td><td>Arc tangent of two numbers</td><td>SELECT ATAN2(1,1) AS result;</td><td><a href="view.php?category=numeric&func=ATAN2">View Output</a></td></tr>
<tr><td>AVG</td><td>Average value</td><td>SELECT AVG(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=AVG">View Output</a></td></tr>
<tr><td>CEIL</td><td>Smallest integer >= value</td><td>SELECT CEIL(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=CEIL">View Output</a></td></tr>
<tr><td>CEILING</td><td>Smallest integer >= value</td><td>SELECT CEILING(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=CEILING">View Output</a></td></tr>
<tr><td>COS</td><td>Cosine of number</td><td>SELECT COS(0.5) AS result;</td><td><a href="view.php?category=numeric&func=COS">View Output</a></td></tr>
<tr><td>COT</td><td>Cotangent of number</td><td>SELECT COT(0.5) AS result;</td><td><a href="view.php?category=numeric&func=COT">View Output</a></td></tr>
<tr><td>COUNT</td><td>Number of records</td><td>SELECT COUNT(*) FROM students;</td><td><a href="view.php?category=numeric&func=COUNT">View Output</a></td></tr>
<tr><td>DEGREES</td><td>Convert radians to degrees</td><td>SELECT DEGREES(PI()/2) AS result;</td><td><a href="view.php?category=numeric&func=DEGREES">View Output</a></td></tr>
<tr><td>DIV</td><td>Integer division</td><td>SELECT gpa DIV 2 AS result FROM students;</td><td><a href="view.php?category=numeric&func=DIV">View Output</a></td></tr>
<tr><td>EXP</td><td>e raised to power</td><td>SELECT EXP(1) AS result;</td><td><a href="view.php?category=numeric&func=EXP">View Output</a></td></tr>
<tr><td>FLOOR</td><td>Largest integer <= value</td><td>SELECT FLOOR(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=FLOOR">View Output</a></td></tr>
<tr><td>GREATEST</td><td>Greatest value in list</td><td>SELECT GREATEST(gpa,2.5,3.0) AS result FROM students;</td><td><a href="view.php?category=numeric&func=GREATEST">View Output</a></td></tr>
<tr><td>LEAST</td><td>Smallest value in list</td><td>SELECT LEAST(gpa,2.5,3.0) AS result FROM students;</td><td><a href="view.php?category=numeric&func=LEAST">View Output</a></td></tr>
<tr><td>LN</td><td>Natural logarithm</td><td>SELECT LN(gpa) AS result FROM students;</td><td><a href="view.php?category=numeric&func=LN">View Output</a></td></tr>
<tr><td>LOG</td><td>Natural logarithm</td><td>SELECT LOG(gpa) AS result FROM students;</td><td><a href="view.php?category=numeric&func=LOG">View Output</a></td></tr>
<tr><td>LOG10</td><td>Log base 10</td><td>SELECT LOG10(gpa) AS result FROM students;</td><td><a href="view.php?category=numeric&func=LOG10">View Output</a></td></tr>
<tr><td>LOG2</td><td>Log base 2</td><td>SELECT LOG2(gpa) AS result FROM students;</td><td><a href="view.php?category=numeric&func=LOG2">View Output</a></td></tr>
<tr><td>MAX</td><td>Maximum value</td><td>SELECT MAX(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=MAX">View Output</a></td></tr>
<tr><td>MIN</td><td>Minimum value</td><td>SELECT MIN(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=MIN">View Output</a></td></tr>
<tr><td>MOD</td><td>Remainder of division</td><td>SELECT MOD(student_id,2) AS result FROM students;</td><td><a href="view.php?category=numeric&func=MOD">View Output</a></td></tr>
<tr><td>PI</td><td>Value of PI</td><td>SELECT PI() AS result;</td><td><a href="view.php?category=numeric&func=PI">View Output</a></td></tr>
<tr><td>POW</td><td>Power</td><td>SELECT POW(gpa,2) AS result FROM students;</td><td><a href="view.php?category=numeric&func=POW">View Output</a></td></tr>
<tr><td>POWER</td><td>Power</td><td>SELECT POWER(gpa,2) AS result FROM students;</td><td><a href="view.php?category=numeric&func=POWER">View Output</a></td></tr>
<tr><td>RADIANS</td><td>Convert degrees to radians</td><td>SELECT RADIANS(180) AS result;</td><td><a href="view.php?category=numeric&func=RADIANS">View Output</a></td></tr>
<tr><td>RAND</td><td>Random number</td><td>SELECT RAND() AS result;</td><td><a href="view.php?category=numeric&func=RAND">View Output</a></td></tr>
<tr><td>ROUND</td><td>Round to decimal places</td><td>SELECT ROUND(gpa,1) FROM students;</td><td><a href="view.php?category=numeric&func=ROUND">View Output</a></td></tr>
<tr><td>SIGN</td><td>Sign of number</td><td>SELECT SIGN(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=SIGN">View Output</a></td></tr>
<tr><td>SIN</td><td>Sine of number</td><td>SELECT SIN(0.5) AS result;</td><td><a href="view.php?category=numeric&func=SIN">View Output</a></td></tr>
<tr><td>SQRT</td><td>Square root</td><td>SELECT SQRT(gpa) AS result FROM students;</td><td><a href="view.php?category=numeric&func=SQRT">View Output</a></td></tr>
<tr><td>SUM</td><td>Sum of values</td><td>SELECT SUM(gpa) FROM students;</td><td><a href="view.php?category=numeric&func=SUM">View Output</a></td></tr>
<tr><td>TAN</td><td>Tangent of number</td><td>SELECT TAN(0.5) AS result;</td><td><a href="view.php?category=numeric&func=TAN">View Output</a></td></tr>
<tr><td>TRUNCATE</td><td>Truncate decimal places</td><td>SELECT TRUNCATE(gpa,1) FROM students;</td><td><a href="view.php?category=numeric&func=TRUNCATE">View Output</a></td></tr>

</table>


<!-- ================= DATE FUNCTIONS ================= -->
<h2>MySQL Date Functions</h2>
<table>
<tr>
<th>SQL Function</th>
<th>Description</th>
<th>Example Code</th>
<th>Example Output</th>
</tr>

<tr><td>ADDDATE</td><td>Adds a time/date interval to a date</td><td>SELECT ADDDATE(enrollment_date, INTERVAL 10 DAY) FROM students;</td><td><a href="view.php?category=date&func=ADDDATE">View Output</a></td></tr>
<tr><td>ADDTIME</td><td>Adds a time interval to a time/datetime</td><td>SELECT ADDTIME('12:00:00','02:30:00');</td><td><a href="view.php?category=date&func=ADDTIME">View Output</a></td></tr>
<tr><td>CURDATE</td><td>Returns current date</td><td>SELECT CURDATE();</td><td><a href="view.php?category=date&func=CURDATE">View Output</a></td></tr>
<tr><td>CURRENT_DATE</td><td>Returns current date</td><td>SELECT CURRENT_DATE();</td><td><a href="view.php?category=date&func=CURRENT_DATE">View Output</a></td></tr>
<tr><td>CURRENT_TIME</td><td>Returns current time</td><td>SELECT CURRENT_TIME();</td><td><a href="view.php?category=date&func=CURRENT_TIME">View Output</a></td></tr>
<tr><td>CURRENT_TIMESTAMP</td><td>Returns current date and time</td><td>SELECT CURRENT_TIMESTAMP();</td><td><a href="view.php?category=date&func=CURRENT_TIMESTAMP">View Output</a></td></tr>
<tr><td>CURTIME</td><td>Returns current time</td><td>SELECT CURTIME();</td><td><a href="view.php?category=date&func=CURTIME">View Output</a></td></tr>
<tr><td>DATE</td><td>Extracts date part from datetime</td><td>SELECT DATE(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=DATE">View Output</a></td></tr>
<tr><td>DATEDIFF</td><td>Days between dates</td><td>SELECT DATEDIFF(CURDATE(), enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=DATEDIFF">View Output</a></td></tr>
<tr><td>DATE_ADD</td><td>Add interval to date</td><td>SELECT DATE_ADD(enrollment_date, INTERVAL 1 MONTH) FROM students;</td><td><a href="view.php?category=date&func=DATE_ADD">View Output</a></td></tr>
<tr><td>DATE_FORMAT</td><td>Formats date</td><td>SELECT DATE_FORMAT(enrollment_date,'%M %d, %Y') FROM students;</td><td><a href="view.php?category=date&func=DATE_FORMAT">View Output</a></td></tr>
<tr><td>DATE_SUB</td><td>Subtract interval from date</td><td>SELECT DATE_SUB(enrollment_date, INTERVAL 5 DAY) FROM students;</td><td><a href="view.php?category=date&func=DATE_SUB">View Output</a></td></tr>
<tr><td>DAY</td><td>Day of month</td><td>SELECT DAY(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=DAY">View Output</a></td></tr>
<tr><td>DAYNAME</td><td>Returns weekday name</td><td>SELECT DAYNAME(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=DAYNAME">View Output</a></td></tr>
<tr><td>DAYOFMONTH</td><td>Day of month</td><td>SELECT DAYOFMONTH(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=DAYOFMONTH">View Output</a></td></tr>
<tr><td>DAYOFWEEK</td><td>Returns weekday index</td><td>SELECT DAYOFWEEK(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=DAYOFWEEK">View Output</a></td></tr>
<tr><td>DAYOFYEAR</td><td>Returns day of year</td><td>SELECT DAYOFYEAR(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=DAYOFYEAR">View Output</a></td></tr>
<tr><td>EXTRACT</td><td>Extracts a part from a date</td><td>SELECT EXTRACT(YEAR FROM enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=EXTRACT">View Output</a></td></tr>
<tr><td>FROM_DAYS</td><td>Returns date from numeric datevalue</td><td>SELECT FROM_DAYS(738000);</td><td><a href="view.php?category=date&func=FROM_DAYS">View Output</a></td></tr>
<tr><td>HOUR</td><td>Returns hour part</td><td>SELECT HOUR('14:35:50');</td><td><a href="view.php?category=date&func=HOUR">View Output</a></td></tr>
<tr><td>LAST_DAY</td><td>Last day of month</td><td>SELECT LAST_DAY(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=LAST_DAY">View Output</a></td></tr>
<tr><td>LOCALTIME</td><td>Current date and time</td><td>SELECT LOCALTIME();</td><td><a href="view.php?category=date&func=LOCALTIME">View Output</a></td></tr>
<tr><td>LOCALTIMESTAMP</td><td>Current date and time</td><td>SELECT LOCALTIMESTAMP();</td><td><a href="view.php?category=date&func=LOCALTIMESTAMP">View Output</a></td></tr>
<tr><td>MAKEDATE</td><td>Create date from year/day</td><td>SELECT MAKEDATE(2026,45);</td><td><a href="view.php?category=date&func=MAKEDATE">View Output</a></td></tr>
<tr><td>MAKETIME</td><td>Create time from h/m/s</td><td>SELECT MAKETIME(14,30,25);</td><td><a href="view.php?category=date&func=MAKETIME">View Output</a></td></tr>
<tr><td>MICROSECOND</td><td>Microsecond part</td><td>SELECT MICROSECOND('12:30:45.123456');</td><td><a href="view.php?category=date&func=MICROSECOND">View Output</a></td></tr>
<tr><td>MINUTE</td><td>Minute part</td><td>SELECT MINUTE('12:35:50');</td><td><a href="view.php?category=date&func=MINUTE">View Output</a></td></tr>
<tr><td>MONTHNAME</td><td>Month name</td><td>SELECT MONTHNAME(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=MONTHNAME">View Output</a></td></tr>
<tr><td>PERIOD_ADD</td><td>Add months to period</td><td>SELECT PERIOD_ADD(202601,2);</td><td><a href="view.php?category=date&func=PERIOD_ADD">View Output</a></td></tr>
<tr><td>PERIOD_DIFF</td><td>Difference between periods</td><td>SELECT PERIOD_DIFF(202602,202601);</td><td><a href="view.php?category=date&func=PERIOD_DIFF">View Output</a></td></tr>
<tr><td>QUARTER</td><td>Quarter of year</td><td>SELECT QUARTER(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=QUARTER">View Output</a></td></tr>
<tr><td>SECOND</td><td>Seconds part</td><td>SELECT SECOND('12:35:50');</td><td><a href="view.php?category=date&func=SECOND">View Output</a></td></tr>
<tr><td>SEC_TO_TIME</td><td>Seconds to time</td><td>SELECT SEC_TO_TIME(3665);</td><td><a href="view.php?category=date&func=SEC_TO_TIME">View Output</a></td></tr>
<tr><td>STR_TO_DATE</td><td>String to date</td><td>SELECT STR_TO_DATE('15-02-2026','%d-%m-%Y');</td><td><a href="view.php?category=date&func=STR_TO_DATE">View Output</a></td></tr>
<tr><td>SUBDATE</td><td>Subtract interval from date</td><td>SELECT SUBDATE(enrollment_date, INTERVAL 3 DAY) FROM students;</td><td><a href="view.php?category=date&func=SUBDATE">View Output</a></td></tr>
<tr><td>SUBTIME</td><td>Subtract interval from time</td><td>SELECT SUBTIME('14:30:00','01:15:30');</td><td><a href="view.php?category=date&func=SUBTIME">View Output</a></td></tr>
<tr><td>SYSDATE</td><td>Current date and time</td><td>SELECT SYSDATE();</td><td><a href="view.php?category=date&func=SYSDATE">View Output</a></td></tr>
<tr><td>TIME</td><td>Time part</td><td>SELECT TIME('14:35:50');</td><td><a href="view.php?category=date&func=TIME">View Output</a></td></tr>
<tr><td>TIME_FORMAT</td><td>Formats time</td><td>SELECT TIME_FORMAT('14:35:50','%h:%i %p');</td><td><a href="view.php?category=date&func=TIME_FORMAT">View Output</a></td></tr>
<tr><td>TIME_TO_SEC</td><td>Time to seconds</td><td>SELECT TIME_TO_SEC('01:01:05');</td><td><a href="view.php?category=date&func=TIME_TO_SEC">View Output</a></td></tr>
<tr><td>TIMEDIFF</td><td>Difference between times</td><td>SELECT TIMEDIFF('14:35:50','12:30:25');</td><td><a href="view.php?category=date&func=TIMEDIFF">View Output</a></td></tr>
<tr><td>TIMESTAMP</td><td>Datetime from date and time</td><td>SELECT TIMESTAMP('2026-02-15','14:30:00');</td><td><a href="view.php?category=date&func=TIMESTAMP">View Output</a></td></tr>
<tr><td>TO_DAYS</td><td>Days since 0000-00-00</td><td>SELECT TO_DAYS(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=TO_DAYS">View Output</a></td></tr>
<tr><td>WEEK</td><td>Week number</td><td>SELECT WEEK(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=WEEK">View Output</a></td></tr>
<tr><td>WEEKDAY</td><td>Weekday number</td><td>SELECT WEEKDAY(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=WEEKDAY">View Output</a></td></tr>
<tr><td>WEEKOFYEAR</td><td>Week of year</td><td>SELECT WEEKOFYEAR(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=WEEKOFYEAR">View Output</a></td></tr>
<tr><td>YEAR</td><td>Year part</td><td>SELECT YEAR(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=YEAR">View Output</a></td></tr>
<tr><td>YEARWEEK</td><td>Year and week number</td><td>SELECT YEARWEEK(enrollment_date) FROM students;</td><td><a href="view.php?category=date&func=YEARWEEK">View Output</a></td></tr>

</table>


<!-- ================= ADVANCED FUNCTIONS ================= -->
<h2>MySQL Advanced Functions</h2>
<table>
<tr>
<th>SQL Function</th>
<th>Description</th>
<th>Example Code</th>
<th>Example Output</th>
</tr>

<tr><td>BIN</td><td>Binary representation</td><td>SELECT BIN(student_id) FROM students;</td><td><a href="view.php?category=advanced&func=BIN">View Output</a></td></tr>
<tr><td>BINARY</td><td>Convert to binary string</td><td>SELECT BINARY student_name FROM students;</td><td><a href="view.php?category=advanced&func=BINARY">View Output</a></td></tr>
<tr><td>CASE</td><td>Conditional statement</td><td>SELECT student_name, CASE WHEN gpa>=3.5 THEN 'Excellent' WHEN gpa>=3.0 THEN 'Good' ELSE 'Average' END AS category FROM students;</td><td><a href="view.php?category=advanced&func=CASE">View Output</a></td></tr>
<tr><td>CAST</td><td>Converts datatype</td><td>SELECT CAST(gpa AS CHAR) FROM students;</td><td><a href="view.php?category=advanced&func=CAST">View Output</a></td></tr>
<tr><td>COALESCE</td><td>Returns first non-null value</td><td>SELECT COALESCE(scholarship,0) FROM students;</td><td><a href="view.php?category=advanced&func=COALESCE">View Output</a></td></tr>
<tr><td>CONNECTION_ID</td><td>Current connection ID</td><td>SELECT CONNECTION_ID();</td><td><a href="view.php?category=advanced&func=CONNECTION_ID">View Output</a></td></tr>
<tr><td>CONV</td><td>Convert number base</td><td>SELECT CONV(student_id,10,2) FROM students;</td><td><a href="view.php?category=advanced&func=CONV">View Output</a></td></tr>
<tr><td>CONVERT</td><td>Convert datatype/charset</td><td>SELECT CONVERT(gpa, CHAR) FROM students;</td><td><a href="view.php?category=advanced&func=CONVERT">View Output</a></td></tr>
<tr><td>CURRENT_USER</td><td>Current MySQL user</td><td>SELECT CURRENT_USER();</td><td><a href="view.php?category=advanced&func=CURRENT_USER">View Output</a></td></tr>
<tr><td>DATABASE</td><td>Current database</td><td>SELECT DATABASE();</td><td><a href="view.php?category=advanced&func=DATABASE">View Output</a></td></tr>
<tr><td>IF</td><td>Conditional return</td><td>SELECT student_name, IF(gpa>=3.5,'Merit','Normal') FROM students;</td><td><a href="view.php?category=advanced&func=IF">View Output</a></td></tr>
<tr><td>IFNULL</td><td>Return value if NULL</td><td>SELECT student_name, IFNULL(scholarship,0) AS scholarship_value FROM students;</td><td><a href="view.php?category=advanced&func=IFNULL">View Output</a></td></tr>
<tr><td>ISNULL</td><td>Check for NULL</td><td>SELECT student_name, ISNULL(scholarship) FROM students;</td><td><a href="view.php?category=advanced&func=ISNULL">View Output</a></td></tr>
<tr><td>LAST_INSERT_ID</td><td>Last auto_increment id</td><td>SELECT LAST_INSERT_ID();</td><td><a href="view.php?category=advanced&func=LAST_INSERT_ID">View Output</a></td></tr>
<tr><td>NULLIF</td><td>Returns NULL if equal</td><td>SELECT NULLIF(gpa,4.0) FROM students;</td><td><a href="view.php?category=advanced&func=NULLIF">View Output</a></td></tr>
<tr><td>SESSION_USER</td><td>Current MySQL session user</td><td>SELECT SESSION_USER();</td><td><a href="view.php?category=advanced&func=SESSION_USER">View Output</a></td></tr>
<tr><td>SYSTEM_USER</td><td>Current MySQL system user</td><td>SELECT SYSTEM_USER();</td><td><a href="view.php?category=advanced&func=SYSTEM_USER">View Output</a></td></tr>
<tr><td>USER</td><td>Current MySQL user</td><td>SELECT USER();</td><td><a href="view.php?category=advanced&func=USER">View Output</a></td></tr>
<tr><td>VERSION</td><td>MySQL version</td><td>SELECT VERSION();</td><td><a href="view.php?category=advanced&func=VERSION">View Output</a></td></tr>

</table>

</body>
</html>