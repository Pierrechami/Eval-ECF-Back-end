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
class __TwigTemplate_03092012d2444473cf34a39e2ef7d7f4d21b3ece8638cdaa9f97c92b3a7b9df4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  436 => 176,  430 => 172,  424 => 171,  417 => 167,  412 => 165,  408 => 164,  404 => 163,  400 => 162,  396 => 161,  392 => 160,  388 => 159,  384 => 158,  381 => 157,  378 => 156,  374 => 155,  348 => 131,  342 => 130,  335 => 126,  330 => 124,  326 => 123,  322 => 122,  318 => 121,  314 => 120,  310 => 119,  306 => 118,  302 => 117,  299 => 116,  296 => 115,  292 => 114,  268 => 92,  262 => 91,  259 => 90,  252 => 86,  247 => 84,  244 => 83,  238 => 82,  234 => 80,  232 => 79,  229 => 78,  227 => 77,  224 => 76,  222 => 75,  219 => 74,  217 => 73,  213 => 72,  210 => 71,  207 => 70,  204 => 69,  200 => 68,  181 => 51,  175 => 50,  172 => 49,  165 => 45,  160 => 43,  157 => 42,  151 => 40,  147 => 38,  145 => 37,  142 => 36,  140 => 35,  137 => 34,  135 => 33,  132 => 32,  130 => 31,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  112 => 25,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
