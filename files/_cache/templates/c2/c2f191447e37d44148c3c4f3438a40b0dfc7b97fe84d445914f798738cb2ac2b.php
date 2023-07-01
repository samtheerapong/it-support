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

/* components/itilobject/footer.html.twig */
class __TwigTemplate_dea0a9b94c290b7475f5ab9119e89b6709a6e4a047d86ad032e961c1eac35614 extends Template
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
        $context["timeline_btns_cls"] = ($context["left_regular_cls"] ?? null);
        // line 35
        $context["form_btns_cls"] = ((($context["is_expanded"] ?? null)) ? (($context["right_expanded_cls"] ?? null)) : ("col-lg"));
        // line 36
        $context["timeline_btn_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_action_btn_layout");
        // line 37
        $context["switch_btn_cls"] = "fa-caret-left";
        // line 38
        if (($context["is_expanded"] ?? null)) {
            // line 39
            echo "    ";
            $context["timeline_btns_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 40
            echo "    ";
            $context["form_btns_cls"] = ($context["right_expanded_cls"] ?? null);
            // line 41
            echo "    ";
            $context["switch_btn_cls"] = "fa-caret-right";
        }
        // line 43
        echo "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
   <div class=\"buttons-bar d-flex py-2\">
      <div class=\"col ";
        // line 46
        echo twig_escape_filter($this->env, ($context["timeline_btns_cls"] ?? null), "html", null, true);
        echo " ps-3 timeline-buttons d-flex\">
         ";
        // line 47
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 47)) {
            // line 48
            echo "            ";
            $context["default_action_data"] = twig_first($this->env, ($context["timeline_itemtypes"] ?? null));
            // line 49
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 49) && (0 !== twig_compare(($context["default_action_data"] ?? null), false)))) {
                // line 50
                echo "               ";
                if ((1 === twig_compare(twig_length_filter($this->env, ($context["timeline_itemtypes"] ?? null)), 1))) {
                    // line 51
                    echo "                  ";
                    $context["btn_class"] = (((0 === twig_compare(($context["timeline_btn_layout"] ?? null), twig_constant("Config::TIMELINE_ACTION_BTN_SPLITTED")))) ? ("") : ("btn-group"));
                    // line 52
                    echo "                  <div class=\"";
                    echo twig_escape_filter($this->env, ($context["btn_class"] ?? null), "html", null, true);
                    echo " me-2 main-actions\" style=\"";
                    echo (((1 === twig_compare(($context["load_kb_sol"] ?? null), 0))) ? ("display:none;") : (""));
                    echo "\">
               ";
                } else {
                    // line 54
                    echo "                  ";
                    // line 55
                    echo "                  <div class=\"main-actions\" style=\"display:inline-flex\">
               ";
                }
                // line 57
                echo "                  <button class=\"btn btn-primary answer-action mb-2\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 57), "html", null, true);
                echo "-block\">
                     <i class=\"";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 58), "html", null, true);
                echo "\"></i>
                     <span>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 59), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 62
                $context["main_actions_itemtypes"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ( !twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", true, true, false, 62) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", false, false, false, 62), true))); });
                // line 63
                echo "                  ";
                if ((1 === twig_compare(twig_length_filter($this->env, ($context["main_actions_itemtypes"] ?? null)), 1))) {
                    // line 64
                    echo "                     ";
                    if ((0 === twig_compare(($context["timeline_btn_layout"] ?? null), twig_constant("Config::TIMELINE_ACTION_BTN_SPLITTED")))) {
                        // line 65
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["main_actions_itemtypes"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 66
                            echo "                        ";
                            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 66), 0))) {
                                // line 67
                                echo "                              <button class=\"ms-2 mb-2 btn btn-primary answer-action action-";
                                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                                echo "\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 67), "html", null, true);
                                echo "-block\">
                                 <i class=\"";
                                // line 68
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 68), "html", null, true);
                                echo "\"></i>
                                 <span>";
                                // line 69
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "short_label", [], "any", false, false, false, 69), "html", null, true);
                                echo "</span>
                              </button>
                              ";
                            }
                            // line 72
                            echo "                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        echo "                     ";
                    } else {
                        // line 74
                        echo "                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split mb-2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                           <span class=\"visually-hidden\">";
                        // line 75
                        echo twig_escape_filter($this->env, __("View other actions"), "html", null, true);
                        echo "</span>
                        </button>
                        <ul class=\"dropdown-menu\">
                              ";
                        // line 78
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["main_actions_itemtypes"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 79
                            echo "                                 ";
                            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79), 0))) {
                                // line 80
                                echo "                                 <li><a class=\"dropdown-item action-";
                                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                                echo " answer-action\" href=\"#\"
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                // line 81
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 81), "html", null, true);
                                echo "-block\">
                                    <i class=\"";
                                // line 82
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 82), "html", null, true);
                                echo "\"></i>
                                    <span>";
                                // line 83
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 83), "html", null, true);
                                echo "</span>
                                 </a></li>
                                 ";
                            }
                            // line 86
                            echo "                              ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 87
                        echo "                        </ul>
                     ";
                    }
                    // line 89
                    echo "                  ";
                }
                // line 90
                echo "               </div>
            ";
            }
            // line 92
            echo "
            <ul class=\"legacy-timeline-actions\">
               ";
            // line 94
            echo ((array_key_exists("legacy_timeline_actions", $context)) ? (_twig_default_filter(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            echo "
            </ul>
            ";
            // line 96
            echo twig_include($this->env, $context, "components/itilobject/timeline/filter_timeline.html.twig");
            echo "
         ";
        }
        // line 98
        echo "     </div>

      <div class=\"form-buttons ";
        // line 100
        echo twig_escape_filter($this->env, ($context["form_btns_cls"] ?? null), "html", null, true);
        echo " d-flex justify-content-between ms-auto ms-lg-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
         <span class=\"d-none d-lg-block ms-n3\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 102
        echo twig_escape_filter($this->env, __("Toggle panels width"), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary px-0\">
               <i class=\"fas ";
        // line 104
        echo twig_escape_filter($this->env, ($context["switch_btn_cls"] ?? null), "html", null, true);
        echo "\"></i>
            </button>
            <button type=\"button\" class=\"collapse-panel btn btn-icon btn-ghost-secondary px-0 mr-1\">
               <i class=\"fas fa-caret-right\"></i>
            </button>
         </span>

         <span>
         ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 112)) {
            // line 113
            echo "            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\" form=\"itil-form\"
                  title=\"";
            // line 114
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "\">
               <i class=\"fas fa-plus\"></i>
               <span class=\"d-none d-lg-block\">";
            // line 116
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
            </button>
         ";
        } else {
            // line 119
            echo "
            <div class=\"btn-group\" role=\"group\">
               ";
            // line 121
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 121)) {
                // line 122
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 122)) {
                    // line 123
                    echo "                     <button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                           title=\"";
                    // line 124
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "\">
                        <i class=\"fas fa-trash-restore-alt\"></i>
                        <span class=\"d-none d-lg-block\">";
                    // line 126
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "</span>
                     </button>

                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                           title=\"";
                    // line 130
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "\"
                           onclick=\"return confirm('";
                    // line 131
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"ti ti-trash\"></i>
                        <span class=\"d-none d-lg-block\">";
                    // line 133
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                } else {
                    // line 136
                    echo "                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                           title=\"";
                    // line 137
                    echo twig_escape_filter($this->env, _x("button", "Put in trashbin"), "html", null, true);
                    echo "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-trash\"></i>
                     </button>
                  ";
                }
                // line 142
                echo "               ";
            }
            // line 143
            echo "
               ";
            // line 144
            if (($context["canupdate"] ?? null)) {
                // line 145
                echo "                  ";
                echo twig_include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                // line 147
                echo "
               ";
            }
            // line 149
            echo "
               ";
            // line 150
            $context["is_locked"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 150) && (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["locked"] ?? null) : null));
            // line 151
            echo "               ";
            $context["display_save_btn"] = ( !($context["is_locked"] ?? null) && ((((($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)) || ($context["canpriority"] ?? null)) || ($context["canassign"] ?? null)) || ($context["canassigntome"] ?? null)));
            // line 152
            echo "               ";
            if (($context["display_save_btn"] ?? null)) {
                // line 153
                echo "                  <button class=\"btn btn-primary\" type=\"submit\" name=\"update\" form=\"itil-form\"
                        title=\"";
                // line 154
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "\">
                     <i class=\"far fa-save\"></i>
                     <span class=\"d-none d-xl-block\">";
                // line 156
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>
               ";
            }
            // line 159
            echo "            </div>

         ";
        }
        // line 162
        echo "         </span>
      </div>
   </div>
