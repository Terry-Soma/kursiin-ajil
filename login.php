<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/info2.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./javascript/potato.js"></script>

</head>
<body>
<header id="nav5">
        <nav id="main-nav">
            <div class="container">
                <div class="logo">
                    <img src="./logos/logo.png" alt="logo" />
                </div>
                <ul style="font-size: 14px !important;">
                    <li><a href="index.html" >Эхлэл</a></li>
                    <li><a href="burtgelgod.php"class="current">Бүртгүүлэх</a></li>
                    <li><a href="hutulbur.php">Хөтөлбөрүүд</a></li>
                    <li><a href="#">Холбогдох</a></li>
                    <li><a href="login.php">Нэвтрэх</a></li>

                </ul>
            </div>
        </nav>
    </header>
<div class="materialContainer">    
    <div class="box">
        <div class="wrapper">
            <div class="title">
            <h2>Login</h2></div>
            <form action="" method="post">
                <div class="form-group">
                    <div class="input">
                        <label for="name">Username</label>
                        <input type="text" name="username" class="form-control" id="name" value="">
                        <span class="spin"></span>
                        <span class="help-block"></span>
                    </div>
                </div>    
                <div class="form-group">
                    <div class="input">
                        <label for="pass">Password</label>
                        <input type="password" name="password" class="form-control" id="pass">
                        <span class="spin"></span>
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="button login">
                        <button><span>GO</span> <i class="fa fa-check"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>     
</body>
</html>