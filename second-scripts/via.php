<!DOCTYPE html>
<html>
<head>
<title>redirecting</title>
<meta http-equiv="Refresh" content="0;url=<?php
    include "assignments.php";
    /*echo $assignments_url_pre[$_GET['assignment']];*/
    $student = $_GET['student'];
    if ($student == 'fritz') {
    	echo '../intro/fritz';
    } else {
    	echo $student;
    }

    echo $assignments_url_post[$_GET['assignment']];
?>" />
</head>

<body>
<p>working...</p>
</body>
</html>