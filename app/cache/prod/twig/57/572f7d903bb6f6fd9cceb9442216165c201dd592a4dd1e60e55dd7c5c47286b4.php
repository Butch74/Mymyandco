<?php

/* __string_template__8591ff478180ea8ce52ca2fe43922a015a9ac94e4c8fc8a9a762b2510ef7c005 */
class __TwigTemplate_d9208ffc79c2ef4ecad969ab145a58fe394f0b0cf59dab1f4ded89dffb8eb8ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Mymyandco</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '36ebbbc6308165ed5011865f2bf452df';
    var token_admin_orders = '8e2f559b08a83625a9b301a56c61a2a2';
    var token_admin_customers = '5fe8852340fa42b9c516281a901c86f7';
    var token_admin_customer_threads = '845e17ac92c3e38dffa47abc50aa556e';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'e096b2daaed8b3e3838786cc96fda27c';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/admin6317/index.php/module/catalog/recommended?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/modules/psblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin6317/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ptsthemepanel/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin6317/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin6317\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/admin6317/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.1.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.1.2\"></script>
<script type=\"text/javascript\" src=\"/admin6317/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin6317/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 71
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminDashboard&amp;token=ae291b227a149881e8eecb4f20bbd826\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminOrders&amp;token=8e2f559b08a83625a9b301a56c61a2a2\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item active\"
         href=\"https://mymyandco.fr/admin6317/index.php/module/manage?token=94f368af56d79a558e2d06e4fc8f3990\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fb873cf5779c04691326cc604b527a32\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"https://mymyandco.fr/admin6317/index.php/product/new?token=94f368af56d79a558e2d06e4fc8f3990\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCategories&amp;addcategory&amp;token=6cd2d975b5748ae45dc0b7734de46895\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item\"
         href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminModulesPositions&amp;token=57c96e2cf707a9874058fedc95971da6\"
                 data-item=\"Positions\"
      >Positions</a>
        <hr>
          <a
         class=\"dropdown-item js-quick-link\"
         data-method=\"remove\"
         data-quicklink-id=\"5\"
         data-rand=\"60\"
         data-icon=\"icon-AdminParentModulesSf\"
         data-url=\"index.php/module/manage\"
         data-post-link=\"https://mymyandco.fr/admin6317/index.php?controller=AdminQuickAccesses&token=f2b0ca10d55b23acbce3d5887186ef27\"
         data-prompt-text=\"Veuillez nommer ce raccourci :\"
         data-link=\" - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminQuickAccesses&token=f2b0ca10d55b23acbce3d5887186ef27\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin6317/index.php?controller=AdminSearch&amp;token=6e6c89d024ad61d4833deff769f6fd75\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"https://profile.prestashop.com/mymyandco%40yahoo.fr.jpg\" /><br>
      <span>Christian WEBMASTER</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminEmployees&amp;token=e096b2daaed8b3e3838786cc96fda27c&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminLogin&amp;token=3561fcc16a37fb2037796d9b31622af9&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous regardé vos <strong><a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCarts&token=915e96281c0c7ea3b212e028ebc3f57b&action=filterOnlyAbandonedCarts\">paniers abandonnés</a></strong> ?<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://mymyandco.fr/\" target= \"_blank\">Mymyandco</a>
  </div>
</div>
            

    

    
    
