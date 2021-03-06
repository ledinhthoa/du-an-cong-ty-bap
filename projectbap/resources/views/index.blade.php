@extends('master')
@section('index')

    <div class="container-fluid mt-5 d-flex justify-content-center" style="background-color:#f4f4f4;">
        <div class="row bg-white px-4" style="width: 1000px; max-width: 1000px;">
            <div class="card w-100 my-4">
                <div class="card-body d-flex justify-content-between px-4 py-2">
                    <a class="m-0 py-0 font-weight-bold" style="font-size: 12px;">MUA BÁN</a>
                    <p class="m-0 py-0 text-muted" style="font-size: 12px;">CHO THUÊ</p>
                    <p class="m-0 py-0 text-muted" style="font-size: 12px;">DỰ ÁN</p>
                    <p class="m-0 py-0 text-muted" style="font-size: 12px;">CHUYÊN TRANG BDS</p>
                    <p class="m-0 py-0 text-muted" style="font-size: 12px;">KINH NGHIỆM MUA BÁN</p>
                </div>
                <div class="card-footer">
                    <form >
                        <div class="d-flex justify-content-between">
                            <div style="width: 40%;">
                                <input type="text" placeholder="Nhập Tiêu đề hoặc nội dung cần tìm kiếm" class="form-control">
                            </div>
                            <div style="width: 28%;">
                                <select class="form-control">
                                    <option value="">--Toàn Quốc--</option>
                                    <option  value="">
                                    </option>
                                </select>
                            </div>

                            <div style="width: 28%;">
                                <select class=" form-control ">
                                    <option value="">--Danh Mục--</option>
                                    <option value="">
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-3 d-flex justify-content-between">
                            <select class="form-control" style="background-color:#f4f4f4; width: 20%;">
                                <option value="">Chọn khoảng giá</option>
                            </select>
                            <select class="form-control" style="background-color:#f4f4f4; width: 20%;">
                                <option value="">Diện tích tổng</option>
                            </select>
                            <!-- *********** Bắt Đầu Tìm Kiếm Nâng Cao ********* -->
                            <button class="btn btn-outline-secondary btn-sm d-flex justify-content-around" style="width: 20%;"><span class="text-dark" style="font-size: 15px;">Lọc
                                nâng cao</span><i class="fas fa-filter mt-1" style="font-size: 20px;"></i></button>
                            <!-- ********** Kết Thúc Tìm Kiếm Nâng Cao ********** -->

                            <!-- Button Submit  formSearchPostBasic -->
                            <div class="d-flex justify-content-end" style="width: 35%;">
                                <button type="submit" class="btn btn-warning btn-sm w-50"><i class="fas fa-search">
                                    </i>
                                    Tìm Kiếm</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- ************ End Search Box ************ -->



    <!-- ************ Start Body (List bài đăng and sidebar) ************ -->
    <div class="container-fluid d-flex justify-content-center" style="background-color:#f4f4f4;">
        <div class="row bg-white px-2 pb-5" style="width: 1000px; max-width: 1000px;">
            <div class="col-8">
                <div class="row mb-2">

                    <div class="px-3" >
                        <h3 class="my-0 py-0">Danh sách bài đăng:</h3>
                    </div>
                </div>


                <table class="table border mb-2">
                    <tr>
                        <td class="py-2">Tất Cả</td>
                        <td class="py-2">Cá Nhân</td>
                        <td class="py-2">Môi Giới</td>
                        <td class="py-2">Tin mới trước</td>
                        <th class="py-2 d-flex justify-content-end border" style="height: 40px;">
                            <i class="fas fa-th-list mr-3" style="font-size: 20px;"></i>
                            <i class="fas fa-th-large text-muted" style="font-size: 20px;"></i>
                        </th>
                    </tr>
                </table>

                <!-- Start List Bài đăng -->

                <div class="row px-3">
                    @foreach($post as $new)
                    <div  class="card mb-2" style="width: 100%">

                        <div class="row no-gutters">
                            <div class="col-md-4">
                    <a  href="{{ route('detailpost', $new->id) }}"><img src="assets/imageFolderOfProject/{{$new->image}}/image1.png" class="card-img" alt="..." height="130px" ></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body h-100 d-flex flex-column justify-content-between py-2">
                                    <p class="card-title my-0">{{$new->title}}</p>
                                    <p class="font-weight-bold text-danger"> {{$new->area}}tr</p>
                                    <div class="d-flex text-muted">
                                        <small>
                                            <i class="fas fa-medal mr-1"
                                               style="font-size: 17px;"></i>
                                            <i class="fas fa-user-tie ml-2 mr-1" style="font-size: 20px;"></i>

                                            <i class="fas fa-map-marker-alt ml-2 mr-1"
                                               style="font-size: 20px;"></i>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="row">{{$post->links()}}</div>
                <!-- End List Bài đăng -->
            </div>


            <!-- Start Sidebar (Top 5 bài xem nhiều nhất - Hướng ưu thích) -->
            <div class="col-4 py-3">
                <div class="card mt-4">
                    <div class="card-header" id="cardTop5">
                        <i class="fas fa-th-list"></i> Top 5 bài xem nhiều nhất
                    </div>
                    <div class="card-body">
                        <div>
                            <h6 class="m-0">Cần Bán Nhà Gấp</h6>
                            <div>
                                <small class="text-muted">tại Hà Nội | Ngày đăng: 2017-02-27 > </small>
                            </div>
                        </div>

                        <div class="mt-2">
                            <h6 class="m-0">Cần Bán Nhà Gấp</h6>
                            <div>
                                <small class="text-muted">tại Hà Nội | Ngày đăng: 2017-02-27 > </small>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="m-0">Cần Bán Nhà Gấp</h6>
                            <div>
                                <small class="text-muted">tại Hà Nội | Ngày đăng: 2017-02-27 > </small>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="m-0">Cần Bán Nhà Gấp</h6>
                            <div>
                                <small class="text-muted">tại Hà Nội | Ngày đăng: 2017-02-27 > </small>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="m-0">Cần Bán Nhà Gấp</h6>
                            <div>
                                <small class="text-muted">tại Hà Nội | Ngày đăng: 2017-02-27 > </small>
                            </div>
                        </div>
                    </div>

                </div>
                <!--End Top 5 Xem nhiều nhất -->

                <!-- Start Hướng ưa thích -->
                <div class="card mt-4 mb-5">
                    <div class="card-header" id="cardDirectionFavourite">
                        <i class="fas fa-road"></i> Hướng ưa thích
                    </div>

                    <div class="card-body">
                        <p class="m-0"> Đông <span style="color: red;">80</span> lượt xem</p>
                        <p class="m-0"> Đông Nam <span style="color: red;">80</span> lượt xem</p>
                        <p class="m-0"> Tây Nam <span style="color: red;">80</span> lượt xem</p>
                        <p class="m-0"> Tây <span style="color: red;">80</span> lượt xem</p>
                        <p class="m-0"> Nam <span style="color: red;">80</span> lượt xem</p>
                        <p class="m-0"> Bắc <span style="color: red;">80</span> lượt xem</p>
                        <p class="m-0"> Tây Bắc <span style="color: red;">80</span> lượt xem</p>
                        <p class="m-0"> Đông Bắc <span style="color: red;">80</span> lượt xem</p>
                    </div>

                </div>
                <!-- End Hướng ưa thích -->
            </div>
            <!-- Start Sidebar (Top 5 bài xem nhiều nhất - Hướng ưu thích) -->
        </div>
    </div>
@endsection


