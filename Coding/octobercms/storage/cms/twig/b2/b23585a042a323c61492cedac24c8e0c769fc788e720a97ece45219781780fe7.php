<?php

/* /Applications/MAMP/htdocs/BP/Coding/octobercms/themes/theme-fore/layouts/default.htm */
class __TwigTemplate_b4937f8c55fa724ca02bed32c8d8259c9274ac3f7adbf8ea21fbdb3847b37cc6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
\t<meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
\t<meta name=\"author\" content=\"OctoberCMS\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"generator\" content=\"OctoberCMS\">
\t<!-- <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" /> -->
\t";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "\t<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/style.css"));
        // line 15
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<div class=\"page-wrap\">

\t\t\t<!-- Header -->
\t\t\t<header class=\"page-header\">
\t\t\t\t<!-- <div class=\"container\"> -->
\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav class=\"main-nav\" role=\"navigation\">
\t\t\t\t\t\t<span class=\"trigger\"><i class=\"icon-hamburger\" aria-hidden=\"true\"></i><span>Menu</span></span>
\t\t\t\t\t\t<ul class=\"nav-wrap\">
\t\t\t\t\t\t\t<li class=\"";
        // line 27
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">/ Home /</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 28
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "projects")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("creaties");
        echo "\">/ Creaties /</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img class=\"logo\" src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Logo\" /></a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "team")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("team");
        echo "\">/ Team /</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "testimonials")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("testimonials");
        echo "\">/ Getuigenissen /</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t<!-- </div> -->

\t\t\t</header>

\t\t\t<!-- Content -->
\t\t\t<section class=\"main\">
\t\t\t\t";
        // line 40
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 41
        echo "\t\t\t</section>

\t\t</div>

\t\t<!-- Footer -->
\t\t<footer class=\"page-footer\">
\t\t\t\t";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "\t\t</footer>

\t\t<!-- Scripts -->
\t\t<script src=\"";
        // line 51
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/plugin.js", 2 => "assets/javascript/app.js"));
        // line 55
        echo "\"></script>
\t\t";
        // line 56
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 57
        echo "\t\t";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 58
        echo "
\t</body>
\t</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/BP/Coding/octobercms/themes/theme-fore/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 58,  141 => 57,  134 => 56,  131 => 55,  129 => 51,  124 => 48,  120 => 47,  112 => 41,  110 => 40,  94 => 31,  86 => 30,  80 => 29,  72 => 28,  64 => 27,  50 => 15,  47 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<title>{{ this.page.title }}</title>*/
/* 	<meta name="description" content="{{ this.page.meta_description }}">*/
/* 	<meta name="title" content="{{ this.page.meta_title }}">*/
/* 	<meta name="author" content="OctoberCMS">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 	<meta name="generator" content="OctoberCMS">*/
/* 	<!-- <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" /> -->*/
/* 	{% styles %}*/
/* 	<link href="{{ [*/
/* 		'assets/css/style.css'*/
/* 		]|theme }}" rel="stylesheet">*/
/* 	</head>*/
/* 	<body>*/
/* 		<div class="page-wrap">*/
/* */
/* 			<!-- Header -->*/
/* 			<header class="page-header">*/
/* 				<!-- <div class="container"> -->*/
/* 					<!-- Nav -->*/
/* 					<nav class="main-nav" role="navigation">*/
/* 						<span class="trigger"><i class="icon-hamburger" aria-hidden="true"></i><span>Menu</span></span>*/
/* 						<ul class="nav-wrap">*/
/* 							<li class="{% if this.page.id == 'home' %}active{% endif %}"><a href="{{ 'home'|page }}">/ Home /</a></li>*/
/* 							<li class="{% if this.page.id == 'projects' %}active{% endif %}"><a href="{{ 'creaties'|page }}">/ Creaties /</a></li>*/
/* 							<li><a href="{{ 'home'|page }}"><img class="logo" src="{{ 'assets/images/logo.png'|theme }}" alt="Logo" /></a></li>*/
/* 							<li class="{% if this.page.id == 'team' %}active{% endif %}"><a href="{{ 'team'|page }}">/ Team /</a></li>*/
/* 							<li class="{% if this.page.id == 'testimonials' %}active{% endif %}"><a href="{{ 'testimonials'|page }}">/ Getuigenissen /</a></li>*/
/* 						</ul>*/
/* 					</nav>*/
/* 				<!-- </div> -->*/
/* */
/* 			</header>*/
/* */
/* 			<!-- Content -->*/
/* 			<section class="main">*/
/* 				{% page %}*/
/* 			</section>*/
/* */
/* 		</div>*/
/* */
/* 		<!-- Footer -->*/
/* 		<footer class="page-footer">*/
/* 				{% partial "footer" %}*/
/* 		</footer>*/
/* */
/* 		<!-- Scripts -->*/
/* 		<script src="{{ [*/
/* 			'assets/javascript/jquery.js',*/
/* 			'assets/javascript/plugin.js',*/
/* 			'assets/javascript/app.js',*/
/* 		]|theme }}"></script>*/
/* 		{% framework extras %}*/
/* 		{% scripts %}*/
/* */
/* 	</body>*/
/* 	</html>*/
