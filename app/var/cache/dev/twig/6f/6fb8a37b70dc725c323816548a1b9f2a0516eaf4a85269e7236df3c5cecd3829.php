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

/* admin/categories.html.twig */
class __TwigTemplate_e95a1cd2c1de6a127236eab6b603ed025430f60dc5dc351589e68405d7557d4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainadmin' => [$this, 'block_mainadmin'],
            'customsylesheets' => [$this, 'block_customsylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/categories.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_mainadmin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('customsylesheets', $context, $blocks);
        // line 12
        echo "

<h2>Categories list</h2>

<ul class=\"fa-ul text-left\">
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Funny <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_category");
        echo "\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                             href=\"#\">delete</a></li>
    <ul class=\"fa-ul text-left\">
        <li><i class=\"fa-li fa fa-arrow-right\"></i>For kids <a href=\"edit_category.php\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                                    href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>For adults <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                href=\"#\">delete</a></li>
        <ul class=\"fa-ul text-left\">
            <li><i class=\"fa-li fa fa-arrow-right\"></i>Strange <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                    href=\"#\">delete</a></li>
        </ul>
    </ul>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Scary <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Unbelievable <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Inspirational <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Motivating <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Surprising <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Sad</li>
    <ul class=\"fa-ul text-left\">
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Strange <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                href=\"#\">delete</a></li>
        <ul class=\"fa-ul text-left\">
            <li><i class=\"fa-li fa fa-arrow-right\"></i>Boring <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                    href=\"#\">delete</a></li>
        </ul>
    </ul>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Relaxing <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
</ul>

<form action=\"#\" method=\"POST\">
    <div class=\"col-md-4 mb-3\">
        <label for=\"validationServer01\">Add new category</label>
        <input type=\"text\" class=\"form-control is-invalid\" id=\"validationServer01\" placeholder=\"Category name\" value=\"Funny\"
            required>
        <br>
\t    <label for=\"inlineFormCustomSelect\">Parent:</label>
        <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
            <option value=\"1\">Funny</option>
            <option value=\"1\">--For kids</option>
            <option value=\"1\">--For adults</option>
            <option value=\"1\">----For 60+</option>
            <option value=\"2\">Scary</option>
            <option value=\"3\">Motivating</option>
        </select>
        <div class=\"invalid-feedback\">
            Category already exists!
        </div>
        <button class=\"btn btn-primary mt-3\" type=\"submit\">Add</button>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_customsylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customsylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customsylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("customsylesheets", $context, $blocks);
        echo "
    <style>
        .fa-ul>li {
            margin-top: 15px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 5,  148 => 4,  81 => 17,  74 => 12,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block mainadmin %}

{% block customsylesheets %}
    {{ parent() }}
    <style>
        .fa-ul>li {
            margin-top: 15px;
        }
    </style>
{% endblock %}


<h2>Categories list</h2>

<ul class=\"fa-ul text-left\">
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Funny <a href=\"{{ path('edit_category') }}\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                             href=\"#\">delete</a></li>
    <ul class=\"fa-ul text-left\">
        <li><i class=\"fa-li fa fa-arrow-right\"></i>For kids <a href=\"edit_category.php\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                                    href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>For adults <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                href=\"#\">delete</a></li>
        <ul class=\"fa-ul text-left\">
            <li><i class=\"fa-li fa fa-arrow-right\"></i>Strange <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                    href=\"#\">delete</a></li>
        </ul>
    </ul>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Scary <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Unbelievable <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Inspirational <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Motivating <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Surprising <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Sad</li>
    <ul class=\"fa-ul text-left\">
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Strange <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                href=\"#\">delete</a></li>
        <ul class=\"fa-ul text-left\">
            <li><i class=\"fa-li fa fa-arrow-right\"></i>Boring <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                    href=\"#\">delete</a></li>
        </ul>
    </ul>
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Relaxing <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
            href=\"#\">delete</a></li>
</ul>

<form action=\"#\" method=\"POST\">
    <div class=\"col-md-4 mb-3\">
        <label for=\"validationServer01\">Add new category</label>
        <input type=\"text\" class=\"form-control is-invalid\" id=\"validationServer01\" placeholder=\"Category name\" value=\"Funny\"
            required>
        <br>
\t    <label for=\"inlineFormCustomSelect\">Parent:</label>
        <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
            <option value=\"1\">Funny</option>
            <option value=\"1\">--For kids</option>
            <option value=\"1\">--For adults</option>
            <option value=\"1\">----For 60+</option>
            <option value=\"2\">Scary</option>
            <option value=\"3\">Motivating</option>
        </select>
        <div class=\"invalid-feedback\">
            Category already exists!
        </div>
        <button class=\"btn btn-primary mt-3\" type=\"submit\">Add</button>
    </div>
</form>
{% endblock %}

", "admin/categories.html.twig", "/var/www/html/templates/admin/categories.html.twig");
    }
}
