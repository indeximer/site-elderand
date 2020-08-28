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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/layouts/default.htm */
class __TwigTemplate_7c041791f02b4c632d5e92867f3c0ebd17e57b24d404a637358ae6a2b1180911 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("alternateHrefLangElements"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Elderand - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Douglas Fortunato\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <meta property=\"og:image\" content=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/promo.png");
        echo "\">
        <meta property=\"og:image:type\" content=\"image/png\">
        <meta property=\"og:image:width\" content=\"1024\">
        <meta property=\"og:image:height\" content=\"576\">
        <meta property=\"og:type\" content=\"website\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
        <link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.min.css");
        echo "?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-176564639-1\"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-176564639-1');
        </script>

    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "        </header>

        <!-- Content -->
        <main>
            ";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 42
        echo "        </main>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.min.js");
        echo "\"></script>
        ";
        // line 51
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 52
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 53
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 53,  143 => 52,  132 => 51,  128 => 50,  123 => 47,  119 => 46,  113 => 42,  111 => 41,  105 => 37,  101 => 36,  84 => 21,  81 => 20,  75 => 19,  71 => 18,  62 => 12,  55 => 8,  51 => 7,  47 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'alternateHrefLangElements' %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Elderand - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Douglas Fortunato\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <meta property=\"og:image\" content=\"{{ 'assets/images/promo.png'|theme }}\">
        <meta property=\"og:image:type\" content=\"image/png\">
        <meta property=\"og:image:width\" content=\"1024\">
        <meta property=\"og:image:height\" content=\"576\">
        <meta property=\"og:type\" content=\"website\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\">
        <link href=\"{{ 'assets/css/style.min.css'|theme }}?v={{ random() }}\" rel=\"stylesheet\">
        {% styles %}

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-176564639-1\"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-176564639-1');
        </script>

    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'header' %}
        </header>

        <!-- Content -->
        <main>
            {% page %}
        </main>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/js/main.min.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/layouts/default.htm", "");
    }
}
