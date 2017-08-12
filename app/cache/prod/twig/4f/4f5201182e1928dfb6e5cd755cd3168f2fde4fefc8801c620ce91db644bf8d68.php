<?php

/* PrestaShopBundle:Admin:Translations/include/form-edit-message.html.twig */
class __TwigTemplate_02e3d115d9ca5a1fe891fb9f4cf2091d03281cf5c7ac70c8c019493e6de547ea extends Twig_Template
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
        echo "<form method=\"post\" class=\"hide\" data-hash=\"";
        echo twig_escape_filter($this->env, ($context["hash"] ?? null), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\">
  <div class=\"alerts\">
    <div class=\"hide alert alert-info\">";
        // line 27
        echo twig_escape_filter($this->env, ($context["notification_success"] ?? null), "html", null, true);
        echo "</div>
    <div class=\"hide alert alert-danger\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["notification_error"] ?? null), "html", null, true);
        echo "</div>
  </div>
  <p><label class=\"verbatim\"><strong>";
        // line 30
        echo twig_escape_filter($this->env, ($context["translation_key"] ?? null), "html", null, true);
        echo "</strong></label></p>
  <div class=\"form-group row";
        // line 31
        if ( !($context["is_translated"] ?? null)) {
            echo " has-warning";
        }
        echo "\">
    <div class=\"col-lg-12\">
      <textarea class=\"form-control";
        // line 33
        if ( !($context["is_translated"] ?? null)) {
            echo " form-control-warning";
        }
        echo "\"
                rows=\"3\"
                name=\"translation_value\">";
        // line 36
        echo twig_escape_filter($this->env, ($context["edited_translation_value"] ?? null), "html", null, true);
        // line 37
        echo "</textarea>
        <span class=\"breadcrumb\">
          <small>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumb_parts"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb_part"]) {
            // line 41
            echo "              ";
            echo twig_escape_filter($this->env, ((array_key_exists("breadcrumb_part", $context)) ? (_twig_default_filter($context["breadcrumb_part"], false)) : (false)), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " > ";
            }
            // line 42
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb_part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </small>
      </span>
    </div>
    <input type=\"hidden\" name=\"domain\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"locale\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"default\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["default_translation_value"] ?? null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"theme\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"translation_key\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["translation_key"] ?? null), "html", null, true);
        echo "\"/>
  </div>
  <div class=\"col-md-12 buttons\">
    <input class=\"btn btn-primary btn-sm pull-right\" type=\"submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["label_edit"] ?? null), "html", null, true);
        echo "\"/>
    <input class=\"btn btn-tertiary-outline btn-sm pull-right reset-translation-value\" type=\"button\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["label_reset"] ?? null), "html", null, true);
        echo "\"/>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/form-edit-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  125 => 53,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  98 => 43,  84 => 42,  78 => 41,  61 => 40,  56 => 37,  54 => 36,  47 => 33,  40 => 31,  36 => 30,  31 => 28,  27 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin:Translations/include/form-edit-message.html.twig", "/home/mymyandcke/www/src/PrestaShopBundle/Resources/views/Admin/Translations/include/form-edit-message.html.twig");
    }
}
