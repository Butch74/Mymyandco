<?php

/* PrestaShopBundle:Admin\Translations:list.html.twig */
class __TwigTemplate_aaf254bbb9d0abd366eef772fdf694a4fe2ede1beda8d21190b125994a9d72b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Translations:list.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"search-translation container-fluid\">
  <div class=\"row\">
    <h2 class=\"col-md-9\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search translations", array(), "Admin.International.Feature"), "html", null, true);
        echo "</h2>
    <div class=\"summary col-md-3\">
      <strong><span data-template=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["total_translations"] ?? null), "html", null, true);
        echo "\" class=\"total-translations\"></span></strong>
      <span class=\"hide separator\"> - </span>
      <span data-template=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["total_remaining_translations"] ?? null), "html", null, true);
        echo "\" class=\"total-remaining-translations\"></span>
    </div>
  </div>
  <form class=\"row\">
    <div class=\"col-md-9\">
        <label>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(2 characters at least)", array(), "Admin.International.Feature"), "html", null, true);
        echo "</label>
        <input class=\"form-control search\"
               pattern=\".{2,}\"
               placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search a word or expression, e.g.: \"Order confirmation\"", array(), "Admin.International.Help"), "html", null, true);
        echo "\"
               type=\"search\"
               id=\"jetsSearch\"
        />
    </div>
    <div class=\"col-md-3 m-t-1 p-t-1\">
        <input class=\"btn btn-primary search-button\" type=\"submit\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "\" />
        <input class=\"btn btn-tertiary-outline\" type=\"reset\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\" />
    </div>
  </form>
  <div class=\"hide alert alert-warning\">
    <i class=\"material-icons\">info_outline</i>
    <span>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results found", array(), "Admin.Notifications.Error"), "html", null, true);
        echo "</span>
  </div>
  <div class=\"translations-results js-results\">
    <h2 class=\"hide\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search Results", array(), "Admin.Global"), "html", null, true);
        echo "</h2>
    ";
        // line 58
        $this->loadTemplate("PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig", "PrestaShopBundle:Admin\\Translations:list.html.twig", 58)->display(array_merge($context, array("editable" => ($context["editable"] ?? null))));
        // line 59
        echo "  </div>
</div>

<form method=\"post\" id=\"messages-fragments\" action=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_messages_fragments");
        echo "\">
  <input type=\"hidden\" name=\"lang\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["requestParams"] ?? null), "lang", array()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["requestParams"] ?? null), "type", array()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"theme\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["requestParams"] ?? null), "theme", array()), "html", null, true);
        echo "\">
</form>

<div class=\"container-fluid\">
  <div class=\"row\">
    ";
        // line 70
        $this->loadTemplate("PrestaShopBundle:Admin/Translations/include:translations-tree.html.twig", "PrestaShopBundle:Admin\\Translations:list.html.twig", 70)->display($context);
        // line 71
        echo "    <div class=\"translation-domains col-xs-9\">
      <h1 id=\"domain\">
        <span class=\"name\"></span>
        <span class=\"separator hide\">-</span>
        <span class=\"total-expressions\"></span>
        <span class=\"separator hide\">-</span>
        <span class=\"missing-translations\"></span>
      </h1>
      <p class=\"missing-translations-paragraph\"></p>
      <div class=\"navbar-container pull-right\"></div>
      ";
        // line 81
        if ( !($context["editable"] ?? null)) {
            echo " <fieldset disabled=\"disabled\"> ";
        }
        // line 82
        echo "        <div class=\"forms-container\">
        </div>
      ";
        // line 84
        if ( !($context["editable"] ?? null)) {
            echo " </fieldset> ";
        }
        // line 85
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Translations:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 85,  139 => 84,  135 => 82,  131 => 81,  119 => 71,  117 => 70,  109 => 65,  105 => 64,  101 => 63,  97 => 62,  92 => 59,  90 => 58,  86 => 57,  80 => 54,  72 => 49,  68 => 48,  59 => 42,  53 => 39,  45 => 34,  40 => 32,  35 => 30,  31 => 28,  28 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin\\Translations:list.html.twig", "/home/mymyandcke/www/src/PrestaShopBundle/Resources/views/Admin/Translations/list.html.twig");
    }
}
