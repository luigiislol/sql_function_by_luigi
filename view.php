<?php
include("db.php");

// Get category and function from URL
$category = $_GET['category'] ?? '';
$func = $_GET['func'] ?? '';

$sql = '';
$columns = [];

// ---------------- STRING FUNCTIONS ----------------
if ($category == 'string') {
    switch($func){
        case 'ASCII':
            $sql = "SELECT student_name, ASCII(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'CHAR_LENGTH':
            $sql = "SELECT student_name, CHAR_LENGTH(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'CHARACTER_LENGTH':
            $sql = "SELECT student_name, CHARACTER_LENGTH(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'CONCAT':
            $sql = "SELECT CONCAT(student_name,' - ',course) AS result FROM students";
            $columns = ['result'];
            break;
        case 'CONCAT_WS':
            $sql = "SELECT CONCAT_WS(' | ',student_name,course) AS result FROM students";
            $columns = ['result'];
            break;
        case 'FIELD':
            $sql = "SELECT student_name, FIELD(course,'CS','Math','Physics') AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'FIND_IN_SET':
            $sql = "SELECT student_name, FIND_IN_SET(course,'CS,Math,Physics') AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'FORMAT':
            $sql = "SELECT student_name, FORMAT(gpa,2) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'INSERT':
            $sql = "SELECT student_name, INSERT(student_name,2,3,'XYZ') AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'INSTR':
            $sql = "SELECT student_name, INSTR(student_name,'a') AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LCASE':
            $sql = "SELECT student_name, LCASE(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LEFT':
            $sql = "SELECT student_name, LEFT(student_name,4) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LENGTH':
            $sql = "SELECT student_name, LENGTH(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LOCATE':
            $sql = "SELECT student_name, LOCATE('a',student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LOWER':
            $sql = "SELECT student_name, LOWER(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LPAD':
            $sql = "SELECT student_name, LPAD(student_name,10,'*') AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LTRIM':
            $sql = "SELECT notes, LTRIM(notes) AS result FROM students";
            $columns = ['notes','result'];
            break;
        case 'MID':
            $sql = "SELECT student_name, MID(student_name,2,3) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'POSITION':
            $sql = "SELECT student_name, POSITION('a' IN student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'REPEAT':
            $sql = "SELECT student_name, REPEAT(student_name,2) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'REPLACE':
            $sql = "SELECT student_name, REPLACE(student_name,'a','@') AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'REVERSE':
            $sql = "SELECT student_name, REVERSE(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'RIGHT':
            $sql = "SELECT student_name, RIGHT(student_name,4) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'RPAD':
            $sql = "SELECT student_name, RPAD(student_name,10,'*') AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'RTRIM':
            $sql = "SELECT notes, RTRIM(notes) AS result FROM students";
            $columns = ['notes','result'];
            break;
        case 'SPACE':
            $sql = "SELECT CONCAT(student_name,SPACE(5),'X') AS result FROM students";
            $columns = ['result'];
            break;
        case 'STRCMP':
            $sql = "SELECT student_name, STRCMP(student_name,'Alice') AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'SUBSTR':
            $sql = "SELECT student_name, SUBSTR(student_name,2,3) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'SUBSTRING':
            $sql = "SELECT student_name, SUBSTRING(student_name,2,4) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'SUBSTRING_INDEX':
            $sql = "SELECT student_name, SUBSTRING_INDEX(student_name,' ',1) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'TRIM':
            $sql = "SELECT notes, TRIM(notes) AS result FROM students";
            $columns = ['notes','result'];
            break;
        case 'UCASE':
            $sql = "SELECT student_name, UCASE(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'UPPER':
            $sql = "SELECT student_name, UPPER(student_name) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        default:
            echo "Invalid function!";
            exit;
    }
}


