<?php

/* /Applications/MAMP/htdocs/oc-fore/themes/theme-fore/pages/categorie.htm */
class __TwigTemplate_b12e01b3c62af639b5731262b214813a9b06f88585d6335bf80afe2e05567555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- waar realisatie categorie_id === creatiecategorie id -->
<div class=\"container\">
\t<div class=\"row g80 categorie-detail detail\">
\t\t<div class=\"one-half\">
\t\t\t<h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "title", array()), "html", null, true);
        echo "</h3>
\t\t\t<p>
\t\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "body", array()), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<div class=\"skewed\">
\t\t\t\t<a class=\"tdn button\" href=\"#\">Vraag een offerte aan</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"one-half\">
\t\t\t<div class=\"image-bg\" style=\"background-image: url('";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "cover_image", array()), "path", array()), "html", null, true);
        echo "');\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "cover_image", array()), "path", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "cover_image", array()), "title", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "cover_image", array()), "description", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["realisaties"]) ? $context["realisaties"] : null)) > 0)) {
            // line 21
            echo "\t<h3>Realisaties</h3>
\t<div class=\"isotope\">
\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["realisaties"]) ? $context["realisaties"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["realisatie"]) {
                // line 24
                echo "\t\t<div>
\t\t\t<a class=\"tdn\" href=\"";
                // line 25
                echo $this->env->getExtension('CMS')->pageFilter("realisatie-detail", array("slug" => $this->getAttribute($context["realisatie"], "slug", array())));
                echo "\">
\t\t\t\t<img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["realisatie"], "realisation_images", array()), 0, array(), "array"), "thumb", array(0 => 300, 1 => 300, 2 => array("mode" => "crop")), "method"), "html", null, true);
                echo "\" />
\t\t\t</a>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisatie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t</div>
\t";
        }
        // line 32
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/oc-fore/themes/theme-fore/pages/categorie.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  83 => 30,  73 => 26,  69 => 25,  66 => 24,  62 => 23,  58 => 21,  56 => 20,  44 => 15,  40 => 14,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <!-- waar realisatie categorie_id === creatiecategorie id -->*/
/* <div class="container">*/
/* 	<div class="row g80 categorie-detail detail">*/
/* 		<div class="one-half">*/
/* 			<h3>{{ categorie.title }}</h3>*/
/* 			<p>*/
/* 				{{ categorie.body }}*/
/* 			</p>*/
/* 			<div class="skewed">*/
/* 				<a class="tdn button" href="#">Vraag een offerte aan</a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="one-half">*/
/* 			<div class="image-bg" style="background-image: url('{{  categorie.cover_image.path }}');">*/
/* 				<img src="{{ categorie.cover_image.path }}" title="{{ categorie.cover_image.title }}" alt="{{ categorie.cover_image.description }}"/>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% if realisaties|length > 0 %}*/
/* 	<h3>Realisaties</h3>*/
/* 	<div class="isotope">*/
/* 		{% for realisatie in realisaties %}*/
/* 		<div>*/
/* 			<a class="tdn" href="{{ 'realisatie-detail'|page({ slug: realisatie.slug }) }}">*/
/* 				<img src="{{ realisatie.realisation_images[0].thumb(300,300,{'mode':'crop'}) }}" />*/
/* 			</a>*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* 	{% endif %}*/
/* */
/* </div>*/
