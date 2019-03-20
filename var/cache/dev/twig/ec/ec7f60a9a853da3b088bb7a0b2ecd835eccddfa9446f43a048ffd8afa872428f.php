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

/* specialty/report.html.twig */
class __TwigTemplate_05de88b730650a5060f86bec0d4e2a8f83402fe300d5c1c56b7ca6d782100483 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specialty/report.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specialty/report.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Report</title>
    </head>
    <body>
        <h2>Professionals</h2>
        ";
        // line 10
        if (twig_test_empty((isset($context["professionals"]) || array_key_exists("professionals", $context) ? $context["professionals"] : (function () { throw new RuntimeError('Variable "professionals" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "\t\t    <h4>Empty</h4>
\t\t";
        } else {
            // line 13
            echo "\t\t\t<table class='table'>
\t\t        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["professionals"]) || array_key_exists("professionals", $context) ? $context["professionals"] : (function () { throw new RuntimeError('Variable "professionals" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["professional"]) {
                // line 15
                echo "\t\t\t        <tr>
\t\t\t\t        <td>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professional"], "id", []), "html", null, true);
                echo "</td>
\t\t\t\t        <td>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professional"], "name", []), "html", null, true);
                echo "</td>
\t\t\t        </tr>
\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['professional'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t    </table>
\t    ";
        }
        // line 22
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "specialty/report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  80 => 20,  71 => 17,  67 => 16,  64 => 15,  60 => 14,  57 => 13,  53 => 11,  51 => 10,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ./templates/default/mypdf.html.twig #}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Report</title>
    </head>
    <body>
        <h2>Professionals</h2>
        {% if professionals is empty %}
\t\t    <h4>Empty</h4>
\t\t{% else %}
\t\t\t<table class='table'>
\t\t        {% for professional in professionals %}
\t\t\t        <tr>
\t\t\t\t        <td>{{ professional.id }}</td>
\t\t\t\t        <td>{{ professional.name }}</td>
\t\t\t        </tr>
\t\t\t    {% endfor %}
\t\t    </table>
\t    {% endif %}
    </body>
</html>", "specialty/report.html.twig", "C:\\Users\\usuario\\Documents\\Proyectos\\sample\\templates\\specialty\\report.html.twig");
    }
}
