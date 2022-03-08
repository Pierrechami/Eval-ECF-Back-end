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

/* recruiter/index.html.twig */
class __TwigTemplate_15184a5868e77566229b1f2fbdbe2022796a66a9b45a7cdaeb326dcc57c52884 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruiter/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recruiter/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Recruiter index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Information de votre société</h1>


<p>les informations concernent lutilisateur suivante : <strong>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</strong></p>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recruiters"]) || array_key_exists("recruiters", $context) ? $context["recruiters"] : (function () { throw new RuntimeError('Variable "recruiters" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recruiter"]) {
            // line 11
            echo "    <table class=\"table\">
    <thead>
    <tr>
        <th>Nom de la société</th>
        <th>Addresse Postale</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruiter"], "companieName", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruiter"], "address", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruiter_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recruiter"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" type=\"btn\" class=\"btn btn-success\">Modifier mes informations</a>
            </td>
        </tr>
    </tbody>
</table>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "    <div>
        <p colspan=\"4\" >Vous n'avez pas encore indiqué le Nom et l'Adressse de votre entreprise. Pour ajouter ses informations cliquer, <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruiter_new");
            echo "\">ici</a>
        </p>
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recruiter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "

<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app");
        echo "\">Retour à la page d'accueil</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruiter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  132 => 35,  122 => 31,  119 => 30,  108 => 24,  103 => 22,  99 => 21,  87 => 11,  82 => 10,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recruiter index{% endblock %}

{% block body %}
<h1>Information de votre société</h1>


<p>les informations concernent lutilisateur suivante : <strong>{{ email }}</strong></p>
    {% for recruiter in recruiters %}
    <table class=\"table\">
    <thead>
    <tr>
        <th>Nom de la société</th>
        <th>Addresse Postale</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ recruiter.companieName }}</td>
            <td>{{ recruiter.address }}</td>
            <td>
                <a href=\"{{ path('recruiter_edit', {'id': recruiter.id}) }}\" type=\"btn\" class=\"btn btn-success\">Modifier mes informations</a>
            </td>
        </tr>
    </tbody>
</table>
{% else %}
    <div>
        <p colspan=\"4\" >Vous n'avez pas encore indiqué le Nom et l'Adressse de votre entreprise. Pour ajouter ses informations cliquer, <a href=\"{{ path('recruiter_new') }}\">ici</a>
        </p>
    </div>
        {% endfor %}


<a href=\"{{ path('app') }}\">Retour à la page d'accueil</a>

{% endblock %}
", "recruiter/index.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/recruiter/index.html.twig");
    }
}
