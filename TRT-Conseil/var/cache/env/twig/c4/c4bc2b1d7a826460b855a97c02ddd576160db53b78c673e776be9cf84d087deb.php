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
class __TwigTemplate_31c78fc7b01af75b0e8a178487c2d8daff60b3fa752df443487140fdb12b5088 extends Template
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
            'footer' => [$this, 'block_footer'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomePageController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo "    <header class=\"mt-4\">
        <h1 class=\"accueil-titre\">Bienvenue sur notre site </h1>
    </header>

    <section class=\"mt-4 \">

            <div class=\"row \">
                    <img class=\"col-lg-5 float-end\" src=\"https://media.istockphoto.com/photos/smiling-restaurant-staff-standing-against-white-background-picture-id909303600?k=20&m=909303600&s=612x612&w=0&h=DbwpPNIOfwT8QzLtWibDhNn0ScakGi4DTUYqj2sQP04=\">

                <div class=\"col-lg-7 d-flex justify-content-center align-items-center\">
                    <p class=\"text-justify\">TRT Conseil est une agence de recrutement spécialisée dans l’hôtellerie et la
                        restauration. Fondée en
                        2014, la société s’est agrandie au fil des ans et possède dorénavant plus de 12 centres dispersés aux
                        quatre coins de la France <br> <br>
                    <strong>Lorem Ipsum </strong>est simplement un faux texte de l'industrie de l'impression et de la composition. Le
                        Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un
                        imprimeur inconnu a pris une galère de caractères et l'a brouillé pour en faire un livre de
                        spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi au saut dans la
                        composition électronique, restant essentiellement inchangé. Il a été popularisé dans les années
                        1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus
                        récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker
                        comprenant des versions de Lorem Ipsum.</p>
                </div>


            <div class=\"row mt-5\">
                <div class=\"col-xs-12\">
                    <h3 class=\"ml-5\">Liste des jobs à pourvoir  </h3>

                    <div class=\"infos\">
                        <p>Vous avez la possibilité de postuler aux différents jobs proposés ainsi que de déposer des
                            annonces en vous créant un compte.</p>
                        <form action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search-accueil");
        echo "\" class=\"d-flex justify-content-end\">
                            <input type=\"text\" name=\"search\" placeholder=\"ex : Serveur\">
                            <input type=\"submit\" value=\"Rechercher\">
                        </form>
                    </div>


                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 60
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["job"], "isAccepted", [], "any", false, false, false, 60), true))) {
                // line 61
                echo "                            <table class=\"table\">
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
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
                                    <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "typeContrat", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                                    <td>";
                // line 76
                ((twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 76)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "startDate", [], "any", false, false, false, 76), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                                    <td>";
                // line 77
                ((twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 77)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "endDate", [], "any", false, false, false, 77), "d-m-Y"), "html", null, true))) : (print ("Pas de date de fin de contrat")));
                echo "</td>
                                    <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "time", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                                    <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "salary", [], "any", false, false, false, 79), "html", null, true);
                echo "€</td>
                                </tr>
                                </tbody>
                            </table>
                        ";
            }
            // line 84
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "                        <p>Nous avons actuelement aucun job a vous présenter, mais n'hésité pas revenir pour êtres au
                            courant des nouveauté ! À bientôt !</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </div>
            </div>
        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 99
        echo "    <footer class=\"footer mt-5\">
        <HR WIDTH=\"75%\" class=\"mx-auto\">
        <div class=\"row \">
            <div class=\"col-xs-12 d-flex justify-content-center\">
                <p><i>Retrouvez-nous sur nos différents réseau sociaux</i></p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 d-flex justify-content-evenly\">
                <a href=\"https://www.facebook.com\" target=\"_blank\"> <img width=\"50px\" height=\"50px\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Image/logo-fb.png"), "html", null, true);
        echo "\"></a>
                <a href=\"https://twitter.com\" target=\"_blank\"> <img width=\"50px\" height=\"50px\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Image/logo-twitter.png"), "html", null, true);
        echo "\"></a>
                <a href=\"https://www.snapchat.com/\" target=\"_blank\"> <img width=\"70px\" height=\"50px\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Image/logo-snap.png"), "html", null, true);
        echo "\"></a>
            </div>
        </div>
        <HR WIDTH=\"75%\" class=\"mx-auto\">
        <div class=\"row \">
            <div class=\"col-xs-12 d-flex justify-content-center\">
                <p class=\"exemple\" >Copyright © 2022 TRT-Conseil</p>
            </div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  260 => 110,  256 => 109,  252 => 108,  241 => 99,  234 => 98,  221 => 88,  213 => 85,  208 => 84,  200 => 79,  196 => 78,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  165 => 61,  162 => 60,  157 => 59,  147 => 52,  113 => 20,  104 => 17,  101 => 16,  96 => 15,  93 => 13,  84 => 10,  81 => 9,  76 => 8,  74 => 7,  67 => 6,  54 => 3,  37 => 1,);
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
    <header class=\"mt-4\">
        <h1 class=\"accueil-titre\">Bienvenue sur notre site </h1>
    </header>

    <section class=\"mt-4 \">

            <div class=\"row \">
                    <img class=\"col-lg-5 float-end\" src=\"https://media.istockphoto.com/photos/smiling-restaurant-staff-standing-against-white-background-picture-id909303600?k=20&m=909303600&s=612x612&w=0&h=DbwpPNIOfwT8QzLtWibDhNn0ScakGi4DTUYqj2sQP04=\">

                <div class=\"col-lg-7 d-flex justify-content-center align-items-center\">
                    <p class=\"text-justify\">TRT Conseil est une agence de recrutement spécialisée dans l’hôtellerie et la
                        restauration. Fondée en
                        2014, la société s’est agrandie au fil des ans et possède dorénavant plus de 12 centres dispersés aux
                        quatre coins de la France <br> <br>
                    <strong>Lorem Ipsum </strong>est simplement un faux texte de l'industrie de l'impression et de la composition. Le
                        Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un
                        imprimeur inconnu a pris une galère de caractères et l'a brouillé pour en faire un livre de
                        spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi au saut dans la
                        composition électronique, restant essentiellement inchangé. Il a été popularisé dans les années
                        1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus
                        récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker
                        comprenant des versions de Lorem Ipsum.</p>
                </div>


            <div class=\"row mt-5\">
                <div class=\"col-xs-12\">
                    <h3 class=\"ml-5\">Liste des jobs à pourvoir  </h3>

                    <div class=\"infos\">
                        <p>Vous avez la possibilité de postuler aux différents jobs proposés ainsi que de déposer des
                            annonces en vous créant un compte.</p>
                        <form action=\"{{ path('search-accueil') }}\" class=\"d-flex justify-content-end\">
                            <input type=\"text\" name=\"search\" placeholder=\"ex : Serveur\">
                            <input type=\"submit\" value=\"Rechercher\">
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
                        <p>Nous avons actuelement aucun job a vous présenter, mais n'hésité pas revenir pour êtres au
                            courant des nouveauté ! À bientôt !</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>


{% endblock %}



{% block footer %}
    <footer class=\"footer mt-5\">
        <HR WIDTH=\"75%\" class=\"mx-auto\">
        <div class=\"row \">
            <div class=\"col-xs-12 d-flex justify-content-center\">
                <p><i>Retrouvez-nous sur nos différents réseau sociaux</i></p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 d-flex justify-content-evenly\">
                <a href=\"https://www.facebook.com\" target=\"_blank\"> <img width=\"50px\" height=\"50px\" src=\"{{ asset('Image/logo-fb.png') }}\"></a>
                <a href=\"https://twitter.com\" target=\"_blank\"> <img width=\"50px\" height=\"50px\" src=\"{{ asset('Image/logo-twitter.png') }}\"></a>
                <a href=\"https://www.snapchat.com/\" target=\"_blank\"> <img width=\"70px\" height=\"50px\" src=\"{{ asset('Image/logo-snap.png') }}\"></a>
            </div>
        </div>
        <HR WIDTH=\"75%\" class=\"mx-auto\">
        <div class=\"row \">
            <div class=\"col-xs-12 d-flex justify-content-center\">
                <p class=\"exemple\" >Copyright © 2022 TRT-Conseil</p>
            </div>
        </div>
    </footer>
{% endblock %}
", "home_page/index.html.twig", "/Users/ChaminadePierre/Documents/Back-office/ECF-back-end/Eval-ECF-Back-end/TRT-Conseil/templates/home_page/index.html.twig");
    }
}
