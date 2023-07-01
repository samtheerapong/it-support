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

/* pages/assets/phone.html.twig */
class __TwigTemplate_3453d524510132fac63ac5ff3abf6c2aa2e1319e5c1d04e0d6d6aa220fb8895c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/phone.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/phone.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_numberField", ["number_line", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["number_line"] ?? null) : null), _x("quantity", "Number of lines"),         // line 43
($context["field_options"] ?? null)], 39, $context, $this->getSourceContext());
        // line 44
        echo "

    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["PhonePowerSupply", "phonepowersupplies_id", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["phonepowersupplies_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("PhonePowerSupply"),         // line 51
($context["field_options"] ?? null)], 46, $context, $this->getSourceContext());
        // line 52
        echo "

    ";
        // line 54
        ob_start(function () { return ''; });
        // line 55
        echo "    ";
        echo twig_include($this->env, $context, "components/form/flags.html.twig");
        echo "
    ";
        $context["flags_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "
    ";
        // line 58
        if (twig_length_filter($this->env, twig_trim_filter(($context["flags_html"] ?? null)))) {
            // line 59
            echo "        ";
            $context["flags_html"] = (("<div class=\"d-flex flex-wrap\">" . ($context["flags_html"] ?? null)) . "</div>");
            // line 60
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 62
($context["flags_html"] ?? null), _n("Port", "Ports", Session::getPluralNumber())], 60, $context, $this->getSourceContext());
            // line 64
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "pages/assets/phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 64,  90 => 62,  88 => 60,  85 => 59,  83 => 58,  80 => 57,  74 => 55,  72 => 54,  68 => 52,  66 => 51,  65 => 49,  64 => 46,  60 => 44,  58 => 43,  57 => 41,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/phone.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\assets\\phone.html.twig");
    }
}
