<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!--===============================================================================================-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

    <style>
    .container{
        padding-left: 300px;
    }
    </style>
</head>

<body onload="time()">
<div class="container">
        
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        Login
                    </span>
                    <form action="login.php">
                    <div class="wrap-input100 validate-input"
                        data-validate="You must enter like this: ex@abc.xyz">
                        <input class="input100" type="text" placeholder="User" name="username" id="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password cannot be blank!">
                        <input class="input100" type="password" placeholder="Password" name="current-password"
                            id="password-field">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="button" value="Login" id="submit" onclick="validate()" />
                    </div>
                </form>
            
                </form>
            </div>
        </div>
    </div>
</div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
   <script>
       $('.js-tilt').tilt({
           scale:1.1
       })
   </script>
   <script src="/js/main.js"></script>
   <script type="text/javascript">
    function validate() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password-field").value;
        //Set 1 Admin ảo để đăng nhập quản trị
        if (username == "admin" && password == "123456789") {
            swal("Success!", "You are logged in as Admin", "success");
            window.location = "custommer.html";
            return true;
        }
        if(username == "tdt" && password == "tdt") {
            swal("Success!", "You are logged in as a user", "success");
            window.location = "custommer.html"
            return true;
        }
        //Nếu không nhập gì mà nhấn đăng nhập thì sẽ báo lỗi
        if (username == "" && password == "") {
            swal("You have to input your informations!", "Check again, please", "warning");
            return false;
        }
        //Nếu không nhập tài khoản sẽ báo lỗi
        if (username == null || username == "") {
            swal("You have not entered an account name", "Check account name again, please", "error");
            return false;
        } 
        //Nếu không nhập mật khẩu sẽ báo lỗi
        if (password == null || password == "") {
            swal("You have not entered your password", "Check password again, please", "error");
            return false;
        }
    }

    //show/hide pass
    function myFunction(){
        var x = document.getElementById("myInput");
        if (x.type === "password"){
            x.type = "text"
        } else {
            x.type = "password";
        }
    }
    $(".toggle-password").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + ":" + m + ":" + s;
        if (dd < 10) { dd = '0' + dd} if (mm < 10) { mm = '0' + mm} today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="date">' + today + ' | ' + nowTime + '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    }
   </script>
</body>

</html>
<!--THANK FOR WATCHING <3-->
