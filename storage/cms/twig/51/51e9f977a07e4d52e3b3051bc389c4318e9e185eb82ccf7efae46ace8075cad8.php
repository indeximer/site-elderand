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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/partials/header.htm */
class __TwigTemplate_b32f4363515f07e530c5d01b5bd1c666484485f5f4883cbf8235d73b861f272c extends \Twig\Template
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
        $context["menuItems"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        echo "
<section class=\"header container-fluid\" id=\"header\">
    <div class=\"main-menu-wrapper row align-items-center justify-content-between\">
        <div class=\"col d-xl-none\">
            <button class=\"btn-menu btn-open-modal\" data-target=\"#modal-menu\">
                <i class=\"icon-menu\"></i>
            </button>
        </div>
        <div class=\"col d-none d-xl-flex\">
            <p class=\"bold mb-0\">The Mercenary's tale.</p>
        </div>
        <nav class=\"col-auto d-none d-xl-flex\">
            <ul class=\"main-menu menu row text-uppercase font-regular font-16\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 16
            echo "                    <li class=\"col-auto ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "class", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                        <a class=\"scroll-to\" data-scrollto=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "link", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </ul>
        </nav>
        <div class=\"col locale-wrapper\">
            <i class=\"icon-language d-none\"></i>
            ";
        // line 26
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
        echo "
                <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control custom-select select-locale d-none\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 29
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </select>
            ";
        // line 32
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</section>

<section class=\"header fixed-header container-fluid\">
    <img class=\"logo\" src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/elderand-logo.svg");
        echo "\" alt=\"elderand-logo\">
    <div class=\"main-menu-wrapper row align-items-center justify-content-between\">
        <div class=\"col d-xl-none\">
            <button class=\"btn-menu btn-open-modal\" data-target=\"#modal-menu\">
                <i class=\"icon-menu\"></i>
            </button>
        </div>
        <div class=\"col d-none d-xl-flex\">
            <p class=\"bold mb-0\">The Mercenary's tale.</p>
        </div>
        <nav class=\"col-auto d-none d-xl-flex\">
            <ul class=\"main-menu menu row text-uppercase font-regular font-16\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 51
            echo "                    <li class=\"col-auto ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "class", [], "any", false, false, false, 51), "html", null, true);
            echo "\">
                        <a class=\"scroll-to\" data-scrollto=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "link", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                            ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "title", [], "any", false, false, false, 53), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </ul>
        </nav>
        <div class=\"col locale-wrapper\">
            <i class=\"icon-language d-none\"></i>
            ";
        // line 61
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
        echo "
                <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control custom-select select-locale d-none\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 64
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </select>
            ";
        // line 67
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
    <img class=\"orn-bar d-none d-lg-block\" src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/orns/orn-fixed-bar.svg");
        echo "\" alt=\"elderand-ornament\">
    <img class=\"orn-bar d-lg-none\" src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/orns/m-orn-fixed-bar.svg");
        echo "\" alt=\"elderand-ornament\">
</section>

<div class=\"modal-overlay modal-menu\" id=\"modal-menu\">
    <div class=\"pop-up-content text-center\">
        <button class=\"btn-close-modal\"><i class=\"icon-close\"></i></button>
        <div class=\"content-section\">
            <div class=\"row orn-bar\">
                <div class=\"col-12 text-center color-white p-0\">
                    <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/orns/orn-section.svg");
        echo "\" alt=\"logo-ornament\">
                    <h1 class=\"section-title text-uppercase\">Menu</h1>
                </div>        
            </div>
        </div>
        <ul class=\"modal-menu-wrapper\">
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 87
            echo "                <li class=\"col-auto ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "class", [], "any", false, false, false, 87), "html", null, true);
            echo "\">
                    <a class=\"scroll-to btn-close-modal\" data-scrollto=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "link", [], "any", false, false, false, 88), "html", null, true);
            echo "\">
                        ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "title", [], "any", false, false, false, 89), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 93,  230 => 89,  226 => 88,  221 => 87,  217 => 86,  208 => 80,  196 => 71,  192 => 70,  186 => 67,  183 => 66,  170 => 64,  166 => 63,  161 => 61,  155 => 57,  145 => 53,  141 => 52,  136 => 51,  132 => 50,  117 => 38,  108 => 32,  105 => 31,  92 => 29,  88 => 28,  83 => 26,  77 => 22,  67 => 18,  63 => 17,  58 => 16,  54 => 15,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set menuItems = builderList.records %}

