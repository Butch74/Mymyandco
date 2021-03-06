<?php
/**
 * Pts Prestashop Theme Framework for Prestashop 1.6.x
 *
 * @package   ptsthemepanel
 * @version   1.6
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
 *               <info@prestabrain.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

if (!class_exists('PtsThemePanelHelper'))
{
	/**
	 * PtsFrameworkHelper Class
	 */
	class PtsThemePanelHelper {

		/**
		 * get URI with http or https
		 */
		public function getURI()
		{
			$use_ssl = ((isset($this->ssl) && $this->ssl && Configuration::get('PS_SSL_ENABLED')) || Tools::usingSecureMode()) ? true : false;
			$protocol_content = ($use_ssl) ? 'https://' : 'http://';

			return $protocol_content.Tools::getHttpHost().__PS_BASE_URI__;
		}

		/**
		 * get Name of current page
		 */
		public static function getCurrentPagename()
		{
			$page_name = Dispatcher::getInstance()->getController();
			return (preg_match('/^[0-9]/', $page_name)) ? 'page_'.$page_name : $page_name;
		}

		/**
		 * get list of filename inside folder
		 */
		public static function getFileList($path, $e = null, $name_only = false)
		{
			$output = array();
			$directories = glob($path.'*'.$e);
			foreach ($directories as $dir)
			{
				$dir = basename($dir);
				if ($name_only)
					$dir = str_replace($e, '', $dir);

				$output[$dir] = $dir;
			}

			return $output;
		}

		public static function getUserProfiles($theme)
		{
			$folder = _PS_ALL_THEMES_DIR_.$theme.'/css/customize/*.css';
			$dirs = glob($folder);
			$output = array();
			foreach ($dirs as $dir)
			{
				$file = str_replace('.css', '', basename($dir));
				$output[] = array('skin' => $file, 'name' => (Tools::ucfirst($file)));
			}

			return $output;
		}

		public static function getLayoutDirections($theme)
		{
			$folder = _PS_ALL_THEMES_DIR_.$theme.'/layout/*';
			$dirs = glob($folder, GLOB_ONLYDIR);
			$output = array();
			foreach ($dirs as $dir)
			{
				$file = str_replace('.scss', '', basename($dir));
				$output[] = array('id' => $file, 'name' => (Tools::ucfirst($file)));
			}

			return $output;
		}

		/**
		 *
		 */
		public static function getSkins($theme)
		{
			$folder = _PS_ALL_THEMES_DIR_.$theme.'/sass/skins/*.scss';
			$dirs = glob($folder);
			$output = array();
			foreach ($dirs as $dir)
			{
				$file = str_replace('.scss', '', basename($dir));
				$output[] = array('id' => $file, 'name' => (Tools::ucfirst($file)));
			}

			return $output;
		}

		/**
		 * 
		 */
		public static function getPattern($theme)
		{
			$output = array();
			$path = _PS_ALL_THEMES_DIR_.$theme.'/assets/img/patterns/';
			if ($theme && is_dir($path))
			{
				$files = glob($path.'*');
				foreach ($files as $dir)
					if (preg_match('#.png|.jpg|.gif#', $dir))
						$output[] = str_replace('', '', basename($dir));
			}

			return $output;
		}

		public static function hookExec($hook_name, $hook_args = array(), $id_module = null, $array = array())
		{
			if ((!empty($id_module) && ! Validate::isUnsignedId($id_module)) || ! Validate::isHookName($hook_name))
				die(Tools::displayError());

			$context = Context::getContext();
			if (!isset($hook_args['cookie']) || !$hook_args['cookie'])
				$hook_args['cookie'] = $context->cookie;
			if (!isset($hook_args['cart']) || !$hook_args['cart'])
				$hook_args['cart'] = $context->cart;

			if ($id_module && $id_module != $array['id_module'])
				return;
			if (!($module_instance = Module::getInstanceByName($array['module'])) || !$module_instance->active)
				return;
			$retro_hook_name = Hook::getRetroHookName($hook_name);

			$hook_callable = is_callable(array($module_instance, 'hook'.$hook_name));
			$hook_retro_callable = is_callable(array($module_instance, 'hook'.$retro_hook_name));

			$output = '';
			if (($hook_callable || $hook_retro_callable))
			{
				if ($hook_callable)
					$output = $module_instance->{'hook'.$hook_name}($hook_args);
				else if ($hook_retro_callable)
					$output = $module_instance->{'hook'.$retro_hook_name}($hook_args);
			}
			// load other module widget on version 1.7
			elseif (Hook::isDisplayHookName($hook_name)) {
			    $output = $module_instance->renderWidget($hook_name, $hook_args);
			}
			// end update code <load other module widget on version 1.7>


			return $output;
		}

		public static function getLayoutSettingByTheme($theme)
		{
			$xml = _PS_ALL_THEMES_DIR_.$theme.'/features/layout.xml';
			$output = array();
			if (file_exists($xml))
			{
				$info = simplexml_load_string(Tools::file_get_contents($xml));
				if (isset($info->layout))
				{
					foreach ($info->layout as $key => $layouts)
					{ 
						$vars = get_object_vars($layouts);

						if (is_object($vars['item']))
						{
							$tmp = get_object_vars($vars['item']);
							$block = $tmp['block'];
							if (is_object($tmp['option']))
							{
								$options = $tmp['option'];
								$tmp['option'] = array();
								$tmp['option'][] = get_object_vars($options);
							}
							else{
								foreach ($tmp['option'] as $key => $o){
									$tmp['option'][$key] = get_object_vars($o);
								}
							}
							unset($tmp['block']);

							$vars['layout'][$block] = $tmp;
							$vars['layout'][$block]['values'] = (array)$tmp['option'];
							$vars['layout'][$block]['options']['query'] = (array)$tmp['option'];
							$vars['layout'][$block]['options']['id'] = 'key';
							$vars['layout'][$block]['options']['name'] = 'name';
						}
						else
						{
							foreach ($vars['item'] as $selector)
							{
								$tmp = get_object_vars($selector);
								//var_dump($tmp);die;
								if (is_array($tmp) && !empty($tmp))
								{
									$block = $tmp['block'];
									unset($tmp['block']);
									if (is_object($tmp['option']))
									{
										$options = $tmp['option'];
										$tmp['option'] = array();
										$tmp['option'][] = get_object_vars($options);
									}
									else
										foreach ($tmp['option'] as $key => $o)
											$tmp['option'][$key] = get_object_vars($o);

									$vars['layout'][$block] = $tmp;
									$vars['layout'][$block]['values'] = (array)$tmp['option'];
									$vars['layout'][$block]['options'] = array('query' => (array)$tmp['option'], 'id' => 'value', 'name' => 'label');
								}
							}
						}
						unset($vars['item']);

						$output = $vars;
						// /var_dump($output['layout']['logotype']);die;
					}
				}
			}

			return $output;
		}

		/**
		 *
		 */
		public static function renderEdtiorThemeForm($theme)
		{
			$customize_xml = _PS_ALL_THEMES_DIR_.$theme.'/features/themeeditor.xml';
			$output = array();
			if (file_exists($customize_xml))
			{
				$info = simplexml_load_file($customize_xml);
				if( isset($info->customization) ){
					$customs = get_object_vars($info->customization);
					foreach( $customs as $node => $custom ){
						$output[$node] = array();
						$items = get_object_vars($custom);

						foreach ( $items as $itm ) {
							if( !is_array($itm)){
								continue;
							}
							foreach( $itm as $item ){
								$vars = get_object_vars($item);
								if (is_object($vars['item'])) {
									$tmp = get_object_vars($vars['item']);
									$vars['selector'][] = $tmp;
								}
								else {
									foreach ($vars['item'] as $selector) {
										$tmp = get_object_vars($selector);
										if (is_array($tmp) && !empty($tmp))
											$vars['selector'][] = $tmp;
									}
								}
								unset($vars['item']);
						 		$output[$node][$vars['match']] = $vars;
					 		}
						}
					}

					//			echo '<pre>' . print_r( $output ,1 );die;
					return $output;
				}
			

				if (isset($info->selectors->items))
				{
					foreach ($info->selectors->items as $item)
					{
						$vars = get_object_vars($item);
						if (is_object($vars['item']))
						{
							$tmp = get_object_vars($vars['item']);
							$vars['selector'][] = $tmp;
						}
						else
						{
							foreach ($vars['item'] as $selector)
							{
								$tmp = get_object_vars($selector);
								if (is_array($tmp) && !empty($tmp))
									$vars['selector'][] = $tmp;
							}
						}
						unset($vars['item']);
						$output['selectors'][$vars['match']] = $vars;
					}
				}

				if (isset($info->elements->items))
				{
					foreach ($info->elements->items as $item)
					{
						$vars = get_object_vars($item);
						if (is_object($vars['item']))
						{
							$tmp = get_object_vars($vars['item']);
							$vars['selector'][] = $tmp;
						}
						else
						{
							foreach ($vars['item'] as $selector)
							{
								$tmp = get_object_vars($selector);
								if (is_array($tmp) && !empty($tmp))
									$vars['selector'][] = $tmp;
							}
						}
						unset($vars['item']);
						$output['elements'][$vars['match']] = $vars;
					}
				}
			}

			return $output;
		}

		/**
		 *
		 */
		public static function getLocalFonts( $file=null )
		{
			$font =  array(
				array('value' => 'Verdana, Geneva, sans-serif', 'label' => 'Verdana'),
				array('value' => 'Georgia, \'Times New Roman\', Times, serif', 'label' => 'Georgia'),
				array('value' => 'Arial, Helvetica, sans-serif', 'label' => 'Arial'),
				array('value' => 'Impact, Arial, Helvetica, sans-serif', 'label' => 'Impact'),
				array('value' => 'Tahoma, Geneva, sans-serif', 'label' => 'Tahoma'),
				array('value' => "'Trebuchet MS', Arial, Helvetica, sans-serif", 'label' => 'Trebuchet MS'),
				array('value' => "'Arial Black', Gadget, sans-serif", 'label' => 'Arial Black'),
				array('value' => "Times, 'Times New Roman', serif", 'label' => 'Times'),
				array('value' => "'Palatino Linotype', 'Book Antiqua', Palatino, serif", 'label' => 'Palatino Linotype'),
				array('value' => "'Lucida Sans Unicode', 'Lucida Grande', sans-serif", 'label' => 'Lucida Sans Unicode'),
				array('value' => "'MS Serif', 'New York', serif", 'label' => 'MS Serif'),
				array('value' => "'Comic Sans MS', cursive", 'label' => 'Comic Sans MS'),
				array('value' => "'Courier New', Courier, monospace", 'label' => 'Courier New'),
				array('value' => "'Lucida Console', Monaco, monospace", 'label' => 'Lucida Console')
			);
			
			return $font; 
		}

		public static function loadGoogleFonts( $file=null ){
			$list_fonts        		= array(); // 1
			$list_font_weights 		= array(); // 2

			if( $file ){  	// echo file_exists( $file );die;
				$content = file( $file );
				$webfonts          		= implode( '', $content );
				$list_fonts_decode 		= Tools::jsonDecode( $webfonts, true );

				foreach ( $list_fonts_decode['items'] as $key => $value ) {
					$item_family                     = $list_fonts_decode['items'][$key]['family'];
					$list_fonts[$item_family]        = array( 'value' =>  $item_family, 'label' => $item_family, 'fw' => $list_fonts_decode['items'][$key]['variants']  ) ; 
				// 	$list_font_weights[$item_family] = $list_fonts_decode['items'][$key]['variants'] ;
				}
				return $list_fonts;
			}
		}
		/**
		 * save data into framework
		 */
		public static function writeToCache($folder, $file, $value, $e = 'css')
		{
			$file = $folder.preg_replace('/[^A-Z0-9\._-]/i', '', $file).'.'.$e;

			$handle = fopen($file, 'w+');
			fwrite($handle, ($value));
			fclose($handle);
		}

		public static function getHookPositions()
		{
			return array(
				'displayTop',
				'displayHeaderRight',
				'displaySlideshow',
				'topNavigation',
				'displayMainmenu',
				'displayPromoteTop',
				'displayRightColumn',
				'displayLeftColumn',
				'displayHome',
				'displayFooter',
				'displayBottom',
				'displayContentBottom',
				'displayFootNav',
				'displayFooterTop',
				'displayMapLocal',
				'displayFooterBottom'
			);
		}

	}

}