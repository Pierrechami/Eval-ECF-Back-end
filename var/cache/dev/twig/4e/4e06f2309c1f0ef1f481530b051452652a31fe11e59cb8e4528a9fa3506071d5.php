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

/* home_page/index.html.twig */
class __TwigTemplate_cbd851d5baccfc4e7d522d43e4b8d22947f8d318fc1f7d618a8c409ca7af8386 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
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

        echo "Hello HomePageController!";
        
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
        echo "    ";
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "erreur_autorisation_candidat"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "        <div class=\"alert alert-success\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "erreur_autorisation_recruiter"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "        <div class=\"alert alert-success\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    <header>
        <h1 class=\"accueil-titre\">Bienvenue sur notre site </h1>
        <p  class=\"accueil-presentation\">TRT Conseil est une agence de recrutement spécialisée dans l’hôtellerie et la restauration. Fondée en
            2014, la société s’est agrandie au fil des ans et possède dorénavant plus de 12 centres dispersés aux
            quatre coins de la France</p>
    </header>



    <h3>Liste des jobs à pourvoir : </h3>

    <div class=\"infos\">
        <p>Vous avez la possibilité de postuler aux différents jobs proposés ainsi que de déposer des annonces en vous créant un compte.</p>
        <form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search-accueil");
        echo "\" class=\"d-flex justify-content-end\">
            <input type=\"text\" name=\"search\"  placeholder=\"ex : Serveur\">
            <input type=\"submit\"  value=\"Rechercher\">
        </form>
    </div>


    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 41
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["job"], "isAccepted", [], "any", false, false, false, 41), true))) {
                // line 42
                echo "            <table class=\"table\">
                <thead>
                <tr>
                    <th>Titre de l'annonce</th>
                    <th>Type de contrat</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Nombre d'heures semaine</th>
                    <th>Salaires mensuel</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                    <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "typeContrat", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
                    <td>";
                // line 57
                ((twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 57), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 58
                ((twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 58), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
                echo "</td>
                    <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "time", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                    <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 60), "html", null, true);
                echo "€</td>
                </tr>
                </tbody>
            </table>
        ";
            }
            // line 65
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "        <p>Nous avons actuelement aucun job a vous présenter, mais n'hésité pas revenir pour êtres au courant des nouveauté ! À bientôt !</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 68,  208 => 66,  203 => 65,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  179 => 56,  175 => 55,  160 => 42,  157 => 41,  152 => 40,  142 => 33,  127 => 20,  118 => 17,  115 => 16,  110 => 15,  107 => 13,  98 => 10,  95 => 9,  90 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomePageController!{% endblock %}


{% block body %}
    {# Message pour avertir les candidats que leur compte n'a pas été accepté #}
    {% for message in app.flashes('erreur_autorisation_candidat') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    {# Message pour avertir les recuteur que leur compte n'a pas été accepté #}
    {% for message in app.flashes('erreur_autorisation_recruiter') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
    <header>
        <h1 class=\"accueil-titre\">Bienvenue sur notre site </h1>
        <p  class=\"accueil-presentation\">TRT Conseil est une agence de recrutement spécialisée dans l’hôtellerie et la restauration. Fondée en
            2014, la société s’est agrandie au fil des ans et possède dorénavant plus de 12 centres dispersés aux
            quatre coins de la France</p>
    </header>



    <h3>Liste des jobs à pourvoir : </h3>

    <div class=\"infos\">
        <p>Vous avez la possibilité de postuler aux différents jobs proposés ainsi que de déposer des annonces en vous créant un compte.</p>
        <form action=\"{{ path('search-accueil') }}\" class=\"d-flex justify-content-end\">
            <input type=\"text\" name=\"search\"  placeholder=\"ex : Serveur\">
            <input type=\"submit\"  value=\"Rechercher\">
        </form>
    </div>


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
                </tr>
                </tbody>
            </table>
        {% endif %}
    {% else %}
        <p>Nous avons actuelement aucun job a vous présenter, mais n'hésité pas revenir pour êtres au courant des nouveauté ! À bientôt !</p>
    {% endfor %}


{% endblock %}
", "home_page/index.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/home_page/index.html.twig");
    }
}
