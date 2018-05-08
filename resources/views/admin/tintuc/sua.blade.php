@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
	    <div class="page-header">
	        <h4><small>{{ Lang::get('sub.edit') }}</small>{{ Lang::get('sub.news') }}</h4>
	    </div>
    </div>
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
		            @if(count($errors) > 0)
		                <div class="alert alert-danger">
		                    @foreach($errors->all() as $err)
		                        {{$err}}<br>
		                    @endforeach()
		                </div>
		            @endif
		            @if(session('thongbao'))
		                <div class="alert alert-success"> 
		                    {{session('thongbao')}}
		                </div>
		            @endif
		            <form action="admin/tintuc/sua/{{$tintuc->idtintuc}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <div class="form-group">
                        <label>{{ Lang::get('sub.title') }}</label>
                        <input class="form-control" name="tieude" value="{{ $tintuc->tieude }}"></input>
                    </div>
                    <div class="form-group">
                        <label>{{ Lang::get('sub.about') }}</label>
                        <textarea name="gioithieu" class="form-control" rows="3">{{$tintuc->gioithieu}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ Lang::get('sub.content') }}</label>
                        <textarea name="noidung" class="form-control ckeditor" rows="10">{{$tintuc->noidung}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ Lang::get('sub.image') }}</label><br>
                        <p><img with="300" height="300" src="upload/images/tintuc/{{$tintuc->urlanh}}"></p>
						<label>
                    		<span class="text-primary btn btn-lg btn-outline-primary"><i class="fa fa-camera"></i>{{ Lang::get('sub.select_image') }}</span>
                    		<p id="filename" class="d-inline"></p>
                    		<input type="file" name="anh" style="display: none;">
                    	</label>
                    	<div style="width: 50vw;" id="imgupload">	
                    	</div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnSubmit">{{ Lang::get('sub.edit') }}<i class="fa fa-paper-plane"></i></button>
                    <button type="reset" class="btn btn-lg float-right btn-secondary">{{ Lang::get('sub.refresh') }}<i class="fa fa-undo"></i></button>
                </form>
		        </div>
    		</div>
		</div>	
	</div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $("input[name=file]").change(function(){
            	$("#filename").html($("input[name=file]").val());
            });
            $("input[name=anh]").change(function(e) {
		    	var file = e.originalEvent.srcElement.files[e.originalEvent.srcElement.files.length-1];
    			var img = document.createElement("img");
    			var reader = new FileReader();
    			reader.onloadend = function() {
         			img.src = reader.result;
    			}
    			reader.readAsDataURL(file);
    			$("#imgupload").html(img);
    			img.width = "200";
			});
        });
    </script>
@endsection