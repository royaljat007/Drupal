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

/* themes/theme_name/templates/field/field--paragraph--field-tab-items--tabs.html.twig */
class __TwigTemplate_d66a2e2cd30d38ea3f34fa9ba2daf84d0be7ec66d28921e043cd751d49ff5cb8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null), 43, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null), 44, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null), 45, $this->source)), 4 => (((        // line 46
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 50
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 55
        echo "
<div";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
        echo ">
\t<div class=\"nav-tabs\">
\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 59) == 1)) {
                // line 60
                echo "     ";
                $context["tab_class"] = "active";
                // line 61
                echo "    ";
            } else {
                // line 62
                echo "    ";
                $context["tab_class"] = "";
                // line 63
                echo "    ";
            }
            // line 64
            echo "\t\t\t\t<button class=\"nav-tabs__btn ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_class"] ?? null), 64, $this->source), "html", null, true);
            echo "\" data-tab=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 65)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null), "field_tab_title", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
        </button>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t</div>
    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 70) == 1)) {
                // line 71
                echo "     ";
                $context["tab_class"] = "active";
                // line 72
                echo "    ";
            } else {
                // line 73
                echo "    ";
                $context["tab_class"] = "";
                // line 74
                echo "    ";
            }
            // line 75
            echo "      <div class=\"tab-content ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_class"] ?? null), 75, $this->source), "html", null, true);
            echo "\" id=\"tab_";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "\">
        ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 76)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null), "field_tab_content", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 76, $this->source));
            echo "
        ";
            // line 77
            $context["view_name"] = $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 77)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "field_tab_content", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["0"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["target_id"] ?? null) : null), 77, $this->source);
            // line 78
            echo "        ";
            $context["view_display_name"] = $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 78)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#paragraph"] ?? null) : null), "field_tab_content", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["0"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["display_id"] ?? null) : null), 78, $this->source);
            // line 79
            echo "        ";
            // line 81
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view($this->sandbox->ensureToStringAllowed(($context["view_name"] ?? null), 81, $this->source), $this->sandbox->ensureToStringAllowed(($context["view_display_name"] ?? null), 81, $this->source)), "html", null, true);
            echo "
      </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "themes/theme_name/templates/field/field--paragraph--field-tab-items--tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 84,  165 => 81,  163 => 79,  160 => 78,  158 => 77,  154 => 76,  147 => 75,  144 => 74,  141 => 73,  138 => 72,  135 => 71,  132 => 70,  115 => 69,  112 => 68,  95 => 65,  88 => 64,  85 => 63,  82 => 62,  79 => 61,  76 => 60,  73 => 59,  56 => 58,  51 => 56,  48 => 55,  46 => 52,  45 => 50,  43 => 46,  42 => 45,  41 => 44,  40 => 43,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 *
 * @see template_preprocess_field()
 */
#}
{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
    label_display == 'inline' ? 'clearfix',
  ]
%}
{%
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}

<div{{attributes.addClass(classes,'field__items')}}>
\t<div class=\"nav-tabs\">
\t\t{% for item in items %}
    {% if loop.index == 1 %}
     {% set tab_class = 'active' %}
    {% else %}
    {% set tab_class = '' %}
    {% endif %}
\t\t\t\t<button class=\"nav-tabs__btn {{ tab_class }}\" data-tab=\"{{ loop.index }}\">
\t\t\t\t\t{{ item.content['#paragraph'].field_tab_title.value }}
        </button>
\t\t{% endfor %}
\t\t</div>
    {% for item in items %}
        {% if loop.index == 1 %}
     {% set tab_class = 'active' %}
    {% else %}
    {% set tab_class = '' %}
    {% endif %}
      <div class=\"tab-content {{ tab_class }}\" id=\"tab_{{ loop.index }}\">
        {{ item.content['#paragraph'].field_tab_content.value|raw }}
        {% set view_name =  item.content['#paragraph'].field_tab_content.value['0']['target_id']|raw %}
        {% set view_display_name =  item.content['#paragraph'].field_tab_content.value['0']['display_id']|raw %}
        {# {{ dump(view_name) }}
        {{ dump(view_display_name) }} #}
        {{ drupal_view( view_name , view_display_name ) }}
      </div>
    {% endfor %}
\t</div>
", "themes/theme_name/templates/field/field--paragraph--field-tab-items--tabs.html.twig", "/var/www/html/web/themes/theme_name/templates/field/field--paragraph--field-tab-items--tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "for" => 58, "if" => 59);
        static $filters = array("clean_class" => 43, "escape" => 56, "raw" => 76);
        static $functions = array("drupal_view" => 81);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['clean_class', 'escape', 'raw'],
                ['drupal_view']
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
