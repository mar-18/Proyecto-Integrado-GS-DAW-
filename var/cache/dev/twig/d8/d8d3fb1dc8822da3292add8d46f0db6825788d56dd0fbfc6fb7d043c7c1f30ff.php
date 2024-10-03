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

/* shared/cabecera.html.twig */
class __TwigTemplate_0ec486c7093750ead8365d49cfbb831e1f42ba7d131029d62178a708ac3d8fc6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/cabecera.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/cabecera.html.twig"));

        // line 1
        echo "<!-- start header -->
  <header>
        <div class=\"container \">
          <!-- hidden top area toggle link -->
          <div id=\"header-hidden-link\">
            <a href=\"#\" class=\"toggle-link float-left\" title=\"Encuentranos\" data-target=\".hidden-top\"><i></i>Info</a>

          </div>
          <div id=\"cerrarSesion\">
            ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"toggle-link float-right\" title=\"Cerrar sesion\" data-target=\".hidden-top\"><i></i></a>
            ";
        }
        // line 13
        echo "          </div>
          
          <!-- end toggle link -->
          <div class=\"row nomargin\">
            <div class=\"span12\">
              <div class=\"headnav\">
                <ul>
                  ";
        // line 20
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 21
            echo "                  <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"icon-user\"></i>Iniciar sesión</a></li>
                  ";
        }
        // line 23
        echo "                  <!--
                  <li><a href=\"#mySignup\" data-toggle=\"modal\"><i class=\"icon-user\"></i> Registrarse</a></li>
                  <li><a href=\"#mySignin\" data-toggle=\"modal\">Iniciar sesión</a></li>
                  -->
                </ul>
                <ul><!--
                        <form class=\"form-inline \">
                                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\">
                                <button class=\"btn btn-outline-primary my-2 my-sm-0\"  title=\"Buscar\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
                        </form>-->
                </ul>
              </div>
              <!-- Signup Modal -->
              <div id=\"mySignup\" class=\"modal styled hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySignupModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  <h4 id=\"mySignupModalLabel\">Crear <strong>cuenta</strong></h4>
                </div>
                <div class=\"modal-body\">
                  <form class=\"form-horizontal\">
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputEmail\">Email</label>
                      <div class=\"controls\">
                        <input type=\"text\" id=\"inputEmail\" placeholder=\"Email\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputSignupPassword\">Contraseña</label>
                      <div class=\"controls\">
                        <input type=\"password\" id=\"inputSignupPassword\" placeholder=\"Password\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputSignupPassword2\">Confirmar contraseña</label>
                      <div class=\"controls\">
                        <input type=\"password\" id=\"inputSignupPassword2\" placeholder=\"Password\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <div class=\"controls\">
                        <button type=\"submit\" class=\"btn\">Iniciar sesión</button>
                      </div>
                      <p class=\"aligncenter margintop20\">
                        Already have an account? <a href=\"#mySignin\" data-dismiss=\"modal\" aria-hidden=\"true\" data-toggle=\"modal\">Entrar</a>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end signup modal -->
              <!-- Sign in Modal -->
              <div id=\"mySignin\" class=\"modal styled hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySigninModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  <h4 id=\"mySigninModalLabel\">Entrar con su <strong>cuenta</strong></h4>
                </div>
                <div class=\"modal-body\">
                  <form class=\"form-horizontal\">
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputText\">Usuario</label>
                      <div class=\"controls\">
                        <input type=\"text\" id=\"inputText\" placeholder=\"Username\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputSigninPassword\">Contraseña</label>
                      <div class=\"controls\">
                        <input type=\"password\" id=\"inputSigninPassword\" placeholder=\"Password\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <div class=\"controls\">
                        <button type=\"submit\" class=\"btn\">Entrar</button>
                      </div>
                      <p class=\"aligncenter margintop20\">
                        ¿Olvido su contraseña? <a href=\"#myReset\" data-dismiss=\"modal\" aria-hidden=\"true\" data-toggle=\"modal\">Cambiar</a>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end signin modal -->
              <!-- Reset Modal -->
              <div id=\"myReset\" class=\"modal styled hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myResetModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  <h4 id=\"myResetModalLabel\">Cambiar su <strong>contraseña</strong></h4>
                </div>
                <div class=\"modal-body\">
                  <form class=\"form-horizontal\">
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputResetEmail\">Email</label>
                      <div class=\"controls\">
                        <input type=\"text\" id=\"inputResetEmail\" placeholder=\"Email\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <div class=\"controls\">
                        <button type=\"submit\" class=\"btn\">Cambiar contraseña</button>
                      </div>
                      <p class=\"aligncenter margintop20\">
                        Le enviaremos instrucciones sobre cómo restablecer su contraseña a su bandeja de entrada
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end reset modal -->
            </div>
          </div>
          <div class=\"row\">
            <div class=\"span4\">
              <div class=\"logo\">
                <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo\" /></a>
                <h1>El lugar ideal para tu evento</h1>
              </div>
            </div>
            <div class=\"span8\">
              <div class=\"navbar navbar-static-top\">
                <div class=\"navigation\">
                  <nav>
                    <ul class=\"nav topnav\">
                      <li class=\"dropdown active\">
                        <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Inicio <i class=\"icon-angle-down\"></i></a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nosotros");
        echo "\">Nosotros</a></li>
                          
                        </ul>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_index");
        echo "\">Salones </a>

                      </li>
                      <li class=\"dropdown\">
                        <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu_index");
        echo "\">Menus</i></a>
                        
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_index");
        echo "\">Eventos</i></a>
                        
                      </li>
                      ";
        // line 164
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 165
            echo "                      <li class=\"dropdown\">
                        <a href=\"#\">Mantenimiento <i class=\"icon-angle-down\"></i></a>
                        <ul class=\"dropdown-menu\">
                          ";
            // line 168
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 169
                echo "                          <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_index");
                echo "\"><i class=\"fas fa-toolbox\">Cliente </i></a></li>
                          ";
            }
            // line 171
            echo "                          <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleado_index");
            echo "\"><i class=\"fas fa-toolbox\">Empleado</i></a></li>
                          <li><a href=\"";
            // line 172
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decoracion_index");
            echo "\"><i class=\"fas fa-toolbox\">Decoración </i></a></li>
                          <li><a href=\"";
            // line 173
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_index");
            echo "\"><i class=\"fas fa-toolbox\">Evento </i></a></li>
                          <li><a href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu_index");
            echo "\"><i class=\"fas fa-toolbox\">Menú</i></a></li>
                          <li><a href=\"";
            // line 175
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_index");
            echo "\"><i class=\"fas fa-toolbox\">Salón </i></a></li>
                          <li><a href=\"";
            // line 176
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\"><i class=\"fas fa-toolbox\">Usuario </i></a></li>
                        </ul>
                      </li>
                      ";
        }
        // line 180
        echo "                      <li>
                        <a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar");
        echo "\">Contacto </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end navigation -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- end header -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/cabecera.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 181,  285 => 180,  278 => 176,  274 => 175,  270 => 174,  266 => 173,  262 => 172,  257 => 171,  251 => 169,  249 => 168,  244 => 165,  242 => 164,  236 => 161,  229 => 157,  222 => 153,  214 => 148,  209 => 146,  194 => 136,  79 => 23,  73 => 21,  71 => 20,  62 => 13,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- start header -->
  <header>
        <div class=\"container \">
          <!-- hidden top area toggle link -->
          <div id=\"header-hidden-link\">
            <a href=\"#\" class=\"toggle-link float-left\" title=\"Encuentranos\" data-target=\".hidden-top\"><i></i>Info</a>

          </div>
          <div id=\"cerrarSesion\">
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
              <a href=\"{{ path('app_logout') }}\" class=\"toggle-link float-right\" title=\"Cerrar sesion\" data-target=\".hidden-top\"><i></i></a>
            {% endif %}
          </div>
          
          <!-- end toggle link -->
          <div class=\"row nomargin\">
            <div class=\"span12\">
              <div class=\"headnav\">
                <ul>
                  {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                  <li><a href=\"{{ path(\"app_login\") }}\"><i class=\"icon-user\"></i>Iniciar sesión</a></li>
                  {% endif %}
                  <!--
                  <li><a href=\"#mySignup\" data-toggle=\"modal\"><i class=\"icon-user\"></i> Registrarse</a></li>
                  <li><a href=\"#mySignin\" data-toggle=\"modal\">Iniciar sesión</a></li>
                  -->
                </ul>
                <ul><!--
                        <form class=\"form-inline \">
                                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\">
                                <button class=\"btn btn-outline-primary my-2 my-sm-0\"  title=\"Buscar\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
                        </form>-->
                </ul>
              </div>
              <!-- Signup Modal -->
              <div id=\"mySignup\" class=\"modal styled hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySignupModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  <h4 id=\"mySignupModalLabel\">Crear <strong>cuenta</strong></h4>
                </div>
                <div class=\"modal-body\">
                  <form class=\"form-horizontal\">
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputEmail\">Email</label>
                      <div class=\"controls\">
                        <input type=\"text\" id=\"inputEmail\" placeholder=\"Email\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputSignupPassword\">Contraseña</label>
                      <div class=\"controls\">
                        <input type=\"password\" id=\"inputSignupPassword\" placeholder=\"Password\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputSignupPassword2\">Confirmar contraseña</label>
                      <div class=\"controls\">
                        <input type=\"password\" id=\"inputSignupPassword2\" placeholder=\"Password\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <div class=\"controls\">
                        <button type=\"submit\" class=\"btn\">Iniciar sesión</button>
                      </div>
                      <p class=\"aligncenter margintop20\">
                        Already have an account? <a href=\"#mySignin\" data-dismiss=\"modal\" aria-hidden=\"true\" data-toggle=\"modal\">Entrar</a>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end signup modal -->
              <!-- Sign in Modal -->
              <div id=\"mySignin\" class=\"modal styled hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySigninModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  <h4 id=\"mySigninModalLabel\">Entrar con su <strong>cuenta</strong></h4>
                </div>
                <div class=\"modal-body\">
                  <form class=\"form-horizontal\">
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputText\">Usuario</label>
                      <div class=\"controls\">
                        <input type=\"text\" id=\"inputText\" placeholder=\"Username\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputSigninPassword\">Contraseña</label>
                      <div class=\"controls\">
                        <input type=\"password\" id=\"inputSigninPassword\" placeholder=\"Password\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <div class=\"controls\">
                        <button type=\"submit\" class=\"btn\">Entrar</button>
                      </div>
                      <p class=\"aligncenter margintop20\">
                        ¿Olvido su contraseña? <a href=\"#myReset\" data-dismiss=\"modal\" aria-hidden=\"true\" data-toggle=\"modal\">Cambiar</a>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end signin modal -->
              <!-- Reset Modal -->
              <div id=\"myReset\" class=\"modal styled hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myResetModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                  <h4 id=\"myResetModalLabel\">Cambiar su <strong>contraseña</strong></h4>
                </div>
                <div class=\"modal-body\">
                  <form class=\"form-horizontal\">
                    <div class=\"control-group\">
                      <label class=\"control-label\" for=\"inputResetEmail\">Email</label>
                      <div class=\"controls\">
                        <input type=\"text\" id=\"inputResetEmail\" placeholder=\"Email\">
                      </div>
                    </div>
                    <div class=\"control-group\">
                      <div class=\"controls\">
                        <button type=\"submit\" class=\"btn\">Cambiar contraseña</button>
                      </div>
                      <p class=\"aligncenter margintop20\">
                        Le enviaremos instrucciones sobre cómo restablecer su contraseña a su bandeja de entrada
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end reset modal -->
            </div>
          </div>
          <div class=\"row\">
            <div class=\"span4\">
              <div class=\"logo\">
                <a href=\"{{ path(\"index\") }}\"><img src=\"{{ asset(\"img/logo1.png\")}}\" alt=\"logo\" class=\"logo\" /></a>
                <h1>El lugar ideal para tu evento</h1>
              </div>
            </div>
            <div class=\"span8\">
              <div class=\"navbar navbar-static-top\">
                <div class=\"navigation\">
                  <nav>
                    <ul class=\"nav topnav\">
                      <li class=\"dropdown active\">
                        <a href=\"{{ path(\"index\") }}\">Inicio <i class=\"icon-angle-down\"></i></a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"{{ path('nosotros') }}\">Nosotros</a></li>
                          
                        </ul>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"{{ path(\"salon_index\") }}\">Salones </a>

                      </li>
                      <li class=\"dropdown\">
                        <a href=\"{{ path(\"menu_index\") }}\">Menus</i></a>
                        
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"{{ path(\"evento_index\") }}\">Eventos</i></a>
                        
                      </li>
                      {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                      <li class=\"dropdown\">
                        <a href=\"#\">Mantenimiento <i class=\"icon-angle-down\"></i></a>
                        <ul class=\"dropdown-menu\">
                          {% if is_granted('ROLE_ADMIN') %}
                          <li><a href=\"{{ path(\"cliente_index\") }}\"><i class=\"fas fa-toolbox\">Cliente </i></a></li>
                          {% endif %}
                          <li><a href=\"{{ path(\"empleado_index\") }}\"><i class=\"fas fa-toolbox\">Empleado</i></a></li>
                          <li><a href=\"{{ path(\"decoracion_index\") }}\"><i class=\"fas fa-toolbox\">Decoración </i></a></li>
                          <li><a href=\"{{ path(\"evento_index\") }}\"><i class=\"fas fa-toolbox\">Evento </i></a></li>
                          <li><a href=\"{{ path(\"menu_index\") }}\"><i class=\"fas fa-toolbox\">Menú</i></a></li>
                          <li><a href=\"{{ path(\"salon_index\") }}\"><i class=\"fas fa-toolbox\">Salón </i></a></li>
                          <li><a href=\"{{ path(\"user_index\") }}\"><i class=\"fas fa-toolbox\">Usuario </i></a></li>
                        </ul>
                      </li>
                      {% endif %}
                      <li>
                        <a href=\"{{ path(\"buscar\") }}\">Contacto </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end navigation -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- end header -->", "shared/cabecera.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\shared\\cabecera.html.twig");
    }
}
