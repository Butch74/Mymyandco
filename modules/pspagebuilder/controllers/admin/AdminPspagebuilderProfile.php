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

require_once(_PS_MODULE_DIR_.'pspagebuilder/loader.php');
require_once(_PS_CLASS_DIR_.'PhpEncryptionLegacyEngine.php');

class AdminPspagebuilderProfileController extends ModuleAdminController {

	public $widget = null;
	public $profile;
	public $mcrypt;

	public function __construct()
	{
		$this->bootstrap = true;
		$this->display = 'view';
		$this->addRowAction('view');

		parent::__construct();
		$this->profile = new PsPagebuilderprofile(Tools::getValue('id_pagebuilderprofile'), null, $this->context->shop->id);
		$this->profile->loadWidgets();

		if (Tools::getValue('dupplicatforalllanguages'))
			$this->module->dupplicatForAllLanguages();

		$this->mcrypt = new PhpEncryptionLegacyEngineCore(_PAGEBUILDER_MCRYPT_KEY_);
	}

	public function initPageHeaderToolbar()
	{
		parent::initPageHeaderToolbar();
		$this->context->controller->addJS(__PS_BASE_URI__.'js/jquery/jquery-1.11.0.min.js');
		$this->context->controller->addCSS(__PS_BASE_URI__.'modules/pspagebuilder/views/css/admin/style.css');
		if (Tools::getValue('widgetaction'))
		{
			$this->context->controller->addCSS(__PS_BASE_URI__.'modules/pspagebuilder/views/css/admin/widgetaction.css');
			return;
		}

		$this->context->controller->addJqueryUI('ui.sortable');
		$this->context->controller->addJqueryUI('ui.resizable');
		$this->context->controller->addJqueryUI('ui.dialog');

		$this->profile->widgetBeforeProcess($this);
		if (file_exists(_PS_ROOT_DIR_.'/js/admin/tinymce.inc.js'))
			$tinymce_inc = _PS_JS_DIR_.'admin/tinymce.inc.js';
		else
			$tinymce_inc = _PS_JS_DIR_.'tinymce.inc.js';
		$this->addJS(array(
			_PS_JS_DIR_.'tiny_mce/tiny_mce.js',
			$tinymce_inc
		));

		$this->addCSS(array(
			_PS_JS_DIR_.'jquery/plugins/timepicker/jquery-ui-timepicker-addon.css',
		));

		$this->context->controller->addJqueryPlugin('colorpicker');

		if (file_exists(_PS_THEME_DIR_.'modules/pspagebuilder/views/js/admin/data.js'))
			$this->context->controller->addJS(_THEME_DIR_.'modules/pspagebuilder/views/js/admin/data.js');
		else
			$this->context->controller->addJS(__PS_BASE_URI__.'modules/pspagebuilder/views/js/admin/data.js');

		if (file_exists(_PS_THEME_DIR_.'modules/pspagebuilder/views/js/admin/layout.js'))
			$this->context->controller->addJS(_THEME_DIR_.'modules/pspagebuilder/views/js/admin/layout.js');
		else
			$this->context->controller->addJS(__PS_BASE_URI__.'modules/pspagebuilder/views/js/admin/layout.js');

		if (file_exists(_PS_THEME_DIR_.'modules/pspagebuilder/views/js/admin/widget.js'))
			$this->context->controller->addJS(_THEME_DIR_.'modules/pspagebuilder/views/js/admin/widget.js');
		else
			$this->context->controller->addJS(__PS_BASE_URI__.'modules/pspagebuilder/views/js/admin/widget.js');

		$this->page_header_toolbar_title = $this->l('Page Builder Editor');

		if ($this->profile->id)
			$this->page_header_toolbar_title .= ' - '.$this->l('Edit:').$this->profile->name;
		else
			$this->page_header_toolbar_title .= ' - '.$this->l('Create New A Profile');
		$this->page_header_toolbar_btn = array();

		$this->page_header_toolbar_btn['save'] = array(
			'href' => 'index.php?tab=AdminPspagebuilderProfile&token='.Tools::getAdminTokenLite('AdminPspagebuilderProfile').'&action=savelayout',
			'id' => 'frmsavealll',
			'desc' => $this->l('Save Layout Profile'),
			'js' => "$('#frmsavealll').submit(); return false;"
		);
		$token = Tools::getAdminTokenLite('AdminPspagebuilderProfile');

		if ($this->profile->id)
		{
			$this->page_header_toolbar_btn['default'] = array(
				'href' => 'index.php?tab=AdminPspagebuilderProfile&token='.Tools::getAdminTokenLite('AdminPspagebuilderProfile').
						'&setdefault=1&id_pagebuilderprofile='.$this->profile->id,
				'id' => 'default',
				'desc' => $this->l('Set This As Default'),
				'icon' => 'process-icon-save'
			);

			$this->page_header_toolbar_btn['duplicate'] = array(
				'short' => $this->l('Duplicate', null, null, false),
				'href' => '#',
				'desc' => $this->l('Duplicate', null, null, false),
				'confirm' => 1,
				'js' => 'if (confirm(\''.$this->l('Are you sure to copy this?', null, true, false).' ?\')) document.location = \''.
						$this->context->link->getAdminLink('AdminPspagebuilderProfile').'&token='.
						$token.'&id_pagebuilderprofile='.(int)$this->profile->id.'&duplicateprofile\'; else document.location = \''.
						$this->context->link->getAdminLink('AdminPspagebuilderProfile').'&id_pagebuilderprofile='.
						(int)$this->profile->id.'&token='.$token.'\';'
			);

			$this->page_header_toolbar_btn['export'] = array(
				'href' => 'index.php?tab=AdminPspagebuilderProfile&token='.Tools::getAdminTokenLite('AdminPspagebuilderProfile').
						'&exportProfile=1&id_pagebuilderprofile='.$this->profile->id,
				'id' => 'export',
				'desc' => $this->l('Export This')
			);
		}
	}

