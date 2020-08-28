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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/partials/blog-highlights.htm */
class __TwigTemplate_a3eee78d1b79d6113b5198e251dc94555823ef276e7d21379b125bc847cf97be extends \Twig\Template
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
        echo "<section class=\"content-section blog-section container-fluid\" id=\"blog\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">1v</p>
            <span class=\"section-dot\"></span>
            <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/orns/orn-section.svg");
        echo "\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">Blog</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <div class=\"row\">
        <div class=\"col-12\">
            <p class=\"color-white bold font-30 mb-30 text-center\">
                ";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Coming soon"]);
        echo "
            </p>
        </div>        
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/blog-highlights.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"content-section blog-section container-fluid\" id=\"blog\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">1v</p>
            <span class=\"section-dot\"></span>
            <img src=\"{{ 'assets/images/orns/orn-section.svg'|theme }}\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">Blog</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <div class=\"row\">
        <div class=\"col-12\">
            <p class=\"color-white bold font-30 mb-30 text-center\">
                {{ 'Coming soon'|_ }}
            </p>
        </div>        
    </div>
</section>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/blog-highlights.htm", "");
    }
}
