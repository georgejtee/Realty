
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

                            <a class="btn" href="<?= base_url('Property/verify/'.$item['propertyId']) ?>"><i class="fas fa-user-check"></i> verify</a>

                            <a class="" href="<?= base_url('Property/edit/'.$item['propertyId'])?>"><i class="fas fa-edit"></i> </a>
                            <a class="" href="<?= base_url('Property/delete/'.$item['propertyId']) ?>"><i class="fas fa-trash"></i> </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>