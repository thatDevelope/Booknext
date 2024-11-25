@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="page-content">

        <!-- <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="position-relative"> -->
                <!-- <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                  <img src="{{asset('frontend/assets/images/logo.png')}}"class="rounded-top" alt="profile cover">
                </figure> -->
                <!-- <div class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                  <div>
                    <img class="wd-70 rounded-circle" src="{{( !empty($profile->photo)) ? url('upload/admin_images'.$profile->photo) : url('upload/no_image.jpg' ) }}" alt="profile">
                    <span class="h4 ms-3 text-white">Amiah Burton</span>
                  </div>
                  <div class="d-none d-md-block"> -->
                    <!-- <button class="btn btn-primary btn-icon-text">
                      <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                    </button> -->
                  <!-- </div>
                </div>
              </div>
              <div class="d-flex justify-content-center p-3 rounded-bottom">
                <ul class="d-flex align-items-center m-0 p-0">
                  <li class="d-flex align-items-center active">
                    <i class="me-1 icon-md text-primary" data-feather="columns"></i>
                    <a class="pt-1px d-none d-md-block text-primary" href="#">Timeline</a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="user"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">About</a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="users"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Friends <span class="text-muted tx-12">3,765</span></a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="image"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Photos</a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="video"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Videos</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-5 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
              <div>
                    <img class="wd-70 rounded-circle" src="{{( !empty($profile->photo)) ? url('upload/'.$profile->photo) : url('upload/no_image.jpg' ) }}" alt="profile">
                    <span class="h4 ms-3 text-white">{{ $profile->name}}</span>
                  </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h6 class="card-title mb-0">About</h6>
                  <div class="dropdown">
                    <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="git-branch" class="icon-sm me-2"></i> <span class="">Update</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                    </div> -->
                  </div>
                </div>
                <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                  <p class="text-muted">{{ $profile->created_at}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">PhoneNumber</label>
                  <p class="text-muted">{{ $profile->phonenumber}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">{{ $profile->email}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">UserName</label>
                  <p class="text-muted">{{ $profile->username}}</p>
                </div>
                <div class="mt-3 d-flex social-links">
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="github"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <!-- <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
                        <div class="ms-2">
                          <p>Mike Popescu</p>
                          <p class="tx-11 text-muted">1 min ago</p>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                    <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
                  </div> -->
                  <!-- <div class="card-footer">
                    <div class="d-flex post-actions">
                      <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                        <i class="icon-md" data-feather="heart"></i>
                        <p class="d-none d-md-block ms-2">Like</p>
                      </a>
                      <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                        <i class="icon-md" data-feather="message-square"></i>
                        <p class="d-none d-md-block ms-2">Comment</p>
                      </a>
                      <a href="javascript:;" class="d-flex align-items-center text-muted">
                        <i class="icon-md" data-feather="share"></i>
                        <p class="d-none d-md-block ms-2">Share</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
                        <div class="ms-2">
                          <p>Mike Popescu</p>
                          <p class="tx-11 text-muted">5 min ago</p>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
                  </div>
                  <div class="card-footer">
                    <div class="d-flex post-actions">
                      <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                        <i class="icon-md" data-feather="heart"></i>
                        <p class="d-none d-md-block ms-2">Like</p>
                      </a>
                      <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                        <i class="icon-md" data-feather="message-square"></i>
                        <p class="d-none d-md-block ms-2">Comment</p>
                      </a>
                      <a href="javascript:;" class="d-flex align-items-center text-muted">
                        <i class="icon-md" data-feather="share"></i>
                        <p class="d-none d-md-block ms-2">Share</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          <div class="d-none d-xl-block col-xl-5 card">

          <div class="card-body">

								<h6 class="card-title">Edit Profile</h6>

								<form method="post" action="{{ route('admin.store')}}"  class="forms-sample" enctype="multipart/form-data">
                                 @csrf

                                <div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="exampleInputUsername2" placeholder="Email" value="{{ $profile->name}}" name="name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="exampleInputUsername2" placeholder="Email" value="{{ $profile->username}}" name="username">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="exampleInputEmail2" autocomplete="off" placeholder="Email" value="{{ $profile->email}}" name="email">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" id="exampleInputMobile" placeholder="Mobile number" value="{{ $profile->phonenumber}}" name="phonenumber">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="address" value="{{ $profile->address}}" name="address">
										</div>
									</div>

                                    <!-- <div class="row mb-3">
										<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
                                        <input class="form-control" type="file" id="formFile" value="{{ $profile->photo}}" name="photo">
										</div>
									</div> -->

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Photo   </label>
	                                    <input class="form-control"  name="photo" type="file" id="image">
				                        </div>

                	                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">    </label>
	                                     <img id="showImage" class="wd-80 rounded-circle" src="{{ (!empty($profile->photo)) ? url('upload/'.$profile->photo) : url('upload/no_image.jpg') }}" alt="profile" name="photo">
				                     </div>
									<div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">
											Remember me
										</label>
									</div>
									<button type="submit" class="btn btn-primary me-2">Save All</button>
									<button class="btn btn-secondary">Cancel</button>
								</form>

							</div>
            <!-- <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-body">
                    <h6 class="card-title">latest photos</h6>
                    <div class="row ms-0 me-0">
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-0">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-0">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-0">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-body">
                    <h6 class="card-title">suggestions for you</h6>
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">
                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                        <div class="ms-2">
                          <p>Mike Popescu</p>
                          <p class="tx-11 text-muted">12 Mutual Friends</p>
                        </div>
                      </div>
                      <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                    </div>
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">
                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                        <div class="ms-2">
                          <p>Mike Popescu</p>
                          <p class="tx-11 text-muted">12 Mutual Friends</p>
                        </div>
                      </div>
                      <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                    </div>
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">
                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                        <div class="ms-2">
                          <p>Mike Popescu</p>
                          <p class="tx-11 text-muted">12 Mutual Friends</p>
                        </div>
                      </div>
                      <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                    </div>
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">
                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                        <div class="ms-2">
                          <p>Mike Popescu</p>
                          <p class="tx-11 text-muted">12 Mutual Friends</p>
                        </div>
                      </div>
                      <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                    </div>
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">
                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                        <div class="ms-2">
                          <p>Mike Popescu</p>
                          <p class="tx-11 text-muted">12 Mutual Friends</p>
                        </div>
                      </div>
                      <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                    </div>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center hover-pointer">
                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                        <div class="ms-2">
                          <p>Mike Popescu</p>
                          <p class="tx-11 text-muted">12 Mutual Friends</p>
                        </div>
                      </div>
                      <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                    </div> -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- right wrapper end -->
        </div>

			</div>
 <script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

@endsection