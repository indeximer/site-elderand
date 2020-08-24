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

/* D:\wamp64\www\sites\elderand-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm */
class __TwigTemplate_398a89ea5c362da231693e8410c0ae1a23ff03475623d5be64885f70ce04c492 extends \Twig\Template
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
        echo "
";
        // line 2
        if ((($context["formSentAlias"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, false, 2))) {
            // line 3
            echo "
\t";
            // line 4
            if (($context["formSuccess"] ?? null)) {
                // line 5
                echo "
\t\t";
                // line 6
                echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getGaSuccessEventHtmlCode", [0 => true], "method", false, false, false, 6);
                echo "

\t\t";
                $_type = isset($context["type"]) ? $context["type"] : null;                $_message = isset($context["message"]) ? $context["message"] : null;                // line 8
                $context["type"] = "success"                ;                foreach (Flash::success                () as $message) {
                    $context["message"] = $message;                    // line 9
                    echo "
\t\t\t<div class=\"alert alert-";
                    // line 10
                    (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                    echo "\">
\t\t\t\t";
                    // line 11
                    echo nl2br(call_user_func_array($this->env->getFunction('html_entity_decode')->getCallable(), [($context["message"] ?? null)]));
                    echo "
\t\t\t</div>

\t\t";
                }
                $context["type"] = $_type;                $context["message"] = $_message;                // line 15
                echo "
\t";
            } elseif (            // line 16
($context["formError"] ?? null)) {
                // line 17
                echo "
\t\t";
                $_type = isset($context["type"]) ? $context["type"] : null;                $_message = isset($context["message"]) ? $context["message"] : null;                // line 18
                $context["type"] = "error"                ;                foreach (Flash::error                () as $message) {
                    $context["message"] = $message;                    // line 19
                    echo "
\t\t\t<div class=\"alert alert-";
                    // line 20
                    (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                    echo "\">
\t\t\t\t";
                    // line 21
                    echo nl2br(call_user_func_array($this->env->getFunction('html_entity_decode')->getCallable(), [($context["message"] ?? null)]));
                    echo "
\t\t\t</div>

\t\t";
                }
                $context["type"] = $_type;                $context["message"] = $_message;                // line 25
                echo "
\t";
            }
            // line 27
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  95 => 25,  88 => 21,  84 => 20,  81 => 19,  79 => 18,  76 => 17,  74 => 16,  71 => 15,  64 => 11,  60 => 10,  57 => 9,  55 => 8,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if formSentAlias == __SELF__.alias %}

\t{% if formSuccess %}

\t\t{{ __SELF__.getGaSuccessEventHtmlCode(true)|raw }}

\t\t{% flash success %}

\t\t\t<div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
\t\t\t\t{{ html_entity_decode(message)|nl2br }}
\t\t\t</div>

\t\t{% endflash %}

\t{% elseif formError %}

\t\t{% flash error %}

\t\t\t<div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
\t\t\t\t{{ html_entity_decode(message)|nl2br }}
\t\t\t</div>

\t\t{% endflash %}

\t{% endif %}

{% endif %}", "D:\\wamp64\\www\\sites\\elderand-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm", "");
    }
}
