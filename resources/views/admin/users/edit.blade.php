@extends('admin.layouts.master')
@section('content')



<header class="page-title-bar">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
            </li>
        </ol>
    </nav>
    <h1 class="page-title"> Chỉnh sửa nhân viên<noscript></noscript> </h1>
</header>

<div class="page-section">
    <div class="card">
        <div class="card-body border-top">
            <form method="post" action="{{route('users.update',$user->id)}}">
                @csrf
                @method('PUT')
                <fieldset>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="form-group">
                                <label for="tf1">Tên nhân viên<noscript></noscript></label> <input name="name" type="text" value="{{ $user->name }} " class="form-control" id="" placeholder="nhập tên nhân viên"> <small id="" class="form-text text-muted"></small>
                                @if ($errors->any())
                                <p style="color:red">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="tf1">Ngày sinh <noscript></noscript></label> <input name="day_of_birth" type="date" value="{{ $user->day_of_birth }}" class="form-control" id="" placeholder="nhập ngày sinh "> <small id="" class="form-text text-muted"></small>
                                @if ($errors->any())
                                <p style="color:red">{{ $errors->first('day_of_birth') }}</p>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tf1"> Địa chỉ </label> <input name="address" type="text" value="{{ $user->address }}" class="form-control" id="" placeholder="nhập địa chỉ"> <small id="" class="form-text text-muted"></small>
                        @if ($errors->any())
                        <p style="color:red">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tf1"> Email </label> <input name="email" type="email" value="{{ $user->email }}" class="form-control" id="" placeholder="nhập email"> <small id="" class="form-text text-muted"></small>
                        @if ($errors->any())
                        <p style="color:red">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tf1"> Số điện thoại </label> <input name="phone" type="text" value="{{ $user->phone }}" class="form-control" id="" placeholder="Nhập số điệ thoại"> <small id="" class="form-text text-muted"></small>
                        @if ($errors->any())
                        <p style="color:red">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tf1">Mật khẩu</label> <input name="password" type="password" value="{{ $user->password }}" class="form-control" id="" placeholder="nhập mật khẩu"> <small id="" class="form-text text-muted"></small>
                        @if ($errors->any())
                        <p style="color:red">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tf1">Ngày làm việc</label> <input name="start_day" type="date" value="{{ $user->start_day }}" class="form-control" id="" placeholder="nhập ngày làm việc"> <small id="" class="form-text text-muted"></small>
                        @if ($errors->any())
                        <p style="color:red">{{ $errors->first('start_day') }}</p>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-6">

                            <label for="tf1">Nhóm nhân viên</label>
                            <select class="form-select form-control" name="user_group_id">
                                @foreach($userGroups as $userGroup)
                                <option value="{{ $userGroup->id }}">{{ $userGroup->name }} </option>
                                @endforeach
                            </select>
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('user_group_id') }}</p>
                            @endif

                        </div>
                        <div class="col-lg-6">

                            <label for="tf1">Chi nhánh</label>
                            <select class="form-select form-control" name="branch_id">

                                @foreach($branches as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->name }} </option>
                                @endforeach
                            </select>
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('branch_id') }}</p>
                            @endif

                        </div>
                        <div class="col-12">
                            <label for="tf1">Ghi chú </label> <input name="note" type="text" value="{{ $user->note }}" class="form-control" id="" placeholder="nhập ghi chú"> <small id="" class="form-text text-muted"></small>
                            @if ($errors->any())
                            <p style="color:red">{{ $errors->first('note') }}</p>
                            @endif
                        </div>
                </fieldset>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                    </div>
                    <div class="col-lg-6">
                        <button style="float: right;" class="btn btn-primary" type="submit">Cập nhật<noscript></noscript> </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection