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
class __TwigTemplate_d640b5ceeeae24ecb3eb202a39575a1cd5793a7dd7788767fa75e4b7de2497e9 extends Template
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

    ";
        // line 6
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["jobcandidates"]) || array_key_exists("jobcandidates", $context) ? $context["jobcandidates"] : (function () { throw new RuntimeError('Variable "jobcandidates" does not exist.', 6, $this->source); })()), "values", [], "any", false, false, false, 6), []))) {
            // line 7
            echo "        <div>
            <p>Vous n'avez postulé a aucun job pour le moment ! Ne perdez pas de temps, pour postuler à un job
                rendez-vous directement dans les <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_job_index");
            echo "\">annonces</a>.</p>
        </div>
        ";
        } else {
            // line 12
            echo "            <h1>Liste des annonces pour lesquelles vous avez postulé</h1>
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jobcandidates"]) || array_key_exists("jobcandidates", $context) ? $context["jobcandidates"] : (function () { throw new RuntimeError('Variable "jobcandidates" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jobcandidate"]) {
                // line 14
                echo "        <table class=\"table\">
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
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "title", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "description", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "place", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "typeContrat", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                <td>";
                // line 34
                ((twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "startDate", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "startDate", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>";
                // line 35
                ((twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "endDate", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "endDate", [], "any", false, false, false, 35), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "time", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "salary", [], "any", false, false, false, 37), "html", null, true);
                echo "€</td>
                <td>
                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_job_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["jobcandidate"], "id", [], "any", false, false, false, 39)]), "html", null, true);
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
            // line 46
            echo "
    ";
        }
        // line 48
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
        return array (  159 => 48,  155 => 46,  142 => 39,  137 => 37,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  117 => 32,  113 => 31,  109 => 30,  91 => 14,  87 => 13,  84 => 12,  78 => 9,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


    {% if jobcandidates.values == [] %}
        <div>
            <p>Vous n'avez postulé a aucun job pour le moment ! Ne perdez pas de temps, pour postuler à un job
                rendez-vous directement dans les <a href=\"{{ path('candidate_job_index') }}\">annonces</a>.</p>
        </div>
        {% else %}
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

    {% endif %}

{% endblock %}", "candidate_job/toApply.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/candidate_job/toApply.html.twig");
    }
}
