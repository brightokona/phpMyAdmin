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

/* database/structure/show_create_row.twig */
class __TwigTemplate_d82f02ba7d84a660ab56c62f40f6cacf3429e6567901763ef1ae14d7a869f8bf extends \Twig\Template
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
        echo "<fieldset>
    <legend>";
        // line 2
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</legend>
    <table class=\"show_create\">
        <thead>
        <tr>
            <th>";
        // line 6
        echo twig_escape_filter($this->env, ($context["raw_title"] ?? null), "html", null, true);
        echo "</th>
            <th>";
        // line 7
        echo twig_escape_filter($this->env, sprintf(_gettext("Create %s"), ($context["raw_title"] ?? null)), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_objects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 12
            echo "            <tr>
                <td><strong>";
            // line 13
            echo PhpMyAdmin\Core::mimeDefaultFunction($context["object"]);
            echo "</strong></td>
                <td>";
            // line 14
            echo PhpMyAdmin\Core::mimeDefaultFunction($this->getAttribute($this->getAttribute(($context["dbi"] ?? null), "getTable", [0 => ($context["db"] ?? null), 1 => $context["object"]], "method"), "showCreate", [], "method"));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </tbody>
    </table>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "database/structure/show_create_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  62 => 14,  58 => 13,  55 => 12,  51 => 11,  44 => 7,  40 => 6,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/show_create_row.twig", "C:\\FILES\\Websites\\phpMyAdmin\\templates\\database\\structure\\show_create_row.twig");
    }
}
