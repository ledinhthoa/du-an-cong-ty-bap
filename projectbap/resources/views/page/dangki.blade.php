@extends('master')
@section('index')
    <div class="d-flex justify-content-center mt-5 " id="login">
        <div id="login-small" style="width: 40%">
            <div class="card bg-light mb-5 p-4" style="max-width: 100%">
                <div class="signin-h2">
                    <h2>Đăng ký thành viên</h2>
                </div>
                <div class="container-fluid">
                    <hr>
                </div>
                <div class="card-body">
                    <form action="{{route('signin')}}"  method="post" style="width: 100%">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}
                                @endforeach
                            </div>
                        @endif
                        @if(Session::has('flag'))
                            <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                        @endif
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3">(*)</span>
                                <input type="text" class="form-control" placeholder="Họ và tên" name="name" required></div>
                        </div>
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3 mt-3">(*)</span>
                                <input type="text" class="form-control mt-2" placeholder="Email" name="email"required>
                            </div>
                        </div>
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3 mt-3">(*)</span>
                                <input type="text" class="form-control mt-2" placeholder="Địa chỉ" name="address" >
                            </div>
                        </div>
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3 mt-3">(*)</span>
                                <input type="text" class="form-control mt-2" placeholder="Số điện thoại"name="phoneNumber"required>
                            </div>
                        </div>
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3 mt-3">(*)</span>
                                <input type="password" class="form-control mt-2" placeholder="Mật khẩu"name="password">
                            </div>
                        </div>
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3 mt-3">(*)</span>
                                <input type="password" class="form-control mt-2" placeholder="Xác nhận mật khẩu"name="re_password"required>
                            </div>
                        </div>
                        <div id="singin-button">
                            <button type="submit">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


