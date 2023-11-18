<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <title>Client - Login</title>
</head>
<style>
    * {
        box-sizing: border-box;
        font-family: sans-serif;
    }

    /*Background Color Animation*/

    @keyframes colorAnimate {
        0% {
            background: rgb(46, 46, 46);
        }

        25% {
            background: rgb(41, 90, 131);
        }

        50% {
            background: rgb(20, 100, 153);
        }

        75% {
            background: rgb(62, 46, 100);
        }

        100% {
            background: rgb(46, 46, 46);
        }
    }

    @-webkit-keyframes colorAnimate

    /* Safari and Chrome - necessary duplicate */
        {
        0% {
            background: rgb(46, 46, 46);
        }

        25% {
            background: rgb(41, 90, 131);
        }

        50% {
            background: rgb(20, 100, 153);
        }

        75% {
            background: rgb(62, 46, 100);
        }

        100% {
            background: rgb(46, 46, 46);
        }
    }

    html,
    body {
        font-family: sans-serif;
        font-size: 100%;
    }

    html,
    body,
    .wrapper,
    .sct {
        height: 100%;
        margin: 0;
    }

    a {
        text-decoration: none;
        color: rgb(22, 185, 185);
    }

    h1 {
        font-size: 6rem;
    }

    h2 {
        font-size: 3rem;
    }

    h3 {
        font-size: 2rem;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 400;
        color: #2d2d2d;
    }

    input:active,
    input:focus,
    input:visited,
    input:hover {
        outline: none;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="password"] {
        display: block;
        width: 100%;
        margin-bottom: 1rem;
        padding: 1.8rem 1.6rem;
        background: #fff;
        border: 1px solid rgb(212, 212, 212);
        font-family: sans-serif;
        font-weight: 600;
        color: rgb(78, 78, 78);
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 1rem;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        -o-transition: all .3s;
        -moz-transition: all .3s;
        -webkit-transition: all .3s;
        -ms-transition: all .3s;
        transition: all .3s;
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        margin: 1.5rem 0;
        padding: 1.2rem;
        background: black;
        border: 1px solid rgb(212, 212, 212);
        font-family: sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        color: rgb(247, 247, 247);
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 1rem;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        -o-transition: all .3s;
        -moz-transition: all .3s;
        -webkit-transition: all .3s;
        -ms-transition: all .3s;
        transition: all .3s;
    }

    input[type="submit"]:active,
    input[type="submit"]:focus,
    input[type="submit"]:visited,
    input[type="submit"]:hover {
        background: red;
    }

    button,
    input[type="submit"] {
        cursor: pointer;
    }

    .text-center {
        text-align: center;
    }

    form>h3 {
        text-align: center;
    }

    .forgot-remember {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto;
        grid-template-areas:
            "centerLeft centerRight";
    }

    .sct {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .brand {
        grid-area: centerLeft;
        background-color: #da1b1b;
    }

    .brand>h3 {
        padding: .75rem;
        font-weight: 800;
        outline: 3px solid #fff;
        color: #fff;
    }

    .login {
        grid-area: centerRight;
    }

    .login>form {
        width: 400px;
        margin: 0 3rem;
    }

    /*Checkbox*/

    .control {
        font-family: arial;
        display: block;
        position: relative;
        padding-left: 30px;
        margin-bottom: 5px;
        padding-top: 3px;
        cursor: pointer;
        font-size: 16px;
    }

    .control input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }

    .control_indicator {
        position: absolute;
        top: 2px;
        left: 0;
        height: 20px;
        width: 20px;
        background: black;
        border: 0px solid #000000;
    }

    .control:hover input~.control_indicator,
    .control input:focus~.control_indicator {
        background: #cccccc;
    }

    .control input:checked~.control_indicator {
        background: red;
    }

    /* .control:hover input:not([disabled]):checked ~ .control_indicator,
.control input:checked:focus ~ .control_indicator {
    background: #0e6647d;
} */
    .control input:disabled~.control_indicator {
        background: #e6e6e6;
        opacity: 0.6;
        pointer-events: none;
    }

    .control_indicator:after {
        box-sizing: unset;
        content: '';
        position: absolute;
        display: none;
    }

    .control input:checked~.control_indicator:after {
        display: block;
    }

    .control-checkbox .control_indicator:after {
        left: 8px;
        top: 4px;
        width: 3px;
        height: 8px;
        border: solid #ffffff;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .control-checkbox input:disabled~.control_indicator:after {
        border-color: #7b7b7b;
    }

    /*Social Sign Up*/

    .social-sign {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        -ms-align-items: center;
        align-items: center;
    }

    .social-sign a {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-size: 2rem;
    }

    .social-sign>a:nth-child(2) {
        margin: 0 .5rem;
    }

    .fa-hand-o-down {
        margin-top: .5rem;
    }

    @media (max-width: 768px) {
        .wrapper {
            display: grid;
            grid-template-columns: 1fr;
            grid-auto-rows: minmax(20%, 80vmax);
            grid-template-areas:
                "centerLeft"
                "centerRight";
        }

        .login>form {
            width: 100%;
            margin: 0 3rem;
        }
    }

    .loginError {
        color: red;
    }
</style>

<body>
    <div class="wrapper">
        <div class="sct brand">
            <h3>SAGARTECH SOLUTIONS</h3>
        </div>
        <div class="sct login" id="login">
            <form class="login-form" action="login_process.php" method="POST">
                <h3>Client Login</h3>
                <input type="text" class="user" name="email" id="email" placeholder="Username">
                <input type="password" class="password" name="password" id="password" placeholder="Password">
                <input type="submit" name="send" value="Login">
                <div class="loginError text-center"></div>

            </form>
        </div> <!--end login-->
    </div> <!--end wrapper-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script>
        $(".login-form").submit(function(e) {
            e.preventDefault();

            var id = $(".user").val();
            var pass = $(".password").val();
            var form = document.getElementById('login');
            var buttonE1 = document.getElementById('e1');
            // console.log(id+pass);
            if (id.length === 0 || pass.length === 0) {
                $('.loginError').html('Please fill both fields');
            } else {
                $('.loginError').html('');
                $.ajax({
                    url: 'backoffice/checklogin.php',
                    method: 'POST',
                    data: {
                        submit: 'submit',
                        cl_id: id,
                        pass: pass,
                    },
                    success: function(rec) {
                        console.log(rec);
                        if (rec == 'loggedin') {
                            window.location.href = "client";
                        } else {
                            $('.loginError').html('You have entered wrong credentials');
                        }
                    }
                })
            }
        });
    </script>
</body>

</html>