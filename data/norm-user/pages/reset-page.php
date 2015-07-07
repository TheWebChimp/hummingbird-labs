<?php
	$error = get_item($_GET, 'error');
?>
<?php $site->getParts(array( 'shared/header_html', 'sticky-footer/header' )); ?>

		<section>
			<div class="inner boxfix-vert">
				<div class="margins">
					<h3>NORM User Login</h3>
					<br>
					<!--  -->
					<?php if ($error): ?>
						<div class="message message-error"><?php echo $error; ?></div>
					<?php endif; ?>
					<!--  -->
					<p>Please enter your user name and your new password to recover access to your account.</p>
					<div class="row">
						<div class="col col-4">
							<br>
							<form action="" method="post">
								<div class="form-fields">
									<div class="form-group">
										<label for="user" class="control-label">User name</label>
										<input type="text" name="user" id="user" class="form-control input-block">
									</div>
									<div class="form-group">
										<label for="pass" class="control-label">New password</label>
										<input type="password" name="pass" id="pass" class="form-control input-block">
									</div>
									<div class="form-group">
										<label for="confirm" class="control-label">Confirm password</label>
										<input type="password" name="confirm" id="confirm" class="form-control input-block">
									</div>
								</div>
								<div class="text-right">
									<a href="<?php $site->urlTo('/experiments/norm-user', true); ?>" class="button button-link">Go back</a>
									<button type="submit" class="button button-primary">Change password</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php $site->getParts(array( 'sticky-footer/footer', 'shared/footer_html' )); ?>