<?php
include('db_connection.php');
?>

<?php
// Query analysis of last login dates
$query = "SELECT 
            COUNT(*) AS total_members,
            MAX(last_login) AS last_login_date,
            DATEDIFF(NOW(), MAX(last_login)) AS days_since_last_login
          FROM members_tbl";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Display result
echo "<h2>Analysis of Last Login Dates</h2>";
echo "<p>Total Members: {$row['total_members']}</p>";
echo "<p>Last Login Date: {$row['last_login_date']}</p>";
echo "<p>Days Since Last Login: {$row['days_since_last_login']}</p>";

// Free result set
mysqli_free_result($result);

// Close connection
mysqli_close($conn);
?>