\t\t\t<div id=\"pts-dropdown-top\" class=\"pull-xs-left list-unstyled ps-dropdown dropdown pull-left\">
\t\t\t\t\t<span data-toggle=\"dropdown\">Theme Control <i class=\"material-icons arrow-down\">keyboard_arrow_down</i></span>
\t\t\t\t\t<ul class=\"ps-dropdown-menu dropdown-menu\">\t<li class=\"dropdown-item\"><a href=\"index.php?controller=AdminModules&token=36ebbbc6308165ed5011865f2bf452df
\t\t\t&tab_module=Home&configure=ptsthemepanel&module_name=ptsthemepanel\">Theme Control Panel</a></li> <li class=\"dropdown-item\"><a href=\"index.php?controller=AdminPspagebuilderProfile&token=860c931299fd8e0722bd19bcc5ea3ae1\">Page Builder Profiles</a></li> <li class=\"dropdown-item\"><a href=\"index.php?controller=AdminPspagebuilderFooter&token=a556d4b041cf1db7cb3e327266fc88f2\">Footer Builder Profiles</a></li>\t<li class=\"dropdown-item\"><a href=\"index.php?controller=AdminModules&token=36ebbbc6308165ed5011865f2bf452df&tab_module=Home
\t\t\t\t&configure=psmegamenu&module_name=psmegamenu\">Megamenu</a></li>\t<li class=\"dropdown-item\"><a href=\"http://mymyandco.fr/index.php?live_configurator_token=2f075e223094e03fa50213daaac35426&id_employee=1&id_shop=1\">Live Theme Editor</a></li></ul></div>
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminDashboard&amp;token=ae291b227a149881e8eecb4f20bbd826\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de Bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminOrders&amp;token=8e2f559b08a83625a9b301a56c61a2a2\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Commandes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminOrders&amp;token=8e2f559b08a83625a9b301a56c61a2a2\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminInvoices&amp;token=f5d551396f36148663eafac7f54f1a02\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminSlip&amp;token=201697c208b0241099afade69fac05c6\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminDeliverySlip&amp;token=629fee9c241c3dc352c18b88f838dcbf\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCarts&amp;token=915e96281c0c7ea3b212e028ebc3f57b\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/admin6317/index.php/product/catalog?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogue
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/admin6317/index.php/product/catalog?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCategories&amp;token=6cd2d975b5748ae45dc0b7734de46895\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminTracking&amp;token=f9040e5fe06f1bfa8bf8c29186a5713a\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminAttributesGroups&amp;token=b88534505382055ce2c5cc8a2f72a24c\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminManufacturers&amp;token=21eb08733d9ab7a546697bb7c94e73b3\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminAttachments&amp;token=bb89183d88716df383fda64235b91099\" class=\"link\"> Documents joints
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCartRules&amp;token=fb873cf5779c04691326cc604b527a32\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCustomers&amp;token=5fe8852340fa42b9c516281a901c86f7\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clients
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-23\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCustomers&amp;token=5fe8852340fa42b9c516281a901c86f7\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminAddresses&amp;token=81ae353af61739a61595fce4207b7ec1\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCustomerThreads&amp;token=845e17ac92c3e38dffa47abc50aa556e\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Service client
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-27\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCustomerThreads&amp;token=845e17ac92c3e38dffa47abc50aa556e\" class=\"link\"> Service client
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminOrderMessage&amp;token=96e7dcecbad567f7d7b186a3167bff11\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminReturn&amp;token=ed51ce593ac6bf2a5a1075dc8db1cc4a\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminStats&amp;token=3965f4758bd1336df94fc725829b54ce\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"41\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"42\">
                  <a href=\"/admin6317/index.php/module/catalog?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-42\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/admin6317/index.php/module/catalog?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminAddonsCatalog&amp;token=306fe75f2dccbfcca73fcfe0cd461ee4\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminThemes&amp;token=d5d8e331e06e6b151a4f963be01fd6d1\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Apparence
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-46\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminThemes&amp;token=d5d8e331e06e6b151a4f963be01fd6d1\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminThemesCatalog&amp;token=5359fd6beb801260c391463724546426\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCmsContent&amp;token=23c3c0d9fc3e3288faea87e294b3b562\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminModulesPositions&amp;token=57c96e2cf707a9874058fedc95971da6\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminImages&amp;token=93509cfc8a45b08011d57fffb85a48a3\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminLinkWidget&amp;token=054ed7e72418ec5c2fe384301f5fd5a2\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCarriers&amp;token=050d381212798b2101c019124b78a8b7\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Transport
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCarriers&amp;token=050d381212798b2101c019124b78a8b7\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminShipping&amp;token=b6927cc275cce08d38f8a2d67ddf20f1\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPayment&amp;token=32f42a259da32959814836f67a6cb2aa\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Paiement
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-55\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPayment&amp;token=32f42a259da32959814836f67a6cb2aa\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPaymentPreferences&amp;token=e58b9d25d3e39678575899c39ccb37eb\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminLocalization&amp;token=d73b6af14341399ec10b9e972f38d053\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminLocalization&amp;token=d73b6af14341399ec10b9e972f38d053\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCountries&amp;token=4f79860979233bc510283a1c6bdaa10e\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminTaxes&amp;token=9270f3d08b78af9b1ebece33d9400119\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminTranslations&amp;token=258f82b9ee17e406a4719cc7856ab874\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"118\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPsblogDashboard&amp;token=3c7caa0ab70df5dfba5311514334d588\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Ps Blog Management
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-118\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPsblogDashboard&amp;token=3c7caa0ab70df5dfba5311514334d588\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPsblogCategories&amp;token=3d97a89e57b6274835bceb2b4e610813\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPsblogBlogs&amp;token=8e494df99f3c50ddd08f2f351d23ab7e\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPsblogComments&amp;token=6583c536f201659be628b52251748816\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPsblogModule&amp;token=56bffab5b752df691c3ec3f6cb09d2c3\" class=\"link\"> Ps Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"124\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPspagebuilderProfile&amp;token=860c931299fd8e0722bd19bcc5ea3ae1\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Page Builder
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-124\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPspagebuilderProfile&amp;token=860c931299fd8e0722bd19bcc5ea3ae1\" class=\"link\"> Page Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPspagebuilderFooter&amp;token=a556d4b041cf1db7cb3e327266fc88f2\" class=\"link\"> Footer Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPspagebuilderImage&amp;token=ce809446aa4d289f4d29e0c96f4b3f30\" class=\"link\"> Images Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"128\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPspagebuilderMenu&amp;token=ca9b91966a743fbf85c835c77ca61300\" class=\"link\"> Sub-Menu Builder
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"72\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPreferences&amp;token=e2c12ce002155e28c1aba7be6cc23142\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Paramètres de la boutique
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-73\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPreferences&amp;token=e2c12ce002155e28c1aba7be6cc23142\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminOrderPreferences&amp;token=0b04b798d578662b98bc98a4a7cb2b8e\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPPreferences&amp;token=2eaf8a9501e5d2e0d782c2c3472d9fad\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminCustomerPreferences&amp;token=7127871b67e4d206f6d033f8e188fb84\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminContacts&amp;token=cf7ae6106cf2553aa8b783d68018a0ee\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminMeta&amp;token=a63d9f1606b29ac405e073f0ee493e82\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminSearchConf&amp;token=5b0249651d0f5c9a85af45bea2d9be05\" class=\"link\"> Recherche
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminInformation&amp;token=5a6139f6876eae299ee16c840e7159ae\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Paramètres avancés
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-95\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminInformation&amp;token=5a6139f6876eae299ee16c840e7159ae\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminPerformance&amp;token=b043f5fd7c1b59d97f4e472e239414e1\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminAdminPreferences&amp;token=b02b71eaf9195efee748c45b215eb739\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminEmails&amp;token=07222732c93da37cdb70e97f473ec1a4\" class=\"link\"> Emails
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminImport&amp;token=9fc5b3d1889141586f4108cb5effba35\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminEmployees&amp;token=e096b2daaed8b3e3838786cc96fda27c\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminRequestSql&amp;token=9e1449ee6fd1481c3616459c15962d19\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminLogs&amp;token=8a89f3ae459a55a33ef3560075044556\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminWebservice&amp;token=3ad5695e54cc3ed0f34eaac39bcb4422\" class=\"link\"> Service web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminParentModulesSf&amp;token=918788eceb84d0dc22c09d39a275211c\">Modules</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Gérer les modules installés    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Installer un module\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Installer un module</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Se connecter à la marketplace Addons\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Se connecter à la marketplace Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Aide\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin6317/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.1.2%2526country%253Dfr/Aide?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab\"
   href=\"/admin6317/index.php/module/catalog?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI\">Selection</a>

                <a class=\"tab current\"
   href=\"/admin6317/index.php/module/manage?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI\">Installed modules</a>

                <a class=\"tab\"
   href=\"/admin6317/index.php/module/notifications?_token=_BY_zQ1Sy3PnjEL_EN0hC0CfVzmVPC1srpWczYkigOI\">Notifications  <div class=\"notification-container\">
    <span class=\"notification-counter\">5</span>
  </div>
  </a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=mymyandco%40yahoo.fr&amp;firstname=Christian&amp;lastname=WEBMASTER&amp;website=http%3A%2F%2Fmymyandco.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin6317/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=mymyandco%40yahoo.fr&amp;firstname=Christian&amp;lastname=WEBMASTER&amp;website=http%3A%2F%2Fmymyandco.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1229
        $this->displayBlock('content_header', $context, $blocks);
        // line 1230
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1231
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1232
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1233
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"m-t-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"m-t-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"m-t-2\">
    Merci.
  </p>
  <a href=\"https://mymyandco.fr/admin6317/index.php?controller=AdminDashboard&amp;token=ae291b227a149881e8eecb4f20bbd826\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Retour
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 2.782s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=mymyandco%40yahoo.fr&amp;firstname=Christian&amp;lastname=WEBMASTER&amp;website=http%3A%2F%2Fmymyandco.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin6317/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=mymyandco%40yahoo.fr&amp;firstname=Christian&amp;lastname=WEBMASTER&amp;website=http%3A%2F%2Fmymyandco.fr%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1401
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1229
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1230
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1231
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1232
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1401
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8591ff478180ea8ce52ca2fe43922a015a9ac94e4c8fc8a9a762b2510ef7c005";
    }

    public function getDebugInfo()
    {
        return array (  1480 => 1401,  1475 => 1232,  1470 => 1231,  1465 => 1230,  1460 => 1229,  1451 => 71,  1443 => 1401,  1273 => 1233,  1270 => 1232,  1267 => 1231,  1264 => 1230,  1262 => 1229,  100 => 71,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__8591ff478180ea8ce52ca2fe43922a015a9ac94e4c8fc8a9a762b2510ef7c005", "");
    }
}
