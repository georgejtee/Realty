 <div class="container"> 
    <div class="row">

      <div class="col-sm-6">
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">Total Investment Groups</h5>
            <h3 class="card-text"><?= $groupsCount ?></h3>
        </div>
    </div>
</div>



<div class="col-sm-6">
    <div class="card mt-3">
      <div class="card-body">
        <h5 class="card-title">Total Members</h5>
        <h3 class="card-text"><?php echo((0)*100) ;?> </h3>
    </div>
</div>
</div>

</div>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
    <h1 class="h2">Investment Groups</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createuserformmodal"><i class="fas fa-users"></i> Add Investment Group</button>
    </div>
</div>



<div class="row">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Group Name</th>
                    <th>Members</th>
                    <th>Properties</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groups as $item):?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['groupName'] ?></td>
                        <td><?= $item['members'] ?></td>
                        <td><?= $item['propertyId'] ?> </td>
                        <td class="text-right">

                            <a class="" href="<?= base_url('Admin/editGroup/'.$item['id'])?>"><i class="fas fa-edit"></i> </a>
                            <a class="" href="<?= base_url('Property/editGroup/'.$item['id']) ?>"><i class="fas fa-trash"></i> </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
</div>

<br>
<br>
<br>
