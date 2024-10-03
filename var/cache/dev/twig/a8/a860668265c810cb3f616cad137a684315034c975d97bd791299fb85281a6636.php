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

/* presupuesto/index.html.twig */
class __TwigTemplate_c0c4418f02a5554361981692c511ee4629430ba03b66c1faff9257cb7dc3008f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presupuesto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presupuesto/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presupuesto/index.html.twig", 1);
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
        echo "-Presupuesto";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
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
            <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
            <li class=\"active\">Presupuesto</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id=\"content\">  
    <div class=\"span4\">
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"First slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"Second slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\"alt=\"Third slide\">
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">-</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">></span>
        </a>
      </div>
    </div>
        <div class=\"container\">


  
<div class=\"example-wrapper\">
    
    <h1><i class=\"fas fa-address-book\"></i>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "</h1>

    <!--Si no encuentra datos previos solicita ingresar datos para el presupuesto-->
    ";
        // line 66
        if (0 === twig_compare((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 66, $this->source); })()), "Datos para el presupuesto")) {
            // line 67
            echo "    
    <!--Datos para el presupuesto-->
    <div class=\"row\">
        
        <div class=\"span12\">
            <!--Verificar que no hayan campos nulos-->
            ";
            // line 73
            if (0 === twig_compare((isset($context["camposVacios"]) || array_key_exists("camposVacios", $context) ? $context["camposVacios"] : (function () { throw new RuntimeError('Variable "camposVacios" does not exist.', 73, $this->source); })()), "Campos obligatorios vacios")) {
                // line 74
                echo "            <div class=\"alert alert-error\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Ops!</strong> Campos obligatorios vacios.
              </div>
              ";
            }
            // line 79
            echo "            <!-- Description -->
            
            <dl>
              <dt>Nombre de referencia:</dt>
                <dd><input type=\"text\" name=\"nombre\" id=\"nombreReferenciaT\" class=\"form-control\" required><span class=\"asterisk_input\"></span></dd>
              <dt>Telefono</dt>
                <dd><input type=\"tel\" name=\"telContacto\" id=\"telReferenciaT\" class=\"form-control\" required><span class=\"asterisk_input\"></span></dd>
              <dt>Fecha del evento</dt>
                <dd><input type=\"text\" name=\"fecha\" id=\"fechaT\" value=";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["vFecha"]) || array_key_exists("vFecha", $context) ? $context["vFecha"] : (function () { throw new RuntimeError('Variable "vFecha" does not exist.', 87, $this->source); })()), "html", null, true);
            echo " class=\"form-control\" disabled></dd>
              <dt>Salon elegido</dt>
                <dd><input type=\"text\" name=\"salon\" value=";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["vSalon"]) || array_key_exists("vSalon", $context) ? $context["vSalon"] : (function () { throw new RuntimeError('Variable "vSalon" does not exist.', 89, $this->source); })()), "html", null, true);
            echo " id=\"salonT\" class=\"form-control\" disabled> </dd>
              <dt>Numero de personas</dt>
                <dd><input type=\"number\" min=\"15\" max=\"200\" name=\"numPersonasT\" id=\"numPersonasT\" class=\"form-control\" required>
                <br><span class=\"asterisk_input\"></span>min:15-max:200
                </dd>
                
              <dt>Menus</dt>
                <dd>
                    <select id=\"menuT\" class=\"form-control\">
                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 99
                echo "                        <option>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "nombremenu", [], "any", false, false, false, 99), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                    </select>
                </dd>
            </dl>
          </div>
          <h7 class=\"ml-5\">
            <span class=\"asterisk_input\"></span>Campos obligatorios
          </h7>
      </div>
      
  
    <input class=\"btn btn-green \" type=\"submit\" id=\"aceptar\" value=\"Aceptar\">
    ";
        } elseif (0 === twig_compare(        // line 112
(isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 112, $this->source); })()), "Presupuesto")) {
            // line 113
            echo "
    <!--Datos finales de presupuesto que se enviaran por correo -->
    <div class=\"span12\">       
        <dl class=\"dl-horizontal pullquote-left\">
          <form action=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sendemail");
            echo "\" method=\"POST\">
                <h2>Datos</h2>    
                <dt>Nombre</dt>
                <dd>";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["nombreReferencia"]) || array_key_exists("nombreReferencia", $context) ? $context["nombreReferencia"] : (function () { throw new RuntimeError('Variable "nombreReferencia" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "</dd>
                <dt>Telefon</dt>
                <dd>";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["telReferencia"]) || array_key_exists("telReferencia", $context) ? $context["telReferencia"] : (function () { throw new RuntimeError('Variable "telReferencia" does not exist.', 122, $this->source); })()), "html", null, true);
            echo "</dd>
                
                <dt>Fecha</dt>
                <dd>";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["vFecha"]) || array_key_exists("vFecha", $context) ? $context["vFecha"] : (function () { throw new RuntimeError('Variable "vFecha" does not exist.', 125, $this->source); })()), "html", null, true);
            echo "</dd>
                <dt>Salon</dt>
                <dd>";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["vSalon"]) || array_key_exists("vSalon", $context) ? $context["vSalon"] : (function () { throw new RuntimeError('Variable "vSalon" does not exist.', 127, $this->source); })()), "html", null, true);
            echo "</dd>
                <dt>Menu</dt>
                <dd>";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["menuElegido"]) || array_key_exists("menuElegido", $context) ? $context["menuElegido"] : (function () { throw new RuntimeError('Variable "menuElegido" does not exist.', 129, $this->source); })()), "html", null, true);
            echo "<br>Precio: <strong>";
            echo twig_escape_filter($this->env, (isset($context["precioMenu"]) || array_key_exists("precioMenu", $context) ? $context["precioMenu"] : (function () { throw new RuntimeError('Variable "precioMenu" does not exist.', 129, $this->source); })()), "html", null, true);
            echo "€</strong></dd>
                <dt>Numero personas</dt>
                <dd>";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["nPersonas"]) || array_key_exists("nPersonas", $context) ? $context["nPersonas"] : (function () { throw new RuntimeError('Variable "nPersonas" does not exist.', 131, $this->source); })()), "html", null, true);
            echo "</dd>
                <dt>Total</dt>
                <dd>";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 133, $this->source); })()), "html", null, true);
            echo "</dd>
                <br>
                        <input type=\"hidden\" name=\"nombreReferencia\" value=";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["nombreReferencia"]) || array_key_exists("nombreReferencia", $context) ? $context["nombreReferencia"] : (function () { throw new RuntimeError('Variable "nombreReferencia" does not exist.', 135, $this->source); })()), "html", null, true);
            echo ">    
                        <input type=\"hidden\" name=\"telReferencia\" value=";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["telReferencia"]) || array_key_exists("telReferencia", $context) ? $context["telReferencia"] : (function () { throw new RuntimeError('Variable "telReferencia" does not exist.', 136, $this->source); })()), "html", null, true);
            echo ">  
                        <input type=\"hidden\" name=\"fecha\" value=";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["vFecha"]) || array_key_exists("vFecha", $context) ? $context["vFecha"] : (function () { throw new RuntimeError('Variable "vFecha" does not exist.', 137, $this->source); })()), "html", null, true);
            echo ">
                        <input type=\"hidden\" name=\"nombreSalon\" value=";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["vSalon"]) || array_key_exists("vSalon", $context) ? $context["vSalon"] : (function () { throw new RuntimeError('Variable "vSalon" does not exist.', 138, $this->source); })()), "html", null, true);
            echo ">      
                        <input type=\"hidden\" name=\"menuElegido\" value=";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["menuElegido"]) || array_key_exists("menuElegido", $context) ? $context["menuElegido"] : (function () { throw new RuntimeError('Variable "menuElegido" does not exist.', 139, $this->source); })()), "html", null, true);
            echo ">
                        <input type=\"hidden\" name=\"precioMenu\" value=";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["precioMenu"]) || array_key_exists("precioMenu", $context) ? $context["precioMenu"] : (function () { throw new RuntimeError('Variable "precioMenu" does not exist.', 140, $this->source); })()), "html", null, true);
            echo ">
                        <input type=\"hidden\" name=\"nPersonas\" value=";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["nPersonas"]) || array_key_exists("nPersonas", $context) ? $context["nPersonas"] : (function () { throw new RuntimeError('Variable "nPersonas" does not exist.', 141, $this->source); })()), "html", null, true);
            echo ">
                        <input type=\"hidden\" name=\"total\" value=";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 142, $this->source); })()), "html", null, true);
            echo ">

             <!--envio de presupuesto y impresion-->
            
                <h5>Enviar presupuesto por <strong>correo </strong> electronico</h5>
                <div class=\"form-group\">
                <h7><strong>Correo electronico</strong> </h7>
                <input type=\"email\" class=\"form-control\" name=\"correo\" aria-describedby=\"emailHelp\" placeholder=\"correo\">
                </div>
                   
                <input type=\"submit\" value=\"Enviar\" class=\"btn btn-success font-weight-bold\">
                
          </form>
        </dl>
      </div>
    
    <!--imprimir-->
      <form action=\"";
            // line 159
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imprimir");
            echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"nombreReferencia\" value=";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["nombreReferencia"]) || array_key_exists("nombreReferencia", $context) ? $context["nombreReferencia"] : (function () { throw new RuntimeError('Variable "nombreReferencia" does not exist.', 160, $this->source); })()), "html", null, true);
            echo ">    
                    <input type=\"hidden\" name=\"telReferencia\" value=";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["telReferencia"]) || array_key_exists("telReferencia", $context) ? $context["telReferencia"] : (function () { throw new RuntimeError('Variable "telReferencia" does not exist.', 161, $this->source); })()), "html", null, true);
            echo ">  
                    <input type=\"hidden\" name=\"fecha\" value=";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["vFecha"]) || array_key_exists("vFecha", $context) ? $context["vFecha"] : (function () { throw new RuntimeError('Variable "vFecha" does not exist.', 162, $this->source); })()), "html", null, true);
            echo ">
                    <input type=\"hidden\" name=\"nombreSalon\" value=";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["vSalon"]) || array_key_exists("vSalon", $context) ? $context["vSalon"] : (function () { throw new RuntimeError('Variable "vSalon" does not exist.', 163, $this->source); })()), "html", null, true);
            echo ">      
                    <input type=\"hidden\" name=\"menuElegido\" value=";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["menuElegido"]) || array_key_exists("menuElegido", $context) ? $context["menuElegido"] : (function () { throw new RuntimeError('Variable "menuElegido" does not exist.', 164, $this->source); })()), "html", null, true);
            echo ">
                    <input type=\"hidden\" name=\"precioMenu\" value=";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["precioMenu"]) || array_key_exists("precioMenu", $context) ? $context["precioMenu"] : (function () { throw new RuntimeError('Variable "precioMenu" does not exist.', 165, $this->source); })()), "html", null, true);
            echo ">
                    <input type=\"hidden\" name=\"nPersonas\" value=";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["nPersonas"]) || array_key_exists("nPersonas", $context) ? $context["nPersonas"] : (function () { throw new RuntimeError('Variable "nPersonas" does not exist.', 166, $this->source); })()), "html", null, true);
            echo ">
                    <input type=\"hidden\" name=\"total\" value=";
            // line 167
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 167, $this->source); })()), "html", null, true);
            echo ">
            <!--envio de impresion-->
            <div class=\"form-group\">
                <input type=\"submit\" value=\"Imprimir\" class=\"btn btn-success font-weight-bold\">
                <!--imprimir-->
            </div>            
      </form>

    ";
        }
        // line 176
        echo "</div>
