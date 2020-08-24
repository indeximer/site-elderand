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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/partials/banner.htm */
class __TwigTemplate_3c77872fb1b181a585e0c4d962314b0f651d04a9e1db4f0edf681622dc43cf83 extends \Twig\Template
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
        echo "<div class=\"parallax-banner\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["Agent"] ?? null), "isMobile", [], "method", false, false, false, 2)) {
            // line 3
            echo "    <img class=\"mobile-banner\" data-rellax-speed=\"5\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/m-banner.png");
            echo "\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 banner-logo\" data-rellax-speed=\"7\" src=\"";
            // line 4
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/elderand-logo.svg");
            echo "\" alt=\"logo-elderand\">
    ";
        } else {
            // line 6
            echo "        <img class=\"mw-100\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/bg-deep-blue.png");
            echo "\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-11\" src=\"";
            // line 7
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/parallax-04.png");
            echo "\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-10\" src=\"";
            // line 8
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/fog-03.png");
            echo "\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-7\" src=\"";
            // line 9
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/parallax-03.png");
            echo "\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-9\" src=\"";
            // line 10
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/fog-02.png");
            echo "\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-5\" src=\"";
            // line 11
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/parallax-02.png");
            echo "\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-7\" src=\"";
            // line 12
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/fog-01.png");
            echo "\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax banner-logo\" data-rellax-speed=\"-13\" src=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/elderand-logo.svg");
            echo "\" alt=\"logo-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"0\" src=\"";
            // line 14
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/parallax-01.png");
            echo "\" alt=\"img-banner-elderand\">
    ";
        }
        // line 16
        echo "
    <div class=\"banner-content text-center\">
        <p class=\"color-white bold font-30 mb-20\">
            ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Coming soon!"]);
        echo "
        </p>
        <div class=\"d-flex justify-content-center mb-20\">
            <a class=\"btn btn-primary\" href=\"http>//steam.com\" target=\"_blank\">
                <i class=\"icon-steam\"></i>
                Steam
            </a>
        </div>
        <p class=\"color-white mb-20 d-none\">
            ";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Are you press?"]);
        echo " <a class=\"styled-link\" href=\"http://google.com\" target=\"_blank\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Press Kit"]);
        echo "</a>
        </p>
        <a class=\"scroll-to continue-link mb-0 text-uppercase font-12\" data-scrollto=\"#game\">
            ";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Continue"]);
        echo " <br>
            <i class=\"icon-arrow-down font-22\"></i>
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  107 => 28,  95 => 19,  90 => 16,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  52 => 6,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"parallax-banner\">
    {% if Agent.isMobile()  %}
    <img class=\"mobile-banner\" data-rellax-speed=\"5\" src=\"{{ 'assets/images/parallax-banner/m-banner.png'|theme }}\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 banner-logo\" data-rellax-speed=\"7\" src=\"{{ 'assets/images/elderand-logo.svg'|theme }}\" alt=\"logo-elderand\">
    {% else %}
        <img class=\"mw-100\" src=\"{{ 'assets/images/parallax-banner/bg-deep-blue.png'|theme }}\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-11\" src=\"{{ 'assets/images/parallax-banner/parallax-04.png'|theme }}\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-10\" src=\"{{ 'assets/images/parallax-banner/fog-03.png'|theme }}\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-7\" src=\"{{ 'assets/images/parallax-banner/parallax-03.png'|theme }}\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-9\" src=\"{{ 'assets/images/parallax-banner/fog-02.png'|theme }}\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-5\" src=\"{{ 'assets/images/parallax-banner/parallax-02.png'|theme }}\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"-7\" src=\"{{ 'assets/images/parallax-banner/fog-01.png'|theme }}\" alt=\"img-banner-elderand\">
        <img class=\"mw-100 rellax banner-logo\" data-rellax-speed=\"-13\" src=\"{{ 'assets/images/elderand-logo.svg'|theme }}\" alt=\"logo-elderand\">
        <img class=\"mw-100 rellax\" data-rellax-speed=\"0\" src=\"{{ 'assets/images/parallax-banner/parallax-01.png'|theme }}\" alt=\"img-banner-elderand\">
    {% endif %}

    <div class=\"banner-content text-center\">
        <p class=\"color-white bold font-30 mb-20\">
            {{ 'Coming soon!'|_ }}
        </p>
        <div class=\"d-flex justify-content-center mb-20\">
            <a class=\"btn btn-primary\" href=\"http>//steam.com\" target=\"_blank\">
                <i class=\"icon-steam\"></i>
                Steam
            </a>
        </div>
        <p class=\"color-white mb-20 d-none\">
            {{ 'Are you press?'|_ }} <a class=\"styled-link\" href=\"http://google.com\" target=\"_blank\">{{ 'Press Kit'|_ }}</a>
        </p>
        <a class=\"scroll-to continue-link mb-0 text-uppercase font-12\" data-scrollto=\"#game\">
            {{ 'Continue'|_ }} <br>
            <i class=\"icon-arrow-down font-22\"></i>
        </a>
    </div>
</div>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/banner.htm", "");
    }
}
