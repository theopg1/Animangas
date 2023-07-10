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

/* animangaNoComment.html.twig */
class __TwigTemplate_c5f413ae1080978576f6b9b324f5b7fda14c496dbc57d7a2c46d18d9210e7172 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animangaNoComment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "animangaNoComment.html.twig", 1);
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

    <div>
        <div class=\"row\" style=\"display: flex; flex-flow: row\">

            <div class=\"col col-md-4\">
                <div class=\"animanga-container p-3 text-center\">
                    <a target=\"_blank\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
                        <img class=\"imageAnimanga\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14), "html", null, true);
        echo "\" alt=\"Square placeholder img\">
                    </a>
                    <br>
                    <p style=\"margin-top: 1em;\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</strong></p>
                    <span>Genres : ";
        // line 18
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 18, $this->source); })()), "genres", [], "any", false, false, false, 18), ["," => " |"]), "html", null, true);
        echo "</span>
                    <br><br>
                    ";
        // line 20
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "Manga"))) {
            // line 21
            echo "                        <span>Nombre de tomes : ";
            ((twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 21, $this->source); })()), "tomes", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 21, $this->source); })()), "tomes", [], "any", false, false, false, 21), "html", null, true))) : (print ("Inconnu")));
            echo "</span>
                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 22, $this->source); })()), "type", [], "any", false, false, false, 22), "Anime"))) {
            // line 23
            echo "                        <span>Nombre d'épisodes : ";
            ((twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 23, $this->source); })()), "episodes", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 23, $this->source); })()), "episodes", [], "any", false, false, false, 23), "html", null, true))) : (print ("Inconnu")));
            echo "</span>
                    ";
        }
        // line 25
        echo "                    <br>
                    <span>Date de sortie : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 26, $this->source); })()), "releaseDate", [], "any", false, false, false, 26), "html", null, true);
        echo "</span>
                    <br><br>
                    <span>Status : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div>
                <h1 class=\"mt-5\" style=\"text-align: center; width: fit-content\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h1>
                <h2 class=\"mt-5\" style=\"text-align: center; width: fit-content\">Titre original : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 33, $this->source); })()), "originalTitle", [], "any", false, false, false, 33), "html", null, true);
        echo "</h2>
                <h2 class=\"mt-5\" style=\"text-align: center; width: fit-content\">Type : ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), "html", null, true);
        echo "</h2>
                <p style=\"width: 65%; margin-top: 3em; font-size: 15pt;\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 35, $this->source); })()), "synopsis", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "animangaNoComment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  142 => 34,  138 => 33,  134 => 32,  127 => 28,  122 => 26,  119 => 25,  113 => 23,  111 => 22,  106 => 21,  104 => 20,  99 => 18,  95 => 17,  87 => 14,  83 => 13,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - {% endblock %}

{% block body %}
<div class=\"container\">

    <div>
        <div class=\"row\" style=\"display: flex; flex-flow: row\">

            <div class=\"col col-md-4\">
                <div class=\"animanga-container p-3 text-center\">
                    <a target=\"_blank\" href=\"{{ animanga.image }}\">
                        <img class=\"imageAnimanga\" src=\"{{ animanga.image }}\" data-src=\"{{ animanga.image }}\" alt=\"Square placeholder img\">
                    </a>
                    <br>
                    <p style=\"margin-top: 1em;\"><strong>{{ animanga.title }}</strong></p>
                    <span>Genres : {{ animanga.genres|replace({',': ' |'}) }}</span>
                    <br><br>
                    {% if animanga.type == \"Manga\" %}
                        <span>Nombre de tomes : {{ animanga.tomes ? animanga.tomes : 'Inconnu' }}</span>
                    {% elseif animanga.type == \"Anime\" %}
                        <span>Nombre d'épisodes : {{ animanga.episodes ? animanga.episodes : 'Inconnu' }}</span>
                    {% endif %}
                    <br>
                    <span>Date de sortie : {{ animanga.releaseDate }}</span>
                    <br><br>
                    <span>Status : {{ animanga.status }}</span>
                </div>
            </div>
            <div>
                <h1 class=\"mt-5\" style=\"text-align: center; width: fit-content\">{{ animanga.title }}</h1>
                <h2 class=\"mt-5\" style=\"text-align: center; width: fit-content\">Titre original : {{ animanga.originalTitle }}</h2>
                <h2 class=\"mt-5\" style=\"text-align: center; width: fit-content\">Type : {{ animanga.type }}</h2>
                <p style=\"width: 65%; margin-top: 3em; font-size: 15pt;\">{{ animanga.synopsis }}</p>
            </div>
        </div>
    </div>

</div>

{% endblock %}
", "animangaNoComment.html.twig", "/var/www/symfony/templates/animangaNoComment.html.twig");
    }
}
