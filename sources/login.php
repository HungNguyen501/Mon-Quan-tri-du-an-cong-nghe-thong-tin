<?php include 'kernel/process.php'; ?>
<!DOCTYPE html>
<html>
<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Login </title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/style_login.css">
</head>

<body>
    <section>
        <div class="container-fluid" style="padding: 0px; background-color:  rgb(58,67,112);">
            <div class="col-xs-2" style="text-align: center; padding: 12px 0 19px 0; border-right: 1px solid white;"> 
                <img src="assets/anh/logo.svg"  style=" height: 30px; width: 124px;">
            </div>
            <div class="col-xs-10" >
                <p style="color:white;float:left;letter-spacing:0.6px;padding: 12px 10px 10px 20px; margin-bottom: 0px; ">
                    VIỆN DINH DƯỠNG BÁCH KHOA <br>
                    Địa chỉ:  1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội |
                    Hotline:  024 3671 7090
                </p>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container-fluid" style="background-color: rgb(233,235,238);">
            <div style="margin-top: 90px;">
                <img src="assets/anh/logo4.png" style="width: 20%; margin: auto; display: block;">
            </div>
            <div class="box">

                <form method="POST" action="login.php">

                    <div style="text-align: left;">
                         <?php include 'kernel/errors.php'; ?>
                    </div>    

                    <div class=" form-input" style="border: 1px solid #ccc; border-radius: 3px; margin: 10px 0 20px 0;">
                        <i class="fas fa-user" style="margin: 0 15px;"></i>
                         <input type="text" name="username" placeholder="  Tên đăng nhập" /> 
                    </div>

                    <div class="form-input" style="border: 1px solid #ccc; border-radius: 3px; margin: 25px 0 15px 0;">
                         <i class="fas fa-lock" style="margin: 0 15px;"></i>
                         <input type="password" name="pass" placeholder="Mật khẩu" />
                    </div>               
                    
                    <input type="submit" name="submit" value="Đăng nhập" class="btn-login"/>
                    
                    

                </form>
            </div>
        </div>
    </section>
</body>
</html>
