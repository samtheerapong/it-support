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

/* pages/management/contract.html.twig */
class __TwigTemplate_852a733ff4e339bb2c61a594bc23bc65993bea6be8575075cdae5c583e5bea89 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/management/contract.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/management/contract.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["num",         // line 41
($context["item"] ?? null), _x("phone", "Number"),         // line 43
($context["withtemplate"] ?? null)], 39, $context, $this->getSourceContext());
        // line 44
        echo "

   ";
        // line 46
        if (( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["begin_date"] ?? null) : null)) &&  !twig_test_empty((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["duration"] ?? null) : null)))) {
            // line 47
            echo "      ";
            ob_start(function () { return ''; });
            // line 48
            echo "         <i class=\"fas fa-arrow-right\"></i>
         ";
            // line 49
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Infocom::getWarrantyExpir", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 50
($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["begin_date"] ?? null) : null), 1 => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,             // line 51
($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["duration"] ?? null) : null), 2 => 0, 3 => true, 4 => (0 === twig_compare((($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["renewal"] ?? null) : null), twig_constant("Contract::RENEWAL_TACIT")))]);
            // line 55
            echo "
      ";
            $context["warranty_expiration"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            echo "   ";
        }
        // line 58
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["duration", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["duration"] ?? null) : null), __("Initial contract period"), ["rand" =>         // line 59
($context["rand"] ?? null), "min" => 1, "max" => 120, "step" => 1, "toadd" => [0 => twig_constant("Dropdown::EMPTY_VALUE")], "unit" => "month", "add_field_html" => ((        // line 65
array_key_exists("warranty_expiration", $context)) ? (_twig_default_filter(($context["warranty_expiration"] ?? null), "")) : (""))]], 58, $context, $this->getSourceContext());
        // line 66
        echo "

   ";
        // line 68
        if ((( !twig_test_empty((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["begin_date"] ?? null) : null)) && (1 === twig_compare((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["notice"] ?? null) : null), 0))) &&  !twig_test_empty((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["duration"] ?? null) : null)))) {
            // line 69
            echo "      ";
            ob_start(function () { return ''; });
            // line 70
            echo "         <i class=\"fas fa-arrow-right\"></i>
         ";
            // line 71
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Infocom::getWarrantyExpir", [0 => (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 72
($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["begin_date"] ?? null) : null), 1 => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 73
($context["item"] ?? null), "fields", [], "any", false, false, false, 73)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["duration"] ?? null) : null), 2 => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 74
($context["item"] ?? null), "fields", [], "any", false, false, false, 74)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["notice"] ?? null) : null), 3 => true]);
            // line 76
            echo "
      ";
            $context["notice_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            echo "   ";
        }
        // line 79
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["notice", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["notice"] ?? null) : null), __("Notice"), ["rand" =>         // line 80
($context["rand"] ?? null), "min" => 0, "max" => 120, "step" => 1, "unit" => "month", "add_field_html" => ((        // line 85
array_key_exists("notice_info", $context)) ? (_twig_default_filter(($context["notice_info"] ?? null), "")) : (""))]], 79, $context, $this->getSourceContext());
        // line 86
        echo "

   ";
        // line 88
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["accounting_number",         // line 90
($context["item"] ?? null), __("Account number"),         // line 92
($context["withtemplate"] ?? null)], 88, $context, $this->getSourceContext());
        // line 93
        echo "

   ";
        // line 95
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["periodicity", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["periodicity"] ?? null) : null), __("Contract renewal period"), ["rand" =>         // line 96
($context["rand"] ?? null), "min" => 12, "max" => 60, "step" => 12, "toadd" => [0 => twig_constant("Dropdown::EMPTY_VALUE"), 1 => twig_sprintf(_n("%d month", "%d months", 1), 1), 2 => twig_sprintf(_n("%d month", "%d months", 2), 2), 3 => twig_sprintf(_n("%d month", "%d months", 3), 3), 6 => twig_sprintf(_n("%d month", "%d months", 6), 6)], "unit" => "month"]], 95, $context, $this->getSourceContext());
        // line 108
        echo "

   ";
        // line 110
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["billing", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["billing"] ?? null) : null), __("Invoice period"), ["rand" =>         // line 111
($context["rand"] ?? null), "min" => 12, "max" => 60, "step" => 12, "toadd" => [0 => twig_constant("Dropdown::EMPTY_VALUE"), 1 => twig_sprintf(_n("%d month", "%d months", 1), 1), 2 => twig_sprintf(_n("%d month", "%d months", 2), 2), 3 => twig_sprintf(_n("%d month", "%d months", 3), 3), 6 => twig_sprintf(_n("%d month", "%d months", 6), 6)], "unit" => "month"]], 110, $context, $this->getSourceContext());
        // line 123
        echo "

   ";
        // line 125
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["renewal", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["renewal"] ?? null) : null), [twig_constant("Contract::RENEWAL_NEVER") => __("Never"), twig_constant("Contract::RENEWAL_TACIT") => __("Tacit"), twig_constant("Contract::RENEWAL_EXPRESS") => __("Express")], __("Renewal")], 125, $context, $this->getSourceContext());
        // line 129
        echo "

   ";
        // line 131
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["max_links_allowed", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["max_links_allowed"] ?? null) : null), __("Max number of items"), ["min" => 1, "max" => 200000, "step" => 1, "toadd" => [0 => __("Unlimited")]]], 131, $context, $this->getSourceContext());
        // line 136
        echo "

   ";
        // line 138
        ob_start(function () { return ''; });
        // line 139
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => "Contract", 1 => (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null)]);
        // line 140
        echo "   ";
        $context["alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["alert", (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 141)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["alert"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAlertName", [], "method", false, false, false, 141), __("Email alarms"), ["add_field_html" => (("<span class=\"text-muted\">" .         // line 142
($context["alert_html"] ?? null)) . "</span>")]], 141, $context, $this->getSourceContext());
        // line 143
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/management/contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 143,  166 => 142,  164 => 141,  161 => 140,  158 => 139,  156 => 138,  152 => 136,  150 => 131,  146 => 129,  144 => 125,  140 => 123,  138 => 111,  137 => 110,  133 => 108,  131 => 96,  130 => 95,  126 => 93,  124 => 92,  123 => 90,  122 => 88,  118 => 86,  116 => 85,  115 => 80,  113 => 79,  110 => 78,  106 => 76,  104 => 74,  103 => 73,  102 => 72,  101 => 71,  98 => 70,  95 => 69,  93 => 68,  89 => 66,  87 => 65,  86 => 59,  84 => 58,  81 => 57,  77 => 55,  75 => 54,  74 => 51,  73 => 50,  72 => 49,  69 => 48,  66 => 47,  64 => 46,  60 => 44,  58 => 43,  57 => 41,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/management/contract.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\management\\contract.html.twig");
    }
}
