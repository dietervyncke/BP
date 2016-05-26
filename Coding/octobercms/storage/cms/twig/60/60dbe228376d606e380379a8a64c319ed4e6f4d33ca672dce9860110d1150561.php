<?php

/* /Applications/MAMP/htdocs/BP/Coding/octobercms/themes/theme-fore/pages/testimonials.htm */
class __TwigTemplate_313529133631ee3bedb24b6026527b8c44bce9048b4083f686fee78b36a135f4 extends Twig_Template
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
        echo "<figure class=\"banner-image-wrapper\">
\t<div class=\"image\">
\t\t<img src=\"themes/theme-fore/assets/images/banner-images/banner-image-01.jpg\" alt=\"\" />
\t</div>
\t<figcaption class=\"banner-image\">
\t\t<div class=\"desc\">
\t\t\t";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("testimonials.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 8
        echo "\t\t</div>
\t</figcaption>
</figure>

<!-- <div class=\"container\"> -->
\t<div class=\"row g0 testimonials\">
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testimonials"]) ? $context["testimonials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 15
            echo "\t\t<div class=\"one-half\">
\t\t\t<a class=\"tdn\" href=\"";
            // line 16
            echo $this->env->getExtension('CMS')->pageFilter("testimonial-detail", array("slug" => $this->getAttribute($context["testimonial"], "slug", array())));
            echo "\">
\t\t\t<div class=\"row g0 testimonial\">
\t\t\t\t\t<div class=\"one-third\">
\t\t\t\t\t\t<div class=\"image-bg\" style=\"background-image: url('";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "project_image_url", array()), 0, array()), "path", array()), "html", null, true);
            echo "');\">
\t\t\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "project_image_url", array()), 0, array()), "path", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"one-third\">
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "short_description", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"getuigenis\">
\t\t\t\t\t\t\t\t- ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "name", array()), "html", null, true);
            echo " -
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"one-third\">
\t\t\t\t\t\t<div class=\"image-bg\" style=\"background-image: url('";
            // line 34
            echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute($context["testimonial"], "person_image_url", array()));
            echo "');\">
\t\t\t\t\t\t\t<img src=\"";
            // line 35
            echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute($context["testimonial"], "person_image_url", array()));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "person_image_url", array()), "title", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "person_image_url", array()), "description", array()), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t</div>
<!-- </div> -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/BP/Coding/octobercms/themes/theme-fore/pages/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  83 => 35,  79 => 34,  71 => 29,  65 => 26,  56 => 20,  52 => 19,  46 => 16,  43 => 15,  39 => 14,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <figure class="banner-image-wrapper">*/
/* 	<div class="image">*/
/* 		<img src="themes/theme-fore/assets/images/banner-images/banner-image-01.jpg" alt="" />*/
/* 	</div>*/
/* 	<figcaption class="banner-image">*/
/* 		<div class="desc">*/
/* 			{% content 'testimonials.htm' %}*/
/* 		</div>*/
/* 	</figcaption>*/
/* </figure>*/
/* */
/* <!-- <div class="container"> -->*/
/* 	<div class="row g0 testimonials">*/
/* 		{% for testimonial in testimonials %}*/
/* 		<div class="one-half">*/
/* 			<a class="tdn" href="{{ 'testimonial-detail'|page({ slug: testimonial.slug }) }}">*/
/* 			<div class="row g0 testimonial">*/
/* 					<div class="one-third">*/
/* 						<div class="image-bg" style="background-image: url('{{  testimonial.project_image_url.0.path }}');">*/
/* 							<img src="{{ testimonial.project_image_url.0.path }}" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="one-third">*/
/* 						<div class="desc">*/
/* 							<p>*/
/* 								{{ testimonial.short_description }}*/
/* 							</p>*/
/* 							<p class="getuigenis">*/
/* 								- {{ testimonial.name }} -*/
/* 							</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="one-third">*/
/* 						<div class="image-bg" style="background-image: url('{{  testimonial.person_image_url|media }}');">*/
/* 							<img src="{{ testimonial.person_image_url|media }}" title="{{ testimonial.person_image_url.title }}" alt="{{ testimonial.person_image_url.description }}"/>*/
/* 						</div>*/
/* 					</div>*/
/* 			</div>*/
/* 			</a>*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* <!-- </div> -->*/
