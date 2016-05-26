<?php

/* /Applications/MAMP/htdocs/oc-fore/themes/theme-fore/pages/home.htm */
class __TwigTemplate_1bdc88a4678cc766ef20163b4a1f6f01c9a38918c1bd045750410b97d85cedf1 extends Twig_Template
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
        echo "<!-- ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['banner_image'] = "themes/theme-fore/assets/images/banner-images/banner-image-01.jpg"        ;
        $context['__cms_partial_params']['content'] = (isset($context["foo"]) ? $context["foo"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("header-banner"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo " -->
<figure class=\"banner-image-wrapper\">
\t<div class=\"image\">
\t\t<img src=\"themes/theme-fore/assets/images/banner-images/banner-image-01.jpg\" alt=\"\" />
\t</div>
\t<figcaption class=\"banner-image\">
\t\t<div class=\"container\">
\t\t\t<div class=\"desc\">
\t\t\t\t";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "\t\t\t</div>
\t\t</div>
\t</figcaption>
</figure>

<!-- <div class=\"container\"> -->
\t<div class=\"row grid-home\">
\t\t<div class=\"one-third\">
\t\t\t<div class=\"h130 home-project-bg\" style=\"background-image: url('themes/theme-fore/assets/images/projects/mederwerker1.jpg')\">
\t\t\t\t<img src=\"themes/theme-fore/assets/images/projects/mederwerker1.jpg\" alt=\"\" />
\t\t\t</div>
\t\t\t<div class=\"h130 nb-wrapper\">
\t\t\t\t<div class=\"va-wrap\">
\t\t\t\t\t<div class=\"va-m\">
\t\t\t\t\t\t<p class=\"mb10\">
\t\t\t\t\t\t\tScrhijf je voor de driemaandelijkse nieuwsbrief
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<form class=\"skewed\" action=\"index.html\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"cm-hldloh-hldloh\" id=\"fieldEmail\" class=\"email\">
\t\t\t\t\t\t\t<input type=\"submit\" id=\"submit\" value=\"Inschrijven\" class=\"submit\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"h260 home-project-bg\" style=\"background-image: url('themes/theme-fore/assets/images/projects/mederwerker1.jpg')\">
\t\t\t\t<img src=\"themes/theme-fore/assets/images/projects/mederwerker1.jpg\" alt=\"\" />
\t\t\t</div>
\t\t</div>


\t\t<div class=\"one-third\">
\t\t\t<div class=\"h130 news-item-wrapper\">
\t\t\t\t<div class=\"news-item\">
\t\t\t\t\t<div class=\"va-wrap\">
\t\t\t\t\t\t<div class=\"va-m\">
\t\t\t\t\t\t\t<h6 class=\"date\">";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["first_newsItem"]) ? $context["first_newsItem"] : null), "updated_at", array()), "d.m.Y"), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["first_newsItem"]) ? $context["first_newsItem"] : null), "short_description", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- <p class=\"more\">
\t\t\t\t\t\t\t\t<a class=\"tdn\" href=\"";
        // line 50
        echo $this->env->getExtension('CMS')->pageFilter("news-detail", array("slug" => $this->getAttribute((isset($context["first_newsItem"]) ? $context["first_newsItem"] : null), "slug", array())));
        echo "\">Lees meer</a>
\t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"h130 title-wrap\">
\t\t\t\t<div class=\"va-wrap\">
\t\t\t\t\t<div class=\"va-m\">
\t\t\t\t\t\t<h2>Laatste<br/>Nieuws</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newsItems"]) ? $context["newsItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["newsItem"]) {
            // line 64
            echo "\t\t\t<div class=\"h130 news-item-wrapper\">
\t\t\t\t<div class=\"news-item\">
\t\t\t\t\t<div class=\"va-wrap\">
\t\t\t\t\t\t<div class=\"va-m\">
\t\t\t\t\t\t\t<h6 class=\"date\">";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["newsItem"], "updated_at", array()), "d.m.Y"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\t";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsItem"], "short_description", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- <p class=\"more\">
\t\t\t\t\t\t\t\t<a class=\"tdn\" href=\"";
            // line 73
            echo $this->env->getExtension('CMS')->pageFilter("news-detail", array("slug" => $this->getAttribute($context["newsItem"], "slug", array())));
            echo "\">Lees meer</a>
