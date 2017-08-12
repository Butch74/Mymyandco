<?php
class IndexController extends FrontController
{
  
  
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public $php_self = 'index';
    
    /*
    * module: pspagebuilder
    * date: 2017-08-01 06:02:51
    * version: 5.0.0
    */
    public function initContent()
    {
        parent::initContent();
        $content = '';
        if( class_exists("PsPageBuilder") ){
            $pagebuilder = new PsPageBuilder();
            $content = $pagebuilder->processHook( );
            if( empty($content) ){
                $content = $this->l( 'Please go to page builder to create a profile and set it active in home page' );
            }
        }else{
            $content = Hook::exec('displayHome'); 
        }
        
        $this->context->smarty->assign(array(
            'HOOK_HOME' => $content
        ));   
        $this->setTemplate('index');
    }
}
