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

class PsWidgetContactinfo extends PsWidgetPageBuilder {

	public $name = 'contactinfo';
	public $group = 'product';
	public $is_footer = 1;

	public static function getWidgetInfo()
	{
		return array('label' => ('Contactinfo'), 'explain' => 'Display Contactinfo', 'group' => 'prestabrain');
	}

	public function beforeAdminProcess($controller)
	{
		if (!Tools::getValue('widgetaction'))
			$controller->addJS(__PS_BASE_URI__.'modules/pspagebuilder/views/js/admin/image_gallery.js');
	}

	public function renderForm($data)
	{
		$helper = $this->getFormHelper();
		$key = time();
		$types = array();
		$types[] = array(
			'value' => 'tab',
			'text' => $this->l('Tab')
		);
		$types[] = array(
			'value' => 'carousel',
			'text' => $this->l('Carousel')
		);
		$lists_style = array(
			array('value' => '', 'text' => $this->l('default')),
			array('value' => 'style1', 'text' => $this->l('Style 1'))
		);
		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Banner'),
					'name' => 'imagefile',
					'class' => 'imageupload',
					'default' => '',
					'id' => 'imagefile'.$key,
					'desc' => 'Put image folder in the image folder ROOT_SHOP_DIR/img/'
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('Description'),
					'name' => 'description',
					'default' => '',
					'lang' => true,
					'autoload_rte' => true,
				),
				array(
					'type' => 'text',
					'label' => $this->l('Icon Adress'),
					'name' => 'iconadress',
					'default' => 'room',
					'desc' => $this->l('If you use Icon Class, The image at bellow will be not used. you can use Material Icons from https://design.google.com/icons/ '),
				),
				array(
				'type' => 'text',
					'label' => $this->l('Adress'),
					'name' => 'contactadress',
					'default' => '',
					'lang' => true
				),				
				array(
					'type' => 'text',
					'label' => $this->l('Icon Phone'),
					'name' => 'iconphone',
					'default' => 'phone',
					'desc' => $this->l('If you use Icon Class, The image at bellow will be not used. you can use Material Icons from https://design.google.com/icons/ '),
				),
				array(
				'type' => 'text',
					'label' => $this->l('Number Phone'),
					'name' => 'contactphone',
					'default' => ''
				),				
				array(
					'type' => 'text',
					'label' => $this->l('Icon Email'),
					'name' => 'iconemail',
					'default' => 'mail_outline',
					'desc' => $this->l('If you use Icon Class, The image at bellow will be not used. you can use Material Icons from https://design.google.com/icons/ '),
				),
				array(
				'type' => 'text',
					'label' => $this->l('Email'),
					'name' => 'contactemail',
					'default' => ''
				),
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);

		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$fields_value = $this->getConfigFieldsValues($data);

		$helper->tpl_vars = array(
			'fields_value' => $fields_value,
			'languages' => Context::getContext()->controller->getLanguages(),
			'id_language' => $default_lang
		);

		$string = '
					<script type="text/javascript">
						$(".imageupload").WPO_Gallery({gallery:false});
					</script>
		 
			';
		return '<div id="imageslist'.$key.'">'.$helper->generateForm($this->fields_form).$string.'</div>';
	}

	/**
	 *
	 */
	public function renderContent($setting)
	{
		$t = array(
			'imageurl' => '',
			'imagefile' => '',
			'description' => '',
			'iconadress' => '',
			'contactadress' => '',
			'iconphone' => '',
			'contactphone' => '',
			'iconemail' => '',
			'contactemail' => ''
		);
		$setting = array_merge($t, $setting);
		$language_id = Context::getContext()->language->id;
		$setting['description'] = isset($setting['description_'.$language_id]) ? ($setting['description_'.$language_id]) : '';
		$setting['contactadress'] = isset($setting['contactadress_'.$language_id]) ? ($setting['contactadress_'.$language_id]) : '';
		if ($setting['imagefile'])
			$setting['imageurl'] = _PAGEBUILDER_IMAGE_URL_.$setting['imagefile'];
		$output = array('type' => 'contactinfo', 'data' => $setting);
		return $output;
	}

}
