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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_45eb87c6911e96f26cbc876990d9fef2 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 53
        echo "
";
        // line 70
        echo "
";
        // line 86
        echo "

";
        // line 107
        echo "

";
        // line 129
        echo "

";
        // line 158
        echo "

";
        // line 183
        echo "

";
        // line 198
        echo "

";
        // line 279
        echo "
";
        // line 313
        echo "
";
        // line 346
        echo "
";
        // line 380
        echo "
";
        // line 408
        echo "
";
        // line 447
        echo "
";
        // line 452
        echo "
";
        // line 474
        echo "
";
        // line 499
        echo "
";
        // line 527
        echo "
";
        // line 544
        echo "
";
        // line 567
        echo "
";
        // line 591
        echo "
";
        // line 614
        echo "
";
        // line 636
        echo "
";
        // line 661
        echo "
";
        // line 672
        echo "
";
        // line 694
        echo "
";
        // line 717
        echo "
";
        // line 751
        echo "
";
        // line 762
        echo "
";
        // line 797
        echo "
";
        // line 808
        echo "
";
        // line 818
        echo "

";
        // line 836
        echo "

";
        // line 895
        echo "

";
        // line 926
        echo "

";
    }

    // line 34
    public function macro_largeTitle($__label__ = null, $__icon__ = "", $__first__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "first" => $__first__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 35
            echo "   ";
            $context["margins"] = "mt-3";
            // line 36
            echo "   ";
            if (($context["first"] ?? null)) {
                // line 37
                echo "      ";
                $context["margins"] = "mt-n2";
                // line 38
                echo "   ";
            }
            // line 39
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 40
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title ";
            // line 42
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 43
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 44
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 45
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_smallTitle($__label__ = null, $__icon__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 56
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 57
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle ";
            // line 59
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 60
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 61
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 62
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_autoNameField($__name__ = null, $__item__ = null, $__label__ = "", $__withtemplate__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "withtemplate" => $__withtemplate__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 72
            echo "   ";
            $context["tpl_value"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) : ($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["name"] ?? null)] ?? null) : null))));
            // line 73
            echo "   ";
            $context["tplmark"] = "";
            // line 74
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 74)) {
                echo " ";
                // line 75
                echo "      ";
                $context["tplmark"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAutofillMark", [0 => ($context["name"] ?? null), 1 => ["withtemplate" => ($context["withtemplate"] ?? null)], 2 => ($context["tpl_value"] ?? null)], "method", false, false, false, 75);
                // line 76
                echo "   ";
            }
            // line 77
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 77), ($context["name"] ?? null), [], "array", true, true, false, 77) &&  !(null === (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["name"] ?? null)] ?? null) : null)))) {
                // line 78
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["name"] ?? null)] ?? null) : null)), 1 => ($context["name"] ?? null), 2 => (($context["withtemplate"] ?? null) == 2), 3 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 78), 4 => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null)]);
                // line 79
                echo "   ";
            } else {
                // line 80
                echo "      ";
                $context["value"] = null;
                // line 81
                echo "   ";
            }
            // line 82
            echo "   ";
            $context["label"] = twig_sprintf(__("%1\$s%2\$s"), ($context["label"] ?? null), ($context["tplmark"] ?? null));
            // line 83
            echo "
   ";
            // line 84
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 84, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 88
    public function macro_textField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 89
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "text"], ($context["options"] ?? null));
            // line 90
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 90), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 90)) {
                // line 91
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 92
                echo "   ";
            }
            // line 93
            echo "
   ";
            // line 94
            ob_start(function () { return ''; });
            // line 95
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 95), "html", null, true);
            echo "\" id=\"%id%\"
             class=\"form-control ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 96), "html", null, true);
            echo "\"
             name=\"";
            // line 97
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 98
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 98)) ? (print (twig_escape_filter($this->env, ("maxlength=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 98)), "html", null, true))) : (print ("")));
            echo "
             ";
            // line 99
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 99)) ? ("readonly") : (""));
            echo "
             ";
            // line 100
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 100)) ? ("disabled") : (""));
            echo "
             ";
            // line 101
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 101)) ? ("multiple") : (""));
            echo " ";
            // line 102
            echo "             ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 102)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            echo "
   ";
            // line 105
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 105, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 109
    public function macro_checkboxField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 110
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 110), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 110)) {
                // line 111
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 112
                echo "   ";
            }
            // line 113
            echo "
   ";
            // line 114
            $context["options"] = twig_array_merge(["center" => true],             // line 116
($context["options"] ?? null));
            // line 117
            echo "
   ";
            // line 118
            ob_start(function () { return ''; });
            // line 119
            echo "      <input type=\"hidden\"   name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
      <input type=\"checkbox\" name=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             ";
            // line 121
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
             ";
            // line 122
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 122)) ? ("readonly") : (""));
            echo "
             ";
            // line 123
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 123)) ? ("required") : (""));
            echo "
             ";
            // line 124
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 124)) ? ("disabled") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            echo "
   ";
            // line 127
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 127, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 131
    public function macro_sliderField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 132
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 132), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 132)) {
                // line 133
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true],                 // line 135
($context["options"] ?? null));
                // line 136
                echo "   ";
            }
            // line 137
            echo "   ";
            $context["options"] = twig_array_merge(["no_value" => 0, "yes_value" => 1],             // line 140
($context["options"] ?? null));
            // line 141
            echo "
   ";
            // line 142
            ob_start(function () { return ''; });
            // line 143
            echo "      <label class=\"form-check form-switch pt-2\">
         <input type=\"hidden\"   name=\"";
            // line 144
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 144), "html", null, true);
            echo "\" />
         <input type=\"checkbox\" name=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 145), "html", null, true);
            echo "\" class=\"form-check-input\" id=\"%id%\"
                ";
            // line 146
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
                ";
            // line 147
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 147)) ? ("readonly") : (""));
            echo "
                ";
            // line 148
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 148)) ? ("required") : (""));
            echo "
                ";
            // line 149
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 149)) ? ("disabled") : (""));
            echo " />
         ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 150)) {
                // line 151
                echo "            <span class=\"form-check-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 151), "html", null, true);
                echo "</span>
         ";
            }
            // line 153
            echo "      </label>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            echo "
   ";
            // line 156
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 156, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 160
    public function macro_numberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 161
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161) != "any") && (twig_round(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161), 0, "floor") != twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161)))) {
                // line 162
                echo "      ";
                // line 163
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [0 => ($context["value"] ?? null), 1 => true]);
                // line 164
                echo "   ";
            }
            // line 165
            echo "
   ";
            // line 166
            if ((($context["value"] ?? null) == "")) {
                // line 167
                echo "      ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 167)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 167)) : (0));
                // line 168
                echo "   ";
            }
            // line 169
            echo "
   ";
            // line 170
            ob_start(function () { return ''; });
            // line 171
            echo "      <input type=\"number\" id=\"%id%\"
             class=\"form-control ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 172), "html", null, true);
            echo "\"
             name=\"";
            // line 173
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 174
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 174)) ? ("readonly") : (""));
            echo "
         ";
            // line 175
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 175)) ? ("disabled") : (""));
            echo "
         ";
            // line 176
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 176)) ? ("required") : (""));
            echo "
         ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 177)) {
                echo "min=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 177), "html", null, true);
                echo "\"";
            }
            // line 178
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 178)) {
                echo "max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 178), "html", null, true);
                echo "\"";
            }
            // line 179
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 179)) {
                echo "step=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 179), "html", null, true);
                echo "\"";
            }
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 181
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 181, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 185
    public function macro_readOnlyField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 186
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["readonly" => true]);
            // line 187
            echo "   ";
            ob_start(function () { return ''; });
            // line 188
            echo "      <span class=\"form-control ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 188), "html", null, true);
            echo "\" readonly>
         ";
            // line 189
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 190
                echo "            &nbsp;
         ";
            } else {
                // line 192
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                echo "
         ";
            }
            // line 194
            echo "      </span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 196
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 196, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 200
    public function macro_textareaField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 201
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "enable_mentions" => false, "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => []],             // line 209
($context["options"] ?? null));
            // line 210
            echo "
   ";
            // line 211
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 211), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 211)) {
                // line 212
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 213
                echo "   ";
            }
            // line 214
            echo "   ";
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 214)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 214)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 214))));
            // line 215
            echo "
   ";
            // line 216
            ob_start(function () { return ''; });
            // line 217
            echo "      ";
            // line 218
            echo "      <textarea class=\"form-control ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 218), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"3\"
                style=\"width: 100%;\"
                ";
            // line 220
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 220)) ? ("disabled") : (""));
            echo "
                ";
            // line 221
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 221)) ? ("readonly") : (""));
            echo "
                ";
            // line 222
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 222)) ? ("required") : (""));
            echo ">";
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 222)) ? (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null))))) : (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true))));
            echo "</textarea>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 224
            echo "
   ";
            // line 225
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 225)) {
                // line 226
                echo "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [0 =>                 // line 227
($context["id"] ?? null), 1 => twig_get_attribute($this->env, $this->source,                 // line 228
($context["options"] ?? null), "rand", [], "any", false, false, false, 228), 2 => true, 3 => ((twig_get_attribute($this->env, $this->source,                 // line 230
($context["options"] ?? null), "disabled", [], "any", true, true, false, 230)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 230), false)) : (false))]);
                // line 232
                echo "   ";
            }
            // line 233
            echo "
   ";
            // line 234
            $context["add_html"] = "";
            // line 235
            echo "   ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 235) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 235))) {
                // line 236
                echo "      ";
                ob_start(function () { return ''; });
                // line 237
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 238
($context["id"] ?? null), "multiple" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 240
($context["options"] ?? null), "uploads", [], "any", false, false, false, 240), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 241
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 241), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 241)]]);
                // line 243
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 244
                echo "   ";
            } elseif (((( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 244) &&  !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 244)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 244)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 244))) {
                // line 245
                echo "      ";
                ob_start(function () { return ''; });
                // line 246
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 247
($context["id"] ?? null), "name" =>                 // line 248
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 250
($context["options"] ?? null), "uploads", [], "any", false, false, false, 250), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 251
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 251), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 251)]]);
                // line 253
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 254
                echo "   ";
            }
            // line 255
            echo "
   ";
            // line 256
            if ((($context["add_html"] ?? null) != "")) {
                // line 257
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 257)) {
                    // line 258
                    echo "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 258));
                    // line 259
                    echo "      ";
                }
                // line 260
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 261
                echo "   ";
            }
            // line 262
            echo "
   ";
            // line 263
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 263, $context, $this->getSourceContext());
            echo "
   ";
            // line 264
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 264) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 265
                echo "      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('";
                // line 269
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "'),
                  ";
                // line 270
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 270), "html", null, true);
                echo ",
                  '";
                // line 271
                echo twig_escape_filter($this->env, Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 271)]), "html", null, true);
                echo "'
               );
               user_mention.register();
            }
         )
      </script>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 280
    public function macro_flatpickrHtmlInput($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 281
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 281), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 281)) {
                // line 282
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 283
                echo "   ";
            }
            // line 284
            echo "
   ";
            // line 285
            if ((($context["value"] ?? null) == "NULL")) {
                // line 286
                echo "      ";
                $context["value"] = null;
                // line 287
                echo "   ";
            }
            // line 288
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 288)) {
                // line 289
                echo "      ";
                if ((twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i:s") < twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"))) {
                    // line 290
                    echo "         ";
                    $context["class"] = "warn";
                    // line 291
                    echo "      ";
                }
                // line 292
                echo "   ";
            } else {
                // line 293
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 293)) {
                    // line 294
                    echo "         ";
                    $context["class"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 294);
                    // line 295
                    echo "      ";
                } else {
                    // line 296
                    echo "         ";
                    $context["class"] = "";
                    // line 297
                    echo "      ";
                }
                // line 298
                echo "   ";
            }
            // line 299
            echo "
   <div class=\"input-group flex-grow-1 flatpickr\" id=\"";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 300), "html", null, true);
            echo "\">
      ";
            // line 302
            echo "      ";
            // line 303
            echo "      <input type=\"text\" class=\"form-control rounded-start ps-2 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 303), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" data-input
             name=\"";
            // line 304
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 305
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 305)) ? ("required") : (""));
            echo "
             ";
            // line 306
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 306)) ? ("readonly") : (""));
            echo "
             ";
            // line 307
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 307)) ? ("disabled") : (""));
            echo " />
      ";
            // line 308
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 308)) {
                // line 309
                echo "         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      ";
            }
            // line 311
            echo "   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 314
    public function macro_dateField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 315
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 316
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 316))], ($context["options"] ?? null));
            // line 317
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 318
            echo "
   ";
            // line 319
            ob_start(function () { return ''; });
            // line 320
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 320, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$(\"#";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 323), "html", null, true);
            echo "\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '";
            // line 326
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo "',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            allowInput: ";
            // line 330
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 330)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 331
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 331)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale(\"";
            // line 332
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["locale"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["language"] ?? null) : null), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["locale"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["region"] ?? null) : null), "html", null, true);
            echo "\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 343
            echo "
   ";
            // line 344
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 344, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 347
    public function macro_datetimeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 348
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 349
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 349))], ($context["options"] ?? null));
            // line 350
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 351
            echo "
   ";
            // line 352
            ob_start(function () { return ''; });
            // line 353
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 353, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$('#";
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 356), "html", null, true);
            echo "').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '";
            // line 359
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo " H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            allowInput: ";
            // line 364
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 364)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 365
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 365)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale('";
            // line 366
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["locale"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["language"] ?? null) : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["locale"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["region"] ?? null) : null), "html", null, true);
            echo "'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 377
            echo "
   ";
            // line 378
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 378, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 381
    public function macro_colorField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 382
            echo "   ";
            ob_start(function () { return ''; });
            // line 383
            echo "      <input id=\"%id%\"
             class=\"form-control ";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 384), "html", null, true);
            echo "\"
             name=\"";
            // line 385
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 386
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 386)) ? ("readonly") : (""));
            echo "
         ";
            // line 387
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 387)) ? ("disabled") : (""));
            echo "
         ";
            // line 388
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 388)) ? ("required") : (""));
            echo " />
      <script>
      \$(function() {
        \$(\"#%id%\").spectrum({
            showInput: true,
            preferredFormat: \"hex\",
            type: \"text\",
            change: function(color) {
                if (color.getAlpha() !== 1) {
                    let hex = color.toHexString();
                    hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                    this.value = hex;
                }
            }
        });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 406
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 406, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 409
    public function macro_passwordField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 410
            echo "   ";
            $context["options"] = twig_array_merge(["autocomplete" => "new-password", "is_disclosable" => false, "rand" => (((twig_get_attribute($this->env, $this->source,             // line 413
($context["options"] ?? null), "rand", [], "any", true, true, false, 413) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 413)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 413)) : (twig_random($this->env)))],             // line 414
($context["options"] ?? null));
            // line 415
            echo "   ";
            $context["options"] = twig_array_merge(["id" => ((twig_get_attribute($this->env, $this->source,             // line 416
($context["options"] ?? null), "id", [], "any", true, true, false, 416)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 416)) : ((($context["name"] ?? null) . twig_random($this->env)))), "clearable" => ((twig_get_attribute($this->env, $this->source,             // line 417
($context["options"] ?? null), "clearable", [], "any", true, true, false, 417)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 417)) : ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 417)))],             // line 418
($context["options"] ?? null));
            // line 419
            echo "
   ";
            // line 420
            ob_start(function () { return ''; });
            // line 421
            echo "      <input type=\"password\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 421), "html", null, true);
            echo "\"
             class=\"form-control ";
            // line 422
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 422), "html", null, true);
            echo "\"
             name=\"";
            // line 423
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
             value=\"";
            // line 424
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 424)) ? (print (twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
         ";
            // line 425
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 425)) ? ("readonly") : (""));
            echo "
         ";
            // line 426
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 426)) ? ("disabled") : (""));
            echo "
         ";
            // line 427
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 427)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 429
            echo "   ";
            ob_start(function () { return ''; });
            // line 430
            echo "      &nbsp;<i class=\"far fa-eye pointer disclose\" onmousedown=\"showDisclosablePasswordField('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 430), "html", null, true);
            echo "')\"
               onmouseup=\"hideDisclosablePasswordField('";
            // line 431
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 431), "html", null, true);
            echo "')\"
               onmouseout=\"hideDisclosablePasswordField('";
            // line 432
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 432), "html", null, true);
            echo "')\"></i>
      &nbsp;<i class=\"fa fa-paste pointer disclose\" onclick=\"copyDisclosablePasswordFieldToClipboard('";
            // line 433
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 433), "html", null, true);
            echo "')\"></i>
   ";
            $context["btn_group"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 435
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 435)) {
                // line 436
                echo "      ";
                $context["label"] = (($context["label"] ?? null) . ($context["btn_group"] ?? null));
                // line 437
                echo "   ";
            }
            // line 438
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 438)) {
                // line 439
                echo "      ";
                ob_start(function () { return ''; });
                // line 440
                echo "         <input type=\"checkbox\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" id=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">&nbsp;<label for=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, __("Clear"), "html", null, true);
                echo "</label>
      ";
                $context["clear_chk"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 442
                echo "      ";
                $context["field"] = (($context["field"] ?? null) . ($context["clear_chk"] ?? null));
                // line 443
                echo "   ";
            }
            // line 444
            echo "
   ";
            // line 445
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 445, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 448
    public function macro_emailField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 449
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "email"], ($context["options"] ?? null));
            // line 450
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 450, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 453
    public function macro_fileField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 454
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "name" =>             // line 456
($context["name"] ?? null), "simple" => false],             // line 458
($context["options"] ?? null));
            // line 459
            echo "   ";
            ob_start(function () { return ''; });
            // line 460
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 460)) {
                // line 461
                echo "        <input type=\"file\" id=\"%id%\"
               class=\"form-control ";
                // line 462
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 462), "html", null, true);
                echo "\"
               name=\"";
                // line 463
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
               ";
                // line 464
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mulitple", [], "any", false, false, false, 464)) ? ("multiple") : (""));
                echo "
               ";
                // line 465
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 465)) ? ("readonly") : (""));
                echo "
               ";
                // line 466
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 466)) ? ("disabled") : (""));
                echo "
               ";
                // line 467
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 467)) ? ("required") : (""));
                echo " />
      ";
            } else {
                // line 469
                echo "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ($context["options"] ?? null)]);
                // line 470
                echo "      ";
            }
            // line 471
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 472
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 472, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 475
    public function macro_imageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], $__link_options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "link_options" => $__link_options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 476
            echo "   ";
            ob_start(function () { return ''; });
            // line 477
            echo "      <div class=\"img-overlay-wrapper position-relative\">
         ";
            // line 478
            $context["clearable"] = (($__internal_compile_8 = ($context["options"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["clearable"] ?? null) : null);
            // line 479
            echo "         ";
            $context["url"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 479) &&  !(null === (($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["url"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["options"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["url"] ?? null) : null)) : (null));
            // line 480
            echo "         ";
            $context["options"] = twig_array_filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
            // line 481
            echo "         ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 482
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["link_options"] ?? null)]);
                echo ">
         ";
            }
            // line 484
            echo "               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\" ";
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["options"] ?? null)]);
            echo " />
         ";
            // line 485
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 486
                echo "            </a>
         ";
            }
            // line 488
            echo "         ";
            if (($context["clearable"] ?? null)) {
                // line 489
                echo "            <input type=\"hidden\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                // line 490
                echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
                echo "\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_";
                // line 491
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
            }
            // line 495
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 497
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 497, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 500
    public function macro_imageGalleryField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 501
            echo "   ";
            ob_start(function () { return ''; });
            // line 502
            echo "      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
            // line 503
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                // line 504
                echo "            <div style=\"position: relative; width: fit-content\">
               ";
                // line 505
                echo twig_call_macro($macros["_self"], "macro_imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($__internal_compile_11 =                 // line 508
($context["options"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["clearable"] ?? null) : null), "no_label" => true]], 505, $context, $this->getSourceContext());
                // line 510
                echo "
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 513
            echo "      </div>
      ";
            // line 514
            echo twig_call_macro($macros["_self"], "macro_fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], 514, $context, $this->getSourceContext());
            // line 517
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 519
            echo "
   ";
            // line 520
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 520)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 520)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 520))));
            // line 521
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], 521, $context, $this->getSourceContext());
            echo "
   ";
            // line 522
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], 522, $context, $this->getSourceContext());
            // line 525
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 528
    public function macro_hiddenField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 529
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 529)) {
                // line 530
                echo "      ";
                $context["options"] = twig_array_merge(["mb" => "mb-0"],                 // line 532
($context["options"] ?? null));
                // line 533
                echo "   ";
            }
            // line 534
            echo "   ";
            ob_start(function () { return ''; });
            // line 535
            echo "      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control ";
            // line 536
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 536), "html", null, true);
            echo "\"
             name=\"";
            // line 537
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 538
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 538)) ? ("readonly") : (""));
            echo "
         ";
            // line 539
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 539)) ? ("disabled") : (""));
            echo "
         ";
            // line 540
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 540)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 542
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 542, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 545
    public function macro_dropdownNumberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 546
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 549
($context["options"] ?? null));
            // line 550
            echo "
   ";
            // line 551
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 551)) {
                // line 552
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 553
                echo "   ";
            }
            // line 554
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 554), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 554)) {
                // line 555
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 556
                echo "   ";
            }
            // line 557
            echo "
   ";
            // line 558
            ob_start(function () { return ''; });
            // line 559
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 560
($context["value"] ?? null), "rand" =>             // line 561
($context["rand"] ?? null)],             // line 562
($context["options"] ?? null))]);
            // line 563
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 564
            echo "
   ";
            // line 565
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 565))])], 565, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 568
    public function macro_dropdownArrayField($__name__ = null, $__value__ = null, $__elements__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "elements" => $__elements__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 569
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 572
($context["options"] ?? null));
            // line 573
            echo "
   ";
            // line 574
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 574)) {
                // line 575
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 576
                echo "   ";
            }
            // line 577
            echo "
   ";
            // line 578
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 578), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 578)) {
                // line 579
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 580
                echo "   ";
            }
            // line 581
            echo "
   ";
            // line 582
            ob_start(function () { return ''; });
            // line 583
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [0 => ($context["name"] ?? null), 1 => ($context["elements"] ?? null), 2 => twig_array_merge(["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(            // line 584
($context["value"] ?? null)), "rand" =>             // line 585
($context["rand"] ?? null)],             // line 586
($context["options"] ?? null))]);
            // line 587
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 588
            echo "
   ";
            // line 589
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 589))])], 589, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 592
    public function macro_dropdownTimestampField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 593
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 596
($context["options"] ?? null));
            // line 597
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 597), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 597)) {
                // line 598
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 599
                echo "   ";
            }
            // line 600
            echo "
   ";
            // line 601
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 601)) {
                // line 602
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 603
                echo "   ";
            }
            // line 604
            echo "
   ";
            // line 605
            ob_start(function () { return ''; });
            // line 606
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 607
($context["value"] ?? null), "rand" =>             // line 608
($context["rand"] ?? null)],             // line 609
($context["options"] ?? null))]);
            // line 610
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 611
            echo "
   ";
            // line 612
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 612))])], 612, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 615
    public function macro_dropdownYesNo($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 616
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 619
($context["options"] ?? null));
            // line 620
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 620), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 620)) {
                // line 621
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 622
                echo "   ";
            }
            // line 623
            echo "
   ";
            // line 624
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 624)) {
                // line 625
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 626
                echo "   ";
            }
            // line 627
            echo "
   ";
            // line 628
            ob_start(function () { return ''; });
            // line 629
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 =>  -1, 3 => twig_array_merge(["rand" =>             // line 630
($context["rand"] ?? null)],             // line 631
($context["options"] ?? null))]);
            // line 632
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 633
            echo "
   ";
            // line 634
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 634))])], 634, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 637
    public function macro_dropdownItemTypes($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 638
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 641
($context["options"] ?? null));
            // line 642
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 642), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 642)) {
                // line 643
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 644
                echo "   ";
            }
            // line 645
            echo "
   ";
            // line 646
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 646)) {
                // line 647
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 648
                echo "   ";
            }
            // line 649
            echo "
   ";
            // line 650
            $context["types"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 650)) ? (_twig_default_filter((($__internal_compile_12 = ($context["options"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["types"] ?? null) : null), [])) : ([]));
            // line 651
            echo "
   ";
            // line 652
            ob_start(function () { return ''; });
            // line 653
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [0 => ($context["name"] ?? null), 1 => ($context["types"] ?? null), 2 => twig_array_merge(["rand" =>             // line 654
($context["rand"] ?? null), "value" =>             // line 655
($context["value"] ?? null)],             // line 656
($context["options"] ?? null))]);
            // line 657
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 658
            echo "
   ";
            // line 659
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 659))])], 659, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 662
    public function macro_dropdownItemsFromItemtypes($__name__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 663
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)],             // line 665
($context["options"] ?? null));
            // line 666
            echo "
   ";
            // line 667
            ob_start(function () { return ''; });
            // line 668
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [0 => ($context["options"] ?? null)]);
            // line 669
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 670
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 670))])], 670, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 673
    public function macro_dropdownIcons($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 674
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 677
($context["options"] ?? null));
            // line 678
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 678), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 678)) {
                // line 679
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 680
                echo "   ";
            }
            // line 681
            echo "
   ";
            // line 682
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 682)) {
                // line 683
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 684
                echo "   ";
            }
            // line 685
            echo "
   ";
            // line 686
            ob_start(function () { return ''; });
            // line 687
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 => (twig_constant("GLPI_ROOT") . "/pics/icones"), 3 => twig_array_merge(["rand" =>             // line 688
($context["rand"] ?? null)],             // line 689
($context["options"] ?? null))]);
            // line 690
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 691
            echo "
   ";
            // line 692
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 692))])], 692, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 695
    public function macro_dropdownHoursField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 696
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 699
($context["options"] ?? null));
            // line 700
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 700), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 700)) {
                // line 701
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 702
                echo "   ";
            }
            // line 703
            echo "
   ";
            // line 704
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 704)) {
                // line 705
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 706
                echo "   ";
            }
            // line 707
            echo "
   ";
            // line 708
            ob_start(function () { return ''; });
            // line 709
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["rand" =>             // line 710
($context["rand"] ?? null), "value" =>             // line 711
($context["value"] ?? null)],             // line 712
($context["options"] ?? null))]);
            // line 713
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 714
            echo "
   ";
            // line 715
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 715))])], 715, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 718
    public function macro_dropdownField($__itemtype__ = null, $__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "itemtype" => $__itemtype__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 719
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 719)) {
                // line 720
                echo "      ";
                // line 721
                echo "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 722
                echo "      <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["defined_input_name"] ?? null), "html", null, true);
                echo "\" value=\"1\"></input>

      ";
                // line 725
                echo "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 726
                echo "   ";
            }
            // line 727
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 730
($context["options"] ?? null));
            // line 731
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 731), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 731)) {
                // line 732
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 733
                echo "   ";
            }
            // line 734
            echo "
   ";
            // line 735
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 735)) {
                // line 736
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 737
                echo "   ";
            }
            // line 738
            echo "
   ";
            // line 739
            ob_start(function () { return ''; });
            // line 740
            echo "      ";
            echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), twig_array_merge(["name" =>             // line 741
($context["name"] ?? null), "value" =>             // line 742
($context["value"] ?? null), "rand" =>             // line 743
($context["rand"] ?? null)],             // line 744
($context["options"] ?? null)));
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 746
            echo "
   ";
            // line 747
            if ( !twig_test_empty(twig_trim_filter(($context["field"] ?? null)))) {
                // line 748
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 748))])], 748, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 752
    public function macro_htmlField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 753
            echo "   ";
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 754
                echo "      ";
                $context["value"] = "&nbsp;";
                // line 755
                echo "   ";
            }
            // line 756
            echo "
   ";
            // line 757
            ob_start(function () { return ''; });
            // line 758
            echo "      <span class=\"form-control-plaintext\">";
            echo ($context["value"] ?? null);
            echo "</span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 760
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 760, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 763
    public function macro_field($__name__ = null, $__field__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 764
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => []],             // line 771
($context["options"] ?? null));
            // line 772
            echo "
   ";
            // line 773
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 773), ($context["name"] ?? null), [], "array", true, true, false, 773)) {
                // line 774
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 774)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["name"] ?? null)] ?? null) : null)]);
                // line 775
                echo "   ";
            } elseif (twig_in_filter(($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 775))) {
                // line 776
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true]);
                // line 777
                echo "   ";
            }
            // line 778
            echo "
   ";
            // line 779
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 779)) {
                // line 780
                echo "      ";
                echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
                echo "
   ";
            } else {
                // line 782
                echo "      ";
                $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 782)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 782)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 782))));
                // line 783
                echo "      ";
                $context["field"] = twig_replace_filter(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 784
                echo "      ";
                $context["add_field_html"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 784)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 784)) : (""));
                // line 785
                echo "
      ";
                // line 786
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", true, true, false, 786) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 786), "isHiddenField", [0 => ($context["name"] ?? null)], "method", false, false, false, 786))) {
                    // line 787
                    echo "         ";
                    if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 787)) {
                        // line 788
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 788, $context, $this->getSourceContext());
                        echo "
         ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 789
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 789)) {
                        // line 790
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 790, $context, $this->getSourceContext());
                        echo "
         ";
                    } else {
                        // line 792
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 792, $context, $this->getSourceContext());
                        echo "
         ";
                    }
                    // line 794
                    echo "      ";
                }
                // line 795
                echo "   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 798
    public function macro_ajaxField($__id__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 799
            echo "   ";
            ob_start(function () { return ''; });
            // line 800
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"form-field-ajax\">
         ";
            // line 801
            if ( !(null === ($context["value"] ?? null))) {
                // line 802
                echo "            ";
                echo ($context["value"] ?? null);
                echo "
         ";
            }
            // line 804
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 806
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 806))])], 806, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 809
    public function macro_nullField($__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 810
            echo "   ";
            $context["options"] = twig_array_merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 811
            echo "
   ";
            // line 812
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 812)) {
                // line 813
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 813, $context, $this->getSourceContext());
                echo "
   ";
            } else {
                // line 815
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 815, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 820
    public function macro_noLabelField($__field__ = null, $__id__ = "", $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 821
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-3"],             // line 824
($context["options"] ?? null));
            // line 825
            echo "
   ";
            // line 826
            $context["class"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 826) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 826)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 826)) : ("col-12 col-sm-6"));
            // line 827
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 827)) {
                // line 828
                echo "      ";
                $context["class"] = "col-12";
                // line 829
                echo "   ";
            }
            // line 830
            echo "
   <div class=\"";
            // line 831
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 831), "html", null, true);
            echo "\">
      ";
            // line 832
            echo ($context["field"] ?? null);
            echo "
      ";
            // line 833
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 838
    public function macro_horizontalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 839
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "full_width_adapt_column" => true, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "label_class" => "col-xxl-5", "input_class" => "col-xxl-7", "add_field_class" => "", "add_field_attribs" => [], "center" => false],             // line 850
($context["options"] ?? null));
            // line 851
            echo "
   ";
            // line 852
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 852)) {
                // line 853
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 856
                echo "
      ";
                // line 857
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width_adapt_column", [], "any", false, false, false, 857)) {
                    // line 858
                    echo "         ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]);
                    // line 862
                    echo "      ";
                }
                // line 863
                echo "   ";
            }
            // line 864
            echo "
   ";
            // line 865
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 865)) {
                // line 866
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-2", "input_class" => "col-10"]);
                // line 870
                echo "   ";
            }
            // line 871
            echo "
   ";
            // line 872
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 872)) {
                // line 873
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => (twig_get_attribute($this->env, $this->source,                 // line 874
($context["options"] ?? null), "label_class", [], "any", false, false, false, 874) . " text-xxl-end")]);
                // line 876
                echo "   ";
            }
            // line 877
            echo "
   ";
            // line 878
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 878))) {
                // line 879
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 879)]);
                // line 880
                echo "   ";
            } else {
                // line 881
                echo "      ";
                $context["extra_attribs"] = "";
                // line 882
                echo "   ";
            }
            // line 883
            echo "
   <div class=\"form-field row ";
            // line 884
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 884), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 884), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 884), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 885
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 885))], 885, $context, $this->getSourceContext());
            echo "
      ";
            // line 886
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 886)) {
                // line 887
                echo "         ";
                $context["flex_class"] = "d-flex align-items-center";
                // line 888
                echo "      ";
            }
            // line 889
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 889), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["flex_class"] ?? null), "html", null, true);
            echo " field-container\">
         ";
            // line 890
            echo ($context["field"] ?? null);
            echo "
         ";
            // line 891
            echo ($context["add_field_html"] ?? null);
            echo "
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 897
    public function macro_verticalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 898
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => []],             // line 904
($context["options"] ?? null));
            // line 905
            echo "
   ";
            // line 906
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 906)) {
                // line 907
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 910
                echo "   ";
            }
            // line 911
            echo "
   ";
            // line 912
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 912))) {
                // line 913
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 913)]);
                // line 914
                echo "   ";
            } else {
                // line 915
                echo "      ";
                $context["extra_attribs"] = "";
                // line 916
                echo "   ";
            }
            // line 917
            echo "
   <div class=\"form-field ";
            // line 918
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 918), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 918), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 918), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 919
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 919))], 919, $context, $this->getSourceContext());
            echo "
      <div class=\"";
            // line 920
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 920), "html", null, true);
            echo " field-container\">
         ";
            // line 921
            echo ($context["field"] ?? null);
            echo "
      </div>
      ";
            // line 923
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 928
    public function macro_label($__label__ = null, $__id__ = null, $__options__ = [], $__class__ = "form-label", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "id" => $__id__,
            "options" => $__options__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 929
            echo "    ";
            $context["options"] = twig_array_merge(["locked" => false, "locked_value" => null],             // line 932
($context["options"] ?? null));
            // line 933
            echo "
   ";
            // line 934
            $context["required_mark"] = "";
            // line 935
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 935), "isMandatoryField", [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 935)], "method", false, false, false, 935) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 935))) {
                // line 936
                echo "      ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 937
                echo "   ";
            }
            // line 938
            echo "
   ";
            // line 939
            $context["helper"] = "";
            // line 940
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 940)) {
                // line 941
                echo "      ";
                ob_start(function () { return ''; });
                // line 942
                echo "         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"";
                // line 943
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 943), "html", null, true);
                echo "\">
            ?
         </span>
      ";
                $context["helper"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 947
                echo "   ";
            }
            // line 948
            echo "
   ";
            // line 949
            $context["locked_mark"] = "";
            // line 950
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 950)) {
                // line 951
                echo "      ";
                ob_start(function () { return ''; });
                // line 952
                echo "        ";
                ob_start(function () { return ''; });
                echo twig_escape_filter($this->env, __("Field will not be updated from inventory"), "html", null, true);
                $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 953
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 953))) {
                    // line 954
                    echo "            ";
                    ob_start(function () { return ''; });
                    echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, ((__("Last inventory value was:") . " ") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 954)), "html", null, true);
                    $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 955
                    echo "        ";
                }
                // line 956
                echo "        <i class=\"ti ti-lock\"
           title=\"";
                // line 957
                echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                echo "\"
           data-bs-toggle=\"tooltip\"></i>
      ";
                $context["locked_mark"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 960
                echo "   ";
            }
            // line 961
            echo "
   <label class=\"";
            // line 962
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 963
            echo ($context["label"] ?? null);
            echo "
      ";
            // line 964
            echo ($context["locked_mark"] ?? null);
            echo "
      ";
            // line 965
            echo ($context["required_mark"] ?? null);
            echo "
      ";
            // line 966
            echo ($context["helper"] ?? null);
            echo "
   </label>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/form/fields_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3014 => 966,  3010 => 965,  3006 => 964,  3002 => 963,  2996 => 962,  2993 => 961,  2990 => 960,  2984 => 957,  2981 => 956,  2978 => 955,  2971 => 954,  2968 => 953,  2963 => 952,  2960 => 951,  2957 => 950,  2955 => 949,  2952 => 948,  2949 => 947,  2942 => 943,  2939 => 942,  2936 => 941,  2933 => 940,  2931 => 939,  2928 => 938,  2925 => 937,  2922 => 936,  2919 => 935,  2917 => 934,  2914 => 933,  2912 => 932,  2910 => 929,  2894 => 928,  2882 => 923,  2877 => 921,  2873 => 920,  2869 => 919,  2859 => 918,  2856 => 917,  2853 => 916,  2850 => 915,  2847 => 914,  2844 => 913,  2842 => 912,  2839 => 911,  2836 => 910,  2833 => 907,  2831 => 906,  2828 => 905,  2826 => 904,  2824 => 898,  2807 => 897,  2794 => 891,  2790 => 890,  2783 => 889,  2780 => 888,  2777 => 887,  2775 => 886,  2771 => 885,  2761 => 884,  2758 => 883,  2755 => 882,  2752 => 881,  2749 => 880,  2746 => 879,  2744 => 878,  2741 => 877,  2738 => 876,  2736 => 874,  2734 => 873,  2732 => 872,  2729 => 871,  2726 => 870,  2723 => 866,  2721 => 865,  2718 => 864,  2715 => 863,  2712 => 862,  2709 => 858,  2707 => 857,  2704 => 856,  2701 => 853,  2699 => 852,  2696 => 851,  2694 => 850,  2692 => 839,  2675 => 838,  2663 => 833,  2659 => 832,  2653 => 831,  2650 => 830,  2647 => 829,  2644 => 828,  2641 => 827,  2639 => 826,  2636 => 825,  2634 => 824,  2632 => 821,  2616 => 820,  2603 => 815,  2597 => 813,  2595 => 812,  2592 => 811,  2589 => 810,  2576 => 809,  2564 => 806,  2560 => 804,  2554 => 802,  2552 => 801,  2547 => 800,  2544 => 799,  2528 => 798,  2518 => 795,  2515 => 794,  2509 => 792,  2503 => 790,  2501 => 789,  2496 => 788,  2493 => 787,  2491 => 786,  2488 => 785,  2485 => 784,  2482 => 783,  2479 => 782,  2473 => 780,  2471 => 779,  2468 => 778,  2465 => 777,  2462 => 776,  2459 => 775,  2456 => 774,  2454 => 773,  2451 => 772,  2449 => 771,  2447 => 764,  2431 => 763,  2419 => 760,  2413 => 758,  2411 => 757,  2408 => 756,  2405 => 755,  2402 => 754,  2399 => 753,  2383 => 752,  2370 => 748,  2368 => 747,  2365 => 746,  2360 => 744,  2359 => 743,  2358 => 742,  2357 => 741,  2355 => 740,  2353 => 739,  2350 => 738,  2347 => 737,  2344 => 736,  2342 => 735,  2339 => 734,  2336 => 733,  2333 => 732,  2330 => 731,  2328 => 730,  2326 => 727,  2323 => 726,  2320 => 725,  2314 => 722,  2311 => 721,  2309 => 720,  2306 => 719,  2289 => 718,  2278 => 715,  2275 => 714,  2272 => 713,  2270 => 712,  2269 => 711,  2268 => 710,  2266 => 709,  2264 => 708,  2261 => 707,  2258 => 706,  2255 => 705,  2253 => 704,  2250 => 703,  2247 => 702,  2244 => 701,  2241 => 700,  2239 => 699,  2237 => 696,  2221 => 695,  2210 => 692,  2207 => 691,  2204 => 690,  2202 => 689,  2201 => 688,  2199 => 687,  2197 => 686,  2194 => 685,  2191 => 684,  2188 => 683,  2186 => 682,  2183 => 681,  2180 => 680,  2177 => 679,  2174 => 678,  2172 => 677,  2170 => 674,  2154 => 673,  2142 => 670,  2139 => 669,  2136 => 668,  2134 => 667,  2131 => 666,  2129 => 665,  2127 => 663,  2112 => 662,  2101 => 659,  2098 => 658,  2095 => 657,  2093 => 656,  2092 => 655,  2091 => 654,  2089 => 653,  2087 => 652,  2084 => 651,  2082 => 650,  2079 => 649,  2076 => 648,  2073 => 647,  2071 => 646,  2068 => 645,  2065 => 644,  2062 => 643,  2059 => 642,  2057 => 641,  2055 => 638,  2039 => 637,  2028 => 634,  2025 => 633,  2022 => 632,  2020 => 631,  2019 => 630,  2017 => 629,  2015 => 628,  2012 => 627,  2009 => 626,  2006 => 625,  2004 => 624,  2001 => 623,  1998 => 622,  1995 => 621,  1992 => 620,  1990 => 619,  1988 => 616,  1972 => 615,  1961 => 612,  1958 => 611,  1955 => 610,  1953 => 609,  1952 => 608,  1951 => 607,  1949 => 606,  1947 => 605,  1944 => 604,  1941 => 603,  1938 => 602,  1936 => 601,  1933 => 600,  1930 => 599,  1927 => 598,  1924 => 597,  1922 => 596,  1920 => 593,  1904 => 592,  1893 => 589,  1890 => 588,  1887 => 587,  1885 => 586,  1884 => 585,  1883 => 584,  1881 => 583,  1879 => 582,  1876 => 581,  1873 => 580,  1870 => 579,  1868 => 578,  1865 => 577,  1862 => 576,  1859 => 575,  1857 => 574,  1854 => 573,  1852 => 572,  1850 => 569,  1833 => 568,  1822 => 565,  1819 => 564,  1816 => 563,  1814 => 562,  1813 => 561,  1812 => 560,  1810 => 559,  1808 => 558,  1805 => 557,  1802 => 556,  1799 => 555,  1796 => 554,  1793 => 553,  1790 => 552,  1788 => 551,  1785 => 550,  1783 => 549,  1781 => 546,  1765 => 545,  1753 => 542,  1748 => 540,  1744 => 539,  1740 => 538,  1734 => 537,  1730 => 536,  1727 => 535,  1724 => 534,  1721 => 533,  1719 => 532,  1717 => 530,  1714 => 529,  1698 => 528,  1688 => 525,  1686 => 522,  1681 => 521,  1679 => 520,  1676 => 519,  1672 => 517,  1670 => 514,  1667 => 513,  1659 => 510,  1657 => 508,  1656 => 505,  1653 => 504,  1649 => 503,  1646 => 502,  1643 => 501,  1627 => 500,  1615 => 497,  1611 => 495,  1604 => 491,  1600 => 490,  1595 => 489,  1592 => 488,  1588 => 486,  1586 => 485,  1579 => 484,  1571 => 482,  1568 => 481,  1565 => 480,  1562 => 479,  1560 => 478,  1557 => 477,  1554 => 476,  1537 => 475,  1525 => 472,  1522 => 471,  1519 => 470,  1516 => 469,  1511 => 467,  1507 => 466,  1503 => 465,  1499 => 464,  1495 => 463,  1491 => 462,  1488 => 461,  1485 => 460,  1482 => 459,  1480 => 458,  1479 => 456,  1477 => 454,  1461 => 453,  1449 => 450,  1446 => 449,  1430 => 448,  1419 => 445,  1416 => 444,  1413 => 443,  1410 => 442,  1398 => 440,  1395 => 439,  1392 => 438,  1389 => 437,  1386 => 436,  1383 => 435,  1378 => 433,  1374 => 432,  1370 => 431,  1365 => 430,  1362 => 429,  1357 => 427,  1353 => 426,  1349 => 425,  1345 => 424,  1341 => 423,  1337 => 422,  1332 => 421,  1330 => 420,  1327 => 419,  1325 => 418,  1324 => 417,  1323 => 416,  1321 => 415,  1319 => 414,  1318 => 413,  1316 => 410,  1300 => 409,  1288 => 406,  1267 => 388,  1263 => 387,  1259 => 386,  1253 => 385,  1249 => 384,  1246 => 383,  1243 => 382,  1227 => 381,  1216 => 378,  1213 => 377,  1197 => 366,  1193 => 365,  1189 => 364,  1181 => 359,  1175 => 356,  1168 => 353,  1166 => 352,  1163 => 351,  1160 => 350,  1157 => 349,  1154 => 348,  1138 => 347,  1127 => 344,  1124 => 343,  1108 => 332,  1104 => 331,  1100 => 330,  1093 => 326,  1087 => 323,  1080 => 320,  1078 => 319,  1075 => 318,  1072 => 317,  1069 => 316,  1066 => 315,  1050 => 314,  1040 => 311,  1036 => 309,  1034 => 308,  1030 => 307,  1026 => 306,  1022 => 305,  1016 => 304,  1009 => 303,  1007 => 302,  1003 => 300,  1000 => 299,  997 => 298,  994 => 297,  991 => 296,  988 => 295,  985 => 294,  982 => 293,  979 => 292,  976 => 291,  973 => 290,  970 => 289,  967 => 288,  964 => 287,  961 => 286,  959 => 285,  956 => 284,  953 => 283,  950 => 282,  947 => 281,  931 => 280,  914 => 271,  910 => 270,  906 => 269,  900 => 265,  898 => 264,  894 => 263,  891 => 262,  888 => 261,  885 => 260,  882 => 259,  879 => 258,  876 => 257,  874 => 256,  871 => 255,  868 => 254,  865 => 253,  863 => 251,  862 => 250,  861 => 248,  860 => 247,  858 => 246,  855 => 245,  852 => 244,  849 => 243,  847 => 241,  846 => 240,  845 => 238,  843 => 237,  840 => 236,  837 => 235,  835 => 234,  832 => 233,  829 => 232,  827 => 230,  826 => 228,  825 => 227,  823 => 226,  821 => 225,  818 => 224,  811 => 222,  807 => 221,  803 => 220,  793 => 218,  791 => 217,  789 => 216,  786 => 215,  783 => 214,  780 => 213,  777 => 212,  775 => 211,  772 => 210,  770 => 209,  768 => 201,  752 => 200,  740 => 196,  736 => 194,  730 => 192,  726 => 190,  724 => 189,  719 => 188,  716 => 187,  713 => 186,  697 => 185,  685 => 181,  675 => 179,  668 => 178,  662 => 177,  658 => 176,  654 => 175,  650 => 174,  644 => 173,  640 => 172,  637 => 171,  635 => 170,  632 => 169,  629 => 168,  626 => 167,  624 => 166,  621 => 165,  618 => 164,  615 => 163,  613 => 162,  610 => 161,  594 => 160,  583 => 156,  580 => 155,  576 => 153,  570 => 151,  568 => 150,  564 => 149,  560 => 148,  556 => 147,  552 => 146,  546 => 145,  540 => 144,  537 => 143,  535 => 142,  532 => 141,  530 => 140,  528 => 137,  525 => 136,  523 => 135,  521 => 133,  518 => 132,  502 => 131,  491 => 127,  488 => 126,  483 => 124,  479 => 123,  475 => 122,  471 => 121,  467 => 120,  462 => 119,  460 => 118,  457 => 117,  455 => 116,  454 => 114,  451 => 113,  448 => 112,  445 => 111,  442 => 110,  426 => 109,  415 => 105,  412 => 104,  406 => 102,  403 => 101,  399 => 100,  395 => 99,  391 => 98,  385 => 97,  381 => 96,  376 => 95,  374 => 94,  371 => 93,  368 => 92,  365 => 91,  362 => 90,  359 => 89,  343 => 88,  332 => 84,  329 => 83,  326 => 82,  323 => 81,  320 => 80,  317 => 79,  314 => 78,  311 => 77,  308 => 76,  305 => 75,  301 => 74,  298 => 73,  295 => 72,  278 => 71,  263 => 65,  257 => 62,  254 => 61,  252 => 60,  248 => 59,  243 => 57,  240 => 56,  237 => 55,  223 => 54,  208 => 48,  202 => 45,  199 => 44,  197 => 43,  193 => 42,  188 => 40,  185 => 39,  182 => 38,  179 => 37,  176 => 36,  173 => 35,  158 => 34,  152 => 926,  148 => 895,  144 => 836,  140 => 818,  137 => 808,  134 => 797,  131 => 762,  128 => 751,  125 => 717,  122 => 694,  119 => 672,  116 => 661,  113 => 636,  110 => 614,  107 => 591,  104 => 567,  101 => 544,  98 => 527,  95 => 499,  92 => 474,  89 => 452,  86 => 447,  83 => 408,  80 => 380,  77 => 346,  74 => 313,  71 => 279,  67 => 198,  63 => 183,  59 => 158,  55 => 129,  51 => 107,  47 => 86,  44 => 70,  41 => 53,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/fields_macros.html.twig", "D:\\Laragon\\www\\glpi\\templates\\components\\form\\fields_macros.html.twig");
    }
}
