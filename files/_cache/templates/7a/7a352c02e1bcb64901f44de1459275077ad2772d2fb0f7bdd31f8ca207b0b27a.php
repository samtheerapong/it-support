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

/* pages/assets/consumableitem.html.twig */
class __TwigTemplate_ad728f45153cd16077f6397cfae4027e06beb824d9103806bb53f648acac6e31 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/consumableitem.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/consumableitem.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "stock_target"], "method", false, false, false, 39)) {
            // line 40
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["stock_target", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 42
($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["stock_target"] ?? null) : null), _x("quantity", "Stock target"), twig_array_merge(            // line 44
($context["field_options"] ?? null), ["min" => 0, "step" => 1])], 40, $context, $this->getSourceContext());
            // line 48
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "pages/assets/consumableitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 48,  61 => 44,  60 => 42,  58 => 40,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/consumableitem.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\assets\\consumableitem.html.twig");
    }
}
