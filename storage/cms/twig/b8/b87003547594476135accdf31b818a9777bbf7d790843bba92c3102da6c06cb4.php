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

/* D:\wamp64\www\sites\elderand-site/plugins/rainlab/translate/components/alternatehreflangelements/default.htm */
class __TwigTemplate_08e359a438bbde14ee9713b9a8b98fe46b5eb7be972bdb02dc82fa07adccd0b2 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "locales", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["locale"] => $context["alternateUrl"]) {
            // line 2
            echo "    <link rel=\"alternate\" hreflang=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\" href=\"";
            echo url($context["alternateUrl"]);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['alternateUrl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/plugins/rainlab/translate/components/alternatehreflangelements/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for locale, alternateUrl in __SELF__.locales %}
    <link rel=\"alternate\" hreflang=\"{{ locale }}\" href=\"{{ url(alternateUrl) }}\" />
{% endfor %}
", "D:\\wamp64\\www\\sites\\elderand-site/plugins/rainlab/translate/components/alternatehreflangelements/default.htm", "");
    }
}
