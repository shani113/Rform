<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style1.css'?>">
    <title>login</title>
</head>
<body>
<form class="form-signin" action="<?php echo base_url().'index.php/Auth/login'?>" name="frm1" id="frm1" method="post">
    <?php
      $msg=$this->session->flashdata('msg');
      if($msg!=""){
    ?>
  <div class="alert alert-danger">
    <?php echo $msg;?>
    </div>
    <?php
      }
  ?>
    
  
  
  
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="email" class="sr-only">Email address</label>
  

  
  <input type="text" id="email"name="email" class="form-control" placeholder="Email address" required autofocus>
  <?php echo form_error('email'); ?>
  
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password"name="password" class="form-control" placeholder="password" required>
  
  
  <?php echo form_error('password'); ?>
    
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  
</form>
</body>
</html>