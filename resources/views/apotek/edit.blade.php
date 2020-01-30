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
                            </div>
                            <div class="panel-body">
                                <form action="{{url ('/apotek/update',$apotek->id)}}" method="POST" enctype="multipart/form-data">
                                  {{csrf_field()}}
                                  
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Apotek</label>
                                  <input name="nama_apotek" type="text" class="form-control" id="nama_apotek"  placeholder="Enter Nama Apotek" value="{{$apotek->nama_apotek}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Apotek</label>
                                    <input name="alamat_apotek" type="text" class="form-control" id="alamat_apotek"  placeholder="Enter alamat Apotek" value="{{$apotek->alamat_apotek}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Latitude Apotek</label>
                                    <input name="latitude_apotek" type="text" class="form-control" id="latitude_apotek"  placeholder="Enter Latitude Apotek" value="{{$apotek->latitude_apotek}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Longitude Apotek</label>
                                    <input name="longitude_apotek" type="text" class="form-control" id="longitude_apotek"  placeholder="Enter Longitude Apotek" value="{{$apotek->longitude_apotek}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Link Apotek</label>
                                    <input name="link_apotek" type="text" class="form-control" id="link_apotek" aplaceholder="Enter Link Apotek" value="{{$apotek->link_apotek}}">
                                  </div>
                                   
                                  <div class="input-group">
                                    <div class="custom-file">
                                        <img src="{{asset('images/'. $apotek->avatar)}}" width="100px" height="100px" alt="image">
                                      <input type="file" name="avatar" id="avatar" class="custom-file-input" >
                                      <label class="custom-file-label" >Pilih Gambar</label>
                                    </div>
                                </div>
                                  
                                  <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>



@stop

@section('content1')

          <h1>edit data obat</h1>
          @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
              </div>
              @endif
             <div class="row">
               <div class="col-lg-12">
               
              <form action="{{url ('/apotek/update',$apotek->id)}}" method="POST">
                {{csrf_field()}}
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Apotek</label>
                <input name="nama_apotek" type="text" class="form-control" id="nama_apotek"  placeholder="Enter Nama Apotek" value="{{$apotek->nama_apotek}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Detail Apotek</label>
                  <input name="detail_apotek" type="text" class="form-control" id="detail_apotek"  placeholder="Enter Detail Apotek" value="{{$apotek->detail_apotek}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Longitude Apotek</label>
                  <input name="latitude_apotek" type="text" class="form-control" id="latitude_apotek"  placeholder="Enter Longitude Apotek" value="{{$apotek->latitude_apotek}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Latitude Apotek</label>
                  <input name="longitude_apotek" type="text" class="form-control" id="longitude_apotek"  placeholder="Enter Latitude Apotek" value="{{$apotek->longitude_apotek}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Link Apotek</label>
                  <input name="link_apotek" type="text" class="form-control" id="link_apotek" aplaceholder="Enter Link Apotek" value="{{$apotek->link_apotek}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Link Apotek</label>
                    
                    <input name="link_apotek" type="text" class="form-control" id="link_apotek" aplaceholder="Enter Link Apotek" value="{{$apotek->link_apotek}}">
                  </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
             </div>

@endsection