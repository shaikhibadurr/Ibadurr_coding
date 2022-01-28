<?php include('header.php'); ?>

<div class="container col-4 mt-5">
<div class="box" style="background:#8080800d;  padding:20px; border-radius: 10px; box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
; ">
	<?= form_open('omr_dashboard/login'); ?>
	  <fieldset>
	    <legend>Login Form</legend>

				<?php if(form_error('username')): ?>
	      <div class="form-floating form-group has-danger" style="margin-top: 90px;">
	  				<?=form_input(['class'=>'form-control is-invalid','id'=>'invalidUsername','name'=>'username','placeholder'=>'Email Id','value'=>set_value('username')]);?>
	  				<label class="form-label" for="invalidUsername">Email Id</label>
	  				<div class="invalid-feedback"><?php echo form_error('username'); ?> 
				</div>
				</div>
	      <?php else: ?>
	      <div class="form-floating form-group" style="margin-top: 90px;">
    				<?php echo form_input(['class'=>'form-control','id'=>'invalidUsername','name'=>'username','placeholder'=>'Email Id','value'=>set_value('username')]); ?>
    				<label for="invalidUsername">Email Id</label>

  			</div>
				<?php endif; ?>

	      <?php if(form_error('password')): ?>
	      <div class="form-floating form-group has-danger mt-4">
	  				<?=form_password(['class'=>'form-control is-invalid','id'=>'password','name'=>'password','placeholder'=>'Password','value'=>set_value('password')]);?>
	  				<label class="form-label" for="password">Password</label>
	  				<div class="invalid-feedback"><?php echo form_error('password'); ?> 
				</div>
				</div>
	      <?php else: ?>
	      <div class="form-floating form-group mt-4">
    				<?php echo form_password(['class'=>'form-control','id'=>'password','name'=>'password','placeholder'=>'Password','value'=>set_value('password')]); ?>
    				<label for="password">Password</label>

  			</div>
				<?php endif; ?>
	      	<?php if($this->session->flashdata('msg')): ?>

	      	<div class="alert alert-danger mt-4">
	      		*Invalid Credentials
	      	</div>

	      <?php endif; ?>
	      <div class="form-group">
	      	<input type="submit" class="btn btn-outline-dark mt-4 w-100" value="Login">
	      </div>
	   </fieldset>
	</form>
	</div>
</div>
