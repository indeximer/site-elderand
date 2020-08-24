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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/partials/game-section.htm */
class __TwigTemplate_8b2b31c5bea420709b1cf6be607a4a4bc02df2988c5b3a64c4784a6c54a9d4b1 extends \Twig\Template
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
        echo "<section class=\"content-section highlight-section container-fluid\" id=\"game\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">1</p>
            <span class=\"section-dot\"></span>
            <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/orns/orn-section.svg");
        echo "\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "highlight_title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <div class=\"row\">
        <div class=\"container pt-60 description\">
            <div class=\"row justify-content-end mb-30\">
                <div class=\"col-12 col-lg-6 mb-30\">
                    ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "highlight_description", [], "any", false, false, false, 16);
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"row hero-title\">
        <div class=\"col-12\">
            <p class=\"page-title\">
                ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "highlight_cta", [], "any", false, false, false, 25);
        echo "
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-lg-8\">
                    <div class=\"orn-box d-none\">
                        <iframe class=\"video-frame\" src=\"https://www.youtube.com/embed/";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["homeContent"] ?? null), "highlight_video", [], "any", false, false, false, 35), "html", null, true);
        echo "?autoplay=0&rel=0\" frameborder=\"0\" allow=\"accelerometer; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row made-with justify-content-center\">
        <div class=\"col-5 col-lg-auto\">
            <img class=\"mw-100\" src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home/unity.png");
        echo "\" alt=\"logo-unity\">
        </div>
        <div class=\"col-5 col-lg-auto\">
            <img class=\"mw-100\" src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home/esrb.png");
        echo "\" alt=\"logo-unity\">
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/game-section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 47,  97 => 44,  85 => 35,  72 => 25,  60 => 16,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"content-section highlight-section container-fluid\" id=\"game\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">1</p>
            <span class=\"section-dot\"></span>
            <img src=\"{{ 'assets/images/orns/orn-section.svg'|theme }}\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">{{ homeContent.highlight_title }}</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <div class=\"row\">
        <div class=\"container pt-60 description\">
            <div class=\"row justify-content-end mb-30\">
                <div class=\"col-12 col-lg-6 mb-30\">
                    {{ homeContent.highlight_description|raw }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"row hero-title\">
        <div class=\"col-12\">
            <p class=\"page-title\">
                {{ homeContent.highlight_cta|raw }}
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-lg-8\">
                    <div class=\"orn-box d-none\">
                        <iframe class=\"video-frame\" src=\"https://www.youtube.com/embed/{{  homeContent.highlight_video }}?autoplay=0&rel=0\" frameborder=\"0\" allow=\"accelerometer; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row made-with justify-content-center\">
        <div class=\"col-5 col-lg-auto\">
            <img class=\"mw-100\" src=\"{{ 'assets/images/home/unity.png'|theme }}\" alt=\"logo-unity\">
        </div>
        <div class=\"col-5 col-lg-auto\">
            <img class=\"mw-100\" src=\"{{ 'assets/images/home/esrb.png'|theme }}\" alt=\"logo-unity\">
        </div>
    </div>
</section>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/game-section.htm", "");
    }
}
