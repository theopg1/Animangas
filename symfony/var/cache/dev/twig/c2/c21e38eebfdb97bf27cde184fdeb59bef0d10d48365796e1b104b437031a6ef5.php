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

/* browse.html.twig */
class __TwigTemplate_263ac49b4adb8502022ff9edd21c50316c6e710cd4bbc3346e6c2ea91cad1bfd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "browse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "browse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1>Browse by : ";
        // line 7
        (((isset($context["genreSlug"]) || array_key_exists("genreSlug", $context) ? $context["genreSlug"] : (function () { throw new RuntimeError('Variable "genreSlug" does not exist.', 7, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["genreSlug"]) || array_key_exists("genreSlug", $context) ? $context["genreSlug"] : (function () { throw new RuntimeError('Variable "genreSlug" does not exist.', 7, $this->source); })()), "html", null, true))) : (print ("All Genres")));
        echo "</h1>

    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 12
            echo "        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" style=\"margin-bottom: 10px;\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 13, $this->source); })()), ["slug" => twig_get_attribute($this->env, $this->source,             // line 14
$context["genre"], "label", [], "any", false, false, false, 14)]), "html", null, true);
            // line 15
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "label", [], "any", false, false, false, 15), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>

    <div>
        <h2 class=\"mt-5\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</h2>
        <div class=\"row\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animangas"]) || array_key_exists("animangas", $context) ? $context["animangas"] : (function () { throw new RuntimeError('Variable "animangas" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animanga"]) {
            // line 24
            echo "                ";
            if ( !(null === (isset($context["genreSlug"]) || array_key_exists("genreSlug", $context) ? $context["genreSlug"] : (function () { throw new RuntimeError('Variable "genreSlug" does not exist.', 24, $this->source); })()))) {
                // line 25
                echo "                    ";
                if (twig_in_filter(twig_replace_filter(twig_lower_filter($this->env, (isset($context["genreSlug"]) || array_key_exists("genreSlug", $context) ? $context["genreSlug"] : (function () { throw new RuntimeError('Variable "genreSlug" does not exist.', 25, $this->source); })())), [" " => ""]), twig_split_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "genres", [], "any", false, false, false, 25)), [" " => ""]), ","))) {
                    // line 26
                    echo "            <div class=\"col col-md-4\" style=\"margin-bottom: 3em; width: 20% !important;\">
                <div class=\"animanga-container p-3 text-center\">
                    <a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,                     // line 29
$context["animanga"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                    // line 30
                    echo "\"><img class=\"imageListe\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" data-src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" alt=\"Animanga image\" >
                    </a>
                    <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,                     // line 33
$context["animanga"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                    // line 34
                    echo "\">
                        <p class=\"mt-2\" ><strong>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "title", [], "any", false, false, false, 35), "html", null, true);
                    echo "</strong></p>
                    </a>
                    <span>Genres : ";
                    // line 37
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["animanga"], "genres", [], "any", false, false, false, 37), ["," => " |"]), "html", null, true);
                    echo "</span>
                    <br><br>
                    ";
                    // line 39
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["animanga"], "type", [], "any", false, false, false, 39), "Manga"))) {
                        // line 40
                        echo "                        <span>Nombre de tomes : ";
                        ((twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 40), "html", null, true))) : (print ("Inconnu")));
                        echo "</span>
                    ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 41
$context["animanga"], "type", [], "any", false, false, false, 41), "Anime"))) {
                        // line 42
                        echo "                        <span>Nombre d'épisodes : ";
                        ((twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 42), "html", null, true))) : (print ("Inconnu")));
                        echo "</span>
                    ";
                    }
                    // line 44
                    echo "                    <br>
                    <span>Date de sortie : ";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "releaseDate", [], "any", false, false, false, 45), "html", null, true);
                    echo "</span>
                </div>
            </div>
                ";
                }
                // line 49
                echo "                ";
            } else {
                // line 50
                echo "                    <div class=\"col col-md-4\" style=\"margin-bottom: 3em; width: 20% !important;\">
                        <div class=\"animanga-container p-3 text-center\">
                            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,                 // line 53
$context["animanga"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                // line 54
                echo "\"><img class=\"imageListe\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 54), "html", null, true);
                echo "\" data-src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 54), "html", null, true);
                echo "\" alt=\"Animanga image\">
                            </a>
                            <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,                 // line 57
$context["animanga"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                // line 58
                echo "\">
                                <p class=\"mt-2\" ><strong>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "title", [], "any", false, false, false, 59), "html", null, true);
                echo "</strong></p>
                            </a>
                            <span>Genres : ";
                // line 61
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["animanga"], "genres", [], "any", false, false, false, 61), ["," => " |"]), "html", null, true);
                echo "</span>
                            <br><br>
                            ";
                // line 63
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["animanga"], "type", [], "any", false, false, false, 63), "Manga"))) {
                    // line 64
                    echo "                                <span>Nombre de tomes : ";
                    ((twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 64), "html", null, true))) : (print ("Inconnu")));
                    echo "</span>
                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 65
$context["animanga"], "type", [], "any", false, false, false, 65), "Anime"))) {
                    // line 66
                    echo "                                <span>Nombre d'épisodes : ";
                    ((twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 66), "html", null, true))) : (print ("Inconnu")));
                    echo "</span>
                            ";
                }
                // line 68
                echo "                            <br>
                            <span>Date de sortie : ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "releaseDate", [], "any", false, false, false, 69), "html", null, true);
                echo "</span>
                        </div>
                    </div>
            ";
            }
            // line 73
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animanga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 74,  240 => 73,  233 => 69,  230 => 68,  224 => 66,  222 => 65,  217 => 64,  215 => 63,  210 => 61,  205 => 59,  202 => 58,  200 => 57,  199 => 56,  191 => 54,  189 => 53,  188 => 52,  184 => 50,  181 => 49,  174 => 45,  171 => 44,  165 => 42,  163 => 41,  158 => 40,  156 => 39,  151 => 37,  146 => 35,  143 => 34,  141 => 33,  140 => 32,  132 => 30,  130 => 29,  129 => 28,  125 => 26,  122 => 25,  119 => 24,  115 => 23,  110 => 21,  105 => 18,  95 => 15,  93 => 14,  92 => 13,  89 => 12,  85 => 11,  78 => 7,  75 => 6,  68 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - {{ title }}{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Browse by : {{ genreSlug ? genreSlug : 'All Genres' }}</h1>

    <h2 class=\"mt-5 mb-4\">Filter by Genre</h2>
    <ul class=\"genre-list ps-0 mt-2 mb-3\">
        {% for genre in genres %}
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" style=\"margin-bottom: 10px;\" href=\"{{ path( path, {
                slug: genre.label
            }) }}\">{{ genre.label }}</a>
        </li>
        {% endfor %}
    </ul>

    <div>
        <h2 class=\"mt-5\">{{ title }}</h2>
        <div class=\"row\">
            {% for animanga in animangas %}
                {% if genreSlug is not null %}
                    {% if genreSlug|lower|replace({' ': ''}) in animanga.genres|lower|replace({' ': ''})|split(',') %}
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
                {% endif %}
                {% else %}
                    <div class=\"col col-md-4\" style=\"margin-bottom: 3em; width: 20% !important;\">
                        <div class=\"animanga-container p-3 text-center\">
                            <a href=\"{{ path('animanga', {
                                slug: animanga.id
                            }) }}\"><img class=\"imageListe\" src=\"{{ animanga.image }}\" data-src=\"{{ animanga.image }}\" alt=\"Animanga image\">
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
            {% endif %}
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "browse.html.twig", "/var/www/symfony/templates/browse.html.twig");
    }
}