	public function processDuplicate()
	{
		$profile = new PsPagebuilderprofile(Tools::getValue('id_pagebuilderprofile'));
		$profile->name = $this->l('Copy Of').'  '.$profile->name;
		$profile->id = 0;
		$profile->isdefault = 0;
		$profile->id_pagebuilderprofile = 0;
		$errors = array();
		if ($profile->id <= 0 && !$profile->add())
			$errors[] = $this->displayError($this->l('The slide could not be added.'));

		Tools::redirectAdmin(AdminController::$currentIndex.'&id_pagebuilderprofile='.$profile->id.'&token='.
						Tools::getAdminTokenLite('AdminPspagebuilderProfile'));
	}
	/**
	 *
	 */
	public function postProcess()
	{
		if (Tools::getValue('exportProfile'))
		{
			if ($this->profile->id)
			{
				$export = array();
				$export['layout'] = $this->profile->layout;
				$export['widget'] = $this->profile->widget;

				$export_file = fopen(_PAGEBUILDER_EXPORT_DIR_.$this->profile->name.'.txt', 'w') or die('Unable to open file!');
				fwrite($export_file, serialize($export));
				fclose($export_file);
				$this->context->smarty->assign(array('export_msg' => $this->l('Successful export: ')._PAGEBUILDER_EXPORT_DIR_.$this->profile->name.'.txt'));
			}
		}

		/* import data */
		if (Tools::isSubmit('submitpspagebuilderImport') && isset($_FILES['import_file']))
		{
			$tmp = $_FILES['import_file']['tmp_name'];

			$content = trim(Tools::file_get_contents($tmp));

			if ($content)
			{
				$data = unserialize($content);
				if (isset($data['layout']) && isset($data['widget']))
				{
					$profile = new PsPagebuilderprofile();
					$profile->layout = $data['layout'];
					$name = trim(Tools::getValue('import_name'));
					$profile->name = $name ? $name : 'profile-'.time();
					$profile->widget = $data['widget'];
					if ($profile->id <= 0)
					{
						if (!$profile->add())
							$this->displayError($this->l('The slide could not be added.'));
					}
					else
						$this->errors[] = Tools::displayError('You do not have permission to add this.');
				}
			}
			$this->module->clearBLHLCache();
		}

		$tabAccess = Profile::getProfileAccess($this->context->employee->id_profile, Tab::getIdFromClassName('AdminPspagebuilderProfile'));

		if (Tools::getIsset('duplicateprofile'))
		{
			if ($tabAccess['add'] === '1')
				$this->processDuplicate();
			else
				$this->errors[] = Tools::displayError('You do not have permission to add this.');
			$this->module->clearBLHLCache();
		}

		if (Tools::isSubmit('savelayoutbuilder'))
		{
			$profile = new PsPagebuilderprofile(Tools::getValue('id_pagebuilderprofile'));
			$profile->layout = Tools::getValue('wpolayout');
	
			$wpowidget = Tools::getValue('wpowidget');
			if ($wpowidget)
				foreach ($wpowidget as &$value)
					$value['config'] = Tools::stripslashes($value['config']);

			$profile->widget = serialize($wpowidget);

			$name = trim(Tools::getValue('name'));
			$profile->name = $name ? $name : 'profile-'.time();
			$errors = array();
			if ($profile->id && !$profile->update())
				$errors[] = $this->displayError($this->l('The slide could not be updated.'));
			else
				if ($profile->id <= 0 && !$profile->add())
					$errors[] = $this->displayError($this->l('The slide could not be added.'));

			$this->module->clearBLHLCache();
			Tools::redirectAdmin(AdminController::$currentIndex.'&id_pagebuilderprofile='.$profile->id.'&token='.
							Tools::getAdminTokenLite('AdminPspagebuilderProfile'));
		}

		if (Tools::getValue('setdefault'))
		{
			$profile = new PsPagebuilderprofile(Tools::getValue('id_pagebuilderprofile'));
			$profile->setDefault();

			$this->module->clearBLHLCache();
			Tools::redirectAdmin(AdminController::$currentIndex.'&id_pagebuilderprofile='.$profile->id.'&token='.
							Tools::getAdminTokenLite('AdminPspagebuilderProfile'));
		}
	}

