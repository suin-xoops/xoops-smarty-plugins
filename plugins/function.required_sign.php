<?php

/**
 * XCube_ActionForm 必須表示を出すSmartyプラグイン
 *
 * <{required_sign form=$actionForm name="title"}>
 *
 * @param array $params
 * @param Smarty $smarty
 * @return string
 * @throws InvalidArgumentException
 */
function smarty_function_required_sign(array $params, Smarty $smarty)
{
	if ( isset($params['form']) === false ) {
		throw new InvalidArgumentException('Missing argument "form"');
	}

	if ( isset($params['name']) === false ) {
		throw new InvalidArgumentException('Missing argument "name"');
	}

	if ( is_object($params['form']) === false or ($params['form'] instanceof XCube_ActionForm) === false ) {
		throw new InvalidArgumentException('Unexpected form was given: form must be XCube_ActionForm object');
	}

	$required = defined('_XOOPS_FORM_REQUIRED_HTML') ? _XOOPS_FORM_REQUIRED_HTML : '<span class="required">(required)</span>';
	$optional = defined('_XOOPS_FORM_OPTIONAL_HTML') ? _XOOPS_FORM_OPTIONAL_HTML : '';

	/** @var XCube_ActionForm $form */
	$form = $params['form'];
	$name = $params['name'];
	$properties = $form->mFieldProperties;

	if ( isset($properties[$name]) === false ) {
		return '';
	}

	/** @var XCube_FieldProperty $property  */
	$property = $properties[$name];

	if ( isset($property->mDepends['required']) ) {
		return $required;
	}

	return $optional;
}
