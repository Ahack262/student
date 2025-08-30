<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Signup Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #5a72b2ff;
    }

    .container {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .form-box {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      width: 320px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      position: relative;
    }

    .form-box h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 22px;
      font-weight: bold;
    }

    .form-box .input-box {
      margin-bottom: 15px;
      position: relative;
    }

    .form-box .input-box input {
      width: 100%;
      padding: 12px 40px 12px 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 14px;
      outline: none;
    }

    .form-box .input-box .toggle-password {
      position: absolute;
      top: 50%;
      right: 12px;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 16px;
      color: #888;
    }

    .form-box .forgot {
      font-size: 13px;
      margin-bottom: 15px;
      display: block;
      text-align: right;
      color: #3b6ef6;
      text-decoration: none;
    }

    .form-box button {
      width: 100%;
      padding: 12px;
      background: #0066d6;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    .form-box button:hover {
      background: #0053ad;
    }

    .form-box .switch {
      text-align: center;
      font-size: 14px;
      margin: 15px 0;
    }

    .form-box .switch a {
      color: #3b6ef6;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
    }

    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      color: #999;
      margin: 20px 0;
      font-size: 14px;
    }

    .divider::before, .divider::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid #ddd;
    }

    .divider:not(:empty)::before {
      margin-right: .75em;
    }

    .divider:not(:empty)::after {
      margin-left: .75em;
    }

    .social-login button {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .facebook {
      background: #3b5998;
      color: #fff;
    }

    .google {
      border: 1px solid #ddd;
      background: #fff;
      color: #444;
    }

    .google img, .facebook img {
      width: 18px;
      height: 18px;
    }

    /* Hide signup initially */
    #signup-box {
      display: none;
    }

    @media(max-width: 700px) {
      .container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- Login Form -->
    <div class="form-box" id="login-box">
      <h2>Login</h2>
      <div class="input-box">
        <input type="email" id="login-email" placeholder="Email">
      </div>
      <div class="input-box">
        <input type="password" id="login-password" placeholder="Password">
        <span class="toggle-password" onclick="togglePassword('login-password', this)">👁</span>
      </div>
      <a href="#" class="forgot">Forgot password?</a>
      <button onclick="login()">Login</button>
      <div class="switch">
        Don’t have an account? <a onclick="showSignup()">Signup</a>
      </div>

      <div class="divider">Or</div>

      <div class="social-login">
        <button class="facebook"><img src="https://cdn-icons-png.flaticon.com/512/124/124010.png"> Login with Facebook</button>
        <button class="google"><img src="https://cdn-icons-png.flaticon.com/512/281/281764.png"> Login with Google</button>
      </div>
    </div>

    <!-- Signup Form -->
    <div class="form-box" id="signup-box">
      <h2>Signup</h2>
      <div class="input-box">
        <input type="email" id="signup-email" placeholder="Email">
      </div>
      <div class="input-box">
        <input type="password" id="signup-password" placeholder="Create password">
        <span class="toggle-password" onclick="togglePassword('signup-password', this)">👁</span>
      </div>
      <div class="input-box">
        <input type="password" id="signup-confirm" placeholder="Confirm password">
        <span class="toggle-password" onclick="togglePassword('signup-confirm', this)">👁</span>
      </div>
      <button onclick="signup()">Signup</button>
      <div class="switch">
        Already have an account? <a onclick="showLogin()">Login</a>
      </div>

      <div class="divider">Or</div>

      <div class="social-login">
        <button class="facebook"><img src="https://cdn-icons-png.flaticon.com/512/124/124010.png"> Signup with Facebook</button>
        <button class="google"><img src="https://cdn-icons-png.flaticon.com/512/281/281764.png"> Signup with Google</button>
      </div>
    </div>
  </div>

  <script>
    // Toggle password visibility
    function togglePassword(fieldId, element) {
      const input = document.getElementById(fieldId);
      if (input.type === "password") {
        input.type = "text";
        element.textContent = "🙈";
      } else {
        input.type = "password";
        element.textContent = "👁";
      }
    }

    // Switch forms
    function showSignup() {
      document.getElementById("login-box").style.display = "none";
      document.getElementById("signup-box").style.display = "block";
    }

    function showLogin() {
      document.getElementById("signup-box").style.display = "none";
      document.getElementById("login-box").style.display = "block";
    }

    // Basic form validation
    function login() {
      const email = document.getElementById("login-email").value;
      const password = document.getElementById("login-password").value;
      if (email === "" || password === "") {
        alert("Please fill in all fields!");
      } else {
        alert("Login successful (demo only)");
      }
    }

    function signup() {
      const email = document.getElementById("signup-email").value;
      const password = document.getElementById("signup-password").value;
      const confirm = document.getElementById("signup-confirm").value;
      if (email === "" || password === "" || confirm === "") {
        alert("Please fill in all fields!");
      } else if (password !== confirm) {
        alert("Passwords do not match!");
      } else {
        alert("Signup successful (demo only)");
      }
    }
  </script>

</body>
</html>
