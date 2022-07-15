<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/theme_name/templates/paragraphs/paragraph--tabs.html.twig */
class __TwigTemplate_5f92cbbd4a83158fe032ad96d01208a3dd31e5b1fba567d3cdcf2e85b7e82410 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
";
        // line 10
        $context["classes"] = [0 => "tabs", 1 => "paragraph"];
        // line 14
        echo "
";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("theme_name/tabs"), "html", null, true);
        echo "

";
        // line 17
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
  <div";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo ">

    ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "
  </div>

";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
      ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tabs_heading", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23)) {
            // line 24
            echo "        <h2 class=\"tabs__header\">
          ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tabs_heading", [], "any", false, false, true, 25), 0, [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
        </h2>
      ";
        }
        // line 28
        echo "
      ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tabs_intro", [], "any", false, false, true, 29), 0, [], "any", false, false, true, 29)) {
            // line 30
            echo "        <div class=\"tabs__intro\">
          ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tabs_intro", [], "any", false, false, true, 31), 0, [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 34
        echo "
      ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tab_items", [], "any", false, false, true, 35)) {
            // line 36
            echo "        <div class=\"tabs__items\">
          ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tab_items", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 40
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/theme_name/templates/paragraphs/paragraph--tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  118 => 37,  115 => 36,  113 => 35,  110 => 34,  104 => 31,  101 => 30,  99 => 29,  96 => 28,  90 => 25,  87 => 24,  85 => 23,  82 => 22,  78 => 21,  71 => 42,  69 => 21,  64 => 19,  61 => 18,  54 => 17,  49 => 15,  46 => 14,  44 => 10,  41 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Override {module_contrib_dir}/paragraphs/templates/paragraph.html.twig
 *
 * @see template_preprocess_paragraph()
 */
#}

{% set classes = [
  'tabs',
  'paragraph',
] %}

{{ attach_library('theme_name/tabs') }}

{% block paragraph %}

  <div{{ attributes.addClass(classes) }}>

    {% block content %}

      {% if content.field_tabs_heading.0 %}
        <h2 class=\"tabs__header\">
          {{ content.field_tabs_heading.0 }}
        </h2>
      {% endif %}

      {% if content.field_tabs_intro.0 %}
        <div class=\"tabs__intro\">
          {{ content.field_tabs_intro.0 }}
        </div>
      {% endif %}

      {% if content.field_tab_items %}
        <div class=\"tabs__items\">
          {{ content.field_tab_items }}
        </div>
      {% endif %}

    {% endblock %}

  </div>

{% endblock paragraph %}
", "themes/theme_name/templates/paragraphs/paragraph--tabs.html.twig", "/var/www/html/web/themes/theme_name/templates/paragraphs/paragraph--tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "block" => 17, "if" => 23);
        static $filters = array("escape" => 15);
        static $functions = array("attach_library" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
