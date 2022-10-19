<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

    <div class="container">
       <div class="card-group my-5">
            <div class="card border-0 rounded-0 shadow-sm">
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
                <div class="card-header border-0">
                    <?php $this->view('includes/breadcrumb',['crumbs'=>$crumbs]); ?>
                </div>
                <div class="card-body">
                    <form method="post">
                        <input type="text" value="<?=get_val('class')?>" class="form-control shadow-none my-2" name="class" placeholder="Add class" autocomplete="off">
                        <button type="submit" class="btn btn-sm btn-dark">Add Class</button>
                    </form>
                    <a href="<?=ROOT?>/classes">
                        <button class="btn btn-sm btn-danger">Cancel</button>
                    </a>
                </div>
            </div>
       </div>
    </div>
    
<?php $this->view('includes/footer'); ?>