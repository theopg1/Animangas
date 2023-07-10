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

/* base2.html.twig */
class __TwigTemplate_111d1e54f5837621f1e97bf1fa869022004fef610b2513e9e9a4889df7c7edb0 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">

        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"/styles/app.css\">

        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    </head>

    ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "
    <body>

    <header>
    <!-- Main Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark  mb-5\" style=\"background-color: #27333A;\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homePage");
        echo "\">
                <img class=\"\" src=\"/favicon-32x32.png\" data-src=\"/favicon-32x32.png\" alt=\"Icone\">
                Animangas
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genreRandom");
        echo "\">Random</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genreAnimanga");
        echo "\">Animangas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genreManga");
        echo "\">Mangas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genreAnime");
        echo "\">Animes</a>
                    </li>
                    <!-- Not Authenticated -->
                    <!-- <li class=\"nav-item\"><button href=\"#\" class=\"btn btn-primary btn-sm\">Login</button></li> -->
                    <!-- End Not Authenticated -->

                    <!-- If Authenticated -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-circle p-2\" style=\"font-size: 40px;\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loginPage");
        echo "\">Mon Profil</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Logout</a></li>
                        </ul>
                    </li>
                    <!-- End If Authenticated -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Main Navigation -->
    </header>

    ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
    <!-- Footer -->
    <div class=\"container mt-5\">
        <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
            <div class=\"col-md-4 d-flex align-items-center\">

            </div>

        </footer>
    </div>
    <!-- End Footer -->

    ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "
    </body>
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

        echo "Animangas !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 88,  225 => 87,  213 => 74,  201 => 23,  193 => 18,  186 => 17,  173 => 5,  163 => 90,  161 => 87,  147 => 75,  145 => 74,  130 => 62,  115 => 50,  109 => 47,  103 => 44,  97 => 41,  84 => 31,  75 => 24,  73 => 23,  68 => 20,  66 => 17,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Animangas !{% endblock %}</title>

        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">

        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"/styles/app.css\">

        {% block stylesheets %}

        {% endblock %}

    </head>

    {% block header %}{% endblock %}

    <body>

    <header>
    <!-- Main Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark  mb-5\" style=\"background-color: #27333A;\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('homePage') }}\">
                <img class=\"\" src=\"/favicon-32x32.png\" data-src=\"/favicon-32x32.png\" alt=\"Icone\">
                Animangas
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse d-flex justify-content-end\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"{{ path('genreRandom') }}\">Random</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"{{ path('genreAnimanga') }}\">Animangas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"{{ path('genreManga') }}\">Mangas</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" style=\"margin-top: 20px;\" href=\"{{ path('genreAnime') }}\">Animes</a>
                    </li>
                    <!-- Not Authenticated -->
                    <!-- <li class=\"nav-item\"><button href=\"#\" class=\"btn btn-primary btn-sm\">Login</button></li> -->
                    <!-- End Not Authenticated -->

                    <!-- If Authenticated -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-circle p-2\" style=\"font-size: 40px;\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('loginPage') }}\">Mon Profil</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Logout</a></li>
                        </ul>
                    </li>
                    <!-- End If Authenticated -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Main Navigation -->
    </header>

    {% block body %}{% endblock %}

    <!-- Footer -->
    <div class=\"container mt-5\">
        <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
            <div class=\"col-md-4 d-flex align-items-center\">

            </div>

        </footer>
    </div>
    <!-- End Footer -->

    {% block javascripts %}

    {% endblock %}

    </body>
</html>
", "base2.html.twig", "/var/www/symfony/templates/base2.html.twig");
    }
}
