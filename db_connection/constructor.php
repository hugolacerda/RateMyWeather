<?php

class Builder {
	function __construct() {
		$this->phase = 1;
	}
}

$b = new Builder();
echo $b->phase;

?>