
<legend><?php echo __('Add User'); ?></legend>
<form action='' method='POST' class="form-horizontal" role="form">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-8">
			<input type="text" name="username" class="form-control" id="inputUsername" placeholder="username">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-8">
			<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<label for="Role" class="col-sm-2 control-label">Role</label>
		<div class="col-sm-8 col-md-2">
			<select name="role" class="form-control">
				<option value="admin">Admin</option>
				<option value="author">Author</option>
			</select> 
			
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-primary">SignUp</button>
			<a href='login' class="btn btn-default">Back</a>
		</div>
	</div>

</form>

