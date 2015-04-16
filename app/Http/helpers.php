<?php

function delete_form($routeParams, $label = 'Delete') {
	$form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);
	
	$form .= Form::submit($label, ['class' => 'btn btn-danger']);
	
	return $form .= Form::close();
}

function number_form($name, $default = null, $attributes = null) {
	$generated = '<input ';
	if ($attributes)
		foreach ($attributes as $key => $value) {
			$generated .= $key . '="';
			$generated .= $value . '" ';
		}
	$generated .= 'name="' . $name . '" type="number" ';
	if (!is_null($default))
		$generated .= 'value="' . $default . '" ';
	$generated .= 'id="' . $name . '">';
	
	return $generated;
}
