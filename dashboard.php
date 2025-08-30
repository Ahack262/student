<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Student Attendance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Link external CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Student Attendance</h2>
    <a href="#">🏠 Dashboard</a>
    <a href="attendance.php">📅 Attendance</a>
    <a href="">📋 View Attendance</a>
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
  </div>

</body>
</html>
