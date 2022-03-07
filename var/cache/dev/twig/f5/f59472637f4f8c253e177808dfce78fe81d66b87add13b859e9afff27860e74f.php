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

/* candidate_job/toApply.html.twig */
class __TwigTemplate_ecbcd164e51db35d2d891f20abae9b8f4b4a881d3bc94025d416731f58d68247 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate_job/toApply.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate_job/toApply.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidate_job/toApply.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Liste des annonces pour lesquelles vous avez postulé</h1>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobcandidates"]) || array_key_exists("jobcandidates", $context) ? $context["jobcandidates"] : (function () { throw new RuntimeError('Variable "jobcandidates" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jobcandidate"]) {
            // line 7
            echo "    <table class=\"table\">
        <thead>
        <tr>
            <th>Titre de l'annonce</th>
            <th>Description du Poste</th>
            <th>Lieu</th>
            <th>Type de contrat</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Nombre d'heures semaine</th>
            <th>Salaires</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "place", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "typeContrat", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "startDate", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "startDate", [], "any", false, false, false, 27), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "endDate", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "endDate", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "time", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "salary", [], "any", false, false, false, 30), "html", null, true);
            echo "€</td>
            <td>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_job_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">modifier</a>
            </td>
        </tr>
        </tbody>
    </table>




";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jobcandidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidate_job/toApply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  127 => 32,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1>Liste des annonces pour lesquelles vous avez postulé</h1>
{% for jobcandidate in jobcandidates %}
    <table class=\"table\">
        <thead>
        <tr>
            <th>Titre de l'annonce</th>
            <th>Description du Poste</th>
            <th>Lieu</th>
            <th>Type de contrat</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Nombre d'heures semaine</th>
            <th>Salaires</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ jobcandidate.title }}</td>
            <td>{{ jobcandidate.description }}</td>
            <td>{{ jobcandidate.place }}</td>
            <td>{{ jobcandidate.typeContrat }}</td>
            <td>{{ jobcandidate.startDate ? jobcandidate.startDate|date('d-m-Y') : '' }}</td>
            <td>{{ jobcandidate.endDate ? jobcandidate.endDate|date('d-m-Y') : 'Pas de date de fin de contrat' }}</td>
            <td>{{ jobcandidate.time }}</td>
            <td>{{ jobcandidate.salary }}€</td>
            <td>
                <a href=\"{{ path('candidate_job_edit', {'id': jobcandidate.id}) }}\">modifier</a>
            </td>
        </tr>
        </tbody>
    </table>




{% endfor %}



    {# pour le job les candidat qui ont postulé
    {% for job in job0 %}
        {{ dump(job) }}
    {% endfor %}
#}
{% endblock %}", "candidate_job/toApply.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/candidate_job/toApply.html.twig");
    }
}
