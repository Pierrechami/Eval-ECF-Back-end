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

/* job/index.html.twig */
class __TwigTemplate_9a557bf19f67eaf3ae5733a3ff54765d1bca6d70791dc9c448d8ba65603eb1ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/index.html.twig", 1);
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

        echo "Liste des Jobs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>Vous pouvez déposer une annonce pour votre entreprise directement en cliquant <a
                href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_new");
        echo "\">ici.</a> <strong>Si vous n'avez pas défini d'entreprise vous serez redirigé vers la page de création d'entreprise</strong></p>

    ";
        // line 10
        if ((0 === twig_compare((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 10, $this->source); })()), false))) {
            // line 11
            echo "        <div>
            <p colspan=\"4\">Vous n'avez pas encore déposé d'annonce</p>
        </div>
    ";
        } else {
            // line 15
            echo "


        <h1>Liste des annonces qui ont été acceptées par nos équipes :</h1>
        <p>Vous ne pouvez plus modifier vos annonces quand elles ont été acceptées par notre équipe.</p>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 21
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["job"], "isAccepted", [], "any", false, false, false, 21), true))) {
                    // line 22
                    echo "                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Titre de l'annonce</th>
                        <th>Type de contrat</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Nombre d'heures semaine</th>
                        <th>Salaires mensuel</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 36), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "typeContrat", [], "any", false, false, false, 37), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 38
                    ((twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 38), "d-m-Y"), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 39
                    ((twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 39), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
                    echo "</td>
                        <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "time", [], "any", false, false, false, 40), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 41), "html", null, true);
                    echo "€</td>
                        <td>
                            <a href=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_show", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                    echo "\" class=\"btn btn-success\">Afficher</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

            ";
                }
                // line 50
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "


        <h1>Liste des annonces qui n'ont pas encore été acceptées par nos équipes :</h1>


        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 60
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["job"], "isAccepted", [], "any", false, false, false, 60), false))) {
                    // line 61
                    echo "                <table class=\"table\">
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
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 78), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 79), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "place", [], "any", false, false, false, 80), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "typeContrat", [], "any", false, false, false, 81), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 82
                    ((twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 82), "d-m-Y"), "html", null, true))) : (print ("")));
                    echo "</td>
                        <td>";
                    // line 83
                    ((twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 83)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 83), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
                    echo "</td>
                        <td>";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "time", [], "any", false, false, false, 84), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 85), "html", null, true);
                    echo "€</td>
                        <td>
                            <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_show", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                    echo "\" class=\"btn btn-success\">Afficher</a>
                        </td>
                        <td>
                            <a href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                    echo "\" class=\"btn btn-danger\">Modifier</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            ";
                }
                // line 96
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 97,  260 => 96,  251 => 90,  245 => 87,  240 => 85,  236 => 84,  232 => 83,  228 => 82,  224 => 81,  220 => 80,  216 => 79,  212 => 78,  193 => 61,  190 => 60,  186 => 59,  178 => 53,  170 => 50,  160 => 43,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  119 => 22,  116 => 21,  112 => 20,  105 => 15,  99 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Jobs{% endblock %}

{% block body %}

    <p>Vous pouvez déposer une annonce pour votre entreprise directement en cliquant <a
                href=\"{{ path('job_new') }}\">ici.</a> <strong>Si vous n'avez pas défini d'entreprise vous serez redirigé vers la page de création d'entreprise</strong></p>

    {% if jobs == false %}
        <div>
            <p colspan=\"4\">Vous n'avez pas encore déposé d'annonce</p>
        </div>
    {% else %}



        <h1>Liste des annonces qui ont été acceptées par nos équipes :</h1>
        <p>Vous ne pouvez plus modifier vos annonces quand elles ont été acceptées par notre équipe.</p>
        {% for job in jobs %}
            {% if job.isAccepted == true %}
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Titre de l'annonce</th>
                        <th>Type de contrat</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Nombre d'heures semaine</th>
                        <th>Salaires mensuel</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ job.title }}</td>
                        <td>{{ job.typeContrat }}</td>
                        <td>{{ job.startDate ? job.startDate|date('d-m-Y') : '' }}</td>
                        <td>{{ job.endDate ? job.endDate|date('d-m-Y') : 'Pas de date de fin de contrat' }}</td>
                        <td>{{ job.time }}</td>
                        <td>{{ job.salary }}€</td>
                        <td>
                            <a href=\"{{ path('job_show', {'id': job.id}) }}\" class=\"btn btn-success\">Afficher</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

            {% endif %}


        {% endfor %}



        <h1>Liste des annonces qui n'ont pas encore été acceptées par nos équipes :</h1>


        {% for job in jobs %}
            {% if job.isAccepted == false %}
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
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ job.title }}</td>
                        <td>{{ job.description }}</td>
                        <td>{{ job.place }}</td>
                        <td>{{ job.typeContrat }}</td>
                        <td>{{ job.startDate ? job.startDate|date('d-m-Y') : '' }}</td>
                        <td>{{ job.endDate ? job.endDate|date('d-m-Y') : 'Pas de date de fin de contrat' }}</td>
                        <td>{{ job.time }}</td>
                        <td>{{ job.salary }}€</td>
                        <td>
                            <a href=\"{{ path('job_show', {'id': job.id}) }}\" class=\"btn btn-success\">Afficher</a>
                        </td>
                        <td>
                            <a href=\"{{ path('job_edit', {'id': job.id}) }}\" class=\"btn btn-danger\">Modifier</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}
", "job/index.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/job/index.html.twig");
    }
}
