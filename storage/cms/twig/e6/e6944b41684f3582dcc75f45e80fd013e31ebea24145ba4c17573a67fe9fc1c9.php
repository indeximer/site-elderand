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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/partials/footer.htm */
class __TwigTemplate_3cca69360bd3540deecb6d16735a1396491e4fd26a9021d97b2ba90fd869117f extends \Twig\Template
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
        echo "<section class=\"conteinar-fluid footer-logos\">
    <div class=\"row\">
        <div class=\"container\">
            <div class=\"row align-logos justify-content-between align-items-center\">
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/mantra.png");
        echo "\" alt=\"logo-mantra\"></div>
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/sinergia.png");
        echo "\" alt=\"logo-sinergia\"></div>
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/ancine.png");
        echo "\" alt=\"logo-ancine\"></div>
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/brde.png");
        echo "\" alt=\"logo-brde\"></div>
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/fsa.png");
        echo "\" alt=\"logo-brde\"></div>
            </div>
        </div>
    </div>
</section>

<footer class=\"footer container-fluid\">
    <div class=\"row text-center\">
        <div class=\"col-12 social-icons\">
            <div class=\"col-12 social-icons mb-20\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["socialItems"] ?? null), "records", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                    <a class=\"social-item\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 20), "html", null, true);
            echo "\" target=\"_blank\">
                        <img class=\"mw-100\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21), "path", [], "method", false, false, false, 21), "html", null, true);
            echo "\" alt=\"elderand-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </div>
        </div>
        <div class=\"col-12 font-12\">
            <p class=\"mb-0\">Elderand ©2020 Mantra & Sinergia Games, august 2020.</p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 21,  76 => 20,  72 => 19,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"conteinar-fluid footer-logos\">
    <div class=\"row\">
        <div class=\"container\">
            <div class=\"row align-logos justify-content-between align-items-center\">
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"{{ 'assets/images/logos/mantra.png'|theme }}\" alt=\"logo-mantra\"></div>
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"{{ 'assets/images/logos/sinergia.png'|theme }}\" alt=\"logo-sinergia\"></div>
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"{{ 'assets/images/logos/ancine.png'|theme }}\" alt=\"logo-ancine\"></div>
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"{{ 'assets/images/logos/brde.png'|theme }}\" alt=\"logo-brde\"></div>
                <div class=\"col-6 col-lg-auto\"><img class=\"mw-100\" src=\"{{ 'assets/images/logos/fsa.png'|theme }}\" alt=\"logo-brde\"></div>
            </div>
        </div>
    </div>
</section>

<footer class=\"footer container-fluid\">
    <div class=\"row text-center\">
        <div class=\"col-12 social-icons\">
            <div class=\"col-12 social-icons mb-20\">
                {% for item in socialItems.records %}
                    <a class=\"social-item\" href=\"{{ item.link }}\" target=\"_blank\">
                        <img class=\"mw-100\" src=\"{{ item.image.path() }}\" alt=\"elderand-{{ item.name }}\">
                    </a>
                {% endfor %}
            </div>
        </div>
        <div class=\"col-12 font-12\">
            <p class=\"mb-0\">Elderand ©2020 Mantra & Sinergia Games, august 2020.</p>
        </div>
    </div>
</footer>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/footer.htm", "");
    }
}
