<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/signin.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>

    <header>
        <div class="Header-Wrapper">
            <h1 class="MainTT"><span class="Work-icon"><a href="#Home">R</span>Refearn</a>
            </h1>
            <div class="Header">
                <a href="index.php">Home</a>
            </div>
        </div>
    </header>

    <div class="big-container">

        <section class="login-container active" id="logPage">
            <form action="loginquery.php" method="post">
                <div class="logwrapper">
                    <div class="head">Welcome Back</div>
                    <div class="Input">
                        <input type="text" name="firstName" id="username" class="accept" required>
                        <div class="enterM lable">Firstname</div>
                    </div>
                    <div class="Input">
                        <input type="password" name="password" id="password" class="accept" required>
                        <div class="enterP lable">Enter your password</div>
                    </div>
                    </br>
                    <div class="signin">
                        <span>Don't have an account?
                            <a class="anchor" id="signbtn2">Sign in</a>
                    </div>
                </div>
            </form>
        </section>

        <section class="sign-container" id="signpage">
            <form action="signinquery.php" method="post">
                <div class="logwrapper">
                    <div class="head">Create your account</div>
                    <div class="Input">
                        <input type="text" name="firstName" id="username" class="accept" required>
                        <div class="enterM lable"> Enter firstname</div>
                    </div>
                    <div class="Input">
                        <input type="text" name="lastName" id="username" class="accept" required>
                        <div class="enterM lable"> Enter Lastname</div>
                    </div>
                    <div class="Input">
                        <input type="email" name="email" id="email" class="accept" required>
                        <div class="enterE lable">Enter your email</div>
                    </div>
                    <div class="Input">
                        <input type="password" name="password" id="password" class="accept" required>
                        <div class="enterP lable">Enter your password</div>
                    </div>
                    </br>
                    <div class="signin">
                        <span>Already have an account?
                            <a href="login.php" class="anchor" id="loginbtn2"> Log in</a>
                    </div>
                </div>
            </form>
        </section>
        </section>

    </div>
    <script src="auth.js"></script>
</body>

</html>