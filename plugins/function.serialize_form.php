<?php

/**
 * XCube_ActionForm のフィールドをすべて hidden で表示するプラグイン
 *
 * <{serialize_form form=$actionForm}>
 *
 * @param array $params
 * @param Smarty $smarty
 * @return string
 * @throws InvalidArgumentException
 */
function smarty_function_serialize_form(array $params, Smarty $smarty)
{
	if ( isset($params['form']) === false ) {
		throw new InvalidArgumentException('Missing argument "form"');
	}

	if ( is_object($params['form']) === false or ($params['form'] instanceof XCube_ActionForm) === false ) {
		throw new InvalidArgumentException('Unexpected form was given: form must be XCube_ActionForm object');
	}

	/** @var XCube_ActionForm $form */
	$form = $params['form'];
	$properties = $form->getFormProperties();

	foreach ( $properties as $name => $property ) {
		$value = htmlspecialchars($form->get($name), ENT_QUOTES, 'UTF-8');
		echo sprintf('<input type="hidden" name="%s" value="%s" />%s', $name, $value, "\n");
	}
}
