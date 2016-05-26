<?php

/* /Applications/MAMP/htdocs/oc-fore/themes/theme-fore/pages/testimonial-detail.htm */
class __TwigTemplate_69d721f59322716cdad77e20a54aa2fb508962913a0186fd20d706c9f30ea884 extends Twig_Template
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
\t<div class=\"row g80 detail testimonial-detail\">
\t\t<div class=\"one-half\">
\t\t\t<h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "name", array()), "html", null, true);
        echo "</h3>
\t\t\t<p>
\t\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "full_description", array()), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t<div class=\"one-half\">
\t\t\t<div class=\"image-bg\" style=\"background-image: url('";
        // line 10
        echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "person_image_url", array()));
        echo "');\">
\t\t\t\t<img src=\"";
        // line 11
        echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "person_image_url", array()));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "person_image_url", array()), "title", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "person_image_url", array()), "description", array()), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"isotope\">
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "project_image_url", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 17
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "thumb", array(0 => 300, 1 => 300, 2 => array("mode" => "crop")), "method"), "html", null, true);
            echo "\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/oc-fore/themes/theme-fore/pages/testimonial-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  56 => 17,  52 => 16,  40 => 11,  36 => 10,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/* 	<div class="row g80 detail testimonial-detail">*/
/* 		<div class="one-half">*/
/* 			<h3>{{ testimonial.name }}</h3>*/
/* 			<p>*/
/* 				{{ testimonial.full_description }}*/
/* 			</p>*/
/* 		</div>*/
/* 		<div class="one-half">*/
/* 			<div class="image-bg" style="background-image: url('{{  testimonial.person_image_url|media }}');">*/
/* 				<img src="{{ testimonial.person_image_url|media }}" title="{{ testimonial.person_image_url.title }}" alt="{{ testimonial.person_image_url.description }}"/>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="isotope">*/
/* 		{% for image in testimonial.project_image_url %}*/
/* 			<img src="{{ image.thumb(300,300,{'mode':'crop'}) }}" />*/
/* 		{% endfor %}*/
/* 	</div>*/
/* </div>*/