// ---------------- NUMERIC FUNCTIONS ----------------
elseif ($category == 'numeric') {
    switch($func){
        case 'ABS':
            $sql = "SELECT student_name, ABS(gpa-3.5) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'ACOS':
            $sql = "SELECT ACOS(0.5) AS result";
            $columns = ['result'];
            break;
        case 'ASIN':
            $sql = "SELECT ASIN(0.5) AS result";
            $columns = ['result'];
            break;
        case 'ATAN':
            $sql = "SELECT ATAN(1) AS result";
            $columns = ['result'];
            break;
        case 'ATAN2':
            $sql = "SELECT ATAN2(1,1) AS result";
            $columns = ['result'];
            break;
        case 'AVG':
            $sql = "SELECT AVG(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'CEIL':
            $sql = "SELECT student_name, CEIL(gpa) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'CEILING':
            $sql = "SELECT student_name, CEILING(gpa) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'COS':
            $sql = "SELECT COS(0.5) AS result";
            $columns = ['result'];
            break;
        case 'COT':
            $sql = "SELECT COT(0.5) AS result";
            $columns = ['result'];
            break;
        case 'COUNT':
            $sql = "SELECT COUNT(*) AS result FROM students";
            $columns = ['result'];
            break;
        case 'DEGREES':
            $sql = "SELECT DEGREES(PI()/2) AS result";
            $columns = ['result'];
            break;
        case 'DIV':
            $sql = "SELECT student_name, gpa DIV 2 AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'EXP':
            $sql = "SELECT EXP(1) AS result";
            $columns = ['result'];
            break;
        case 'FLOOR':
            $sql = "SELECT student_name, FLOOR(gpa) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'GREATEST':
            $sql = "SELECT student_name, GREATEST(gpa,2.5,3.0) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LEAST':
            $sql = "SELECT student_name, LEAST(gpa,2.5,3.0) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'LN':
            $sql = "SELECT LN(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'LOG':
            $sql = "SELECT LOG(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'LOG10':
            $sql = "SELECT LOG10(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'LOG2':
            $sql = "SELECT LOG2(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'MAX':
            $sql = "SELECT MAX(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'MIN':
            $sql = "SELECT MIN(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'MOD':
            $sql = "SELECT student_name, MOD(student_id,2) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'PI':
            $sql = "SELECT PI() AS result";
            $columns = ['result'];
            break;
        case 'POW':
            $sql = "SELECT student_name, POW(gpa,2) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'POWER':
            $sql = "SELECT student_name, POWER(gpa,2) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'RADIANS':
            $sql = "SELECT RADIANS(180) AS result";
            $columns = ['result'];
            break;
        case 'RAND':
            $sql = "SELECT RAND() AS result";
            $columns = ['result'];
            break;
        case 'ROUND':
            $sql = "SELECT student_name, ROUND(gpa,1) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'SIGN':
            $sql = "SELECT SIGN(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'SIN':
            $sql = "SELECT SIN(0.5) AS result";
            $columns = ['result'];
            break;
        case 'SQRT':
            $sql = "SELECT SQRT(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'SUM':
            $sql = "SELECT SUM(gpa) AS result FROM students";
            $columns = ['result'];
            break;
        case 'TAN':
            $sql = "SELECT TAN(0.5) AS result";
            $columns = ['result'];
            break;
        case 'TRUNCATE':
            $sql = "SELECT student_name, TRUNCATE(gpa,1) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        default:
            echo "Invalid function!";
            exit;
    }
}

