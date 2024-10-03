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

/* salon/show.html.twig */
class __TwigTemplate_64eb387d42c0acc977f57ddcc02a0aadf6b38dfb79224dbde6276c51adf0adcc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salon/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salon/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salon/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Salón";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        $this->displayParentBlock("content", $context, $blocks);
        echo "

<div id=\"wrapper\">
    <section id=\"inner-headline\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"span4\">
              <div class=\"inner-heading\">
                <h2>Salón</h2>
              </div>
            </div>
            <div class=\"span8\">
              <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_index");
        echo "\">Listado salones</a><i class=\"icon-angle-right\"></i></li>
                <li class=\"active\">Salón</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    <section id=\"content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"span4\">
              <article>
                <div class=\"top-wrapper\">
                  <div class=\"post-heading\">
                    <h3><a href=\"#\">Fotografía</a></h3>
                  </div>
                  <!-- start flexslider -->
                  <div class=\"flexslider\">
                    <ul class=\"slides\">
                      <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">                        
                        <img src=";
        // line 42
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 42, $this->source); })()), "foto", [], "any", false, false, false, 42)), 0)) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 42, $this->source); })()), "foto", [], "any", false, false, false, 42))), "html", null, true);
            echo "\"";
        } else {
            echo " \"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/blog/65x65/thumb1.jpg"), "html", null, true);
            echo "\"";
        }
        echo " alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 42, $this->source); })()), "nombresalon", [], "any", false, false, false, 42), "html", null, true);
        echo "\" draggable=\"false\">                        
                      </li>
                      <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">                        
                        <img src=";
        // line 45
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 45, $this->source); })()), "foto", [], "any", false, false, false, 45)), 0)) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 45, $this->source); })()), "foto", [], "any", false, false, false, 45))), "html", null, true);
            echo "\"";
        } else {
            echo " \"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/blog/65x65/thumb1.jpg"), "html", null, true);
            echo "\"";
        }
        echo " alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 45, $this->source); })()), "nombresalon", [], "any", false, false, false, 45), "html", null, true);
        echo "\" draggable=\"false\">                        
                      </li>
                      <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">                        
                        <img src=";
        // line 48
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 48, $this->source); })()), "foto", [], "any", false, false, false, 48)), 0)) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 48, $this->source); })()), "foto", [], "any", false, false, false, 48))), "html", null, true);
            echo "\"";
        } else {
            echo " \"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/blog/65x65/thumb1.jpg"), "html", null, true);
            echo "\"";
        }
        echo " alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 48, $this->source); })()), "nombresalon", [], "any", false, false, false, 48), "html", null, true);
        echo "\" draggable=\"false\">                        
                      </li>
                    </ul>
                  <ol class=\"flex-control-nav flex-control-paging\"><li><a href=\"#\" class=\"\">1</a></li><li><a href=\"#\" class=\"flex-active\">2</a></li><li><a href=\"#\">3</a></li></ol><ul class=\"flex-direction-nav\"><li class=\"flex-nav-prev\"><a class=\"flex-prev\" href=\"#\">Previous</a></li><li class=\"flex-nav-next\"><a class=\"flex-next\" href=\"#\">Next</a></li></ul></div>
                  <!-- end flexslider -->
                </div>
                <p>
                  Informacion de nuestro salón.
                </p>
              </article>
            </div>
            <div class=\"span8\">
              <aside class=\"right-sidebar\">
                <div class=\"widget\">
                  <h5 class=\"widgetheading\">Información del salón 
                    ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 64
            echo "                    <a class=\"btn btn-warning btn-mini btn-rounded\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_edit", ["idsalon" => twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 64, $this->source); })()), "idsalon", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Editar</a>
                    ";
        }
        // line 66
        echo "                  </h5>
                  <ul class=\"folio-detail\">
                    <li><label>Id :</label> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 68, $this->source); })()), "idsalon", [], "any", false, false, false, 68), "html", null, true);
        echo "</li>
                    <li><label>Nombre salón :</label> ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 69, $this->source); })()), "nombresalon", [], "any", false, false, false, 69), "html", null, true);
        echo "</li>
                    <li><label>Aforo :</label> ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 70, $this->source); })()), "capacidad", [], "any", false, false, false, 70), "html", null, true);
        echo "</li>
                    <li><label>Nombre fotografía :</label> ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 71, $this->source); })()), "foto", [], "any", false, false, false, 71), "html", null, true);
        echo "</li>
                    <li><label>Precio :</label> ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new RuntimeError('Variable "salon" does not exist.', 72, $this->source); })()), "precio", [], "any", false, false, false, 72), "html", null, true);
        echo "</li>
                  </ul>
                </div>
                <div class=\"widget\">
                  <h5 class=\"widgetheading\"></h5>
                  <p>
                    <a class='btn btn-blue' href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_index");
        echo "\">Regresar</a>
                    ";
        // line 79
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 80
            echo "                    ";
            echo twig_include($this->env, $context, "salon/_delete_form.html.twig");
            echo "
                    ";
        }
        // line 82
        echo "                  </p>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>

