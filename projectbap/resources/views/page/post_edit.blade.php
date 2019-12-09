@extends('master')
@section('index')
    <div class="d-flex justify-content-center mt-5 " id="login">
        <div id="login-small" style="width: 40%">
            <div class="card bg-light mb-5 p-4" style="max-width: 100%">
                <div class="signin-h2">
                    <h2>chỉnh sủa bài đăng</h2>
                </div>
                <div class="container-fluid">
                    <hr>
                </div>
                <div class="card-body">
                    <form action="{{route('page.update',$poste->id)}}"  method="post" style="width: 100%">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3">(*)</span>
                                <input type="text" class="form-control" placeholder="title" name="title" required value="{{$poste->title}}"></div>
                        </div>
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3 mt-3">(*)</span>
                                <input type="text" class="form-control mt-2" placeholder="area" name="area"required value="{{$poste->area}}">
                            </div>
                        </div>
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3 mt-3">(*)</span>
                                <input type="text" class="form-control mt-2" placeholder="Địa chỉ" name="address" value="{{$poste->address}}">
                            </div>
                        </div>
                        <div id="singin-input">
                            <div class="d-flex">
                                <span class="text-danger mr-3 mt-3">(*)</span>
                                <input type="text" class="form-control mt-2" placeholder="price"name="price"required value="{{$poste->price}}">
                            </div>
                        </div>
                        <div id="singin-button">
                            <button type="submit">lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


