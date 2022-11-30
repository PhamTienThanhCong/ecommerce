@extends('admin.layout')

@section('title')
Danh Sách Sản Phẩm
@endsection

@section('content')
<div class="outer-w3-agile col-xl mt-3">
    <h4 class="tittle-w3-agileits mb-4" style="font-family: 'Times New Roman', Times, serif;">Danh sách mã giảm giá<?php if(isset($brand_name)){ echo 'thuộc thương hiệu '.$brand_name; }     ?> <?php if(isset($category_name)){ echo 'thuộc danh mục '.$category_name; }     ?></h4>
    <style>
        .alert {
        padding: 15px;
        background-color: #4CAF50;
        color: white;
        }

        .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }

        .closebtn:hover {
        color: black;
        }
        th,td{
            text-align:center;
        }
        span.fa.fa-unlock-alt {
            font-size: 20px;
            color: green;
        }
        span.fa.fa-lock {
            font-size: 20px;
            color: red;
        }
    </style>
    <form action="{{route('get-search-voucher')}}" method="get" style="float:left;">
        <lable for="search" class="text-secondary"><b>Tìm kiếm:</b></lable>
        <input type="text" name="search" id="search" class="text-secondary"/>
        <input type="submit" value="Tìm" class="btn btn-outline-secondary">
    </form>
    <form action="{{route('post-list-voucher')}}" method="post" style="float:right;">
    {{csrf_field()}}
        <lable for="view">Hiển Thị:</lable>
        <select id="view" name="view" onchange="change_click(event)">
            <?php $view = Session::get('view'); ?>
            <option value="5" <?php if($view && $view == 5){?> selected <?php } ?>>5 hiển thị 1 trang</option>
            
            <option value="10" <?php if($view && $view == 10){?> selected <?php } ?>>10 hiển thị 1 trang</option>
            
            <option value="20" <?php if($view && $view == 20){?> selected <?php } ?>>20 hiển thị 1 trang</option>
            
            <option value="50" <?php if($view && $view == 50){?> selected <?php } ?>>50 hiển thị 1 trang</option>
            
            <option value="100" <?php if($view && $view == 100){?> selected <?php } ?>>100 hiển thị 1 trang</option>
        </select>
        <input type="submit" id="submit_form" style="display:none;">
    </form>
    <script type='text/javascript'>//hàm click khi thay doi gia tri
    function change_click(event) 
    {
      var submit_form = document.getElementById('submit_form');
      submit_form.click();
    }
    </script>
    <form action="{{route('process-all-voucher')}}" method="post">
    {{csrf_field()}}
    <table class="table table-hover">
        <thead style="background-color:lightgrey;">
            <th><input type="checkbox" id="checkAll" onClick="toggle(this)"></th>
            <th>Mã Giảm Giá</th>
        
            <th>Giá Trị(%)</th>

            <th>Số Lượng</th>

            <th>Ngày Bắt Đầu</th>
            
            <th>Ngày Kết Thúc</th>
            
            <th>Trạng Thái</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($list_voucher as $voucher)
            <tr>
                <td><input type="checkbox" name="voucherID[]" value="{{$voucher->id}}"></td>
                <td>{{$voucher->code}}</td>
                <td>{{$voucher->value}}</td>
                <td>{{$voucher->quantity}}</td>
                <td>
                {{$voucher->date_start}}
                </td>
                <td>
                {{$voucher->date_end}}
                </td>
                <td>
                    <?php
                    if($voucher->status ==0) { ?>
                        <a href="{{route('active-voucher',$voucher->id)}}"><span class="fa fa-lock"></span></a>
                    <?php }else{ ?>
                        <a href="{{route('unactive-voucher',$voucher->id)}}"><span class="fa fa-unlock-alt"></span></a>
                    <?php } ?>                
                </td>
                <td>
                    <a href="{{route('get-edit-voucher',$voucher->id)}}" ><label class="fa fa-edit">Sửa</label></a> |
                    <a href="{{route('get-detail-voucher',$voucher->id)}}" ><label class="fa fa-info-circle">Chi Tiết</label></a> |
                    <a href="{{route('get-delete-voucher',$voucher->id)}}" onclick="return confirm('Bạn có chắc muốn xóa mã giảm giá {{$voucher->code}} ??');" ><label class="fa fa-trash">Xóa</label></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <hr>
        <button type="submit" name="action" value="delete" class="btn btn-outline-secondary" onclick="return confirm('Bạn có chắc muốn xóa những mã giảm giá đang chọn ??');">Delete</button>
        <button type="submit" name="action" value="active" class="btn btn-outline-secondary">Active</button>
        <button type="submit" name="action" value="unactive" class="btn btn-outline-secondary">Unactive</button>
        <hr>
        <center style="margin-bottom:20px;"><span><?php try{ ?>{{ $list_voucher->render('paginate') }}<?php } catch(Exception $e) {} ?></span></center>
    </form>
    <?php
        $message = Session::get('message');
        if($message)
        {
            echo '<div class="alert">
            <span id ="close"class="closebtn" onclick="this.parentElement.style.display='."'none'".';">&times;</span>'.$message.'</div>';
            Session::put('message',null);
        }

    ?>
    <script language="JavaScript">  
    function toggle(source) 
    {
        checkboxes = document.getElementsByName('voucherID[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
        }
    }
    </script>

    <script>//Hàm 2 giây đóng
        setTimeout(function() {
            var btn = document.getElementById('close');
            btn.click();
    }, 2000);
    </script>
</div>
@endsection