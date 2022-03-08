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

/* user/index.html.twig */
class __TwigTemplate_2a859895a26a8ee7b5423cc4630abc836890898a00d692920f84f4c6c9e353ab extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div>
        <p>Afin de faciliter vos recherches, vous pouvez vous rendre directement vers les <a href=\"#job-non-accepte\">Jobs
                non acceptés</a> ou vers les <a href=\"#Utilisateurs-non-acceptés\">Utilisateurs non acceptés</a> <a
                    href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app");
        echo "\" class=\" float-end\">Retour à la page d'accueil</a></p>
    </div>

    <h1 id=\"Utilisateurs-non-acceptés\">Utilisateurs non acceptés </h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Email</th>
            <th>Roles</th>
            <th>Utilisateur accepté</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "            ";
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 26), [0 => "ROLE_ADMIN"])) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 26), [0 => "ROLE_CONSULTANT"])))) {
                // line 27
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "isAccepted", [], "any", false, false, false, 27), false))) {
                    // line 28
                    echo "                    <tr>
                        <td>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 29), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 31
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 31), [0 => "ROLE_ADMIN"]))) {
                        // line 32
                        echo "                            Administrateur
                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 33
$context["user"], "roles", [], "any", false, false, false, 33), [0 => "ROLE_CONSULTANT"]))) {
                        // line 34
                        echo "                            Consultant
                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 35
$context["user"], "roles", [], "any", false, false, false, 35), [0 => "ROLE_RECRUITEUR"]))) {
                        // line 36
                        echo "                            Recruteur
                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 37
$context["user"], "roles", [], "any", false, false, false, 37), [0 => "ROLE_CANDIDAT"]))) {
                        // line 38
                        echo "                            Candidat
                            ";
                    } else {
                        // line 40
                        echo "                            ";
                        ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 40)), "html", null, true))) : (print ("")));
                        echo "</td>
                        ";
                    }
                    // line 42
                    echo "
                        <td>";
                    // line 43
                    echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isAccepted", [], "any", false, false, false, 43)) ? ("Oui ✅") : ("Non ❌"));
                    echo "</td>
                        <td>
                            <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                    echo "\" class=\"btn btn-success\">Modifier</a>
                        </td>
                    </tr>
                ";
                }
                // line 49
                echo "            ";
            }
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>



    <h1>Utilisateurs acceptés</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Email</th>
            <th>Roles</th>
            <th>Utilisateur accepté</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 69
            echo "            ";
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 69), [0 => "ROLE_ADMIN"])) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 69), [0 => "ROLE_CONSULTANT"])))) {
                // line 70
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "isAccepted", [], "any", false, false, false, 70), true))) {
                    // line 71
                    echo "                    <tr>
                        <td>";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 72), "html", null, true);
                    echo "</td>
                        <td> ";
                    // line 73
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 73), [0 => "ROLE_ADMIN"]))) {
                        // line 74
                        echo "                                Administrateur
                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 75
$context["user"], "roles", [], "any", false, false, false, 75), [0 => "ROLE_CONSULTANT"]))) {
                        // line 76
                        echo "                                Consultant
                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 77
$context["user"], "roles", [], "any", false, false, false, 77), [0 => "ROLE_RECRUITEUR"]))) {
                        // line 78
                        echo "                                Recruteur
                            ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 79
$context["user"], "roles", [], "any", false, false, false, 79), [0 => "ROLE_CANDIDAT"]))) {
                        // line 80
                        echo "                                Candidat
                            ";
                    } else {
                        // line 82
                        echo "                                ";
                        ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 82)), "html", null, true))) : (print ("")));
                        echo "
                            ";
                    }
                    // line 83
                    echo "</td>
                        <td>";
                    // line 84
                    echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isAccepted", [], "any", false, false, false, 84)) ? ("Oui ✅") : ("Non ❌"));
                    echo "</td>
                        <td>
                            <a href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                    echo "\" class=\"btn btn-success\">Modifier</a>
                        </td>
                    </tr
                ";
                }
                // line 90
                echo "            ";
            }
            // line 91
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </tbody>
    </table>


    <h1 class=\"mt-5\" id=\"job-non-accepte\">Liste des annonces qui ont été acceptées par nos équipes :</h1>


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
            <th>Salaires mensuel</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 115
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["job"], "isAccepted", [], "any", false, false, false, 115), true))) {
                // line 116
                echo "                <tr>
                    <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 117), "html", null, true);
                echo "</td>
                    <td>";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 118), "html", null, true);
                echo "</td>
                    <td>";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "place", [], "any", false, false, false, 119), "html", null, true);
                echo "</td>
                    <td>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "typeContrat", [], "any", false, false, false, 120), "html", null, true);
                echo "</td>
                    <td>";
                // line 121
                ((twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 121)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 121), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 122
                ((twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 122)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 122), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
                echo "</td>
                    <td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "time", [], "any", false, false, false, 123), "html", null, true);
                echo "</td>
                    <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 124), "html", null, true);
                echo "€</td>
                    <td>
                        <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_edit_consultant", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 126)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Modifier</a>
                    </td>
                </tr>
            ";
            }
            // line 130
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        </tbody>
    </table>





    <h1>Liste des annonces qui n'ont pas encore été acceptées par nos équipes :</h1>

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
            <th>Salaires mensuel</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 155, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 156
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["job"], "isAccepted", [], "any", false, false, false, 156), false))) {
                // line 157
                echo "                <tr>
                    <td>";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 158), "html", null, true);
                echo "</td>
                    <td>";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 159), "html", null, true);
                echo "</td>
                    <td>";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "place", [], "any", false, false, false, 160), "html", null, true);
                echo "</td>
                    <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "typeContrat", [], "any", false, false, false, 161), "html", null, true);
                echo "</td>
                    <td>";
                // line 162
                ((twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 162)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 162), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 163
                ((twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 163)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 163), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
                echo "</td>
                    <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "time", [], "any", false, false, false, 164), "html", null, true);
                echo "</td>
                    <td>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 165), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_edit_consultant", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 167)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Modifier</a>
                    </td>
                </tr>
            ";
            }
            // line 171
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "        </tbody>
    </table>

    <div>
        <p><a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app");
        echo "\" class=\" float-end\">Retour à la page d'accueil</a></p>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 176,  415 => 172,  409 => 171,  402 => 167,  397 => 165,  393 => 164,  389 => 163,  385 => 162,  381 => 161,  377 => 160,  373 => 159,  369 => 158,  366 => 157,  363 => 156,  359 => 155,  333 => 131,  327 => 130,  320 => 126,  315 => 124,  311 => 123,  307 => 122,  303 => 121,  299 => 120,  295 => 119,  291 => 118,  287 => 117,  284 => 116,  281 => 115,  277 => 114,  253 => 92,  247 => 91,  244 => 90,  237 => 86,  232 => 84,  229 => 83,  223 => 82,  219 => 80,  217 => 79,  214 => 78,  212 => 77,  209 => 76,  207 => 75,  204 => 74,  202 => 73,  198 => 72,  195 => 71,  192 => 70,  189 => 69,  185 => 68,  166 => 51,  160 => 50,  157 => 49,  150 => 45,  145 => 43,  142 => 42,  136 => 40,  132 => 38,  130 => 37,  127 => 36,  125 => 35,  122 => 34,  120 => 33,  117 => 32,  115 => 31,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  97 => 25,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}

    <div>
        <p>Afin de faciliter vos recherches, vous pouvez vous rendre directement vers les <a href=\"#job-non-accepte\">Jobs
                non acceptés</a> ou vers les <a href=\"#Utilisateurs-non-acceptés\">Utilisateurs non acceptés</a> <a
                    href=\"{{ path('app') }}\" class=\" float-end\">Retour à la page d'accueil</a></p>
    </div>

    <h1 id=\"Utilisateurs-non-acceptés\">Utilisateurs non acceptés </h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Email</th>
            <th>Roles</th>
            <th>Utilisateur accepté</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
            {% if user.roles != [\"ROLE_ADMIN\"] and user.roles != [\"ROLE_CONSULTANT\"] %}
                {% if user.isAccepted == false %}
                    <tr>
                        <td>{{ user.email }}</td>
                        <td>
                            {% if user.roles == [\"ROLE_ADMIN\"] %}
                            Administrateur
                            {% elseif user.roles == [\"ROLE_CONSULTANT\"] %}
                            Consultant
                            {% elseif user.roles == [\"ROLE_RECRUITEUR\"] %}
                            Recruteur
                            {% elseif user.roles == [\"ROLE_CANDIDAT\"] %}
                            Candidat
                            {% else %}
                            {{ user.roles ? user.roles|json_encode : '' }}</td>
                        {% endif %}

                        <td>{{ user.isAccepted ? 'Oui ✅' : 'Non ❌' }}</td>
                        <td>
                            <a href=\"{{ path('user_edit', {'id': user.id}) }}\" class=\"btn btn-success\">Modifier</a>
                        </td>
                    </tr>
                {% endif %}
            {% endif %}
        {% endfor %}
        </tbody>
    </table>



    <h1>Utilisateurs acceptés</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Email</th>
            <th>Roles</th>
            <th>Utilisateur accepté</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
            {% if user.roles != [\"ROLE_ADMIN\"] and user.roles != [\"ROLE_CONSULTANT\"] %}
                {% if user.isAccepted == true %}
                    <tr>
                        <td>{{ user.email }}</td>
                        <td> {% if user.roles == [\"ROLE_ADMIN\"] %}
                                Administrateur
                            {% elseif user.roles == [\"ROLE_CONSULTANT\"] %}
                                Consultant
                            {% elseif user.roles == [\"ROLE_RECRUITEUR\"] %}
                                Recruteur
                            {% elseif user.roles == [\"ROLE_CANDIDAT\"] %}
                                Candidat
                            {% else %}
                                {{ user.roles ? user.roles|json_encode : '' }}
                            {% endif %}</td>
                        <td>{{ user.isAccepted ? 'Oui ✅' : 'Non ❌' }}</td>
                        <td>
                            <a href=\"{{ path('user_edit', {'id': user.id}) }}\" class=\"btn btn-success\">Modifier</a>
                        </td>
                    </tr
                {% endif %}
            {% endif %}
        {% endfor %}
        </tbody>
    </table>


    <h1 class=\"mt-5\" id=\"job-non-accepte\">Liste des annonces qui ont été acceptées par nos équipes :</h1>


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
            <th>Salaires mensuel</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for job in jobs %}
            {% if job.isAccepted == true %}
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
                        <a href=\"{{ path('job_edit_consultant', {'id': job.id}) }}\" class=\"btn btn-success\">Modifier</a>
                    </td>
                </tr>
            {% endif %}
        {% endfor %}
        </tbody>
    </table>





    <h1>Liste des annonces qui n'ont pas encore été acceptées par nos équipes :</h1>

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
            <th>Salaires mensuel</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for job in jobs %}
            {% if job.isAccepted == false %}
                <tr>
                    <td>{{ job.title }}</td>
                    <td>{{ job.description }}</td>
                    <td>{{ job.place }}</td>
                    <td>{{ job.typeContrat }}</td>
                    <td>{{ job.startDate ? job.startDate|date('d-m-Y') : '' }}</td>
                    <td>{{ job.endDate ? job.endDate|date('d-m-Y') : 'Pas de date de fin de contrat' }}</td>
                    <td>{{ job.time }}</td>
                    <td>{{ job.salary }}</td>
                    <td>
                        <a href=\"{{ path('job_edit_consultant', {'id': job.id}) }}\" class=\"btn btn-success\">Modifier</a>
                    </td>
                </tr>
            {% endif %}
        {% endfor %}
        </tbody>
    </table>

    <div>
        <p><a href=\"{{ path('app') }}\" class=\" float-end\">Retour à la page d'accueil</a></p>
    </div>

{% endblock %}
", "user/index.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/user/index.html.twig");
    }
}
