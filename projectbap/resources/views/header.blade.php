<div class="container-fluid bg-warning d-flex justify-content-center" style="position: fixed; top: 0px;z-index: 200;">
    <div class="row px-3" style="height:45px;width: 1000px; max-width: 1000px;">
        <div class="col-3 d-flex align-items-center">
            <!-- <img (click)=backToListPost() src="https://static.chotot.com/storage/marketplace/nha_white_logo.png"
                style="height: 30px;"> -->
            <img class="" src="/assets/img/logoCodegym.png" style="height: 40px;">
        </div>
        <div class="col-9 d-flex justify-content-end">
            <div class="h-100 d-flex align-items-center mr-3">
                <i class="fas fa-search mr-1" style="font-size: 20px;"></i><span style="font-size: 16px;">Tìm rao
                    vặt</span>
            </div>
            <div class="h-100 d-flex align-items-center mr-3">
                <i class="far fa-bell mr-1" style="font-size: 20px;"></i><span style="font-size: 16px;">Thông
                    báo</span>
            </div>
            <div class="h-100 d-flex align-items-center mr-3">
                <i class="far fa-comments mr-1" style="font-size: 20px;"></i><span style="font-size: 16px;">Chat</span>
            </div>
            <div class="h-100 d-flex align-items-center mr-3">
                <i class="fas fa-user-circle mr-1" style="font-size: 20px;"></i><span style="font-size: 16px;">Tôi
                    bán</span>
            </div>
            <div class="h-100 d-flex align-items-center mr-3">
                <i class="fas fa-ellipsis-h mr-1" style="font-size: 25px;"></i>
                <!-- <span style="font-size: 16px;"> -->
                <!-- Thêm</span> -->

                <div class="dropdown">
                    <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                            style="background-color: #fc9807;">Thêm
                        <span class="caret" style="font-size: 16px; color: white; "></span></button>
                    @if(Auth::check())
                        <ul class="dropdown-menu " style="background-color: #fc9807;">
                            <li class="text-center"> <i class="fa fa-user-circle mr-1" aria-hidden="true"
                                                        style="color: white;"></i><a  style="color: white; font-size: 16px;">
                                </a></li>
                            <li class="text-center"><i class="fa fa-cogs" aria-hidden="true" style="color: white;"></i> <a style="color: white; font-size: 16px;">
                                    Cài đặt</a></li>
                            <li class="text-center"><i class="fa fa-sign-in mr-1" style="color: white;"
                                                       aria-hidden="true"></i><a   href="{{route('logout')}}" id="logout-button" style="color: white; font-size: 16px;" >Logout</a></li>
                        </ul>

                    @else
                        <ul class="dropdown-menu " style="background-color: #fc9807;">
                            <li class="text-center"> <i class="fa fa-user-circle mr-1" aria-hidden="true"
                                                        style="color: white;"></i>
                                <a href="{{route('login')}}" style="color: white; font-size: 16px;">
                                    Đăng nhập</a></li>
                            <li class="text-center"> <i class="fa fa-sign-in mr-1" style="color: white;"
                                                        aria-hidden="true"></i><a  href="{{route('signin')}}"  style="color: white; font-size: 16px;">
                                    Dăng ký</a></li>
                            <li class="text-center"><a  style="color: white; font-size: 16px;">Trợ giúp</a></li>
                        </ul>

                    @endif
                </div>
            </div>
            <div class="h-100 d-flex align-items-center">
                <button class="btn btn-sm font-weight-bold" style="background-color: #fc9807;"><span
                        style="color: white; font-size: 12px;">ĐĂNG
                        TIN</span></button>
            </div>
        </div>
    </div>
</div>
