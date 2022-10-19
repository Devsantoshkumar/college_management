<?php $this->view('includes/header'); ?>
   <?php 
         if(count($errors)>0)
         {
           echo '<div class="alert rounded-0 alert-warning alert-dismissible fade show" role="alert">';
                 foreach($errors as $error){
                    echo $error;
                 }
           echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>';
         }
   ?>
    <div class="container-fluid wrapper d-flex flex-column justify-content-center align-items-center">
        <div class="card shadow-sm bg-white border-0 py-4 auth_form">
              <h4 class="text-center p-3">Signup Form</h4>
             <form method="post" class="px-5">
                 <div class="input-group my-3">
                    <input type="text" name="firstname" value="<?= get_val('firstname') ?>" class="form-control shadow-none" placeholder="First name">
                 </div>
                 <div class="input-group my-3">
                    <input type="text" name="lastname" value="<?= get_val('lastname') ?>" class="form-control shadow-none" placeholder="Last name">
                 </div>
                 <div class="input-group my-3">
                    <input type="email" name="email" value="<?= get_val('email') ?>" class="form-control shadow-none" placeholder="Email address">
                 </div>
                 <div class="input-group my-3">
                    <select name="gender" id="" class="form-control shadow-none">
                     <option <?= get_select("gender","") ?> value="">--Select Gender--</option>
                     <option <?= get_select("gender","male") ?> value="male">Male</option>
                     <option <?= get_select("gender","female") ?> value="female">Female</option>
                    </select>
                 </div>
                 <div class="input-group my-3">
                   <?php if($mode == 'students') : ?>
                        <input type="hidden" class="form-control shadow-none" name="rank" value="student">
                     <?php else: ?>
                    <select name="rank" id="" class="form-control shadow-none">
                     <option <?= get_select("rank","") ?> value="">--Select Rank--</option> 
                     <option <?= get_select("rank","admin") ?> value="admin">Admin</option>

                     <?php  if(Auth::getRank() == 'superadmin'):  ?>
                        <option <?= get_select("rank","superadmin") ?> value="superadmin">Super Admin</option>
                     <?php elseif(Auth::getRank() == "Unknown"): ?>
                        <option <?= get_select("rank","superadmin") ?> value="superadmin">Super Admin</option>
                     <?php endif; ?>
                     
                     <option <?= get_select("rank","student") ?> value="student">Student</option>
                     <option <?= get_select("rank","reception") ?> value="reception">Reception</option>
                     <option <?= get_select("rank","teacher") ?> value="teacher">Teacher</option>
                    </select>
                    <?php endif; ?>
                 </div>
                 <div class="input-group my-3">
                    <input type="text" value="<?= get_val('password') ?>" name="password" class="form-control shadow-none" placeholder="Password">
                 </div>
                 <div class="input-group my-3">
                    <input type="text" value="<?= get_val('cpassword') ?>" name="cpassword" class="form-control shadow-none" placeholder="Retype Password">
                 </div>
                 <div class="input-group">
                    <small>I have already an account <a href="<?=ROOT?>/login" class="text-decoration-none"> Login</a></small>
                 </div>
                 <div class="d-flex align-items-center">
                 <div class="input-group my-3">
                    <button type="submit" class="btn btn-sm btn-dark fw-bold">Signup</button>
                 </div>
                 <?php if($mode == 'students') : ?>
                  <div class="input-group">
                    <a href="<?=ROOT?>/students"  class="btn btn-sm btn-danger ms-2 fw-bold">Cancel</a>
                 </div>
                 <?php else: ?>
                  <div class="input-group">
                    <a href="<?=ROOT?>/users"  class="btn btn-sm btn-danger ms-2 fw-bold">Cancel</a>
                 </div>
                 <?php endif; ?>
                 </div>
             </form>
        </div>
    </div>
    
<?php $this->view('includes/footer'); ?>