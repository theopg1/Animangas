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

/* @EasyAdmin/includes/_js_assets.html.twig */
class __TwigTemplate_f4d207544d69811a2d4ec51155cefa20f43dc047f8f94fbbd017c4109482c16f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_js_assets.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assets"]) || array_key_exists("assets", $context) ? $context["assets"] : (function () { throw new RuntimeError('Variable "assets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 3
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["js_asset"], "preload", [], "any", false, false, false, 3)) {
                // line 4
                echo "        <link rel=\"preload\" href=\"";
                echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "preload", twig_get_attribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 4), ["as" => "script", "nopush" => twig_get_attribute($this->env, $this->source, $context["js_asset"], "nopush", [], "any", false, false, false, 4)]);
                echo "\"
        ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 5));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html_attr");
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
    ";
            } else {
                // line 7
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 7)), "html", null, true);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["js_asset"], "async", [], "any", false, false, false, 7)) ? ("async") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["js_asset"], "defer", [], "any", false, false, false, 7)) ? ("defer") : (""));
                echo "
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html_attr");
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "></script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/includes/_js_assets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  67 => 7,  52 => 5,  47 => 4,  44 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var assets \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto[] #}
{% for js_asset in assets %}
    {% if js_asset.preload %}
        <link rel=\"preload\" href=\"{{ ea_call_function_if_exists('preload', js_asset.value, { as: 'script', nopush: js_asset.nopush }) }}\"
        {% for attr, value in js_asset.htmlAttributes %}{{ attr }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
    {% else %}
        <script src=\"{{ asset(js_asset.value) }}\" {{ js_asset.async ? 'async' }} {{ js_asset.defer ? 'defer' }}
        {% for attr, value in js_asset.htmlAttributes %}{{ attr }}=\"{{ value|e('html_attr') }}\" {% endfor %}></script>
    {% endif %}
{% endfor %}
", "@EasyAdmin/includes/_js_assets.html.twig", "/var/www/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/includes/_js_assets.html.twig");
    }
}
