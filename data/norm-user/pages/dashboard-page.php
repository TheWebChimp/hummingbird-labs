<?php $site->getParts(array( 'shared/header_html', 'sticky-footer/header' )); ?>

		<section>
			<div class="inner boxfix-vert">
				<div class="margins">
					<h3>NORM User Login</h3>
					<br>
					<p>You are now signed-in as <?php echo $site->user->nicename; ?>, <a href="<?php $site->urlTo('/experiments/norm-user/sign-out', true) ?>">click here</a> to sign-out.</p>
				</div>
			</div>
		</section>

<?php $site->getParts(array( 'sticky-footer/footer', 'shared/footer_html' )); ?>