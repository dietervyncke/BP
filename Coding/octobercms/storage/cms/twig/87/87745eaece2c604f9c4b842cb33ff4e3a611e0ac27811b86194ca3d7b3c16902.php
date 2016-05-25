<?php

/* /Applications/MAMP/htdocs/oc-fore/themes/theme-fore/pages/realisatie-detail.htm */
class __TwigTemplate_c445ac444a4701ffbc0380ef2f3890892a3982ccb24845c9ce1497dc325073a3 extends Twig_Template
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
        echo "<div class=\"container\">
\t<div class=\"row g80\">
\t\t<div class=\"one-third\">
\t\t\t<h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisatie"]) ? $context["realisatie"] : null), "title", array()), "html", null, true);
        echo "</h3>
\t\t\t\t";
        // line 5
        echo $this->getAttribute((isset($context["realisatie"]) ? $context["realisatie"] : null), "body", array());
        echo "
\t\t</div>
\t\t<div class=\"two-third\">
\t\t\t<div class=\"isotope\">
\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["realisatie"]) ? $context["realisatie"] : null), "realisation_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 10
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "thumb", array(0 => 313, 1 => array("mode" => "crop")), "method"), "html", null, true);
            echo "\" />
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t</div>
\t\t</div>
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/oc-fore/themes/theme-fore/pages/realisatie-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  39 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/* 	<div class="row g80">*/
/* 		<div class="one-third">*/
/* 			<h3>{{ realisatie.title }}</h3>*/
/* 				{{ realisatie.body|raw }}*/
/* 		</div>*/
/* 		<div class="two-third">*/
/* 			<div class="isotope">*/
/* 				{% for image in realisatie.realisation_images %}*/
/* 					<img src="{{ image.thumb(313,{'mode':'crop'}) }}" />*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* </div>*/
