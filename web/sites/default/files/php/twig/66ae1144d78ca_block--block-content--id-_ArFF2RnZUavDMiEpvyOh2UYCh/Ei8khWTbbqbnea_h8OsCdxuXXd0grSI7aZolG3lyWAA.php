<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/specbee/templates/block--block-content--id--specbee-conferences.html.twig */
class __TwigTemplate_bc67fa7597572e8e76ae8511c32805c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("specbee/conferences"), "html", null, true);
        yield "

<div";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 31, $this->source), "html", null, true);
        yield ">
  ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 32, $this->source), "html", null, true);
        yield "
  ";
        // line 33
        if (($context["label"] ?? null)) {
            // line 34
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 34, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 34, $this->source), "html", null, true);
            yield "</h2>
  ";
        }
        // line 36
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 36, $this->source), "html", null, true);
        yield "
  ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 59
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "label", "title_attributes", "title_suffix", "featured", "recommended", "past"]);        return; yield '';
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    <div class=\"conferences\">
      <h1 class=\"conferences_heading\">Lorem ipsum dolor sit amet</h1>
      <p class=\"conferences_subheading\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <div class=\"slider-container\">
        <div class=\"tabs\">
          <button class=\"tab-button active\">Featured Conferences</button>
          <button class=\"tab-button\">Recommended Conferences</button>
          <button class=\"tab-button\">Past Conferences</button>
        </div>
        <div class=\"conference-slider featured-conferences active\">
          ";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured"] ?? null), 48, $this->source), "html", null, true);
        yield "
        </div>
        <div class=\"conference-slider recommended-conferences\">
          ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["recommended"] ?? null), 51, $this->source), "html", null, true);
        yield "
        </div>
        <div class=\"conference-slider past-conferences\">
          ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["past"] ?? null), 54, $this->source), "html", null, true);
        yield "
        </div>
      </div>
    </div>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/specbee/templates/block--block-content--id--specbee-conferences.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  105 => 54,  99 => 51,  93 => 48,  81 => 38,  77 => 37,  71 => 59,  69 => 37,  64 => 36,  56 => 34,  54 => 33,  50 => 32,  46 => 31,  41 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{{ attach_library('specbee/conferences') }}

<div{{ attributes }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    <div class=\"conferences\">
      <h1 class=\"conferences_heading\">Lorem ipsum dolor sit amet</h1>
      <p class=\"conferences_subheading\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <div class=\"slider-container\">
        <div class=\"tabs\">
          <button class=\"tab-button active\">Featured Conferences</button>
          <button class=\"tab-button\">Recommended Conferences</button>
          <button class=\"tab-button\">Past Conferences</button>
        </div>
        <div class=\"conference-slider featured-conferences active\">
          {{ featured }}
        </div>
        <div class=\"conference-slider recommended-conferences\">
          {{ recommended }}
        </div>
        <div class=\"conference-slider past-conferences\">
          {{ past }}
        </div>
      </div>
    </div>
  {% endblock %}
</div>", "themes/custom/specbee/templates/block--block-content--id--specbee-conferences.html.twig", "/var/www/html/web/themes/custom/specbee/templates/block--block-content--id--specbee-conferences.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "block" => 37);
        static $filters = array("escape" => 29);
        static $functions = array("attach_library" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
                ['attach_library'],
                $this->source
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
