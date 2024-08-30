<?php
include('db_connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['trainerid'])) {
    $trainerid = $_POST['trainerid'];
    $status = $_POST['status'];

    $query = "UPDATE trainers_tbl SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $trainerid);

    if ($stmt->execute()) {
        // Redirect or notify success
        header("Location: adminpanel.php?message=Status+updated+successfully");
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nutritionistid'])) {
    $nutritionistid = $_POST['nutritionistid'];
    $status = $_POST['status'];

    $query = "UPDATE nutritionists_tbl SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $nutritionistid);

    if ($stmt->execute()) {
        // Redirect or notify success
        header("Location: adminpanel.php?message=Status+updated+successfully");
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['N_Atransaction_id'])) {
    $transactionid = $_POST['N_Atransaction_id'];
    $status = $_POST['status'];

    $query = "UPDATE nutritionistapplicants SET status = ? WHERE Transaction_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $transactionid);

    if ($stmt->execute()) {
        // Redirect or notify success
        header("Location: adminpanel.php?message=Status+updated+successfully");
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['PT_Atransaction_id'])) {
    $transactionid = $_POST['PT_Atransaction_id'];
    $status = $_POST['status'];

    $query = "UPDATE personaltrainerapplicants SET status = ? WHERE Transaction_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $transactionid);

    if ($stmt->execute()) {
        // Redirect or notify success
        header("Location: adminpanel.php?message=Status+updated+successfully");
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Y_Atransaction_id'])) {
    $transactionid = $_POST['Y_Atransaction_id'];
    $status = $_POST['status'];

    $query = "UPDATE yogaapplicants SET status = ? WHERE Transaction_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $transactionid);

    if ($stmt->execute()) {
        // Redirect or notify success
        header("Location: adminpanel.php?message=Status+updated+successfully");
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['A_Atransaction_id'])) {
    $transactionid = $_POST['A_Atransaction_id'];
    $status = $_POST['status'];

    $query = "UPDATE aerobicsapplicants SET status = ? WHERE Transaction_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $transactionid);

    if ($stmt->execute()) {
        // Redirect or notify success
        header("Location: adminpanel.php?message=Status+updated+successfully");
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['TKD_Atransaction_id'])) {
    $transactionid = $_POST['TKD_Atransaction_id'];
    $status = $_POST['status'];

    $query = "UPDATE taekwondoapplicants SET status = ? WHERE Transaction_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $transactionid);

    if ($stmt->execute()) {
        // Redirect or notify success
        header("Location: adminpanel.php?message=Status+updated+successfully");
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="120">
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" href="/pictures/logo.png">
    <style>
        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Body styles */
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: #333;
            display: flex;
        }

        /* Sidebar styles */
        .sidebar {
            background-color: cadetblue;
            color: #fff;
            width: 150px;
            height: 700px;
            padding: 20px;
            transition: transform 0.9s ease;
        }

        .sidebar:hover {
            width: 300px;
            /* increase the width of the sidebar */
            transition: 0.9s;
        }

        .sidebar:not(:hover) {
            width: 200px;
            transition: width 1.5s ease;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.5s ease;
        }

        .sidebar ul li a:hover {
            background-color: #555;
        }

        /* Main content styles */
        .content {
            flex: 1;
            padding: 20px;
            background-image: url(/pictures/yoga.jpg);
            background-size: cover;
        }

        /* Page header style */
        .page-header {
            margin-bottom: 20px;
        }

        .page-header h2 {
            margin-bottom: 10px;
        }

        /* Sample section styles */
        .section {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        table {
            border: 1px solid #ddd;
            width: 100%;
            border-radius: 5px;
            border-collapse: collapse;
        }

        th {
            background-color: #555;
            padding: 10px;
            font-size: small;
            text-align: left;
            color: aliceblue;
        }

        td {
            padding: 10px;
        }

        .red-button {
            background-color: red;
            color: white;
            border: none;
            padding: 2px 6px;
            cursor: pointer;
            border-radius: 3px;
            margin-right: 10px;
            display: inline-block;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            /* Ensures the button looks like a button and not a link */
        }

        .red-button a {
            color: white;
            /* Ensures the text color inside the anchor tag is white */
            text-decoration: none;
            /* Removes underline from the anchor text */
        }

        .red-button:hover {
            background-color: darkred;
            /* Change background color on hover */
        }

        .blue-button {
            background-color:cornflowerblue;
            color: white;
            border: none;
            padding: 2px 6px;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 10px;
            display: inline-block;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            /* Ensures the button looks like a button and not a link */
        }

        .blue-button a {
            color: white;
            /* Ensures the text color inside the anchor tag is white */
            text-decoration: none;
            /* Removes underline from the anchor text */
        }

        .blue-button:hover {
            background-color:blue;
            /* Change background color on hover */
        }


        .no-decoration {
            text-decoration: none;
            color: #ddd;
        }

        /* General styles for the dropdown */
        select {
            width: 100px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
            color: #333;
            font-size: 14px;
            appearance: none;
            /* Remove default arrow */
            -webkit-appearance: none;
            -moz-appearance: none;
            text-align: center;
        }

        /* Optional: Add a custom arrow */
        select::after {
            content: '\25BC';
            /* Unicode for down arrow */
            position: absolute;
            right: 10px;
            pointer-events: none;
        }

        /* Focus state */
        select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        /* Style the dropdown items */
        select option {
            padding: 10px;
            background-color: #fff;
            color: #333;
        }

        /* Optional: Style the selected item differently */
        select option:selected {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul>
            <div style="display: flex;">
                <img src="/pictures/logo_2.png" alt="" style="width: 40px; height: 40px; padding:3px;">
                <h2>Admin Dashboard</h2><br>
            </div>
            <li><a href="#" onclick="showTable('registeredMembers')">Registered Members</a></li>
            <li><a href="#" onclick="showTable('registeredTrainers')">Registered Trainers</a></li>
            <li><a href="#" onclick="showTable('registeredNutritionists')">Registered Nutritionists</a></li>
            <li><a href="#" onclick="showTable('nutritionistApplicants')">Nutritionist Applicants Report</a></li>
            <li><a href="#" onclick="showTable('personalTrainerApplicants')">Personal Trainer Applicants Report</a></li>
            <li><a href="#" onclick="showTable('yogaApplicants')">Yoga Applicants Report</a></li>
            <li><a href="#" onclick="showTable('aerobicsApplicants')">Aerobics Applicants Report</a></li>
            <li><a href="#" onclick="showTable('taekwondoApplicants')">Tae Kwondo Applicants Report</a></li>
            <li><a href="/members_demographic_report.php">Members' Reports</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="page-header">
            <h2>Dashboard</h2>
        </div>

        <div id="registeredMembers" class="section">
            <h3>Registered Members</h3></br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>City</th>
                    <th>Weight in KG</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Last Login</th>
                    <th>Operations</th>
                </tr>
                <?php
                $query = "SELECT * FROM members_tbl";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $memberid = $row['id'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $uname = $row['uname'];
                    $city = $row['city'];
                    $weight = $row['weight'];
                    $gender = $row['gender'];
                    $contact = $row['contact'];
                    $last_login = $row['last_login'];
                    echo '<tr>
                                <th scope="row">' . $memberid . '</th>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $uname . '</td>
                                <td>' . $city . '</td>
                                <td>' . $weight . '</td>
                                <td>' . $gender . '</td>
                                <td>' . $contact . '</td>
                                <td>' . $last_login . '</td>
                                <td style="display:flex; justify-content: space-around;">
                                <a class="red-button" href="memberupdate.php?weight=' . $weight . '&contact=' . $contact . '&uname=' . $uname . '&lname=' . $lname . '&fname=' . $fname . '&memberid=' . $memberid . '" class="no-decoration">Update</a>
                                <a class="blue-button" href="delete.php? deletememberid=' . $memberid . '" class= "no-decoration">Delete</a>
                            </td>
                            </tr>';
                }
                ?>

            </table>
        </div>

        <div id="registeredTrainers" class="section">
            <h3>Registered Trainers</h3></br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>City</th>
                    <th>Contact</th>
                    <th>Trainer Category</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Operations</th>
                </tr>
                <?php
                $query = "SELECT * FROM trainers_tbl";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $trainerid = $row['id'];
                    $fname = $row['first_name'];
                    $lname = $row['last_name'];
                    $uname = $row['username'];
                    $city = $row['city'];
                    $contact = $row['contact'];
                    $trainer_type = $row['trainer_type'];
                    $gender = $row['gender'];
                    $status = $row['status'];
                    $email = $row['email'];
                    echo '<tr>
                                <th scope="row">' . $trainerid . '</th>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $uname . '</td>
                                <td>' . $city . '</td>
                                <td>' . $contact . '</td>
                                <td>' . $trainer_type . '</td>
                                <td>' . $gender . '</td>
                                <td>
                                    <form action="adminpanel.php" method="POST">
                                        <input type="hidden" name="trainerid" value="' . $trainerid . '">
                                        <select name="status" class="" onchange="this.form.submit()">
                                            <option value="Pending"' . ($status == 'Pending' ? ' selected' : '') . '>Pending</option>
                                            <option value="Approved"' . ($status == 'Approved' ? ' selected' : '') . '>Approved</option>
                                        </select>
                                    </form>
                                </td>
                                <td>' . $email . '</td>
                                <td style="display:flex; justify-content: space-around;">
                                <a class="red-button" href="trainerupdate.php?contact=' . $contact . '&uname=' . $uname . '&lname=' . $lname . '&fname=' . $fname . '&trainerid=' . $trainerid . '" class="no-decoration">Update</a>
                                <a class="blue-button" href="delete.php? deletetrainerid=' . $trainerid . '" class= "no-decoration">Delete</a>
                            </td>
                            </tr>';
                }
                ?>

            </table>
        </div>

        <div id="registeredNutritionists" class="section">
            <h3>Registered Nutritionists</h3></br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>City</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Operations</th>
                </tr>

                <?php
                $query = "SELECT * FROM nutritionists_tbl";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $nutritionistid = $row['id'];
                    $fname = $row['first_name'];
                    $lname = $row['last_name'];
                    $uname = $row['username'];
                    $city = $row['city'];
                    $contact = $row['contact'];
                    $gender = $row['gender'];
                    $status = $row['status'];
                    $email  = $row['email'];
                    echo '<tr>
                                <th scope="row">' . $nutritionistid . '</th>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $uname . '</td>
                                <td>' . $city . '</td>
                                <td>' . $contact . '</td>
                                <td>' . $gender . '</td>
                                <td>
                                    <form action="adminpanel.php" method="POST">
                                        <input type="hidden" name="nutritionistid" value="' . $nutritionistid . '">
                                        <select name="status" onchange="this.form.submit()">
                                            <option value="Pending" ' . ($status == 'Pending' ? 'selected' : '') . '>Pending</option>
                                            <option value="Approved" ' . ($status == 'Approved' ? 'selected' : '') . '>Approved</option>
                                        </select>
                                    </form>
                                </td>
                                <td>' . $email . '</td>
                                <td style="display:flex; justify-content: space-around;">
                                <a class="red-button" href="nutritionistupdate.php?contact=' . $contact . '&uname=' . $uname . '&lname=' . $lname . '&fname=' . $fname . '&nutritionistid=' . $nutritionistid . '" class="no-decoration">Update</a>
                                <a class="blue-button" href="delete.php? deletenutritionistid=' . $nutritionistid . '" class= "no-decoration">Delete</a>
                            </td>
                            </tr>';
                }
                ?>

            </table>
        </div>

        <div id="nutritionistApplicants" class="section">
            <h3>Nutritionist Applicants Report</h3><br>
            <!-- Display table for nutritionist applicants -->
            <table>
                <tr>
                    <th>Transaction ID</th>
                    <th>Nutritionist's First Name</th>
                    <th>Nutritionist's Last Name</th>
                    <th>Nutritionist Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Weight in KG</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Medical Record</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Operations</th>
                </tr>
                <?php
                $query = "SELECT * FROM nutritionistapplicants";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $transaction_id = $row['Transaction_id'];
                    $nutritionists_first_name = $row['Nutritionist\'s First Name'];
                    $nutritionists_last_name = $row['Nutritionist\'s Last Name'];
                    $nutritionists_id = $row['Nutritionist Id'];
                    $fname = $row['FirstName'];
                    $lname = $row['LastName'];
                    $weight = $row['Weight'];
                    $contact = $row['Contact'];
                    $gender = $row['Gender'];
                    $Med = $row['name'];
                    $amount = $row['amount'];
                    $status = $row['status'];
                    echo '<tr>
                                <td>' . $transaction_id . '</td>
                                <td>' . $nutritionists_first_name . '</td>
                                <td>' . $nutritionists_last_name . '</td>
                                <td>' . $nutritionistid . '</td>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $weight . '</td>
                                <td>' . $contact . '</td>
                                <td>' . $gender . '</td>
                                <td>' . $Med . '</td>
                                <td>' . $amount . '</td>
                                <td>
                                    <form action="adminpanel.php" method="POST">
                                        <input type="hidden" name="N_Atransaction_id" value="' . $transaction_id . '">
                                        <select name="status" onchange="this.form.submit()">
                                            <option value="Paid" ' . ($status == 'Paid' ? 'selected' : '') . '>Paid</option>
                                            <option value="Due" ' . ($status == 'Due' ? 'selected' : '') . '>Due</option>
                                        </select>
                                    </form>
                                </td>
                                
                                <td style="display:flex; justify-content: space-around;">
                                <a class="red-button" href="nutritionistapplicantsupdate.php? weight=' . $weight . '&contact=' . $contact . '&lname=' . $lname . '&fname=' . $fname . '&nutritionistapplicantsid=' . $transaction_id . '" class="no-decoration">Update</a>
                                <a class="blue-button" href="delete.php? deletenutritionistapplicantsid=' . $transaction_id . '" class= "no-decoration">Delete</a>
                            </td>
                            </tr>';
                }
                ?>

            </table>
        </div>

        <div id="personalTrainerApplicants" class="section">
            <h3>Personal Trainer Applicants Report</h3><br>
            <table>
                <tr>
                    <th>Transaction Id</th>
                    <th>Personal Trainer's First Name</th>
                    <th>Personal Trainer's Last Name</th>
                    <th>Personal Trainer's Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Weight in KG</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Health Record</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Operations</th>
                </tr>
                <?php
                $query = "SELECT * FROM personaltrainerapplicants";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $transaction_id = $row['Transaction_id'];
                    $instructors_first_name = $row['Instructor\'s First Name'];
                    $instructors_last_name = $row['Instructor\'s Last Name'];
                    $instructors_id = $row['Instructor Id'];
                    $fname = $row['FirstName'];
                    $lname = $row['LastName'];
                    $weight = $row['Weight'];
                    $contact = $row['Contact'];
                    $gender = $row['Gender'];
                    $file = $row['Name'];
                    $amount = $row['amount'];
                    $status = $row['status'];
                    echo '<tr>
                                <td>' . $transaction_id . '</td>
                                <td>' . $instructors_first_name . '</td>
                                <td>' . $instructors_last_name . '</td>
                                <td>' . $instructors_id . '</td>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $weight . '</td>
                                <td>' . $contact . '</td>
                                <td>' . $gender . '</td>
                                <td>' . $file . '</td>
                                <td>' . $amount . '</td>
                                <td>
                                    <form action="adminpanel.php" method="POST">
                                        <input type="hidden" name="PT_Atransaction_id" value="' . $transaction_id . '">
                                        <select name="status" onchange="this.form.submit()">
                                            <option value="Paid" ' . ($status == 'Paid' ? 'selected' : '') . '>Paid</option>
                                            <option value="Due" ' . ($status == 'Due' ? 'selected' : '') . '>Due</option>
                                        </select>
                                    </form>
                                </td>
                                <td style="display:flex; justify-content: space-around;">
                                <a class="red-button" href="personaltrainerapplicantsupdate.php?weight=' . $weight . '&contact=' . $contact . '&lname=' . $lname . '&fname=' . $fname . '&personaltrainerapplicantsid=' . $transaction_id . '" class="no-decoration">Update</a>
                                <a class="blue-button" href="delete.php? deletepersonaltrainerapplicants=' . $transaction_id . '" class= "no-decoration">Delete</a>
                            </td>
                            </tr>';
                }
                ?>

            </table>
        </div>

        <div id="yogaApplicants" class="section">
            <h3>Yoga Applicants Report</h3><br>
            <!-- Display table for yoga applicants -->
            <table>
                <tr>
                    <th>Transaction Id</th>
                    <th>Yoga Trainer's First Name</th>
                    <th>Yoga Trainer's Last Name</th>
                    <th>Yoga Trainer's Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Weight in KG</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Operations</th>
                </tr>
                <?php
                $query = "SELECT * FROM yogaapplicants";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $transaction_id = $row['Transaction_id'];
                    $instructors_first_name = $row['Instructor\'s First Name'];
                    $instructors_last_name = $row['Instructor\'s Last Name'];
                    $instructors_id = $row['Instructor Id'];
                    $fname = $row['FirstName'];
                    $lname = $row['LastName'];
                    $weight = $row['Weight'];
                    $contact = $row['Contact'];
                    $gender = $row['Gender'];
                    $amount = $row['amount'];
                    $status = $row['status'];

                    echo '<tr>
                                <td>' . $transaction_id . '</td>
                                <td>' . $instructors_first_name . '</td>
                                <td>' . $instructors_last_name . '</td>
                                <td>' . $instructors_id . '</td>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $weight . '</td>
                                <td>' . $contact . '</td>
                                <td>' . $gender . '</td>
                                <td>' . $amount . '</td>
                                <td>
                                    <form action="adminpanel.php" method="POST">
                                        <input type="hidden" name="Y_Atransaction_id" value="' . $transaction_id . '">
                                        <select name="status" onchange="this.form.submit()">
                                            <option value="Paid" ' . ($status == 'Paid' ? 'selected' : '') . '>Paid</option>
                                            <option value="Due" ' . ($status == 'Due' ? 'selected' : '') . '>Due</option>
                                        </select>
                                    </form>
                                </td>

                                <td style="display:flex; justify-content: space-around;">
                                <a class="red-button" href="yogaapplicantsupdate.php? weight=' . $weight . '&contact=' . $contact . '&lname=' . $lname . '&fname=' . $fname . '&yogaapplicantsid=' . $transaction_id . '" class="no-decoration">Update</a>
                                <a class="blue-button" href="delete.php? deleteyogaapplicants=' . $transaction_id . '" class= "no-decoration">Delete</a>
                            </td>
                            </tr>';
                }
                ?>

            </table>
        </div>

        <div id="aerobicsApplicants" class="section">
            <h3>Aerobics Applicants Report</h3><br>
            <!-- Display table for aerobics applicants -->
            <table>
                <tr>
                    <th>Transaction ID</th>
                    <th>Instructor's First Name</th>
                    <th>Instructor's Last Name</th>
                    <th>Instructor Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Weight in KG</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Operations</th>
                </tr>
                <?php
                $query = "SELECT * FROM aerobicsapplicants";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $transaction_id = $row['Transaction_id'];
                    $instructors_first_name = $row['Instructor\'s First Name'];
                    $instructors_last_name = $row['Instructor\'s Last Name'];
                    $instructors_id = $row['Instructor Id'];
                    $fname = $row['FirstName'];
                    $lname = $row['LastName'];
                    $weight = $row['Weight'];
                    $contact = $row['Contact'];
                    $gender = $row['Gender'];
                    $amount = $row['amount'];
                    $status = $row['status'];


                    echo '<tr>
                                <td>' . $transaction_id . '</td>
                                <td>' . $instructors_first_name . '</td>
                                <td>' . $instructors_last_name . '</td>
                                <td>' . $instructors_id . '</td>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $weight . '</td>
                                <td>' . $contact . '</td>
                                <td>' . $gender . '</td>
                                <td>' . $amount . '</td>
                                <td>
                                    <form action="adminpanel.php" method="POST">
                                        <input type="hidden" name="A_Atransaction_id" value="' . $transaction_id . '">
                                        <select name="status" onchange="this.form.submit()">
                                            <option value="Paid" ' . ($status == 'Paid' ? 'selected' : '') . '>Paid</option>
                                            <option value="Due" ' . ($status == 'Due' ? 'selected' : '') . '>Due</option>
                                        </select>
                                    </form>
                                </td>

                                <td style="display:flex; justify-content: space-around;">
                                <a class="red-button" href="aerobicsapplicantsupdate.php? weight=' . $weight . '&contact=' . $contact . '&lname=' . $lname . '&fname=' . $fname . '&aerobicsapplicantsid=' . $transaction_id . '" class="no-decoration">Update</a>
                                <a class="blue-button" href="delete.php? deleteaerobicsapplicantsid=' . $transaction_id . '" class= "no-decoration">Delete</a>
                            </td>
                            </tr>';
                }
                ?>

            </table>
        </div>

        <div id="taekwondoApplicants" class="section">
            <h3>Tae Kwondo Applicants Report</h3><br>
            <!-- Display table for taekwondo applicants -->
            <table>
                <tr>
                    <th>Transaction Id</th>
                    <th>Instructor's First Name</th>
                    <th>Instructor's Last Name</th>
                    <th>Instructor's Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Weight in KG</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Operations</th>
                </tr>
                <?php
                $query = "SELECT * FROM taekwondoapplicants";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $transaction_id = $row['Transaction_id'];
                    $instructors_first_name = $row['Instructor\'s First Name'];
                    $instructors_last_name = $row['Instructor\'s Last Name'];
                    $instructors_id = $row['Instructor Id'];
                    $fname = $row['FirstName'];
                    $lname = $row['LastName'];
                    $weight = $row['Weight'];
                    $contact = $row['Contact'];
                    $gender = $row['Gender'];
                    $amount = $row['amount'];
                    $status = $row['status'];
                    echo '<tr>
                                <td>' . $transaction_id . '</td>
                                <td>' . $instructors_first_name . '</td>
                                <td>' . $instructors_last_name . '</td>
                                <td>' . $instructors_id . '</td>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $weight . '</td>
                                <td>' . $contact . '</td>
                                <td>' . $gender . '</td>
                                <td>' . $amount . '</td>
                                <td>
                                    <form action="adminpanel.php" method="POST">
                                        <input type="hidden" name="TKD_Atransaction_id" value="' . $transaction_id . '">
                                        <select name="status" onchange="this.form.submit()">
                                            <option value="Paid" ' . ($status == 'Paid' ? 'selected' : '') . '>Paid</option>
                                            <option value="Due" ' . ($status == 'Due' ? 'selected' : '') . '>Due</option>
                                        </select>
                                    </form>
                                </td>

                                <td style="display:flex; justify-content: space-around;">
                                <a class="red-button" href="taekwondoapplicantsupdate.php? weight=' . $weight . '&contact=' . $contact . '&lname=' . $lname . '&fname=' . $fname . '&taekwondoapplicantsid=' . $transaction_id . '" class="no-decoration">Update</a>
                                <a class="blue-button" href="delete.php? deletetaekwondoapplicants=' . $transaction_id . '" class= "no-decoration">Delete</a>
                            </td>
                            </tr>';
                }
                ?>

            </table>
        </div>

    </div>
    <script>
        function showTable(sectionId) {
            // Hide all sections
            var sections = document.querySelectorAll('.section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            // Show the selected section
            var selectedSection = document.getElementById(sectionId);
            selectedSection.style.display = 'block';
        }
        // Hide all sections by default
        var sections = document.querySelectorAll('.section');
        sections.forEach(function(section) {
            section.style.display = 'none';
        });
    </script>
</body>

</html>