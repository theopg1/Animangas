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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_587b87ecc8b4a6722360832568b75a4c92777bbfdf9bb988826612f479727be1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        // line 5
        $context["__internal_c95be919bc33b974fc0f99e86c48b72468bd3568d03b5bbd28c8bfabb5b4180b"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 19
        $context["has_batch_actions"] = (1 === twig_compare(twig_length_filter($this->env, (isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 19, $this->source); })())), 0));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        (((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 7, $this->source); })())), 0))) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 7, $this->source); })())), "name", [], "any", false, false, false, 7)), "html", null, true))) : (print ("")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("ea-index" . (((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 8, $this->source); })())), 0))) ? ((" ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 8, $this->source); })())), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 11
        ob_start();
        // line 12
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 12, $this->source); })()), "crud", [], "any", false, false, false, 12), "customPageTitle", [0 => "index"], "method", false, false, false, 12);
        // line 13
        echo "        ";
        echo (((null === (isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 13, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 14, $this->source); })()), "crud", [], "any", false, false, false, 14), "defaultPageTitle", [0 => "index"], "method", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 14, $this->source); })()), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 15
(isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 15, $this->source); })()), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15),         // line 5
(isset($context["__internal_c95be919bc33b974fc0f99e86c48b72468bd3568d03b5bbd28c8bfabb5b4180b"]) || array_key_exists("__internal_c95be919bc33b974fc0f99e86c48b72468bd3568d03b5bbd28c8bfabb5b4180b", $context) ? $context["__internal_c95be919bc33b974fc0f99e86c48b72468bd3568d03b5bbd28c8bfabb5b4180b"] : (function () { throw new RuntimeError('Variable "__internal_c95be919bc33b974fc0f99e86c48b72468bd3568d03b5bbd28c8bfabb5b4180b" does not exist.', 5, $this->source); })()))));
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 21
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 21, $this->source); })())), 0))) {
            // line 22
            echo "        <div class=\"datagrid-filters\">
            ";
            // line 23
            $this->displayBlock('filters', $context, $blocks);
            // line 36
            echo "        </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('global_actions', $context, $blocks);
        // line 46
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 24
        echo "                ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 24), "query", [], "any", false, true, false, 24), "all", [], "any", false, true, false, 24), "filters", [], "array", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 24), "query", [], "any", false, true, false, 24), "all", [], "any", false, true, false, 24), "filters", [], "array", false, false, false, 24), [])) : ([])));
        // line 25
        echo "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 26), "includeReferrer", [], "method", false, false, false, 26), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        echo (((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 26, $this->source); })())) ? ("action-filters-applied") : (""));
        echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 27, $this->source); })()), "i18n", [], "any", false, false, false, 27), "translationParameters", [], "any", false, false, false, 27), "EasyAdminBundle"), "html", null, true);
        if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 27, $this->source); })())) {
            echo " <span class=\"text-primary\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 27, $this->source); })())), "html", null, true);
            echo ")</span>";
        }
        // line 28
        echo "                    </a>
                    ";
        // line 29
        if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 30), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 34
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 40
        echo "        <div class=\"global-actions\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["global_actions"]) || array_key_exists("global_actions", $context) ? $context["global_actions"] : (function () { throw new RuntimeError('Variable "global_actions" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 42
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 42), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 47
        echo "        ";
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "            <div class=\"batch-actions\" style=\"display: none\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 50
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 50), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </div>
        ";
        }
        // line 54
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 58
        echo "    ";
        // line 59
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "get", [0 => "sort"], "method", false, false, false, 59)));
        // line 60
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "get", [0 => "sort"], "method", false, false, false, 60));
        // line 61
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 62
        echo "    ";
        $context["has_footer"] = (0 !== twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 62, $this->source); })())), 0));
        // line 63
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 63, $this->source); })()), "crud", [], "any", false, false, false, 63), "isSearchEnabled", [], "any", false, false, false, 63);
        // line 64
        echo "    ";
        $context["has_filters"] = (1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 64, $this->source); })())), 0));
        // line 65
        echo "    ";
        $context["num_results"] = twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 65, $this->source); })()));
        // line 66
        echo "
    <table class=\"table datagrid ";
        // line 67
        echo ((twig_test_empty((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 67, $this->source); })()))) ? ("datagrid-empty") : (""));
        echo "\">
        ";
        // line 68
        if ((1 === twig_compare((isset($context["num_results"]) || array_key_exists("num_results", $context) ? $context["num_results"] : (function () { throw new RuntimeError('Variable "num_results" does not exist.', 68, $this->source); })()), 0))) {
            // line 69
            echo "            <thead>
            ";
            // line 70
            $this->displayBlock('table_head', $context, $blocks);
            // line 103
            echo "            </thead>
        ";
        }
        // line 105
        echo "
        <tbody>
        ";
        // line 107
        $this->displayBlock('table_body', $context, $blocks);
        // line 188
        echo "        </tbody>

        <tfoot>
        ";
        // line 191
        $this->displayBlock('table_footer', $context, $blocks);
        // line 193
        echo "        </tfoot>
    </table>

    ";
        // line 196
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 196, $this->source); })())), 0))) {
            // line 197
            echo "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 198
            $this->displayBlock('paginator', $context, $blocks);
            // line 201
            echo "        </div>
    ";
        }
        // line 203
        echo "
    ";
        // line 204
        $this->displayBlock('delete_form', $context, $blocks);
        // line 207
        echo "
    ";
        // line 208
        if ((isset($context["has_filters"]) || array_key_exists("has_filters", $context) ? $context["has_filters"] : (function () { throw new RuntimeError('Variable "has_filters" does not exist.', 208, $this->source); })())) {
            // line 209
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 211
        echo "
    ";
        // line 212
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 212, $this->source); })())) {
            // line 213
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 71
        echo "                <tr>
                    ";
        // line 72
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 79
        echo "
                    ";
        // line 80
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 81
        echo "                    ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 82
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 82, $this->source); })())), "fields", [], "any", true, true, false, 82) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 82, $this->source); })())), "fields", [], "any", false, false, false, 82)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 82, $this->source); })())), "fields", [], "any", false, false, false, 82)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 83
            echo "                        ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 83, $this->source); })()), "search", [], "any", false, false, false, 83), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 83)], "method", false, false, false, 83);
            // line 84
            echo "                        ";
            $context["next_sort_direction"] = (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 84, $this->source); })())) ? ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 84, $this->source); })()), "search", [], "any", false, false, false, 84), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 84)], "method", false, false, false, 84), (isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 84, $this->source); })())))) ? ((isset($context["ea_sort_asc"]) || array_key_exists("ea_sort_asc", $context) ? $context["ea_sort_asc"] : (function () { throw new RuntimeError('Variable "ea_sort_asc" does not exist.', 84, $this->source); })())) : ((isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 84, $this->source); })())))) : ((isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 84, $this->source); })())));
            // line 85
            echo "                        ";
            $context["column_icon"] = (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 85, $this->source); })())) ? ((((0 === twig_compare((isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 85, $this->source); })()), (isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 85, $this->source); })())))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 86
            echo "
                        <th class=\"";
            // line 87
            echo (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 87, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 87)) ? ("field-virtual") : (""));
            echo " header-for-";
            echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 87), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($__internal_compile_0 = (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 87, $this->source); })())) && is_string($__internal_compile_1 = "field-") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))); }), ""), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 87), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 87, $this->source); })()), "i18n", [], "any", false, false, false, 87), "textDirection", [], "any", false, false, false, 87), "html", null, true);
            echo "\">
                            ";
            // line 88
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 88)) {
                // line 89
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 89) => (isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 89, $this->source); })())]]), "includeReferrer", [], "method", false, false, false, 89), "html", null, true);
                echo "\">
                                    ";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 90);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, (isset($context["column_icon"]) || array_key_exists("column_icon", $context) ? $context["column_icon"] : (function () { throw new RuntimeError('Variable "column_icon" does not exist.', 90, $this->source); })()), "html", null, true);
                echo "\"></i>
                                </a>
                            ";
            } else {
                // line 93
                echo "                                <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 93);
                echo "</span>
                            ";
            }
            // line 95
            echo "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                    <th ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 98, $this->source); })()), "crud", [], "any", false, false, false, 98), "showEntityActionsAsDropdown", [], "any", false, false, false, 98)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 98, $this->source); })()), "i18n", [], "any", false, false, false, 98), "textDirection", [], "any", false, false, false, 98), "html", null, true);
        echo "\">
                        <span class=\"sr-only\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 99, $this->source); })()), "i18n", [], "any", false, false, false, 99), "translationParameters", [], "any", false, false, false, 99), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </th>
                </tr>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 108
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 108, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 109
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 109)) {
                // line 110
                echo "                    ";
                $context["some_results_are_hidden"] = true;
                // line 111
                echo "                ";
            } else {
                // line 112
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 112), "html", null, true);
                echo "\">
                        ";
                // line 113
                if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 113, $this->source); })())) {
                    // line 114
                    echo "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 116), "html", null, true);
                    echo "\">
                                </div>
                            </td>
                        ";
                }
                // line 120
                echo "
                        ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 121));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 122
                    echo "                            <td data-label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 122), "html_attr");
                    echo "\" class=\"";
                    echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 122), (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 122, $this->source); })())))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 122), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 122), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 122, $this->source); })()), "i18n", [], "any", false, false, false, 122), "textDirection", [], "any", false, false, false, 122), "html", null, true);
                    echo "\">
                                ";
                    // line 123
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 123), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "
                        ";
                // line 127
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 154
                echo "                    </tr>

                ";
            }
            // line 157
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 158
            echo "                ";
            $this->displayBlock('table_body_empty', $context, $blocks);
            // line 178
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "
            ";
        // line 180
        if ((isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 180, $this->source); })())) {
            // line 181
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"";
            // line 182
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 182, $this->source); })())), "fields", [], "any", false, false, false, 182)) + 1), "html", null, true);
            echo "\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 187
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        // line 128
        echo "                            <td class=\"actions ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 128, $this->source); })()), "crud", [], "any", false, false, false, 128), "showEntityActionsAsDropdown", [], "any", false, false, false, 128)) ? ("actions-as-dropdown") : (""));
        echo "\">
                                ";
        // line 129
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 129, $this->source); })()), "actions", [], "any", false, false, false, 129), "count", [], "any", false, false, false, 129), 0))) {
            // line 130
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 130, $this->source); })()), "crud", [], "any", false, false, false, 130), "showEntityActionsAsDropdown", [], "any", false, false, false, 130)) {
                // line 131
                echo "                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                ";
                // line 134
                echo "                                                ";
                // line 135
                echo "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 141, $this->source); })()), "actions", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 142
                    echo "                                                    ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 142), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 142, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 142, $this->source); })()), "crud", [], "any", false, false, false, 142), "showEntityActionsAsDropdown", [], "any", false, false, false, 142)], false);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 147
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 147, $this->source); })()), "actions", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 148
                    echo "                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 148), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 148, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 148, $this->source); })()), "crud", [], "any", false, false, false, 148), "showEntityActionsAsDropdown", [], "any", false, false, false, 148)], false);
                    echo "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                                    ";
            }
            // line 151
            echo "                                ";
        }
        // line 152
        echo "                            </td>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 158
    public function block_table_body_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body_empty"));

        // line 159
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 14));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 160
            echo "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 169
            if ((0 === twig_compare(3, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 169)))) {
                // line 170
                echo "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 172, $this->source); })()), "i18n", [], "any", false, false, false, 172), "translationParameters", [], "any", false, false, false, 172), "EasyAdminBundle"), "html", null, true);
                echo "
                                </td>
                            </tr>
                        ";
            }
            // line 176
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 191
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 192
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 198
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 199
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 199, $this->source); })()), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 199), ["render_detailed_pagination" =>  !(isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 199, $this->source); })())]);
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 204
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 205
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  809 => 205,  802 => 204,  792 => 199,  785 => 198,  778 => 192,  771 => 191,  764 => 177,  750 => 176,  743 => 172,  739 => 170,  737 => 169,  726 => 160,  708 => 159,  701 => 158,  693 => 152,  690 => 151,  687 => 150,  678 => 148,  673 => 147,  668 => 144,  659 => 142,  655 => 141,  647 => 135,  645 => 134,  641 => 131,  638 => 130,  636 => 129,  631 => 128,  624 => 127,  617 => 187,  610 => 183,  606 => 182,  603 => 181,  601 => 180,  598 => 179,  592 => 178,  589 => 158,  576 => 157,  571 => 154,  569 => 127,  566 => 126,  557 => 123,  544 => 122,  540 => 121,  537 => 120,  530 => 116,  526 => 114,  524 => 113,  519 => 112,  516 => 111,  513 => 110,  510 => 109,  491 => 108,  484 => 107,  473 => 99,  465 => 98,  462 => 97,  455 => 95,  449 => 93,  441 => 90,  436 => 89,  434 => 88,  422 => 87,  419 => 86,  416 => 85,  413 => 84,  410 => 83,  405 => 82,  402 => 81,  400 => 80,  397 => 79,  389 => 73,  387 => 72,  384 => 71,  377 => 70,  366 => 213,  364 => 212,  361 => 211,  355 => 209,  353 => 208,  350 => 207,  348 => 204,  345 => 203,  341 => 201,  339 => 198,  336 => 197,  334 => 196,  329 => 193,  327 => 191,  322 => 188,  320 => 107,  316 => 105,  312 => 103,  310 => 70,  307 => 69,  305 => 68,  301 => 67,  298 => 66,  295 => 65,  292 => 64,  289 => 63,  286 => 62,  283 => 61,  280 => 60,  277 => 59,  275 => 58,  268 => 57,  261 => 54,  257 => 52,  248 => 50,  244 => 49,  241 => 48,  238 => 47,  231 => 46,  223 => 44,  214 => 42,  210 => 41,  207 => 40,  200 => 39,  192 => 34,  184 => 30,  182 => 29,  179 => 28,  172 => 27,  166 => 26,  163 => 25,  160 => 24,  153 => 23,  145 => 46,  143 => 39,  140 => 38,  136 => 36,  134 => 23,  131 => 22,  128 => 21,  121 => 20,  114 => 11,  111 => 5,  110 => 15,  109 => 14,  107 => 13,  105 => 12,  103 => 11,  96 => 10,  83 => 8,  70 => 7,  63 => 4,  61 => 19,  59 => 5,  49 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityDtoCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'ea-index' ~ (entities|length > 0 ? ' ea-index-' ~ entities|first.name : '') %}