</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salon/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 94,  286 => 93,  266 => 82,  260 => 80,  258 => 79,  254 => 78,  245 => 72,  241 => 71,  237 => 70,  233 => 69,  229 => 68,  225 => 66,  219 => 64,  217 => 63,  189 => 48,  173 => 45,  157 => 42,  134 => 22,  130 => 21,  114 => 8,  104 => 7,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Salón{% endblock %}
{% block stylesheets %}
    {{parent()}}
{% endblock %}
{% block content %}
{{parent()}}

<div id=\"wrapper\">
    <section id=\"inner-headline\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"span4\">
              <div class=\"inner-heading\">
                <h2>Salón</h2>
              </div>
            </div>
            <div class=\"span8\">
              <ul class=\"breadcrumb\">
                <li><a href=\"{{ path('index') }}\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                <li><a href=\"{{ path('salon_index') }}\">Listado salones</a><i class=\"icon-angle-right\"></i></li>
                <li class=\"active\">Salón</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    <section id=\"content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"span4\">
              <article>
                <div class=\"top-wrapper\">
                  <div class=\"post-heading\">
                    <h3><a href=\"#\">Fotografía</a></h3>
                  </div>
                  <!-- start flexslider -->
                  <div class=\"flexslider\">
                    <ul class=\"slides\">
                      <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">                        
                        <img src={% if salon.foto|length >0 %}\"{{ asset ('img/'~salon.foto) }}\"{% else %} \"{{ asset ('img/dummies/blog/65x65/thumb1.jpg') }}\"{% endif %} alt=\"{{ salon.nombresalon }}\" draggable=\"false\">                        
                      </li>
                      <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">                        
                        <img src={% if salon.foto|length >0 %}\"{{ asset ('img/'~salon.foto) }}\"{% else %} \"{{ asset ('img/dummies/blog/65x65/thumb1.jpg') }}\"{% endif %} alt=\"{{ salon.nombresalon }}\" draggable=\"false\">                        
                      </li>
                      <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">                        
                        <img src={% if salon.foto|length >0 %}\"{{ asset ('img/'~salon.foto) }}\"{% else %} \"{{ asset ('img/dummies/blog/65x65/thumb1.jpg') }}\"{% endif %} alt=\"{{ salon.nombresalon }}\" draggable=\"false\">                        
                      </li>
                    </ul>
                  <ol class=\"flex-control-nav flex-control-paging\"><li><a href=\"#\" class=\"\">1</a></li><li><a href=\"#\" class=\"flex-active\">2</a></li><li><a href=\"#\">3</a></li></ol><ul class=\"flex-direction-nav\"><li class=\"flex-nav-prev\"><a class=\"flex-prev\" href=\"#\">Previous</a></li><li class=\"flex-nav-next\"><a class=\"flex-next\" href=\"#\">Next</a></li></ul></div>
                  <!-- end flexslider -->
                </div>
                <p>
                  Informacion de nuestro salón.
                </p>
              </article>
            </div>
            <div class=\"span8\">
              <aside class=\"right-sidebar\">
                <div class=\"widget\">
                  <h5 class=\"widgetheading\">Información del salón 
                    {% if is_granted('ROLE_ADMIN') %}
                    <a class=\"btn btn-warning btn-mini btn-rounded\" href=\"{{ path('salon_edit', {'idsalon': salon.idsalon}) }}\">Editar</a>
                    {% endif %}
                  </h5>
                  <ul class=\"folio-detail\">
                    <li><label>Id :</label> {{ salon.idsalon }}</li>
                    <li><label>Nombre salón :</label> {{ salon.nombresalon }}</li>
                    <li><label>Aforo :</label> {{ salon.capacidad }}</li>
                    <li><label>Nombre fotografía :</label> {{ salon.foto }}</li>
                    <li><label>Precio :</label> {{ salon.precio }}</li>
                  </ul>
                </div>
                <div class=\"widget\">
                  <h5 class=\"widgetheading\"></h5>
                  <p>
                    <a class='btn btn-blue' href=\"{{ path('salon_index') }}\">Regresar</a>
                    {% if is_granted('ROLE_ADMIN') %}
                    {{ include('salon/_delete_form.html.twig') }}
                    {% endif %}
                  </p>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>

</div>
    
{% endblock %}
{% block javascripts %}
    {{parent()}}     
{% endblock %}
", "salon/show.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\salon\\show.html.twig");
    }
}
