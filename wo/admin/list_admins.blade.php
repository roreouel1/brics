@extends('layouts.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
           
             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Administrators</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                <div class="col-md-8 col-sm-8 ">
                <div class="buttons">
                                            <!-- Standard button -->
                <a  class="btn btn-primary btn-lg fa fa-user-plus" href="{{route('admin.create')}}"></a>
              
                </div>
                </div>
                  

                    <div class="table-responsive">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr class="headings">                          
                            
                            <th class="column-title">SID </th>
                            <th class="column-title">Photo</th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Role </th>
                            <th class="column-title">Last Seen </th>
                            <th class="column-title"> </th>
                          
    
                          </tr>
                        </thead>

                        <tbody>

                        @foreach($data as $i)
                          <tr class="even pointer">            
                            <td class=" ">{{{$i->scid}}}</td>
                            @if($i->photo==null)
                            <td class=" "> <img src="/uploads/user.png" class="avatar" alt="Avatar"></td> 
                            @else
                            <td class=" "> <img src="/uploads/{{{$i->photo}}}" class="avatar" alt="Avatar"></td>    
                            @endif  
                            <td class=" ">{{{$i->name}}}</td>
                            <td class=" ">{{{$i->email}}}</td>
                            <td class=" ">{{{$i->role}}}</td>
                            <td class=" ">{{{$i->last_login_at}}}</td>
                            <td class=" ">
                            
                          
                           
                            <a href="{{route('admin.edit',$i->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> </a>
                           
                         <form class="change" action="{{ route('admin.destroy', $i->id) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o"></i></button>
                            </form>
                            </td>
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
        <!-- /page content -->

@endsection
