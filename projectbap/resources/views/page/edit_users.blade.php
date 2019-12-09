<!-- *********** Start Menu Bar ************ -->
@extends('master')
@section('index')
<!-- *********** End Menu Bar ************ -->

<!--editues-->
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col">
            <h2>Sửa thông tin cá nhân</h2>
            <div class="card mb-3" style="max-width: 1200px;">
                <div class="row no-gutters">
                    <div class="col-md-5 ">
                        <div class="card text-center">
                            <div class="card-body">
                                <label>
                                    <img class="rounded-circle" [src]="urlImage"  style="height: 200px; width: 200px;" >
                                    <input style="display: none;" type="file" >
                                </label>
                            </div>
                            <button class="btn btn-primary mx-auto" style="max-width: 70%;">Chọn ảnh đại diện</button>
                        </div>

                    </div>
                    <div class="card bg-light col-md-7 " >
                        <div class="card-body m-0">
                            <form #edit="ngForm" >

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Họ Tên</label>
                                    <div class="col-sm-9">

                                        <input type="text" class="form-control"name="fullName"
                                               value="" required>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Địa Chỉ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"   name="address"
                                               value=""  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Số Điện Thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phoneNumber"
                                               value="" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" style="float: right;">Lưu Lại</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ****************** Start Footer *********************** -->

<!-- ****************** End Footer *********************** -->

@endsection
