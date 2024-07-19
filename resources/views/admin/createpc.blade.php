@extends('layout.master')
@section('content')

<div class="contaioner">
        <span class="menu-title">Create Customer</span>
</div>

<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <form class="form-sample" action="/createpcnew" method="POST">
                  @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Device Type</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="devicetype" name="devicetype" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Model</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="model" name="model"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">GPU</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="gpu" name="gpu">
                              <option>Core i3</option>
                              <option>Core i5</option>
                              <option>Core i7</option>
                              <option>Core i9</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Device Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="devicename"  name="devicename"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mac Addrees</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="macaddrees" name="macaddrees" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">RAM</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="ram" name="ram">
                              <option>RAM 4G</option>
                              <option>RAM 6G</option>
                              <option>RAM 8G</option>
                              <option>RAM 16G</option>
                              <option>RAM 64G</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Serial Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="serialnumber" name="serialnumber"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">IP Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="ipaddrees" name="ipaddrees"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">HDD</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="hdd" name="hdd" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">OS</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="os" name="os" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="department" name="department" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Building/Brand</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="brand" name="brand"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Part Upgrade</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="upgrade" name="upgrade"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Location</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="location" name="location">
                              <option>Ground Floor</option>
                              <option>1 Floor</option>
                              <option>2 Floor</option>
                              <option>3 Floor</option>
                              <option>4 Floor</option>
                              <option>5 Floor</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
@endsection
