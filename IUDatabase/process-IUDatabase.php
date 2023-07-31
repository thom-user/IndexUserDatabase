<?php
    $f_name = $_POST["f_name"];
    $m_name = $_POST["m_name"];
    $l_name = $_POST["l_name"];
    $HDH = $_POST["HDH"];
    $IUES = $_POST["IUES"];
    $IU_ID = $_POST["IU_ID"];
    $TE = $_POST["TE"];
    $TO = $_POST["TO"];
    $UC = $_POST["UC"];
    $GC = $_POST["GC"];
    $DP = $_POST["DP"];
    $CV = $_POST["CV"];

    $host = "localhost";
    $dbname = "iudatabase";
    $username = "root";
    $password = "";

    $conn = mysqli_connect(
            hostname: $host, 
            username: $username,
            password: $password, 
            database: $dbname);

    if (mysqli_connect_errno()){
        die("Connection error: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO TISubmission (firstName, middleName, lastName, hDegree,
    IUEmployee, IU_ID, teachingExp, taughtOnline, taughtUG, taughtG, prefDegreeProgram, CV)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if ( ! mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssss", $f_name, $m_name, $l_name, $HDH, $IUES, $IU_ID, $TE, $TO, $UC, $GC, $DP, $CV);

    mysqli_stmt_execute($stmt);

    echo "Record saved.";
?>