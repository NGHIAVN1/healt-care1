
<?php
include 'header.php';
include "lib/connection.php";
$sql = "SELECT * FROM patients";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
    <html>
    <div class="container">
        <h2>Patients</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><a href="home.php?remove=<?php echo $row['id']; ?>">Remove</a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </html>