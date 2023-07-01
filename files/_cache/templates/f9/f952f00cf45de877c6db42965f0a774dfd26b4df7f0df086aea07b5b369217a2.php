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

/* components/infocom.html.twig */
class __TwigTemplate_58aa45d6e4abff795f4c0cbdd395cbf4973e79609a6aa7732292adc1a251d39d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/infocom.html.twig", 34)->unwrap();
        // line 35
        echo "
<div class=\"asset\">
   ";
        // line 37
        if ((($context["can_edit"] ?? null) || ($context["can_create"] ?? null))) {
            // line 38
            echo "      <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/infocom.form.php"), "html", null, true);
            echo "\" method=\"post\" data-submit-once>
   ";
        }
        // line 40
        echo "
   ";
        // line 41
        if ((0 >= twig_compare((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), 0))) {
            // line 42
            echo "      ";
            if ((($context["can_create"] ?? null) && (0 !== twig_compare(($context["withtemplate"] ?? null), 2)))) {
                // line 43
                echo "         <div class=\"mx-auto my-4\" style=\"width: 400px;\">
               <input type=\"hidden\" name=\"itemtype\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 44), "html", null, true);
                echo "\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
                echo "\" />
               <button type=\"submit\" class=\"btn btn-primary\" name=\"add\" value=\"1\">
                  <i class=\"fas fa-coins\"></i>
                  <span>";
                // line 48
                echo twig_escape_filter($this->env, __("Enable the financial and administrative information"), "html", null, true);
                echo "</span>
               </button>
         </div>
      ";
            }
            // line 52
            echo "   ";
        } else {
            // line 53
            echo "      ";
            $context["disabled"] = (0 !== twig_compare(($context["withtemplate"] ?? null), 2));
            // line 54
            echo "      ";
            $context["disabled"] = false;
            // line 55
            echo "      ";
            $context["in_modal"] = (array_key_exists("_get", $context) && ((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 55), "0")) : ("0")));
            // line 56
            echo "      <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            echo "\" />
      <div class=\"card-body d-flex flex-wrap p-0 ";
            // line 57
            echo (((0 === twig_compare(($context["in_modal"] ?? null), "1"))) ? ("ps-3 me-2") : (""));
            echo "\">
         <div class=\"col-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
               <div class=\"row flex-row align-items-start flex-grow-1\">
                  <div class=\"row flex-row\">
                     ";
            // line 63
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Asset lifecycle"), "fas fa-sync-alt", true], 63, $context, $this->getSourceContext());
            // line 67
            echo "

                     ";
            // line 69
            echo twig_call_macro($macros["fields"], "macro_dateField", ["order_date", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,             // line 71
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["order_date"] ?? null) : null), __("Order date"), ["disabled" =>             // line 73
($context["disabled"] ?? null)]], 69, $context, $this->getSourceContext());
            // line 74
            echo "

                     ";
            // line 76
            echo twig_call_macro($macros["fields"], "macro_dateField", ["buy_date", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 78
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["buy_date"] ?? null) : null), __("Date of purchase"), ["disabled" =>             // line 80
($context["disabled"] ?? null)]], 76, $context, $this->getSourceContext());
            // line 81
            echo "

                     ";
            // line 83
            echo twig_call_macro($macros["fields"], "macro_dateField", ["delivery_date", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 85
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 85)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["delivery_date"] ?? null) : null), __("Delivery date"), ["disabled" =>             // line 87
($context["disabled"] ?? null)]], 83, $context, $this->getSourceContext());
            // line 88
            echo "

                     ";
            // line 90
            echo twig_call_macro($macros["fields"], "macro_dateField", ["use_date", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 92
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["use_date"] ?? null) : null), __("Startup date"), ["disabled" =>             // line 94
($context["disabled"] ?? null)]], 90, $context, $this->getSourceContext());
            // line 95
            echo "

                     ";
            // line 97
            echo twig_call_macro($macros["fields"], "macro_dateField", ["inventory_date", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 99
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["inventory_date"] ?? null) : null), __("Date of last physical inventory"), ["disabled" =>             // line 101
($context["disabled"] ?? null)]], 97, $context, $this->getSourceContext());
            // line 102
            echo "

                     ";
            // line 104
            echo twig_call_macro($macros["fields"], "macro_dateField", ["decommission_date", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 106
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["decommission_date"] ?? null) : null), __("Decommission date"), ["disabled" =>             // line 108
($context["disabled"] ?? null)]], 104, $context, $this->getSourceContext());
            // line 109
            echo "

                     ";
            // line 112
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Financial and administrative information"), "fas fa-coins"], 112, $context, $this->getSourceContext());
            // line 115
            echo "

                     ";
            // line 117
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Supplier", "suppliers_id", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 120
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["suppliers_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Supplier"), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 123
($context["item"] ?? null), "fields", [], "any", false, false, false, 123)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null), "disabled" =>             // line 124
($context["disabled"] ?? null)]], 117, $context, $this->getSourceContext());
            // line 126
            echo "

                     ";
            // line 128
            if ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Budget", twig_constant("READ"))) {
                // line 129
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Budget", "budgets_id", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,                 // line 132
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["budgets_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Budget"), ["entity" => (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,                 // line 135
($context["item"] ?? null), "fields", [], "any", false, false, false, 135)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["entities_id"] ?? null) : null), "comments" => 1, "disabled" =>                 // line 137
($context["disabled"] ?? null)]], 129, $context, $this->getSourceContext());
                // line 139
                echo "
                     ";
            }
            // line 141
            echo "
                     ";
            // line 142
            echo twig_call_macro($macros["fields"], "macro_textField", ["order_number", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 144
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 144)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["order_number"] ?? null) : null), __("Order number"), ["disabled" =>             // line 146
($context["disabled"] ?? null)]], 142, $context, $this->getSourceContext());
            // line 147
            echo "

                     ";
            // line 149
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["immo_number",             // line 151
($context["infocom"] ?? null), __("Immobilization number"),             // line 153
($context["withtemplate"] ?? null), ["disabled" =>             // line 154
($context["disabled"] ?? null), "value" => (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 154)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["immo_number"] ?? null) : null)]], 149, $context, $this->getSourceContext());
            // line 155
            echo "

                     ";
            // line 157
            echo twig_call_macro($macros["fields"], "macro_textField", ["bill", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,             // line 159
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["bill"] ?? null) : null), __("Invoice number"), ["disabled" =>             // line 161
($context["disabled"] ?? null)]], 157, $context, $this->getSourceContext());
            // line 162
            echo "

                     ";
            // line 164
            echo twig_call_macro($macros["fields"], "macro_textField", ["delivery_number", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 166
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 166)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["delivery_number"] ?? null) : null), __("Delivery form"), ["disabled" =>             // line 168
($context["disabled"] ?? null)]], 164, $context, $this->getSourceContext());
            // line 169
            echo "

                     ";
            // line 171
            echo twig_call_macro($macros["fields"], "macro_numberField", ["value", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 173
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["value"] ?? null) : null), _x("price", "Value"), ["disabled" =>             // line 176
($context["disabled"] ?? null), "step" => "any"]], 171, $context, $this->getSourceContext());
            // line 179
            echo "

                     ";
            // line 181
            echo twig_call_macro($macros["fields"], "macro_numberField", ["warranty_value", (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 183
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["warranty_value"] ?? null) : null), __("Warranty extension value"), ["disabled" =>             // line 186
($context["disabled"] ?? null), "step" => "any"]], 181, $context, $this->getSourceContext());
            // line 189
            echo "


                     ";
            // line 192
            $context["amort"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "Amort", [0 => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source,             // line 193
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["sink_type"] ?? null) : null), 1 => (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,             // line 194
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["value"] ?? null) : null), 2 => (($__internal_compile_21 = twig_get_attribute($this->env, $this->source,             // line 195
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 195)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["sink_time"] ?? null) : null), 3 => (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 196
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 196)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["sink_coeff"] ?? null) : null), 4 => (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 197
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 197)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["buy_date"] ?? null) : null), 5 => (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 198
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 198)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["use_date"] ?? null) : null), 6 => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("date_tax"), 7 => "n"], "method", false, false, false, 192);
            // line 202
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_readOnlyField", ["", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedNumber(            // line 204
($context["amort"] ?? null)), __("Account net value")], 202, $context, $this->getSourceContext());
            // line 206
            echo "

                     ";
            // line 208
            if (((0 === twig_compare(($context["withtemplate"] ?? null), 2)) || (0 === twig_compare(($context["disabled"] ?? null), true)))) {
                // line 209
                echo "                        ";
                $context["sink_type_field"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "getAmortTypeName", [0 => (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 209)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["sink_type"] ?? null) : null)], "method", false, false, false, 209);
                // line 210
                echo "                     ";
            } else {
                // line 211
                echo "                        ";
                $context["sink_type_field"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "dropdownAmortType", [0 => "sink_type", 1 => (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 211)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["sink_type"] ?? null) : null), 2 => false], "method", false, false, false, 211);
                // line 212
                echo "                     ";
            }
            // line 213
            echo "
                     ";
            // line 214
            echo twig_call_macro($macros["fields"], "macro_field", ["",             // line 216
($context["sink_type_field"] ?? null), __("Amortization type")], 214, $context, $this->getSourceContext());
            // line 218
            echo "

                     ";
            // line 220
            echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["sink_time", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 222
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 222)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["sink_time"] ?? null) : null), __("Amortization duration"), ["max" => 15, "unit" => "year", "disabled" =>             // line 227
($context["disabled"] ?? null)]], 220, $context, $this->getSourceContext());
            // line 229
            echo "

                     ";
            // line 231
            echo twig_call_macro($macros["fields"], "macro_numberField", ["sink_coeff", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 233
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 233)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["sink_coeff"] ?? null) : null), __("Amortization coefficient"), ["disabled" =>             // line 235
($context["disabled"] ?? null)]], 231, $context, $this->getSourceContext());
            // line 236
            echo "

                     ";
            // line 238
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 238), twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "getExcludedTypes", [], "method", false, false, false, 238), [0 => "Cartridge", 1 => "Consumable", 2 => "SoftwareLicense"]))) {
                // line 239
                echo "                        ";
                $context["ticket_tco_value"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "showTco", [0 => (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 239)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["ticket_tco"] ?? null) : null), 1 => (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 239)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["value"] ?? null) : null)], "method", false, false, false, 239);
                // line 240
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_readOnlyField", ["ticket_tco",                 // line 242
($context["ticket_tco_value"] ?? null), __("TCO (value + tracking cost)"), ["disabled" =>                 // line 244
($context["disabled"] ?? null)]], 240, $context, $this->getSourceContext());
                // line 245
                echo "

                        ";
                // line 247
                $context["ticket_tco2_value"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "showTco", [0 => (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 247)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["ticket_tco"] ?? null) : null), 1 => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 247)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["value"] ?? null) : null), 2 => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 247)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["buy_date"] ?? null) : null)], "method", false, false, false, 247);
                // line 248
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_readOnlyField", ["ticket_tco",                 // line 250
($context["ticket_tco2_value"] ?? null), __("Monthly TCO"), ["disabled" =>                 // line 252
($context["disabled"] ?? null)]], 248, $context, $this->getSourceContext());
                // line 253
                echo "
                     ";
            }
            // line 255
            echo "

                     ";
            // line 257
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["BusinessCriticity", "businesscriticities_id", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 260
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 260)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["businesscriticities_id"] ?? null) : null), _n("Business criticity", "Business criticities", 1), ["disabled" =>             // line 263
($context["disabled"] ?? null)]], 257, $context, $this->getSourceContext());
            // line 265
            echo "

                     ";
            // line 267
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 269
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 269)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()), ["disabled" =>             // line 271
($context["disabled"] ?? null)]], 267, $context, $this->getSourceContext());
            // line 272
            echo "

                     ";
            // line 275
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Warranty information"), "fas fa-file-contract"], 275, $context, $this->getSourceContext());
            // line 278
            echo "

                     ";
            // line 280
            echo twig_call_macro($macros["fields"], "macro_dateField", ["warranty_date", (($__internal_compile_36 = twig_get_attribute($this->env, $this->source,             // line 282
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 282)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["warranty_date"] ?? null) : null), __("Start date of warranty"), ["disabled" =>             // line 284
($context["disabled"] ?? null)]], 280, $context, $this->getSourceContext());
            // line 285
            echo "

                     ";
            // line 287
            if ((0 === twig_compare(($context["withtemplate"] ?? null), 2))) {
                // line 288
                echo "                        ";
                if ((0 === twig_compare((($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 288)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["warranty_duration"] ?? null) : null),  -1))) {
                    // line 289
                    echo "                           ";
                    echo twig_escape_filter($this->env, __("Lifelong"), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 291
                    echo "                           ";
                    echo twig_escape_filter($this->env, twig_sprintf(_n("%d month", "%d months", (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 291)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["warranty_duration"] ?? null) : null)), (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 291)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["warranty_duration"] ?? null) : null)), "html", null, true);
                    echo "
                        ";
                }
                // line 293
                echo "                     ";
            } else {
                // line 294
                echo "                        ";
                $context["warrantyexpir"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "getWarrantyExpir", [0 => (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 294)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["warranty_date"] ?? null) : null), 1 => (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 294)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["warranty_duration"] ?? null) : null), 2 => 0, 3 => true], "method", false, false, false, 294);
                // line 295
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["warranty_duration", (($__internal_compile_42 = twig_get_attribute($this->env, $this->source,                 // line 297
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 297)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["warranty_duration"] ?? null) : null), __("Warranty duration"), ["min" => 0, "max" => 120, "step" => 1, "toadd" => ["-1" => __("Lifelong")], "unit" => "month", "disabled" =>                 // line 305
($context["disabled"] ?? null), "add_field_html" => (("<span class=\"text-muted\">" . twig_sprintf(__("Valid to %s"),                 // line 306
($context["warrantyexpir"] ?? null))) . "</span>")]], 295, $context, $this->getSourceContext());
                // line 308
                echo "
                     ";
            }
            // line 310
            echo "
                     ";
            // line 311
            echo twig_call_macro($macros["fields"], "macro_textField", ["warranty_info", (($__internal_compile_43 = twig_get_attribute($this->env, $this->source,             // line 313
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 313)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["warranty_info"] ?? null) : null), __("Warranty information"), ["disabled" =>             // line 315
($context["disabled"] ?? null)]], 311, $context, $this->getSourceContext());
            // line 316
            echo "

                     ";
            // line 318
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications")) {
                // line 319
                echo "                        ";
                ob_start(function () { return ''; });
                // line 320
                echo "                           ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => "Infocom", 1 => (($__internal_compile_44 = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 320)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["id"] ?? null) : null)]);
                // line 321
                echo "                        ";
                $context["alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 322
                echo "
                        ";
                // line 323
                $context["alert_field"] = twig_get_attribute($this->env, $this->source, ($context["infocom"] ?? null), "dropdownAlert", [0 => ["name" => "alert", "value" => (($__internal_compile_45 = twig_get_attribute($this->env, $this->source,                 // line 325
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 325)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["alert"] ?? null) : null), "display" => false, "width" => "100%", "class" => "form-select"]], "method", false, false, false, 323);
                // line 330
                echo "
                        ";
                // line 331
                echo twig_call_macro($macros["fields"], "macro_field", ["alert",                 // line 333
($context["alert_field"] ?? null), __("Alarms on financial and administrative information"), ["add_field_html" => (("<span class=\"text-muted\">" .                 // line 335
($context["alert_html"] ?? null)) . "</span>")]], 331, $context, $this->getSourceContext());
                // line 336
                echo "
                     ";
            }
            // line 338
            echo "
                     ";
            // line 339
            $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHookFunction(twig_constant("Glpi\\Plugin\\Hooks::INFOCOM"), ($context["item"] ?? null));
            // line 340
            echo "
                     <div class=\"card-body mx-n2 mb-4  border-top\">
                        ";
            // line 342
            if (($context["can_global_update"] ?? null)) {
                // line 343
                echo "                           <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                              <i class=\"far fa-save\"></i>
                              <span>";
                // line 345
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                           </button>
                        ";
            }
            // line 348
            echo "
                        ";
            // line 349
            if (($context["can_global_purge"] ?? null)) {
                // line 350
                echo "                           <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\">
                              <i class=\"fas fa-trash-alt\"></i>
                              <span>";
                // line 352
                echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                echo "</span>
                           </button>
                        ";
            }
            // line 355
            echo "                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   ";
        }
        // line 363
        echo "
   ";
        // line 364
        if ((($context["can_edit"] ?? null) || ($context["can_create"] ?? null))) {
            // line 365
            echo "      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
   </form>
   ";
        }
        // line 368
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "components/infocom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 368,  482 => 365,  480 => 364,  477 => 363,  467 => 355,  461 => 352,  457 => 350,  455 => 349,  452 => 348,  446 => 345,  442 => 343,  440 => 342,  436 => 340,  434 => 339,  431 => 338,  427 => 336,  425 => 335,  424 => 333,  423 => 331,  420 => 330,  418 => 325,  417 => 323,  414 => 322,  411 => 321,  408 => 320,  405 => 319,  403 => 318,  399 => 316,  397 => 315,  396 => 313,  395 => 311,  392 => 310,  388 => 308,  386 => 306,  385 => 305,  384 => 297,  382 => 295,  379 => 294,  376 => 293,  370 => 291,  364 => 289,  361 => 288,  359 => 287,  355 => 285,  353 => 284,  352 => 282,  351 => 280,  347 => 278,  344 => 275,  340 => 272,  338 => 271,  337 => 269,  336 => 267,  332 => 265,  330 => 263,  329 => 260,  328 => 257,  324 => 255,  320 => 253,  318 => 252,  317 => 250,  315 => 248,  313 => 247,  309 => 245,  307 => 244,  306 => 242,  304 => 240,  301 => 239,  299 => 238,  295 => 236,  293 => 235,  292 => 233,  291 => 231,  287 => 229,  285 => 227,  284 => 222,  283 => 220,  279 => 218,  277 => 216,  276 => 214,  273 => 213,  270 => 212,  267 => 211,  264 => 210,  261 => 209,  259 => 208,  255 => 206,  253 => 204,  251 => 202,  249 => 198,  248 => 197,  247 => 196,  246 => 195,  245 => 194,  244 => 193,  243 => 192,  238 => 189,  236 => 186,  235 => 183,  234 => 181,  230 => 179,  228 => 176,  227 => 173,  226 => 171,  222 => 169,  220 => 168,  219 => 166,  218 => 164,  214 => 162,  212 => 161,  211 => 159,  210 => 157,  206 => 155,  204 => 154,  203 => 153,  202 => 151,  201 => 149,  197 => 147,  195 => 146,  194 => 144,  193 => 142,  190 => 141,  186 => 139,  184 => 137,  183 => 135,  182 => 132,  180 => 129,  178 => 128,  174 => 126,  172 => 124,  171 => 123,  170 => 120,  169 => 117,  165 => 115,  162 => 112,  158 => 109,  156 => 108,  155 => 106,  154 => 104,  150 => 102,  148 => 101,  147 => 99,  146 => 97,  142 => 95,  140 => 94,  139 => 92,  138 => 90,  134 => 88,  132 => 87,  131 => 85,  130 => 83,  126 => 81,  124 => 80,  123 => 78,  122 => 76,  118 => 74,  116 => 73,  115 => 71,  114 => 69,  110 => 67,  107 => 63,  99 => 57,  94 => 56,  91 => 55,  88 => 54,  85 => 53,  82 => 52,  75 => 48,  69 => 45,  65 => 44,  62 => 43,  59 => 42,  57 => 41,  54 => 40,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/infocom.html.twig", "D:\\wamp\\www\\glpi\\templates\\components\\infocom.html.twig");
    }
}