// ---------------- DATE FUNCTIONS ----------------
elseif ($category == 'date') {
    switch($func){
        case 'ADDDATE':
            $sql = "SELECT enrollment_date, ADDDATE(enrollment_date, INTERVAL 10 DAY) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'ADDTIME':
            $sql = "SELECT ADDTIME('12:00:00','02:30:00') AS result";
            $columns = ['result'];
            break;
        case 'CURDATE':
            $sql = "SELECT CURDATE() AS result";
            $columns = ['result'];
            break;
        case 'CURRENT_DATE':
            $sql = "SELECT CURRENT_DATE() AS result";
            $columns = ['result'];
            break;
        case 'CURRENT_TIME':
            $sql = "SELECT CURRENT_TIME() AS result";
            $columns = ['result'];
            break;
        case 'CURRENT_TIMESTAMP':
            $sql = "SELECT CURRENT_TIMESTAMP() AS result";
            $columns = ['result'];
            break;
        case 'CURTIME':
            $sql = "SELECT CURTIME() AS result";
            $columns = ['result'];
            break;
        case 'DATE':
            $sql = "SELECT enrollment_date, DATE(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'DATEDIFF':
            $sql = "SELECT DATEDIFF(CURDATE(), enrollment_date) AS result FROM students";
            $columns = ['result'];
            break;
        case 'DATE_ADD':
            $sql = "SELECT enrollment_date, DATE_ADD(enrollment_date, INTERVAL 1 MONTH) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'DATE_FORMAT':
            $sql = "SELECT enrollment_date, DATE_FORMAT(enrollment_date,'%M %d, %Y') AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'DATE_SUB':
            $sql = "SELECT enrollment_date, DATE_SUB(enrollment_date, INTERVAL 5 DAY) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'DAY':
            $sql = "SELECT enrollment_date, DAY(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'DAYNAME':
            $sql = "SELECT enrollment_date, DAYNAME(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'DAYOFMONTH':
            $sql = "SELECT enrollment_date, DAYOFMONTH(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'DAYOFWEEK':
            $sql = "SELECT enrollment_date, DAYOFWEEK(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'DAYOFYEAR':
            $sql = "SELECT enrollment_date, DAYOFYEAR(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'EXTRACT':
            $sql = "SELECT enrollment_date, EXTRACT(YEAR FROM enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'FROM_DAYS':
            $sql = "SELECT FROM_DAYS(738000) AS result";
            $columns = ['result'];
            break;
        case 'HOUR':
            $sql = "SELECT HOUR('14:35:50') AS result";
            $columns = ['result'];
            break;
        case 'LAST_DAY':
            $sql = "SELECT enrollment_date, LAST_DAY(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'LOCALTIME':
            $sql = "SELECT LOCALTIME() AS result";
            $columns = ['result'];
            break;
        case 'LOCALTIMESTAMP':
            $sql = "SELECT LOCALTIMESTAMP() AS result";
            $columns = ['result'];
            break;
        case 'MAKEDATE':
            $sql = "SELECT MAKEDATE(2026, 45) AS result";
            $columns = ['result'];
            break;
        case 'MAKETIME':
            $sql = "SELECT MAKETIME(14,30,25) AS result";
            $columns = ['result'];
            break;
        case 'MICROSECOND':
            $sql = "SELECT MICROSECOND('12:30:45.123456') AS result";
            $columns = ['result'];
            break;
        case 'MINUTE':
            $sql = "SELECT MINUTE('12:35:50') AS result";
            $columns = ['result'];
            break;
        case 'MONTHNAME':
            $sql = "SELECT enrollment_date, MONTHNAME(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'PERIOD_ADD':
            $sql = "SELECT PERIOD_ADD(202601,2) AS result";
            $columns = ['result'];
            break;
        case 'PERIOD_DIFF':
            $sql = "SELECT PERIOD_DIFF(202602,202601) AS result";
            $columns = ['result'];
            break;
        case 'QUARTER':
            $sql = "SELECT enrollment_date, QUARTER(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'SECOND':
            $sql = "SELECT SECOND('12:35:50') AS result";
            $columns = ['result'];
            break;
        case 'SEC_TO_TIME':
            $sql = "SELECT SEC_TO_TIME(3665) AS result";
            $columns = ['result'];
            break;
        case 'STR_TO_DATE':
            $sql = "SELECT STR_TO_DATE('15-02-2026','%d-%m-%Y') AS result";
            $columns = ['result'];
            break;
        case 'SUBDATE':
            $sql = "SELECT enrollment_date, SUBDATE(enrollment_date, INTERVAL 3 DAY) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'SUBTIME':
            $sql = "SELECT SUBTIME('14:30:00','01:15:30') AS result";
            $columns = ['result'];
            break;
        case 'SYSDATE':
            $sql = "SELECT SYSDATE() AS result";
            $columns = ['result'];
            break;
        case 'TIME':
            $sql = "SELECT TIME('14:35:50') AS result";
            $columns = ['result'];
            break;
        case 'TIME_FORMAT':
            $sql = "SELECT TIME_FORMAT('14:35:50','%h:%i %p') AS result";
            $columns = ['result'];
            break;
        case 'TIME_TO_SEC':
            $sql = "SELECT TIME_TO_SEC('01:01:05') AS result";
            $columns = ['result'];
            break;
        case 'TIMEDIFF':
            $sql = "SELECT TIMEDIFF('14:35:50','12:30:25') AS result";
            $columns = ['result'];
            break;
        case 'TIMESTAMP':
            $sql = "SELECT TIMESTAMP('2026-02-15','14:30:00') AS result";
            $columns = ['result'];
            break;
        case 'TO_DAYS':
            $sql = "SELECT TO_DAYS(enrollment_date) AS result FROM students";
            $columns = ['result'];
            break;
        case 'WEEK':
            $sql = "SELECT enrollment_date, WEEK(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'WEEKDAY':
            $sql = "SELECT enrollment_date, WEEKDAY(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'WEEKOFYEAR':
            $sql = "SELECT enrollment_date, WEEKOFYEAR(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'YEAR':
            $sql = "SELECT enrollment_date, YEAR(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        case 'YEARWEEK':
            $sql = "SELECT enrollment_date, YEARWEEK(enrollment_date) AS result FROM students";
            $columns = ['enrollment_date','result'];
            break;
        default:
            echo "Invalid function!";
            exit;
    }
}


