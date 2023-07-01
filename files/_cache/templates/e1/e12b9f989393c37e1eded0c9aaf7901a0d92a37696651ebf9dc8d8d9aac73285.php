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

/* components/form/pictures.html.twig */
class __TwigTemplate_4395a367acf20960b1eed74729b0803900bca588133bbb9f2416ea1fb870ba8a extends Template
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
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 34);
        // line 35
        $context["gallery_type"] = ((array_key_exists("gallery_type", $context)) ? (_twig_default_filter(($context["gallery_type"] ?? null), "")) : (""));
        // line 36
        if (( !(null === ($context["model_itemtype"] ?? null)) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\AssetImage"))) {
            // line 37
            echo "
   ";
            // line 38
            $context["picture_single"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", [0 => "picture"], "method", false, false, false, 38);
            // line 39
            echo "   ";
            $context["picture_front"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", [0 => "picture_front"], "method", false, false, false, 39);
            // line 40
            echo "   ";
            $context["picture_rear"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", [0 => "picture_rear"], "method", false, false, false, 40);
            // line 41
            echo "   ";
            $context["pictures_misc"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", [0 => "pictures"], "method", false, false, false, 41);
            // line 42
            echo "
   ";
            // line 43
            if (((( !twig_test_empty(($context["picture_single"] ?? null)) ||  !twig_test_empty(($context["picture_front"] ?? null))) ||  !twig_test_empty(($context["picture_rear"] ?? null))) ||  !twig_test_empty(($context["pictures_misc"] ?? null)))) {
                // line 44
                echo "      <div class=\"";
                echo (((0 === twig_compare(($context["gallery_type"] ?? null), "horizontal"))) ? ("col-12 me-n2") : (""));
                echo " d-flex flex-column card\">
         <div class=\"card-body\">
            <h3 class=\"mb-3\">
               ";
                // line 47
                echo twig_escape_filter($this->env, _n("Picture", "Pictures", Session::getPluralNumber()), "html", null, true);
                echo "
            </h3>

            <div class=\"d-flex\">
               ";
                // line 51
                if ( !twig_test_empty(($context["picture_single"] ?? null))) {
                    // line 52
                    echo "                  ";
                    $context["picture_single"] = twig_first($this->env, ($context["picture_single"] ?? null));
                    // line 53
                    echo "                  ";
                    $context["imgs"] = [0 => twig_array_merge(($context["picture_single"] ?? null), ["title" => _n("Picture", "Pictures", 1)])];
                    // line 54
                    echo "               ";
                } else {
                    // line 55
                    echo "                  ";
                    if ((( !twig_test_empty(($context["picture_front"] ?? null)) ||  !twig_test_empty(($context["picture_rear"] ?? null))) ||  !twig_test_empty(($context["pictures_misc"] ?? null)))) {
                        // line 56
                        echo "                     ";
                        $context["imgs"] = [];
                        // line 57
                        echo "                     ";
                        if ((0 <= twig_compare(twig_length_filter($this->env, ($context["picture_front"] ?? null)), 1))) {
                            // line 58
                            echo "                        ";
                            $context["picture_front"] = twig_first($this->env, ($context["picture_front"] ?? null));
                            // line 59
                            echo "                        ";
                            $context["imgs"] = twig_array_merge(($context["imgs"] ?? null), [0 => twig_array_merge(($context["picture_front"] ?? null), ["title" => __("Front picture")])]);
                            // line 60
                            echo "                     ";
                        }
                        // line 61
                        echo "                     ";
                        if ((0 <= twig_compare(twig_length_filter($this->env, ($context["picture_rear"] ?? null)), 1))) {
                            // line 62
                            echo "                        ";
                            $context["picture_rear"] = twig_first($this->env, ($context["picture_rear"] ?? null));
                            // line 63
                            echo "                        ";
                            $context["imgs"] = twig_array_merge(($context["imgs"] ?? null), [0 => twig_array_merge(($context["picture_rear"] ?? null), ["title" => __("Rear picture")])]);
                            // line 64
                            echo "                     ";
                        }
                        // line 65
                        echo "                     ";
                        if ( !twig_test_empty(($context["pictures_misc"] ?? null))) {
                            // line 66
                            echo "                        ";
                            $context["imgs"] = twig_array_merge(($context["imgs"] ?? null), ($context["pictures_misc"] ?? null));
                            // line 67
                            echo "                     ";
                        }
                        // line 68
                        echo "                  ";
                    }
                    // line 69
                    echo "               ";
                }
                // line 70
                echo "               ";
                echo twig_include($this->env, $context, "components/photoswipe.html.twig", ["imgs" => ($context["imgs"] ?? null), "gallery_type" => ($context["gallery_type"] ?? null)]);
                echo "
            </div>
         </div>
      </div>
   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/form/pictures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 70,  132 => 69,  129 => 68,  126 => 67,  123 => 66,  120 => 65,  117 => 64,  114 => 63,  111 => 62,  108 => 61,  105 => 60,  102 => 59,  99 => 58,  96 => 57,  93 => 56,  90 => 55,  87 => 54,  84 => 53,  81 => 52,  79 => 51,  72 => 47,  65 => 44,  63 => 43,  60 => 42,  57 => 41,  54 => 40,  51 => 39,  49 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/pictures.html.twig", "D:\\wamp\\www\\glpi\\templates\\components\\form\\pictures.html.twig");
    }
}
