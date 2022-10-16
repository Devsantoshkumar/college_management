<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

    <div class="container">
       <div class="card-group my-5">
            <div class="card border-0 rounded-0 shadow-sm">
                <div class="card-header border-0">
                    <?php $this->view('includes/breadcrumb'); ?>
                </div>
                <div class="card-body">
                    <?php if($row): ?>
                    <form method="post">
                        <input type="text" disabled value="<?=get_val('school',$row[0]->school)?>" class="form-control shadow-none my-2" name="school" placeholder="Add school" autocomplete="off">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    <?php else: ?>
                        <h6>School was not found</h6>
                    <?php endif; ?>
                    <a href="<?=ROOT?>/schools">
                        <button class="btn btn-sm btn-success">Cancel</button>
                    </a>
                </div>
            </div>
       </div>
    </div>
    
<?php $this->view('includes/footer'); ?>