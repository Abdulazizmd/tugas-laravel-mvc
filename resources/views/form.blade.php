<!DOCTYPE html>
<html>
<head>
<title>Form Sign Up</title>
</head>
<body>

<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>

<form action="/welcome1">
  <label for="fname">First name:</label>
  <br>
  <input type="text" id="fname" name="fname">
  <br>
  <label for="lname">Last name:</label>
  <br>
  <input type="text" id="lname" name="lname">
  <br><br>

  <label for="gender">Gender:</label>
  <br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <br><br>

  <label for="nationality">Nationality:</label>
  <br>
  <select id="cars" name="cars">
    <option value="indonesian">Indonesian</option>
    <option value="singaporean">Singaporean</option>
    <option value="malaysian">Malaysian</option>
    <option value="australian">Australian</option>
  </select>
  <br><br>

  <label for="language">Language Spoken:</label>
  <br>
  <input type="checkbox" id="language1" name="language1" value="Bahasa Indonesia">
  <label for="vehicle1"> Bahasa Indonesia</label>
  <br>
  <input type="checkbox" id="language2" name="language2" value="English">
  <label for="language2"> English</label>
  <br>
  <input type="checkbox" id="language3" name="language3" value="Other">
  <label for="language3"> Other</label>
  <br><br>

  <label for="bio">Bio:</label><br>
  <textarea name="textarea" rows="10" cols="30"></textarea>
  <br>

  <input type="submit" value="Sign Up">
</form> 

</body>
</html>