<?php

/* PrestaShopBundle:Admin:Translations/include/button-toggle-messages-visibility.html.twig */
class __TwigTemplate_502198c629fd8c41bedadaef2934ff602872cdd65fa1e599a0151d5060003127 extends Twig_Template
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
        echo "<div class=\"translation-domain\">
    <button class=\"btn btn-default btn-sm show-translation-messages\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["label_show_messages"] ?? null), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/button-toggle-messages-visibility.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin:Translations/include/button-toggle-messages-visibility.html.twig", "/home/mymyandcke/www/src/PrestaShopBundle/Resources/views/Admin/Translations/include/button-toggle-messages-visibility.html.twig");
    }
}