// ---------------- ADVANCED FUNCTIONS ----------------
elseif ($category == 'advanced') {
    switch($func){
        case 'CASE':
            $sql = "SELECT student_name, CASE WHEN gpa>=3.5 THEN 'Excellent' WHEN gpa>=3.0 THEN 'Good' ELSE 'Average' END AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'IFNULL':
            $sql = "SELECT student_name, IFNULL(scholarship,0) AS result FROM students";
            $columns = ['student_name','result'];
            break;
        case 'COALESCE':
            $sql = "SELECT COALESCE(scholarship,0) AS result FROM students";
            $columns = ['result'];
            break;
        case 'CAST':
            $sql = "SELECT CAST(gpa AS CHAR) AS result FROM students";
            $columns = ['result'];
            break;
        case 'NULLIF':
            $sql = "SELECT NULLIF(gpa,4.0) AS result FROM students";
            $columns = ['result'];
            break;
        case 'BIN':
            $sql = "SELECT student_id, BIN(student_id) AS result FROM students";
            $columns = ['student_id','result'];
            break;
        case 'CONV':
            $sql = "SELECT student_id, CONV(student_id,10,2) AS result FROM students";
            $columns = ['student_id','result'];
            break;
        case 'VERSION':
            $sql = "SELECT VERSION() AS result";
            $columns = ['result'];
            break;
        case 'DATABASE':
            $sql = "SELECT DATABASE() AS result";
            $columns = ['result'];
            break;
        case 'CURRENT_USER':
            $sql = "SELECT CURRENT_USER() AS result";
            $columns = ['result'];
            break;
        default:
            echo "Invalid function!";
            exit;
    }
}


// ---------------- EXECUTE QUERY ----------------
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Query Error: " . mysqli_error($conn);
    exit;
}

// ---------------- DISPLAY OUTPUT ----------------
echo "<h2>$func Function Output</h2>";
echo "<table border='1' style='border-collapse: collapse; padding:8px;'>";
echo "<tr>";
foreach ($columns as $col) {
    echo "<th>$col</th>";
}
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($columns as $col) {
        echo "<td>".$row[$col]."</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>