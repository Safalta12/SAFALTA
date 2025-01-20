<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Student Records</h1>
    
    <?php
    $students = array(
        array(
            "first_name" => "Arjun",
            "last_name" => "lama",
            "email" => "arjun@gmail.com",
            "date_of_birth" => "2001-05-15"
        ),
        array(
            "first_name" => "Rabin",
            "last_name" => "Thapa",
            "email" => "rabin@gmail.com",
            "date_of_birth" => "2004-10-15"
        ),
        array(
            "first_name" => "Bishal",
            "last_name" => "Shrestha",
            "email" => "bishal@gmail.com",
            "date_of_birth" => "2000-03-08"
        )
    );
    ?>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student["first_name"] . "</td>";
            echo "<td>" . $student["last_name"] . "</td>";
            echo "<td>" . $student["email"] . "</td>";
            echo "<td>" . $student["date_of_birth"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>     
 

