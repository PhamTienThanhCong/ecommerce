@extends('admin.layout')

@section('title')
Thêm Danh Mục Sản Phẩm
@endsection

@section('content')
<div class="outer-w3-agile col-xl mt-3">
    <h4 class="tittle-w3-agileits mb-4" style="font-family: 'Times New Roman', Times, serif;">Thêm danh mục sản phẩm</h4>
    <div class="row">
    <div class="col-9">
    <form action="{{route('post-add-category')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên Danh Mục</label>
            <div class="custom-file">
                
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="" required="">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Hình Ảnh</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="exampleFormControlInput1" onchange="preview_image(event,'output_image')"/>
                <label class="custom-file-label" for="exampleFormControlInput1">Chọn Ảnh</label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Mô Tả</label>
            <textarea class="form-control" name="desc" id="ck" rows="3" required="" style="resize: none;"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng Thái</label>
            <select class="form-control" id="exampleFormControlSelect1" name="status">
                <option value="1">Kích Hoạt</option>
                <option value="0">Không Kích Hoạt</option>
            </select>
        </div>
        <div class="form-group">
                <button type="submit" name="add_category" class="form-control btn btn-primary" >Thêm Danh Mục Sản Phẩm</button>
        </div>
    </form>
    <hr>
    <form action="{{route('import-category')}}"  method="post" enctype="multipart/form-data"><center><h4  style="font-family: 'Times New Roman', Times, serif;">Thêm Nhiều Danh Mục</h4></center>
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleFormControlInput1">File</label>
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="exampleFormControlInput1" />
                <label class="custom-file-label" for="exampleFormControlInput1" >Chọn File</label>
            </div>
        </div>
        <div class="form-group">
                <button type="submit" name="add_category" class="form-control btn btn-primary" >Thêm</button>
        </div>
    </form>
    </div>
    <div class="col-3"><img id="output_image" src="{!! asset('admin-asset/images/2Nlogo.jpg')!!}" class="img-thumbnail" style="width: 250px;float: right;"/></div>
    </div>
    
</div>
<script type='text/javascript'>
    function preview_image(event,$id) 
    {
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById($id);
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection