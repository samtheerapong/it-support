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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_50668561a867f70f81aa814fac7c4a6b2d2932bed12bdf5e5ff1299f5c94417e extends Template
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
        $context["timeline_display_date"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_date_format");
        // line 35
        echo "<span class=\"badge user-select-auto text-wrap d-none d-md-block\">
   ";
        // line 36
        ob_start(function () { return ''; });
        // line 37
        echo "      <span
         ";
        // line 38
        if ((0 === twig_compare(($context["timeline_display_date"] ?? null), twig_constant("Config::TIMELINE_RELATIVE_DATE")))) {
            // line 39
            echo "            title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
            echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
         ";
        }
        // line 42
        echo "      >
         <i class=\"far fa-clock me-1\"></i>
         <a href=\"#";
        // line 44
        echo twig_escape_filter($this->env, ($context["anchor"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 45
        if ((0 === twig_compare(($context["timeline_display_date"] ?? null), twig_constant("Config::TIMELINE_RELATIVE_DATE")))) {
            // line 46
            echo "               ";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null)), "html", null, true);
            echo "
            ";
        } else {
            // line 48
            echo "               ";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
            echo "
            ";
        }
        // line 50
        echo "         </a>
      </span>
   ";
        $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
   ";
        // line 54
        if ((1 === twig_compare(($context["users_id"] ?? null), 0))) {
            // line 55
            echo "      ";
            ob_start(function () { return ''; });
            // line 56
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 57
($context["users_id"] ?? null), "enable_anonymization" =>             // line 58
($context["anonym_user"] ?? null)], false);
            // line 59
            echo "
      ";
            $context["creator_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            echo "
      ";
            // line 62
            echo twig_sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
            echo "
   ";
        } else {
            // line 64
            echo "      ";
            echo twig_sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
            echo "
   ";
        }
        // line 66
        echo "</span>

";
        // line 68
        if (((1 === twig_compare(($context["users_id_editor"] ?? null), 0)) && (0 !== twig_compare(($context["date_creation"] ?? null), ($context["date_mod"] ?? null))))) {
            // line 69
            echo "   <span class=\"badge user-select-auto text-wrap ms-1 d-none d-md-block\">
      ";
            // line 70
            ob_start(function () { return ''; });
            // line 71
            echo "         <span
            ";
            // line 72
            if ((0 === twig_compare(($context["timeline_display_date"] ?? null), twig_constant("Config::TIMELINE_RELATIVE_DATE")))) {
                // line 73
                echo "               title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
                echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            ";
            }
            // line 76
            echo "         >
            <i class=\"far fa-clock me-1\"></i>
            ";
            // line 78
            if ((0 === twig_compare(($context["timeline_display_date"] ?? null), twig_constant("Config::TIMELINE_RELATIVE_DATE")))) {
                // line 79
                echo "               ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null)), "html", null, true);
                echo "
            ";
            } else {
                // line 81
                echo "               ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
                echo "
            ";
            }
            // line 83
            echo "         </span>
      ";
            $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            echo "
      ";
            // line 86
            $context["is_current_editor"] = (0 === twig_compare(($context["users_id_editor"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")));
            // line 87
            echo "      ";
            $context["anonym_editor"] = (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "helpdesk")) &&  !($context["is_current_editor"] ?? null)) && (0 !== twig_compare($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")), twig_constant("Entity::ANONYMIZE_DISABLED"))));
            // line 88
            echo "      ";
            ob_start(function () { return ''; });
            // line 89
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 90
($context["users_id_editor"] ?? null), "enable_anonymization" =>             // line 91
($context["anonym_editor"] ?? null)], false);
            // line 92
            echo "
      ";
            $context["editor_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 94
            echo "
      ";
            // line 95
            echo twig_sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            echo "
   </span>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 95,  182 => 94,  178 => 92,  176 => 91,  175 => 90,  173 => 89,  170 => 88,  167 => 87,  165 => 86,  162 => 85,  158 => 83,  152 => 81,  146 => 79,  144 => 78,  140 => 76,  133 => 73,  131 => 72,  128 => 71,  126 => 70,  123 => 69,  121 => 68,  117 => 66,  111 => 64,  106 => 62,  103 => 61,  99 => 59,  97 => 58,  96 => 57,  94 => 56,  91 => 55,  89 => 54,  86 => 53,  81 => 50,  75 => 48,  69 => 46,  67 => 45,  63 => 44,  59 => 42,  52 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "D:\\wamp\\www\\glpi\\templates\\components\\itilobject\\timeline\\timeline_item_header_badges.html.twig");
    }
}
