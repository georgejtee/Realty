<?php  ?><div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Add Funds</h3>
        <hr>
        <form class="" action="<?php echo base_url('User/addFunds');?>" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="amount">Amount</label>
               <input type="number" class="form-control" name="amount" min="10000" id="firstname" value="">
             </div>
           </div>
         </div>
         <?php if (isset($validation)): ?>
          <div class="col-12">
            <div class="alert alert-danger" role="alert">
              <?= $validation->listErrors() ?>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <div class="row">
        <div class="col-12 col-sm-4">
          <button type="submit" class="btn btn-primary">Add Funds</button>
        </div>
      </div>
    </form>

</div>
</div>
</div>
</div>

<br>
<br>
<br>
