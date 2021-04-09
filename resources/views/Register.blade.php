<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/SelamatDatang" method="POST">
        @csrf
        <label for="fname">First name :</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name :</label><br><br>
        <input type="text" id="lname" name="lname"><br><br>
        
        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label> <br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label> <br><br>
        <select name="nationality" id="nationality">
            <option name="Indonesia"> Indonesian </option>
            <option name="Malaysia"> Malaysia </option>
            <option name="Singapura"> Singapura </option>
            <option name="Australia"> Australia </option>
        </select> <br><br>

        <label for="Lspoken">Language Spoken: </label> <br><br>
        <input type="checkbox" id="ls1" name="ls1" value="B.Indonesia"> 
        <label for="ls1">Bahasa Indonesia</label> <br>
        <input type="checkbox" id="ls2" name="ls2" value="eng"> 
        <label for="ls2">English</label> <br>
        <input type="checkbox" id="ls3" name="ls3" value="other"> 
        <label for="ls3">Other</label> <br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea rows="10" cols="30"></textarea><br>
        <input type="submit" value="Sign Up"></a>

    </form>
</body>
</html>