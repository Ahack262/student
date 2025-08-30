<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Student Attendance</title>
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
      min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background-color: #2c3e50;
      color: white;
      padding: 30px 20px;
      display: flex;
      flex-direction: column;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
    }

    .sidebar h2 {
      font-size: 22px;
      margin-bottom: 40px;
      text-align: center;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      margin-bottom: 20px;
      display: block;
      font-size: 16px;
      padding: 10px;
      border-radius: 6px;
      transition: background-color 0.2s ease;
    }

    .sidebar a:hover {
      background-color: #34495e;
    }

    /* Wrapper for header and main */
    .main-container {
      margin-left: 220px;
      width: calc(100% - 220px);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Top Header */
    .header {
      background-color: #2980b9;
      color: white;
      padding: 20px 30px;
      text-align: center;
    }

    .header h1 {
      font-size: 24px;
    }

    /* Main content */
    .main-content {
      flex: 1;
      padding: 30px;
      overflow-y: auto;
    }

    .dashboard {
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
    }

    .card {
      background-color: white;
      width: 220px;
      height: 140px;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      text-align: center;
      padding: 30px 20px;
      transition: transform 0.2s, box-shadow 0.2s;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .card h3 {
      margin-bottom: 10px;
      font-size: 18px;
      color: #34495e;
    }

    .card p {
      font-size: 14px;
      color: #777;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      body {
        flex-direction: column;
      }

      .sidebar {
        position: relative;
        width: 100%;
        flex-direction: row;
        justify-content: space-around;
        padding: 15px 10px;
      }

      .sidebar h2 {
        display: none;
      }

      .sidebar a {
        margin-bottom: 0;
        padding: 10px;
        font-size: 14px;
      }

      .main-container {
        margin-left: 0;
        width: 100%;
      }

      .dashboard {
        flex-direction: column;
        align-items: center;
      }

      .card {
        width: 100%;
        max-width: 90%;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Student Attendance</h2>
    <a href="#">🏠 Dashboard</a>
    <a href="attendance.php">📅 Attendance</a>
    <a href="#">📋 View Attendance</a>
    <a href="#">🧑‍🎓 Manage Students</a>
    <a href="#">⚙️ Settings</a>
    <a href="#">🚪 Logout</a>
  </div>

  <!-- Main Container (Header + Content) -->
  <div class="main-container">

    <!-- Header -->
    <div class="header">
      <h1>Welcome to the Student Attendance Dashboard</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <div class="dashboard">
        <div class="card" onclick="location.href='select_class.html'">
          <h3>📅 Mark Attendance</h3>
          <p>Select class and mark today's attendance.</p>
        </div>

        <div class="card" onclick="location.href='view_attendance.html'">
          <h3>📋 View Attendance</h3>
          <p>Check past attendance records by class/date.</p>
        </div>

        <div class="card" onclick="location.href='manage_students.html'">
          <h3>🧑‍🎓 Manage Students</h3>
          <p>Add, update, or remove student records.</p>
        </div>

        <div class="card" onclick="location.href='select_class.html'">
          <h3>🏫 Select Class</h3>
          <p>Pick a class to start working with.</p>
        </div>

       

       
    </div>

  </div>

</body>
</html>
