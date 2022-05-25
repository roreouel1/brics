@extends('admin.home')
 @section('content')
<!-- Container -->
<div class="container">

<!-- Title -->
<div class="hk-pg-header">
	<h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="user"></i></span></span>Users</h4>
    <a href="{{ route('users.create')}}" class="btn btn-outline-success"> <span class="icon-label"><i class="fa fa-user"></i> </span><span class="btn-text">Add new user</span></a>
</div>


<!-- /Title -->

<!-- Row -->
<div class="row">


                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
					@if(Session::has('alert-' . $msg))
                	<div class="col-md-8 alert alert-inv alert-inv-{{ $msg }} alert-wth-icon alert-dismissible fade show" role="alert">
				<!-- <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p> -->
				
					<i class="zmdi zmdi-check"></i> {{ Session::get('alert-' . $msg) }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				
				 </div>
				 @endif
				 @endforeach

	<div class="col-xl-12">
	<section class="hk-sec-wrapper">
                           
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <!-- <div class="table-responsive"> -->
                                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Date added</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

												@foreach($data as $i)
                                                    <tr>
                                                        <td>{{{$i->name}}}</td>
                                                      
                                                        <td>{{{$i->email}}}</td>
                                                        <td>{{{$i->created_at}}}</td>
                                                        <td class="line">   
                                                        <a href="{{route('users.edit',$i->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                           

                                                        <form class="" action="{{ route('users.destroy', $i->id) }}" method="POST">

                                                        @csrf
                                                        @method('DELETE')
                                                        <!-- <a href="#"  type="submit" data-toggle="tooltip" data-original-title="Close" onclick="return confirm('Confirm delete?')"> <i class="icon-trash txt-danger"></i> </a> -->
                                                        <button type="submit"  class="btn btn-danger btn-sm"><i class="icon-trash txt-danger"></i> </button>
                                                        </form>
                                                        </td>
                                                    </tr>

													@endforeach
                                                </tbody>
                                            </table>


											<script>

											</script>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </section>

	</div>
</div>
<!-- /Row -->

</div>
<!-- /Container -->

 @endsection


<!--  
@section('scripts')

<script>
$(document).ready(function () {
    
    $(.del).click(function (e) { 
        e.preventDefault();
        alert('Hello');
    });
});
</script>

@endsection -->