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

/* index/index.html.twig */
class __TwigTemplate_e78b1d18b197ff906cb55fa80f6a3870b0c1f6e21eab91b80592e6d9e6e190f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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
        echo "  ";
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
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div id=\"wrapper\">
    <!-- toggle top area -->
    <div class=\"hidden-top\">
      <div class=\"hidden-top-inner container\">
        <div class=\"row\">
          <div class=\"span12\">
            <ul>
              <li><strong>Estamos especializados para cualquier tipo de evento</strong></li>
              <li>Direccion: Avenida 5-65</li>
              <li>LLamanos <i class=\"icon-phone\"></i> (+34) 676-7778-90 </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    
    <section id=\"featured\">
      <!-- start slider -->
      <!-- Slider -->
      <div id=\"nivo-slider\">
        <div class=\"nivo-slider\">
          <!-- Slide #1 image -->
          <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides/nivo/vs1.jpg"), "html", null, true);
        echo "\" alt=\"slide1\" title=\"#caption-1\" />
          <!-- Slide #2 image -->
          <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides/nivo/vs2.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"#caption-2\" />
          <!-- Slide #3 image -->
          <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slides/nivo/vs3.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"#caption-3\" />
        </div>
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"span12\">
              <!-- Slide #1 caption -->
              <div class=\"nivo-caption\" id=\"caption-1\">
                <div>
                  <h2>Salones <strong>unicos</strong></h2>
                  <p>
                    Estilos unicos para cada evento.
                  </p>
                  <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_index");
        echo "\" class=\"btn btn-theme\">Ver más</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class=\"nivo-caption\" id=\"caption-2\">
                <div>
                  <h2>Adecuados <strong>especialmente para ti</strong></h2>
                  <p>
                    El detalle especial que necesitas.
                  </p>
                  <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_index");
        echo "\" class=\"btn btn-theme\">Ver más</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class=\"nivo-caption\" id=\"caption-3\">
                <div>
                  <h2>Recuerdos <strong>inolvidable</strong></h2>
                  <p>
                    Para compartir con toda la familia!.
                  </p>
                  <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_index");
        echo "\" class=\"btn btn-theme\">Ver más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class=\"callaction\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"big-cta\">
              <div class=\"cta-text\">
                <h3>Hemos realizados eventos <span class=\"highlight\"><strong>fantasticos</strong></span> este año!</h3>
              </div>
              <div class=\"cta floatright\">
                <a class=\"btn btn-large btn-theme btn-rounded\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscar");
        echo "\">Pedir presupuesto</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id=\"content\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"row\">
              <div class=\"span4\">
                <div class=\"box aligncenter\">
                  <div class=\"aligncenter icon\">
                    <i class=\"icon-briefcase icon-circled icon-64 active\"></i>
                  </div>
                  <div class=\"text\">
                    <h6>Nuestros salones</h6>
                    <p>
                      Puedes ver la calidad y confort que ofrecemos en de nuestros salones
                    </p>
                    <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salon_index");
        echo "\">Ir</a>
                  </div>
                </div>
              </div>
              <div class=\"span4\">
                <div class=\"box aligncenter\">
                  <div class=\"aligncenter icon\">
                    <i class=\"icon-desktop icon-circled icon-64 active\"></i>
                  </div>
                  <div class=\"text\">
                    <h6>Eventos</h6>
                    <p>
                      Nuestro compromiso es crear el evento especial y único para ti
                    </p>
                    <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_index");
        echo "\">Ir</a>
                  </div>
                </div>
              </div>
              <div class=\"span4\">
                <div class=\"box aligncenter\">
                  <div class=\"aligncenter icon\">
                    <i class=\"icon-beaker icon-circled icon-64 active\"></i>
                  </div>
                  <div class=\"text\">
                    <h6>Menus</h6>
                    <p>
                      Contamos con chefs profesionales que queras repetir!
                    </p>
                    <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu_index");
        echo "\">Ir</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- divider -->
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"solidline\">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class=\"row\">
          <div class=\"span12\">
            <h4 class=\"heading\">Eventos <strong>recientes</strong></h4>
            <div class=\"row\">
              <section id=\"projects\">
                <ul id=\"thumbs\" class=\"portfolio\">
        <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 design\" data-id=\"id-0\" data-type=\"web\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Conferencia\" href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-01-full.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/thumbs/image-01.jpg"), "html", null, true);
        echo "\" alt=\"Imagen del evento\">
                  </li>
          <!-- End Item Project -->
          <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 design\" data-id=\"id-1\" data-type=\"icon\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Reunión familiar\" href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-02-full.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/thumbs/image-02.jpg"), "html", null, true);
        echo "\" alt=\"Imagen del evento\">
                  </li>
        <!-- End Item Project -->
        <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-2\" data-type=\"illustrator\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Cumpleaños\" href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-03-full.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/thumbs/image-03.jpg"), "html", null, true);
        echo "\" alt=\"Imagen del evento\">
                  </li>
          <!-- End Item Project -->
          <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-2\" data-type=\"illustrator\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Reunión\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-04-full.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/thumbs/image-04.jpg"), "html", null, true);
        echo "\" alt=\"Imagen del evento\">
                  </li>
          <!-- End Item Project -->
          <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-4\" data-type=\"web\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Boda\" href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-05-full.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/thumbs/image-05.jpg"), "html", null, true);
        echo "\" alt=\"Imagen del evento\">
                  </li>
          <!-- End Item Project -->
          <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-5\" data-type=\"icon\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Conferencia\" href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-06-full.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/thumbs/image-06.jpg"), "html", null, true);
        echo "\" alt=\"Imagen del evento\">
                  </li>
            <!-- End Item Project -->
            <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-2\" data-type=\"illustrator\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Graduación\" href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-07-full.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/thumbs/image-07.jpg"), "html", null, true);
        echo "\" alt=\"Imagen del evento\">
                  </li>
            <!-- End Item Project -->
            <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 design\" data-id=\"id-0\" data-type=\"web\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Taller\" href=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/full/image-08-full.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/works/thumbs/image-08.jpg"), "html", null, true);
        echo "\" alt=\"Imagen del evento\">
                  </li>
            <!-- End Item Project -->
                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"solidline\">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class=\"row\">
          <div class=\"span12\">
            <h4>Nuestro <strong>colaboradores</strong></h4>
            <ul id=\"mycarousel\" class=\"jcarousel-skin-tango recent-jcarousel clients\">
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client1.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client2.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client3.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client4.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client5.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client6.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client1.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client2.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client3.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client4.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client5.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dummies/clients/client6.png"), "html", null, true);
        echo "\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"aligncenter\">
              <div id=\"twitter-wrapper\">
                <div id=\"twitter\">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
  <a href=\"#\" class=\"scrollup\"><i class=\"icon-chevron-up icon-square icon-32 active\"></i></a>
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 354
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 355
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 355,  583 => 354,  546 => 327,  538 => 322,  530 => 317,  522 => 312,  514 => 307,  506 => 302,  498 => 297,  490 => 292,  482 => 287,  474 => 282,  466 => 277,  458 => 272,  432 => 249,  424 => 244,  415 => 238,  407 => 233,  398 => 227,  390 => 222,  381 => 216,  373 => 211,  364 => 205,  356 => 200,  347 => 194,  339 => 189,  330 => 183,  322 => 178,  313 => 172,  305 => 167,  276 => 141,  259 => 127,  242 => 113,  217 => 91,  196 => 73,  183 => 63,  170 => 53,  155 => 41,  150 => 39,  145 => 37,  113 => 8,  103 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}{% endblock %}{#Herencia de la plantilla base utilizando parent#}
{% block stylesheets %}
  {{parent()}}
{% endblock %}
{% block content %}
{{parent()}}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div id=\"wrapper\">
    <!-- toggle top area -->
    <div class=\"hidden-top\">
      <div class=\"hidden-top-inner container\">
        <div class=\"row\">
          <div class=\"span12\">
            <ul>
              <li><strong>Estamos especializados para cualquier tipo de evento</strong></li>
              <li>Direccion: Avenida 5-65</li>
              <li>LLamanos <i class=\"icon-phone\"></i> (+34) 676-7778-90 </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    
    <section id=\"featured\">
      <!-- start slider -->
      <!-- Slider -->
      <div id=\"nivo-slider\">
        <div class=\"nivo-slider\">
          <!-- Slide #1 image -->
          <img src=\"{{ asset(\"img/slides/nivo/vs1.jpg\")}}\" alt=\"slide1\" title=\"#caption-1\" />
          <!-- Slide #2 image -->
          <img src=\"{{ asset(\"img/slides/nivo/vs2.jpg\")}}\" alt=\"\" title=\"#caption-2\" />
          <!-- Slide #3 image -->
          <img src=\"{{ asset(\"img/slides/nivo/vs3.jpg\")}}\" alt=\"\" title=\"#caption-3\" />
        </div>
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"span12\">
              <!-- Slide #1 caption -->
              <div class=\"nivo-caption\" id=\"caption-1\">
                <div>
                  <h2>Salones <strong>unicos</strong></h2>
                  <p>
                    Estilos unicos para cada evento.
                  </p>
                  <a href=\"{{ path(\"salon_index\") }}\" class=\"btn btn-theme\">Ver más</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class=\"nivo-caption\" id=\"caption-2\">
                <div>
                  <h2>Adecuados <strong>especialmente para ti</strong></h2>
                  <p>
                    El detalle especial que necesitas.
                  </p>
                  <a href=\"{{ path(\"salon_index\") }}\" class=\"btn btn-theme\">Ver más</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class=\"nivo-caption\" id=\"caption-3\">
                <div>
                  <h2>Recuerdos <strong>inolvidable</strong></h2>
                  <p>
                    Para compartir con toda la familia!.
                  </p>
                  <a href=\"{{ path(\"salon_index\") }}\" class=\"btn btn-theme\">Ver más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class=\"callaction\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"big-cta\">
              <div class=\"cta-text\">
                <h3>Hemos realizados eventos <span class=\"highlight\"><strong>fantasticos</strong></span> este año!</h3>
              </div>
              <div class=\"cta floatright\">
                <a class=\"btn btn-large btn-theme btn-rounded\" href=\"{{ path(\"buscar\") }}\">Pedir presupuesto</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id=\"content\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"row\">
              <div class=\"span4\">
                <div class=\"box aligncenter\">
                  <div class=\"aligncenter icon\">
                    <i class=\"icon-briefcase icon-circled icon-64 active\"></i>
                  </div>
                  <div class=\"text\">
                    <h6>Nuestros salones</h6>
                    <p>
                      Puedes ver la calidad y confort que ofrecemos en de nuestros salones
                    </p>
                    <a href=\"{{ path(\"salon_index\") }}\">Ir</a>
                  </div>
                </div>
              </div>
              <div class=\"span4\">
                <div class=\"box aligncenter\">
                  <div class=\"aligncenter icon\">
                    <i class=\"icon-desktop icon-circled icon-64 active\"></i>
                  </div>
                  <div class=\"text\">
                    <h6>Eventos</h6>
                    <p>
                      Nuestro compromiso es crear el evento especial y único para ti
                    </p>
                    <a href=\"{{ path(\"evento_index\") }}\">Ir</a>
                  </div>
                </div>
              </div>
              <div class=\"span4\">
                <div class=\"box aligncenter\">
                  <div class=\"aligncenter icon\">
                    <i class=\"icon-beaker icon-circled icon-64 active\"></i>
                  </div>
                  <div class=\"text\">
                    <h6>Menus</h6>
                    <p>
                      Contamos con chefs profesionales que queras repetir!
                    </p>
                    <a href=\"{{ path(\"menu_index\") }}\">Ir</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- divider -->
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"solidline\">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class=\"row\">
          <div class=\"span12\">
            <h4 class=\"heading\">Eventos <strong>recientes</strong></h4>
            <div class=\"row\">
              <section id=\"projects\">
                <ul id=\"thumbs\" class=\"portfolio\">
        <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 design\" data-id=\"id-0\" data-type=\"web\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Conferencia\" href=\"{{ asset(\"img/works/full/image-01-full.jpg\")}}\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"{{ asset(\"img/works/thumbs/image-01.jpg\")}}\" alt=\"Imagen del evento\">
                  </li>
          <!-- End Item Project -->
          <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 design\" data-id=\"id-1\" data-type=\"icon\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Reunión familiar\" href=\"{{ asset(\"img/works/full/image-02-full.jpg\")}}\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"{{ asset(\"img/works/thumbs/image-02.jpg\")}}\" alt=\"Imagen del evento\">
                  </li>
        <!-- End Item Project -->
        <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-2\" data-type=\"illustrator\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Cumpleaños\" href=\"{{ asset(\"img/works/full/image-03-full.jpg\")}}\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"{{ asset(\"img/works/thumbs/image-03.jpg\")}}\" alt=\"Imagen del evento\">
                  </li>
          <!-- End Item Project -->
          <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-2\" data-type=\"illustrator\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Reunión\" href=\"{{ asset(\"img/works/full/image-04-full.jpg\")}}\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"{{ asset(\"img/works/thumbs/image-04.jpg\")}}\" alt=\"Imagen del evento\">
                  </li>
          <!-- End Item Project -->
          <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-4\" data-type=\"web\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Boda\" href=\"{{ asset(\"img/works/full/image-05-full.jpg\")}}\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"{{ asset(\"img/works/thumbs/image-05.jpg\")}}\" alt=\"Imagen del evento\">
                  </li>
          <!-- End Item Project -->
          <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-5\" data-type=\"icon\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Conferencia\" href=\"{{ asset(\"img/works/full/image-06-full.jpg\")}}\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"{{ asset(\"img/works/thumbs/image-06.jpg\")}}\" alt=\"Imagen del evento\">
                  </li>
            <!-- End Item Project -->
            <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 photography\" data-id=\"id-2\" data-type=\"illustrator\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Graduación\" href=\"{{ asset(\"img/works/full/image-07-full.jpg\")}}\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"{{ asset(\"img/works/thumbs/image-07.jpg\")}}\" alt=\"Imagen del evento\">
                  </li>
            <!-- End Item Project -->
            <!-- Item Project and Filter Name -->
                  <li class=\"item-thumbs span3 design\" data-id=\"id-0\" data-type=\"web\">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class=\"hover-wrap fancybox\" data-fancybox-group=\"gallery\" title=\"Taller\" href=\"{{ asset(\"img/works/full/image-08-full.jpg\")}}\">
\t\t\t\t\t\t<span class=\"overlay-img\"></span>
\t\t\t\t\t\t<span class=\"overlay-img-thumb font-icon-plus\"></span>
\t\t\t\t\t\t</a>
                    <!-- Thumb Image and Description -->
                    <img src=\"{{ asset(\"img/works/thumbs/image-08.jpg\")}}\" alt=\"Imagen del evento\">
                  </li>
            <!-- End Item Project -->
                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"solidline\">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class=\"row\">
          <div class=\"span12\">
            <h4>Nuestro <strong>colaboradores</strong></h4>
            <ul id=\"mycarousel\" class=\"jcarousel-skin-tango recent-jcarousel clients\">
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client1.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client2.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client3.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client4.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client5.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client6.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client1.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client2.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client3.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client4.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client5.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
              <li>
                <a href=\"#\">
\t\t\t\t\t<img src=\"{{ asset(\"img/dummies/clients/client6.png\")}}\" class=\"client-logo\" alt=\"\" />
\t\t\t\t\t</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"span12\">
            <div class=\"aligncenter\">
              <div id=\"twitter-wrapper\">
                <div id=\"twitter\">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
  <a href=\"#\" class=\"scrollup\"><i class=\"icon-chevron-up icon-square icon-32 active\"></i></a>
  
{% endblock %}
{% block javascripts %}
  {{parent()}}
{% endblock %}", "index/index.html.twig", "C:\\wamp64\\www\\DAWESE\\aGestion\\templates\\index\\index.html.twig");
    }
}
