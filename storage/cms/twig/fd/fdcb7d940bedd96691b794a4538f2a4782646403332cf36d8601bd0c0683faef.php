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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/pages/home.htm */
class __TwigTemplate_ead45b81db847df1ee86db2c77c544d3abafc81422817903cfec952b3605f745 extends \Twig\Template
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
        $context["homeContent"] = twig_get_attribute($this->env, $this->source, ($context["home"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
";
        // line 5
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['homeContent'] = ($context["homeContent"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("game-section"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
";
        // line 7
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['homeContent'] = ($context["homeContent"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "
";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['homeContent'] = ($context["homeContent"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("screenshots"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "
";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog-highlights"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  77 => 12,  73 => 11,  70 => 10,  65 => 9,  62 => 8,  57 => 7,  54 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set homeContent = home.record %}

{% partial 'banner' %}

{% partial 'game-section' homeContent=homeContent %}

{% partial 'features' homeContent=homeContent %}

{% partial 'screenshots' homeContent=homeContent %}

{% partial 'blog-highlights' %}

{% partial 'form' %}", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/pages/home.htm", "");
    }
}
