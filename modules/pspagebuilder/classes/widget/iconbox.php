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

class PsWidgetIconbox extends PsWidgetPageBuilder {

	/**
	 *
	 */
	protected $max_image_size = 1048576;

	/**
	 *
	 */
	public $name = 'iconbox';
	public $group = 'iconbox';
	public $is_footer = 1;

	/**
	 *
	 */
	public function beforeAdminProcess($controller)
	{
		if (!Tools::getValue('widgetaction'))
			$controller->addJS(__PS_BASE_URI__.'modules/pspagebuilder/views/js/admin/image_gallery.js');
	}

	/**
	 *
	 */
	public static function getWidgetInfo()
	{
		return array('label' => ('Icon Box'), 'explain' => 'Create a block Icon Box', 'group' => 'prestabrain');
	}

	/**
	 *
	 */
	public function renderForm($data)
	{
		$key = time();

		$helper = $this->getFormHelper();

		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Sub Title'),
					'name' => 'sub_title',
					'default' => '',
					'lang' => true
				),
				array(
					'type' => 'text',
					'label' => $this->l('Icon File'),
					'name' => 'iconfile',
					'class' => 'imageupload',
					'default' => '',
					'id' => 'iconfile'.$key,
					'desc' => $this->l('Put image folder in the image folder')._PAGEBUILDER_IMAGE_URL_.'images/'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Icon Class'),
					'name' => 'iconclass',
					'class' => 'image',
					'default' => '',
					'desc' => $this->l('If you use Icon Class, The image at bellow will be not used. you can use Material Icons from https://design.google.com/icons/ ')
				),
				array(
					'type' => 'text',
					'label' => $this->l('Link'),
					'name' => 'linkurl',
					'default' => '',
					'lang' => true,
					'desc' => $this->l('Enter url if you want')
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('Content'),
					'name' => 'htmlcontent',
					'cols' => 40,
					'rows' => 20,
					'value' => '',
					'lang' => true,
					'default' => '',
					'autoload_rte' => false,
				),

				array(
					'type' => 'select',
					'label' => $this->l('Text Align'),
					'name' => 'text_align',
					'options' => array('query' => array(
							array('id' => 'feature-box-left', 'name' => $this->l('Left')),
							array('id' => 'feature-box-right', 'name' => $this->l('Right')),
							array('id' => 'feature-box-center', 'name' => $this->l('Center')),
						),
						'id' => 'id',
						'name' => 'name'),
					'default' => '',
				),
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
			'name' => '',
			'iconfile' => '',
			'iconclass' => '',
			'sub_title' => '',
			'linkurl' => '',
			'text_align' => '',
			'htmlcontent' => '',
			'iconurl' => ''
		);

		$setting = array_merge($t, $setting);

		$language_id = Context::getContext()->language->id;
		$setting['htmlcontent'] = isset($setting['htmlcontent_'.$language_id]) ? ($setting['htmlcontent_'.$language_id]) : '';
		$setting['linkurl'] = isset($setting['linkurl_'.$language_id]) ? ($setting['linkurl_'.$language_id]) : '';
		$setting['sub_title'] = isset($setting['sub_title_'.$language_id]) ? ($setting['sub_title_'.$language_id]) : '';

		if (!empty($setting['iconfile']))
			$setting['iconurl'] = _PAGEBUILDER_IMAGE_URL_.$setting['iconfile'];

		
		$output = array('type' => 'iconbox', 'data' => $setting);

		return $output;
	}

}
