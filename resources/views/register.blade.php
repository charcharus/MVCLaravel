<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <form method="post" action="/welcome">
    {{ csrf_field() }}
    <h2>Buat Account Baru!</h2>

    <h3>Sign Up Form</h3>

    <p>First name :</p>
    <input type="text">
    <p>Last name :</p>
    <input type="text">

    <p>Gender :</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>

    <p>Nationality :</p>
    <select id="nationality">
        <option value="indonesian">Indonesian</option>
        <option value="american">American</option>
        <option value="japanese">Japanese</option>
        <option value="chinese">Chinese</option>
      </select>

    <p>Language Spoken :</p>
    <input type="checkbox" id="bahasaindo" name="bahasaindo" value="bahasaindo">
    <label for="bahasaindo"> Bahasa Indonesia</label><br>
    <input type="checkbox" id="english" name="english" value="english">
    <label for="english"> English</label><br>
    <input type="checkbox" id="other" name="other" value="other">
    <label for="other"> Other</label>

    <p>Bio :</p>
    <textarea id="bio" name="bio" rows="4" cols="50">    
    </textarea><br />

    <button type="submit">Sign Up</button>
    </form>
</body>
</html>