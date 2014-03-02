
<h1 align='center'>Sign In</h1>

<?php echo $this->Session->flash('auth'); ?>
<form method='POST' class="form-horizontal" role="form">
 <div class="form-group">
  <label class="col-sm-2 control-label">Username</label>
  <div class="col-sm-8">
    <input type="text" name="username" class="form-control" placeholder="username">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Password</label>
  <div class="col-sm-8">
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-8">
    <div class="checkbox">
      <label>
        <input type="checkbox"> Remember me
      </label>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-8">
    <button type="submit" class="btn btn-primary">Login</button>
    <a href='users/register' class="btn btn-default">Register</a>
  </div>
</div>
</form>
