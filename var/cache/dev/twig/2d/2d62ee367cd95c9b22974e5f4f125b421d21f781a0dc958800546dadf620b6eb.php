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

/* transfer/show.html.twig */
class __TwigTemplate_b2e6623f18173e586eef826df33acab89744fa355ccd7154a0767b6d8bff3a02 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transfer/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transfer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "transfer/show.html.twig", 1);
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

        echo "Etat de compte
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h3 class=\"mt-5\">Relevé de compte :</h3>
\t<table class=\"table table-hover mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Créé le</th>
\t\t\t\t<th scope=\"col\">Date virement</th>
\t\t\t\t<th scope=\"col\">Désignation (libellé)</th>
\t\t\t\t<th scope=\"col\">Solde avant</th>
\t\t\t\t<th scope=\"col\">Débit</th>
\t\t\t\t<th scope=\"col\">Crédit</th>
\t\t\t\t<th scope=\"col\">Solde après</th>
\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transfers"]) || array_key_exists("transfers", $context) ? $context["transfers"] : (function () { throw new RuntimeError('Variable "transfers" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transfer"]) {
            // line 24
            echo "                <tr class=\"table-info\">
                    <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transfer"], "createdAt", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            echo "</th>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transfer"], "dateTransfer", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transfer"], "designation", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transfer"], "balanceBefore", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transfer"], "debit", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transfer"], "credit", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transfer"], "balanceAfter", [], "any", false, false, false, 31), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transfer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</tbody>
\t</table>

    
    <hr class=\"mt-5\">

\t<div class=\"jumbotron mt-5\">
\t\t<h3>Formulaire de dépôt d'un virement :</h3>
\t\t";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTransfer"]) || array_key_exists("formTransfer", $context) ? $context["formTransfer"] : (function () { throw new RuntimeError('Variable "formTransfer" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTransfer"]) || array_key_exists("formTransfer", $context) ? $context["formTransfer"] : (function () { throw new RuntimeError('Variable "formTransfer" does not exist.', 53, $this->source); })()), "dateTransfer", [], "any", false, false, false, 53), 'row', ["label" => "Date du virement"]);
        // line 55
        echo "
        <p>Pseudo automatique avec l'enregistrement de la session.</p>
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTransfer"]) || array_key_exists("formTransfer", $context) ? $context["formTransfer"] : (function () { throw new RuntimeError('Variable "formTransfer" does not exist.', 57, $this->source); })()), "credit", [], "any", false, false, false, 57), 'row', ["label" => "Montant du virement", "attr" => ["placeholder" => "0.00"]]);
        // line 62
        echo "
        <button type=\"submit\" class=\"btn btn-success disabled\">Enregistrer le virement</button>
\t\t";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTransfer"]) || array_key_exists("formTransfer", $context) ? $context["formTransfer"] : (function () { throw new RuntimeError('Variable "formTransfer" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "transfer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 64,  179 => 62,  177 => 57,  173 => 55,  171 => 53,  167 => 52,  157 => 44,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  111 => 24,  107 => 23,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Etat de compte
{% endblock %}

{% block body %}
\t<h3 class=\"mt-5\">Relevé de compte :</h3>
\t<table class=\"table table-hover mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Créé le</th>
\t\t\t\t<th scope=\"col\">Date virement</th>
\t\t\t\t<th scope=\"col\">Désignation (libellé)</th>
\t\t\t\t<th scope=\"col\">Solde avant</th>
\t\t\t\t<th scope=\"col\">Débit</th>
\t\t\t\t<th scope=\"col\">Crédit</th>
\t\t\t\t<th scope=\"col\">Solde après</th>
\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
            {% for transfer in transfers %}
                <tr class=\"table-info\">
                    <th>{{transfer.createdAt | date('d/m/Y')}}</th>
                    <td>{{transfer.dateTransfer | date('d/m/Y')}}</td>
                    <td>{{transfer.designation}}</td>
                    <td>{{transfer.balanceBefore}}</td>
                    <td>{{transfer.debit}}</td>
                    <td>{{transfer.credit}}</td>
                    <td>{{transfer.balanceAfter}}</td>
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
\t\t<h3>Formulaire de dépôt d'un virement :</h3>
\t\t{{form_start(formTransfer)}}
        {{form_row(formTransfer.dateTransfer, {
            'label': \"Date du virement\"
        })}}
        <p>Pseudo automatique avec l'enregistrement de la session.</p>
        {{form_row(formTransfer.credit, {
            'label': \"Montant du virement\",
            'attr': {
                'placeholder': \"0.00\"
            }
        })}}
        <button type=\"submit\" class=\"btn btn-success disabled\">Enregistrer le virement</button>
\t\t{{form_end(formTransfer)}}
\t</div>

{% endblock %}
", "transfer/show.html.twig", "C:\\Symfony\\CSB2G-Gestion-V1\\templates\\transfer\\show.html.twig");
    }
}
