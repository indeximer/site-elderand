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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/partials/screenshots.htm */
class __TwigTemplate_b6795fdada9a2f2c3f4ba2b99817cf81efc6c4fedcd5068023a1aed851ac530e extends \Twig\Template
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
        $context["gallery"] = twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "gallery", [], "any", false, false, false, 1);
        // line 2
        echo "<section class=\"content-section screenshots-section container-fluid\" id=\"screenshots\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">111</p>
            <span class=\"section-dot\"></span>
            <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/orns/orn-section.svg");
        echo "\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "galery_title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <ul class=\"row gallery\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 15
            echo "            <li class=\"col-6 col-lg-3 mb-30\">
                <a class=\"bordered-box\" data-fancybox=\"gallery\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "method", false, false, false, 16), "html", null, true);
            echo "\">
                    <img class=\"w-100\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "method", false, false, false, 17), "html", null, true);
            echo "\" alt=\"\">
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/screenshots.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  70 => 17,  66 => 16,  63 => 15,  59 => 14,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set gallery = homeContent.gallery %}
<section class=\"content-section screenshots-section container-fluid\" id=\"screenshots\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">111</p>
            <span class=\"section-dot\"></span>
            <img src=\"{{ 'assets/images/orns/orn-section.svg'|theme }}\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">{{  homeContent.galery_title }}</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <ul class=\"row gallery\">
        {% for image in gallery %}
            <li class=\"col-6 col-lg-3 mb-30\">
                <a class=\"bordered-box\" data-fancybox=\"gallery\" href=\"{{ image.path() }}\">
                    <img class=\"w-100\" src=\"{{ image.path() }}\" alt=\"\">
                </a>
            </li>
        {% endfor %}
    </ul>
</section>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/screenshots.htm", "");
    }
}
