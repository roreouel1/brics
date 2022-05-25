@extends('admin.home')
 @section('content')

   <!-- Container -->
   <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="user"></i></span></span>Add User</h4>
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


				 @if ($errors->any())
					<div class="col-md-8 alert alert-inv alert-inv-danger alert-wth-icon alert-dismissible fade show" role="alert">
						<ol>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ol>
					</div>
				@endif

			


                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                           
                            <div class="row">
                                <div class="col-sm">
                                    <form class="needs-validation" novalidate method="POST" action="{{ route('user.store')}}" enctype="multipart/form-data">

									@csrf
                                        <div class="row">
                                            <div class="col-md-8 form-group">
                                                <label for="fullName">Full name</label>
                                                <input class="form-control" name="name" id="fullName" placeholder="Full name" value=""  required type="text">
												
												@if ($errors->has('name'))
										
												<span class="text-danger">{{ $errors->first('name') }}</span>
												@endif
												
												
												<div class="valid-feedback">
                                                    Looks good!
                                                </div>
				
												<div class="invalid-feedback">
                                                Please type your full name.
                                                 </div>
												 
											</div>
                        
                                        </div>

										<div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" name="email" id="email" placeholder="Email" value="" required  type="email">
                                            
												@if ($errors->has('email'))
													<span class="text-danger">{{ $errors->first('email') }}</span>
												@endif

												<div class="valid-feedback">
                                                    Looks good!
                                                </div>
				
												<div class="invalid-feedback">
                                                Please type a valid email.
                                                 </div>

											
																							
											</div>
                                            <div class="col-md-6 form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control"  name="password" id="password" placeholder="Password" value=""  required type="password">
												
												@if ($errors->has('password'))
												<span class="text-danger">{{ $errors->first('password') }}</span>
												@endif
												
												
												<div class="valid-feedback">
                                                    Looks good!
                                                </div>
				
												<div class="invalid-feedback">
                                                Please type your password.It should be at least 8 chars.
                                                 </div>

												
											
											</div>
                                        </div>

                                        <hr>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                       
                       
                
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
 @endsection