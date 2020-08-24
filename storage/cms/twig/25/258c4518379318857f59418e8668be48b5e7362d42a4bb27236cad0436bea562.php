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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/partials/features.htm */
class __TwigTemplate_195c4efa8b9c4ad5e889d77f74e1c3236bb902e8cdac4358851edb9cf840b625 extends \Twig\Template
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
        $context["features"] = twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "features_items", [], "any", false, false, false, 1);
        // line 2
        echo "<section class=\"content-section features-section container-fluid\" id=\"features\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">11</p>
            <span class=\"section-dot\"></span>
            <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/orns/orn-section.svg");
        echo "\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "features_title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <div class=\"row hero-title\">
        <div class=\"col-12\">
            <p class=\"page-title\">
                ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "features_cta", [], "any", false, false, false, 16);
        echo "
            </p>
        </div>        
    </div>

    <div class=\"row\">
        <ul class=\"list-features container\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["features"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 24
            echo "            <li class=\"row\">
                <div class=\"col-12 col-lg-6\">
                    <div class=\"orn-box img-wrapper\">
                        <img class=\"w-100\" src=\"";
            // line 27
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["feature"], "image", [], "any", false, false, false, 27));
            echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-12 col-lg-6\">
                    <div class=\"text-box\">
                        <h2 class=\"color-white font-40 font-regular mb-30\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</h2>
                        ";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 33);
            echo "
                    </div>
                </div>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </ul>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  92 => 33,  88 => 32,  80 => 27,  75 => 24,  71 => 23,  61 => 16,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set features = homeContent.features_items %}
<section class=\"content-section features-section container-fluid\" id=\"features\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">11</p>
            <span class=\"section-dot\"></span>
            <img src=\"{{ 'assets/images/orns/orn-section.svg'|theme }}\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">{{ homeContent.features_title }}</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <div class=\"row hero-title\">
        <div class=\"col-12\">
            <p class=\"page-title\">
                {{ homeContent.features_cta|raw }}
            </p>
        </div>        
    </div>

    <div class=\"row\">
        <ul class=\"list-features container\">
            {% for feature in features %}
            <li class=\"row\">
                <div class=\"col-12 col-lg-6\">
                    <div class=\"orn-box img-wrapper\">
                        <img class=\"w-100\" src=\"{{ feature.image|media }}\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-12 col-lg-6\">
                    <div class=\"text-box\">
                        <h2 class=\"color-white font-40 font-regular mb-30\">{{ feature.title }}</h2>
                        {{ feature.description|raw }}
                    </div>
                </div>
            </li>
            {% endfor %}
        </ul>
    </div>
</section>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/features.htm", "");
    }
}
