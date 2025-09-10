<?php
class forms {
    public function signup() {
 ?>
            <h2>Sign Up Here</h2>
<form action="mailing.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
    <div id="nameHelp" class="form-text"></div>
  </div>
  
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  
  <?php echo $this->submit_button('Sign Up'); ?> 
  <a href="signin.php">Already have an account? Sign in</a>
</form>

<?php
    }
    private function submit_button($text) {
        return "<button type='submit' class='btn btn-primary'>$text</button>";
    }
    public function signin() {
?>
            <h2>Sign In Here</h2>
<form action='' method='post'>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <?php echo $this->submit_button('Sign In'); ?> <a href='signup.php'>Don't have an account? Sign up</a>
</form>
<?php
    }
}   