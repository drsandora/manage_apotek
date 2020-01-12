@extends('layout.master')
@section('content')
<div class="main">
    <div class="main-content"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Obat</h3>
                                    <div class="right">
                                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#importobat">
                                            IMPORT EXCEL
                                          </a>
                                          <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                            TAMBAH DATA
                                          </a>
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
                                                <th>Kode</th>
                                                <th>Nama </th>
                                                <th>Satuan </th>
                                                <th>Jumlah </th>
                                                <th>Harga </th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($data_obat as $obat)
                                               <tr>
                                               <td>{{$obat->kode}}</td>
                                                   <td>{{$obat->nama}}</td>
                                                   <td>{{$obat->satuan}}</td>
                                                   <td>{{$obat->jumlah}}</td>
                                                   <td>{{$obat->harga}}</td>
                                                   <td>{{$obat->user_id}}</td>
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

       <!-- Modal IMPORT -->
       <div class="modal fade" id="importobat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {!! Form::open(['route' => 'obat.import', 'class' => 'form-horizontal','enctype' => 'multipart/form-data'])!!}
              {!! Form::file('data_obat')!!}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
              <input type="submit" class="btn btn-primary" value="import">
            </form>
            </div>
          </div>
        </div>
      </div>
    

<!-- MODAL TAMBAH -->
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
                <form action="{{url ('/obat/create')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Obat</label>
                    <input name="nama" type="text" class="form-control" id="kode_obat"  placeholder="Enter Nama Obat">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Kode Obat</label>
                    <input name="kode" type="text" class="form-control" id="kode_obat"  placeholder="Kode Obat">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Satuan Obat</label>
                    <input name="satuan" type="text" class="form-control" id="nama_obat"  placeholder="Satuan Obat">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input name="jumlah" type="text" class="form-control" id="jenis_obat"  placeholder="Jumlah">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="harga" type="text" class="form-control" id="satuan"  placeholder="Harga">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input name="user_id" type="hidden" class="form-control" id="satuan"  value="{{auth()->user()->id}}">
                    </div>
                    
                      
                                                     
                  </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
   
 



 @stop


