@extends('layout.master')
@section('content')

    <div class="contaioner">
        <span class="menu-title">List of Users</span>
    </div>
    <br>

    <div class="content" >
        <div class="row">
            <div class="col-ms-10 col-md-10">
                <input type="text" class="form-control" placeholder="Filter by name" aria-label="Filter by name" aria-describedby="basic-addon2">
            </div>
            <div class="col-ms-2 col-md-2">
                <a href="/createusers" class="btn btn-primary">
                    <i class='bx bx-plus-medical'></i>
                    CREATE USERS
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
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
           {{$users->links()}}
        </div>
    </div>
@endsection
