<?php include __DIR__ . "/../layout/header.php" ?>

<br/>
<br/>

<?php if (!empty($error)) :?>
	<p>
		<?php echo $error; ?>
	</p>
 <?php endif; ?>

<form method="POST" method="login" class="form-horizontal" >

	<div class="form-group">
		<label class="control-label col-md-3">
			Bentzername
		</label>
		<div class="col-md-9">
			<input type="text" name="username" class="form-control">
		</div>

	</div>

	<div class="form-group">
		<label class="control-label col-md-3">
			Passwort
		</label>
		<div class="col-md-9">
			<input class="form-control" type="password" name="password">
		</div>

	</div>
	<input class="btn btn-primary" type="submit" value="Einloggen">



</form>

<?php include __DIR__ . "/../layout/footer.php" ?>