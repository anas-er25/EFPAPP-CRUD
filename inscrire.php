<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styleindex.css">
</head>

<body>
    <form action="adduser.php" method="post">
        <main>
            <div class="row">
                <div class="col-form">
                    <div class="form-container">
                        <input type="text" placeholder="Username" name="username" id="user">
                        <input type="password" placeholder="Creer un mot de passe" name="password" id="password" value="" required>
                        <button class="btn-login" name="signup" id="signup">Sign up</button>
                    </div>
                </div>
            </div>
        </main>
    </form>
</body>

</html>