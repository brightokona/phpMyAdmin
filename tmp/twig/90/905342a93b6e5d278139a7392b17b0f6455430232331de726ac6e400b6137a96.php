<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* database/structure/show_create.twig */
class __TwigTemplate_3fc5128ddddbb1dfd2b19eb07bd940aebbf6207dc70f7f6e8d8dbe21eeb9203e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"show_create_results\">
    <h2>";
        // line 2
        echo _gettext("Showing create queries");
        echo "</h2>
    ";
        // line 3
        $context["views"] = [];
        // line 4
        echo "    ";
        $context["tables"] = [];
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_objects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 6
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["dbi"] ?? null), "getTable", [0 => ($context["db"] ?? null), 1 => $context["object"]], "method"), "isView", [], "method")) {
                // line 7
                echo "            ";
                $context["views"] = twig_array_merge(($context["views"] ?? null), [0 => $context["object"]]);
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            ";
                $context["tables"] = twig_array_merge(($context["tables"] ?? null), [0 => $context["object"]]);
                // line 10
                echo "        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
        if ( !twig_test_empty(($context["tables"] ?? null))) {
            // line 13
            echo "        ";
            $this->loadTemplate("database/structure/show_create_row.twig", "database/structure/show_create.twig", 13)->display(twig_to_array(["db" =>             // line 14
($context["db"] ?? null), "title" => _gettext("Tables"), "raw_title" => "Table", "db_objects" =>             // line 17
($context["tables"] ?? null), "dbi" =>             // line 18
($context["dbi"] ?? null)]));
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ( !twig_test_empty(($context["views"] ?? null))) {
            // line 23
            echo "        ";
            $this->loadTemplate("database/structure/show_create_row.twig", "database/structure/show_create.twig", 23)->display(twig_to_array(["db" =>             // line 24
($context["db"] ?? null), "title" => _gettext("Views"), "raw_title" => "View", "db_objects" =>             // line 27
($context["views"] ?? null), "dbi" =>             // line 28
($context["dbi"] ?? null)]));
            // line 30
            echo "    ";
        }
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "database/structure/show_create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  91 => 30,  89 => 28,  88 => 27,  87 => 24,  85 => 23,  83 => 22,  80 => 21,  77 => 20,  75 => 18,  74 => 17,  73 => 14,  71 => 13,  68 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/show_create.twig", "C:\\FILES\\Websites\\phpMyAdmin\\templates\\database\\structure\\show_create.twig");
    }
}
