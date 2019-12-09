@extends('master')
@section('index')
<div class="container-fluid d-flex justify-content-center" style="background-color:#f7f7f7;">
    <div class="container mt-5 mb-2">

        <h2>Đăng tin</h2>

        <hr>
        <!-- Thông tin liên hệ -->
        <div class="card">
            <div class="card-header">
                <h5>Thông tin liên hệ</h5>
            </div>
            <div class="card-body">
                <div class="container" id="infoContact">
                    <div class="form-group row">
                        <label class="col col-sm-2">Họ và tên: </label>
                        <div class="col">
{{--                            <span>{{userDetails.fullName}}</span>--}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-sm-2">Email: </label>
                        <div class="col">
{{--                            <span>{{userDetails.email}}</span>--}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-sm-2">Địa chỉ: </label>
                        <div class="col">
{{--                            <span>{{userDetails.address}}</span>--}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-sm-2">Số điện thoại: </label>
                        <div class="col">
{{--                            <span> {{userDetails.phoneNumber}}</span>--}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Thông tin liên hệ -->
        <hr>
        <!-- Nội dung đăng tin-->
        <div class="content-post">
            <h5>Nội dung đăng tin <small style="color: #FFBF00;"> (Vui lòng điền đầy đủ tất cả các mục)</small> </h5>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col bg-white">
                        <div class="card border-0 col-10 float-right">
                            <div class="card-body">
                                <form >
                                    <div class="form-group row">
                                        <label class="col col-sm-2 col-form-label">Địa chỉ: <span
                                                style="color: red">(*)</span> </label>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" placeholder="" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col col-sm-2 col-form-label">Diện tích: <span
                                                style="color: red">(*)</span> </label>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" placeholder="" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col col-sm-2 col-form-label">Tựa đề: <span
                                                style="color: red">(*)</span> </label>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" placeholder="" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col col-sm-2 col-form-label">Nội dung: <span
                                                style="color: red">(*)</span> </label>
                                        <div class="col">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col col-sm-2 col-form-label">Giá: <span
                                                style="color: red">(*)</span></label>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" placeholder="" >
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" formControlName="ableComposition">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Giá có thể thỏa thuận
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button  type="submit" class=" btn btn-sm btn-primary float-right col-3"><i
                                                    class="fas fa-check"> Đăng
                                                    tin</i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Nội dung đăng tin-->


    </div>
</div>
@endsection
