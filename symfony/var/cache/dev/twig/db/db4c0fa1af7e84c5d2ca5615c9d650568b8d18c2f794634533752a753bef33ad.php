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

/* search.html.twig */
class __TwigTemplate_9d45a95598e322211760166daa8130b3bc147874c7efe91113f89eef500a1d7d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search.html.twig", 1);
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
    <h1>Search : ";
        // line 7
        (((isset($context["searchSlug"]) || array_key_exists("searchSlug", $context) ? $context["searchSlug"] : (function () { throw new RuntimeError('Variable "searchSlug" does not exist.', 7, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["searchSlug"]) || array_key_exists("searchSlug", $context) ? $context["searchSlug"] : (function () { throw new RuntimeError('Variable "searchSlug" does not exist.', 7, $this->source); })()), "html", null, true))) : (print ("")));
        echo "</h1>

    <div>
        <h2 class=\"mt-5\">Users :</h2>
        <div class=\"row\">
            ";
        // line 12
        if ( !(null === (isset($context["searchSlug"]) || array_key_exists("searchSlug", $context) ? $context["searchSlug"] : (function () { throw new RuntimeError('Variable "searchSlug" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 14
                echo "                    <div class=\"col col-md-4\">
                        <div class=\"animanga-container p-3 text-center\">
                            ";
                // line 19
                echo "                            <br>
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users", ["id" => twig_get_attribute($this->env, $this->source,                 // line 21
$context["user"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                // line 22
                echo "\">
                                <p style=\"margin-top: 1em;\"><strong>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 23), "html", null, true);
                echo "</strong></p>
                            </a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            ";
        }
        // line 29
        echo "        </div>
    </div>

    <div>
        <h2 class=\"mt-5\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " :</h2>
        <div class=\"row\">
                ";
        // line 35
        if ( !(null === (isset($context["searchSlug"]) || array_key_exists("searchSlug", $context) ? $context["searchSlug"] : (function () { throw new RuntimeError('Variable "searchSlug" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["animangas"]) || array_key_exists("animangas", $context) ? $context["animangas"] : (function () { throw new RuntimeError('Variable "animangas" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["animanga"]) {
                // line 37
                echo "                    <div class=\"col col-md-4\" style=\"margin-bottom: 3em; width: 20% !important;\">
                        <div class=\"animanga-container p-3 text-center\">
                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,                 // line 40
$context["animanga"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                // line 41
                echo "\"><img class=\"imageListe\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 41), "html", null, true);
                echo "\" data-src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "image", [], "any", false, false, false, 41), "html", null, true);
                echo "\" alt=\"Animanga image\">
                            </a>
                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source,                 // line 44
$context["animanga"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                // line 45
                echo "\">
                                <p class=\"mt-2\" ><strong>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "title", [], "any", false, false, false, 46), "html", null, true);
                echo "</strong></p>
                            </a>
                            ";
                // line 48
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["animanga"], "type", [], "any", false, false, false, 48), "Manga"))) {
                    // line 49
                    echo "                                <span>Nombre de tomes : ";
                    ((twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "tomes", [], "any", false, false, false, 49), "html", null, true))) : (print ("Inconnu")));
                    echo "</span>
                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 50
$context["animanga"], "type", [], "any", false, false, false, 50), "Anime"))) {
                    // line 51
                    echo "                                <span>Nombre d'épisodes : ";
                    ((twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animanga"], "episodes", [], "any", false, false, false, 51), "html", null, true))) : (print ("Inconnu")));
                    echo "</span>
                            ";
                }
                // line 53
                echo "                            <br>
                            <span>Genres : ";
                // line 54
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["animanga"], "genres", [], "any", false, false, false, 54), ["," => " |"]), "html", null, true);
                echo " </span>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animanga'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                ";
        }
        // line 59
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 59,  192 => 58,  182 => 54,  179 => 53,  173 => 51,  171 => 50,  166 => 49,  164 => 48,  159 => 46,  156 => 45,  154 => 44,  153 => 43,  145 => 41,  143 => 40,  142 => 39,  138 => 37,  133 => 36,  131 => 35,  126 => 33,  120 => 29,  117 => 28,  106 => 23,  103 => 22,  101 => 21,  100 => 20,  97 => 19,  93 => 14,  88 => 13,  86 => 12,  78 => 7,  75 => 6,  68 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - {{ title }}{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Search : {{ searchSlug ? searchSlug : '' }}</h1>

    <div>
        <h2 class=\"mt-5\">Users :</h2>
        <div class=\"row\">
            {% if searchSlug is not null %}
                {% for user in users %}
                    <div class=\"col col-md-4\">
                        <div class=\"animanga-container p-3 text-center\">
                            {# <a target=\"_blank\" href=\"{{ user.profile_image }}\">
                                <img class=\"imageAnimanga\" src=\"{{ user.profile_image }}\" data-src=\"{{ user.profile_image }}\" alt=\"Square placeholder img\">
                            </a>#}
                            <br>
                            <a href=\"{{ path('users', {
                                id: user.id
                            }) }}\">
                                <p style=\"margin-top: 1em;\"><strong>{{ user.username }}</strong></p>
                            </a>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>

    <div>
        <h2 class=\"mt-5\">{{ title }} :</h2>
        <div class=\"row\">
                {% if searchSlug is not null %}
                    {% for animanga in animangas %}
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
                            {% if animanga.type == \"Manga\" %}
                                <span>Nombre de tomes : {{ animanga.tomes ? animanga.tomes : 'Inconnu' }}</span>
                            {% elseif animanga.type == \"Anime\" %}
                                <span>Nombre d'épisodes : {{ animanga.episodes ? animanga.episodes : 'Inconnu' }}</span>
                            {% endif %}
                            <br>
                            <span>Genres : {{ animanga.genres|replace({',': ' |'}) }} </span>
                        </div>
                    </div>
                    {% endfor %}
                {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "search.html.twig", "/var/www/symfony/templates/search.html.twig");
    }
}