	public function ajaxDoDeleteProfile()
	{
		if (Tools::getValue('id_pagebuilderprofile'))
		{
			$profile = new PsPagebuilderprofile(Tools::getValue('id_pagebuilderprofile'));
			if (!$profile->isDefault())
				$profile->delete();
		}
		$output = new stdClass();
		$output->delete = 1;
		$output->id = (int)Tools::getValue('id_pagebuilderprofile');
		echo Tools::jsonEncode($output);
		exit();
	}

	public function ajaxDoWidgetdata()
	{
		$widgets = trim($this->profile->widget);
		$widgets = unserialize($widgets);

		$wkey = Tools::getValue('wkey');
		if (isset($widgets[$wkey]) && isset($widgets[$wkey]['config']))
		{
			$data = $widgets[$wkey]['config'];
			echo $data;
		}
		exit();
	}

	public function ajaxDoCloudelement(){

		$template = $this->createTemplate('cloud_element.tpl');
		 

		$template->assign(array(
			'showed' => 1,
			'code'    => '{"index":0,"cls":"","bgcolor":"#7800f7","bgimage":"","fullwidth":"0","parallax":"0","sfxcls":null,"margin":"","padding":"","cols":[{"index":0,"cls":"","sfxcls":"info","bgcolor":"#00c1d1","bgimage":"","inrow":0,"lgcol":"6","mdcol":4,"smcol":6,"xscol":12,"margin":"12px inherit inherit inherit","padding":"","css":"","widgets":[{"cls":"","wtype":"image","wkey":"key_1480672771759","name":"","data_config":"YToyOntzOjY6IndpZGdldCI7YToxNTp7czoxNzoic2F2ZXBzcGFnZWJ1aWxkZXIiO3M6NDQ6InhCMlBLYzFSbGZlQVFQWDlvZHo4eTErMDFQMWhpNkVkVW5IOGJob0ZIZWc9IjtzOjQ6IndrZXkiO3M6NjQ6IklBdzJVK0V3SERPVTBMNmdBQmEzRXpqOFhWUW5uSW16TDMrRDh1bEF4dWhJTUxpZ2VjNUd6M3NiR1Z6MWY1ejgiO3M6NToid3R5cGUiO3M6NDQ6InFJakRsTU9tQkpuWHNnUGZNc0hwTTg5RjhzUHp6NVluU1BBV0w1MXcyT1k9IjtzOjExOiJ3aWRnZXRfbmFtZSI7czo0NDoiVFF5Qkd1dDE0cGVTc25wZUhxbWZmQUE4NFV3VmlDWm9mSDJaajVsTXhydz0iO3M6MTA6InNob3dfdGl0bGUiO3M6NDQ6IkRYZTRqODB2eWpockpEUFJTNERPYXlvYkNnekE2bmp0MVJxMzhMVzFQajg9IjtzOjE0OiJ3aWRnZXRfdGl0bGVfMSI7czo0NDoiclNvc1F0c2d2OEUwU3QyYnR5c2hXRlNWK0tRQmpHUnFrUnI3cDZRbWRRWT0iO3M6MTQ6IndpZGdldF90aXRsZV8yIjtzOjQ0OiJlNGRlSTNybWF1a1lPaDdlemZtcStzdi9mcnYrTDRuN05GaHVoTENCYWpFPSI7czoxMjoiYWRkaXRpb25fY2xzIjtzOjQ0OiJtUzlhbllBd2NUNVVVWDJSSFRPemdKNDFMZTA3ZEJYTXhCSVhYRm1qSUQwPSI7czo4OiJzdHlsZWNscyI7czo0NDoieGF3MlJEQ3Q1UTB6L3FKSTVXZ3BCc3d6QXM4KzVuZFVpOVFSOXVjS0doaz0iO3M6OToiaW1hZ2VmaWxlIjtzOjQ0OiJZOTVOWEVRZUFhV2QwRFJlZk9MZjZhMndlWmF0WVZRVnB3L3FTQS9CSnJzPSI7czo0OiJzaXplIjtzOjQ0OiJ3anJXMTNRcG9TLzQ4MGpxdjBsSGR5a3hvY2Q5RjJKUW9wcUgwa2Z5Y0dNPSI7czo5OiJhbmltYXRpb24iO3M6NDQ6Im1ORWNJVzQ5MGhIM3N4QlJGajhkdGtGTjB2WUxSdXZ2WXY1SDlNL0pGVUE9IjtzOjg6ImxpbmtfdXJsIjtzOjQ0OiJBb3REU3NnSmMrK1VTVTFsVUZrY1pFRmE5UFNjUnkrN2xwcldYaUVYcGU4PSI7czo1OiJ0b2tlbiI7czo2NDoiYWxvdUJjQmI2Si9zcXN6YXNoaktZQ2twYSsvdFRPSGxlbk9XMm5LUld2TWFWckN0RE1oeEZwV1BEeGoyaTFnKyI7czoxMzoiY29udHJvbGxlclVyaSI7czo2NDoiOHNaSWtzTzdUbm55UlFVRHNMdTBTMzlBcDBaT0VFZUx6Y3pzdWlVaHBYSHlaVEdQNzl1alFIQXpTbUMwMmltWCI7fXM6NDoid2tleSI7czoxNzoia2V5XzE0ODA2NTIwMjE2OTMiO30="}],"rows":[],"border":"","bradius":"","textcolor":"#004624","fontsize":""},{"index":0,"cls":"","sfxcls":"","bgcolor":"","bgimage":"","inrow":0,"lgcol":"6","mdcol":4,"smcol":6,"xscol":12,"margin":"","padding":"","css":"","widgets":[],"rows":[]}],"textcolor":"#00bdbf","fontsize":"","border":"","bradius":""}'
			 
		));

		return $template->fetch();
	}


