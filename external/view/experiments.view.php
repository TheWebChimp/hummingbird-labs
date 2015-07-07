<?php

	class ExperimentsView extends View {

		function init() {
			global $site;
			$this->pages_dir = $site->baseDir('/pages/experiments');
			$this->parts_dir = $site->baseDir('/pages/experiments');
		}

		public function setBaseDir($dir) {
			$this->pages_dir = $dir;
			$this->parts_dir = $dir;
		}

	}

?>