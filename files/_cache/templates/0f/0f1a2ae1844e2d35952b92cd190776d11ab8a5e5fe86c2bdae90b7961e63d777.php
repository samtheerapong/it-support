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

/* pages/management/certificate.html.twig */
class __TwigTemplate_985f40340a50c5801bb054af3f17dbce66e1f372f0289a08290dc7b2ceaa5241 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/management/certificate.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/management/certificate.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_autosign", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["is_autosign"] ?? null) : null), __("Self-signed")], 39, $context, $this->getSourceContext());
        echo "

   ";
        // line 41
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["dns_name",         // line 43
($context["item"] ?? null), __("DNS name"),         // line 45
($context["withtemplate"] ?? null)], 41, $context, $this->getSourceContext());
        // line 46
        echo "

   ";
        // line 48
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["dns_suffix",         // line 50
($context["item"] ?? null), __("DNS suffix"),         // line 52
($context["withtemplate"] ?? null)], 48, $context, $this->getSourceContext());
        // line 53
        echo "

   ";
        // line 55
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["command", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["command"] ?? null) : null), __("Command used")], 55, $context, $this->getSourceContext());
        echo "

   ";
        // line 57
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["certificate_request", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["certificate_request"] ?? null) : null), __("Certificate request (CSR)")], 57, $context, $this->getSourceContext());
        echo "

   ";
        // line 59
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["certificate_item", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["certificate_item"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Certificate")], 59, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/management/certificate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 59,  82 => 57,  77 => 55,  73 => 53,  71 => 52,  70 => 50,  69 => 48,  65 => 46,  63 => 45,  62 => 43,  61 => 41,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/management/certificate.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\management\\certificate.html.twig");
    }
}
