@extends('admin.admin_dashboard')
@section('admin')

<div class="col-md-6 grid-margin stretch-card" style="margin-top:200px; margin-left:150px;">
						<div class="card">
							<div class="card-body">

								<h6 class="card-title">Horizontal Form</h6>

								<form class="forms-sample" action="{{ route('register') }}">
                                 @csrf

                                <div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Who are You</label>
										<div class="col-sm-9">
                                           <select class="form-control" id="userRole" name="userRole">
                                                <option value="admin">Admin</option>
                                                <option value="agent" disabled>User</option>
                                                <option value="owner" disabled>Agent</option>
                                           </select>                                  
										</div>
									</div>
                                    
									<div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label" >Username</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="exampleInputUsername2" placeholder="username" name="username">
										</div>
									</div>

                                    <div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label" >Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="exampleInputUsername2" placeholder="name" name="name">
										</div>
									</div>

									<div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="exampleInputEmail2" autocomplete="off" placeholder="Email" name="email">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="exampleInputEmail2" autocomplete="off" placeholder="Address" name="address">
										</div>
									</div>

									<div class="row mb-3">
										<label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" id="exampleInputMobile" placeholder="phonenumber" name="phonenumber">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password" name="password">
										</div>
									</div>
									<div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">
											Remember me
										</label>
									</div>
									<button type="submit" class="btn btn-primary me-2">Submit</button>
									<button class="btn btn-secondary">Cancel</button>
								</form>

							</div>
						</div>
					</div>
@endsection