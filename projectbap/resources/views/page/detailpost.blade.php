@extends('master')
@section('index')

    <div class="container">
        <div class="row">
            <div class="col mt-5">
{{--                <h1>[{{postdetail?.post_of_types?.postOfTypeName}}] {{postdetail?.title}}</h1>--}}
                <div class="card mb-3" style="max-width: 1200px;">
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner" >
                                    <div class="carousel-item active">
                                        <img src="https://d34zoy7mey8f6f.cloudfront.net/bds/12e650e0-d6bd-4f88-8547-b07a60b6b3fa.jpg"
                                             style="height: 320px;"
                                             class="d-block w-100" alt="...">

                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://d34zoy7mey8f6f.cloudfront.net/bds/ca47bb5e-3d3b-4efe-a7c0-e6cdd3a0e3c4.jpg"style="height: 320px;" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://d34zoy7mey8f6f.cloudfront.net/bds/12e650e0-d6bd-4f88-8547-b07a60b6b3fa.jpg"style="height: 320px;" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5  ">
                            <table class="table table-striped table-sm">
                                <tbody>
                                <tr>
                                    <td>Ngày đăng: </td>
{{--                                    <td>{{$post->created_at}}</td>--}}
                                </tr>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    <td>{{$post->address}}</td>
                                </tr>
                                <tr>
                                    <td>Diện tích:</td>
                                    <td>{{$post->area}}/m2</td>
                                </tr>
                                <tr>
                                    <td>Giá:</td>
                                    <td>{{$post->price}} vnd</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            thông tin liên hệ
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm mt-3">
{{--                                <thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>Họ và tên: </td>--}}
{{--                                    <td>{{$users->name}}</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Email:</td>--}}
{{--                                    <td>{{$users->email}}</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>số điện thoại:</td>--}}
{{--                                    <td>{{$users->phoneNumber}}</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Địa chỉ:</td>--}}
{{--                                    <td>{{$users->address}}</td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Nội Dung Bài Đăng
                        </div>
                        <div class="card-body">
                            <p class="text-monospace">{{$post->contentpost}}</p>
                        </div>
                    </div>
                    <div  class="card text-right">
                        <div class="card-body">

                            <form action="comment" method="post">
                                <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                </div>
                                <button class="btn btn-primary">Bình luận</button>
                            </form>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-header">
                            Nội dung bình luận
                        </div>

                        <div class="card mb-3" >
                            <div class="row no-gutters">

                                <div class="col-md-1">
                                    <img src="https://www.dammio.com/wp-content/uploads/2016/10/image_circle_bootstrap.png" class="img-circle" alt="Hot girl" width="80" >
                                </div>
                                <div class="col-md-11">
                                    <tr >
                                        <div class="card-body">
{{--                                            <p class="card-title">ngày đăng:{{commentpost.created_at}}</p>--}}


{{--                                            <p class="card-text">{{commentpost.commentContent}}</p>--}}

                                        </div>
                                    </tr>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
