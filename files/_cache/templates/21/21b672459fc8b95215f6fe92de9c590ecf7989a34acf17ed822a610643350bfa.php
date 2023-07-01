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

/* pages/management/softwarelicense.html.twig */
class __TwigTemplate_76fc9d25a2dec81a422b1f23fc5f7309e014b23a0b706ed799477a1de3883fe1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/management/softwarelicense.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/management/softwarelicense.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Software", "softwares_id", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 42
($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["softwares_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Software"), ["entity" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 45
($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["entities_id"] ?? null) : null), "condition" => ["is_template" => 0, "is_deleted" => 0], "on_change" => "this.form.submit()"]], 39, $context, $this->getSourceContext());
        // line 52
        echo "

   ";
        // line 54
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 54, $context, $this->getSourceContext());
        echo "

   ";
        // line 56
        $this->displayParentBlock("form_fields", $context, $blocks);
        echo "
";
    }

    // line 59
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "   ";
        ob_start(function () { return ''; });
        // line 61
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [0 => ["name" => "softwareversions_id_use", "softwares_id" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 63
($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["softwares_id"] ?? null) : null), "value" => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 64
($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["softwareversions_id_use"] ?? null) : null), "width" => "100%"]]);
        // line 67
        echo "   ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_field", ["softwareversions_id_use", ($context["field"] ?? null), __("Version in use")], 68, $context, $this->getSourceContext());
        echo "

   ";
        // line 70
        ob_start(function () { return ''; });
        // line 71
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [0 => ["name" => "softwareversions_id_buy", "softwares_id" => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 73
($context["item"] ?? null), "fields", [], "any", false, false, false, 73)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["softwares_id"] ?? null) : null), "value" => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 74
($context["item"] ?? null), "fields", [], "any", false, false, false, 74)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["softwareversions_id_buy"] ?? null) : null), "width" => "100%"]]);
        // line 77
        echo "   ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_field", ["softwareversions_id_buy", ($context["field"] ?? null), __("Purchase version")], 78, $context, $this->getSourceContext());
        echo "

   ";
        // line 80
        $context["validity_msg"] = null;
        // line 81
        echo "   ";
        if ((0 === twig_compare(($context["item_type"] ?? null), "SoftwareLicense"))) {
            // line 82
            echo "      ";
            ob_start(function () { return ''; });
            // line 83
            echo "         ";
            if ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_valid"] ?? null) : null)) {
                // line 84
                echo "            <span class=\"green\">";
                echo twig_escape_filter($this->env, _x("adjective", "Valid"), "html", null, true);
                echo "</span>
         ";
            } elseif (( !(($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 85
($context["item"] ?? null), "fields", [], "any", false, false, false, 85)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_valid"] ?? null) : null) && (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 85)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["allow_overquota"] ?? null) : null))) {
                // line 86
                echo "            <span class=\"green\">";
                echo twig_escape_filter($this->env, _x("adjective", "Valid (Over Quota)"), "html", null, true);
                echo "</span>
         ";
            } else {
                // line 88
                echo "            <span class=\"red\">";
                echo twig_escape_filter($this->env, _x("adjective", "Invalid"), "html", null, true);
                echo "</span>
         ";
            }
            // line 90
            echo "      ";
            $context["validity_msg"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 91
            echo "   ";
        }
        // line 92
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["number", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["number"] ?? null) : null), _x("quantity", "Number"), ["min" => 1, "max" => 10000, "step" => 1, "toadd" => ["-1" => __("Unlimited")], "add_field_html" =>         // line 97
($context["validity_msg"] ?? null)]], 92, $context, $this->getSourceContext());
        // line 98
        echo "

   ";
        // line 100
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["allow_overquota", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["allow_overquota"] ?? null) : null), __("Allow Over-Quota")], 100, $context, $this->getSourceContext());
        echo "

   ";
        // line 102
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["expire", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["expire"] ?? null) : null), __("Expiration"), ["helper" => __("On search engine, use \"Expiration contains NULL\" to search licenses with no expiration date")]], 102, $context, $this->getSourceContext());
        // line 104
        echo "

   ";
        // line 106
        if ((0 === twig_compare((($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["withtemplate"] ?? null) : null), 1))) {
            // line 107
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_hiddenField", ["withtemplate", "1"], 107, $context, $this->getSourceContext());
            echo "
   ";
        }
    }

    public function getTemplateName()
    {
        return "pages/management/softwarelicense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 107,  168 => 106,  164 => 104,  162 => 102,  157 => 100,  153 => 98,  151 => 97,  149 => 92,  146 => 91,  143 => 90,  137 => 88,  131 => 86,  129 => 85,  124 => 84,  121 => 83,  118 => 82,  115 => 81,  113 => 80,  107 => 78,  104 => 77,  102 => 74,  101 => 73,  99 => 71,  97 => 70,  91 => 68,  88 => 67,  86 => 64,  85 => 63,  83 => 61,  80 => 60,  76 => 59,  70 => 56,  65 => 54,  61 => 52,  59 => 45,  58 => 42,  56 => 39,  52 => 38,  47 => 34,  45 => 36,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/management/softwarelicense.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\management\\softwarelicense.html.twig");
    }
}
