<?php $site->getParts(array( 'shared/header_html', 'sticky-footer/header' )); ?>

		<section>
			<div class="inner boxfix-vert">
				<div class="margins">
					<h3>NORM User Login</h3>
					<br>
					<div class="row">
						<div class="col col-4">
							<a href="<?php $site->urlTo('/experiments/norm-user/sign-up', true) ?>" class="button button-primary button-block button-large">Sign-up</a>
						</div>
						<div class="col col-4">
							<a href="<?php $site->urlTo('/experiments/norm-user/sign-in', true) ?>" class="button button-primary button-block button-large">Sign-in</a>
						</div>
						<div class="col col-4">
							<a href="<?php $site->urlTo('/experiments/norm-user/reset', true) ?>" class="button button-primary button-block button-large">Reset password</a>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php $site->getParts(array( 'sticky-footer/footer', 'shared/footer_html' )); ?>