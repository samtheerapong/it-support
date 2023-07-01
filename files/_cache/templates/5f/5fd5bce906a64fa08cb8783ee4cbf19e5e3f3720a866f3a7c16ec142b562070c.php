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

/* pages/assets/cable.html.twig */
class __TwigTemplate_33a5c6935e0c330c7ff030417cf16dc039ffd4479f8ff281e89c58aaf1a8eb53 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/cable.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/cable.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["CableStrand", "cablestrands_id", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 42
($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["cablestrands_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CableStrand"),         // line 44
($context["field_options"] ?? null)], 39, $context, $this->getSourceContext());
        // line 45
        echo "

   ";
        // line 47
        echo twig_call_macro($macros["fields"], "macro_colorField", ["color", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["color"] ?? null) : null), __("Color"),         // line 51
($context["field_options"] ?? null)], 47, $context, $this->getSourceContext());
        // line 52
        echo "

   <div class=\"mx-n3 d-flex\">
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "a", 1 => "b"]);
        foreach ($context['_seq'] as $context["_key"] => $context["side"]) {
            // line 56
            echo "         ";
            $context["rand_side"] = twig_random($this->env);
            // line 57
            echo "         ";
            $context["side_options"] = twig_array_merge(($context["field_options"] ?? null), ["full_width" => true, "full_width_adapt_column" => false, "rand" =>             // line 60
($context["rand_side"] ?? null)]);
            // line 62
            echo "         ";
            ob_start(function () { return ''; });
            // line 63
            echo "            <div class=\"card mx-n2 border-0 shadow-none\">

               ";
            // line 65
            ob_start(function () { return ''; });
            // line 66
            echo "                  <h4 class=\"card-title\">
                     ";
            // line 67
            echo twig_escape_filter($this->env, twig_sprintf(__("Endpoint %s"), twig_upper_filter($this->env, $context["side"])), "html", null, true);
            echo "
                  </h4>
               ";
            $context["side_heading"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            echo "               <div class=\"card-header\">
               ";
            // line 71
            echo twig_call_macro($macros["fields"], "macro_field", ["",             // line 73
($context["side_heading"] ?? null), "",             // line 75
($context["side_options"] ?? null)], 71, $context, $this->getSourceContext());
            // line 76
            echo "
               </div>

               <div class=\"card-body row\">
                  ";
            // line 80
            ob_start(function () { return ''; });
            // line 81
            echo "                     <span id=\"show_items_id_endpoint_";
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo "_field\" class=\"input_rear_listener\">
                        ";
            // line 82
            $context["current_itemtype"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[("itemtype_endpoint_" . $context["side"])] ?? null) : null);
            // line 83
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 84
($context["current_itemtype"] ?? null), ("items_id_endpoint_" .             // line 85
$context["side"]), (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,             // line 86
($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[("items_id_endpoint_" . $context["side"])] ?? null) : null), "", twig_array_merge(            // line 88
($context["side_options"] ?? null), ["no_label" => true])], 83, $context, $this->getSourceContext());
            // line 91
            echo "
                     </span>
                  ";
            $context["dropdown_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 94
            echo "
                  ";
            // line 95
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", [("itemtype_endpoint_" .             // line 96
$context["side"]), (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 97
($context["item"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[("itemtype_endpoint_" . $context["side"])] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Socket::getSocketLinkTypes"), _n("Asset", "Assets", 1), twig_array_merge(            // line 100
($context["side_options"] ?? null), ["add_field_html" =>             // line 101
($context["dropdown_item"] ?? null)])], 95, $context, $this->getSourceContext());
            // line 103
            echo "

                  ";
            // line 105
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [0 => (("dropdown_itemtype_endpoint_" .             // line 106
$context["side"]) . ($context["rand_side"] ?? null)), 1 => (("show_items_id_endpoint_" .             // line 107
$context["side"]) . "_field"), 2 => ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/cable.php"), 3 => ["itemtype" => "__VALUE__", "dom_name" => ("items_id_endpoint_" .             // line 111
$context["side"]), "action" => "get_items_from_itemtype", "dom_rand" =>             // line 113
($context["rand_side"] ?? null)]]);
            // line 116
            echo "
                  ";
            // line 117
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Glpi\\SocketModel", ("socketmodels_id_endpoint_" .             // line 119
$context["side"]), (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 120
($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[("socketmodels_id_endpoint_" . $context["side"])] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\SocketModel"),             // line 122
($context["side_options"] ?? null)], 117, $context, $this->getSourceContext());
            // line 123
            echo "

                  ";
            // line 125
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Glpi\\Socket", ("sockets_id_endpoint_" .             // line 127
$context["side"]), (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 128
($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[("sockets_id_endpoint_" . $context["side"])] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Socket"), twig_array_merge(            // line 130
($context["side_options"] ?? null), ["condition" => ["socketmodels_id" => (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 132
($context["item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[("socketmodels_id_endpoint_" . $context["side"])] ?? null) : null), "itemtype" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 133
($context["item"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[("itemtype_endpoint_" . $context["side"])] ?? null) : null), "items_id" => (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 134
($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[("items_id_endpoint_" . $context["side"])] ?? null) : null)]])], 125, $context, $this->getSourceContext());
            // line 137
            echo "

                  ";
            // line 139
            ob_start(function () { return ''; });
            // line 140
            echo "                     <span id=\"show_";
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo "_asset_breadcrumb\">
                        ";
            // line 141
            if ((1 === twig_compare(twig_length_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 141)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[("items_id_endpoint_" . $context["side"])] ?? null) : null)), 0))) {
                // line 142
                echo "                           ";
                $context["breadcrumb"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[("itemtype_endpoint_" . $context["side"])] ?? null) : null) . "::getDcBreadcrumbSpecificValueToDisplay"), [0 => (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,                 // line 143
($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[("items_id_endpoint_" . $context["side"])] ?? null) : null)]);
                // line 145
                echo "                           ";
                echo ($context["breadcrumb"] ?? null);
                echo "
                        ";
            }
            // line 147
            echo "                     </span>

                     <script>
                        //listener to remove socket selector and breadcrumb
                        \$(document).on('change', '#dropdown_itemtype_endpoint_";
            // line 151
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo twig_escape_filter($this->env, ($context["rand_side"] ?? null), "html", null, true);
            echo "', function(e) {
                           \$('#show_";
            // line 152
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo "_asset_breadcrumb').empty();
                           \$('#show_rear_sockets_field').empty();
                        });

                        //listener to refresh socket selector and breadcrumb
                        \$(document).on('change', '#dropdown_items_id_endpoint_";
            // line 157
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo twig_escape_filter($this->env, ($context["rand_side"] ?? null), "html", null, true);
            echo "', function(e) {
                           var items_id = \$('#dropdown_items_id_endpoint_";
            // line 158
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo twig_escape_filter($this->env, ($context["rand_side"] ?? null), "html", null, true);
            echo "').find(':selected').val();
                           var itemtype = \$('#dropdown_itemtype_endpoint_";
            // line 159
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo twig_escape_filter($this->env, ($context["rand_side"] ?? null), "html", null, true);
            echo "').find(':selected').val();
                           var socketmodels_id = \$('#dropdown_socketmodels_id_endpoint_";
            // line 160
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo twig_escape_filter($this->env, ($context["rand_side"] ?? null), "html", null, true);
            echo "').find(':selected').val();
                           refreshAssetBreadcrumb(itemtype, items_id, 'show_";
            // line 161
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo "_asset_breadcrumb');
                           refreshSocketDropdown(itemtype, items_id, socketmodels_id, 'sockets_id_endpoint_";
            // line 162
            echo twig_escape_filter($this->env, $context["side"], "html", null, true);
            echo "');

                        });
                     </script>
                  ";
            $context["asset_breadcrumb"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 167
            echo "                  ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["position",             // line 169
($context["asset_breadcrumb"] ?? null), __("Position"),             // line 171
($context["side_options"] ?? null)], 167, $context, $this->getSourceContext());
            // line 172
            echo "
               </div>
            </div>
         ";
            $context["html_side"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 176
            echo "
         ";
            // line 177
            echo twig_call_macro($macros["fields"], "macro_noLabelField", [            // line 178
($context["html_side"] ?? null)], 177, $context, $this->getSourceContext());
            // line 179
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['side'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "   </div>
";
    }

    public function getTemplateName()
    {
        return "pages/assets/cable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 181,  266 => 179,  264 => 178,  263 => 177,  260 => 176,  254 => 172,  252 => 171,  251 => 169,  249 => 167,  241 => 162,  237 => 161,  232 => 160,  227 => 159,  222 => 158,  217 => 157,  209 => 152,  204 => 151,  198 => 147,  192 => 145,  190 => 143,  188 => 142,  186 => 141,  181 => 140,  179 => 139,  175 => 137,  173 => 134,  172 => 133,  171 => 132,  170 => 130,  169 => 128,  168 => 127,  167 => 125,  163 => 123,  161 => 122,  160 => 120,  159 => 119,  158 => 117,  155 => 116,  153 => 113,  152 => 111,  151 => 107,  150 => 106,  149 => 105,  145 => 103,  143 => 101,  142 => 100,  141 => 97,  140 => 96,  139 => 95,  136 => 94,  131 => 91,  129 => 88,  128 => 86,  127 => 85,  126 => 84,  124 => 83,  122 => 82,  117 => 81,  115 => 80,  109 => 76,  107 => 75,  106 => 73,  105 => 71,  102 => 70,  96 => 67,  93 => 66,  91 => 65,  87 => 63,  84 => 62,  82 => 60,  80 => 57,  77 => 56,  73 => 55,  68 => 52,  66 => 51,  65 => 49,  64 => 47,  60 => 45,  58 => 44,  57 => 42,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/cable.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\assets\\cable.html.twig");
    }
}