</div>

";
        // line 167
        $context["openfollowup"] = (((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 167) &&  !(null === (($__internal_compile_1 = ($context["_get"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["_get"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_openfollowup"] ?? null) : null)) : (false));
        // line 168
        $context["is_timeline_reversed"] = (0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order"), twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE")));
        // line 169
        echo "
<script type=\"text/javascript\">

(function(){
    ";
        // line 178
        echo "   var scrollToTimelineStart = function() {
        // scroll body to ensure we are at bottom (useful for responsive display)
        \$('html, body').animate({
        scrollTop: ";
        // line 181
        echo ((($context["is_timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "\$(document).height()
        }, 0, function(){
            // scroll timeline with animation
            var timeline = \$(\"#itil-object-container .itil-left-side\");
            timeline.animate({
                scrollTop: ";
        // line 186
        echo ((($context["is_timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "timeline.prop('scrollHeight')
            }, 'slow');
        });
   };

   \$(document).on(\"click\", \"#itil-footer .answer-action\", function() {
      scrollToTimelineStart();
      ";
        // line 193
        if ((0 === twig_compare(($context["timeline_btn_layout"] ?? null), twig_constant("Config::TIMELINE_ACTION_BTN_MERGED")))) {
            // line 194
            echo "         // hide answer button after clicking on it only for merge btn
         \$(this).closest(\".main-actions\").hide();
      ";
        }
        // line 197
        echo "   });

   \$(function() {
      // when close button of new answer block is clicked, show again the new answer button
      ";
        // line 201
        if ((0 === twig_compare(($context["timeline_btn_layout"] ?? null), twig_constant("Config::TIMELINE_ACTION_BTN_MERGED")))) {
            // line 202
            echo "         \$(document).on(\"click\", \"#new-itilobject-form .close-itil-answer\", function() {
            \$(\"#itil-footer .main-actions\").show();
         });
      ";
        }
        // line 206
        echo "
      ";
        // line 207
        if (($context["openfollowup"] ?? null)) {
            // line 208
            echo "         // trigger for reopen, show followup form in timeline
         var myCollapse = document.getElementById('new-ITILFollowup-block')
         var bsCollapse = new bootstrap.Collapse(myCollapse);
         bsCollapse.show();

         scrollToTimelineStart();
      ";
        }
        // line 215
        echo "   });
})();

</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 215,  464 => 208,  462 => 207,  459 => 206,  453 => 202,  451 => 201,  445 => 197,  440 => 194,  438 => 193,  428 => 186,  420 => 181,  415 => 178,  409 => 169,  407 => 168,  405 => 167,  398 => 162,  393 => 159,  387 => 156,  382 => 154,  379 => 153,  376 => 152,  373 => 151,  371 => 150,  368 => 149,  364 => 147,  361 => 145,  359 => 144,  356 => 143,  353 => 142,  345 => 137,  342 => 136,  336 => 133,  331 => 131,  327 => 130,  320 => 126,  315 => 124,  312 => 123,  309 => 122,  307 => 121,  303 => 119,  297 => 116,  292 => 114,  289 => 113,  287 => 112,  276 => 104,  271 => 102,  266 => 100,  262 => 98,  257 => 96,  252 => 94,  248 => 92,  244 => 90,  241 => 89,  237 => 87,  223 => 86,  217 => 83,  213 => 82,  209 => 81,  204 => 80,  201 => 79,  184 => 78,  178 => 75,  175 => 74,  172 => 73,  158 => 72,  152 => 69,  148 => 68,  141 => 67,  138 => 66,  120 => 65,  117 => 64,  114 => 63,  112 => 62,  106 => 59,  102 => 58,  97 => 57,  93 => 55,  91 => 54,  83 => 52,  80 => 51,  77 => 50,  74 => 49,  71 => 48,  69 => 47,  65 => 46,  60 => 43,  56 => 41,  53 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/footer.html.twig", "D:\\wamp\\www\\glpi\\templates\\components\\itilobject\\footer.html.twig");
    }
}
