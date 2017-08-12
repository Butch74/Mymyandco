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

class PsWidgetImage extends PsWidgetPageBuilder {

	/**
	 *
	 */
	protected $max_image_size = 1048576;

	/**
	 *
	 */
	public $name = 'image';
	public $group = 'image';
		public $is_menu = 1;
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
		return array('label' => ('Single Image'), 'explain' => 'Create Images Mini Gallery From Folder', 'group' => 'image');
	}

	/**
	 *
	 */
	public function renderForm($data)
	{
		$key = time();

		$helper = $this->getFormHelper();
		$soption = array(
			array(
				'id' => 'active_on',
				'value' => 1,
				'label' => $this->l('Enabled')
			),
			array(
				'id' => 'active_off',
				'value' => 0,
				'label' => $this->l('Disabled')
			)
		);

		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Image File'),
					'name' => 'imagefile',
					'class' => 'imageupload',
					'default' => '',
					'id' => 'imagefile'.$key,
					'desc' => 'Put image folder in the image folder ROOT_SHOP_DIR/img/'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Image size'),
					'name' => 'size',
					'class' => 'image',
					'default' => '',
					'id' => 'imagesize'.$key,
					'desc' => "Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. 
						Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size."
				),
	      array(
	          'type' => 'select',
	          'label' => $this->l( 'CSS3 Animation' ),
	          'name' => 'animation',
	          'options' => array(  'query' => array(
	              array('id' => 'default', 'name' => $this->l('none')),
	              array('id' => 'effect-v1', 'name' => $this->l('effect v1')),
	              array('id' => 'effect-v2', 'name' => $this->l('effect v2')),
	              	array('id' => 'effect-v3', 'name' => $this->l('effect v3')),
	                array('id' => 'effect-v4', 'name' => $this->l('effect v4')),
	                array('id' => 'effect-v5', 'name' => $this->l('effect v5')),
	                array('id' => 'effect-v6', 'name' => $this->l('effect v6')),
	                array('id' => 'effect-v7', 'name' => $this->l('effect v7')),
	                array('id' => 'effect-v8', 'name' => $this->l('effect v8')),
	                array('id' => 'effect-v9', 'name' => $this->l('effect v9')),
	                array('id' => 'effect-v10', 'name' => $this->l('effect v10'))
	          ),
	          'id' => 'id',
	          'name' => 'name' ),
	          'default' => "",
	       ),
				array(
					'type' => 'text',
					'label' => $this->l('Link'),
					'name' => 'link_url',
					'class' => 'link',
					'default' => '',
					'id' => 'link'.$key,
					'desc' => 'Enter url if you want this image to have link'
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
			'image' => '',
			'imagesize' => '',
			'animation' => '',
			'imageurl' => '',
		);

		$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
		$url = Tools::htmlentitiesutf8($protocol.$_SERVER['HTTP_HOST'].__PS_BASE_URI__);

		$setting = array_merge($t, $setting);

		$size = explode('x', $setting['size']);

		$setting['thumbnailurl'] = _PAGEBUILDER_IMAGE_URL_.$setting['imagefile'];
		$setting['imageurl'] = _PAGEBUILDER_IMAGE_URL_.$setting['imagefile'];
		if (count($size) == 2)
		{
			$cache = _PS_CACHE_DIR_.'pspagebuilder/';
			if (!file_exists($cache.$setting['imagefile']))
			{
				if (!is_dir($cache))
					mkdir($cache, 0755);
				if (ImageManager::resize(_PAGEBUILDER_IMAGE_DIR_.$setting['imagefile'], $cache.$setting['imagefile'], $size[0], $size[1]))
					$setting['thumbnailurl'] = $url.'cache/pspagebuilder/views/img/'.$setting['imagefile'];
			}
			else
				$setting['thumbnailurl'] = $url.'modules/pspagebuilder/views/img/'.$setting['imagefile'];
		}

		$output = array('type' => 'image', 'data' => $setting);

		return $output;
	}

}
?>