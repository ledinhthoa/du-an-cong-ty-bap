@extends('master')
@section('index')
    <div class="d-flex justify-content-center mt-5 " id="login">
        <div id="login-small" style="width: 40%">
            <div class="card bg-light mb-5 p-4" style="max-width: 100%">
                <img style="height: 25%;width: 60%;margin-left: 20%;" src="assets/imageFolderOfProject/imageFolderOfPost2/logoCodeGymAdmin.png" class="card-img"
                     alt="..." >
                <div class="card-body">
                    <form  action="{{route('login')}}"  method="post" style="margin-left: 10%;">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group row">
                            @if(Session::has('flag'))
                                <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                            @endif
                            <div class="col-sm-11 " >
                                <input type="email" class="form-control" name="email"
                                      placeholder="email" required>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-11">
                                <input type="password" class="form-control"
                                      placeholder="password" name="password" required>
                            </div>
                        </div>
                        <p class="container text-center" style="color: red;"></p>
                        <button class="btn btn-primary "  style="margin-left: 20%;width: 50%;" type="submit">Đăng Nhập</button>

                    </form>
                </div>
            </div>

        </div>

    </div>


    <!--editues-->




    <!-- ****************** Start Footer *********************** -->

@endsection
