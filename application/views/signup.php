<?php 
	$this->load->view('templates/header');
?>

<div class = "container-fluid">
  <div class="col-sm-4 col-sm-offset-4">
    <form class="form-container" id="form-signup" method="POST">

      <h1 style="text-align: center; color: #017572; font-family: arial;">Create Account</h1>

      <div class="form-group">
        <label for="user">Email</label>
        <input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required autofocus>
      </div>

      <div class="form-group">
        <label for="user">Username</label>
        <input type="text" class="form-control input-lg" name="user" id="user" placeholder="Username" required>
      </div>

      <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class="form-control input-lg" name="pass" id="pass" placeholder="Password" required data-minlength="5">
      </div>

      <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class="form-control input-lg" name="confirm_pass" id="confirm_pass" data-match="#pass" data-match-error="Whoops, these don't match" placeholder="Confirm password" required>
      </div>

      <div class="checkbox">
        <label><input type="checkbox">Remember Me</label>
      </div>

      <div class="form-group" align="center">
        <button class="btn btn-success btn-block" name="signup">Create Account</button>
      </div>
    </form>
</div>

<?php 
  $this->load->view('templates/footer');
?>