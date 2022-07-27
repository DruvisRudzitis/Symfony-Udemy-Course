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

/* admin/videos.html.twig */
class __TwigTemplate_9a1a648124079b01e95d9353de67a7ff50176001305e4e9025913b0547023e0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainadmin' => [$this, 'block_mainadmin'],
            'customjavascripts' => [$this, 'block_customjavascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/videos.html.twig", 1);
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

<h2>Videos / My liked videos</h2>

<div class=\"table-responsive\">
  <table class=\"table table-striped table-sm\">
    <thead>
      <tr>
        <th>#</th>
        <th>Video name</th>
        <th>Link</th>
        <th>Category</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "      <tr>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
        <td>Video name</td>
        <td><a target=\"_blank\" href=\"http://vimeo.com\">go to video</a></td>
        <td>
            <form action=\"#\" method=\"POST\">
                <select onchange=\"this.form.submit();\">
                <option selected>Parent...</option>
                <option value=\"1\">Funny</option>
                <option value=\"1\">--For kids</option>
                <option value=\"1\">----For adults</option>
                <option value=\"2\">Scary</option>
                <option value=\"3\">Motivating</option>
                </select>
            </form>
        </td>
        <td><a href=\"#\" onclick=\"delete_video(event,2);\"><i class=\"fas fa-trash\"></i></a></td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
  </table>
</div>

";
        // line 43
        $this->displayBlock('customjavascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_customjavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        // line 44
        echo "<script>
    ";
        // line 45
        $this->displayParentBlock("customjavascripts", $context, $blocks);
        echo "
    function delete_video(e,video_id)
    {
        e.preventDefault();
        if(confirm('Are you sure?')) 
        {
            console.log(id);
            // delete video from vimeo
            // window.location.href = 'clear database record with Symfony';
        }
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 45,  143 => 44,  124 => 43,  118 => 39,  94 => 21,  91 => 20,  87 => 19,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block mainadmin %}


<h2>Videos / My liked videos</h2>

<div class=\"table-responsive\">
  <table class=\"table table-striped table-sm\">
    <thead>
      <tr>
        <th>#</th>
        <th>Video name</th>
        <th>Link</th>
        <th>Category</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    {% for i in 1..10 %}
      <tr>
        <td>{{ i }}</td>
        <td>Video name</td>
        <td><a target=\"_blank\" href=\"http://vimeo.com\">go to video</a></td>
        <td>
            <form action=\"#\" method=\"POST\">
                <select onchange=\"this.form.submit();\">
                <option selected>Parent...</option>
                <option value=\"1\">Funny</option>
                <option value=\"1\">--For kids</option>
                <option value=\"1\">----For adults</option>
                <option value=\"2\">Scary</option>
                <option value=\"3\">Motivating</option>
                </select>
            </form>
        </td>
        <td><a href=\"#\" onclick=\"delete_video(event,2);\"><i class=\"fas fa-trash\"></i></a></td>
      </tr>
    {% endfor %}
    </tbody>
  </table>
</div>

{% block customjavascripts %}
<script>
    {{ parent() }}
    function delete_video(e,video_id)
    {
        e.preventDefault();
        if(confirm('Are you sure?')) 
        {
            console.log(id);
            // delete video from vimeo
            // window.location.href = 'clear database record with Symfony';
        }
    }
</script>
{% endblock %}
{% endblock %}
", "admin/videos.html.twig", "/var/www/html/templates/admin/videos.html.twig");
    }
}
