@extends('admin.home')
 @section('content')
<!-- Container -->
<div class="container">

<!-- Title -->
<div class="hk-pg-header">
	<h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="user"></i></span></span>Users</h4>
</div>
<!-- /Title -->

<!-- Row -->
<div class="row">
	<div class="col-xl-12">
	<section class="hk-sec-wrapper">
                           
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered mb-0">
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
                                                        <td>
                                                          
                                                        </td>
                                                        <td>May 15, 2015

														</td>
                                                        <td class="line">
                                                            <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>

                                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                        </td>
                                                    </tr>

													@endforeach
                                                </tbody>
                                            </table>


											<script>

											</script>
                                        </div>
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