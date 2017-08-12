<?php
/**
 * Pts Prestashop Theme Framework for Prestashop 1.6.x
 *
 * @package   pspagebuilder
 * @version   5.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
 *               <info@prestabrain.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

class PsWidgetBorderLine extends PsWidgetPageBuilder {

	public $name = 'borderline';
		public $is_menu = 1;
		public $is_footer = 1;
	public static function getWidgetInfo()
	{
		return array('label' => ('Border Line'), 'explain' => 'Create Border Line', 'group' => 'others');
	}

	public function renderForm($data)
	{
		$helper = $this->getFormHelper();

		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Border Width'),
					'name' => 'border_width',
					'default' => '1'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Border Style'),
					'name' => 'border_style',
					'default' => 'solid'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Border Color'),
					'name' => 'border_color',
					'default' => '#e1e1e1'
				)
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);

		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues($data),
			'languages' => Context::getContext()->controller->getLanguages(),
			'id_language' => $default_lang
		);
		return $helper->generateForm($this->fields_form);
	}

	public function renderContent($setting)
	{
		$t = array(
			'border_width' => '',
			'border_style' => '',
			'border_color' => ''
		);

		$setting = array_merge($t, $setting);

		$output = array('type' => 'borderline', 'data' => $setting);

		return $output;
	}

}
