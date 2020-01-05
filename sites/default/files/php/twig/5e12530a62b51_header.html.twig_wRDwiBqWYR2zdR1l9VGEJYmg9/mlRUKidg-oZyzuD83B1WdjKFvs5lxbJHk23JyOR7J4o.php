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

/* themes/gavias_edupia/templates/page/header.html.twig */
class __TwigTemplate_9337764f0022240d1a0c9c1fec4b2f32717b8efd80253a881c48be2f09094e7c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 3, "if" => 4];
        $filters = ["escape" => 8];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
        // line 1
        echo "<header id=\"header\" class=\"header-v1\">

  ";
        // line 3
        $context["class_sticky"] = "";
        // line 4
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 5
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 6
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6 col-xs-8 branding\">
                ";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 14
            echo "                  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
                ";
        }
        // line 16
        echo "              </div>

              <div class=\"col-md-9 col-sm-6 col-xs-4 p-static\">
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          ";
        // line 25
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 26
            echo "                            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                          
                          ";
        }
        // line 28
        echo "  
                          ";
        // line 29
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 30
            echo "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                            </div>
                         ";
        }
        // line 34
        echo "                        </div>
                          
                        <div id=\"menu-bar\" class=\"menu-bar d-xl-none d-lg-none d-xl-none\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>
                        
                        ";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "cart", [])) {
            // line 43
            echo "                          <div class=\"quick-cart\">
                            ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
            echo "
                          </div>
                        ";
        }
        // line 47
        echo "
                        ";
        // line 48
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 49
            echo "                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                            <div class=\"search-content\">  
                              ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
                            </div>  
                          </div>
                        ";
        }
        // line 56
        echo "                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 56,  154 => 52,  149 => 49,  147 => 48,  144 => 47,  138 => 44,  135 => 43,  133 => 42,  123 => 34,  117 => 31,  114 => 30,  112 => 29,  109 => 28,  102 => 26,  100 => 25,  89 => 16,  83 => 14,  81 => 13,  73 => 8,  67 => 6,  64 => 5,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header-v1\">

  {% set class_sticky = '' %}
  {% if sticky_menu == 1 %}
    {% set class_sticky = 'gv-sticky-menu' %}
  {% endif %}  

   <div class=\"header-main {{ class_sticky }}\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6 col-xs-8 branding\">
                {% if page.branding %}
                  {{ page.branding }}
                {% endif %}
              </div>

              <div class=\"col-md-9 col-sm-6 col-xs-4 p-static\">
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          {% if page.main_menu %}
                            {{ page.main_menu }}
                          
                          {% endif %}  
                          {% if page.offcanvas %}
                            <div class=\"after-offcanvas hidden\">
                              {{ page.offcanvas }}
                            </div>
                         {% endif %}
                        </div>
                          
                        <div id=\"menu-bar\" class=\"menu-bar d-xl-none d-lg-none d-xl-none\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>
                        
                        {% if page.cart %}
                          <div class=\"quick-cart\">
                            {{ page.cart }}
                          </div>
                        {% endif %}

                        {% if page.search %}
                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                            <div class=\"search-content\">  
                              {{ page.search }}
                            </div>  
                          </div>
                        {% endif %}
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
", "themes/gavias_edupia/templates/page/header.html.twig", "/Users/bwaye3/Documents/sites/local.chattanoogaendeavors.org/themes/gavias_edupia/templates/page/header.html.twig");
    }
}
