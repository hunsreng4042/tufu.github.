@extends('layout.master')
@section('content')

    <div class="contaioner">
        <i class='bx bxs-cog' ></i>
        <span class="menu-title">System</span>
    </div>
    <br>
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample">
                        <div class="row">
                            <div class="col-ms-6 col-md-6 list-group-card">
                                <div class="list-group">
                                    <a class="list-group-item" href="/colorsystem">
                                    <i class='bx bxs-palette' >Chage Color System</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                  </form>
                </div>
              </div>
            </div>

@endsection
