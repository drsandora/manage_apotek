@extends('layout.master')
@section('content')

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="{{$apotek->getAvatar()}}" width="100px" height="100px" alt="image">
                                <h3 class="name">{{$apotek->nama_apotek}}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        45 <span>Projects</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        15 <span>Awards</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        2174 <span>Points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Data User</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Alamat <span>{{$apotek->alamat_apotek}}/span></li>
                                    <li>latitude <span>{{$apotek->latitude_apotek}}</span></li>
                                    <li>Longitude <span>{{$apotek->longitude_apotek}}</span></li>
                                    <li>Link <span>{{$apotek->link_apotek}}</span></li>
                                    
                                </ul>
                            </div>
                            <div class="text-center"><a href="{{url('/apotek/edit',$apotek->id)}}" class="btn btn-primary">Edit Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <h4 class="heading">{{$apotek->nama_apotek}}</h4>
                        <!-- AWARDS -->
                        
                        <!-- END AWARDS -->
                        <!-- TABBED CONTENT -->
                        <div class="custom-tabs-line tabs-line-bottom left-aligned">
                            <ul class="nav" role="tablist">
                                <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Daftar Obat</a></li>
                                </ul>
                        </div>
                        <div class="tab-content">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama </th>
                                        <th>Satuan </th>
                                        <th>Jumlah </th>
                                        <th>Harga </th>
                                        <th>User ID</th>
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
                            <div class="tab-pane fade" id="tab-bottom-left2">
                                
                            </div>
                        </div>
                        <!-- END TABBED CONTENT -->
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

@stop