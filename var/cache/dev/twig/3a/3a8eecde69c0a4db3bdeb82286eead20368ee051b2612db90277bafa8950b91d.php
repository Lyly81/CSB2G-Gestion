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

/* document/show.html.twig */
class __TwigTemplate_5fdd4e34b91e474a2991d8c820ff465431c1fb09debef30fda78fb6fefd04822 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "document/show.html.twig", 1);
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
        echo "\tDocuments
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
        echo "\t<h3 class=\"mt-5\">Liste des documents :</h3>
\t<table class=\"table table-hover mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Créé le</th>
\t\t\t\t<th scope=\"col\">Date de la facture</th>
\t\t\t\t<th scope=\"col\">Date de l'échéance</th>
\t\t\t\t<th scope=\"col\">Désignation (libellé)</th>
\t\t\t\t<th scope=\"col\">Montant</th>
\t\t\t\t<th scope=\"col\">1 Part</th>
\t\t\t\t<th scope=\"col\">1/3 de Part</th>
\t\t\t\t<th scope=\"col\">Document</th>
\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 25
            echo "\t\t\t\t<tr class=\"table-secondary\">
\t\t\t\t\t<th>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "createdAt", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</th>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "dateDocument", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "dateDeadline", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "designation", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "amount", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "onePart", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "thirdPart", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"img/edit_32.png\" alt=\"Modifier\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"img/download_32.png\" alt=\"Supprimer\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t</tbody>
\t</table>

    <hr class=\"mt-5\">

\t<div class=\"jumbotron mt-5\">
\t\t<h3>Formulaire de dépôt d'un document :</h3>
\t\t";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDocument"]) || array_key_exists("formDocument", $context) ? $context["formDocument"] : (function () { throw new RuntimeError('Variable "formDocument" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDocument"]) || array_key_exists("formDocument", $context) ? $context["formDocument"] : (function () { throw new RuntimeError('Variable "formDocument" does not exist.', 53, $this->source); })()), "dateDocument", [], "any", false, false, false, 53), 'row', ["label" => "Date du document"]);
        // line 55
        echo "
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDocument"]) || array_key_exists("formDocument", $context) ? $context["formDocument"] : (function () { throw new RuntimeError('Variable "formDocument" does not exist.', 56, $this->source); })()), "designation", [], "any", false, false, false, 56), 'row', ["label" => "Désignation (libellé)"]);
        // line 58
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDocument"]) || array_key_exists("formDocument", $context) ? $context["formDocument"] : (function () { throw new RuntimeError('Variable "formDocument" does not exist.', 59, $this->source); })()), "dateDeadline", [], "any", false, false, false, 59), 'row', ["label" => "Date de l'échéance, si c'est une facture"]);
        // line 61
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDocument"]) || array_key_exists("formDocument", $context) ? $context["formDocument"] : (function () { throw new RuntimeError('Variable "formDocument" does not exist.', 62, $this->source); })()), "amount", [], "any", false, false, false, 62), 'row', ["label" => "Montant de la facture", "attr" => ["placeholder" => "0.00"]]);
        // line 67
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDocument"]) || array_key_exists("formDocument", $context) ? $context["formDocument"] : (function () { throw new RuntimeError('Variable "formDocument" does not exist.', 68, $this->source); })()), "url", [], "any", false, false, false, 68), 'row', ["label" => "Document ou facture a uploadé", "attr" => ["placeholder" => "Déposer le document au format .pdf"]]);
        // line 73
        echo "
        <button type=\"submit\" class=\"btn btn-success disabled\">Enregistrer le document</button>
\t\t";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDocument"]) || array_key_exists("formDocument", $context) ? $context["formDocument"] : (function () { throw new RuntimeError('Variable "formDocument" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "document/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 75,  193 => 73,  191 => 68,  188 => 67,  186 => 62,  183 => 61,  181 => 59,  178 => 58,  176 => 56,  173 => 55,  171 => 53,  167 => 52,  158 => 45,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  112 => 25,  108 => 24,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tDocuments
{% endblock %}

{% block body %}
\t<h3 class=\"mt-5\">Liste des documents :</h3>
\t<table class=\"table table-hover mt-3\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Créé le</th>
\t\t\t\t<th scope=\"col\">Date de la facture</th>
\t\t\t\t<th scope=\"col\">Date de l'échéance</th>
\t\t\t\t<th scope=\"col\">Désignation (libellé)</th>
\t\t\t\t<th scope=\"col\">Montant</th>
\t\t\t\t<th scope=\"col\">1 Part</th>
\t\t\t\t<th scope=\"col\">1/3 de Part</th>
\t\t\t\t<th scope=\"col\">Document</th>
\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for document in documents %}
\t\t\t\t<tr class=\"table-secondary\">
\t\t\t\t\t<th>{{document.createdAt | date('d/m/Y')}}</th>
\t\t\t\t\t<td>{{document.dateDocument | date('d/m/Y')}}</td>
\t\t\t\t\t<td>{{document.dateDeadline | date('d/m/Y')}}</td>
\t\t\t\t\t<td>{{document.designation}}</td>
\t\t\t\t\t<td>{{document.amount}}</td>
\t\t\t\t\t<td>{{document.onePart}}</td>
\t\t\t\t\t<td>{{document.thirdPart}}</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"img/edit_32.png\" alt=\"Modifier\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"img/download_32.png\" alt=\"Supprimer\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

    <hr class=\"mt-5\">

\t<div class=\"jumbotron mt-5\">
\t\t<h3>Formulaire de dépôt d'un document :</h3>
\t\t{{form_start(formDocument)}}
        {{form_row(formDocument.dateDocument, {
            'label': \"Date du document\"
        })}}
        {{form_row(formDocument.designation, {
            'label': \"Désignation (libellé)\",
        })}}
        {{form_row(formDocument.dateDeadline, {
            'label': \"Date de l'échéance, si c'est une facture\"
        })}}
        {{form_row(formDocument.amount, {
            'label': \"Montant de la facture\",
            'attr': {
                'placeholder': \"0.00\"
            }
        })}}
        {{form_row(formDocument.url, {
            'label': \"Document ou facture a uploadé\",
            'attr': {
                'placeholder': \"Déposer le document au format .pdf\"
            }
        })}}
        <button type=\"submit\" class=\"btn btn-success disabled\">Enregistrer le document</button>
\t\t{{form_end(formDocument)}}
\t</div>

{% endblock %}
", "document/show.html.twig", "C:\\Symfony\\CSB2G-Gestion-V1\\templates\\document\\show.html.twig");
    }
}
