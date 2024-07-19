@extends('layout.master')
@section('content')

    <div class="contaioner">
        <i class='bx bxs-user' ></i>
        <span class="menu-title">User Profile</span>
    </div>

    <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>
                            User ID
                          </td>
                          <td>
                            @if(session()->exists('userid'))
                                {{session()->get('userid')}}
                            @endif
                          </td>
                        </tr>
                        <tr>
                          <td>
                            User Name
                          </td>
                          <td>
                            @if(session()->exists('name'))
                                {{session()->get('name')}}
                            @endif
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Language
                          </td>
                          <td>
                            English
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Email
                          </td>
                          <td>
                            @if(session()->exists('email'))
                                {{session()->get('email')}}
                            @endif
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection
