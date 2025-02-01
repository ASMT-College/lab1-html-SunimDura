<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="submit.php" method="post">
    <fieldset>
      <legend>Register Form</legend>
      
      <!-- Text Input -->
      <div class="form-group">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" placeholder="Sunim Dura" required>
      </div>

      <!-- Email Input -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>

      <!-- Password Input -->
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <!-- Telephone Input -->
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
      </div>

      <!-- URL Input -->
      <div class="form-group">
        <label for="website">Website:</label>
        <input type="url" id="website" name="website" placeholder="https://example.com">
      </div>

      <!-- Number Input -->
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="18" max="100" placeholder="18">
      </div>

      <!-- Date Input -->
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob">
      </div>

      <!-- Range Input -->
      <div class="form-group">
        <label for="experience">Experience (Years):</label>
        <input type="range" id="experience" name="experience" min="0" max="20" step="1">
      </div>

      <!-- Country Select -->
      <div class="form-group">
        <label for="country">Country:</label>
        <select id="country" name="country" required>
          <option value="">--Select Your Country--</option>
          <option value="us">United States</option>
          <option value="uk">United Kingdom</option>
          <option value="np">Nepal</option>
          <option value="au">Australia</option>
        </select>
      </div>

      <!-- Radio Buttons -->
      <div class="form-group">
        <p>Gender:</p>
        <label><input type="radio" name="gender" value="male" required> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        <label><input type="radio" name="gender" value="other"> Other</label>
      </div>

      <!-- Checkbox -->
      <div class="form-group">
        <p>Hobbies:</p>
        <label><input type="checkbox" name="hobbies[]" value="reading"> Reading</label>
        <label><input type="checkbox" name="hobbies[]" value="traveling"> Traveling</label>
        <label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
      </div>

      <!-- File Input -->
      <div class="form-group">
        <label for="profilePhoto">Profile Photo:</label>
        <input type="file" id="profilePhoto" name="profile_photo" accept="image/*">
      </div>

      <!-- Color Picker -->
      <div class="form-group">
        <label for="favoriteColor">Favorite Color:</label>
        <input type="color" id="favoriteColor" name="favorite_color" value="#000000">
      </div>

      <!-- Submit and Reset Buttons -->
      <div class="form-group">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
      </div>

    </fieldset>
  </form>
</body>
</html>
