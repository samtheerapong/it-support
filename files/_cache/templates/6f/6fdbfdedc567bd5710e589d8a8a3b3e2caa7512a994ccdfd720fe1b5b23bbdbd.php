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

/* pages/assets/operatingsystem.html.twig */
class __TwigTemplate_8158c363906236a8e6e51859ba1e20b221bdd79c98a85f31e56bd8c4fb9d6685 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/operatingsystem.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 37
        $context["no_header"] = true;
        // line 38
        $context["no_inventory_footer"] = true;
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/operatingsystem.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    <input type=\"hidden\" name=\"itemtype\" value=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
        echo "\">

    ";
        // line 44
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["OperatingSystem", "operatingsystems_id", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 47
($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["operatingsystems_id"] ?? null) : null), __("Name"),         // line 49
($context["field_options"] ?? null)], 44, $context, $this->getSourceContext());
        // line 50
        echo "

    ";
        // line 52
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["OperatingSystemVersion", "operatingsystemversions_id", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["operatingsystemversions_id"] ?? null) : null), _n("Version", "Versions", 1),         // line 57
($context["field_options"] ?? null)], 52, $context, $this->getSourceContext());
        // line 58
        echo "

    ";
        // line 60
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["OperatingSystemArchitecture", "operatingsystemarchitectures_id", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 63
($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["operatingsystemarchitectures_id"] ?? null) : null), _n("Architecture", "Architectures", 1),         // line 65
($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
        // line 66
        echo "

    ";
        // line 68
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["OperatingSystemServicePack", "operatingsystemservicepacks_id", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 71
($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["operatingsystemservicepacks_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("OperatingSystemServicePack"),         // line 73
($context["field_options"] ?? null)], 68, $context, $this->getSourceContext());
        // line 74
        echo "

    ";
        // line 76
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["OperatingSystemKernelVersion", "operatingsystemkernelversions_id", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["operatingsystemkernelversions_id"] ?? null) : null), _n("Kernel", "Kernels", 1),         // line 81
($context["field_options"] ?? null)], 76, $context, $this->getSourceContext());
        // line 82
        echo "

    ";
        // line 84
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["OperatingSystemEdition", "operatingsystemeditions_id", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,         // line 87
($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["operatingsystemeditions_id"] ?? null) : null), _n("Edition", "Editions", 1),         // line 89
($context["field_options"] ?? null)], 84, $context, $this->getSourceContext());
        // line 90
        echo "

    ";
        // line 92
        echo twig_call_macro($macros["fields"], "macro_textField", ["licenseid", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,         // line 94
($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["licenseid"] ?? null) : null), __("Product ID"),         // line 96
($context["field_options"] ?? null)], 92, $context, $this->getSourceContext());
        // line 97
        echo "

    ";
        // line 99
        echo twig_call_macro($macros["fields"], "macro_textField", ["license_number", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,         // line 101
($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["license_number"] ?? null) : null), __("Serial number"),         // line 103
($context["field_options"] ?? null)], 99, $context, $this->getSourceContext());
        // line 104
        echo "

    ";
        // line 106
        echo twig_call_macro($macros["fields"], "macro_htmlField", ["install_date", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_10 = twig_get_attribute($this->env, $this->source,         // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["install_date"] ?? null) : null)), __("Installation date")], 106, $context, $this->getSourceContext());
        // line 110
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/assets/operatingsystem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 110,  134 => 108,  133 => 106,  129 => 104,  127 => 103,  126 => 101,  125 => 99,  121 => 97,  119 => 96,  118 => 94,  117 => 92,  113 => 90,  111 => 89,  110 => 87,  109 => 84,  105 => 82,  103 => 81,  102 => 79,  101 => 76,  97 => 74,  95 => 73,  94 => 71,  93 => 68,  89 => 66,  87 => 65,  86 => 63,  85 => 60,  81 => 58,  79 => 57,  78 => 55,  77 => 52,  73 => 50,  71 => 49,  70 => 47,  69 => 44,  64 => 42,  59 => 41,  55 => 40,  50 => 34,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/operatingsystem.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\assets\\operatingsystem.html.twig");
    }
}