	public function ajaxDoSavewidget()
	{
		$wpost = Tools::getIsset('wkey') ? Tools::getAllValues() : null;
		if (Tools::getValue('controller') && $wpost)
		{
			$exls = array('action', 'ajax', 'controller', 'id_tab');

			foreach ($exls as $e)
				if (isset($wpost[$e]))
					unset($wpost[$e]);
			$post = array();
			$post['widget'] = $wpost;
			$post['wkey'] = Tools::getValue('wkey');

			foreach ($post['widget'] as $key => $value)
			{
				if (is_array($value))
				{
					if ($key != 'categorytab' && $key != 'promotions' && $key != 'products_slideshow')
					{
						foreach ($value as &$val)
							$val = html_entity_decode($val, ENT_QUOTES, 'UTF-8');
						$post['widget'][$key] = $this->mcrypt->encrypt(implode(',', $value));
					}
				}
				else
				{
					$value = html_entity_decode($value, ENT_QUOTES, 'UTF-8');
					$post['widget'][$key] = preg_replace('#\n|\r|\t#', '', $this->mcrypt->encrypt($value));
				}
			}

			if (Tools::getIsset('categorytab') && Tools::getValue('categorytab'))
				$post['widget']['categorytab'] = $this->mcrypt->encrypt(Tools::jsonEncode(Tools::getValue('categorytab')));
			if (Tools::getIsset('promotions') && Tools::getValue('promotions'))
				$post['widget']['promotions'] = $this->mcrypt->encrypt(Tools::jsonEncode(Tools::getValue('promotions')));
			if (Tools::getIsset('products_slideshow') && Tools::getValue('products_slideshow'))
				$post['widget']['products_slideshow'] = $this->mcrypt->encrypt(Tools::jsonEncode(Tools::getValue('products_slideshow')));

			$content = trim(serialize($post));

			$output = new stdClass();
			$output->wkey = $post['wkey'];
			$output->config = $content;
			$output->name = isset($wpost['widget_name']) ? $wpost['widget_name'] : '';

			echo Tools::jsonEncode($output);
			exit();
		}
	}

