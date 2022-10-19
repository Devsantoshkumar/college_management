<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

<div class="contianer-fluid d-flex justify-content-center align-items-center">
    <?php if($row): ?>
    <div class="card w-75 mt-5 border-0 p-4 shadow">
    <div class="row">
        <div class="col border-bottom"> 
        <?php $this->view('includes/breadcrumb',['crumbs'=>$crumbs]); ?>
        </div>
    </div>
    <div class="row">
        <?php 
            $image = get_image($row->image,$row->gender);
        ?>
        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
            <img src="<?=$image ?>" class="rounded-circle" alt="" style="width: 150px; height: 150px">
            <h5 class="p-2"><?=esc($row->firstname)?> <?=esc($row->lastname)?></h5>
        </div>
        <div class="col">
            <table class="table">
                <tr>
                    <th>First name: </th>
                    <td><?=esc($row->firstname)?></td>
                </tr>
                <tr>
                    <th>Last name: </th>
                    <td><?=esc($row->lastname)?></td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td><?=esc($row->email)?></td>
                </tr>
                <tr>
                    <th>Rank: </th>
                    <td><?=esc(ucfirst($row->rank))?></td>
                </tr>
                <tr>
                    <th>Gender: </th>
                    <td><?=esc(ucfirst($row->gender))?></td>
                </tr>
                <tr>
                    <th>Date Created: </th>
                    <td><?=esc(get_date($row->date))?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Classes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tests</a>
        </li>
        </ul>
            <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </nav>
        </div>
    </div>
    </div>
    <?php else: ?>
         <h5>Profile not found</h5>
    <?php endif; ?>
</div>
    
<?php $this->view('includes/footer'); ?>