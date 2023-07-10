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

/* homepage.html.twig */
class __TwigTemplate_1ad8f7bb2dfd2aedeed7c49d12531ab9efb444b1212384bcb17edad8256280ae extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste d'";
        $this->displayParentBlock("title", $context, $blocks);
        
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
    <div class=\"container\">

        <h1 class=\"d-inline me-3\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h1>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["type" => "text", "list" => "datalist", "style" => "margin-top: 1em; display: flex; gap: 1em;"]]);
        // line 13
        echo "

        <datalist id=\"datalist\"></datalist>

        <p style=\"margin: 0\">Recherche :</p>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "search", [], "any", false, false, false, 18), 'widget', ["attr" => ["style" => ""]]);
        // line 20
        echo "

        <button>Send</button>

        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "

        <div class=\"row mt-5\" style=\"flex-wrap: unset !important;\">

            <div class=\"col-12 col-md-8 ps-5\" style=\"width: 100%;\">
                <h2 class=\"mb-4\">Top Mangas :</h2>
                <div class=\"row mt-5\" style=\"flex-wrap: unset !important;\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topMangas"]) || array_key_exists("topMangas", $context) ? $context["topMangas"] : (function () { throw new RuntimeError('Variable "topMangas" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animanga"]) {
            // line 32
            echo "                    <div class=\"col col-md-4\" style=\"margin-bottom: 3em; width: 20% !important;\">
                        <div class=\"animanga-container p-3 text-center\">
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,             // line 35
$context["animanga"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            // line 36
            echo "\"><img class=\"imageListe\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 36), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 36), "html", null, true);
            echo "\" alt=\"Animanga image\" >
                            </a>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,             // line 39
$context["animanga"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            // line 40
            echo "\">
                                <p class=\"mt-2\" ><strong>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</strong></p>
                            </a>
                            <span>Genres : ";
            // line 43
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["animanga"], "genres", [], "any", false, false, false, 43), ["," => " |"]), "html", null, true);
            echo "</span>
                            <br><br>
                            ";
            // line 45
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["animanga"], "type", [], "any", false, false, false, 45), "Manga"))) {
                // line 46
                echo "                                <span>Nombre de tomes : ";
                ((twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 46), "html", null, true))) : (print ("Inconnu")));
                echo "</span>
                            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 47
$context["animanga"], "type", [], "any", false, false, false, 47), "Anime"))) {
                // line 48
                echo "                                <span>Nombre d'épisodes : ";
                ((twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 48), "html", null, true))) : (print ("Inconnu")));
                echo "</span>
                            ";
            }
            // line 50
            echo "                            <br>
                            <span>Date de sortie : ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "releaseDate", [], "any", false, false, false, 51), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animanga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>

                <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

                <h2 class=\"mb-4\">Top Animes :</h2>
                <div class=\"row mt-5\" style=\"flex-wrap: unset !important;\">
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topAnimes"]) || array_key_exists("topAnimes", $context) ? $context["topAnimes"] : (function () { throw new RuntimeError('Variable "topAnimes" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animanga"]) {
            // line 62
            echo "                        <div class=\"col col-md-4\" style=\"margin-bottom: 3em; width: 20% !important;\">
                            <div class=\"animanga-container p-3 text-center\">
                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,             // line 65
$context["animanga"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            // line 66
            echo "\"><img class=\"imageListe\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 66), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 66), "html", null, true);
            echo "\" alt=\"Animanga image\" >
                                </a>
                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,             // line 69
$context["animanga"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            // line 70
            echo "\">
                                    <p class=\"mt-2\" ><strong>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "title", [], "any", false, false, false, 71), "html", null, true);
            echo "</strong></p>
                                </a>
                                <span>Genres : ";
            // line 73
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["animanga"], "genres", [], "any", false, false, false, 73), ["," => " |"]), "html", null, true);
            echo "</span>
                                <br><br>
                                ";
            // line 75
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["animanga"], "type", [], "any", false, false, false, 75), "Manga"))) {
                // line 76
                echo "                                    <span>Nombre de tomes : ";
                ((twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 76)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 76), "html", null, true))) : (print ("Inconnu")));
                echo "</span>
                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 77
