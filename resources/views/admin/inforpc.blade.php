@extends('layout.master')
@section('content')
    <div class="contaioner">
        <span class="menu-title">List of Users</span>
    </div>
    <br>
    <div class="content" >
        <div class="row">
            <div class="col-ms-8 col-md-8">
                <input type="text" class="form-control" placeholder="Filter by name" aria-label="Filter by name" aria-describedby="basic-addon2">
            </div>
            <div class="col-ms-4 col-md-4">
            <button class="btn btn-primary"><span class='bx bx-search'> Search</span></button>
                <a href="/createpc" class="btn btn-primary">
                    <i class='bx bx-plus-medical'></i>
                    CREATE CUSTOMER
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12" class="item-center">
            <div class="table-responsive pt-3">
            <table class="display expandable-table" style="width:100%">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Device Type</th>
                    <th>Model</th>
                    <th>Device Name</th>
                    <th>Serial Name</th>
                    <th>MAC Address</th>
                    <th>IP Address</th>
                    <th>CPU</th>
                    <th>RAM</th>
                    <th>HDD</th>
                    <th>OS</th>
                    <th>Part Upgrade</th>
                    <th>Department</th>
                    <th>Location</th>
                    <th>Building/Brand</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($inforpc as $Pcnew)
                <tr>
                    <td>{{$Pcnew->username}}</td>
                    <td>{{$Pcnew->device_type}}</td>
                    <td>{{$Pcnew->model}}</td>
                    <td>{{$Pcnew->device_name}}</td>
                    <td>{{$Pcnew->serail_number}}</td>
                    <td>{{$Pcnew->mac_address}}</td>
                    <td>{{$Pcnew->ip_addrees}}</td>
                    <td>{{$Pcnew->cpu}}</td>
                    <td>{{$Pcnew->ram}}</td>
                    <td>{{$Pcnew->hdd}}</td>
                    <td>{{$Pcnew->os}}</td>
                    <td>{{$Pcnew->part_upgrade}}</td>
                    <td>{{$Pcnew->office_department}}</td>
                    <td>{{$Pcnew->location}}</td>
                    <td>{{$Pcnew->building_brand}}</td>
                    <td><a href="">View</a><a href="#"class='btn btn-primary bx bxs-edit'>Edit</a><a href="#"class='btn btn-danger bx bx-trash'>Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
            </div>
            {{$inforpc->links()}}
        </div>
    </div>


@endsection
