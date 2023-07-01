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

/* components/form/support_hours.html.twig */
class __TwigTemplate_6799c4384bcf688f3d3caae74e16681a3137bd8caeef2b375b28399e49fabbe1 extends Template
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
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/support_hours.html.twig", 34)->unwrap();
        // line 35
        echo "
<div class=\"row mx-n2\">
   ";
        // line 37
        echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Support hours"), "fas fa-business-time"], 37, $context, $this->getSourceContext());
        echo "
   ";
        // line 38
        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("On week")], 38, $context, $this->getSourceContext());
        echo "
   ";
        // line 39
        echo twig_call_macro($macros["fields"], "macro_nullField", [["field_class" => "col-12 col-sm-4"]], 39, $context, $this->getSourceContext());
        echo "
   ";
        // line 40
        echo twig_call_macro($macros["fields"], "macro_dropdownHoursField", ["week_begin_hour", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["week_begin_hour"] ?? null) : null), __("Start"), ["field_class" => "col-12 col-sm-4"]], 40, $context, $this->getSourceContext());
        echo "
   ";
        // line 41
        echo twig_call_macro($macros["fields"], "macro_dropdownHoursField", ["week_end_hour", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["week_end_hour"] ?? null) : null), __("End"), ["field_class" => "col-12 col-sm-4"]], 41, $context, $this->getSourceContext());
        echo "

   ";
        // line 43
        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("On Saturday")], 43, $context, $this->getSourceContext());
        echo "
   ";
        // line 44
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["use_saturday", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["use_saturday"] ?? null) : null), __("Use Saturday"), ["field_class" => "col-12 col-sm-4"]], 44, $context, $this->getSourceContext());
        echo "
   ";
        // line 45
        echo twig_call_macro($macros["fields"], "macro_dropdownHoursField", ["saturday_begin_hour", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["saturday_begin_hour"] ?? null) : null), __("Start"), ["field_class" => "col-12 col-sm-4"]], 45, $context, $this->getSourceContext());
        echo "
   ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_dropdownHoursField", ["saturday_end_hour", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["saturday_end_hour"] ?? null) : null), __("End"), ["field_class" => "col-12 col-sm-4"]], 46, $context, $this->getSourceContext());
        echo "

   ";
        // line 48
        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Sundays and holidays")], 48, $context, $this->getSourceContext());
        echo "
   ";
        // line 49
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["use_sunday", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["use_sunday"] ?? null) : null), __("Use Sunday"), ["field_class" => "col-12 col-sm-4"]], 49, $context, $this->getSourceContext());
        echo "
   ";
        // line 50
        echo twig_call_macro($macros["fields"], "macro_dropdownHoursField", ["sunday_begin_hour", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sunday_begin_hour"] ?? null) : null), __("Start"), ["field_class" => "col-12 col-sm-4"]], 50, $context, $this->getSourceContext());
        echo "
   ";
        // line 51
        echo twig_call_macro($macros["fields"], "macro_dropdownHoursField", ["sunday_end_hour", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sunday_end_hour"] ?? null) : null), __("End"), ["field_class" => "col-12 col-sm-4"]], 51, $context, $this->getSourceContext());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "components/form/support_hours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  92 => 50,  88 => 49,  84 => 48,  79 => 46,  75 => 45,  71 => 44,  67 => 43,  62 => 41,  58 => 40,  54 => 39,  50 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/support_hours.html.twig", "D:\\wamp\\www\\glpi\\templates\\components\\form\\support_hours.html.twig");
    }
}
