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

class AdminPspagebuilderMenuController extends ModuleAdminController {

	public $widget = null;
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

		$this->page_header_toolbar_title = $this->l('Menu Builder Editor');

		if ($this->profile->id)
			$this->page_header_toolbar_title .= ' - '.$this->l('Edit:').$this->profile->name;
		else
			$this->page_header_toolbar_title .= ' - '.$this->l('Create New A Profile');

		$this->page_header_toolbar_btn = array();

		$this->page_header_toolbar_btn['save'] = array(
			'href' => 'index.php?tab=AdminPspagebuilderMenu&token='.Tools::getAdminTokenLite('AdminPspagebuilderMenu').'&action=savelayout',
			'id' => 'frmsavealll',
			'desc' => $this->l('Save Layout Profile'),
			'js' => "$('#frmsavealll').submit(); return false;"
		);
		$token = Tools::getAdminTokenLite('AdminPspagebuilderMenu');

		if ($this->profile->id)
		{
			$this->page_header_toolbar_btn['default'] = array(
				'href' => 'index.php?tab=AdminPspagebuilderMenu&token='.Tools::getAdminTokenLite('AdminPspagebuilderMenu').
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
						$this->context->link->getAdminLink('AdminPspagebuilderMenu').'&token='.$token.'&id_pagebuilderprofile='.
						(int)$this->profile->id.'&duplicateprofile\'; else document.location = \''.
						$this->context->link->getAdminLink('AdminPspagebuilderMenu').
						'&id_pagebuilderprofile='.(int)$this->profile->id.'&token='.$token.'\';'
			);

			$this->page_header_toolbar_btn['export'] = array(
				'href' => 'index.php?tab=AdminPspagebuilderMenu&token='.Tools::getAdminTokenLite('AdminPspagebuilderMenu').
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
		Tools::redirectAdmin(AdminController::$currentIndex.'&id_pagebuilderprofile='.$profile->id.
						'&token='.Tools::getAdminTokenLite('AdminPspagebuilderMenu'));
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
					$profile->is_menu = 1;

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

		$tabAccess = Profile::getProfileAccess($this->context->employee->id_profile, Tab::getIdFromClassName('AdminPspagebuilderMenu'));

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
			$profile->is_footer = 0;
			$profile->is_menu = 1;
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
							Tools::getAdminTokenLite('AdminPspagebuilderMenu'));
		}

		if (Tools::getValue('setdefault'))
		{
			$profile = new PsPagebuilderprofile(Tools::getValue('id_pagebuilderprofile'));
			$profile->setDefault();
			$this->module->clearBLHLCache();

			Tools::redirectAdmin(AdminController::$currentIndex.'&id_pagebuilderprofile='.$profile->id.'&token='.
							Tools::getAdminTokenLite('AdminPspagebuilderMenu'));
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
		$widgets = (trim($this->profile->widget));
		$widgets = unserialize($widgets);

		$wkey = Tools::getValue('wkey');
		if (isset($widgets[$wkey]) && isset($widgets[$wkey]['config']))
		{
			$data = (($widgets[$wkey]['config']));
			echo $data;
		}
		exit();
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

			$content = trim((serialize($post)));

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
			$data = Tools::getValue('data') ? unserialize((trim(Tools::getValue('data')))) : array();
			if (isset($data['widget']))
				foreach ($data['widget'] as $key => $value)
					$data['widget'][$key] = Tools::stripslashes($this->mcrypt->decrypt(str_replace(' ', '+', ($value))));

			$data['widget']['wkey'] = Tools::getValue('wkey');
			$form = $this->profile->renderForm(Tools::getValue('wtype'), array('params' => $data['widget']));

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

		$widgets = $this->profile->getButtons('is_menu');

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
				$profiles = $this->profile->getListByMenu();

				$layoutjson = '';
				if ($this->profile->layout) {
					$layoutjson = str_replace('\'', '\\\'',trim($this->profile->layout) );
				}

				$output = array();
				$profiles = $this->profile->getListByMenu();
				foreach ($profiles as $row)
					$output[] = array('name' => ($row['name']) ? $row['name'] : $this->l('No Name'), 'id' => $row['id_pagebuilderprofile'],
						'isdefault' => $row['isdefault'], 'default' => $row['isdefault']);
				$sfxclss = PsPagebuilderHelper::detectSfxClasses();
				Media::addJsDef(array(
					'PS_PAGEbuilder_URL' => $link->getAdminLink('AdminPspagebuilderMenu'),
					'PTS_PAGEBUILDER_FILE_URI' => _PAGEBUILDER_IMAGE_URL_,
					'PTS_PAGEBUILDER_FILE_MANAGEMENT' => $link->getAdminLink('AdminPspagebuilderImage'),
					'widgetform' => $link->getAdminLink('AdminPspagebuilderMenu').'&ajax=true',
					'listwidgets' => $link->getAdminLink('AdminPspagebuilderMenu').'&ajax=true',
					'widgetdata' => ''
				));
				$template->assign(array(
					'savelayout' => $link->getAdminLink('AdminPspagebuilderMenu').'&savelayout=true',
					'id_pagebuilderprofile' => $this->profile->id,
					'showed' => 1,
					'profile' => $this->profile,
					'moduleInShop' => $this->profile->checkProfileInShop(),
					'profiles' => $output,
					'profile_link' => $link->getAdminLink('AdminPspagebuilderMenu'),
					'layoutjson' => $layoutjson,
					'cloudlink' => $link->getAdminLink('AdminPspagebuilderProfile').'&ajax=true&action=cloudelement',
					'sfxclss' => $sfxclss
				));

				return $template->fetch();
			}
		}
	}

}
