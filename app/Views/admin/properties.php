 <div class="container"> 
    <div class="row">
      <div class="col-sm-4">
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">Total Properties</h5>
            <h3 class="card-text"><?= $propertiesCount ?></h3>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <a href="<?php echo(base_url('Admin/unverifiedProperties')) ?>">
       <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">Properties to Verify</h5>
            <h3 class="card-text"><?= $unverifiedProperties ?> <span class="text-small text-muted"></span></h3>
        </div>
    </a>

</div>
</div>
<div class="col-sm-4">
    <div class="card mt-3">
      <div class="card-body">
        <h5 class="card-title">Unverified Properties</h5>
        <h3 class="card-text"><?php echo(($unverifiedProperties/$propertiesCount)*100) ;?> </h3>
    </div>
</div>
</div>

</div>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
    <h1 class="h2">Propeties</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createuserformmodal"><i class="fas fa-home"></i> Add Property</button>
    </div>
</div>



<div class="row">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Invest Required</th>
                    <th>Pledged Amount </th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($properties as $item):?>
                    <tr>
                        <td><?= $item['propertId'] ?></td>
                        <td><?= $item['investmentRequired'] ?></td>
                        <td><?= $item['pledgedAmount'] ?></td>
                        <td><?= $item['verified'] == 0 ? "Unverified" : "Verified" ?> </td>
                        <td class="text-right">

                            <a class="btn" href="<?= base_url('Property/verify/'.$item['propertId']) ?>"><i class="fas fa-user-check"></i> verify</a>

                            <a class="" href="<?= base_url('Property/edit/'.$item['propertId'])?>"><i class="fas fa-edit"></i> </a>
                            <a class="" href="<?= base_url('Property/delete/'.$item['propertId']) ?>"><i class="fas fa-trash"></i> </a>
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
