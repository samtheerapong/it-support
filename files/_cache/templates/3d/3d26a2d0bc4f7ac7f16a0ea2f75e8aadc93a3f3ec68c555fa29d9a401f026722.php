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

/* pages/admin/inventory/agent.html.twig */
class __TwigTemplate_4813cd8e7ef383f4647039d7182a937a94a200a5725588dc5958fe0995618941 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/admin/inventory/agent.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 37
        $context["field_options"] = (($context["field_options"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/admin/inventory/agent.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["locked", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 42
($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["locked"] ?? null) : null), __("Locked"),         // line 44
($context["field_options"] ?? null)], 40, $context, $this->getSourceContext());
        // line 45
        echo "

    ";
        // line 47
        echo twig_call_macro($macros["fields"], "macro_textField", ["deviceid", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["deviceid"] ?? null) : null), __("Device id"),         // line 51
($context["field_options"] ?? null)], 47, $context, $this->getSourceContext());
        // line 52
        echo "

    ";
        // line 54
        echo twig_call_macro($macros["fields"], "macro_numberField", ["port", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 56
($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["port"] ?? null) : null), _n("Port", "Ports", 1),         // line 58
($context["field_options"] ?? null)], 54, $context, $this->getSourceContext());
        // line 59
        echo "

    ";
        // line 61
        echo twig_call_macro($macros["fields"], "macro_htmlField", ["Agent", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 63
($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["remote_addr"] ?? null) : null), __("Public contact address"),         // line 65
($context["field_options"] ?? null)], 61, $context, $this->getSourceContext());
        // line 66
        echo "

    ";
        // line 68
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["itemtype", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null),         // line 71
($context["itemtypes"] ?? null), __("Item type"),         // line 73
($context["field_options"] ?? null)], 68, $context, $this->getSourceContext());
        // line 74
        echo "

    ";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 76)) {
            // line 77
            echo "        ";
            $context["asset_item"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["itemtype"] ?? null) : null), (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["items_id"] ?? null) : null));
            // line 78
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["items_id", twig_get_attribute($this->env, $this->source,             // line 80
($context["asset_item"] ?? null), "getLink", [], "method", false, false, false, 80), __("Item link"),             // line 82
($context["field_options"] ?? null)], 78, $context, $this->getSourceContext());
            // line 83
            echo "
        <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["items_id"] ?? null) : null), "html", null, true);
            echo "\">

        ";
            // line 86
            ob_start(function () { return ''; });
            // line 87
            echo "            ";
            $context["versions_array"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [0 => ($context["versions_field"] ?? null)]);
            // line 88
            echo "            ";
            if (twig_length_filter($this->env, ($context["versions_array"] ?? null))) {
                // line 89
                echo "                <ul>
                ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["versions_array"] ?? null));
                foreach ($context['_seq'] as $context["module"] => $context["version"]) {
                    // line 91
                    echo "                    <li><strong>";
                    echo twig_escape_filter($this->env, $context["module"], "html", null, true);
                    echo "</strong>: ";
                    echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['module'], $context['version'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                </ul>
            ";
            } elseif (twig_length_filter($this->env,             // line 94
($context["versions_field"] ?? null))) {
                // line 95
                echo "                ";
                echo twig_escape_filter($this->env, ($context["versions_field"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 97
            echo "        ";
            $context["versions"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 98
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["versions",             // line 100
($context["versions"] ?? null), _n("Version", "Versions", 1),             // line 102
($context["field_options"] ?? null)], 98, $context, $this->getSourceContext());
            // line 103
            echo "

        ";
            // line 105
            echo twig_call_macro($macros["fields"], "macro_readOnlyField", ["tag", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 107
($context["item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["tag"] ?? null) : null), __("Tag"),             // line 109
($context["field_options"] ?? null)], 105, $context, $this->getSourceContext());
            // line 110
            echo "

        ";
            // line 112
            echo twig_call_macro($macros["fields"], "macro_readOnlyField", ["useragent", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 114
($context["item"] ?? null), "fields", [], "any", false, false, false, 114)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["useragent"] ?? null) : null), __("Useragent"),             // line 116
($context["field_options"] ?? null)], 112, $context, $this->getSourceContext());
            // line 117
            echo "

        ";
            // line 119
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["last_contact", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDateTime", [0 => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 121
($context["item"] ?? null), "fields", [], "any", false, false, false, 121)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["last_contact"] ?? null) : null)]), __("Last contact"),             // line 123
($context["field_options"] ?? null)], 119, $context, $this->getSourceContext());
            // line 124
            echo "

        <h2 class=\"header\">";
            // line 126
            echo twig_escape_filter($this->env, __("Agent configuration"), "html", null, true);
            echo "</h2>

        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["threads_networkdiscovery" => __("Network discovery threads"), "timeout_networkdiscovery" => __("Network discovery timeout"), "threads_networkinventory" => __("Network inventory threads"), "timeout_networkinventory" => __("Network inventory timeout")]);
            foreach ($context['_seq'] as $context["netfield"] => $context["netlabel"]) {
                // line 134
                echo "            ";
                $context["general"] = __("General setup");
                // line 135
                echo "            ";
                if ((0 !== twig_compare($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config($context["netfield"]), null))) {
                    // line 136
                    echo "                ";
                    $context["general"] = twig_sprintf("%1\$s (%2\$s)", ($context["general"] ?? null), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config($context["netfield"]));
                    // line 137
                    echo "            ";
                }
                // line 138
                echo "
            ";
                // line 139
                echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", [                // line 140
$context["netfield"], (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,                 // line 141
($context["item"] ?? null), "fields", [], "any", false, false, false, 141)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["netfield"]] ?? null) : null),                 // line 142
$context["netlabel"], twig_array_merge(                // line 143
($context["field_options"] ?? null), ["min" => 1, "toadd" => [0 =>                 // line 146
($context["general"] ?? null)]])], 139, $context, $this->getSourceContext());
                // line 149
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['netfield'], $context['netlabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "
        <h2 class=\"header\">";
            // line 152
            echo twig_escape_filter($this->env, __("Enabled tasks"), "html", null, true);
            echo "</h2>

        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["use_module_wake_on_lan" => __("Wake on LAN"), "use_module_computer_inventory" => __("Computer inventory"), "use_module_esx_remote_inventory" => __("ESX remote inventory"), "use_module_network_inventory" => __("Network inventory (SNMP)"), "use_module_network_discovery" => __("Network discovery (SNMP)"), "use_module_package_deployment" => __("Package Deployment"), "use_module_collect_data" => __("Collect data"), "use_module_remote_inventory" => __("Remote inventory")]);
            foreach ($context['_seq'] as $context["modulefield"] => $context["modulelabel"]) {
                // line 164
                echo "
        ";
                // line 165
                if ((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 165)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["modulefield"]] ?? null) : null)) {
                    // line 166
                    echo "            ";
                    $context["html"] = "<i class=\"ti ti-check\"></i>";
                    // line 167
                    echo "        ";
                } else {
                    // line 168
                    echo "            ";
                    $context["html"] = "";
                    // line 169
                    echo "        ";
                }
                // line 170
                echo "
        ";
                // line 171
                echo twig_call_macro($macros["fields"], "macro_htmlField", ["", ($context["html"] ?? null), $context["modulelabel"]], 171, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['modulefield'], $context['modulelabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "pages/admin/inventory/agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 173,  260 => 171,  257 => 170,  254 => 169,  251 => 168,  248 => 167,  245 => 166,  243 => 165,  240 => 164,  236 => 154,  231 => 152,  228 => 151,  221 => 149,  219 => 146,  218 => 143,  217 => 142,  216 => 141,  215 => 140,  214 => 139,  211 => 138,  208 => 137,  205 => 136,  202 => 135,  199 => 134,  195 => 128,  190 => 126,  186 => 124,  184 => 123,  183 => 121,  182 => 119,  178 => 117,  176 => 116,  175 => 114,  174 => 112,  170 => 110,  168 => 109,  167 => 107,  166 => 105,  162 => 103,  160 => 102,  159 => 100,  157 => 98,  154 => 97,  148 => 95,  146 => 94,  143 => 93,  132 => 91,  128 => 90,  125 => 89,  122 => 88,  119 => 87,  117 => 86,  112 => 84,  109 => 83,  107 => 82,  106 => 80,  104 => 78,  101 => 77,  99 => 76,  95 => 74,  93 => 73,  92 => 71,  91 => 70,  90 => 68,  86 => 66,  84 => 65,  83 => 63,  82 => 61,  78 => 59,  76 => 58,  75 => 56,  74 => 54,  70 => 52,  68 => 51,  67 => 49,  66 => 47,  62 => 45,  60 => 44,  59 => 42,  57 => 40,  53 => 39,  48 => 34,  46 => 37,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/admin/inventory/agent.html.twig", "D:\\wamp\\www\\glpi\\templates\\pages\\admin\\inventory\\agent.html.twig");
    }
}
