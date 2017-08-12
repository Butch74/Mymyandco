<?php

/* PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig */
class __TwigTemplate_06a065c98f17c2f2baf7b4ae4bfbaabe981e70f402fb49772eb5823a366d4cf6 extends Twig_Template
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
        if ( !($context["editable"] ?? null)) {
            echo " <fieldset disabled> ";
        }
        // line 26
        echo "  <div id=\"jetsContent\">
    ";
        // line 27
        echo $this->env->getExtension('PrestaShopBundle\Twig\TranslationsExtension')->getTranslationsForms(($context["translationsTree"] ?? null), ($context["theme"] ?? null));
        echo "
  </div>
";
        // line 29
        if ( !($context["editable"] ?? null)) {
            echo " </fieldset> ";
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 29,  26 => 27,  23 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig", "/home/mymyandcke/www/src/PrestaShopBundle/Resources/views/Admin/Translations/include/translations-forms.html.twig");
    }
}