<section class=\"header container-fluid\" id=\"header\">
    <div class=\"main-menu-wrapper row align-items-center justify-content-between\">
        <div class=\"col d-xl-none\">
            <button class=\"btn-menu btn-open-modal\" data-target=\"#modal-menu\">
                <i class=\"icon-menu\"></i>
            </button>
        </div>
        <div class=\"col d-none d-xl-flex\">
            <p class=\"bold mb-0\">The Mercenary's tale.</p>
        </div>
        <nav class=\"col-auto d-none d-xl-flex\">
            <ul class=\"main-menu menu row text-uppercase font-regular font-16\">
                {% for menuItem in menuItems %}
                    <li class=\"col-auto {{ menuItem.class }}\">
                        <a class=\"scroll-to\" data-scrollto=\"{{ menuItem.link }}\">
                            {{ menuItem.title }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
        <div class=\"col locale-wrapper\">
            <i class=\"icon-language d-none\"></i>
            {{ form_open() }}
                <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control custom-select select-locale d-none\">
                    {% for code, name in locales %}
                        <option value=\"{{ code }}\" {{ code == activeLocale ? 'selected' }}>{{ name }}</option>
                    {% endfor %}
                </select>
            {{ form_close() }}
        </div>
    </div>
</section>

<section class=\"header fixed-header container-fluid\">
    <img class=\"logo\" src=\"{{ 'assets/images/elderand-logo.svg'|theme }}\" alt=\"elderand-logo\">
    <div class=\"main-menu-wrapper row align-items-center justify-content-between\">
        <div class=\"col d-xl-none\">
            <button class=\"btn-menu btn-open-modal\" data-target=\"#modal-menu\">
                <i class=\"icon-menu\"></i>
            </button>
        </div>
        <div class=\"col d-none d-xl-flex\">
            <p class=\"bold mb-0\">The Mercenary's tale.</p>
        </div>
        <nav class=\"col-auto d-none d-xl-flex\">
            <ul class=\"main-menu menu row text-uppercase font-regular font-16\">
                {% for menuItem in menuItems %}
                    <li class=\"col-auto {{ menuItem.class }}\">
                        <a class=\"scroll-to\" data-scrollto=\"{{ menuItem.link }}\">
                            {{ menuItem.title }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
        <div class=\"col locale-wrapper\">
            <i class=\"icon-language d-none\"></i>
            {{ form_open() }}
                <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control custom-select select-locale d-none\">
                    {% for code, name in locales %}
                        <option value=\"{{ code }}\" {{ code == activeLocale ? 'selected' }}>{{ name }}</option>
                    {% endfor %}
                </select>
            {{ form_close() }}
        </div>
    </div>
    <img class=\"orn-bar d-none d-lg-block\" src=\"{{ 'assets/images/orns/orn-fixed-bar.svg'|theme }}\" alt=\"elderand-ornament\">
    <img class=\"orn-bar d-lg-none\" src=\"{{ 'assets/images/orns/m-orn-fixed-bar.svg'|theme }}\" alt=\"elderand-ornament\">
</section>

<div class=\"modal-overlay modal-menu\" id=\"modal-menu\">
    <div class=\"pop-up-content text-center\">
        <button class=\"btn-close-modal\"><i class=\"icon-close\"></i></button>
        <div class=\"content-section\">
            <div class=\"row orn-bar\">
                <div class=\"col-12 text-center color-white p-0\">
                    <img src=\"{{ 'assets/images/orns/orn-section.svg'|theme }}\" alt=\"logo-ornament\">
                    <h1 class=\"section-title text-uppercase\">Menu</h1>
                </div>        
            </div>
        </div>
        <ul class=\"modal-menu-wrapper\">
            {% for menuItem in menuItems %}
                <li class=\"col-auto {{ menuItem.class }}\">
                    <a class=\"scroll-to btn-close-modal\" data-scrollto=\"{{ menuItem.link }}\">
                        {{ menuItem.title }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
</div>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/header.htm", "");
    }
}
