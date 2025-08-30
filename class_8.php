<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Attendance Form</title>
  <style>
    /* Reset & base */
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7f8;
      color: #333;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      margin: 40px 0 20px;
      color: #2c3e50;
    }

    form {
      max-width: 700px;
      background: white;
      padding: 30px 40px;
      margin: 0 auto 40px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
    }

    th, td {
      text-align: center;
      padding: 12px 15px;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #2980b9;
      color: white;
      font-weight: 600;
    }

    tr:hover {
      background-color: #f1f9ff;
    }

    input[type="radio"] {
      transform: scale(1.3);
      cursor: pointer;
    }

    .date-container {
      text-align: center;
      margin-bottom: 30px;
    }

    label {
      font-weight: 600;
      font-size: 16px;
      color: #34495e;
    }

    input[type="date"] {
      padding: 8px 12px;
      font-size: 16px;
      margin-left: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"] {
      background-color: #2980b9;
      color: white;
      border: none;
      padding: 14px 25px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      display: block;
      margin: 0 auto;
      width: 200px;
    }

    input[type="submit"]:hover {
      background-color: #1f6391;
    }

    /* Responsive */
    @media (max-width: 720px) {
      form {
        padding: 20px;
        width: 90%;
      }

      th, td {
        font-size: 14px;
        padding: 10px 8px;
      }

      input[type="submit"] {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <h2>Student Attendance Form</h2>

  <form action="attendance.php" method="POST">

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Student Name</th>
          <th>Class</th>
          <th>Present</th>
          <th>Absent</th>
        </tr>
      </thead>
      <tbody>
        <!-- Sample static rows (replace with dynamic PHP later) -->
        <tr>
          <td>1</td>
          <td>Ram</td>
          <td>8A</td>
          <td><input type="radio" name="attendance[1]" value="Present" required></td>
          <td><input type="radio" name="attendance[1]" value="Absent"></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Sita</td>
          <td>8A</td>
          <td><input type="radio" name="attendance[2]" value="Present" required></td>
          <td><input type="radio" name="attendance[2]" value="Absent"></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Hari</td>
          <td>8A</td>
          <td><input type="radio" name="attendance[3]" value="Present" required></td>
          <td><input type="radio" name="attendance[3]" value="Absent"></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Gita</td>
          <td>8A</td>
          <td><input type="radio" name="attendance[4]" value="Present" required></td>
          <td><input type="radio" name="attendance[4]" value="Absent"></td>
        </tr>
        <tr>
          <td>5</td>
          <td>syam</td>
          <td>8A</td>
          <td><input type="radio" name="attendance[4]" value="Present" required></td>
          <td><input type="radio" name="attendance[4]" value="Absent"></td>
        </tr>

      </tbody>
    </table>

    <div class="date-container">
      <label for="date">Select Date:</label>
      <input type="date" name="date" id="date" required />
    </div>

    <input type="submit" value="Submit Attendance" />

  </form>

</body>
</html>
