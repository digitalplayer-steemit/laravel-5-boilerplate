<?php

/* /var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/layouts/default.htm */
class __TwigTemplate_31aab961f7f04cbdc8b863a0f9e4fba5fa6cc521b9195f56e6d3d393472a3a43 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "description", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "meta_description", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 7
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "keywords", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "keywords", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "meta_keywords", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"title\" content=\"";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "meta_title", array()), "html", null, true);
        }
        echo "\">
        <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "custom_css", array())) {
            // line 14
            echo "        <style>
            ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "custom_css", array()), "html", null, true);
            echo "
        </style>
        ";
        }
        // line 18
        echo "        <title>";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "meta_title", array()), "html", null, true);
        }
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo "</title>
    </head>
    <body class=\"layout-";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo " page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo "\">
        <div id=\"global-header\" class=\"global-header\">
            ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "        </div>
        <div id=\"global-holder\" class=\"global-holder\">
            ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/content"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "        </div>
        <div id=\"global-footer\" class=\"global-footer\">
            ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "        </div>

        <script src=\"https://code.jquery.com/jquery-";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "jquery_version", array()), "html", null, true);
        echo ".min.js\"></script>
        <script src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>

        ";
        // line 34
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "load_october_framework", array())) {
            // line 35
            echo "        ";
            echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
            // line 36
            echo "        ";
        }
        // line 37
        echo "
        ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 39
        echo "
        ";
        // line 40
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "custom_js", array())) {
            // line 41
            echo "        <script>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "custom_js", array()), "html", null, true);
            echo "</script>
        ";
        }
        // line 43
        echo "    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  153 => 41,  151 => 40,  148 => 39,  145 => 38,  142 => 37,  139 => 36,  131 => 35,  129 => 34,  124 => 32,  120 => 31,  116 => 29,  112 => 28,  108 => 26,  104 => 25,  100 => 23,  96 => 22,  89 => 20,  77 => 18,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  42 => 8,  34 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"{% if this.page.description %}{{ this.page.description }}{% else %}{{ this.theme.meta_description }}{% endif %}\">
        <meta name=\"keywords\" content=\"{% if this.page.keywords %}{{ this.page.keywords }}{% else %}{{ this.theme.meta_keywords }}{% endif %}\">
        <meta name=\"title\" content=\"{% if this.page.title %}{{ this.page.title }}{% else %}{{ this.theme.meta_title }}{% endif %}\">
        <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/main.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
        {% if this.theme.custom_css %}
        <style>
            {{ this.theme.custom_css }}
        </style>
        {% endif %}
        <title>{% if this.page.title %}{{ this.page.title }}{% else %}{{ this.theme.meta_title }}{% endif %} - {{ this.theme.website_name }}</title>
    </head>
    <body class=\"layout-{{ this.layout.id }} page-{{ this.layout.id }}\">
        <div id=\"global-header\" class=\"global-header\">
            {% partial 'global/header' %}
        </div>
        <div id=\"global-holder\" class=\"global-holder\">
            {% partial 'global/content' %}
        </div>
        <div id=\"global-footer\" class=\"global-footer\">
            {% partial 'global/footer' %}
        </div>

        <script src=\"https://code.jquery.com/jquery-{{ this.theme.jquery_version }}.min.js\"></script>
        <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>

        {% if this.theme.load_october_framework %}
        {% framework extras %}
        {% endif %}

        {% scripts %}

        {% if this.theme.custom_js %}
        <script>{{ this.theme.custom_js }}</script>
        {% endif %}
    </body>

</html>", "/var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/layouts/default.htm", "");
    }
}
