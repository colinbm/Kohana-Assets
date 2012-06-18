<?php

function smarty_function_assets($params, &$smarty) {
	$type = $params['type'];
	return Assets::$type();
}