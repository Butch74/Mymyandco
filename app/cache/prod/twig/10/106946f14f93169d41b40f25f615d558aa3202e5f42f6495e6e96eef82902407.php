<?php

/* PrestaShopBundle:Admin:Translations/include/translations-form-start.html.twig */
class __TwigTemplate_513a1eb8350bd5b3bd4f32f11aa228d17302c6d62457a7fbe0aaa7125c935e73 extends Twig_Template
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
        echo ($context["title"] ?? null);
        echo "
<div";
        // line 26
        echo ($context["parent"] ?? null);
        echo ">
  <div class=\"translation-forms col-offset\"";
        // line 27
        echo ($context["id"] ?? null);
        // line 28
        echo ($context["domain"] ?? null);
        // line 29
        echo ($context["total_translations"] ?? null);
        // line 30
        echo ($context["missing_translations"] ?? null);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/translations-form-start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 30,  31 => 29,  29 => 28,  27 => 27,  23 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin:Translations/include/translations-form-start.html.twig", "/home/mymyandcke/www/src/PrestaShopBundle/Resources/views/Admin/Translations/include/translations-form-start.html.twig");
    }
}
