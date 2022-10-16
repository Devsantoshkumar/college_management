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
              <h4 class="text-center p-3">Login Form</h4>
             <form method="post" class="px-5">
                 <div class="input-group my-3">
                    <input type="text" value="<?=get_val('email')?>" name="email" class="form-control shadow-none" placeholder="Username or email">
                 </div>
                 <div class="input-group my-3">
                    <input type="text" value="<?=get_val('password')?>" name="password" class="form-control shadow-none" placeholder="Password...">
                 </div>
                 <div class="input-group">
                    <small>I'm new user <a href="<?=ROOT?>/signup" class="text-decoration-none"> Signup</a></small>
                 </div>
                 <div class="input-group my-3">
                    <button type="submit" class="btn btn-sm btn-dark fw-bold">Login</button>
                 </div>
             </form>
        </div>
    </div>
    
<?php $this->view('includes/footer'); ?>