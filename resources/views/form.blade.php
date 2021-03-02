
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/halo" method="POST">
        @csrf
        <label>First name :</label><br>
        <input type="text" name="first"><br><br>

        <label>Last Name :</label><br>
        <input type="text" name="last"><br><br>

        <label>Gender :</label><br>
        <input type="radio" name="male">Male <br>
        <input type="radio" name="female">Female <br>
        <input type="radio" name="other">Other
        <br><br>

        <label>Nationality :</label><br>
        <select name="nationality">
            <option value="Indonesia" name="indonesia">Indonesia</option>
            <option value="Malaysia" name="malaysia">Malaysia</option>
            <option value="Singapura" name="singapura">Singapura</option>
        </select>
        <br><br>

        <label>Language Spoken :</label><br>
        <input type="checkbox" name="indo">Indonesia<br>
        <input type="checkbox" name="english">English<br>
        <input type="checkbox" name="other">Other
        <br><br>

        <label>Bio :</label><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>