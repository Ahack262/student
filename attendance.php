<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Select Class - Student Attendance</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f0f4f7;
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: #ffffff;
      padding: 40px 50px;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      text-align: center;
      width: 320px;
    }

    h2 {
      margin-bottom: 25px;
      color: #2c3e50;
    }

    select {
      width: 100%;
      padding: 12px 14px;
      font-size: 16px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
    }

    button {
      width: 100%;
      padding: 12px 16px;
      font-size: 16px;
      background-color: #2980b9;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #1f6391;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Select Class</h2>

    <form action="clas_8.php" method="GET">
      <select name="class" required>
        <option value="">-- Choose Class --</option>
        <option value="8">Class 8</option>
        <option value="9">Class 9</option>
        <option value="10">Class 10</option>
        <option value="11">Class 11</option>
        <option value="12">Class 12</option>
      </select>
      
      <button type="submit"><a href="class_8.php">📋Attendance</a></button>
      
      <?php
   // header ("location:class_8.php");
     ?>
    </form>
  </div>

</body>
</html>
