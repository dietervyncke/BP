<?php

/* /Applications/MAMP/htdocs/BP/Coding/octobercms/themes/theme-fore/pages/creaties.htm */
class __TwigTemplate_5f2c2d60d47a81f74c66f3342621eb2a5d8cb6389404a297e8cb80e62dbdb3b8 extends Twig_Template
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
        echo "<!-- <div class=\"container\"> -->
\t<div class=\"row g0 categories\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["creaties"]) ? $context["creaties"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["creatie"]) {
            // line 4
            echo "\t\t<div class=\"one-half categorie\">
\t\t\t<a class=\"tdn\" href=\"";
            // line 5
            echo $this->env->getExtension('CMS')->pageFilter("categorie", array("slug" => $this->getAttribute($context["creatie"], "slug", array())));
            echo "\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"one-third wrap\">
\t\t\t\t\t\t<div class=\"va-wrap desc\">
\t\t\t\t\t\t\t<div class=\"va-b\">
\t\t\t\t\t\t\t\t<h3 class=\"undl\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["creatie"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["creatie"], "short_description", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"two-third\">
\t\t\t\t\t\t<div class=\"image-bg\" style=\"background-image: url('";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["creatie"], "cover_image", array()), "path", array()), "html", null, true);
            echo "');\">
\t\t\t\t\t\t\t<img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["creatie"], "cover_image", array()), "path", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['creatie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t</div>
<!-- </div> -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/BP/Coding/octobercms/themes/theme-fore/pages/creaties.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  58 => 21,  54 => 20,  44 => 13,  38 => 10,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- <div class="container"> -->*/
/* 	<div class="row g0 categories">*/
/* 		{% for creatie in creaties %}*/
/* 		<div class="one-half categorie">*/
/* 			<a class="tdn" href="{{ 'categorie'|page({ slug: creatie.slug }) }}">*/
/* 				<div class="row">*/
/* 					<div class="one-third wrap">*/
/* 						<div class="va-wrap desc">*/
/* 							<div class="va-b">*/
/* 								<h3 class="undl">{{ creatie.title }}</h3>*/
/* 								<hr>*/
/* 								<p>*/
/* 									{{ creatie.short_description }}*/
/* 								</p>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 					<div class="two-third">*/
/* 						<div class="image-bg" style="background-image: url('{{  creatie.cover_image.path }}');">*/
/* 							<img src="{{ creatie.cover_image.path }}" />*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</a>*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* <!-- </div> -->*/
