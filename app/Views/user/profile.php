<div class="container">
  <div class="row">
    <div class="">
      <div class="container">
        <h3><?= $user['firstname'].' '.$user['lastname'] ?></h3>
        <hr>
        <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        <form class="" action="<?php echo base_url('User/profile');?>" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="firstname">First Name</label>
               <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname', $user['firstname']) ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="lastname">Last Name</label>
               <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname', $user['lastname']) ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
               <label for="email">Email address</label>
               <input type="text" class="form-control" name="email" readonly id="email" value="<?= $user['email'] ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="email">Physical Address</label>
               <textarea type="text" class="form-control"  name="address" id="address" value="<?= $user['address'] ?>"></textarea> 
              </div>
            </div>
              <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="email">Phone Number</label>
               <input type="text" class="form-control" name="phone" id="phone" value="<?= $user['phone'] ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" name="password" id="password" value="">
             </div>
           </div>
           <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="password_confirm">Confirm Password</label>
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
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
              <button type="submit" class="btn btn-primary">Update</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
