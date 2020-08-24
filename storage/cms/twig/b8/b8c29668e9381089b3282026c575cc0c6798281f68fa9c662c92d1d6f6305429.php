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

/* D:\wamp64\www\sites\elderand-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm */
class __TwigTemplate_b6f0f2df1e0b801be99d1fdd42a1c173e766962977b7f077eda879b6ee69af6c extends \Twig\Template
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
        if ((((($context["formSentAlias"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, false, 1)) && twig_test_empty(($context["formError"] ?? null))) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["form_hide_after_success", 0]))) {
            // line 2
            echo "
\t";
            // line 4
            echo "
";
        } else {
            // line 6
            echo "
\t";
            // line 7
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFormAttributes", [], "any", false, false, false, 7)]);
            echo "

\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fields", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 10
                echo "
\t\t\t";
                // line 11
                echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFieldHtmlCode", [0 => $context["field"]], "method", false, false, false, 11);
                echo "

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
\t\t";
            // line 15
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getAntispamFieldHtmlCode", [0 => []], "method", false, false, false, 15);
            echo "

\t\t";
            // line 17
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getDescriptionFieldHtmlCode", [0 => []], "method", false, false, false, 17);
            echo "
\t\t
\t\t";
            // line 19
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getRedirectFieldHtmlCode", [0 => []], "method", false, false, false, 19);
            echo "

\t\t";
            // line 21
            if (((((null === call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"])) || (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"]) == "v2checkbox")) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["add_google_recaptcha"])) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_site_key"]))) {
                // line 22
                echo "
\t\t\t<div class=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getReCaptchaWrapperClass", [], "method", false, false, false, 23), "html", null, true);
                echo "\">

\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
                // line 25
                echo call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_site_key"]);
                echo "\"></div>

\t\t\t</div>

\t\t";
            }
            // line 30
            echo "
\t\t";
            // line 31
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSubmitButtonHtmlCode", [0 => []], "method", false, false, false, 31);
            echo "

\t";
            // line 33
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

\t";
            // line 35
            if ((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["add_google_recaptcha"]) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_scripts_allow"]))) {
                // line 36
                echo "\t
\t\t<script src='https://www.google.com/recaptcha/api.js";
                // line 37
                (((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_locale_allow"]) && ($context["currentLocale"] ?? null))) ? (print (twig_escape_filter($this->env, ("?hl=" . ($context["currentLocale"] ?? null)), "html", null, true))) : (print ("")));
                echo "' async defer></script>

\t\t";
                // line 39
                if ((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"]) == "v2invisible")) {
                    // line 40
                    echo "
\t\t\t<script>
\t\t\t\t
\t\t\t\tfunction onSubmit_";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, false, 43), "html", null, true);
                    echo "(token) {

\t\t\t\t\treturn new Promise(function(resolve, reject) { 

\t\t\t\t\t\t//Your code logic goes here

\t\t\t\t\t\tdocument.getElementById(\"";
                    // line 49
                    echo twig_escape_filter($this->env, ("scf-form-id-" . twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, false, 49)), "html", null, true);
                    echo "\").submit();
\t\t\t\t\t\tresolve();

\t\t\t\t\t}); //end promise
\t\t\t\t}

\t\t\t</script>

\t\t";
                }
                // line 58
                echo "
\t";
            }
            // line 60
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\sites\\elderand-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 60,  157 => 58,  145 => 49,  136 => 43,  131 => 40,  129 => 39,  124 => 37,  121 => 36,  119 => 35,  114 => 33,  109 => 31,  106 => 30,  98 => 25,  93 => 23,  90 => 22,  88 => 21,  83 => 19,  78 => 17,  73 => 15,  70 => 14,  61 => 11,  58 => 10,  54 => 9,  49 => 7,  46 => 6,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if formSentAlias == __SELF__.alias and formError is empty and settingsGet('form_hide_after_success', 0) %}

\t{# no errors and set to hide after send #}

{% else %}

\t{{ form_open(__SELF__.getFormAttributes) }}

\t\t{% for field in __SELF__.fields %}

\t\t\t{{ __SELF__.getFieldHtmlCode(field)|raw }}

\t\t{% endfor %}

\t\t{{ __SELF__.getAntispamFieldHtmlCode({})|raw }}

\t\t{{ __SELF__.getDescriptionFieldHtmlCode({})|raw }}
\t\t
\t\t{{ __SELF__.getRedirectFieldHtmlCode({})|raw }}

\t\t{% if (settingsGet('google_recaptcha_version') is null or settingsGet('google_recaptcha_version') == 'v2checkbox') and settingsGet('add_google_recaptcha') and settingsGet('google_recaptcha_site_key') %}

\t\t\t<div class=\"{{__SELF__.getReCaptchaWrapperClass()}}\">

\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ settingsGet('google_recaptcha_site_key') }}\"></div>

\t\t\t</div>

\t\t{% endif %}

\t\t{{ __SELF__.getSubmitButtonHtmlCode({})|raw }}

\t{{ form_close() }}

\t{% if settingsGet('add_google_recaptcha') and settingsGet('google_recaptcha_scripts_allow') %}
\t
\t\t<script src='https://www.google.com/recaptcha/api.js{{ settingsGet(\"google_recaptcha_locale_allow\") and currentLocale ? (\"?hl=\"~currentLocale) }}' async defer></script>

\t\t{% if settingsGet('google_recaptcha_version') == 'v2invisible' %}

\t\t\t<script>
\t\t\t\t
\t\t\t\tfunction onSubmit_{{ __SELF__.alias }}(token) {

\t\t\t\t\treturn new Promise(function(resolve, reject) { 

\t\t\t\t\t\t//Your code logic goes here

\t\t\t\t\t\tdocument.getElementById(\"{{'scf-form-id-'~__SELF__.alias}}\").submit();
\t\t\t\t\t\tresolve();

\t\t\t\t\t}); //end promise
\t\t\t\t}

\t\t\t</script>

\t\t{% endif %}

\t{% endif %}

{% endif %}
", "D:\\wamp64\\www\\sites\\elderand-site/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm", "");
    }
}
