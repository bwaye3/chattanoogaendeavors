<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_edupia/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_0ed56997dbf18d5979dd8e2d7569f68061ec6f02d41b57c5535ace7826c8a679 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12, "set" => 16, "for" => 17];
        $filters = ["escape" => 13, "t" => 14, "length" => 25];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't', 'length'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        echo "<div class=\"breadcrumb-links\">
  <div class=\"content-inner\">
    ";
        // line 12
        if (($context["breadcrumb"] ?? null)) {
            // line 13
            echo "      <nav class=\"breadcrumb ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null)), "html", null, true);
            echo "\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Breadcrumb"));
            echo "</h2>
        <ol>
        ";
            // line 16
            $context["i"] = 0;
            echo "  
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "          ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 19
                echo "          <li>
            ";
                // line 20
                if ($this->getAttribute($context["item"], "url", [])) {
                    // line 21
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 23
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    echo "
            ";
                }
                // line 25
                echo "            ";
                if ((($context["i"] ?? null) < (twig_length_filter($this->env, ($context["breadcrumb"] ?? null)) - 1))) {
                    // line 26
                    echo "              <span class=\"\"> - </span>
            ";
                }
                // line 27
                echo "  
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </ol>
      </nav>
    ";
        }
        // line 33
        echo "  </div> 
</div>  ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  116 => 30,  108 => 27,  104 => 26,  101 => 25,  95 => 23,  87 => 21,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  71 => 16,  66 => 14,  61 => 13,  59 => 12,  55 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a breadcrumb trail.
 *
 * Available variables:
 * - breadcrumb: Breadcrumb trail items.
 */
#}
<div class=\"breadcrumb-links\">
  <div class=\"content-inner\">
    {% if breadcrumb %}
      <nav class=\"breadcrumb {{ background }}\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">{{ 'Breadcrumb'|t }}</h2>
        <ol>
        {% set i = 0 %}  
        {% for item in breadcrumb %}
          {% set i = i + 1 %}
          <li>
            {% if item.url %}
              <a href=\"{{ item.url }}\">{{ item.text }}</a>
            {% else %}
              {{ item.text }}
            {% endif %}
            {% if i < breadcrumb|length - 1 %}
              <span class=\"\"> - </span>
            {% endif %}  
          </li>
        {% endfor %}
        </ol>
      </nav>
    {% endif %}
  </div> 
</div>  ", "themes/gavias_edupia/templates/navigation/breadcrumb.html.twig", "/Users/bwaye3/Documents/sites/local.chattanoogaendeavors.org/themes/gavias_edupia/templates/navigation/breadcrumb.html.twig");
    }
}
