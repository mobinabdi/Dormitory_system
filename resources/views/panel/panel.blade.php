<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<style>

    /* CSS code */
    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
    }

    .container {
        margin: 20px auto;
        width: 400px;
        text-align: center;
    }

    .search-box {
        position: relative;
        display: inline-block;
    }

    .search-box input {
        width: 200px;
        padding: 10px;
        border-radius: 20px;
        border: none;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
    }

    .search-box input:focus {
        background-color: #e6e6e6;
    }

    .search-box button {
        position: absolute;
        top: 0;
        right: 0;
        width: 50px;
        height: 50px;
        border: none;
        background-color: #4CAF50;
        color: #fff;
        border-radius: 50%;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .search-box button:hover {
        transform: scale(1.1);
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    button {
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h1>جستجو</h1>
    <form action="search" method="get">
    <div class="search-box">
        <input type="search"  name="search" placeholder="Search...">
        <button type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M21.707 20.293l-6.4-6.395a7.5 7.5 0 1 0-.707.707l6.4 6.395a.5.5 0 0 0 .708-.708zM12 19.5A7.5 7.5 0 1 1 19.5 12 7.509 7.509 0 0 1 12 19.5z"></path>
            </svg>
        </button>
    </div>
    </form>
</div>
<table>
    <thead>
    <tr>
        <th>نام </th>
        <th>شماره دانشجویی</th>
        <th>کد ملی </th>
        <th>نام خوابگاه </th>
        <th>طبقه </th>
        <th>شماره اتاق </th>
    </tr>
    </thead>
    <tbody>
@foreach($datas as $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->National}}</td>
        <td>{{$data->student}}</td>
        <td>{{$data->dorm}}</td>
        <td>{{$data->floor}}2</td>
{{--        <td>اتاق 207</td>--}}

        <td><a><button>ویرایش</button></a></td>
    </tr>
@endforeach
    </tbody>
</table>
</body>
</html>
