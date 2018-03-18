<?php

/* /var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/header.htm */
class __TwigTemplate_f1c7ad8d5f9377b290431e1b8a6b8477c8d560d78c49705efa4272191ecc4f6a extends Twig_Template
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
        echo "<nav class=\"navbar navbar-autohide navbar-expand-lg navbar-light bg-white fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("global/home");
        echo "\">Bootstrap Starter Kit</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("global/home");
        echo "\">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-autohide navbar-expand-lg navbar-light bg-white fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ 'global/home'|page }}\">Bootstrap Starter Kit</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ 'global/home'|page }}\">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>", "/var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/header.htm", "");
    }
}
