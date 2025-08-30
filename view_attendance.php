<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Attendance - Student Attendance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f7fa;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Header */
    .header {
      background-color: #2980b9;
      color: white;
      padding: 20px 30px;
      text-align: center;
    }

    .header h1 {
      font-size: 22px;
    }

    /* Main Content */
    .main-content {
      flex: 1;
      padding: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .card {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 700px;
    }

    .card h2 {
      margin-bottom: 20px;
      color: #34495e;
      text-align: center;
    }

    form {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 20px;
      justify-content: center;
    }

    select, input[type="date"] {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      background-color: #2980b9;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    button:hover {
      background-color: #1f6690;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #2980b9;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    /* Responsive */
    @media (max-width: 600px) {
      form {
        flex-direction: column;
        align-items: stretch;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>View Attendance Records</h1>
  </div>

  <div class="main-content">
    <div class="card">
      <h2>Search Attendance</h2>
      <form>
        <select name="class" required>
          <option value="">-- Select Class --</option>
          <option value="class1">Class 8</option>
          <option value="class2">Class 9</option>
          <option value="class3">Class 10</option>
          <option value="class4">Class 11</option>
          <option value="class5">Class 12</option>
        </select>

        <input type="date" name="date" required>
        <button type="submit">Search</button>
      </form>

      <table>
        <thead>
          <tr>
            <th>Roll No</th>
            <th>Student Name</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example rows, later you can load from DB -->
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Present</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>Absent</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