	public function ajaxDoWidgetform()
	{
		if (Tools::getValue('wtype'))
		{
			$template = $this->createTemplate('widgetform.tpl');
			$data = Tools::getValue('data') ? unserialize(trim(Tools::getValue('data'))) : array();

			if (isset($data['widget']))
			{
				foreach ($data['widget'] as $key => $value)
					$data['widget'][$key] = Tools::stripslashes($this->mcrypt->decrypt(str_replace(' ', '+', ($value))));

				$data['widget']['wkey'] = Tools::getValue('wkey');
			}
			$widget_data = isset($data['widget']) ? $data['widget'] : array();

			$form = $this->profile->renderForm(Tools::getValue('wtype'), array('params' => $widget_data));

			$template->assign(array(
				'showed' => 1,
				'wkey' => Tools::getValue('wkey'),
				'form' => $form,
			));

			return $template->fetch();
		}
	}

	public function ajaxDoEditwidget()
	{
		return $this->ajaxDoWidgetform();
	}

	public function ajaxDoListwidgets()
	{
		$template = $this->createTemplate('widgets.tpl');
		$widgets = $this->profile->getButtons();

		$template->assign(array(
			'showed' => 1,
			'groups' => $widgets['groups'],
			'widgets' => $widgets['widgets']
		));

		return $template->fetch();
	}

	public function renderView()
	{
		if (Tools::getValue('widgetaction'))
		{
			$wobj = $this->profile->loadWidgetObject(Tools::getValue('type'), $this);

			if ($wobj)
			{
				$template = $this->createTemplate('widget_action_content.tpl');
				$content = $wobj->renderAdminContent();

				$template->assign(array(
					'content' => $content,
					'test' => ''
				));
			}
			else
				$template = $this->createTemplate('widegt_error.tpl');
			return $template->fetch();
		}
		else
		{
			if ($this->ajax)
			{
				$method = 'ajaxDo'.Tools::ucfirst(trim(Tools::getValue('action')));
				if (method_exists($this, $method))
					echo $this->{$method}();

				exit();
			}
			else
			{
				$link = $this->context->link;

				$template = $this->createTemplate('editor.tpl');

				$profiles = $this->profile->getList();

				$layoutjson = '';
				if ($this->profile->layout) {
					$layoutjson = str_replace('\'', '\\\'',trim($this->profile->layout) );
				}

				$output = array();
				$profiles = $this->profile->getList();
				foreach ($profiles as $row)
					$output[] = array('name' => ($row['name']) ? $row['name'] : $this->l('No Name'),
						'id' => $row['id_pagebuilderprofile'], 'isdefault' => $row['isdefault']);

				$sfxclss = PsPagebuilderHelper::detectSfxClasses();

				Media::addJsDef(array(
					'PS_PAGEbuilder_URL' => $link->getAdminLink('AdminPspagebuilderProfile'),
					'PTS_PAGEBUILDER_FILE_URI' => _PAGEBUILDER_IMAGE_URL_,
					'PTS_PAGEBUILDER_FILE_MANAGEMENT' => $link->getAdminLink('AdminPspagebuilderImage'),
					'widgetform' => $link->getAdminLink('AdminPspagebuilderProfile').'&ajax=true',
					'listwidgets' => $link->getAdminLink('AdminPspagebuilderProfile').'&ajax=true',
					'widgetdata' => ''
				));
				$template->assign(array(
					'savelayout' => $link->getAdminLink('AdminPspagebuilderProfile').'&savelayout=true',
					'id_pagebuilderprofile' => $this->profile->id,
					'showed' => 1,
					'themename' => _THEME_NAME_,
					'cloudlink' => $link->getAdminLink('AdminPspagebuilderProfile').'&ajax=true&action=cloudelement',
					'profile' => $this->profile,
					'moduleInShop' => $this->profile->checkProfileInShop(),
					'profiles' => $output,
					'profile_link' => $link->getAdminLink('AdminPspagebuilderProfile'),
					'layoutjson' => $layoutjson,
					'sfxclss' => $sfxclss
				));

				return $template->fetch();
			}
		}
	}

}
