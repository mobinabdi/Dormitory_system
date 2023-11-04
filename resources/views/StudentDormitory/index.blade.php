<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/app.css" />
      <style>
          /*@font-face {*/
          /*    font-family: "shabnam";*/
          /*    src: url("fonts/Shabnam-FD"), format(".woff");*/
          /*}*/

          html {
              box-sizing: border-box;
              margin: 0;
              padding: 0;
          }

          body {
              font-family: "shabnam";
              box-sizing: inherit;
          }

          a {
              text-decoration: none;
          }

          .container {
              height: 20px;
              width: 85%;
              margin: 0 auto;
              position: relative;
          }

          .header {
              display: flex;
              justify-content: center;
              align-items: center;
              background-color: rgb(100, 181, 246);
              border-radius: 20px;
              margin: 40px 0;
          }

          .header-title {
              line-height: 70px;
              padding: 0 20px;
              color: black;
              text-align: center;
              align-items: center;
          }

          .mian {
              display: flex;
              flex-wrap: wrap;
              justify-content: space-between;
              align-items: center;
              gap: 14px;
              margin-top: 20px;
          }

          .information-user {
              background-color: rgba(100, 181, 246, 50%);
              width: 250px;
              height: 50px;
              line-height: 50px;
              padding: 5px 20px;
              border-radius: 20px;
              margin-top: 9px;
          }

          .label {
              font-weight: 300;
          }

          .label-value {
              font-size: 18px;
              font-weight: bold;

          }

          .dormitory-wrapper {
              display: flex;
              flex-wrap: wrap;
              align-items: center;
              justify-content: space-between;
              margin-top: 50px;
              gap: 10px;
          }

          .dormitory-1 {
              width: 250px;

          }

          .dormitory-tilte {
              display: flex;
              align-items: center;
              gap: 5px;
              background-color: rgba(100, 181, 246, 50%);
              border-radius: 20px;
              padding: 10px;
              box-shadow: 4px 8px 20px 0 gray;
              cursor: pointer;
          }

          .dormitory-text {
              font-size: 20px;
              font-weight: bold;
              margin: 0;

          }

          .chevron-left {
              width: 27px;
              height: 27px;
              transition: all 120ms 20ms;
          }

          .chevron-left-active {
              transform: rotate(180deg);
          }

          .dormitory-content {
              box-shadow: 4px 8px 20px 0 grey;
              border-radius: 15px;
              opacity: 0;
              visibility: hidden;
              transition: all 120ms 20ms;
              min-height: 100px;
              max-height: 100px;
              overflow-y: scroll;

          }

          .dormitory-content-active {
              opacity: 1;
              visibility: visible;
              transform: translateY(4px);
          }

          .dormitory-list {
              list-style: none;
              padding: 2px 18px;
          }

          .dormitory-item {
              font-size: 18px;
              padding: 4px 0;
          }

          .dormitory-link {
              color: black;
              transition: all 120ms 20ms;
              padding: 0 5px;
          }

          .dormitory-link:hover {
              color: rgba(100, 181, 246, 90%);
              font-size: 19px;
              font-weight: 700;

          }
          .rooms-name-none{
              display: none;
          }

          .btn{
              display: flex;
              justify-content: center;
              align-items: center;
              margin-top: 50px;
              padding-bottom: 50px;
          }



          .btn-link{
              display: flex;
              align-items: center;
              justify-content: center;
              width: 190px;
              height: 30px ;
              background-color: rgba(100, 181, 246, 70%);
              color: black;
              border-radius: 20px;
              text-align: center;
              padding: 5px 10px;
              font-size: 20px;
              font-weight: bold;
              transition: all 120ms 20ms;
          }
          .btn-link:hover{
              background-color: rgba(100, 181, 246, 90%);
              width: 215px;
              height: 42px;
              font-size: 22px;
          }
          /*  Media Screen */

          @media screen and (max-width : 1220px) {
              .dormitory-tilte{
                  margin-top: 20px;
              }
          }


          @media screen and (max-width : 992px) {

          }
          @media screen and (max-width : 730px) {
              .mian{
                  justify-content: center;
              }
          }


          @media screen and (max-width : 633px) {
              .dormitory-wrapper{
                  justify-content: center;
                  padding-bottom: 50px;
              }
              .btn{
                  margin-top: 0px;
              }
          }


          @media screen and (max-width : 512px) {

          }
          .form{
              text-align: center;

          }
          .sub{
              color: #718096;
              left: 100px;
              right: 100px  ;
          }
      </style>

    <title>student dormitory</title>
  </head>
  <body>
      <div class="header">
        <h1 class="header-title">ثبت خوابگاه های دانشگاه ایلام</h1>
      </div>

{{--      <div class="mian">--}}
{{--        <div class="information-user">--}}

{{--          <span class="label">نام کاربری :</span>--}}
{{--          <span class="label-value">{{$Information->name}}</span>--}}
{{--        </div>--}}

{{--        <div class="information-user">--}}
{{--          <span class="label">کد دانشجویی :</span>--}}
{{--          <span class="label-value">{{$Information->National}}</span>--}}
{{--        </div>--}}

{{--        <div class="information-user">--}}
{{--          <span class="label">کد ملی :</span>--}}
{{--          <span class="label-value">{{$Information->student}}</span>--}}
{{--        </div>--}}
{{--      </div>--}}

      <div class="form">
          @if(Session::get('true'))
              <h3>{{Session::get('true')}}</h3>
          @endif
          @if(Session::get('false'))
              <h3>{{Session::get('false')}}</h3>
          @endif
        <form action="/receive" method="post">

            @csrf
            <label for="">نام و نام خانودگی:</label>
            <div>
                <input type="text" name="name" value="{{$Information->name}}">
            </div>
            <label for="">شاره دانشجویی:</label>
            <div>
                <input type="text" name="National" value="{{$Information->National}}">
            </div>
            <label for="">کد ملی:</label>
            <div>
                <input type="text" name="student" value="{{$Information->student}}">
            </div>
            <br>
            <label for="">خوبگاه:</label>
            <div>
                <input type="radio" name="dorm" value="مطهری" checked> مطهری<br>
                <input type="radio" name="dorm" value="ورمزیار"> ورمزیار<br>
                <input type="radio" name="dorm" value="اختیارزاده"> اختیارزاده<br><br>
            </div><br>
            <label for="">طبقه:</label>
            <div>
                <input type="checkbox" name="floor" value="طبقه اول">طبقه اول
                <br>
                <input type="checkbox" name="floor" value="طبقه دوم">طبقه دوم
                <br><br>
            </div><BR>

            <div class="sub">
               <input type="submit" value="ثبت">
            </div>
        </form>
      </div>
  </body>
</html>

