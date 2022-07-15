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

/* themes/theme_name/templates/content/node--conferences--teaser.html.twig */
class __TwigTemplate_29d21756d62b566a198339477db5e750de007bb7c4916db3b2ac3686d64f7c1c extends \Twig\Template
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
        // line 71
        $context["classes"] = [0 => "conference", 1 => "node", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "bundle", [], "any", false, false, true, 74), 74, $this->source))), 3 => ((twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 75)) ? ("node--promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 76)) ? ("node--sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 77)) ? ("node--unpublished") : ("")), 6 => ((        // line 78
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 78, $this->source)))) : (""))];
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/node"), "html", null, true);
        echo "
<article";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
        echo ">
\t<div class=\"conference__content\">

\t\t";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conference_img", [], "any", false, false, true, 85)) {
            // line 86
            echo "\t\t\t<div class=\"conference__img\">
\t\t\t\t";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conference_img", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 90
        echo "
\t\t";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conference_price", [], "any", false, false, true, 91), 0, [], "any", false, false, true, 91)) {
            // line 92
            echo "\t\t\t<div class=\"conference__price\">
\t\t\t\t";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conference_price", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        } else {
            // line 96
            echo "\t\t\t<div class=\"conference__price price-free\">
\t\t\t\tFREE
\t\t\t</div>
\t\t";
        }
        // line 100
        echo "\t\t<div class=\"conference__body\">
\t\t\t<h2 class=\"conference__title\">
\t\t\t\t";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 102, $this->source), "html", null, true);
        echo "
\t\t\t</h2>

\t\t\t";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conferences_tags", [], "any", false, false, true, 105)) {
            // line 106
            echo "\t\t\t\t<div class=\"conference__tags\">
\t\t\t\t\t";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conferences_tags", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 110
        echo "
\t\t\t";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conference_date", [], "any", false, false, true, 111)) {
            // line 112
            echo "\t\t\t\t<div class=\"conference__date\">
\t\t\t\t\t";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conference_date", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 116
        echo "
\t\t\t";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conferences_address", [], "any", false, false, true, 117)) {
            // line 118
            echo "\t\t\t\t<div class=\"conference__address\">
\t\t\t\t\t";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_conferences_address", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 122
        echo "\t\t</div>
\t\t<div class=\"conference__bottom\">
\t\t\t<a class=\"wishlist-btn\" href=\"#\">
\t\t\t\t<i class=\"bi bi-heart\"></i>
\t\t\t</a>
\t\t\t<a class=\"cloud-btn\" href=\"#\">
\t\t\t\t<i class=\"bi bi-cloud-arrow-down\"></i>
\t\t\t</a>
\t\t\t<a class=\"share-btn\" href=\"#\">
\t\t\t\t<i class=\"bi bi-share-fill\"></i>
\t\t\t</a>
\t\t\t<a class=\"detail-btn\" href=\"";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 133, $this->source), "html", null, true);
        echo "\">
\t\t\t\tView Details
\t\t\t</a>
\t\t</div>
\t</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/theme_name/templates/content/node--conferences--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 133,  136 => 122,  130 => 119,  127 => 118,  125 => 117,  122 => 116,  116 => 113,  113 => 112,  111 => 111,  108 => 110,  102 => 107,  99 => 106,  97 => 105,  91 => 102,  87 => 100,  81 => 96,  75 => 93,  72 => 92,  70 => 91,  67 => 90,  61 => 87,  58 => 86,  56 => 85,  50 => 82,  46 => 81,  44 => 78,  43 => 77,  42 => 76,  41 => 75,  40 => 74,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 */
#}
{%
  set classes = [
    'conference',
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}
{{ attach_library('classy/node') }}
<article{{attributes.addClass(classes)}}>
\t<div class=\"conference__content\">

\t\t{% if content.field_conference_img %}
\t\t\t<div class=\"conference__img\">
\t\t\t\t{{ content.field_conference_img }}
\t\t\t</div>
\t\t{% endif %}

\t\t{% if content.field_conference_price.0 %}
\t\t\t<div class=\"conference__price\">
\t\t\t\t{{ content.field_conference_price }}
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"conference__price price-free\">
\t\t\t\tFREE
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"conference__body\">
\t\t\t<h2 class=\"conference__title\">
\t\t\t\t{{ label }}
\t\t\t</h2>

\t\t\t{% if content.field_conferences_tags %}
\t\t\t\t<div class=\"conference__tags\">
\t\t\t\t\t{{ content.field_conferences_tags }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if content.field_conference_date %}
\t\t\t\t<div class=\"conference__date\">
\t\t\t\t\t{{ content.field_conference_date }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if content.field_conferences_address %}
\t\t\t\t<div class=\"conference__address\">
\t\t\t\t\t{{ content.field_conferences_address }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"conference__bottom\">
\t\t\t<a class=\"wishlist-btn\" href=\"#\">
\t\t\t\t<i class=\"bi bi-heart\"></i>
\t\t\t</a>
\t\t\t<a class=\"cloud-btn\" href=\"#\">
\t\t\t\t<i class=\"bi bi-cloud-arrow-down\"></i>
\t\t\t</a>
\t\t\t<a class=\"share-btn\" href=\"#\">
\t\t\t\t<i class=\"bi bi-share-fill\"></i>
\t\t\t</a>
\t\t\t<a class=\"detail-btn\" href=\"{{ url }}\">
\t\t\t\tView Details
\t\t\t</a>
\t\t</div>
\t</div>
</article>
", "themes/theme_name/templates/content/node--conferences--teaser.html.twig", "/var/www/html/web/themes/theme_name/templates/content/node--conferences--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "if" => 85);
        static $filters = array("clean_class" => 74, "escape" => 81);
        static $functions = array("attach_library" => 81);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
