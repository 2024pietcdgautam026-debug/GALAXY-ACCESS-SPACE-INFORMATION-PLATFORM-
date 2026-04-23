<?php
include "db.php";
?>

<h2>All Users</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Created</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM users");

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['created_at']}</td>
    </tr>";
}
?>
</table>

<h2>User Login/Logout Logs</h2>

<table border="1">
<tr>
<th>User ID</th>
<th>Login Time</th>
<th>Logout Time</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM user_logs");

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
        <td>{$row['user_id']}</td>
        <td>{$row['login_time']}</td>
        <td>{$row['logout_time']}</td>
    </tr>";
}
?>
</table>