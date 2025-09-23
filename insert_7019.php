<?php
// DB CONNECTION
$conn = mysqli_connect("localhost","root","","test");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ONLY RUN WHEN FORM IS SUBMITTED
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $grno    = $_POST['grno'] ?? '';
    $enrno   = $_POST['enrno'] ?? '';
    $fname   = $_POST['fname'] ?? '';
    $mname   = $_POST['mname'] ?? '';
    $lname   = $_POST['lname'] ?? '';
    $dob     = $_POST['dob'] ?? null;
    $phone   = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $email   = $_POST['email'] ?? '';
    $gender  = $_POST['gender'] ?? '';
    $city    = $_POST['city'] ?? '';
    $state   = $_POST['state'] ?? '';
    $country = $_POST['country'] ?? '';
    $aadhar  = $_POST['aadhar'] ?? '';
    $course  = $_POST['course'] ?? '';
    $ssc     = $_POST['ssc'] ?? '';
    $hsc     = $_POST['hsc'] ?? '';
    $bus     = $_POST['bus'] ?? '';
    $hostel  = $_POST['hostel'] ?? '';

    // BASIC VALIDATION (REQUIRE FIRST NAME, LAST NAME, COURSE)
    if (empty($fname) || empty($lname) || empty($course)) {
        echo "Please fill First Name, Last Name and Course.";
    } else {
        // PREPARED STATEMENT FOR SAFETY
        $sql = "INSERT INTO ronit_7019
            (grno,enrolmentno,firstname,middlename,lastname,dob,phoneno,address,email,
             gender,city,state,country,aadharno,course,ssc,hsc,transport,hostel)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt === false) {
            die("Prepare failed: " . mysqli_error($conn));
        }

        // 19 PLACEHOLDERS → 19 TYPES
        $types = str_repeat('s', 19);

        mysqli_stmt_bind_param($stmt, $types,
            $grno, $enrno, $fname, $mname, $lname, $dob, $phone, $address, $email,
            $gender, $city, $state, $country, $aadhar, $course, $ssc, $hsc, $bus, $hostel
        );

        if (mysqli_stmt_execute($stmt)) {
            
        } else {
            echo "Insert error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }
}
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Inserted Records</title>
  <style>
  /*PAGE BACKGROUND COLOR*/
  body {
    background-color: #f0f8ff;
    margin: 20px;
    font-family: Arial, sans-serif;
  }
	</style>
</head>

<body>
	<h1 style="text-align:center; margin-bottom:20px; color:darkblue;"> Inserted Records </h1>
</body>

<?php
// NOW FETCH AND DISPLAY ROWS (WORKS WHETHER OR NOT INSERT RAN)
$sql1 = "SELECT * FROM ronit_7019";
if ($result = mysqli_query($conn, $sql1)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'><tr>
            <th>GR No</th>
            <th>Enr No</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Birthdate</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Aadhar No</th>
            <th>Course</th>
            <th>SSC</th>
            <th>HSC</th>
            <th>Transport</th>
            <th>Hostel</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['grno']}</td>
                <td>{$row['enrolmentno']}</td>
                <td>{$row['firstname']}</td>
                <td>{$row['middlename']}</td>
                <td>{$row['lastname']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['phoneno']}</td>
                <td>{$row['address']}</td>
                <td>{$row['email']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['city']}</td>
                <td>{$row['state']}</td>
                <td>{$row['country']}</td>
                <td>{$row['aadharno']}</td>
                <td>{$row['course']}</td>
                <td>{$row['ssc']}</td>
                <td>{$row['hsc']}</td>
                <td>{$row['transport']}</td>
                <td>{$row['hostel']}</td>
                </tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "No Records Found...";
    }
} else {
    echo "ERROR: Could not execute $sql1. " . mysqli_error($conn);
}

mysqli_close($conn);
?>