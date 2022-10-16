<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

    <div class="container">
       <div class="card-group my-5">
            <div class="card border-0 rounded-0 shadow-sm">
                <div class="card-header border-0">
                   <?php $this->view('includes/breadcrumb',['crumbs'=>$crumbs]); ?>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>S.No.</th>
                            <th>School</th>
                            <th>Created By</th>
                            <th>Date</th>
                            <th>
                                <a href="<?=ROOT?>/schools/add">
                                <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add School</button>
                                </a>
                            </th>
                        </tr>
                    <?php if($rows): ?>
                        <?php foreach($rows as $row): ?>
                           <tr>
                             <td><?=$row->id?></td>
                             <td><?=$row->school?></td>
                             <td><?=$row->user->firstname?></td>
                             <td><?=get_date($row->date)?></td>
                             <td>
                             <a href="<?=ROOT?>/schools/edit/<?=$row->id?>">
                                <button class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</button>
                             </a>
                             <a href="<?=ROOT?>/schools/delete/<?=$row->id?>">
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                             </a>
                             <a href="<?=ROOT?>/switch_school/<?=$row->id?>">
                                <button class="btn btn-sm btn-info text-white"><i class="fa fa-angle-right"></i> Switch</button>
                             </a>
                             </td>
                           </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h4>School not found</h4>
                    <?php endif; ?>
                    </table>
                </div>
            </div>
       </div>
    </div>
    
<?php $this->view('includes/footer'); ?>