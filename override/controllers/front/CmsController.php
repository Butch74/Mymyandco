<?php
class CmsController extends CmsControllerCore
{
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    
    
    
  
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public $php_self = 'cms';
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public $assignCase;
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public $cms;
    
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public $cms_category;
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public $ssl = false;
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public function canonicalRedirection($canonicalURL = '')
    {
        if (Validate::isLoadedObject($this->cms) && ($canonicalURL = $this->context->link->getCMSLink($this->cms, $this->cms->link_rewrite, $this->ssl))) {
            parent::canonicalRedirection($canonicalURL);
        } elseif (Validate::isLoadedObject($this->cms_category) && ($canonicalURL = $this->context->link->getCMSCategoryLink($this->cms_category))) {
            parent::canonicalRedirection($canonicalURL);
        }
    }
    
    /*
    * module: pspagebuilder
    * date: 2016-11-25 05:07:46
    * version: 5.0.0
    */
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public function init()
    { 
        if ($id_cms = (int) Tools::getValue('id_cms')) {
            $this->cms = new CMS($id_cms, $this->context->language->id, $this->context->shop->id);
        } elseif ($id_cms_category = (int) Tools::getValue('id_cms_category')) {
            $this->cms_category = new CMSCategory($id_cms_category, $this->context->language->id, $this->context->shop->id);
        }
        if (Configuration::get('PS_SSL_ENABLED') && Tools::getValue('content_only') && $id_cms && Validate::isLoadedObject($this->cms)
            && in_array($id_cms, $this->getSSLCMSPageIds())) {
            $this->ssl = true;
        }
        parent::init();
        $this->canonicalRedirection();
        if (Validate::isLoadedObject($this->cms)) {
            $adtoken = Tools::getAdminToken('AdminCmsContent'.(int) Tab::getIdFromClassName('AdminCmsContent').(int) Tools::getValue('id_employee'));
            if (!$this->cms->isAssociatedToShop() || !$this->cms->active && Tools::getValue('adtoken') != $adtoken) {
                header('HTTP/1.1 404 Not Found');
                header('Status: 404 Not Found');
            } else {
                $this->assignCase = 1;
            }
        } elseif (Validate::isLoadedObject($this->cms_category) && $this->cms_category->active) {
            $this->assignCase = 2;
        } else {
            header('HTTP/1.1 404 Not Found');
            header('Status: 404 Not Found');
        }
    }
    
    
    
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public function initContent()
    {
        parent::initContent();
        if ($this->assignCase == 1) {
            $a = $this->objectPresenter->present($this->cms); 
            $cms =  $this->objectPresenter->present($this->cms); 
            
            $reg_exUrl = "#\[pagebuilder\s*id=\"(\d+)\"\s*\]?#";
    
            if( preg_match( $reg_exUrl, $cms['content'], $match ) ){
        
                $pagebuilder = new PsPageBuilder();
                $cms['content'] = $pagebuilder->getLayoutContent( $match[1] ); 
            }
 
 
            $this->context->smarty->assign(array(
                'cms' => $cms,
            ));
            if ($this->cms->indexation == 0) {
                $this->context->smarty->assign('nobots', true);
            }
            $this->setTemplate(
                'cms/page',
                array('entity' => 'cms', 'id' => $this->cms->id)
            );
        } elseif ($this->assignCase == 2) {
            $this->context->smarty->assign($this->getTemplateVarCategoryCms());
            $this->setTemplate('cms/category');
        }
    }
  
}
