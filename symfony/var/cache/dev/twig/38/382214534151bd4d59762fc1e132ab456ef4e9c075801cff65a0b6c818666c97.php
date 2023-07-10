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

/* user.html.twig */
class __TwigTemplate_12a9c747f242be58b6be291ffc452c7cbdbb5df34b5e3ce9d868d7b27ff49924 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user.html.twig", 1);
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
        echo "
    ";
        // line 7
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "
        <div style=\"max-width: 1500px; margin: auto;\">

            <div>
                <div class=\"row\" style=\"display: flex; flex-flow: row\">

                    <div class=\"col col-md-4\">
                        <div class=\"animanga-container p-3 text-center\">
                            ";
            // line 19
            echo "                            <br>
                            <p style=\"margin-top: 1em;\"><strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20), "html", null, true);
            echo "</strong></p>
                        </div>
                    </div>
                    <div>
                        <p style=\"width: 65%; margin-top: 3em; font-size: 15pt;\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["singleAvis"]) {
                // line 32
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animanga", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 33
$context["singleAvis"], "animanga", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                // line 34
                echo "\">
                    <h3>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singleAvis"], "animanga", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true);
                echo " | <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singleAvis"], "animanga", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
                echo "</strong> :</h3>
                </a>
                <p style=\"font-size: 15pt;\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singleAvis"], "comment", [], "any", false, false, false, 37), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singleAvis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
        </div>



    ";
        } else {
            // line 45
            echo "
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userSession"]) {
                // line 47
                echo "            <p class=\"mt-2\"><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userSession"], "username", [], "any", false, false, false, 47), "html", null, true);
                echo "</strong></p>

        <div style=\"max-width: 1500px; margin: auto;\">

            <div>
                <div class=\"row\" style=\"display: flex; flex-flow: row\">

                    <div class=\"col col-md-4\">
                        <div class=\"animanga-container p-3 text-center\">
                            ";
                // line 59
                echo "                            <br>
                            <p style=\"margin-top: 1em;\"><strong>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userSession"], "username", [], "any", false, false, false, 60), "html", null, true);
                echo "</strong></p>
                        </div>
                    </div>
                    <div>
                        <p style=\"width: 65%; margin-top: 3em; font-size: 15pt;\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userSession"], "description", [], "any", false, false, false, 64), "html", null, true);
                echo "</p>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

        </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userSession'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "    ";
        }
        // line 75
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  189 => 74,  173 => 64,  166 => 60,  163 => 59,  150 => 47,  146 => 46,  143 => 45,  135 => 39,  127 => 37,  120 => 35,  117 => 34,  115 => 33,  113 => 32,  109 => 31,  99 => 24,  92 => 20,  89 => 19,  79 => 8,  77 => 7,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - {% endblock %}

{% block body %}

    {% if id is not null %}

        <div style=\"max-width: 1500px; margin: auto;\">

            <div>
                <div class=\"row\" style=\"display: flex; flex-flow: row\">

                    <div class=\"col col-md-4\">
                        <div class=\"animanga-container p-3 text-center\">
                            {# <a target=\"_blank\" href=\"{{ user.profile_image }}\">
                                <img class=\"imageAnimanga\" src=\"{{ user.profile_image }}\" data-src=\"{{ user.profile_image }}\" alt=\"Square placeholder img\">
                            </a>#}
                            <br>
                            <p style=\"margin-top: 1em;\"><strong>{{ user.username }}</strong></p>
                        </div>
                    </div>
                    <div>
                        <p style=\"width: 65%; margin-top: 3em; font-size: 15pt;\">{{ user.description }}</p>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

            {% for singleAvis in avis %}
                <a href=\"{{ path('animanga', {
                    slug: singleAvis.animanga.id
                }) }}\">
                    <h3>{{singleAvis.animanga.id}} | <strong>{{singleAvis.animanga.title}}</strong> :</h3>
                </a>
                <p style=\"font-size: 15pt;\">{{ singleAvis.comment }}</p>
            {% endfor %}

        </div>



    {% else %}

        {% for userSession in user %}
            <p class=\"mt-2\"><strong>{{ userSession.username }}</strong></p>

        <div style=\"max-width: 1500px; margin: auto;\">

            <div>
                <div class=\"row\" style=\"display: flex; flex-flow: row\">

                    <div class=\"col col-md-4\">
                        <div class=\"animanga-container p-3 text-center\">
                            {# <a target=\"_blank\" href=\"{{ userSession.profile_image }}\">
                                <img class=\"imageAnimanga\" src=\"{{ userSession.profile_image }}\" data-src=\"{{ userSession.profile_image }}\" alt=\"Square placeholder img\">
                            </a>#}
                            <br>
                            <p style=\"margin-top: 1em;\"><strong>{{ userSession.username }}</strong></p>
                        </div>
                    </div>
                    <div>
                        <p style=\"width: 65%; margin-top: 3em; font-size: 15pt;\">{{ userSession.description }}</p>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

        </div>

        {% endfor %}
    {% endif %}

{% endblock %}
", "user.html.twig", "/var/www/symfony/templates/user.html.twig");
    }
}
