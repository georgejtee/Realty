
 <div class="container"> 
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
                        <td><?= $item['propertyId'] ?></td>
                        <td><?= $item['investmentRequired'] ?></td>
                        <td><?= $item['pledgedAmount'] ?></td>
                        <td><?= $item['verified'] == 0 ? "Unverified" : "Verified" ?> </td>
                        <td class="text-right">

                            <a class="btn" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-check"></i> verify</a>

                            <a class="" href="<?= base_url('Property/edit/'.$item['propertyId'])?>"><i class="fas fa-edit"></i> </a>
                            <a class="" href="<?= base_url('Property/delete/'.$item['propertyId']) ?>"><i class="fas fa-trash"></i> </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" href="<?= base_url('Property/verify/'.$item['propertyId']) ?>">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>