</section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 181
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
<script>
      \$(window).ready(function(){
        \$(\"#aceptar\").click(function(ev){
          ev.preventDefault();
          buscar();
        })
      })
    function buscar(){
        
      let datos={
        \"nombreReferenciaT\":\$(\"#nombreReferenciaT\").val(),
        \"telReferenciaT\":\$(\"#telReferenciaT\").val(),
        \"fechaT\":\$(\"#fechaT\").val(),
        \"numPersonasT\":\$(\"#numPersonasT\").val(),
        \"salonT\":\$(\"#salonT\").val(),
        \"menuT\":\$(\"#menuT\").val(),
               
      };
      window.location.href =\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("datosPresupuesto");
        echo "\"+\"/\"+JSON.stringify(datos);
    }
    </script>
<script>
   /*  \$(window).ready(function(){
        \$(\"#buscarFecha\").click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();
        buscarFecha();

        })
    })

    function buscarFecha(){
        var fechaTwig=\$(\"#fecha\").val();
        var url=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscarPorFecha");
        echo "\";

        \$.ajax({ 
            tipe:'POST',
            url:url,
            data:({fecha:fechaTwig}),
            //dataType:'json'
        }).done(function(datos){
            
            //convertir el objeto JSON a texto
            var json_string = JSON.stringify(datos);
 
            //convertir el texto a un nuevo objeto
            var obj = \$.parseJSON(json_string);
            alert(obj)
            /*asignar los valores obtenidos del objeto
            * a cada unos de losc controlres deseados
            * en el formulario
            \$('#nombresalon').html(obj.nombresalon);
            \$('#capacidad').html(obj.capacidad);
            \$('#tipo').html(obj.tipo);
            \$('#fecha').html(obj.fecha);
            \$('#hora').html(obj.hora);
                        console.log(obj);
                            //\$(\"#lista\").html(datos);
                        });
                } */
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "presupuesto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 218,  441 => 203,  419 => 184,  415 => 183,  411 => 182,  407 => 181,  397 => 180,  384 => 176,  372 => 167,  368 => 166,  364 => 165,  360 => 164,  356 => 163,  352 => 162,  348 => 161,  344 => 160,  340 => 159,  320 => 142,  316 => 141,  312 => 140,  308 => 139,  304 => 138,  300 => 137,  296 => 136,  292 => 135,  287 => 133,  282 => 131,  275 => 129,  270 => 127,  265 => 125,  259 => 122,  254 => 120,  248 => 117,  242 => 113,  240 => 112,  227 => 101,  218 => 99,  214 => 98,  202 => 89,  197 => 87,  187 => 79,  180 => 74,  178 => 73,  170 => 67,  168 => 66,  162 => 63,  140 => 44,  134 => 41,  128 => 38,  108 => 21,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}-Presupuesto{% endblock %}

