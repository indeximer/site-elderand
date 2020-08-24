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

/* D:\wamp64\www\sites\elderand-site/themes/elderand/partials/form.htm */
class __TwigTemplate_0487985a71f2c0f9b158830559729e12f88580e155bac6c78d5b47a9f7471216 extends \Twig\Template
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
        echo "<section class=\"content-section contact-section container-fluid\" id=\"contact\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">v</p>
            <span class=\"section-dot\"></span>
            <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/orns/orn-section.svg");
        echo "\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <div class=\"row\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"mb-30 text-center\">
                        ";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Lorem ipsum dolor sit amet, consetetur sadipscing elitr."]);
        echo "
                    </p>
                </div>
            </div>  
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-lg-6\">
                    ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "                </div>
            </div>            
        </div>     
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  70 => 23,  61 => 17,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"content-section contact-section container-fluid\" id=\"contact\">
    <div class=\"row orn-bar\">
        <div class=\"col-12 text-center color-white p-0\">
            <p class=\"section-number font-regular\">v</p>
            <span class=\"section-dot\"></span>
            <img src=\"{{ 'assets/images/orns/orn-section.svg'|theme }}\" alt=\"logo-ornament\">
            <h1 class=\"section-title text-uppercase\">{{ 'Contact'|_ }}</h1>
            <span class=\"section-line\"></span>
        </div>        
    </div>

    <div class=\"row\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"mb-30 text-center\">
                        {{ \"Lorem ipsum dolor sit amet, consetetur sadipscing elitr.\"|_ }}
                    </p>
                </div>
            </div>  
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-lg-6\">
                    {% component 'contactForm' %}
                </div>
            </div>            
        </div>     
    </div>
</section>", "D:\\wamp64\\www\\sites\\elderand-site/themes/elderand/partials/form.htm", "");
    }
}
