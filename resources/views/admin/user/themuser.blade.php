@extends('admin.layout.dashadmin');
@section('title','Quản Lý Người Dùng');
@section('main')
		 <div class="design_cauhoi">
				
					<a href="themuser"><button data-toggle="modal"  class="btn btnthem" >Thêm</button></a>
			</div>



            <div class="panel panel-default khungbang">
                    <div class="panel-heading"><h6 class="panel-title"><i class="fas fa-chalkboard-teacher"></i><b class="tbl">NHẬP THÔNG TIN NGƯỜI DÙNG</b></h6></div>
                    @if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								<span class="glyphicon glyphicon-remove icon-remove"></span> {{$err}} <br>
							@endforeach
						</div>
                    @endif

					@if(session('thongbao'))
						<div class="alert alert-success">
							<span class="glyphicon glyphicon-ok icon-oke" ></span> {{session('thongbao')}}
						</div>
					@endif
                    <!-- <div class="datatable"> -->
                    	<form action="{{route('postuser')}}" method="POST" enctype="multipart/form-data">
        			<input type="hidden" name="_token" value="{{csrf_token()}}">
					<table class="table">
						
						<tr class="tbl">
							<td class="style_row"><i class="fa fa-edit"></i> &nbsp; &nbsp;Tên Người Dùng</td>
							<td><input type="text" required="" class="from-control nhaploai" placeholder="  Nhập tên người dùng" name="tenuser" />
							
							</td>
						</tr>
						<tr class="tbl">
							<td class="style_row"><i class="fa fa-edit"></i> &nbsp; &nbsp;Hình ảnh</td>
							<td><input type="file" class="from-control "  name="hinhanh" />
							
							</td>
						</tr>

						<tr class="tbl">
							<td class="style_row"><i class="fa fa-edit"></i> &nbsp; &nbsp;Địa chỉ</td>
							<td><input type="text" class="from-control nhaploai" placeholder="  Nhập địa chỉ" name="diachi" />
							
							</td>
						</tr>

						<tr class="tbl">
							<td class="style_row"><i class="fa fa-edit"></i> &nbsp; &nbsp;Số điện thoại</td>
							<td><input type="text" class="from-control nhaploai" placeholder="  Nhập số điện thoại" name="sdt" />
							
							</td>
						</tr>

						<tr class="tbl">
							<td class="style_row"><i class="fa fa-edit"></i> &nbsp; &nbsp;Email</td>
							<td><input type="email" required="" class="from-control nhaploai" placeholder="  Nhập email" name="email" />
							
							</td>
						</tr>

						<tr class="tbl">
							<td class="style_row"><i class="fa fa-edit"></i> &nbsp; &nbsp;Mật Khẩu</td>
							<td><input type="password" required="" class="from-control nhaploai" placeholder="  Nhập password" name="password"/>
							
							</td>
						</tr>

						<tr class="tbl">
							<td class="style_row"><i class="fa fa-edit"></i> &nbsp; &nbsp;Quyền</td>
							<td>
								<select name="quyen" id="tenloaich" class="form-control nhaploai">
							
	                                <option value="0"> Học sinh</option>
	                                <option value="1"> Giáo viên</option>
	                                <option value="2"> Admin</option>
                       			 </select>
							</td>
						</tr>
						
					
						<tr>
							<td class="style_row tbl-row" colspan="2" >
								<button  class="btn btnsuach" type="submit">Thêm</button>
								<button type="reset" class="btn  btnxoach" >Thoát</button>
								
							</td>
						</tr>
					</table>
				</form>

        		
             </div>
@stop