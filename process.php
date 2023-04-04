<?php
// Insert Statement
function insertPt(){
    $servername = "localhost";
    $username = "jaxcode";
    $password = "Richfield1";
    $dbname = "jaxcode";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // Initializing the variables and connecting them to the table values.
    $firstname= $_POST['firstname'];
    $lastname=$_POST['lastname'];
    $street1=$_POST['street1'];
    $unitnum=$_POST['unitnum'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zipcode=$_POST['zipcode'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $birthmonth=$_POST['birthmonth'];
    $birthday=$_POST['birthday'];
    $birthyear=$_POST['birthyear'];
    $gender=$_POST['gender'];
    $ethnic=$_POST['ethnic'];
    $race=$_POST['race'];
    $children=$_POST['children'];
    $mstatus=$_POST['mstatus'];

    $sql = "INSERT INTO  checkin (firstname, lastname, street1, unitnum, city, state, zipcode, email, phone, birthmonth, birthday, birthyear, gender, ethnic, race, children, mstatus)
    VALUES ('{$firstname}', '{$lastname}', '{$street1}', '{$unitnum}', '{$city}', '{$state}', '{$zipcode}', '{$email}', '{$phone}', '{$birthmonth}', '{$birthday}', '{$birthyear}', '{$gender}', '{$ethnic}', '{$race}', '{$children}', '{$mstatus}')";

    if (mysqli_query($conn, $sql)) {
        echo "  <div class='alert alert-success alert-dismissible fade show text-center'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Thank you for signing in!</strong> Please return the tablet, take a seat, and you will be called as soon as possible. </div>";
      } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}


// SELECT STATEMENT
function selectPt(){
    $servername = "localhost";
    $username = "jaxcode";
    $password = "Richfield1";
    $dbname = "jaxcode";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM checkin";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
            <!-- Continue table data from here and link with your values in database -->
            <trow>
                <tr>
                    <td><?=$row['firstname']?></td>
                    <td><?=$row['lastname']?></td>
                    <td><?= $row['street1'] . ", " . $row['city'] . ", " . $row['state'] . ", " . $row['zipcode'] ;?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['phone']?></td>
                    <td><?=$row['birthmonth'] . "  " . $row['birthday'] . " , " . $row['birthyear']?></td>
                    <td><?=$row['gender']?></td>
                    <td><?=$row['ethnic']?></td>
                    <td><?=$row['race']?></td>
                    <td><?=$row['mstatus']?></td>
                    <td><?=$row['children']?></td>
                    <td><?=$row['status']?></td>
                    <td><?=$row['checkintime']?></td>
                </tr>
            </trow>
        <?
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);
}
?>