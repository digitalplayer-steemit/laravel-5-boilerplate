<?php

/* /var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/footer.htm */
class __TwigTemplate_5e833ad30a54529d374022c54cfd12380d0580fdfdb851838d22bd0813e3f43e extends Twig_Template
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
        echo "<div class=\"footer-above\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-3\"></div>
        </div>
    </div>
</div>

<div class=\"footer-below\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"copyright text-center\">
                    <small class=\"text-muted\">&copy; ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</small>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-above\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-3\"></div>
        </div>
    </div>
</div>

<div class=\"footer-below\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"copyright text-center\">
                    <small class=\"text-muted\">&copy; {{ this.theme.website_name }} {{ \"now\"|date(\"Y\") }}</small>
                </div>
            </div>
        </div>
    </div>
</div>", "/var/www/html/apps/metron/themes/oc-bootstrap-v4-starter-kit-master/partials/global/footer.htm", "");
    }
}
