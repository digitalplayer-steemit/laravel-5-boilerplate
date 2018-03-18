<?php

/* /var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/content.htm */
class __TwigTemplate_adea5fb009815de98fee141affb33d44165258ee9d33595f267c0520eda3b963 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/content.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/content.htm", "");
    }
}