\t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t</div>
\t\t<div class=\"one-third\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"one-half\">
\t\t\t\t\t<div class=\"h260 home-project-bg\" style=\"background-image: url('themes/theme-fore/assets/images/projects/tony.png')\">
\t\t\t\t\t\t<img src=\"themes/theme-fore/assets/images/projects/tony.png\" alt=\"\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"one-half\">
\t\t\t\t\t<div class=\"h260 home-about\">
\t\t\t\t\t\t";
        // line 90
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("welkomst-block-homepagina.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 91
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"one-half\">
\t\t\t\t\t<div class=\"h260 home-contact\">
\t\t\t\t\t\t<div class=\"va-wrap\">
\t\t\t\t\t\t\t<div class=\"va-b\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<strong>Foré nv /</strong> <br>
\t\t\t\t\t\t\t\t\tRinglaan 11 / 9900 Eeklo / <br>
\t\t\t\t\t\t\t\t\tBelgië /
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tT +32 (0)9 377 77 77 / <br>
\t\t\t\t\t\t\t\t\tF +32 (0)9 378 77 77 /
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tE <a class=\"tdn\" href=\"mailto:info@fore.be\">info@fore.be</a> /
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"one-half\">
\t\t\t\t\t<div class=\"home-project-bg h260 home-social\" style=\"background-image: url('themes/theme-fore/assets/images/projects/huisarts04.jpg')\">
\t\t\t\t\t\t<!-- <div class=\"va-wrap\">
\t\t\t\t\t\t<div class=\"va-b\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\tVolg Foré ook via de volgende media.
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"#\">FB</a>
\t\t\t\t\t<a href=\"#\">Twitter</a>
\t\t\t\t\t<a href=\"#\">Instagram</a>
\t\t\t\t\t<a href=\"#\">Linkedin</a>
\t\t\t\t</div>
\t\t\t</div> -->
\t\t\t\t\t\t<img src=\"themes/theme-fore/assets/images/projects/huisarts04.jpg\" alt=\"\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<!-- </div> -->
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/oc-fore/themes/theme-fore/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 91,  149 => 90,  137 => 80,  124 => 73,  118 => 70,  113 => 68,  107 => 64,  103 => 63,  87 => 50,  81 => 47,  76 => 45,  39 => 10,  35 => 9,  19 => 1,);
    }
}
/* <!-- {% partial "header-banner" banner_image="themes/theme-fore/assets/images/banner-images/banner-image-01.jpg" content=foo %} -->*/
/* <figure class="banner-image-wrapper">*/
/* 	<div class="image">*/
/* 		<img src="themes/theme-fore/assets/images/banner-images/banner-image-01.jpg" alt="" />*/
/* 	</div>*/
/* 	<figcaption class="banner-image">*/
/* 		<div class="container">*/
/* 			<div class="desc">*/
/* 				{% content 'welcome.htm' %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</figcaption>*/
/* </figure>*/
/* */
/* <!-- <div class="container"> -->*/
/* 	<div class="row grid-home">*/
/* 		<div class="one-third">*/
/* 			<div class="h130 home-project-bg" style="background-image: url('themes/theme-fore/assets/images/projects/mederwerker1.jpg')">*/
/* 				<img src="themes/theme-fore/assets/images/projects/mederwerker1.jpg" alt="" />*/
/* 			</div>*/
/* 			<div class="h130 nb-wrapper">*/
/* 				<div class="va-wrap">*/
/* 					<div class="va-m">*/
/* 						<p class="mb10">*/
/* 							Scrhijf je voor de driemaandelijkse nieuwsbrief*/
/* 						</p>*/
/* 						<form class="skewed" action="index.html" method="post">*/
/* 							<input type="email" name="cm-hldloh-hldloh" id="fieldEmail" class="email">*/
/* 							<input type="submit" id="submit" value="Inschrijven" class="submit">*/
/* 						</form>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="h260 home-project-bg" style="background-image: url('themes/theme-fore/assets/images/projects/mederwerker1.jpg')">*/
/* 				<img src="themes/theme-fore/assets/images/projects/mederwerker1.jpg" alt="" />*/
/* 			</div>*/
/* 		</div>*/
/* */
/* */
/* 		<div class="one-third">*/
/* 			<div class="h130 news-item-wrapper">*/
/* 				<div class="news-item">*/
/* 					<div class="va-wrap">*/
/* 						<div class="va-m">*/
/* 							<h6 class="date">{{ first_newsItem.updated_at|date('d.m.Y')  }}</h6>*/
/* 							<p class="desc">*/
/* 								{{ first_newsItem.short_description }}*/
/* 							</p>*/
/* 							<!-- <p class="more">*/
/* 								<a class="tdn" href="{{ 'news-detail'|page({ slug: first_newsItem.slug }) }}">Lees meer</a>*/
/* 							</p> -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="h130 title-wrap">*/
/* 				<div class="va-wrap">*/
/* 					<div class="va-m">*/
/* 						<h2>Laatste<br/>Nieuws</h2>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% for newsItem in newsItems %}*/
/* 			<div class="h130 news-item-wrapper">*/
/* 				<div class="news-item">*/
/* 					<div class="va-wrap">*/
/* 						<div class="va-m">*/
/* 							<h6 class="date">{{ newsItem.updated_at|date('d.m.Y')  }}</h6>*/
/* 							<p class="desc">*/
/* 								{{ newsItem.short_description }}*/
/* 							</p>*/
/* 							<!-- <p class="more">*/
/* 								<a class="tdn" href="{{ 'news-detail'|page({ slug: newsItem.slug }) }}">Lees meer</a>*/
/* 							</p> -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{%endfor %}*/
/* 		</div>*/
/* 		<div class="one-third">*/
/* 			<div class="row">*/
/* 				<div class="one-half">*/
/* 					<div class="h260 home-project-bg" style="background-image: url('themes/theme-fore/assets/images/projects/tony.png')">*/
/* 						<img src="themes/theme-fore/assets/images/projects/tony.png" alt="" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="one-half">*/
/* 					<div class="h260 home-about">*/
/* 						{% content 'welkomst-block-homepagina.htm' %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="one-half">*/
/* 					<div class="h260 home-contact">*/
/* 						<div class="va-wrap">*/
/* 							<div class="va-b">*/
/* 								<p>*/
/* 									<strong>Foré nv /</strong> <br>*/
/* 									Ringlaan 11 / 9900 Eeklo / <br>*/
/* 									België /*/
/* 								</p>*/
/* 								<p>*/
/* 									T +32 (0)9 377 77 77 / <br>*/
/* 									F +32 (0)9 378 77 77 /*/
/* 								</p>*/
/* 								<p>*/
/* 									E <a class="tdn" href="mailto:info@fore.be">info@fore.be</a> /*/
/* 								</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="one-half">*/
/* 					<div class="home-project-bg h260 home-social" style="background-image: url('themes/theme-fore/assets/images/projects/huisarts04.jpg')">*/
/* 						<!-- <div class="va-wrap">*/
/* 						<div class="va-b">*/
/* 						<p>*/
/* 						Volg Foré ook via de volgende media.*/
/* 					</p>*/
/* 					<a href="#">FB</a>*/
/* 					<a href="#">Twitter</a>*/
/* 					<a href="#">Instagram</a>*/
/* 					<a href="#">Linkedin</a>*/
/* 				</div>*/
/* 			</div> -->*/
/* 						<img src="themes/theme-fore/assets/images/projects/huisarts04.jpg" alt="" />*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- </div> -->*/
/* </div>*/
