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

/* pages/management/line.html.twig */
class __TwigTemplate_62606ab56bdc36b44550cefff4303d0acb538467bffb9a1853ded88386284609 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/management/line.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/management/line.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["caller_num",         // line 41
($context["item"] ?? null), __("Caller number"),         // line 43
($context["withtemplate"] ?? null)], 39, $context, $this->getSourceContext());
        // line 44
        echo "

   ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["caller_name",         // line 48
($context["item"] ?? null), __("Caller name"),         // line 50
($context["withtemplate"] ?? null)], 46, $context, $this->getSourceContext());
        // line 51
        echo "

   ";
        // line 53
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["LineOperator", "lineoperators_id", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 56
($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["lineoperators_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("LineOperator"), ["entity" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["entities_id"] ?? null) : null)]], 53, $context, $this->getSourceContext());
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/management/line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 61,  74 => 59,  73 => 56,  72 => 53,  68 => 51,  66 => 50,  65 => 48,  64 => 46,  60 => 44,  58 => 43,  57 => 41,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/management/line.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\management\\line.html.twig");
    }
}
