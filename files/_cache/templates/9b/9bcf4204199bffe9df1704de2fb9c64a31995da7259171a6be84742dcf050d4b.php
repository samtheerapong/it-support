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

/* components/itilobject/timeline/timeline_item_header.html.twig */
class __TwigTemplate_3f35d15d582c69e6c11f44535564a7a39e581f0ce2a2d47969a3bab22e2e6d14 extends Template
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
        $context["anchor"] = (((($__internal_compile_0 = ($context["entry"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) . "_") . (($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null));
        // line 35
        echo "
<div class=\"d-flex timeline-header\" id=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["anchor"] ?? null), "html", null, true);
        echo "\">
   <div class=\"d-flex creator\">
      ";
        // line 38
        echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 39
($context["users_id"] ?? null), "date_creation" =>         // line 40
($context["date_creation"] ?? null), "date_mod" =>         // line 41
($context["date_mod"] ?? null), "users_id_editor" => (($__internal_compile_2 =         // line 42
($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["users_id_editor"] ?? null) : null), "anchor" =>         // line 43
($context["anchor"] ?? null), "anonym_user" =>         // line 44
($context["anonym_user"] ?? null)], false);
        // line 45
        echo "
   </div>

   <div class=\"d-flex ms-auto timeline-item-buttons\">
      ";
        // line 49
        $context["actions"] = [];
        // line 50
        echo "      ";
        if ((((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["can_edit"] ?? null) : null) &&  !($context["status_closed"] ?? null)) &&  !twig_in_filter((($__internal_compile_4 = ($context["entry"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null), [0 => "Document_Item", 1 => "Assign"]))) {
            // line 51
            echo "         ";
            ob_start(function () { return ''; });
            // line 52
            echo "            <li>
               <a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                  <i class=\"fa-fw ti ti-edit\"></i>
                  <span>";
            // line 55
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["edit_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit_btn" => ($context["edit_btn"] ?? null)]);
            // line 60
            echo "      ";
        }
        // line 61
        echo "
      ";
        // line 62
        if (($context["is_private"] ?? null)) {
            // line 63
            echo "         <span class=\"is-private ms-2\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"ti ti-lock\" aria-label=\"";
            // line 65
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
         </span>
      ";
        }
        // line 68
        echo "
      ";
        // line 69
        if (($context["is_promoted"] ?? null)) {
            // line 70
            echo "         ";
            ob_start(function () { return ''; });
            // line 71
            echo "            <li>
               <a class=\"dropdown-item text-warning\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sourceof_items_id"] ?? null) : null)), "html", null, true);
            echo "\">
                  <i class=\"fa-fw ti ti-git-branch\"></i>
                  <span>";
            // line 74
            echo twig_escape_filter($this->env, twig_sprintf(__("%s was already promoted"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_6 = ($context["entry"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["type"] ?? null) : null))), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["promoted_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promoted_btn" => ($context["promoted_btn"] ?? null)]);
            // line 79
            echo "      ";
        } elseif (((((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "central")) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 79) === "Ticket")) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canCreate", [], "method", false, false, false, 79)) && (((($__internal_compile_7 = ($context["entry"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["type"] ?? null) : null) === "ITILFollowup") || ((($__internal_compile_8 = ($context["entry"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["type"] ?? null) : null) === "TicketTask")))) {
            // line 80
            echo "         ";
            $context["promote_url"] = ("?_promoted_fup_id=" . (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null));
            // line 81
            echo "         ";
            if (((($__internal_compile_10 = ($context["entry"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null) === "TicketTask")) {
                // line 82
                echo "            ";
                $context["promote_url"] = ("?_promoted_task_id=" . (($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null));
                // line 83
                echo "         ";
            }
            // line 84
            echo "
         ";
            // line 85
            ob_start(function () { return ''; });
            // line 86
            echo "            <li>
               <a class=\"dropdown-item\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket") . ($context["promote_url"] ?? null)), "html", null, true);
            echo "\">
                  <i class=\"fa-fw ti ti-git-branch\"></i>
                  <span>";
            // line 89
            echo twig_escape_filter($this->env, __("Promote to Ticket"), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["promote_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 93
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promote_btn" => ($context["promote_btn"] ?? null)]);
            // line 94
            echo "      ";
        }
        // line 95
        echo "
      ";
        // line 96
        if (twig_length_filter($this->env, ($context["actions"] ?? null))) {
            // line 97
            echo "         <div class=\"dropdown ms-2\">
            <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 98
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
               <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 101
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\">
               ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 103
                echo "                  ";
                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                echo "
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            </ul>
         </div>
      ";
        }
        // line 108
        echo "   </div>

   <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
      <i class=\"ti ti-x\"></i>
   </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 108,  205 => 105,  196 => 103,  192 => 102,  188 => 101,  182 => 98,  179 => 97,  177 => 96,  174 => 95,  171 => 94,  168 => 93,  161 => 89,  156 => 87,  153 => 86,  151 => 85,  148 => 84,  145 => 83,  142 => 82,  139 => 81,  136 => 80,  133 => 79,  130 => 78,  123 => 74,  118 => 72,  115 => 71,  112 => 70,  110 => 69,  107 => 68,  101 => 65,  95 => 63,  93 => 62,  90 => 61,  87 => 60,  84 => 59,  77 => 55,  72 => 52,  69 => 51,  66 => 50,  64 => 49,  58 => 45,  56 => 44,  55 => 43,  54 => 42,  53 => 41,  52 => 40,  51 => 39,  50 => 38,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header.html.twig", "D:\\wamp\\www\\glpi\\templates\\components\\itilobject\\timeline\\timeline_item_header.html.twig");
    }
}
