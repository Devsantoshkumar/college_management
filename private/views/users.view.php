<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

    <div class="container bg-white my-4 shadow-sm">
        <div class="row">
            <div class="col pt-3 px-4">
            <?php $this->view('includes/breadcrumb',['crumbs'=>$crumbs]); ?>
            </div>
            
        </div>
        <div class="row pb-3">
           <div class="col-9">
                <nav class="navbar navbar-light p-0">
                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control shadow-none rounded-0" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success rounded-0" type="submit">Search</button>
                    </form>
                </div>
                </nav>
            </div>
            <div class="col-3 d-flex justify-content-end">
                <a href="<?=ROOT?>/signup">
                <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add User</button>
                </a>
            </div>
        </div>
        <div class="card-group justify-content-center pb-4">
            <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <?php 
                    $image = get_image($row->image,$row->gender);
                ?>
            <div class="card m-2 shadow-sm border-0 bg-light" style="max-width: 12rem; min-width: 12rem">
            <img src="<?=$image?>" class="card-img-top user-img" alt="...">
            <div class="card-body">
                <h6 class="card-title"><?=$row->firstname?> <?=$row->lastname ?></h6>
                <p class="card-text">Rank: <?=$row->rank?></p>
                <a href="<?=ROOT?>/profile/<?=$row->user_id?>" class="btn btn-sm btn-info text-white"><i class="fa fa-paper-plane px-1"></i> Profile</a>
            </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
                 <h5>No users found</h5>
            <?php endif; ?>
        </div>
    </div>
    
<?php $this->view('includes/footer'); ?>