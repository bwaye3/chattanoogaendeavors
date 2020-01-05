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

/* themes/gavias_edupia/templates/node/node--service.html.twig */
class __TwigTemplate_d7dcd6fdc18edc695803cd1c174213c63c95a92181a8615e452e9ea78d8bb13b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 14];
        $filters = ["clean_class" => 5, "escape" => 17, "render" => 20, "t" => 27, "without" => 82];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'render', 't', 'without'],
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
        // line 2
        $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 5
($context["node"] ?? null), "bundle", [])))), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 7
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 8
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 7 => "clearfix"];
        // line 13
        echo "
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 
  
  <div class=\"service-block-1\">      
    <div class=\"service-images lightGallery\">";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_service_images", [])), "html", null, true);
            echo "</div>
    <div class=\"service-content\">
       <div class=\"content-inner\">
          ";
            // line 20
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_service_icon", []))) {
                // line 21
                echo "            <div class=\"service-icon\"><i class=\"icon ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_service_icon", []), "value", [])), "html", null, true);
                echo "\"></i></div>
          ";
            }
            // line 22
            echo "   
          <div class=\"content-bottom\">
              <h3 class=\"title\"><a href=\"";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h3>
              <div class=\"desc\">";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
              <div class=\"read-more\">
              <a class=\"link-readmore btn-inline\" href=\"";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read more"));
            echo "</a>
            </div>
          </div>  
       </div>    
    </div>
  </div>

";
        } elseif ((        // line 34
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 35
            echo "
  <div class=\"service-block-2\">      
    <div class=\"service-content\">
      <div class=\"content-inner\">
        ";
            // line 39
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_service_icon", []))) {
                // line 40
                echo "          <div class=\"service-icon\"><i class=\"icon ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_service_icon", []), "value", [])), "html", null, true);
                echo "\"></i></div>
        ";
            }
            // line 41
            echo "   
        <h3 class=\"title\"><a href=\"";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h3>
        <div class=\"desc\">";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
        <div class=\"service-readmore\">
          <a href=\"";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read more"));
            echo "</a>
        </div>  
      </div>    
    </div>
  </div>
";
        } elseif ((        // line 50
($context["view_mode"] ?? null) == "teaser_3")) {
            // line 51
            echo "
  <div class=\"service-block-3 grid\">      
    <div class=\"service-images lightGallery\">";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_service_images", [])), "html", null, true);
            echo "</div>
    <div class=\"service-content\">
       <div class=\"content-inner\">
        ";
            // line 56
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_service_icon", []))) {
                // line 57
                echo "          <div class=\"service-icon\"><i class=\"icon ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_service_icon", []), "value", [])), "html", null, true);
                echo "\"></i></div>
        ";
            }
            // line 58
            echo "    
          <h3 class=\"title\"><a href=\"";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h3>
          <div class=\"desc\">";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
          <div class=\"readmore\"><a class=\"btn-inline\" href=\"";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read more"));
            echo "</a></div>
       </div>    
    </div>
  </div>

";
        } else {
            // line 67
            echo "
<article";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div class=\"service-block-singe\">
    <div class=\"service-images-inner\">
      ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_service_images", [])), "html", null, true);
            echo "
    </div>
    <div class=\"post-content\">
      ";
            // line 74
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_service_icon_image", []))) {
                // line 75
                echo "        <div class=\"service-icon\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_service_icon_image", [])), "html", null, true);
                echo "</div>
      ";
            }
            // line 77
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
         <h1";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h1>
      ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "      

      <div";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
            echo ">
        ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_service_images", "field_service_icon_image", "comment"), "html", null, true);
            echo "
      </div>
      <div id=\"node-single-comment\">
        <div id=\"comments\">
          ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
            echo "
        </div>  
      </div>

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/node/node--service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 86,  239 => 82,  235 => 81,  230 => 79,  224 => 78,  219 => 77,  213 => 75,  211 => 74,  205 => 71,  199 => 68,  196 => 67,  185 => 61,  181 => 60,  175 => 59,  172 => 58,  166 => 57,  164 => 56,  158 => 53,  154 => 51,  152 => 50,  142 => 45,  137 => 43,  131 => 42,  128 => 41,  122 => 40,  120 => 39,  114 => 35,  112 => 34,  100 => 27,  95 => 25,  89 => 24,  85 => 22,  79 => 21,  77 => 20,  71 => 17,  65 => 14,  62 => 13,  60 => 9,  59 => 8,  58 => 7,  57 => 6,  56 => 5,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
    'node',
    'node-detail',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}

{% if view_mode == \"teaser\" %} 
  
  <div class=\"service-block-1\">      
    <div class=\"service-images lightGallery\">{{ content.field_service_images }}</div>
    <div class=\"service-content\">
       <div class=\"content-inner\">
          {% if content.field_service_icon|render %}
            <div class=\"service-icon\"><i class=\"icon {{ node.field_service_icon.value }}\"></i></div>
          {% endif %}   
          <div class=\"content-bottom\">
              <h3 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a></h3>
              <div class=\"desc\">{{ content.body }}</div>
              <div class=\"read-more\">
              <a class=\"link-readmore btn-inline\" href=\"{{ url }}\">{{'Read more'|t}}</a>
            </div>
          </div>  
       </div>    
    </div>
  </div>

{% elseif view_mode == \"teaser_2\" %}

  <div class=\"service-block-2\">      
    <div class=\"service-content\">
      <div class=\"content-inner\">
        {% if content.field_service_icon|render %}
          <div class=\"service-icon\"><i class=\"icon {{node.field_service_icon.value}}\"></i></div>
        {% endif %}   
        <h3 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a></h3>
        <div class=\"desc\">{{ content.body }}</div>
        <div class=\"service-readmore\">
          <a href=\"{{ url }}\">{{'Read more'|t}}</a>
        </div>  
      </div>    
    </div>
  </div>
{% elseif view_mode == \"teaser_3\" %}

  <div class=\"service-block-3 grid\">      
    <div class=\"service-images lightGallery\">{{ content.field_service_images }}</div>
    <div class=\"service-content\">
       <div class=\"content-inner\">
        {% if content.field_service_icon|render %}
          <div class=\"service-icon\"><i class=\"icon {{ node.field_service_icon.value }}\"></i></div>
        {% endif %}    
          <h3 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a></h3>
          <div class=\"desc\">{{ content.body }}</div>
          <div class=\"readmore\"><a class=\"btn-inline\" href=\"{{ url }}\">{{'Read more'|t}}</a></div>
       </div>    
    </div>
  </div>

{% else %}

<article{{ attributes.addClass(classes) }}>
  <div class=\"service-block-singe\">
    <div class=\"service-images-inner\">
      {{ content.field_service_images }}
    </div>
    <div class=\"post-content\">
      {% if content.field_service_icon_image|render %}
        <div class=\"service-icon\">{{ content.field_service_icon_image }}</div>
      {% endif %}
      {{ title_prefix }}
         <h1{{ title_attributes.addClass('post-title') }}>{{ label }}</h1>
      {{ title_suffix }}      

      <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
        {{ content|without('field_service_images', 'field_service_icon_image', 'comment') }}
      </div>
      <div id=\"node-single-comment\">
        <div id=\"comments\">
          {{ content.comment }}
        </div>  
      </div>

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
{% endif %}", "themes/gavias_edupia/templates/node/node--service.html.twig", "/Users/bwaye3/Documents/sites/local.chattanoogaendeavors.org/themes/gavias_edupia/templates/node/node--service.html.twig");
    }
}