{% block content %}
{{parent()}}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
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
            <li><a href=\"{{ path(\"index\") }}\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
            <li class=\"active\">Presupuesto</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id=\"content\">  
    <div class=\"span4\">
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"{{ asset(\"img/logo1.png\")}}\" alt=\"First slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"{{ asset(\"img/logo1.png\")}}\" alt=\"Second slide\">
          </div>
          <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"{{ asset(\"img/logo1.png\")}}\"alt=\"Third slide\">
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">-</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">></span>
        </a>
      </div>
    </div>
        <div class=\"container\">


  
<div class=\"example-wrapper\">
    
    <h1><i class=\"fas fa-address-book\"></i>{{ controller_name }}</h1>

    <!--Si no encuentra datos previos solicita ingresar datos para el presupuesto-->
    {% if controller_name == \"Datos para el presupuesto\"  %}
    
    <!--Datos para el presupuesto-->
    <div class=\"row\">
        
        <div class=\"span12\">
            <!--Verificar que no hayan campos nulos-->
            {% if camposVacios == \"Campos obligatorios vacios\"  %}
            <div class=\"alert alert-error\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Ops!</strong> Campos obligatorios vacios.
              </div>
              {% endif %}
            <!-- Description -->
            
            <dl>
              <dt>Nombre de referencia:</dt>
                <dd><input type=\"text\" name=\"nombre\" id=\"nombreReferenciaT\" class=\"form-control\" required><span class=\"asterisk_input\"></span></dd>
              <dt>Telefono</dt>
                <dd><input type=\"tel\" name=\"telContacto\" id=\"telReferenciaT\" class=\"form-control\" required><span class=\"asterisk_input\"></span></dd>
              <dt>Fecha del evento</dt>
                <dd><input type=\"text\" name=\"fecha\" id=\"fechaT\" value={{ vFecha }} class=\"form-control\" disabled></dd>
              <dt>Salon elegido</dt>
                <dd><input type=\"text\" name=\"salon\" value={{ vSalon }} id=\"salonT\" class=\"form-control\" disabled> </dd>
              <dt>Numero de personas</dt>
                <dd><input type=\"number\" min=\"15\" max=\"200\" name=\"numPersonasT\" id=\"numPersonasT\" class=\"form-control\" required>
                <br><span class=\"asterisk_input\"></span>min:15-max:200
                </dd>
                
              <dt>Menus</dt>
                <dd>
                    <select id=\"menuT\" class=\"form-control\">
                    {% for menu in menus %}
                        <option>{{ menu.nombremenu}}</option>
                    {% endfor %}
                    </select>
                </dd>
            </dl>
          </div>
          <h7 class=\"ml-5\">
            <span class=\"asterisk_input\"></span>Campos obligatorios
          </h7>
      </div>
      
  
    <input class=\"btn btn-green \" type=\"submit\" id=\"aceptar\" value=\"Aceptar\">
    {% elseif controller_name == \"Presupuesto\" %}

    <!--Datos finales de presupuesto que se enviaran por correo -->
    <div class=\"span12\">       
        <dl class=\"dl-horizontal pullquote-left\">
          <form action=\"{{ path('sendemail')}}\" method=\"POST\">
                <h2>Datos</h2>    
                <dt>Nombre</dt>
                <dd>{{nombreReferencia}}</dd>
                <dt>Telefon</dt>
                <dd>{{telReferencia}}</dd>
                
                <dt>Fecha</dt>
                <dd>{{vFecha}}</dd>
                <dt>Salon</dt>
                <dd>{{vSalon}}</dd>
                <dt>Menu</dt>
                <dd>{{menuElegido}}<br>Precio: <strong>{{precioMenu}}€</strong></dd>
                <dt>Numero personas</dt>
                <dd>{{ nPersonas }}</dd>
                <dt>Total</dt>
                <dd>{{total}}</dd>
                <br>
                        <input type=\"hidden\" name=\"nombreReferencia\" value={{nombreReferencia}}>    
                        <input type=\"hidden\" name=\"telReferencia\" value={{telReferencia}}>  
                        <input type=\"hidden\" name=\"fecha\" value={{vFecha}}>
                        <input type=\"hidden\" name=\"nombreSalon\" value={{vSalon}}>      
                        <input type=\"hidden\" name=\"menuElegido\" value={{menuElegido}}>
                        <input type=\"hidden\" name=\"precioMenu\" value={{precioMenu}}>
                        <input type=\"hidden\" name=\"nPersonas\" value={{nPersonas}}>
                        <input type=\"hidden\" name=\"total\" value={{total}}>

             <!--envio de presupuesto y impresion-->
            
                <h5>Enviar presupuesto por <strong>correo </strong> electronico</h5>
                <div class=\"form-group\">
                <h7><strong>Correo electronico</strong> </h7>
                <input type=\"email\" class=\"form-control\" name=\"correo\" aria-describedby=\"emailHelp\" placeholder=\"correo\">
                </div>
                   
                <input type=\"submit\" value=\"Enviar\" class=\"btn btn-success font-weight-bold\">
                
          </form>
        </dl>
      </div>
    
    <!--imprimir-->
      <form action=\"{{ path('imprimir') }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"nombreReferencia\" value={{nombreReferencia}}>    
                    <input type=\"hidden\" name=\"telReferencia\" value={{telReferencia}}>  
                    <input type=\"hidden\" name=\"fecha\" value={{vFecha}}>
                    <input type=\"hidden\" name=\"nombreSalon\" value={{vSalon}}>      
                    <input type=\"hidden\" name=\"menuElegido\" value={{menuElegido}}>
                    <input type=\"hidden\" name=\"precioMenu\" value={{precioMenu}}>
                    <input type=\"hidden\" name=\"nPersonas\" value={{nPersonas}}>
                    <input type=\"hidden\" name=\"total\" value={{total}}>
            <!--envio de impresion-->
            <div class=\"form-group\">
                <input type=\"submit\" value=\"Imprimir\" class=\"btn btn-success font-weight-bold\">
                <!--imprimir-->
            </div>            
      </form>

    {% endif %}
</div>
</section>
</div>
{% endblock %}
{% block javascripts %}
{{parent()}}
<script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
<script src=\"{{ asset(\"js/ajax.js\") }}\"></script>
<script>
      \$(window).ready(function(){
        \$(\"#aceptar\").click(function(ev){
          ev.preventDefault();
          buscar();
        })
      })
    function buscar(){
        
      let datos={
        \"nombreReferenciaT\":\$(\"#nombreReferenciaT\").val(),
        \"telReferenciaT\":\$(\"#telReferenciaT\").val(),
        \"fechaT\":\$(\"#fechaT\").val(),
        \"numPersonasT\":\$(\"#numPersonasT\").val(),
        \"salonT\":\$(\"#salonT\").val(),
        \"menuT\":\$(\"#menuT\").val(),
               
      };
      window.location.href =\"{{path('datosPresupuesto')}}\"+\"/\"+JSON.stringify(datos);
    }
    </script>
<script>
   /*  \$(window).ready(function(){
        \$(\"#buscarFecha\").click(function(ev){
        ev.preventDefault();
        ev.stopPropagation();
        buscarFecha();

        })
    })

    function buscarFecha(){
        var fechaTwig=\$(\"#fecha\").val();
        var url=\"{{ path('buscarPorFecha') }}\";

        \$.ajax({ 
            tipe:'POST',
            url:url,
            data:({fecha:fechaTwig}),
            //dataType:'json'
        }).done(function(datos){
            
            //convertir el objeto JSON a texto
            var json_string = JSON.stringify(datos);
 
            //convertir el texto a un nuevo objeto
            var obj = \$.parseJSON(json_string);
            alert(obj)
            /*asignar los valores obtenidos del objeto
            * a cada unos de losc controlres deseados
            * en el formulario
            \$('#nombresalon').html(obj.nombresalon);
            \$('#capacidad').html(obj.capacidad);
            \$('#tipo').html(obj.tipo);
            \$('#fecha').html(obj.fecha);
            \$('#hora').html(obj.hora);
                        console.log(obj);
                            //\$(\"#lista\").html(datos);
                        });
                } */
</script>
{% endblock %}", "presupuesto/index.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\presupuesto\\index.html.twig");
    }
}
