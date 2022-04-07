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
                    <h2>Add user</h2>
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
				  <div class="flash-message">
   									 @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                     @if(Session::has('alert-' . $msg))

    						        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
     								 @endif
  								     @endforeach
  									</div> <!-- end .flash-message -->
									  
								
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('admin.store')}}">
									     @csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name<span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-4 ">
												<input type="text" id="name" name="name" required="required" class="form-control @error('name') is-invalid @enderror ">
												@error('name')
                      							<span class="invalid-feedback" role="alert">
                                       		   <strong>{{ $message }}</strong>
                                   			   </span>
                               					 @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-4 ">
												<input type="text" id="email" name="email" required="required" class="form-control @error('email') is-invalid @enderror">
												@error('email')
                                    			<span class="invalid-feedback" role="alert">
                                        		<strong>{{ $message }}</strong>
                                    			</span>
                              				  @enderror
											
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-4 ">
												<input type="password" id="password" name="password" required="required" class="form-control @error('password') is-invalid @enderror">
												@error('password')
                                    			<span class="invalid-feedback" role="alert">
                                      		  <strong>{{ $message }}</strong>
                                   			 </span>
                                				@enderror
											
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="confirm_pasword">Confirm password <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-4 ">
												<input type="password" id="password-confirm" name="password_confirmation" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="scid">School ID 
											</label>

											<div class="col-md-4 col-sm-4 ">
												<input type="text"  name="scid"  class="form-control">
											</div>
										</div>
                                        
									
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-4 col-sm-4 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

