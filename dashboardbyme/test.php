<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Profile</title>
  <style>
    /* Reset and basic styling */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Josefin Sans", sans-serif;
    }

    :root {
      --Color1: #16161a;
      --Color2: #ff2020;
      --Color3: #0b1c39;
      --BgColor1: #ffffff;
      --BgColor2: #f0f0f2;
    }

    body {
      background-color: var(--BgColor2);
      color: var(--Color1);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .profile-container {
      background-color: var(--BgColor1);
      border-radius: 10px;
      padding: 30px;
      width: 500px; /* Increased width */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .profile-container h1 {
      text-align: center;
      color: var(--Color3);
      margin-bottom: 20px;
    }

    .profile-container .profile-pic {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .profile-container .profile-pic img {
      border-radius: 50%;
      width: 150px; /* Increased size */
      height: 150px; /* Increased size */
      object-fit: cover;
      border: 4px solid var(--Color2);
    }

    .profile-container .info {
      margin-bottom: 20px;
    }

    .profile-container .info label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      color: var(--Color3);
    }

    .profile-container .info input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid var(--Color1);
      border-radius: 5px;
      font-size: 16px;
    }

    .profile-container button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: var(--Color2);
      color: var(--BgColor1);
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .profile-container button:hover {
      background-color: var(--Color1);
    }
  </style>
</head>
<body>

  <div class="profile-container">
    <h1>Customer Profile</h1>

    <!-- Profile Picture -->
    <div class="profile-pic">
      <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Profile Picture">
    </div>

    <!-- Customer Information Form -->
    <div class="info">
      <label for="name">Name:</label>
      <input type="text" id="name" value="John Doe">

      <label for="email">Email:</label>
      <input type="email" id="email" value="johndoe@example.com" class="email">

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" value="+1 (555) 555-5555">

      <label for="address">Address:</label>
      <input type="text" id="address" value="123 Main St, Anytown, USA">
    </div>

    <!-- Button -->
    <button>Edit Profile</button>
  </div>

</body>
</html>
