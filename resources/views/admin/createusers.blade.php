@extends('layout.master')
@section('content')

    <div class="contaioner">
        <span class="menu-title">Create User</span>
    </div>
    <hr>

    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="/createuser" method="POST">
                    @csrf
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="txtusername" name="txtusername" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputFirstname" class="col-sm-3 col-form-label">Firstname <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="txtfirstname" name="txtfirstname" placeholder="Firstname">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputLastname" class="col-sm-3 col-form-label">Lastname <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="txtlastname" name="txtlastname" placeholder="Lastname">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputName" class="col-sm-3 col-form-label">Name <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPhoneNumber" class="col-sm-3 col-form-label">PhoneNumber <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="txtphone" name="txtphone" placeholder="PhoneNumber">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword" class="col-sm-3 col-form-label">Password <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Password">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>

@endsection
