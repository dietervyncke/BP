<?php

/* /Applications/MAMP/htdocs/BP/Coding/octobercms/themes/theme-fore/pages/team.htm */
class __TwigTemplate_d0e50baf45d115969ac23a3bce74f6d0b1350c6b66df2cf55a3172ba06349efb extends Twig_Template
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
\t\t<div class=\"container\">
\t\t\t<div class=\"desc\">
\t\t\t\t";
        // line 8
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("team.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 9
        echo "\t\t\t</div>
\t\t</div>
\t</figcaption>
</figure>

<div class=\"team\">
\t<div class=\"row g0\">
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 17
            echo "\t\t<div class=\"one-third\">
\t\t\t<div class=\"image-bg member\" style=\"background-image: url('";
            // line 18
            echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute($context["member"], "imageurl", array()));
            echo "');\">
\t\t\t\t<img src=\"";
            // line 19
            echo $this->env->getExtension('CMS')->mediaFilter($this->getAttribute($context["member"], "imageurl", array()));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["member"], "imageurl", array()), "title", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["member"], "imageurl", array()), "description", array()), "html", null, true);
            echo "\"/>
\t\t\t\t<div class=\"overlay-wrapper\">
\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t";
            // line 22
            if (($this->getAttribute($context["member"], "hiredate", array()) != "0000-00-00")) {
                // line 23
                echo "\t\t\t\t\t\t<p class=\"bold\">
\t\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "name", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "job", array()), "html", null, true);
                echo " - bij Foré sinds <span class=\"bold\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["member"], "hiredate", array()), "Y"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span class=\"bold\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "name", array()), "html", null, true);
                echo "</span> - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "job", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/BP/Coding/octobercms/themes/theme-fore/pages/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  92 => 34,  84 => 31,  81 => 30,  73 => 27,  67 => 24,  64 => 23,  62 => 22,  52 => 19,  48 => 18,  45 => 17,  41 => 16,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <figure class="banner-image-wrapper">*/
/* 	<div class="image">*/
/* 		<img src="themes/theme-fore/assets/images/banner-images/banner-image-01.jpg" alt="" />*/
/* 	</div>*/
/* 	<figcaption class="banner-image">*/
/* 		<div class="container">*/
/* 			<div class="desc">*/
/* 				{% content 'team.htm' %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</figcaption>*/
/* </figure>*/
/* */
/* <div class="team">*/
/* 	<div class="row g0">*/
/* 		{% for member in members %}*/
/* 		<div class="one-third">*/
/* 			<div class="image-bg member" style="background-image: url('{{ member.imageurl|media }}');">*/
/* 				<img src="{{ member.imageurl|media }}" title="{{ member.imageurl.title }}" alt="{{ member.imageurl.description }}"/>*/
/* 				<div class="overlay-wrapper">*/
/* 					<div class="desc">*/
/* 						{% if member.hiredate != '0000-00-00' %}*/
/* 						<p class="bold">*/
/* 							{{ member.name }}*/
/* 						</p>*/
/* 						<p>*/
/* 							{{ member.job }} - bij Foré sinds <span class="bold">{{ member.hiredate|date('Y') }}</span>*/
/* 						</p>*/
/* 						{% else %}*/
/* 						<p>*/
/* 							<span class="bold">{{ member.name }}</span> - {{ member.job }}*/
/* 						</p>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* </div>*/
