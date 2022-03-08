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

/* base.html.twig */
class __TwigTemplate_e3435c49e3d64f7425652972b6343fd8d470e8fbd9823c73d16f786efabe58ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'herder' => [$this, 'block_herder'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</head>
<body class=\"container\">


";
        // line 27
        $this->displayBlock('herder', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "


";
        // line 166
        $this->displayBlock('footer', $context, $blocks);
        // line 168
        echo "</body>
</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>

        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/css.css"), "html", null, true);
        echo "\" >
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        ";
        // line 22
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_herder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "herder"));

        // line 28
        echo "
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light rounded border\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app");
        echo "\">TRT-Conseil 💼 </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                    aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\" id=\"ok\">
                    ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "                        <li class=\"nav-item dropdown \">
                            <a class=\"nav-link dropdown-toggle active\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Candidat
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_index");
            echo "\">Mon profil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_job_index");
            echo "\">Postuler aux offres</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("to_apply");
            echo "\">Mes candidatures</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown \">
                            <a class=\"nav-link dropdown-toggle active\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Recruteur
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruiter_index");
            echo "\">Mon profil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_new");
            echo "\">Poster une annonce</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_index");
            echo "\">Liste de mes offres</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("to_apply_recruiter");
            echo "\">Liste des postulants</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminregister_admin");
            echo "\">Créer un consultant</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultant_index");
            echo "\">Liste des consultants</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Approuver les Utilisateurs et les
                                Jobs</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("to_apply_job");
            echo "\">Liste des postulants</a>
                        </li>

                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT")) {
            // line 89
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_index");
            echo "\">Mon profil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_job_index");
            echo "\">Postuler aux offres</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("to_apply");
            echo "\">Mes candidatures</a>
                        </li>
                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RECRUITEUR")) {
            // line 99
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruiter_index");
            echo "\">Mon profil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_new");
            echo "\">Poster une annonce</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_index");
            echo "\">Liste de mes offres</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("to_apply_recruiter");
            echo "\">Liste des postulants</a>
                        </li>
                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONSULTANT")) {
            // line 112
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Approuvez les Utilisateurs et les
                                Jobs</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("to_apply_job");
            echo "\">Liste des postulants</a>
                        </li>
                    ";
        }
        // line 120
        echo "                </ul>
            </div>
            <div>
                ";
        // line 123
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 124
            echo "                    <p><strong>Rôle :</strong> Administrateur </p>

                    <p><strong>Email :</strong> ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "email", [], "any", false, false, false, 126), "html", null, true);
            echo "
                        <a class=\"link-danger\" href=\"";
            // line 127
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
                    </p>
                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_RECRUITEUR")) {
            // line 130
            echo "                    <p><strong>Rôle :</strong> Recruteur </p>

                    <p><strong>Email :</strong> ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "email", [], "any", false, false, false, 132), "html", null, true);
            echo "
                        <a class=\"link-danger\" href=\"";
            // line 133
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
                    </p>
                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONSULTANT")) {
            // line 136
            echo "                    <p><strong>Rôle :</strong> Consultant </p>

                    <p><strong>Email :</strong> ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138), "html", null, true);
            echo "
                        <a class=\"link-danger\" href=\"";
            // line 139
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
                    </p>
                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CANDIDAT")) {
            // line 142
            echo "                    <p><strong>Rôle :</strong> Candidate </p>

                    <p><strong>Email :</strong> ";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "user", [], "any", false, false, false, 144), "email", [], "any", false, false, false, 144), "html", null, true);
            echo "
                        <a class=\"link-danger\" href=\"";
            // line 145
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
                    </p>


                ";
        } else {
            // line 150
            echo "                    <p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-secondary \">Se connecter</a> <a
                                href=\"";
            // line 151
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-secondary\">Créer un compte</a></p>
                ";
        }
        // line 153
        echo "            </div>
        </div>
    </nav>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 160
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 161
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 166
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  427 => 166,  419 => 161,  412 => 160,  400 => 153,  395 => 151,  390 => 150,  382 => 145,  378 => 144,  374 => 142,  368 => 139,  364 => 138,  360 => 136,  354 => 133,  350 => 132,  346 => 130,  340 => 127,  336 => 126,  332 => 124,  330 => 123,  325 => 120,  319 => 117,  312 => 113,  309 => 112,  303 => 109,  297 => 106,  291 => 103,  285 => 100,  282 => 99,  276 => 96,  270 => 93,  264 => 90,  261 => 89,  254 => 85,  247 => 81,  241 => 78,  235 => 75,  227 => 70,  221 => 67,  215 => 64,  209 => 61,  196 => 51,  190 => 48,  184 => 45,  176 => 39,  174 => 38,  164 => 31,  159 => 28,  152 => 27,  145 => 22,  143 => 21,  136 => 20,  127 => 17,  119 => 11,  117 => 10,  110 => 9,  97 => 5,  86 => 168,  84 => 166,  79 => 163,  77 => 160,  74 => 159,  72 => 27,  66 => 23,  64 => 20,  61 => 19,  58 => 9,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    {% block stylesheets %}
        {#  {{ encore_entry_link_tags('app') }} #}

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>

        <link rel=\"stylesheet\" href=\"{{ asset('style/css.css') }}\" >
    {% endblock %}

    {% block javascripts %}
        {#  {{ encore_entry_script_tags('app') }} #}
    {% endblock %}
</head>
<body class=\"container\">


{% block herder %}

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light rounded border\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('app') }}\">TRT-Conseil 💼 </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                    aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\" id=\"ok\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item dropdown \">
                            <a class=\"nav-link dropdown-toggle active\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Candidat
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"{{ path('candidate_index') }}\">Mon profil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"{{ path('candidate_job_index') }}\">Postuler aux offres</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"{{ path('to_apply') }}\">Mes candidatures</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown \">
                            <a class=\"nav-link dropdown-toggle active\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Recruteur
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"{{ path('recruiter_index') }}\">Mon profil</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"{{ path('job_new') }}\">Poster une annonce</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"{{ path('job_index') }}\">Liste de mes offres</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"{{ path('to_apply_recruiter') }}\">Liste des postulants</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('adminregister_admin') }}\">Créer un consultant</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('consultant_index') }}\">Liste des consultants</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('user_index') }}\">Approuver les Utilisateurs et les
                                Jobs</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('to_apply_job') }}\">Liste des postulants</a>
                        </li>

                    {% elseif is_granted('ROLE_CANDIDAT') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('candidate_index') }}\">Mon profil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('candidate_job_index') }}\">Postuler aux offres</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('to_apply') }}\">Mes candidatures</a>
                        </li>
                    {% elseif is_granted('ROLE_RECRUITEUR') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('recruiter_index') }}\">Mon profil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('job_new') }}\">Poster une annonce</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('job_index') }}\">Liste de mes offres</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('to_apply_recruiter') }}\">Liste des postulants</a>
                        </li>
                    {% elseif is_granted('ROLE_CONSULTANT') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('user_index') }}\">Approuvez les Utilisateurs et les
                                Jobs</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('to_apply_job') }}\">Liste des postulants</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
            <div>
                {% if is_granted('ROLE_ADMIN') %}
                    <p><strong>Rôle :</strong> Administrateur </p>

                    <p><strong>Email :</strong> {{ app.user.email }}
                        <a class=\"link-danger\" href=\"{{ path('logout') }}\">Déconnexion</a>
                    </p>
                {% elseif is_granted('ROLE_RECRUITEUR') %}
                    <p><strong>Rôle :</strong> Recruteur </p>

                    <p><strong>Email :</strong> {{ app.user.email }}
                        <a class=\"link-danger\" href=\"{{ path('logout') }}\">Déconnexion</a>
                    </p>
                {% elseif is_granted('ROLE_CONSULTANT') %}
                    <p><strong>Rôle :</strong> Consultant </p>

                    <p><strong>Email :</strong> {{ app.user.email }}
                        <a class=\"link-danger\" href=\"{{ path('logout') }}\">Déconnexion</a>
                    </p>
                {% elseif is_granted('ROLE_CANDIDAT') %}
                    <p><strong>Rôle :</strong> Candidate </p>

                    <p><strong>Email :</strong> {{ app.user.email }}
                        <a class=\"link-danger\" href=\"{{ path('logout') }}\">Déconnexion</a>
                    </p>


                {% else %}
                    <p><a href=\"{{ path('login') }}\" class=\"btn btn-secondary \">Se connecter</a> <a
                                href=\"{{ path('app_register') }}\" class=\"btn btn-secondary\">Créer un compte</a></p>
                {% endif %}
            </div>
        </div>
    </nav>


{% endblock %}

{% block body %}

{% endblock %}



{% block footer %}
{% endblock %}
</body>
</html>


", "base.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/base.html.twig");
    }
}
