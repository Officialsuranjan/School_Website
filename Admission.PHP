<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admission - Bright Future School</title>
  <link rel="stylesheet" href="Admission.CSS" />

</head>
<body>
  <header>
    <div class="logo">Bright Future School</div>
    <nav class="nav">
      <a href="Index.PHP">Home</a>
      <a href="About.PHP">About</a>
      <a href="Admission.PHP" class="active">Admission</a>
      <a href="Notice.PHP">Notice</a>
      <a href="Result.PHP">Result</a>
      <a href="Login.PHP">Login</a>
    </nav>
  </header>

  <main class="main">
    <div class="form-card">
      <h1>Admission Form</h1>
      <p class="sub">Fill the form carefully. Fields marked with * are required.</p>

      <form method="post">
        <div class="row">
          <label for="fullname">Full Name *</label>
          <input id="fullname" name="fullname" type="text" required />
        </div>

        <div class="row">
          <label for="guardian">Guardian Name *</label>
          <input id="guardian" name="guardian" type="text" required />
        </div>

        <div class="row">
          <label for="dob">Date of Birth *</label>
          <input id="dob" name="dob" type="date" required />
        </div>

        <div class="row">
          <label>Gender *</label>
          <div class="gender-options">
            <label><input type="radio" name="gender" value="Male" required /> Male</label>
            <label><input type="radio" name="gender" value="Female" required /> Female</label>
            <label><input type="radio" name="gender" value="Other" required /> Other</label>
          </div>
        </div>

        <div class="row">
          <label for="phone">Phone Number *</label>
          <input id="phone" name="phone" type="tel" pattern="[0-9]{10}" placeholder="10 digit number" required />
        </div>

        <div class="row">
          <label for="email">Email (Gmail) *</label>
          <input id="email" name="email" type="email" placeholder="enter your gmail" required />
        </div>

        <div class="row">
          <label for="address">Address *</label>
          <textarea id="address" name="address" required></textarea>
        </div>

        <div class="row file-row">
          <div>
            <label for="photo">Upload Photo *</label>
            <input id="photo" name="photo" type="file" accept="image/*" required />
          </div>
          <div class="preview">
            <label>Preview</label>
            <div id="imgPreview" class="img-preview">No image</div>
          </div>
        </div>

        <div class="row">
          <label for="username">Create Username *</label>
          <input id="username" name="username" type="text" required />
        </div>

        <div class="row">
          <label for="password">Create Password *</label>
          <input id="password" name="password" type="password" required />
        </div>

        <button type="submit" name="btn" class="btn">Submit Form</button>
      </form>

    </div>

  </main>

  <footer>
    <p>© 2025 Bright Future School. All rights reserved.</p>
  </footer>

  <script>
    const photoInput = document.getElementById("photo");
    const imgPreview = document.getElementById("imgPreview");
    const form = document.getElementById("admissionForm");

    photoInput.addEventListener("change", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          imgPreview.innerHTML = '<img src="' + e.target.result + '" alt="Photo Preview">';
        };
        reader.readAsDataURL(file);
      } else {
        imgPreview.innerHTML = "No image";
      }
    });

  </script>
</body>
</html>


<?php
      $conn=mysqli_connect('localhost', 'root', '', 'registration');
      if(isset($_POST['btn'])){
        $fullname=$_POST['fullname'];
        $guardian=$_POST['guardian'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $photo=$_POST['photo'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="INSERT INTO admission (fullname, guardian, dob, gender, phone, email, address,photo, username, password) 
        VALUES ('$fullname', '$guardian', '$dob', '$gender', '$phone', '$email', '$address','$photo', '$username', '$password')";
        $run=mysqli_query($conn, $query);
      }
      
?>