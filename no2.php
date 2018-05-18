<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>No 2</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <label for="username">Username</label>
            <input type="text" name='username' pattern='[a-z]+'>
        </fieldset>
        <fieldset>
            <label for="email">email</label>
            <input type="email" name='email' pattern="[^A-Z\x22]+">
        </fieldset>
        <fieldset>
            <label for="phone_number">Phone Number</label>
            <input type="tel" name='phone_number' pattern="[^A-Za-z\x22]+">
        </fieldset>
        <input type="submit" name="daftar">
    </form>

    <?php
    if (isset($_POST['daftar'])) {
        echo "
            Username :".$_POST['username']."<br>
            Email :".$_POST['email']."<br>
            Phone Number : ".$_POST['phone_number']."<br>
            
        ";
    }
    
    ?>
</body>
</html>