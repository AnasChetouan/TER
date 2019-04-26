<?php

/* dashboard/facture.html.twig */
class __TwigTemplate_9b81854a0751fab3ae0b1ea9ea181db99dc98f051cb73addff72245540a8ff37 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/dashboard-layout.html.twig", "dashboard/facture.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'pageactuelle' => [$this, 'block_pageactuelle'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "/dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "
\t\t";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/morris/morris.css"), "html", null, true);
        echo "\" />

\t\t";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        // line 14
        echo "\t\t\t\t<h2> Facture </h2>
\t\t\t\t";
    }

    // line 17
    public function block_pageactuelle($context, array $blocks = [])
    {
        echo " Ma facture ";
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        // line 20
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">

\t\t\t\t\t\t\t\t<!-- start: page -->

\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"invoice\">
\t\t\t\t\t\t\t\t\t\t\t<header class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mt-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"h2 mt-none mb-sm text-dark text-bold\"></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"h4 m-none text-dark text-bold\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right mt-md mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address class=\"ib mr-xlg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEstimation Themes Ltd
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFaculté des Sciences, Montpellier, France
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTéléphone: 04 67 14 36 76
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\testimation@gmail.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ib\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/estimation.svg"), "html", null, true);
        echo " alt=\"OKLER Themes\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-to\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"h5 mb-xs text-dark text-semibold\">À :</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bill-data text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">Date:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-dark\">À régler avant le : </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 71
        $context["tomorrow"] = twig_date_modify_filter($this->env, "now", "+30 day");
        // line 72
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["tomorrow"] ?? null), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table invoice-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"h4 text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-id\"     class=\"text-semibold\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-item\"   class=\"text-semibold\">Objet</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-desc\"   class=\"text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-price\"  class=\"text-center text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-qty\"    class=\"text-center text-semibold\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"cell-total\"  class=\"text-center text-semibold\">Total</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Gros Oeuvre</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000001</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Etude sol </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 107
        echo twig_escape_filter($this->env, ($context["prixEtudeSol"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000002</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Preparation et accès au terrain</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 115
        echo twig_escape_filter($this->env, ($context["prixPrepTerrain"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000003</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Excavation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 123
        echo twig_escape_filter($this->env, ($context["prixExcavation"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000004</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Fondation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 131
        echo twig_escape_filter($this->env, ($context["prixFondation"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000005</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Soubassement</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 139
        echo twig_escape_filter($this->env, ($context["prixSoubassement"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000006</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Vrd</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 147
        echo twig_escape_filter($this->env, ($context["prixVrd"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000007</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Le plancher</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 155
        echo twig_escape_filter($this->env, ($context["prixPlancher"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000008</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">L'élevation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 163
        echo twig_escape_filter($this->env, ($context["prixElevation"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000009</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Charpente</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 171
        echo twig_escape_filter($this->env, ($context["prixCharpente"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000010</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Toiture</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 179
        echo twig_escape_filter($this->env, ($context["prixToiture"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000011</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Menuiserie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 187
        echo twig_escape_filter($this->env, ($context["prixMenuiserie"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Second Oeuvre</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000012</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Enduit</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 203
        echo twig_escape_filter($this->env, ($context["prixEnduit"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000013</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Isolation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 211
        echo twig_escape_filter($this->env, ($context["prixIsolation"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000014</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Revetement</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 219
        echo twig_escape_filter($this->env, ($context["prixRevetement"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000015</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Cloison</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 227
        echo twig_escape_filter($this->env, ($context["prixCloison"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000016</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Evacuation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 235
        echo twig_escape_filter($this->env, ($context["prixEvacuation"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000017</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Menuiserie intérieure</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 243
        echo twig_escape_filter($this->env, ($context["prixMenuiseriesInt"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000018</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Escaliers</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 251
        echo twig_escape_filter($this->env, ($context["prixEscaliers"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000019</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Plomberie</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 259
        echo twig_escape_filter($this->env, ($context["prixPlomberie"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000020</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Electricité</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 267
        echo twig_escape_filter($this->env, ($context["prixElectricite"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Ventilation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 275
        echo twig_escape_filter($this->env, ($context["prixVentilation"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000022</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Climatisation</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 283
        echo twig_escape_filter($this->env, ($context["prixClimatisation"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>000023</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-semibold text-dark\">Domotique</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 291
        echo twig_escape_filter($this->env, ($context["prixDomotique"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"invoice-summary\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-sm-offset-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table h5 text-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"b-top-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Hors TVA</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 306
        echo twig_escape_filter($this->env, ($context["prixTotal"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">TVA</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 310
        echo twig_escape_filter($this->env, ($context["tva"] ?? null), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"h4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Somme Total</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 314
        echo twig_escape_filter($this->env, (($context["prixTotal"] ?? null) + ($context["tva"] ?? null)), "html", null, true);
        echo " €</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text-right mr-lg\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\">Envoyer</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression", ["id" => ($context["id"] ?? null)]), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-primary ml-sm\"><i class=\"fa fa-print\"></i> Imprimer</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t\t<!-- end: page -->

\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
    }

    // line 338
    public function block_javascripts($context, array $blocks = [])
    {
        // line 339
        echo "
\t\t<!-- Specific Page Vendor -->
\t\t<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-appear/jquery.appear.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jquery-sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/raphael/raphael.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/morris/morris.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/gauge/gauge.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/snap-svg/snap.svg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/liquid-meter/liquid.meter.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"), "html", null, true);
        echo "\"></script>

\t\t";
    }

    public function getTemplateName()
    {
        return "dashboard/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 365,  600 => 364,  596 => 363,  592 => 362,  588 => 361,  584 => 360,  580 => 359,  576 => 358,  572 => 357,  568 => 356,  564 => 355,  560 => 354,  556 => 353,  552 => 352,  548 => 351,  544 => 350,  540 => 349,  536 => 348,  532 => 347,  528 => 346,  524 => 345,  520 => 344,  516 => 343,  512 => 342,  508 => 341,  504 => 339,  501 => 338,  485 => 325,  471 => 314,  464 => 310,  457 => 306,  439 => 291,  428 => 283,  417 => 275,  406 => 267,  395 => 259,  384 => 251,  373 => 243,  362 => 235,  351 => 227,  340 => 219,  329 => 211,  318 => 203,  299 => 187,  288 => 179,  277 => 171,  266 => 163,  255 => 155,  244 => 147,  233 => 139,  222 => 131,  211 => 123,  200 => 115,  189 => 107,  150 => 72,  148 => 71,  141 => 67,  130 => 59,  125 => 57,  111 => 46,  95 => 33,  80 => 20,  77 => 19,  71 => 17,  66 => 14,  63 => 13,  56 => 10,  52 => 9,  48 => 8,  42 => 5,  39 => 4,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard/facture.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/dashboard/facture.html.twig");
    }
}
