<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styleindex.css">
    <script>
        function affiche(){
            window.location="inscrire.php"
        }
    </script>
</head>

<body>
    <form action="login.php" method="post">
        <main>
            <div class="row">
                <div class="col-form">
                    <div class="form-container">
                        <input type="text" placeholder="Username" name="name" id="user">
                        <input type="password" placeholder="Password" name="pass" id="password" value="" required>
                        <button class="btn-login" name="valider">Login</button>
                        <a href="#">Forgotten password?</a>
                        <button class="btn-new" name="signup" id="signup" onclick="affiche()">Create new Account</button>
                    </div>
                    <p><a href="#"><b>Create a Page</b></a> Anas ER-RAKIBI.</p>
                </div>
            </div>
        </main>
    </form>
</body>

</html>