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

/* admin/registerInfos.html.twig */
class __TwigTemplate_d0406ca62de794b1da114f9e4b875365a9b5272725f4a860da49160ca453dfa8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registerInfos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/registerInfos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register consultant";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Avant de continuer, compléter les informations du consultant</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationFormConsultant"]) || array_key_exists("registrationFormConsultant", $context) ? $context["registrationFormConsultant"] : (function () { throw new RuntimeError('Variable "registrationFormConsultant" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationFormConsultant"]) || array_key_exists("registrationFormConsultant", $context) ? $context["registrationFormConsultant"] : (function () { throw new RuntimeError('Variable "registrationFormConsultant" does not exist.', 9, $this->source); })()), "first_name", [], "any", false, false, false, 9), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationFormConsultant"]) || array_key_exists("registrationFormConsultant", $context) ? $context["registrationFormConsultant"] : (function () { throw new RuntimeError('Variable "registrationFormConsultant" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'row');
        echo "
    Merci de bien vouloir revalider l'adresse mail du consultant précedement créer
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationFormConsultant"]) || array_key_exists("registrationFormConsultant", $context) ? $context["registrationFormConsultant"] : (function () { throw new RuntimeError('Variable "registrationFormConsultant" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), 'row', ["label" => "Utilisateur concerné :"]);
        // line 14
        echo "

    <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminregister_admin");
        echo "\" class=\"float-end\">retour</a>

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationFormConsultant"]) || array_key_exists("registrationFormConsultant", $context) ? $context["registrationFormConsultant"] : (function () { throw new RuntimeError('Variable "registrationFormConsultant" does not exist.', 19, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/registerInfos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  97 => 17,  92 => 14,  90 => 12,  85 => 10,  81 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register consultant{% endblock %}

{% block body %}
    <h1>Avant de continuer, compléter les informations du consultant</h1>

    {{ form_start(registrationFormConsultant) }}
    {{ form_row(registrationFormConsultant.first_name) }}
    {{ form_row(registrationFormConsultant.name) }}
    Merci de bien vouloir revalider l'adresse mail du consultant précedement créer
    {{ form_row(registrationFormConsultant.user , {
        label: 'Utilisateur concerné :'
    }) }}

    <button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
    <a href=\"{{ path('adminregister_admin') }}\" class=\"float-end\">retour</a>

    {{ form_end(registrationFormConsultant) }}


{% endblock %}
", "admin/registerInfos.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/admin/registerInfos.html.twig");
    }
}
