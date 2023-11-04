<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Popup Login Form Design | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            height: 100vh;
            width: 100%;
            background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
        }
        .show-btn{
            background: #fff;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: 500;
            color: #3498db;
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .show-btn, .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        input[type="checkbox"]{
            display: none;
        }
        .container{
            display: none;
            background: #fff;
            width: 410px;
            padding: 30px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        #show:checked ~ .container{
            display: block;
        }
        .container .close-btn{
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 18px;
            cursor: pointer;
        }
        .container .close-btn:hover{
            color: #3498db;
        }
        .container .text{
            font-size: 35px;
            font-weight: 600;
            text-align: center;
        }
        .container form{
            margin-top: -20px;
        }
        .container form .data{
            height: 45px;
            width: 100%;
            margin: 40px 0;
        }
        form .data label{
            font-size: 18px;
        }
        form .data input{
            height: 100%;
            width: 100%;
            padding-left: 10px;
            font-size: 17px;
            border: 1px solid silver;
        }
        form .data input:focus{
            border-color: #3498db;
            border-bottom-width: 2px;
        }
        form .forgot-pass{
            margin-top: -8px;
        }
        form .forgot-pass a{
            color: #3498db;
            text-decoration: none;
        }
        form .forgot-pass a:hover{
            text-decoration: underline;
        }
        form .btn{
            margin: 30px 0;
            height: 45px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }
        form .btn .inner{
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            z-index: -1;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            transition: all 0.4s;
        }
        form .btn:hover .inner{
            left: 0;
        }
        form .btn button{
            height: 100%;
            width: 100%;
            background: none;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
        }
        form .signup-link{
            text-align: center;
        }
        form .signup-link a{
            color: #3498db;
            text-decoration: none;
        }
        form .signup-link a:hover{
            text-decoration: underline;
        }
    .message{
        text-align: center;
        background: #718096;
    }
    </style>
</head>
<body>
<div class="message">
@if(Session::get('message'))
   <h1> {{Session::get('message')}}</h1>
@endif
</div>

<div class="center">
    <input type="checkbox" id="show">
    <label for="show" class="show-btn">ورود</label>

    <div class="container">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
        <div class="text">
            ورود برای رزور خوابگاه
        </div>
{{--وقتی میخوایم وارد سویم میتونیم با این خط کد اسم ذخیره شده در دیتابیش را بیاورد بعد وارد شود--}}
{{--                    <a href="index/{{$user->id}}">{{$user->name}}</a>--}}

        <form action="/add" method="post">
            @csrf
            <div class="data">
                <label>شماره دانشجویی</label>
                <input type="text" name="National" placeholder="@error('student') {{$message}}  @enderror">


            </div>
            <div class="data">
                <label>کد ملی</label>
                <input type="password"  name="student">
                @error('National') {{$message}}  @enderror

            </div><br>
            <div>
                <input type="hidden" name="gender">
            </div><br>
{{--            <div class="forgot-pass">--}}
{{--                <a href="#">Forgot Password?</a>--}}
{{--            </div>--}}
            <div class="btn">
                <div class="inner"></div>
                <button type="submit" name="sub">ورود</button>
            </div>
            <div class="signup-link">
                Not a member? <a href="/">Signup now</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
