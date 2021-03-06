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

/* project/prep-terrain.html.twig */
class __TwigTemplate_c162ae46c32efd9347e768c0afdfe4806c4b902602098dfba2be7b48e7918df4 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'pageactuelle' => [$this, 'block_pageactuelle'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "project/prep-terrain.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"assets/vendor/pnotify/pnotify.custom.css\" />

\t";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        // line 11
        echo "\t\t\t\t<h2> Préparation et accès du terrain </h2>
\t\t\t\t";
    }

    // line 14
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo " Préparation et accès du terrain ";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        // line 17
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Préparation et accès du terrain</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", []), 'widget', ["label" => "Ajouter un type d'arbres"]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                  <label id=\"17\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des pins.\"? <span class=\"required\">*</span></label>

                                                           <div class=\"col-sm-9\" id=\"18\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_pins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div> 

                                  <label id=\"19\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des sapins.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\"id=\"20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_sapins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                            
                                  <label id=\"21\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des bouleaux.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"22\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_bouleaux", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                           
                                  <label id=\"23\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des chenes.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_chenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                  <label id=\"25\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des erables.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"26\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_erables", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                  <label id=\"27\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des frenes.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"28\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_frenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div> 
                                                           
                                  <label id=\"29\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne des noyers.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_noyers", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo " 
                                                                </div>
                                                            
                                  <label id=\"31\" class=\"col-sm-3 control-label\">Indiquez  la taille moyenne d'arbres d'autre type.\"? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"32\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taille_autres", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 

                                                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "positionTerrain", []), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quelle est la position de votre terrain ?"]);
        echo "\t
                                                            
                                                           <div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "positionTerrain", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                                </div>                           
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label id=\"1\" class=\"col-sm-3 control-label\">Quel est le nombre de pins dans votre terrain <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\" id=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_pins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "
                                                        </div>      

                              <label id=\"3\" class=\"col-sm-3 control-label\">Quel est le nombre de sapins dans votre terrain ? <span class=\"required\">*</span></label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\" id=\"4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_sapins", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                              <label id=\"5\" class=\"col-sm-3 control-label\">Quel est le nombre de bouleaux dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\"id=\"6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_bouleaux", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"7\" class=\"col-sm-3 control-label\">Quel est le nombre de chenes dans votre terrain ? <span class=\"required\">*</span></label>
                                                        
                                                        <div class=\"col-sm-9\" id=\"8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_chenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                              <label id=\"9\" class=\"col-sm-3 control-label\">Quel est le nombre d'erables dans votre terrain ? <span class=\"required\">*</span></label>
                  
                                                           <div class=\"col-sm-9\" id=\"10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_erables", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"11\" class=\"col-sm-3 control-label\">Quel est le nombre de frenes dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_frenes", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                  <label id=\"13\" class=\"col-sm-3 control-label\">Quel est le nombre de noyers dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_noyers", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t
                                  <label id=\"15\" class=\"col-sm-3 control-label\">Quel est le nombre d'arbres d'autre type dans votre terrain ? <span class=\"required\">*</span></label>
                                                            
                                                           <div class=\"col-sm-9\" id=\"16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nb_autres", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md"]]);
        echo "      
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
                                                            
                                                            
                                                            
                                                        <button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Valider</button>
                                                        ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pager\">

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

    ";
    }

    // line 154
    public function block_javascript($context, array $blocks = [])
    {
        // line 155
        echo "\t\t<script>
\t\tfor(var \$k=1; \$k<=32;\$k++){
\t\tidd=\$k.toString();
\t\tdocument.getElementById(idd).style.visibility='hidden';
\t\t} 
\t\t
\t\t

\t\t  var \$i=1;
\t\t\tvar \$j=2;
\t\t\tvar \$k=\$i + 16;
\t\t\tvar \$l=\$j + 16;
\t\t function update(){
\t\t id=\$i.toString();
\t\t id2=\$j.toString();
\t\t id3=\$k.toString();
\t\t id4=\$l.toString();
    var checked = document.getElementById(id).value;
    document.getElementById(id).style.visibility='visible';
\t\tdocument.getElementById(id2).style.visibility='visible'; 
\t\tdocument.getElementById(id3).style.visibility='visible';
\t\tdocument.getElementById(id4).style.visibility='visible'; 
\t\t \$i=\$i+2; 
\t\t \$j=\$j+2;
\t\t \$k=\$i + 16;
\t\t \$l=\$j + 16;
\t\t 
\t\t
}

//validate();
\t\t</script>
\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js\"></script>
\t\t<script src=\"assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js\"></script>
\t\t<script src=\"assets/vendor/store-js/store.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "project/prep-terrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 155,  278 => 154,  258 => 137,  248 => 130,  239 => 124,  230 => 118,  221 => 112,  212 => 106,  203 => 100,  194 => 94,  185 => 88,  176 => 82,  170 => 79,  162 => 74,  153 => 68,  144 => 62,  135 => 56,  126 => 50,  117 => 44,  108 => 38,  99 => 32,  89 => 25,  85 => 24,  76 => 17,  73 => 16,  67 => 14,  62 => 11,  59 => 10,  51 => 4,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project/prep-terrain.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/project/prep-terrain.html.twig");
    }
}
