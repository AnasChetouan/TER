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

/* admin/create-member.html.twig */
class __TwigTemplate_a35cbd66d68b212013f8e7cb0ad34fc1edca0e304ef0cdd4f92112cdfb9ee82b extends \Twig\Template
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
        // line 3
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "admin/create-member.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "
\t<!-- Specific Page Vendor CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/pnotify/pnotify.custom.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-datatables-bs3/assets/css/datatables.css"), "html", null, true);
        echo "\" />

\t";
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        // line 15
        echo "\t\t\t\t<h2> Créer un membre</h2>
\t\t\t\t";
    }

    // line 18
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo " Créer un membre ";
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        // line 21
        echo "
\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Créer un membre</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">

                                                                \t\t\t\t\t\t\t\t\t ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Identifiant"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Adresse e-mail"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", []), "first", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Mot de passe"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", []), "second", []), 'row', ["attr" => ["class" => "form-control input-lg mb-md", "placeholder" => "Confirmer le mot de passe"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t<button class=\"mb-xs mt-xs mr-xs btn btn-lg btn-default\" type=\"submit\">Créer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo " 


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
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

    // line 53
    public function block_javascript($context, array $blocks = [])
    {
        // line 54
        echo "\t<!-- Specific Page Vendor -->
\t\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/store-js/store.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/select2/select2.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "admin/create-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 60,  161 => 59,  157 => 58,  153 => 57,  149 => 56,  145 => 55,  142 => 54,  139 => 53,  118 => 35,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  87 => 21,  84 => 20,  78 => 18,  73 => 15,  70 => 14,  63 => 10,  59 => 9,  55 => 8,  51 => 6,  48 => 5,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/create-member.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/admin/create-member.html.twig");
    }
}
