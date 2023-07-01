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

/* impact/edit_compound_modal.html.twig */
class __TwigTemplate_50b07a9be937cfab300aea7164a59352282b9cf5c6500765f8a4c9418bc441b5 extends Template
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
<div id=\"edit_compound_dialog\"  class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            ";
        // line 39
        echo "            <div class=\"modal-header\">
                <h5 class=\"modal-title\"> ";
        // line 40
        echo twig_escape_filter($this->env, __("Edit group"), "html", null, true);
        echo " </h5>
                <button type=\"button\" class=\"btn btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            ";
        // line 45
        echo "            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group mb-3\">
                        <label class=\"form-label\" for=\"compound_name\">
                            ";
        // line 49
        echo twig_escape_filter($this->env, __("Name"), "html", null, true);
        echo "
                        </label>
                        <input type=\"text\" class=\"form-control\" name=\"compound_name\" />
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"compound_color\">
                            ";
        // line 55
        echo twig_escape_filter($this->env, __("Color"), "html", null, true);
        echo "
                        </label>
                        <input type=\"color\" class=\"form-control\" name=\"compound_color\" />
                    </div>
                </form>
            </div>

            ";
        // line 63
        echo "            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" id=\"edit_compound_save\"> ";
        // line 64
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo " </button>
            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "impact/edit_compound_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 64,  79 => 63,  69 => 55,  60 => 49,  54 => 45,  47 => 40,  44 => 39,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "impact/edit_compound_modal.html.twig", "D:\\wamp\\www\\glpi\\templates\\impact\\edit_compound_modal.html.twig");
    }
}
