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

/* booking/show.html.twig */
class __TwigTemplate_a005d3015cbb1b1639880ea80350eb2724b72a7eddd7627c2124d8d2f8c9a368 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Réservation
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<h3 class=\"mt-5\">Liste des réservations :</h3>
\t<table class=\"table table-hover mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Créé le</th>
\t\t\t\t<th scope=\"col\">Date début</th>
\t\t\t\t<th scope=\"col\">Date fin</th>
\t\t\t\t<th scope=\"col\">Pseudo</th>
\t\t\t\t<th scope=\"col\">Commentaire</th>
\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 23
            echo "                <tr class=\"table-success\">
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "createdAt", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "startDate", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "endDate", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>Pseudo</td>
                    <td>";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["booking"], "comment", [], "any", false, false, false, 28);
            echo "</td>
                    <td class=\"text-center\">
                        <a href=\"\">
                            <img src=\"img/edit_32.png\" alt=\"Modifier\">
                        </a>
                    </td>
                    <td class=\"text-center\">
                        <a href=\"\">
                            <img src=\"img/delete_32.png\" alt=\"Supprimer\">
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t</tbody>
\t</table>

    <hr class=\"mt-5\">

\t<div class=\"jumbotron mt-5\">
        <h3 class=\"mt-5\">Formulaire de réservation :</h3>
\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBooking"]) || array_key_exists("formBooking", $context) ? $context["formBooking"] : (function () { throw new RuntimeError('Variable "formBooking" does not exist.', 48, $this->source); })()), 'form_start');
        echo "
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBooking"]) || array_key_exists("formBooking", $context) ? $context["formBooking"] : (function () { throw new RuntimeError('Variable "formBooking" does not exist.', 49, $this->source); })()), "startDate", [], "any", false, false, false, 49), 'row', ["label" => "Date d'arrivée"]);
        // line 51
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBooking"]) || array_key_exists("formBooking", $context) ? $context["formBooking"] : (function () { throw new RuntimeError('Variable "formBooking" does not exist.', 52, $this->source); })()), "endDate", [], "any", false, false, false, 52), 'row', ["label" => "Date de départ"]);
        // line 54
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBooking"]) || array_key_exists("formBooking", $context) ? $context["formBooking"] : (function () { throw new RuntimeError('Variable "formBooking" does not exist.', 55, $this->source); })()), "comment", [], "any", false, false, false, 55), 'row', ["label" => ""]);
        // line 57
        echo "
        <button type=\"submit\" class=\"btn btn-success disabled\">Enregistrer le document</button>
\t\t";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBooking"]) || array_key_exists("formBooking", $context) ? $context["formBooking"] : (function () { throw new RuntimeError('Variable "formBooking" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  170 => 57,  168 => 55,  165 => 54,  163 => 52,  160 => 51,  158 => 49,  154 => 48,  145 => 41,  126 => 28,  121 => 26,  117 => 25,  113 => 24,  110 => 23,  106 => 22,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Réservation
{% endblock %}

{% block body %}
\t<h3 class=\"mt-5\">Liste des réservations :</h3>
\t<table class=\"table table-hover mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Créé le</th>
\t\t\t\t<th scope=\"col\">Date début</th>
\t\t\t\t<th scope=\"col\">Date fin</th>
\t\t\t\t<th scope=\"col\">Pseudo</th>
\t\t\t\t<th scope=\"col\">Commentaire</th>
\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
            {% for booking in bookings %}
                <tr class=\"table-success\">
                    <td>{{booking.createdAt | date(\"d/m/Y\")}}</td>
                    <td>{{booking.startDate | date(\"d/m/Y\")}}</td>
                    <td>{{booking.endDate | date(\"d/m/Y\")}}</td>
                    <td>Pseudo</td>
                    <td>{{booking.comment | raw}}</td>
                    <td class=\"text-center\">
                        <a href=\"\">
                            <img src=\"img/edit_32.png\" alt=\"Modifier\">
                        </a>
                    </td>
                    <td class=\"text-center\">
                        <a href=\"\">
                            <img src=\"img/delete_32.png\" alt=\"Supprimer\">
                        </a>
                    </td>
                </tr>
            {% endfor %}
\t\t</tbody>
\t</table>

    <hr class=\"mt-5\">

\t<div class=\"jumbotron mt-5\">
        <h3 class=\"mt-5\">Formulaire de réservation :</h3>
\t\t{{form_start(formBooking)}}
        {{form_row(formBooking.startDate, {
            'label': \"Date d'arrivée\"
        })}}
        {{form_row(formBooking.endDate, {
            'label': \"Date de départ\"
        })}}
        {{form_row(formBooking.comment, {
            'label': \"\"
        })}}
        <button type=\"submit\" class=\"btn btn-success disabled\">Enregistrer le document</button>
\t\t{{form_end(formBooking)}}
\t</div>


{% endblock %}
", "booking/show.html.twig", "C:\\Symfony\\CSB2G-Gestion-V1\\templates\\booking\\show.html.twig");
    }
}
