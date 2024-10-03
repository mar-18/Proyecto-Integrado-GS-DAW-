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

/* cliente/show.html.twig */
class __TwigTemplate_5313b52637da270bd7ed4d2b5ab184d563611db47ee2093e96c148adf355b17e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cliente/show.html.twig", 1);
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
        echo " - Cliente";
        
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
                <h2>Cliente</h2>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_index");
        echo "\">Listado clientes</a><i class=\"icon-angle-right\"></i></li>
                <li class=\"active\">Información</li>
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
                    <h3><a href=\"#\">Información</a></h3>
                  </div>
                  <!-- start flexslider -->
                  <div class=\"flexslider\">
                    <ul class=\"slides\">
                      <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">                        
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-01-full.jpg"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
                      </li>
                      <li data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;\" class=\"flex-active-slide\">
                        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-02-full.jpg"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
                      </li>
                      <li data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-03-full.jpg"), "html", null, true);
        echo "\" alt=\"\" draggable=\"false\">
                      </li>
                    </ul>
                  <ol class=\"flex-control-nav flex-control-paging\"><li><a href=\"#\" class=\"\">1</a></li><li><a href=\"#\" class=\"flex-active\">2</a></li><li><a href=\"#\">3</a></li></ol><ul class=\"flex-direction-nav\"><li class=\"flex-nav-prev\"><a class=\"flex-prev\" href=\"#\">Previous</a></li><li class=\"flex-nav-next\"><a class=\"flex-next\" href=\"#\">Next</a></li></ul></div>
                  <!-- end flexslider -->
                </div>
                <p>
                  Informacion de contacto proporcionada por el cliente.
                </p>
              </article>
            </div>
            <div class=\"span8\">
              <aside class=\"right-sidebar\">
                <div class=\"widget\">
                  <h5 class=\"widgetheading\">Información del cliente <a class=\"btn btn-warning btn-mini btn-rounded\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_edit", ["idcliente" => twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 62, $this->source); })()), "idcliente", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\">Editar</a></h5>
                  <ul class=\"folio-detail\">
                    <li><label>Id :</label> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 64, $this->source); })()), "idcliente", [], "any", false, false, false, 64), "html", null, true);
        echo "</li>
                    <li><label>Nombre :</label> ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 65, $this->source); })()), "nombre", [], "any", false, false, false, 65), "html", null, true);
        echo "</li>
                    <li><label>Apellido :</label> ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 66, $this->source); })()), "apellido", [], "any", false, false, false, 66), "html", null, true);
        echo "</li>
                    <li><label>Email :</label> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "html", null, true);
        echo "</li>
                    <li><label>Teléfono :</label>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 68, $this->source); })()), "telefono", [], "any", false, false, false, 68), "html", null, true);
        echo "</li>
                    <li><label>Dirección :</label>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 69, $this->source); })()), "direccion", [], "any", false, false, false, 69), "html", null, true);
        echo "</li>
                  </ul>
                </div>
                <div class=\"widget\">
                  <h5 class=\"widgetheading\"></h5>
                  <p>
                    <a class='btn btn-blue' href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_index");
        echo "\">Regresar</a>

                    
                    ";
        // line 78
        echo twig_include($this->env, $context, "cliente/_delete_form.html.twig");
        echo "
                  </p>
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

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cliente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 91,  248 => 90,  226 => 78,  220 => 75,  211 => 69,  207 => 68,  203 => 67,  199 => 66,  195 => 65,  191 => 64,  186 => 62,  169 => 48,  163 => 45,  157 => 42,  134 => 22,  130 => 21,  114 => 8,  104 => 7,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Cliente{% endblock %}
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
                <h2>Cliente</h2>
              </div>
            </div>
            <div class=\"span8\">
              <ul class=\"breadcrumb\">
                <li><a href=\"{{ path('index') }}\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                <li><a href=\"{{ path('cliente_index') }}\">Listado clientes</a><i class=\"icon-angle-right\"></i></li>
                <li class=\"active\">Información</li>
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
                    <h3><a href=\"#\">Información</a></h3>
                  </div>
                  <!-- start flexslider -->
                  <div class=\"flexslider\">
                    <ul class=\"slides\">
                      <li class=\"\" data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">                        
                        <img src=\"{{ asset(\"img/works/full/image-01-full.jpg\") }}\" alt=\"\" draggable=\"false\">
                      </li>
                      <li data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;\" class=\"flex-active-slide\">
                        <img src=\"{{ asset(\"img/works/full/image-02-full.jpg\")}}\" alt=\"\" draggable=\"false\">
                      </li>
                      <li data-thumb-alt=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">
                        <img src=\"{{ asset(\"img/works/full/image-03-full.jpg\")}}\" alt=\"\" draggable=\"false\">
                      </li>
                    </ul>
                  <ol class=\"flex-control-nav flex-control-paging\"><li><a href=\"#\" class=\"\">1</a></li><li><a href=\"#\" class=\"flex-active\">2</a></li><li><a href=\"#\">3</a></li></ol><ul class=\"flex-direction-nav\"><li class=\"flex-nav-prev\"><a class=\"flex-prev\" href=\"#\">Previous</a></li><li class=\"flex-nav-next\"><a class=\"flex-next\" href=\"#\">Next</a></li></ul></div>
                  <!-- end flexslider -->
                </div>
                <p>
                  Informacion de contacto proporcionada por el cliente.
                </p>
              </article>
            </div>
            <div class=\"span8\">
              <aside class=\"right-sidebar\">
                <div class=\"widget\">
                  <h5 class=\"widgetheading\">Información del cliente <a class=\"btn btn-warning btn-mini btn-rounded\" href=\"{{ path('cliente_edit', {'idcliente': cliente.idcliente}) }}\">Editar</a></h5>
                  <ul class=\"folio-detail\">
                    <li><label>Id :</label> {{ cliente.idcliente }}</li>
                    <li><label>Nombre :</label> {{ cliente.nombre }}</li>
                    <li><label>Apellido :</label> {{ cliente.apellido }}</li>
                    <li><label>Email :</label> {{ cliente.email }}</li>
                    <li><label>Teléfono :</label>{{ cliente.telefono }}</li>
                    <li><label>Dirección :</label>{{ cliente.direccion }}</li>
                  </ul>
                </div>
                <div class=\"widget\">
                  <h5 class=\"widgetheading\"></h5>
                  <p>
                    <a class='btn btn-blue' href=\"{{ path('cliente_index') }}\">Regresar</a>

                    
                    {{ include('cliente/_delete_form.html.twig') }}
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
{% endblock %}", "cliente/show.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\cliente\\show.html.twig");
    }
}
