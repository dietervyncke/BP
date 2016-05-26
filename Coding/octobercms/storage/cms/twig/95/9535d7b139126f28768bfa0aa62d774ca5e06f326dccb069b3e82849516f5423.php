<?php

/* /Applications/MAMP/htdocs/oc-fore/themes/theme-fore/partials/header-banner.htm */
class __TwigTemplate_b5a4177d2d88179889fb8eef5eb6dad49c60589b52af872b3ac64aab4d98c782 extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"one-half\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["banner_image"]) ? $context["banner_image"] : null), "html", null, true);
        echo "\" alt=\"\" />
\t</div>
\t<div class=\"one-half\">
\t\t";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/oc-fore/themes/theme-fore/partials/header-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="one-half">*/
/* 		<img src="{{ banner_image }}" alt="" />*/
/* 	</div>*/
/* 	<div class="one-half">*/
/* 		{{ content }}*/
/* 	</div>*/
/* </div>*/
