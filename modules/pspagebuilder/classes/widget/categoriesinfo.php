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

class PsWidgetCategoriesinfo extends PsWidgetPageBuilder {

	public $name = 'categoriesinfo';

	public static function getWidgetInfo()
	{
		return array('label' => 'Categories Info', 'explain' => 'Show Categories info to Front Office', 'group' => 'prestashop');
	}

	public function renderForm($data)
	{
		$helper = $this->getFormHelper();
		$lists = array(
			array('value' => 'grid', 'text' => $this->l('Grid')),
			array('value' => 'list1', 'text' => $this->l('List 1')),
			array('value' => 'list2', 'text' => $this->l('List 2')),
		);
		$modes = array(
			array('value' => 'normal', 'text' => $this->l('Normal')),
			array('value' => 'carousel', 'text' => $this->l('Carousel'))
		);
		$this->fields_form[1]['form'] = array(
			'input' => array(
				array(
					'type' => 'category_tab',
					'label' => 'Categories',
					'name' => 'categorytab',
					'default' => '',
				),
				array(
					'type' => 'categoryBox',
					'label' => 'Categories',
					'name' => 'categoryBox',
					'default' => '',
				)
			)
		);

		$values = $this->getConfigFieldsValues($data);
		$selected_cat = $values['categoryBox'];
		$categories = explode(',', $selected_cat);
		$root = Category::getRootCategory();

		$tree = new HelperTreeCategories('associated-categories-tree', 'Associated categories');
		$tree->setRootCategory($root->id)->setUseCheckBox(true)->setUseSearch(true)->setSelectedCategories($categories);
		$category_tpl = $tree->render();

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
					'type' => 'category_tab',
					'label' => $this->l('Categories'),
					'name' => 'categorytab',
					'category_tpl' => $category_tpl,
					'default' => '',
				),
				array(
					'type' => 'categoryBox',
					'label' => '',
					'name' => 'categoryBox',
					'default' => '',
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Show Image'),
					'name' => 'show_image',
					'values' => $soption,
					'default' => '1'
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Show Category Title'),
					'name' => 'show_cat_title',
					'values' => $soption,
					'default' => '1'
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Show Category Description'),
					'name' => 'show_description',
					'values' => $soption,
					'default' => '0'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Category Description Limit'),
					'name' => 'limit_description',
					'default' => 25,
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Show Sub Categories'),
					'name' => 'show_sub_category',
					'values' => $soption,
					'default' => '0'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Sub Category Limit'),
					'name' => 'limit_subcategory',
					'default' => 5,
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Show Product Number'),
					'name' => 'show_nb_product',
					'values' => $soption,
					'default' => '0'
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Show Shopnow'),
					'name' => 'show_shopnow',
					'values' => $soption,
					'default' => '0'
				),
				
