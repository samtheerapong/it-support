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

/* pages/assets/rack.html.twig */
class __TwigTemplate_a7ff5e56e26b62d4ac1fda59ae45066ae0429b12abbe6908ce214320bfba61c6 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/rack.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 37
        $context["rand"] = twig_random($this->env);
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/rack.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["DCRoom", "dcrooms_id", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dcrooms_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("DCRoom"), ["rand" =>         // line 41
($context["rand"] ?? null)]], 40, $context, $this->getSourceContext());
        // line 42
        echo "
   ";
        // line 43
        $context["current_position"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["position"] ?? null) : null);
        // line 44
        echo "   ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [0 => ("dropdown_dcrooms_id" .         // line 46
($context["rand"] ?? null)), 1 => "room_positions", 2 => ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dcroom_size.php"), 3 => ["id" => "__VALUE__", "current" =>         // line 51
($context["current_position"] ?? null), "rand" =>         // line 52
($context["rand"] ?? null)]]);
        // line 55
        echo "   ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [0 => ("dropdown_dcrooms_id" .         // line 57
($context["rand"] ?? null)), 1 => ("dropdown_locations_id" .         // line 58
($context["rand"] ?? null)), 2 => ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownLocation.php"), 3 => ["items_id" => "__VALUE__", "itemtype" => "DCRoom"]]);
        // line 65
        echo "
   ";
        // line 66
        ob_start(function () { return ''; });
        // line 67
        echo "      ";
        if ((1 === twig_compare((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["dcrooms_id"] ?? null) : null), 0))) {
            // line 68
            echo "         ";
            $context["dcroom"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("DCRoom", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["dcrooms_id"] ?? null) : null));
            // line 69
            echo "         ";
            if ( !(null === ($context["dcroom"] ?? null))) {
                // line 70
                echo "            ";
                $context["used"] = twig_get_attribute($this->env, $this->source, ($context["dcroom"] ?? null), "getFilled", [0 => ($context["current_position"] ?? null)], "method", false, false, false, 70);
                // line 71
                echo "            ";
                $context["positions"] = twig_get_attribute($this->env, $this->source, ($context["dcroom"] ?? null), "getAllPositions", [], "method", false, false, false, 71);
                // line 72
                echo "            ";
                echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["position", ($context["current_position"] ?? null), ($context["positions"] ?? null), null, ["rand" =>                 // line 73
($context["rand"] ?? null), "used" =>                 // line 74
($context["used"] ?? null), "no_label" => true]], 72, $context, $this->getSourceContext());
                // line 76
                echo "
         ";
            } else {
                // line 78
                echo "            <div class=\"col-form-label\">";
                echo twig_escape_filter($this->env, __("No room found or selected"), "html", null, true);
                echo "</div>
         ";
            }
            // line 80
            echo "      ";
        } else {
            // line 81
            echo "         <div class=\"col-form-label\">";
            echo twig_escape_filter($this->env, __("No room found or selected"), "html", null, true);
            echo "</div>
      ";
        }
        // line 83
        echo "   ";
        $context["initial_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_ajaxField", ["room_positions", ($context["initial_field"] ?? null), __("Position in room"), ["rand" =>         // line 85
($context["rand"] ?? null)]], 84, $context, $this->getSourceContext());
        // line 86
        echo "

   ";
        // line 88
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["room_orientation", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 90
($context["item"] ?? null), "fields", [], "any", false, false, false, 90)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["room_orientation"] ?? null) : null), [twig_constant("Rack::ROOM_O_NORTH") => __("North"), twig_constant("Rack::ROOM_O_EAST") => __("East"), twig_constant("Rack::ROOM_O_SOUTH") => __("South"), twig_constant("Rack::ROOM_O_WEST") => __("West")], __("Door orientation in room"), twig_array_merge(        // line 98
($context["field_options"] ?? null), ["rand" =>         // line 99
($context["rand"] ?? null)])], 88, $context, $this->getSourceContext());
        // line 101
        echo "

   ";
        // line 103
        echo twig_call_macro($macros["fields"], "macro_numberField", ["number_units", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 105
($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["number_units"] ?? null) : null), __("Number of units"), twig_array_merge(        // line 107
($context["field_options"] ?? null), ["rand" =>         // line 108
($context["rand"] ?? null), "min" => 1, "max" => 100, "step" => 1])], 103, $context, $this->getSourceContext());
        // line 113
        echo "

   ";
        // line 115
        echo twig_call_macro($macros["fields"], "macro_numberField", ["width", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 117
($context["item"] ?? null), "fields", [], "any", false, false, false, 117)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["width"] ?? null) : null), __("Width"), twig_array_merge(        // line 119
($context["field_options"] ?? null), ["rand" =>         // line 120
($context["rand"] ?? null), "min" => 0, "step" => 1])], 115, $context, $this->getSourceContext());
        // line 124
        echo "

   ";
        // line 126
        echo twig_call_macro($macros["fields"], "macro_numberField", ["height", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,         // line 128
($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["height"] ?? null) : null), __("Height"), twig_array_merge(        // line 130
($context["field_options"] ?? null), ["rand" =>         // line 131
($context["rand"] ?? null), "min" => 0, "step" => 1])], 126, $context, $this->getSourceContext());
        // line 135
        echo "

   ";
        // line 137
        echo twig_call_macro($macros["fields"], "macro_numberField", ["depth", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,         // line 139
($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["depth"] ?? null) : null), __("Depth"), twig_array_merge(        // line 141
($context["field_options"] ?? null), ["rand" =>         // line 142
($context["rand"] ?? null), "min" => 0, "step" => 1])], 137, $context, $this->getSourceContext());
        // line 146
        echo "

   ";
        // line 148
        echo twig_call_macro($macros["fields"], "macro_numberField", ["max_power", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,         // line 150
($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["max_power"] ?? null) : null), __("Max. power (in watts)"), twig_array_merge(        // line 152
($context["field_options"] ?? null), ["rand" =>         // line 153
($context["rand"] ?? null), "min" => 0, "step" => 1])], 148, $context, $this->getSourceContext());
        // line 157
        echo "

   ";
        // line 159
        echo twig_call_macro($macros["fields"], "macro_numberField", ["mesured_power", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,         // line 161
($context["item"] ?? null), "fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["mesured_power"] ?? null) : null), __("Measured power (in watts)"), twig_array_merge(        // line 163
($context["field_options"] ?? null), ["rand" =>         // line 164
($context["rand"] ?? null), "min" => 0, "step" => 1])], 159, $context, $this->getSourceContext());
        // line 168
        echo "

   ";
        // line 170
        echo twig_call_macro($macros["fields"], "macro_numberField", ["max_weight", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,         // line 172
($context["item"] ?? null), "fields", [], "any", false, false, false, 172)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["max_weight"] ?? null) : null), __("Max. weight"), twig_array_merge(        // line 174
($context["field_options"] ?? null), ["rand" =>         // line 175
($context["rand"] ?? null), "min" => 0, "step" => 1])], 170, $context, $this->getSourceContext());
        // line 179
        echo "

   ";
        // line 181
        echo twig_call_macro($macros["fields"], "macro_colorField", ["bgcolor", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,         // line 183
($context["item"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["bgcolor"] ?? null) : null), __("Background color"),         // line 185
($context["field_options"] ?? null)], 181, $context, $this->getSourceContext());
        // line 186
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/assets/rack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 186,  206 => 185,  205 => 183,  204 => 181,  200 => 179,  198 => 175,  197 => 174,  196 => 172,  195 => 170,  191 => 168,  189 => 164,  188 => 163,  187 => 161,  186 => 159,  182 => 157,  180 => 153,  179 => 152,  178 => 150,  177 => 148,  173 => 146,  171 => 142,  170 => 141,  169 => 139,  168 => 137,  164 => 135,  162 => 131,  161 => 130,  160 => 128,  159 => 126,  155 => 124,  153 => 120,  152 => 119,  151 => 117,  150 => 115,  146 => 113,  144 => 108,  143 => 107,  142 => 105,  141 => 103,  137 => 101,  135 => 99,  134 => 98,  133 => 90,  132 => 88,  128 => 86,  126 => 85,  124 => 84,  121 => 83,  115 => 81,  112 => 80,  106 => 78,  102 => 76,  100 => 74,  99 => 73,  97 => 72,  94 => 71,  91 => 70,  88 => 69,  85 => 68,  82 => 67,  80 => 66,  77 => 65,  75 => 58,  74 => 57,  72 => 55,  70 => 52,  69 => 51,  68 => 46,  66 => 44,  64 => 43,  61 => 42,  59 => 41,  57 => 40,  53 => 39,  48 => 34,  46 => 37,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/rack.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\assets\\rack.html.twig");
    }
}
