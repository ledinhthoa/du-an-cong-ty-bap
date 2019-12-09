<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://kit.fontawesome.com/6d7b60da21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <title>Document</title>
</head>
<body>


<!-- *********** Start Menu Bar ************ -->

<div class="container border border-bottom-0" style="height: 100vh">
    <div class="row border" style="height: 7%; background-color: rgb(226, 226, 226);">
        <div class="col-2 h-100 d-flex flex-column align-items-center justify-content-center">
            <img style="height: 60%;" src="" alt="">
        </div>
        <div class="col-10 d-flex justify-content-end align-items-center">
            <!-- <div style="font-size: 20px;">
                <i class="fas fa-user mr-2"></i>
                <i class="fas fa-sort-down"></i>
            </div> -->


            <div id="home-admin" class=" dropdown btn cursor-pointer"   data-toggle="dropdown"
                 style="background-color:  rgb(226, 226, 226); ">
                <div style="font-size: 20px;">
                    <i class="fas fa-user mr-2"></i>
                    <i class="fas fa-sort-down"></i>
                </div>
                <ul class="dropdown-menu" style="background-color:  rgb(226, 226, 226);">
                    <li class="text-center"> <i class="fa fa-user-circle mr-1" aria-hidden="true"
                                                style="color: black;"></i><a
                            style="color: black; font-size: 16px;">
                            Thông tin cá nhân</a></li>
                    <li class="text-center">
                        <i class="fa fa-sign-in mr-1" style="color: black;" aria-hidden="true"></i>
                        <a  href="{{route('logout')}}" style="color: black; font-size: 16px;">
                            Logout</a></li>

                </ul>

            </div>






        </div>
    </div>
    <div class="row" style="height: 93%;">
        <div class="col-2 border w-100 px-0" style="background-color: rgb(226, 226, 226);">
            <div class="btn-group-vertical w-100">
                <button type="button"
                        class="btn btn-outline-light d-flex align-items-center justify-content-start">
                    <i class="fas fa-users-cog text-dark mr-2" style="width: 20px;"></i>
                    <span class="text-dark">Thành viên</span>
                </button>
                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-start"
                        data-toggle="collapse" data-target="#demo">

                    <i class="fas fa-address-card text-dark mr-2" style="width: 20px;"></i>
                    <span class="text-dark">Bài Đăng</span>
                    <i class="fas fa-chevron-left text-dark pl-2 ml-5" style="font-size: 13px;"></i>
                </button>
                <div id="demo" class="collapse w-100">
                    <button type="button"
                            class="w-100 btn btn-outline-light d-flex align-items-center justify-content-start">
                        <i class="text-dark mr-2" style="width: 20px;"></i>
                        <span class="text-dark">Chờ Phê duyệt</span>
                    </button>
                    <button type="button"
                            class="w-100 btn btn-outline-light d-flex align-items-center justify-content-start">
                        <i class="text-dark mr-2" style="width: 20px;"></i>
                        <span class="text-dark">Đã Phê duyệt</span>
                    </button>
                </div>
                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-start">
                    <i class="far fa-question-circle text-dark mr-2" style="width: 20px;"></i>
                    <span class="text-dark">Trợ giúp</span>
                </button>
                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-start">
                    <i class="fas fa-chart-pie text-dark mr-2" style="width: 20px;"></i>
                    <span class="text-dark">Thống kê</span>
                    <i class="fas fa-chevron-left text-dark pl-2 ml-5" style="font-size: 13px;"></i>
                </button>
                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-start">
                    <i class="fas fa-cog text-dark mr-2" style="width: 20px;"></i>
                    <span class="text-dark">Thiết lập</span>
                </button>
                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-start" >
                    <i class="fas fa-anchor text-dark mr-2" style="width: 20px;"></i>
                    <span class="text-dark">Cấp quyền</span>
                </button>
            </div>
        </div>
        <div class="col-10">
            <div class="p-4">
                @yield('admin')
            </div>
        </div>
    </div>
</div>

<!-- ****************** Start Footer *********************** -->

<!-- ****************** End Footer *********************** -->



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>




