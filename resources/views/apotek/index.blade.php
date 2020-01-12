@extends('layout.master')
@section('content')
<div class="main">
    <div class="main-content"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Apotek</h3>
                                    <div class="right">
                                    
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong">
                                            <i class="lnr lnr-plus-circle"></i>
                                    </button>
                                        </div>
                                </div>
                                @if(session('sukses'))
                                <div class="alert alert-success" role="alert">
                                    {{session('sukses')}}
                                  </div>
                                  @endif
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Nama Apotek </th>
                                                <th>Alamat Apotek </th>
                                                <th>Latitude Apotek </th>
                                                <th>Longitude Apotek </th>
                                                <th>Link Apotek </th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                                @foreach($data_apotek as $apotek)
                                                <tr>
                                                    <td><a href="{{url('/apotek/profile',$apotek->id)}}">{{$apotek->nama_apotek}}</a></td>
                                                    <td>{{$apotek->alamat_apotek}}</td>
                                                    <td>{{$apotek->latitude_apotek}}</td>
                                                    <td>{{$apotek->longitude_apotek}}</td>
                                                    <td>{{$apotek->link_apotek}}</td>
                                                    <td>
                                                        <a href="{{url('/apotek/edit',$apotek->id)}}"  class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="{{url('/apotek/delete',$apotek->id)}}"  class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are You Sure Want to Delete This Data ?')">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
										</tbody>
									</table>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{url ('/apotek/create')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Apotek</label>
                    <input name="nama_apotek" type="text" class="form-control" id="kode_obat"  placeholder="Enter Nama Apotek">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" id="kode_obat"  placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">alamat Apotek</label>
                    <input name="alamat_apotek" type="text" class="form-control" id="nama_obat"  placeholder="Enter Detail Apotek">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Latitude Apotek</label>
                    <input name="latitude_apotek" type="text" class="form-control" id="jenis_obat"  placeholder="Enter Latitude Apotek">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Longitude Apotek</label>
                    <input name="longitude_apotek" type="text" class="form-control" id="satuan"  placeholder="Enter Longitude Apotek">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Link Apotek</label>
                    <input name="link_apotek" type="text" class="form-control" id="stock" placeholder="Enter Link Apotek">
                    </div>
                      
                                                     
                  </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
   
@stop


