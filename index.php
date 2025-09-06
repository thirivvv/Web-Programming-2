<php
include "connection.php"
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
   <script>
    function onlyOne(checkbox) {
      let checkboxes = document.getElementsByName('department[]');
      checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false;
      });
    }
  </script>
</head>
<body>
  <h2>Student Registration Form</h2>

  <form action="process.php" method="POST">
    Student Name:
    <input type="text" name="name" placeholder="Name" required><br><br>
    
    Mobile no.: +95-
    <input type="text" name="mobile" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>
    
    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female<br><br>

    Department:<br>
    <input type="checkbox" name="department[]" value="English" onclick="onlyOne(this)"> English
    <input type="checkbox" name="department[]" value="Computer" onclick="onlyOne(this)"> Computer
    <input type="checkbox" name="department[]" value="Business" onclick="onlyOne(this)"> Business<br><br>

    Address:<br>
    <textarea name="address" rows="3" cols="30" required></textarea><br><br>

    <input type="submit" name="submit" value="Register">
    <br><br>
  </form>
  <a href='view.php'>View All Registered Students</a>
</body>
</html>