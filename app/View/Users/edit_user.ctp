
<h1 align='center'>Edit User</h1>

<form action='' method='POST' class="form-horizontal" role="form">
	<div class="form-group">
		<label class="col-sm-2 control-label">Username</label>
		<div class="col-sm-8">
			<input type="text" name="username" class="form-control" placeholder=<?php echo $user['User']['username']; ?>>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Password</label>
		<div class="col-sm-8">
			<input type="password" name="password" class="form-control" placeholder=<?php echo $user['User']['password']; ?>>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-primary">Save</button>
			<a href='index' class="btn btn-default">Back</a>
		</div>
	</div>
</form>

