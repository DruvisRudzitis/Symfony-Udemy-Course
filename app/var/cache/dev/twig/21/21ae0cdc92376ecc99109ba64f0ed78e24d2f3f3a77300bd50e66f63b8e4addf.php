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

/* base.html.twig */
class __TwigTemplate_22e0cbf88d6e6023f8efdb4883ae59d4260ff99c739fa4f17770c44b2bcac892 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'customsylesheets' => [$this, 'block_customsylesheets'],
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
            'main' => [$this, 'block_main'],
            'footer_links' => [$this, 'block_footer_links'],
            'customjavascripts' => [$this, 'block_customjavascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">

    <style>
        .form-control {
            background-color: #f8f5f5;
        }
    </style>

    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.min.css"), "html", null, true);
        echo "\">

    ";
        // line 20
        $this->displayBlock('customsylesheets', $context, $blocks);
        // line 21
        echo "
    <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>

<body class=\"text-center\">
<div class=\"container-fluid\">

    ";
        // line 29
        $this->displayBlock('menu', $context, $blocks);
        // line 50
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 53
        echo "    ";
        $this->displayBlock('footer_links', $context, $blocks);
        // line 93
        echo "</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<script>
    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    })
</script>
";
        // line 105
        $this->displayBlock('customjavascripts', $context, $blocks);
        // line 106
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_customsylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customsylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customsylesheets"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony 4 course app - video sharing service";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "        <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
            <h5 class=\"my-0 mr-md-auto font-weight-normal\"><a href=\"index.php\">Awesome Videos</a></h5>

            <form method=\"POST\" class=\"form-inline my-0 mr-md-auto\" action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_results");
        echo "\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"video title\" aria-label=\"Search video\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search video</button>
            </form>

            <nav class=\"my-2 my-md-0 mr-md-3\">
                <a class=\"p-2 text-dark\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_list");
        echo "\">Funny</a>
                <a class=\"p-2 text-dark\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_list");
        echo "\">Scary</a>
                <a class=\"p-2 text-dark\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_list");
        echo "\">Unbelievable</a>
                <a class=\"p-2 text-dark\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_list");
        echo "\">Inspirational</a>
                <a class=\"p-2 text-dark\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_list");
        echo "\">Motivating</a>
                <a class=\"p-2 text-dark\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_main_page");
        echo "\">My account</a>
            </nav>
            <a class=\"btn btn-outline-primary mr-2\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
        echo "\">Sign up</a>
            <a class=\"btn btn-outline-primary\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Sign in</a>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 51
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_footer_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_links"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_links"));

        // line 54
        echo "        <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
            <div class=\"row\">
                <div class=\"col-12 col-md\">
                    <small class=\"d-block mb-3 text-muted\">&copy; 2017-2018</small>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>Features</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Live streaming</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Video player</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Monetization</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Hosting</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Analytics</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Speed test</a></li>
                    </ul>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>Resources</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Help center</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Blog</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Guidelines</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Developers</a></li>
                    </ul>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>About</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Contact</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Jobs</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Partners</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_customjavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 105,  270 => 54,  260 => 53,  249 => 51,  239 => 50,  226 => 47,  222 => 46,  217 => 44,  213 => 43,  209 => 42,  205 => 41,  201 => 40,  197 => 39,  188 => 33,  183 => 30,  173 => 29,  154 => 22,  135 => 20,  124 => 106,  122 => 105,  112 => 98,  108 => 97,  104 => 96,  99 => 93,  96 => 53,  93 => 50,  91 => 29,  81 => 22,  78 => 21,  76 => 20,  71 => 18,  60 => 10,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">

    <style>
        .form-control {
            background-color: #f8f5f5;
        }
    </style>

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.min.css') }}\">

    {% block customsylesheets %} {% endblock %}

    <title>{% block title %}Symfony 4 course app - video sharing service{% endblock %}</title>

</head>

<body class=\"text-center\">
<div class=\"container-fluid\">

    {% block menu %}
        <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
            <h5 class=\"my-0 mr-md-auto font-weight-normal\"><a href=\"index.php\">Awesome Videos</a></h5>

            <form method=\"POST\" class=\"form-inline my-0 mr-md-auto\" action=\"{{ path('search_results') }}\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"video title\" aria-label=\"Search video\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search video</button>
            </form>

            <nav class=\"my-2 my-md-0 mr-md-3\">
                <a class=\"p-2 text-dark\" href=\"{{ path('video_list') }}\">Funny</a>
                <a class=\"p-2 text-dark\" href=\"{{ path('video_list') }}\">Scary</a>
                <a class=\"p-2 text-dark\" href=\"{{ path('video_list') }}\">Unbelievable</a>
                <a class=\"p-2 text-dark\" href=\"{{ path('video_list') }}\">Inspirational</a>
                <a class=\"p-2 text-dark\" href=\"{{ path('video_list') }}\">Motivating</a>
                <a class=\"p-2 text-dark\" href=\"{{ path('admin_main_page') }}\">My account</a>
            </nav>
            <a class=\"btn btn-outline-primary mr-2\" href=\"{{ path('pricing') }}\">Sign up</a>
            <a class=\"btn btn-outline-primary\" href=\"{{ path('login') }}\">Sign in</a>
        </div>
    {% endblock %}
    {% block main %}

    {% endblock %}
    {% block footer_links %}
        <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
            <div class=\"row\">
                <div class=\"col-12 col-md\">
                    <small class=\"d-block mb-3 text-muted\">&copy; 2017-2018</small>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>Features</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Live streaming</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Video player</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Monetization</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Hosting</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Analytics</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Speed test</a></li>
                    </ul>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>Resources</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Help center</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Blog</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Guidelines</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Developers</a></li>
                    </ul>
                </div>
                <div class=\"col-6 col-md\">
                    <h5>About</h5>
                    <ul class=\"list-unstyled text-small\">
                        <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Contact</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Jobs</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Partners</a></li>
                        <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    {% endblock %}
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
<script src=\"{{ asset('assets/js/popper.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.js') }}\"></script>

<script>
    \$(function () {
        \$('[data-toggle=\"tooltip\"]').tooltip()
    })
</script>
{% block customjavascripts %} {% endblock %}
</body>
</html>", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
