<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <!--
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Přihlášení</title>
</head>
<body>

<?php $this->load->view('header'); ?>

<div class="container">
<h1 style="margin-left: 150px">Přihlásit se</h1>
<!--
<h1 class="dl"><?php //echo lang('login_heading');?></h1>
<h3><?php //echo lang('login_subheading');?></h3>
-->
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>
<div class="row">
  <div class="col-3">
  <p>
    <?php //echo lang('login_identity_label', 'identity');?>
    <i class="fas fa-file-signature"></i> Jméno:
    <?php echo form_input($identity);?>
  </p>
  </div>
  <div class="col-3">
  <p>
    <?php //echo lang('login_password_label', 'password');?>
    <i class="fas fa-key"></i>  Heslo:
    <?php echo form_input($password);?>
  </p>
  </div>
</div>
  <p>
    <?php //echo lang('login_remember_label', 'remember');?>
    Zapamatovat si mě
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>
</body>
</html>