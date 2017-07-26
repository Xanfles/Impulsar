<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImpulsarCluster</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amita">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search1.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form1.css">
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search1.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
</head>

<body style="background-image:url(&quot;assets/img/Background.jpg&quot;);">
    <div>
        <nav class="navbar navbar-default navbar-fixed-top navigation-clean-search navbar.transparent.navbar-inverse .navbar-inner" style="border-width:0px;-webkit-box-shadow:0px 0px;box-shadow:0px 0px;background-color:rgba(0,0,0,0.15);background-image:-webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));background-image:-webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);background-image:linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#" style="color:#ffffff;">Cluster Impulsar</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="index.php" style="color:#f0f9ff;">Volver </a></li>
                    </ul><a class="btn btn-default navbar-btn navbar-right action-button" role="button" href="login.php">Ingresar</a></div>
            </div>
        </nav>
    </div>
    <div class="login-card" style="padding-top:40px;margin-top:120px;"><img src="assets/img/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form action='../Impulsar/Control/TLogin.php' method='POST' class="form-signin"><span class="reauth-email" style="font-size:24px;">Iniciar sesión </span>
            <input class="form-control" type="text" name="usuario" required="" placeholder="Usuario" autofocus="" id="usuario">
            <input class="form-control" type="password" name="pass" required="" placeholder="Contraseña" id="pass">  
            <button type="submit" class="log-btn" value="Ingresar"  name="OK">Iniciar</button>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>