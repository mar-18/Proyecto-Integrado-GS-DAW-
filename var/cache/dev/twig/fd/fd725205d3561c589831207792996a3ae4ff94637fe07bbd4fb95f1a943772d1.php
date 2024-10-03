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

/* presupuesto/presupuesto.html.twig */
class __TwigTemplate_17f7836b4ad29739e2ea94a22d45ed7d28ffa9fb535752f0bbc88c0b2f7f4c4d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presupuesto/presupuesto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presupuesto/presupuesto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presupuesto/presupuesto.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-Prespuesto";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section id=\"inner-headline\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span4\">
          <div class=\"inner-heading\">
            <h2>Presupuesto</h2>
          </div>
        </div>
        <div class=\"span8\">
          <ul class=\"breadcrumb\">
                
          </ul>
        </div>
      </div>
    </div>
  </section>
  <hr>
<br><br><br>



\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <aside class=\"right-sidebar\">
                  <div class=\"widget\">
                    <h5 class=\"widgetheading\">Datos</h5>
                    <ul class=\"folio-detail\">
                      <li><label>Nombre :</label> ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["nombreReferencia"]) || array_key_exists("nombreReferencia", $context) ? $context["nombreReferencia"] : (function () { throw new RuntimeError('Variable "nombreReferencia" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</li>
                      <li><label>Telefon :</label> ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["telReferencia"]) || array_key_exists("telReferencia", $context) ? $context["telReferencia"] : (function () { throw new RuntimeError('Variable "telReferencia" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</li>
                      <li><label>Fecha :</label> ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["fecha"]) || array_key_exists("fecha", $context) ? $context["fecha"] : (function () { throw new RuntimeError('Variable "fecha" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</li>
                      <li><label>Salon :</label> ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["menuElegido"]) || array_key_exists("menuElegido", $context) ? $context["menuElegido"] : (function () { throw new RuntimeError('Variable "menuElegido" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</li>
                      <li><label>Menu :</label> ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["nombreSalon"]) || array_key_exists("nombreSalon", $context) ? $context["nombreSalon"] : (function () { throw new RuntimeError('Variable "nombreSalon" does not exist.', 40, $this->source); })()), "html", null, true);
        echo " <br>Precio: ";
        echo twig_escape_filter($this->env, (isset($context["precioMenu"]) || array_key_exists("precioMenu", $context) ? $context["precioMenu"] : (function () { throw new RuntimeError('Variable "precioMenu" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</li>
                      <li><label>Numero personas :</label> ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["nPersonas"]) || array_key_exists("nPersonas", $context) ? $context["nPersonas"] : (function () { throw new RuntimeError('Variable "nPersonas" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</li>
                    </ul>
                  </div>
                  <hr>
                  <div class=\"widget\">
                    <h5 class=\"widgetheading\">Precio total</h5>
                    <p>
                      El presupuesto final seria el siguiente: ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "€. Esperamos saber pronto tu respuesta.

                      Un saludo!
                    
                    </p>
                  </div>
                </aside>
              </div>
        </div>
        <br><br><br><br><br><br><br>
\t  <div class=\"row\">
\t\t<div class=\"span3\">
\t\t  <div class=\"widget\">
\t\t\t<h5 class=\"widgetheading\">Ponte en contacto con nosotros</h5>
\t\t\t<address>
\t\t\t\t\t\t\t  <strong>Dirección:</strong><br>
\t\t\t\t\t\t\t   Andalucia, Avenida 5-65<br>
\t\t\t\t\t\t\t   España
\t\t\t\t\t\t   </address>
\t\t\t<p>
\t\t\t  Telefono: (+34) 456-7890-55 <br>
\t\t\t  Email: salo@gmail.com
\t\t\t</p>
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t<div id=\"sub-footer\">
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t  <div class=\"span6\">
              <br><br><br>
\t\t\t<div class=\"copyright\">
\t\t\t  <p>
\t\t\t\t<span>© SALO - Todos los derechos reservados.</span>
\t\t\t  </p>
\t\t\t</div>
\t\t  </div>

\t\t</div>
\t  </div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "presupuesto/presupuesto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 48,  165 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  113 => 8,  103 => 6,  90 => 4,  80 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{parent()}}-Prespuesto{% endblock %}
{% block stylesheets %}
  {{parent()}}
{% endblock %}
{% block body %}
{# plantilla #}
<section id=\"inner-headline\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span4\">
          <div class=\"inner-heading\">
            <h2>Presupuesto</h2>
          </div>
        </div>
        <div class=\"span8\">
          <ul class=\"breadcrumb\">
                
          </ul>
        </div>
      </div>
    </div>
  </section>
  <hr>
<br><br><br>



\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <aside class=\"right-sidebar\">
                  <div class=\"widget\">
                    <h5 class=\"widgetheading\">Datos</h5>
                    <ul class=\"folio-detail\">
                      <li><label>Nombre :</label> {{nombreReferencia}}</li>
                      <li><label>Telefon :</label> {{telReferencia}}</li>
                      <li><label>Fecha :</label> {{fecha}}</li>
                      <li><label>Salon :</label> {{menuElegido}}</li>
                      <li><label>Menu :</label> {{nombreSalon}} <br>Precio: {{precioMenu}}</li>
                      <li><label>Numero personas :</label> {{ nPersonas }}</li>
                    </ul>
                  </div>
                  <hr>
                  <div class=\"widget\">
                    <h5 class=\"widgetheading\">Precio total</h5>
                    <p>
                      El presupuesto final seria el siguiente: {{total}}€. Esperamos saber pronto tu respuesta.

                      Un saludo!
                    
                    </p>
                  </div>
                </aside>
              </div>
        </div>
        <br><br><br><br><br><br><br>
\t  <div class=\"row\">
\t\t<div class=\"span3\">
\t\t  <div class=\"widget\">
\t\t\t<h5 class=\"widgetheading\">Ponte en contacto con nosotros</h5>
\t\t\t<address>
\t\t\t\t\t\t\t  <strong>Dirección:</strong><br>
\t\t\t\t\t\t\t   Andalucia, Avenida 5-65<br>
\t\t\t\t\t\t\t   España
\t\t\t\t\t\t   </address>
\t\t\t<p>
\t\t\t  Telefono: (+34) 456-7890-55 <br>
\t\t\t  Email: salo@gmail.com
\t\t\t</p>
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t<div id=\"sub-footer\">
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t  <div class=\"span6\">
              <br><br><br>
\t\t\t<div class=\"copyright\">
\t\t\t  <p>
\t\t\t\t<span>© SALO - Todos los derechos reservados.</span>
\t\t\t  </p>
\t\t\t</div>
\t\t  </div>

\t\t</div>
\t  </div>
\t</div>
{% endblock %}

", "presupuesto/presupuesto.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\presupuesto\\presupuesto.html.twig");
    }
}
