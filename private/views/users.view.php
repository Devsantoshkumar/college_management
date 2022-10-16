<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

    <div class="container bg-white my-4 shadow-sm">
        <div class="row p-4">
            <div class="col">
            <a href="<?=ROOT?>/signup">
              <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add User</button>
            </a>
            </div>
            <div class="col">
            <?php $this->view('includes/breadcrumb',['crumbs'=>$crumbs]); ?>
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