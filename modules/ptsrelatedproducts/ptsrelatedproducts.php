<?php
/**
 * Pts Prestashop Theme Framework for Prestashop 1.7.0.2 and above
 *
 * @package   ptsrelatedproducts
 * @version   1.0.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
 *               <info@prestabrain.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;

class Ptsrelatedproducts extends Module implements WidgetInterface
{
    protected $html;
    protected $templateFile;

    public function __construct()
    {
        $this->name = 'ptsrelatedproducts';
        $this->author = 'PrestaBrain';
        $this->version = '1.0.1';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Products in the same category', array(), 'Modules.Categoryproducts.Admin');
        $this->description = $this->trans('Adds a block on the product page that displays products from the same category.', array(), 'Modules.Categoryproducts.Admin');
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:ptsrelatedproducts/views/templates/hook/ptsrelatedproducts.tpl';
    }

    public function install()
    {
        return (parent::install()
            && Configuration::updateValue('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE', 1)
            && Configuration::updateValue('PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS', 16)
            && Configuration::updateValue('PTS_CATEGORYPRODUCTS_PARAMS', 1)
            && $this->registerHook('displayFooterProduct')
            && $this->registerHook('actionProductAdd')
            && $this->registerHook('actionProductUpdate')
            && $this->registerHook('actionProductDelete')
        );
    }

    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE') ||
            !Configuration::deleteByName('PTS_CATEGORYPRODUCTS_PARAMS') ||
            !Configuration::deleteByName('PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS')) {
            return false;
        }
        return true;
    }

    public function getContent()
    {
        $this->html = '';

        if (Tools::isSubmit('submitCross')) {
            $isValidDisplayPrice = Tools::getValue('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE') === '0' || Tools::getValue('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE') === '1';
            if (false === $isValidDisplayPrice) {
                $this->html .= $this->displayError($this->trans('Invalid value for display price.', array(), 'Modules.Categoryproducts.Admin'));
            }

            if ($isValidDisplayPrice) {
                Configuration::updateValue('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE', Tools::getValue('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE'));
                Configuration::updateValue('PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS', (int) Tools::getValue('PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS'));

                $params  = array();
                if (Tools::getValue('cols_desktop')) {
                    $params['cols_desktop'] = Tools::getValue('cols_desktop');
                }

                if (Tools::getValue('cols_tablet')) {
                    $params['cols_tablet'] = Tools::getValue('cols_tablet');
                }

                if (Tools::getValue('cols_mobile')) {
                    $params['cols_mobile'] = Tools::getValue('cols_mobile');
                }

                if (Tools::getValue('sortorder')) {
                    $params['sortorder'] = Tools::getValue('sortorder');
                }

                Configuration::updateValue('PTS_CATEGORYPRODUCTS_PARAMS', Tools::jsonEncode($params));

                $this->_clearCache($this->templateFile);
                $this->html .= $this->displayConfirmation($this->trans('The settings have been updated.', array(), 'Admin.Notifications.Success'));
            }
        }

        $this->html .= $this->renderForm();

        return $this->html;
    }

    public function hookAddProduct($params)
    {
        return $this->clearCache($params);
    }

    public function hookUpdateProduct($params)
    {
        return $this->clearCache($params);
    }

    public function hookDeleteProduct($params)
    {
        return $this->clearCache($params);
    }

    private function clearCache($params)
    {
        $params = $this->getInformationFromConfiguration($params);

        if ($params) {
            $this->_clearCache($this->templateFile, $params['cache_id']);
        } else {
            $this->_clearCache($this->templateFile);
        }

        return;
    }

    public function renderForm()
    {
        $filter_list = array();
        $filter_list[] = array('id' => 'name|asc', 'name' => $this->trans('Name (A-Z)', array(), 'Admin.Global'));
        $filter_list[] = array('id' => 'name|desc', 'name' => $this->trans('Name (Z-A)', array(), 'Admin.Global'));
        $filter_list[] = array('id' => 'price|asc', 'name' => $this->trans('Price (Low-High)', array(), 'Admin.Global'));
        $filter_list[] = array('id' => 'price|desc', 'name' => $this->trans('Price (High-Low)', array(), 'Admin.Global'));
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Settings', array(), 'Admin.Global'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->trans('Display products\' prices', array(), 'Modules.Categoryproducts.Admin'),
                        'desc' => $this->trans('Show the prices of the products displayed in the block.', array(), 'Modules.Categoryproducts.Admin'),
                        'name' => 'PTS_CATEGORYPRODUCTS_DISPLAY_PRICE',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->trans('Enabled', array(), 'Admin.Global'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->trans('Disabled', array(), 'Admin.Global'),
                            )
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->trans('Sort By', array(), 'Modules.EmailSubscription.Admin'),
                        'desc' => $this->trans('Filter customers by country.', array(), 'Modules.EmailSubscription.Admin'),
                        'name' => 'sortorder',
                        'required' => false,
                        'default_value' => (int) $this->context->country->id,
                        'options' => array(
                            'query' => $filter_list,
                            'id' => 'id',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Number of product to display', array(), 'Modules.Categoryproducts.Admin'),
                        'desc' => $this->trans('Show the prices of the products displayed in the block.', array(), 'Modules.Categoryproducts.Admin'),
                        'name' => 'PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS',
                        'class' => 'fixed-width-xs',
                    ),

                    array(
                        'type' => 'text',
                        'label' => $this->trans('Number of product carousel (desktop)', array(), 'Modules.Categoryproducts.Admin'),
                        'desc' => $this->trans('Show the prices of the products displayed in the block.', array(), 'Modules.Categoryproducts.Admin'),
                        'name' => 'cols_desktop',
                        'class' => 'fixed-width-xs',
                    ),

                    array(
                        'type' => 'text',
                        'label' => $this->trans('Number of product carousel (tablet)', array(), 'Modules.Categoryproducts.Admin'),
                        'desc' => $this->trans('Show the prices of the products displayed in the block.', array(), 'Modules.Categoryproducts.Admin'),
                        'name' => 'cols_tablet',
                        'class' => 'fixed-width-xs',
                    ),

                    array(
                        'type' => 'text',
                        'label' => $this->trans('Number of product carousel (mobile)', array(), 'Modules.Categoryproducts.Admin'),
                        'desc' => $this->trans('Show the prices of the products displayed in the block.', array(), 'Modules.Categoryproducts.Admin'),
                        'name' => 'cols_mobile',
                        'class' => 'fixed-width-xs',
                    ),
                ),
                'submit' => array(
                    'title' => $this->trans('Save', array(), 'Admin.Actions'),
                ),
            ),
        );

        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get(
            'PS_BO_ALLOW_EMPLOYEE_FORM_LANG'
        ) : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitCross';
        $helper->currentIndex = $this->context->link->getAdminLink(
                'AdminModules',
                false
            ).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {   
        $params = Tools::jsonDecode(Configuration::get('PTS_CATEGORYPRODUCTS_PARAMS'),true);
        if (!isset($params['sortorder'])) {
            $params['sortorder'] = 'name|ASC';
        }

        if (!isset($params['cols_desktop'])) {
            $params['cols_desktop'] = 4;
        }

        if (!isset($params['cols_tablet'])) {
            $params['cols_tablet'] = 2;
        }

        if (!isset($params['cols_mobile'])) {
            $params['cols_mobile'] = 1;
        }

        return array(
            'PTS_CATEGORYPRODUCTS_DISPLAY_PRICE' => Configuration::get('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE'),
            'PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS' => Configuration::get('PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS'),
            'cols_desktop' => $params['cols_desktop'],
            'cols_tablet'  => $params['cols_tablet'],
            'cols_mobile'  => $params['cols_mobile'],
            'sortorder'    => $params['sortorder'],
        );
    }

    public function getWidgetVariables($hookName = null, array $configuration = array())
    {
        $params = $this->getInformationFromConfiguration($configuration);

        if ($params) {

            $products = $this->getCategoryProducts($params['id_product'], $params['id_category']);

            if (!empty($products)) {
                return array(
                    'products' => $products,
                );
            }

        }

        return false;
    }

    public function renderWidget($hookName = null, array $configuration = array())
    {
        $params = $this->getInformationFromConfiguration($configuration);

        if ($params) {
            if ((int)Configuration::get('PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS') > 0) {

                // Need variables only if this template isn't cached
                if (!$this->isCached($this->templateFile, $params['cache_id'])) {
                    if (!empty($params['id_category'])) {
                        $category = new Category($params['id_category']);
                    }

                    if (empty($category) || !Validate::isLoadedObject($category) || !$category->active) {
                        return false;
                    }

                    $variables = $this->getWidgetVariables($hookName, $configuration);

                    if (empty($variables)) {
                        return false;
                    }

                    $module_configs = Tools::jsonDecode(Configuration::get('PTS_CATEGORYPRODUCTS_PARAMS'),true);

                    $this->smarty->assign($variables);
                    $this->smarty->assign(array(
                        'display_price' => Configuration::get('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE'),
                        'params'        =>  $module_configs
                        ));
                }

                return $this->fetch(
                    $this->templateFile,
                    $params['cache_id']
                );
            }
        }

        return false;
    }

    private function getCategoryProducts($idProduct, $idCategory)
    {
        $category = new Category($idCategory);
        $showPrice = (bool) Configuration::get('PTS_CATEGORYPRODUCTS_DISPLAY_PRICE');

        $searchProvider = new CategoryProductSearchProvider(
            $this->getTranslator(),
            $category
        );

        $context = new ProductSearchContext($this->context);

        $query = new ProductSearchQuery();

        $nProducts = (int) Configuration::get('PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS') + 1; // +1 If current product is found

        $query
            ->setResultsPerPage($nProducts)
            ->setPage(1)
        ;

        $module_configs = Tools::jsonDecode(Configuration::get('PTS_CATEGORYPRODUCTS_PARAMS'),true);
        $sortorder = explode('|', $module_configs['sortorder']);

        $query->setSortOrder(new SortOrder('product', $sortorder[0], $sortorder[1]));

        $result = $searchProvider->runQuery(
            $context,
            $query
        );

        $assembler = new ProductAssembler($this->context);
        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $this->context->link
            ),
            $this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $this->context->getTranslator()
        );

        $productsForTemplate = array();

        $presentationSettings->showPrices = $showPrice;

        $products = $result->getProducts();

        foreach ($products as $rawProduct) {
            // Not duplicate current product
            if ($rawProduct['id_product'] !== $idProduct && count($productsForTemplate) < (int) Configuration::get('PTS_CATEGORYPRODUCTS_DISPLAY_PRODUCTS')) {
                $productsForTemplate[] = $presenter->present(
                    $presentationSettings,
                    $assembler->assembleProduct($rawProduct),
                    $this->context->language
                );
            }
        }

        return $productsForTemplate;
    }

    private function getInformationFromConfiguration($configuration)
    {
        if (empty($configuration['product'])) {
            return false;
        }

        $product = $configuration['product'];
        if (is_object($product)) {
            $product = (array) $product;
            $product['id_product'] = $product['id'];
        }

        $id_product = $product['id_product'];
        $id_category = (isset($configuration['category']->id) ? (int) $configuration['category']->id : (int) $product['id_category_default']);

        if (!empty($id_product) && !empty($id_category)) {

            $cache_id = 'ptscategoryproducts|'.$id_product.'|'.$id_category;

            return array(
                'id_product' => $id_product,
                'id_category' => $id_category,
                'cache_id' => $cache_id,
            );
        }

        return false;
    }
}
