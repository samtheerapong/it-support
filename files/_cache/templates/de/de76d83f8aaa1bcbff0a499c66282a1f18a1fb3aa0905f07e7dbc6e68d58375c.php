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

/* components/itilobject/timeline/form_timeline_item.html.twig */
class __TwigTemplate_7f71bb3fc7932e305423908e433ebd1f8588392cce760a17792164d0afd56bc4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["rand"] = twig_random($this->env);
        // line 35
        $context["form_mode"] = (($context["form_mode"]) ?? ("edit"));
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('timeline_card', $context, $blocks);
    }

    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_timeline_item.html.twig", "D:\\wamp\\www\\glpi\\templates\\components\\itilobject\\timeline\\form_timeline_item.html.twig");
    }
}
