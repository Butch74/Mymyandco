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

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;

class PsWidgetProductdeal extends PsWidgetPageBuilder {

	public $name = 'productdeal';
	public $group = 'prestashop';

	public static function getWidgetInfo()
	{
		return array('label' => ('Product Deal'), 'explain' => 'Play Countdown in ProductSales', 'group' => 'prestashop');
	}

	public function renderForm($data)
	{
		$helper = $this->getFormHelper();
		$lists = array(
			array('value' => 'grid', 'text' => $this->l('Grid')),
			array('value' => 'list1', 'text' => $this->l('List 1')),
		);
		$modes = array(
			array('value' => 'normal', 'text' => $this->l('Normal')),
			array('value' => 'carousel', 'text' => $this->l('Carousel'))
		);
		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Limit'),
					'name' => 'limit',
					'default' => 6,
				),
				array(
					'type' => 'select',
					'label' => $this->l('Display Mode'),
					'name' => 'display_mode',
					'options' => array('query' => $modes,
						'id' => 'value',
						'name' => 'text'),
					'default' => 'carousel',
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
			'limit' => '6',
			'columns' => 4,
			'list_mode' => 'grid',
			'display_mode' => 'carousel',
			'nbr_desktops' => 4,
			'nbr_tablets' => 2,
			'nbr_mobile' => 1,
		);
		$setting = array_merge($t, $setting);
		$nb = (int)$setting['limit'];

		$porder = 'date add';
		$porder = preg_split('#\s+#', $porder);

		$special = Product::getPricesDrop((int)$this->lang_id, 0, $nb, false);

		if ($special) {
			foreach ($special as &$row) {
				$time = '';
				if ($row['specific_prices']['to'] == '0000-00-00 00:00:00') {
					$row['js'] = 'unlimited';
					$row['finish'] = $this->l('Unlimited');
					$row['check_status'] = 1;
					$row['psdate'] = $this->l('Unlimited');
				} else {
					$time = strtotime($row['specific_prices']['to']);
					$row['finish'] = $this->l('Expired');
					$row['check_status'] = 1;
					$row['psdate'] = $row['specific_prices']['to'];
				}
				if ($time) {
					$row['js'] = array(
						'month' => date('m', $time),
						'day' => date('d', $time),
						'year' => date('Y', $time),
						'hour' => date('H', $time),
						'minute' => date('i', $time),
						'seconds' => date('s', $time)
					);
				}
			}
		}
		$setting['list_mode_tpl'] = $this->getProductListStyleFile($setting['list_mode'], $setting['product_style']);

		$context = Context::getContext();

		if ($special) 
			$setting['products'] = self::getResults($special, $context);
		else 
			$setting['products'] = "";
		$output = array('type' => 'productdeal', 'data' => $setting);
		return $output;
	}

	// Get List Products Result version 1.7
	public static function getResults($result, Context $context = null){
		$assembler = new ProductAssembler($context);

        $presenterFactory = new ProductPresenterFactory($context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $context->link
            ),
            $context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $context->getTranslator()
        );

        $products_for_template = [];

        foreach ($result as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }
        return $products_for_template;
	}

}
