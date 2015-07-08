<?php
	$default = '<?php
	echo "Hello World";
?>';
?>
<?php $site->getParts(array( 'shared/header_html' )); ?>

		<div class="console-wrapper">
			<header class="console-header">
				<div class="boxfix-vert">
					<div class="margins">
						<h2><i class="fa fa-fw fa-code"></i> Console</h2>
					</div>
				</div>
			</header>
			<section>
				<div class="boxfix-vert">
					<div class="margins">
						<div class="row row-10">
							<div class="col col-6">
								<form id="form-code" class="form-code" action="" method="post">
									<div class="form-group codemirror" data-mode="php">
										<textarea name="code" id="code"><?php echo $default; ?></textarea>
									</div>
									<div class="text-right">
										<button type="submit" class="button button-primary">Execute</button>
									</div>
								</form>
							</div>
							<div class="col col-6">
								<div class="box box-output">
									<div class="console-output"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="console-push"></div>
		</div>

		<footer class="console-footer">
			<div class="boxfix-vert">
				<div class="margins">
					<div class="footer-copyright">
						<small class="cf">
							<span class="copyright-left">Copyright &copy; 2015 biohzrdmx</span>
							<span class="copyright-right">Made with <strong>Hummingbird</strong> &amp; <strong>Chimplate</strong></span>
						</small>
					</div>
				</div>
			</div>
		</footer>

<?php $site->getParts(array( 'shared/footer_html' )); ?>