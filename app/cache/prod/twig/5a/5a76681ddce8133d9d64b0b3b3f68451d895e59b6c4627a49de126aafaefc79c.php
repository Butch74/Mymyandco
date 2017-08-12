<?php

/* PrestaShopBundle:Admin/Translations/include:translations-tree.html.twig */
class __TwigTemplate_c075928db58e36de3fa394dc9181455c3428cafc81c7c0e5e38bb2782ad4fbf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"domains-tree col-xs-3\">
  <div class=\"card\">
    <a class=\"btn-expand\">
      <i class=\"material-icons\">&#xE313;</i>
      <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
    </a>
    <a class=\"btn-reduce\">
      <i class=\"material-icons\">&#xE316;</i>
      <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
    </a>

    <hr />
    ";
        // line 37
        echo $this->env->getExtension('PrestaShopBundle\Twig\TranslationsExtension')->getTranslationsTree(($context["translationsTree"] ?? null), ($context["theme"] ?? null));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Translations/include:translations-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 37,  32 => 33,  25 => 29,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Translations/include:translations-tree.html.twig", "/home/mymyandcke/www/src/PrestaShopBundle/Resources/views/Admin/Translations/include/translations-tree.html.twig");
    }
}
