<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
    <div class="row my-5">
    <div class="col-xl-10 d-block mx-auto">
        <ul id="profile_tab" class="nav nav-pills mx-auto bg-light mb-4 p-2 mt-3 my-4" id="pills-tab" role="tablist">
                  <li class="nav-item ">
                    <p class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Update Profile</p>
                  </li>
                  <li class="nav-item text-dark">
                    <p class="nav-link" id="pills-profile1-tab" data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile1" aria-selected="true">Update Account</p>
                  </li>
            </ul>


                <div class="tab-content my-2" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <form id="profile_size" class="d-block mx-auto border p-4" action="" method="post">
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                        <label for="first Name">First Name</label>
                        <input class="form-control" type="text" placeholder="Name from database">
                        </div>
                          </div>

                          <div class="col-md-6">
                        <div class="form-group">
                        <label for="first Name">Last Name</label>
                        <input class="form-control" type="text" placeholder="Name from database">
                        </div>
                        </div>
                        </div>
                          
                         
                        <div>
                        <div class="form-group">
                        <label for="first Name">Email</label>
                        <input class="form-control" type="text" placeholder="Name from database">
                        </div>

                        <div class="form-group">
                        <label for="first Name">Phone</label>
                        <input class="form-control" type="text" placeholder="Name from database">
                        </div>

                        <input class="btn btn-danger" type="submit" value="Update">
                        </div>
                        </form> 
                          </div>


                  <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile1-tab">
                  <form id="profile_size" class="d-block mx-auto border p-4" action="" method="post">
                      <div class="row">
                          <div class="col-md-12">
                          <div class="form-group">
                        <label for="first Name">Username</label>
                        <input class="form-control" type="text" placeholder="Name from database">
                        </div>
                          </div>

                          <div class="col-md-12">
                        <div class="form-group">
                        <label for="first Name">Password</label>
                        <input class="form-control" type="password" placeholder="Name from database">
                        </div>
                        </div>
                        </div>
                          
                         
                        <div>
                        <div class="form-group">
                        <label for="first Name">Confirm Password</label>
                        <input class="form-control" type="password" placeholder="Name from database">
                        </div>
                        <input class="btn btn-danger" type="submit" value="Update">

                        </div>
                        </form> 
                          </div>
                      </div>
                      
    </div>

              
</div>     
      <?php include('includes/footer.php'); ?>



