<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Goldden mood travel </title>
</head>
<body>
    <header>
        <div class="top_header">
            <div class="container">
                <ul>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fab fa-line"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="ml-auto">
                        <a href="javascript:void(0)">
                            <i class="fa fa-phone-square"></i>
                            02-123-456
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0)">
                           TH <i class="fas fa-angle-down"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <ul>
                    <li class="ml-0">
                        <a href="javascript:void(0)">
                            <img src="{{asset('frontend/images/logo.jpg')}}" class="logo_brand" alt="">
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="javascript:void(0)" class="text_brand">
                            Golden Mood Travel
                        </a>
                    </li>
                    <li class="ml-auto header_item">
                        <a href="javascript:void(0)" class="header_link">
                            หน้าแรก
                        </a>
                    </li>
                    <li class="header_item">
                        <a href="javascript:void(0)" class="header_link">
                            โปรแกรม
                        </a>
                    </li>
                    <li class="header_item">
                        <a href="javascript:void(0)" class="header_link">
                            บุ๊คกิ้ง
                        </a>
                    </li>
                    <li class="header_item">
                        <a href="javascript:void(0)" class="header_link">
                            แกลลอลี่
                        </a>
                    </li>
                    <li class="header_item">
                        <a href="javascript:void(0)" class="header_link">
                            ติดต่อเรา
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    @yield('content')

    @yield('script')
</body>
</html>