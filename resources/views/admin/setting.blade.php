@extends('layout.master')
@section('content')

    <div class="contaioner">
        <i class='bx bxs-cog' ></i>
        <span class="menu-title">User Setting</span>
    </div>
    <br>
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Username <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                        <select class="form-control" aria-label="Default select example">
                            <option value="1">English</option>
                            <option value="2">ខ្មែរ</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Date format <span style="color:red">*</span></label>
                      <div class="col-sm-9">
                      ​<select class="form-control" aria-label="Default select example">
                            <option value="1">dd-mmm-yyyy</option>
                            <option value="2">mm-dd-yy</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection
