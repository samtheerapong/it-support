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

/* @glpiinventory/submenu.html.twig */
class __TwigTemplate_5b9e5fce2167837fe9c03dee492f97d8c7a1093c77b8573d22066abd1f35249a extends Template
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
        // line 31
        echo "   <div class=\"container\">
      <nav class=\"rounded navbar navbar-dark justify-content-center navbar-expand-lg mt-n8 mb-3 rounded\" style=\"background-color: #2f3f64;\">
      <ul class=\"navbar-nav\">
         ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["first_lvl_key"] => $context["first_lvl"]) {
            // line 35
            echo "            <li class=\"nav-item dropdown mx-3\">
               <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"";
            // line 36
            echo twig_escape_filter($this->env, $context["first_lvl_key"], "html", null, true);
            echo "_menu\"
                  role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  ";
            // line 38
            if (twig_length_filter($this->env, (($__internal_compile_0 = $context["first_lvl"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pic"] ?? null) : null))) {
                // line 39
                echo "                     <i class=\"p-1 ";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["first_lvl"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["pic"] ?? null) : null), "html", null, true);
                echo "\"></i>
                  ";
            }
            // line 41
            echo "                  <span class=\"menu-label\">";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["first_lvl"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null), "html", null, true);
            echo "</span>
               </a>
               <ul class=\"dropdown-menu\" aria-labelledby=\"";
            // line 43
            echo twig_escape_filter($this->env, $context["first_lvl_key"], "html", null, true);
            echo "_menu\">
                  ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_3 = $context["first_lvl"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["children"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["second_lvl"]) {
                // line 45
                echo "                     <li>
                        <a class=\"dropdown-item text-wrap\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["second_lvl"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["link"] ?? null) : null), "html", null, true);
                echo "\">
                           ";
                // line 47
                if (twig_length_filter($this->env, (($__internal_compile_5 = $context["second_lvl"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["pic"] ?? null) : null))) {
                    // line 48
                    echo "                              <i class=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["second_lvl"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["pic"] ?? null) : null), "html", null, true);
                    echo "\"></i>
                           ";
                }
                // line 50
                echo "                           <span>";
                echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["second_lvl"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null), "html", null, true);
                echo "</span>
                        </a>
                     </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['second_lvl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "               </ul>
            </li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['first_lvl_key'], $context['first_lvl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      </ul>
      </nav>
   </div>
";
    }

    public function getTemplateName()
    {
        return "@glpiinventory/submenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 57,  102 => 54,  91 => 50,  85 => 48,  83 => 47,  79 => 46,  76 => 45,  72 => 44,  68 => 43,  62 => 41,  56 => 39,  54 => 38,  49 => 36,  46 => 35,  42 => 34,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@glpiinventory/submenu.html.twig", "D:\\wamp\\www\\glpi\\plugins\\glpiinventory\\templates\\submenu.html.twig");
    }
}
