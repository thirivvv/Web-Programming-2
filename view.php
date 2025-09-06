<?php
include"connection.php";

//select query
$sql = "SELECT * FROM students ORDER BY id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Records</title>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd; 
  }
  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }
</style>


</style>

</head>
<body>
  <h2>Registered Students</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Student Name</th>
      <th>Mobile No.</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Department</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
    <?php if ($result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['mobile']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['gender']; ?></td>
          <td><?php echo $row['department']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="8">No students registered yet.</td></tr>
    <?php endif; ?>
  </table>

  <p><a href="index.php">Register a New Student</a></p>
</body>
</html>
<?php
$conn->close();
?>
