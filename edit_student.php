<?php
include"connection.php";

$id = $_GET['id'] ?? 0;

//sql query
$query = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Student</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>
  <h2>Edit Student</h2>

  <form action="process.php" method="POST" novalidate>
    <!-- hidden ID -->
    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

    Student name:
    <input type="text" name="name" value="<?php echo $student['name']; ?> "><br><br>

    Mobile no.: +95-
    <input type="text" name="mobile" value="<?php echo $student['mobile']; ?>"><br><br>

    Email:
    <input type="email" name="email" value="<?php echo $student['email']; ?>"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" <?php if($student['gender']=="Male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if($student['gender']=="Female") echo "checked"; ?>> Female<br><br>

    Department:<br>
<input type="checkbox" name="department[]" value="English" 
       <?= (strpos($student['department'], "English")!==false)?"checked":"" ?> 
       onclick="onlyOne(this)"> English
<input type="checkbox" name="department[]" value="Computer" 
       <?= (strpos($student['department'], "Computer")!==false)?"checked":"" ?> 
       onclick="onlyOne(this)"> Computer
<input type="checkbox" name="department[]" value="Business" 
       <?= (strpos($student['department'], "Business")!==false)?"checked":"" ?> 
       onclick="onlyOne(this)"> Business
<br><br>

<script>
function onlyOne(checkbox) {
    let checkboxes = document.getElementsByName('department[]');
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false;
    })
}
</script>

    Address:<br>
    <textarea name="address" rows="3" cols="30"><?php echo $student['address']; ?></textarea><br><br>

    <input type="submit" name="process" value="Update Record">
    <br><br>
    <a href='view.php'>Back to List</a>
  </form>
</body>
</html>