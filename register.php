<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <title>Register</title>
</head>
<body>
   <div class="container" >
     <?php 
       $msg=$this->session->flashdata('msg');
       if($msg !=""){
           echo "<div class=' alert alert-success'>'.$msg'</div>";
       }

?>
   <div class="col-md-6">
   
   <div class="card mt-4">
  <div class="card-header">
    Register
  </div>
  <form action="<?php echo base_url().'index.php/Auth/register'?>" name="registerForm" id="registerForm" method="post">
  <div class="card-body">
    <h5 class="card-title">Please fill your details</h5>
    <p class="card-text"></p>
    <div class="form-group">
    <label for="name">First Name</label>
    <input type="text" name="first_name" id="first_name" values="" class="form-control" placeholder="first_name">
    <p><?php echo form_error('first_name');?></p>
  </div>
  <div class="form-group">
    <label for="name">Last Name</label>
    <input type="text" name="last_name" id="last_name" values="" class="form-control" placeholder="last_name">
    <p><?php echo form_error('last_name');?></p>
  </div>
  <div class="form-group">
    <label for="name">Email</label>
    <input type="text" name="email" id="email" values="" class="form-control" placeholder="Email">
    <p><?php echo form_error('email');?></p>
  </div>
  <div class="form-group">
    <label for="name">Phone</label>
    <input type="text" name="Phone" id="Phone" values="" class="form-control" placeholder="Phone">
    <p><?php echo strip_tags(form_error('Phone'));?></p>
  </div>
  <div class="form-group">
    <label for="name">password</label>
    <input type="password" name="password" id="password" values="" class="form-control" placeholder="password">
    <p><?php echo form_error('password');?></p>
  </div>
  <div class="form-group">
  <button class="btn btn-block btn-primary">Register Now</button>
</div>
</body>
</html>