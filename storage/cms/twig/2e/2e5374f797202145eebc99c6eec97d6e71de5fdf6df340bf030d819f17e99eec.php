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
    <img class=\"mw-100\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/bg-deep-blue.png");
        echo "\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"-2\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/parallax-04.png");
        echo "\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"7\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/fog-03.png");
        echo "\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"-2\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/parallax-03.png");
        echo "\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"7\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/fog-02.png");
        echo "\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"-2\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/parallax-02.png");
        echo "\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"7\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/fog-01.png");
        echo "\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"0\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/parallax-banner/parallax-01.png");
        echo "\" alt=\"img-banner-elderand\">

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
        return array (  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"parallax-banner\">
    <img class=\"mw-100\" src=\"{{ 'assets/images/parallax-banner/bg-deep-blue.png'|theme }}\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"-2\" src=\"{{ 'assets/images/parallax-banner/parallax-04.png'|theme }}\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"7\" src=\"{{ 'assets/images/parallax-banner/fog-03.png'|theme }}\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"-2\" src=\"{{ 'assets/images/parallax-banner/parallax-03.png'|theme }}\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"7\" src=\"{{ 'assets/images/parallax-banner/fog-02.png'|theme }}\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"-2\" src=\"{{ 'assets/images/parallax-banner/parallax-02.png'|theme }}\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"7\" src=\"{{ 'assets/images/parallax-banner/fog-01.png'|theme }}\" alt=\"img-banner-elderand\">
    <img class=\"mw-100 rellax\" data-rellax-speed=\"0\" src=\"{{ 'assets/images/parallax-banner/parallax-01.png'|theme }}\" alt=\"img-banner-elderand\">

</div>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/banner.htm", "");
    }
}
