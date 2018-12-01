<div id="infoMessage"><?php echo $message;?></div>
<br>
<div class="row">
<div class="col-md-4 hidden-sm"></div>
<div class="col-sm-12 col-md-4">
<div class="panel panel-primary">
  <div class="panel-heading"><h3><?php echo lang('login_heading');?></h3></div>
  <div class="panel-body">
  
<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>
<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>
</div><!-- panel -->
</div><!-- col -->
<div class="col-md-4 hidden-sm"></div>
</div><!-- row -->
