<?php

/* PrestaShopBundle:Admin:Translations/include/pagination-bar.html.twig */
class __TwigTemplate_16b61411bbea747371949ea24c4fa17f95e30eb0ef509b0bc3337685b93894ac extends Twig_Template
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
        echo "<div class=\"navigation-container\">
  <nav class=\"hide\">
    <ul class=\"pagination\" data-display-number=\"2\">
      <li class=\"page-item hide\">
        <a class=\"hide js-next-arrow\">
          <a class=\"pull-left arrow js-arrow\" href=\"#\" aria-label=\"Previous\" data-direction=\"prev\">
          <i class=\"material-icons\">keyboard_arrow_left</i>
          <span class=\"sr-only\">Previous</span>
        </a>
      </li>
      <li class=\"page-item active\" data-page-index=\"1\"><a class=\"js-page-link page-link\" href=\"#_";
        // line 35
        echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
        echo "\">1</a></li>
      <li class=\"page-item tpl hide\"><a class=\"js-page-link page-link\" href=\"#_";
        // line 36
        echo twig_escape_filter($this->env, ($context["page_id"] ?? null), "html", null, true);
        echo "\"></a></li>
      <li class=\"page-item hide js-next-arrow\">
        <a class=\"pull-left arrow js-arrow\" href=\"#\" aria-label=\"Next\" data-direction=\"next\">
          <i class=\"material-icons\">keyboard_arrow_right</i>
          <span class=\"sr-only\">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/pagination-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 36,  31 => 35,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin:Translations/include/pagination-bar.html.twig", "/home/mymyandcke/www/src/PrestaShopBundle/Resources/views/Admin/Translations/include/pagination-bar.html.twig");
    }
}
