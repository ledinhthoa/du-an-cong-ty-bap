@extends('page.admin_home')
@section('admin')
<div class="container">
    <div class="row">
        <i class="fas fa-users-cog text-dark mr-2" style="font-size: 30px;"></i>
        <h3>bai dang</h3>
    </div>

    <div class="row d-flex justify-content-between align-items-center my-2">
        <h6>Tổng cộng: <span class="text-danger font-weight-bold" style="font-size: 20px;"></span> thành
            viên</h6>

        <div class="d-flex">
            <input type="text" class="form-control form-control-sm mr-3" style="width: 300px;"
                  placeholder="Nhập tên hoặc email">
            <button class="btn btn-sm btn-success" >Tìm kiếm</button>
        </div>
    </div>

    <div *ngIf="resultFindUser===null" class="row">
        <h4>Danh sách các bai dang</h4>
    </div>

    <div class="row d-flex align-items-center">
        <button class="btn btn-sm btn-warning my-2 mr-3" >Trang List</button>
        <h4 class="py-0 my-0">Kết quả tìm kiếm: </h4>
    </div>

    <div class=" row">
        <table class="table table-striped table-sm mt-3">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>dien tich</th>
                <th>Địa chỉ</th>
                <th>noi dung</th>
                <th>gia</th>
                <th>xem</th>
            </tr>
            </thead>
            <tbody>

            @foreach($post as $key=>$posts )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$posts->title}}</td>
                    <td>{{$posts->area}}m</td>
                    <td>{{$posts->address}}</td>
                    <td>{{$posts->contentpost}}</td>
                    <td>{{$posts->price}}</td>
                    <td><a href="{{ route('page.edit', $posts->id) }}">edit</a></td>
                    <td><a href="{{ route('page.destroy', $posts->id) }}"
                           class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">delete</a></td>
                </tr>

            @endforeach


{{--            <tr *ngFor="let user of users">--}}
{{--                <td>{{user.email}}</td>--}}
{{--                <td>{{user.fullName}}</td>--}}
{{--                <td>{{user.address}}</td>--}}
{{--                <td>--}}
{{--                    <a routerLink="/admin/user-detail/{{user.id}}">Chi tiết</a>--}}
{{--                </td>--}}
{{--            </tr>--}}
            </tbody>
        </table>
    </div>
    <div class="row">{{$post->links()}}</div>
</div>
@endsection