				array(
					'type' => 'text',
					'label' => $this->l('Limit'),
					'name' => 'limit',
					'default' => 6,
				),
				array(
					'type' => 'text',
					'label' => $this->l('Number Columns On Large Desktops.'),
					'name' => 'columns',
					'desc' => $this->l('The maximum column items  in tab.'),
					'default' => '4'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Number Columns On Small Desktops'),
					'name' => 'nbr_desktops',
					'default' => '4'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Number Columns On Tablets'),
					'name' => 'nbr_tablets',
					'default' => '2'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Number Columns On Mobile'),
					'name' => 'nbr_mobile',
					'default' => '1'
				),
				array(
					'type' => 'select',
					'label' => $this->l('List Mode'),
					'name' => 'list_mode',
					'options' => array('query' => $lists,
						'id' => 'value',
						'name' => 'text'),
					'default' => 'grid',
				),
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);

		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$fields_value = $this->getConfigFieldsValues($data);
		$selected_cat = $values['categoryBox'];
		$fields_value['categoryBox'] = $values['categoryBox'] ? explode(',', $values['categoryBox']) : array();
		$fields_value['categorytab'] = $values['categorytab'] ? Tools::jsonDecode($values['categorytab'], true) : '';

		$helper->tpl_vars = array(
			'fields_value' => $fields_value,
			'languages' => Context::getContext()->controller->getLanguages(),
			'id_language' => $default_lang
		);
		return $helper->generateForm($this->fields_form);
	}

	public function renderContent($setting)
	{
		$t = array(
			'categorytab' => '',
			'categoryBox' => '',
			'show_image' => 1,
			'show_cat_title' => 1,
			'show_description' => 0,
			'limit_description' => 25,
			'show_sub_category' => 0,
			'limit_subcategory' => 5,
			'show_nb_product' => 0,
			'show_shopnow' => 0,
			'limit' => 6,
			'columns' => 4,
			'list_mode' => 'grid',
			'display_mode' => 'carousel',
			'nbr_desktops' => 4,
			'nbr_tablets' => 2,
			'nbr_mobile' => 1,
		);

		$setting = array_merge($t, $setting);
		$context = Context::getContext();
		//$categories = $setting['categoryBox'] ? explode(',', $setting['categoryBox']) : false;
		$categorytab = $setting['categorytab'] ? Tools::jsonDecode($setting['categorytab'], true) : array();
		//echo "<pre>".print_r($categorytab,1); die;
		$categories = $this->getCategories($setting['categoryBox'], $context->language->id);

		if ($categories) {
			foreach ($categories as &$category)
			{
				$obj = new Category($category['id_category']);
				if ($obj->id_category) {
					$category['nb_products'] = $obj->getProducts($context->language->id, 0, 1, null, null, true);
					$category['products'] = $obj->getProducts($context->language->id, 0, $setting['limit'], null, null, false);
					$category['id_image'] = file_exists(_PS_CAT_IMG_DIR_.(int)$category['id_category'].'.jpg') ? (int)$category['id_category'] : false;
					$category['subcategories'] = $this->getSubCategories($category['id_category'], $setting['limit_subcategory'], $context->language->id);

					$tg = isset($categorytab[$category['id_category']]) ? $categorytab[$category['id_category']] : '';

					if (is_file(_PAGEBUILDER_IMAGE_DIR_.$tg['icon'])) {
						$category['icon'] = _PAGEBUILDER_IMAGE_URL_.$tg['icon'];
					} else {
						$category['icon'] = '';
					}
					$category['icon_class'] = $tg['icon_class'];
				}
			}
		}
		$setting['list_mode_tpl'] = $this->getProductListStyleFile($setting['list_mode'], $setting['product_style']);

		$setting['categories_info'] = $categories;
		$output = array('type' => 'categoriesinfo', 'data' => $setting);

		return $output;
	}

	public function getCategories($id_categories, $id_lang = false, $active = true, $sql_filter = '', $sql_sort = '', $sql_limit = '')
	{
		if (!Validate::isBool($active))
			die(Tools::displayError());

		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
				SELECT *
				FROM `'._DB_PREFIX_.'category` c
				'.Shop::addSqlAssociation('category', 'c').'
				LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON c.`id_category` = cl.`id_category`'.Shop::addSqlRestrictionOnLang('cl').'
				WHERE 1 '.pSQL($sql_filter).' '.($id_lang ? 'AND `id_lang` = '.(int)$id_lang : '').($id_categories ? ' AND c.id_category IN ('.pSQL($id_categories).')' : '').
				($active ? ' AND `active` = 1' : '').
				(!$id_lang ? ' GROUP BY c.id_category' : '').
				($sql_sort != '' ? $sql_sort : ' ORDER BY c.`level_depth` ASC, category_shop.`position` ASC ').
				($sql_limit != '' ? $sql_limit : '')
		);

		return $result;
	}

	public function getSubCategories($id_category, $nb = 5, $id_lang, $active = true)
	{
		$sql_groups_where = '';
		$sql_groups_join = '';
		if (Group::isFeatureActive())
		{
			$sql_groups_join = 'LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON (cg.`id_category` = c.`id_category`)';
			$groups = FrontController::getCurrentCustomerGroups();
			$sql_groups_where = 'AND cg.`id_group` '.(count($groups) ? 'IN ('.pSQL(implode(',', $groups)).')' : '='.(int)Group::getCurrent()->id);
		}

		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT c.*, cl.id_lang, cl.name, cl.description, cl.link_rewrite, cl.meta_title, cl.meta_keywords, cl.meta_description
			FROM `'._DB_PREFIX_.'category` c
			'.Shop::addSqlAssociation('category', 'c').'
			LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (c.`id_category` = cl.`id_category`
						AND `id_lang` = '.(int)$id_lang.' '.Shop::addSqlRestrictionOnLang('cl').')
			'.$sql_groups_join.'
			WHERE `id_parent` = '.(int)$id_category.'
			'.($active ? 'AND `active` = 1' : '').'
			'.$sql_groups_where.'
			GROUP BY c.`id_category`
			ORDER BY `level_depth` ASC, category_shop.`position` ASC
			LIMIT 0,'.(int)$nb);

		foreach ($result as &$row)
		{
			$row['id_image'] = Tools::file_exists_cache(_PS_CAT_IMG_DIR_.$row['id_category'].'.jpg')
							? (int)$row['id_category'] : Language::getIsoById($id_lang).'-default';
			$row['legend'] = 'no picture';
		}
		return $result;
	}

}