$context["animanga"], "type", [], "any", false, false, false, 77), "Anime"))) {
                // line 78
                echo "                                    <span>Nombre d'épisodes : ";
                ((twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 78)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 78), "html", null, true))) : (print ("Inconnu")));
                echo "</span>
                                ";
            }
            // line 80
            echo "                                <br>
                                <span>Date de sortie : ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "releaseDate", [], "any", false, false, false, 81), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animanga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </div>

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 94,  259 => 93,  246 => 85,  236 => 81,  233 => 80,  227 => 78,  225 => 77,  220 => 76,  218 => 75,  213 => 73,  208 => 71,  205 => 70,  203 => 69,  202 => 68,  194 => 66,  192 => 65,  191 => 64,  187 => 62,  183 => 61,  175 => 55,  165 => 51,  162 => 50,  156 => 48,  154 => 47,  149 => 46,  147 => 45,  142 => 43,  137 => 41,  134 => 40,  132 => 39,  131 => 38,  123 => 36,  121 => 35,  120 => 34,  116 => 32,  112 => 31,  102 => 24,  96 => 20,  94 => 18,  87 => 13,  85 => 11,  80 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste d'{{ parent() }}{% endblock %}

{% block body %}

    <div class=\"container\">

        <h1 class=\"d-inline me-3\">{{ title }}</h1>

        {{ form_start(form, {
            'attr': {'type': 'text', 'list': 'datalist', 'style': 'margin-top: 1em; display: flex; gap: 1em;'}
        }) }}

        <datalist id=\"datalist\"></datalist>

        <p style=\"margin: 0\">Recherche :</p>
        {{ form_widget(form.search, {
            'attr': {'style': ''}
        }) }}

        <button>Send</button>

        {{ form_end(form) }}

        <div class=\"row mt-5\" style=\"flex-wrap: unset !important;\">

            <div class=\"col-12 col-md-8 ps-5\" style=\"width: 100%;\">
                <h2 class=\"mb-4\">Top Mangas :</h2>
                <div class=\"row mt-5\" style=\"flex-wrap: unset !important;\">
                {% for animanga in topMangas %}
                    <div class=\"col col-md-4\" style=\"margin-bottom: 3em; width: 20% !important;\">
                        <div class=\"animanga-container p-3 text-center\">
                            <a href=\"{{ path('animanga', {
                                slug: animanga.id
                            }) }}\"><img class=\"imageListe\" src=\"{{ animanga.image }}\" data-src=\"{{ animanga.image }}\" alt=\"Animanga image\" >
                            </a>
                            <a href=\"{{ path('animanga', {
                                slug: animanga.id
                            }) }}\">
                                <p class=\"mt-2\" ><strong>{{ animanga.title }}</strong></p>
                            </a>
                            <span>Genres : {{ animanga.genres|replace({',': ' |'}) }}</span>
                            <br><br>
                            {% if animanga.type == \"Manga\" %}
                                <span>Nombre de tomes : {{ animanga.tomes ? animanga.tomes : 'Inconnu' }}</span>
                            {% elseif animanga.type == \"Anime\" %}
                                <span>Nombre d'épisodes : {{ animanga.episodes ? animanga.episodes : 'Inconnu' }}</span>
                            {% endif %}
                            <br>
                            <span>Date de sortie : {{ animanga.releaseDate }}</span>
                        </div>
                    </div>
                {% endfor %}
                </div>

                <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

                <h2 class=\"mb-4\">Top Animes :</h2>
                <div class=\"row mt-5\" style=\"flex-wrap: unset !important;\">
                    {% for animanga in topAnimes %}
                        <div class=\"col col-md-4\" style=\"margin-bottom: 3em; width: 20% !important;\">
                            <div class=\"animanga-container p-3 text-center\">
                                <a href=\"{{ path('animanga', {
                                    slug: animanga.id
                                }) }}\"><img class=\"imageListe\" src=\"{{ animanga.image }}\" data-src=\"{{ animanga.image }}\" alt=\"Animanga image\" >
                                </a>
                                <a href=\"{{ path('animanga', {
                                    slug: animanga.id
                                }) }}\">
                                    <p class=\"mt-2\" ><strong>{{ animanga.title }}</strong></p>
                                </a>
                                <span>Genres : {{ animanga.genres|replace({',': ' |'}) }}</span>
                                <br><br>
                                {% if animanga.type == \"Manga\" %}
                                    <span>Nombre de tomes : {{ animanga.tomes ? animanga.tomes : 'Inconnu' }}</span>
                                {% elseif animanga.type == \"Anime\" %}
                                    <span>Nombre d'épisodes : {{ animanga.episodes ? animanga.episodes : 'Inconnu' }}</span>
                                {% endif %}
                                <br>
                                <span>Date de sortie : {{ animanga.releaseDate }}</span>
                            </div>
                        </div>
                    {% endfor %}
                </div>

            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}

{% endblock %}", "homepage.html.twig", "/var/www/symfony/templates/homepage.html.twig");
    }
}
