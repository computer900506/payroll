<?php 
	$this->load->view('templates/header');
?>

<div class = "container-fluid">
  <div class="col-sm-4 col-sm-offset-4">
    <form class="form-container" id="form-login" method="POST">
      <h1 style="text-align: center; color: #017572; font-family: arial;">Login</h1>
      <div class="form-group">
        <label for="user" class="login_user">Username</label>
        <input type="text" class="form-control input-lg" id="login_user" name="login_user" placeholder="Enter Username" required autofocus>
      </div>
      <div class="form-group">
        <label for="pass" class="login_pass">Password</label>
        <input type="password" class="form-control input-lg" id="login_pass" name="login_pass" placeholder="Enter Password" required>
      </div>
      <?php if ($this->session->has_userdata('error')) { ?>
        <div class="alert alert-danger"><?php echo $this->session->userdata('error'); ?></div>
      <?php } ?>
      <div class="checkbox">
        <label><input type="checkbox">Remember Me</label>
      </div>
      <div class="form-group" align="center">
        <button class="btn btn-success btn-block btn-lg" name="login">Login</button>
      </div>
    </form>
</div>

<?php 
  $this->load->view('templates/footer');
?>