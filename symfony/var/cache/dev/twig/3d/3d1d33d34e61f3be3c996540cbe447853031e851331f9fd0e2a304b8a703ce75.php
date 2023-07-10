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

/* animanga.html.twig */
class __TwigTemplate_d9bd61525ea18312a6f7b694def2f365c92b0146f174046bb3faccd1bdf7eb89 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animanga.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "animanga.html.twig", 1);
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
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
                        <img class=\"imageAnimanga\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"Square placeholder img\">
                    </a>
                    <br>
                    <p style=\"margin-top: 1em;\"><strong>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</strong></p>
                    <span>Genres : ";
        // line 17
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 17, $this->source); })()), "genres", [], "any", false, false, false, 17), ["," => " |"]), "html", null, true);
        echo "</span>
                    <br><br>
                    ";
        // line 19
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), "Manga"))) {
            // line 20
            echo "                        <span>Nombre de tomes : ";
            ((twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 20, $this->source); })()), "tomes", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 20, $this->source); })()), "tomes", [], "any", false, false, false, 20), "html", null, true))) : (print ("Inconnu")));
            echo "</span>
                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), "Anime"))) {
            // line 22
            echo "                        <span>Nombre d'épisodes : ";
            ((twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 22, $this->source); })()), "episodes", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 22, $this->source); })()), "episodes", [], "any", false, false, false, 22), "html", null, true))) : (print ("Inconnu")));
            echo "</span>
                    ";
        }
        // line 24
        echo "                    <br>
                    <span>Date de sortie : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 25, $this->source); })()), "releaseDate", [], "any", false, false, false, 25), "html", null, true);
        echo "</span>
                    <br><br>
                    <span>Status : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 27, $this->source); })()), "status", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div>
                <h1 class=\"mt-5\" style=\"text-align: center; width: fit-content\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</h1>
                <h2 class=\"mt-5\" style=\"text-align: center; width: fit-content\">Titre original : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 32, $this->source); })()), "originalTitle", [], "any", false, false, false, 32), "html", null, true);
        echo "</h2>
                <h2 class=\"mt-5\" style=\"text-align: center; width: fit-content\">Type : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), "html", null, true);
        echo "</h2>
                <p style=\"width: 65%; margin-top: 3em; font-size: 15pt;\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animanga"]) || array_key_exists("animanga", $context) ? $context["animanga"] : (function () { throw new RuntimeError('Variable "animanga" does not exist.', 34, $this->source); })()), "synopsis", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

    <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["type" => "text", "list" => "datalist", "style" => ""]]);
        // line 43
        echo "
           <div>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'errors');
        echo "
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <p class=\"mt-2\">Commentaire :</p>
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "comment", [], "any", false, false, false, 51), 'widget', ["attr" => ["style" => "margin-left: 1em; display: block; margin-bottom: 1em; width: 95%; height: 9em; resize: none;"]]);
        // line 53
        echo "
        </div>
    </div>

    <button>Send</button>
    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "

    <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["singleAvis"]) {
            // line 63
            echo "        <div>
            <h3>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["singleAvis"], "user", [], "any", false, false, false, 64), "username", [], "any", false, false, false, 64), "html", null, true);
            echo "</h3>
           <p class=\"mt-2\"><strong>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["singleAvis"], "comment", [], "any", false, false, false, 65), "html", null, true);
            echo "</strong></p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singleAvis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "animanga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 68,  197 => 65,  193 => 64,  190 => 63,  186 => 62,  179 => 58,  172 => 53,  170 => 51,  161 => 45,  157 => 43,  155 => 41,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  126 => 27,  121 => 25,  118 => 24,  112 => 22,  110 => 21,  105 => 20,  103 => 19,  98 => 17,  94 => 16,  86 => 13,  82 => 12,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
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

    <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

    {{ form_start(form, {
        'attr': {'type': 'text', 'list': 'datalist', 'style': ''}
    }) }}
           <div>
        {{ form_errors(form) }}
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <p class=\"mt-2\">Commentaire :</p>
            {{ form_widget(form.comment, {
                'attr': {'style': 'margin-left: 1em; display: block; margin-bottom: 1em; width: 95%; height: 9em; resize: none;'}
            }) }}
        </div>
    </div>

    <button>Send</button>
    {{ form_end(form) }}

    <div class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\"></div>

    {% for singleAvis in avis %}
        <div>
            <h3>{{ singleAvis.user.username }}</h3>
           <p class=\"mt-2\"><strong>{{ singleAvis.comment }}</strong></p>
        </div>
    {% endfor %}
</div>
{% endblock %}", "animanga.html.twig", "/var/www/symfony/templates/animanga.html.twig");
    }
}
