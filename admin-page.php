
<?php

@include 'connection.php';

$sql = " SELECT * FROM user";
$result = $conn->query($sql);

$sql = " SELECT * FROM contact";
$contacts = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>

<h1>ADMIN DASHBOARD</h1>


    <section>
        <h1>Users</h1>
        <table>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>User type</th>
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['user_type'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

    <section>
        <h1>Contacts</h1>
        <table>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Description</th>
            </tr>
            <?php 
                while($rows=$contacts->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['firstName'];?></td>
                <td><?php echo $rows['lastName'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phoneNumber'];?></td>
                <td><?php echo $rows['description'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

</body>
</html>