{% block content_title %}
    {%- apply spaceless -%}
        {% set custom_page_title = ea.crud.customPageTitle('index') %}
        {{ custom_page_title is null
            ? (ea.crud.defaultPageTitle('index')|trans(ea.i18n.translationParameters, 'EasyAdminBundle'))|raw
            : (custom_page_title|trans(ea.i18n.translationParameters))|raw }}
    {%- endapply -%}
{% endblock %}

{% set has_batch_actions = batch_actions|length > 0 %}
{% block page_actions %}
    {% if filters|length > 0 %}
        <div class=\"datagrid-filters\">
            {% block filters %}
                {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"{{ ea_url().setAction('renderFilters').includeReferrer() }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled {{ applied_filters ? 'action-filters-applied' }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> {{ 'filter.title'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}{% if applied_filters %} <span class=\"text-primary\">({{ applied_filters|length }})</span>{% endif %}
                    </a>
                    {% if applied_filters %}
                        <a href=\"{{ ea_url().unset('filters') }}\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    {% endif %}
                </div>
            {% endblock filters %}
        </div>
    {% endif %}

    {% block global_actions %}
        <div class=\"global-actions\">
            {% for action in global_actions %}
                {{ include(action.templatePath, { action: action }, with_context = false) }}
            {% endfor %}
        </div>
    {% endblock global_actions %}
    {% block batch_actions %}
        {% if has_batch_actions %}
            <div class=\"batch-actions\" style=\"display: none\">
                {% for action in batch_actions %}
                    {{ include(action.templatePath, { action: action }, with_context = false) }}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock page_actions %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_field_name = app.request.get('sort')|keys|first %}
    {% set sort_order = app.request.get('sort')|first %}
    {% set some_results_are_hidden = false %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set num_results = entities|length %}

    <table class=\"table datagrid {{ entities is empty ? 'datagrid-empty' }}\">
        {% if num_results > 0 %}
            <thead>
            {% block table_head %}
                <tr>
                    {% if has_batch_actions %}
                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    {% endif %}

                    {% set ea_sort_asc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::ASC') %}
                    {% set ea_sort_desc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::DESC') %}
                    {% for field in entities|first.fields ?? [] %}
                        {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                        {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == ea_sort_desc ? ea_sort_asc : ea_sort_desc) : ea_sort_desc %}
                        {% set column_icon = is_sorting_field ? (next_sort_direction == ea_sort_desc ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                        <th class=\"{{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} header-for-{{ field.cssClass|split(' ')|filter(class => class starts with 'field-')|join('') }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                            {% if field.isSortable %}
                                <a href=\"{{ ea_url({ page: 1, sort: { (field.property): next_sort_direction } }).includeReferrer() }}\">
                                    {{ field.label|raw }} <i class=\"fa fa-fw {{ column_icon }}\"></i>
                                </a>
                            {% else %}
                                <span>{{ field.label|raw }}</span>
                            {% endif %}
                        </th>
                    {% endfor %}

                    <th {% if ea.crud.showEntityActionsAsDropdown %}width=\"10px\"{% endif %} dir=\"{{ ea.i18n.textDirection }}\">
                        <span class=\"sr-only\">{{ 'action.entity_actions'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}</span>
                    </th>
                </tr>
            {% endblock table_head %}
            </thead>
        {% endif %}

        <tbody>
        {% block table_body %}
            {% for entity in entities %}
                {% if not entity.isAccessible %}
                    {% set some_results_are_hidden = true %}
                {% else %}
                    <tr data-id=\"{{ entity.primaryKeyValueAsString }}\">
                        {% if has_batch_actions %}
                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"{{ entity.primaryKeyValue }}\">
                                </div>
                            </td>
                        {% endif %}

                        {% for field in entity.fields %}
                            <td data-label=\"{{ field.label|e('html_attr') }}\" class=\"{{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\">
                                {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
                            </td>
                        {% endfor %}

                        {% block entity_actions %}
                            <td class=\"actions {{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown' }}\">
                                {% if entity.actions.count > 0 %}
                                    {% if ea.crud.showEntityActionsAsDropdown %}
                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                {# don't use FontAwesome 'fa-ellipsis-h' icon here because it doesn't look good #}
                                                {# this icon is 'dots-horizontal' icon from https://heroicons.com/ #}
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                {% for action in entity.actions %}
                                                    {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                                {% endfor %}
                                            </div>
                                        </div>
                                    {% else %}
                                        {% for action in entity.actions %}
                                            {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endblock entity_actions %}
                    </tr>

                {% endif %}
            {% else %}
                {% block table_body_empty %}
                    {% for i in 1..14 %}
                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        {% if 3 == loop.index %}
                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    {{ 'datagrid.no_results'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endblock table_body_empty %}
            {% endfor %}

            {% if some_results_are_hidden %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"{{ entities|first.fields|length + 1 }}\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>

        <tfoot>
        {% block table_footer %}
        {% endblock table_footer %}
        </tfoot>
    </table>

    {% if entities|length > 0 %}
        <div class=\"content-panel-footer without-padding without-border\">
            {% block paginator %}
                {{ include(ea.templatePath('crud/paginator'), { render_detailed_pagination: not some_results_are_hidden }) }}
            {% endblock paginator %}
        </div>
    {% endif %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context = false) }}
    {% endblock delete_form %}

    {% if has_filters %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}

    {% if has_batch_actions %}
        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context = false) }}
    {% endif %}
{% endblock main %}
", "@EasyAdmin/crud/index.html.twig", "/var/www/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/index.html.twig");
    }
}
