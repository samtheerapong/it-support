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

/* pages/assets/printer.html.twig */
class __TwigTemplate_a6e492cc9b357f991170825050cbea1a7808c99a16eb196bf496bbcf3159f7ae extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/printer.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/printer.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_numberField", ["memory_size", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["memory_size"] ?? null) : null), _n("Memory", "Memories", 1),         // line 43
($context["field_options"] ?? null)], 39, $context, $this->getSourceContext());
        // line 44
        echo "

    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_numberField", ["init_pages_counter", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["init_pages_counter"] ?? null) : null), __("Initial page counter"),         // line 50
($context["field_options"] ?? null)], 46, $context, $this->getSourceContext());
        // line 51
        echo "

    ";
        // line 53
        echo twig_call_macro($macros["fields"], "macro_numberField", ["last_pages_counter", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["last_pages_counter"] ?? null) : null), __("Current counter of pages"),         // line 57
($context["field_options"] ?? null)], 53, $context, $this->getSourceContext());
        // line 58
        echo "

    ";
        // line 60
        ob_start(function () { return ''; });
        // line 61
        echo "    ";
        echo twig_include($this->env, $context, "components/form/flags.html.twig");
        echo "
    ";
        $context["flags_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "
    ";
        // line 64
        if (twig_length_filter($this->env, twig_trim_filter(($context["flags_html"] ?? null)))) {
            // line 65
            echo "        ";
            $context["flags_html"] = (("<div class=\"d-flex flex-wrap\">" . ($context["flags_html"] ?? null)) . "</div>");
            // line 66
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 68
($context["flags_html"] ?? null), _n("Port", "Ports", Session::getPluralNumber())], 66, $context, $this->getSourceContext());
            // line 70
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "pages/assets/printer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 70,  98 => 68,  96 => 66,  93 => 65,  91 => 64,  88 => 63,  82 => 61,  80 => 60,  76 => 58,  74 => 57,  73 => 55,  72 => 53,  68 => 51,  66 => 50,  65 => 48,  64 => 46,  60 => 44,  58 => 43,  57 => 41,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/printer.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\assets\\printer.html.twig");
    }
}
