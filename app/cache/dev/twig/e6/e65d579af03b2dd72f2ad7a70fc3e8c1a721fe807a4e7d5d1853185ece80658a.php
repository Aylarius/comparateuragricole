<?php

/* base.html.twig */
class __TwigTemplate_cc1ffdb0d27ab70938399b627c11dcf0f51cb70acff0cb8f09270d30ce259538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2033a272df87352d705710ec39ee1120fd483c23bdc5301ecc32acfad9ce6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2033a272df87352d705710ec39ee1120fd483c23bdc5301ecc32acfad9ce6df->enter($__internal_d2033a272df87352d705710ec39ee1120fd483c23bdc5301ecc32acfad9ce6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d2033a272df87352d705710ec39ee1120fd483c23bdc5301ecc32acfad9ce6df->leave($__internal_d2033a272df87352d705710ec39ee1120fd483c23bdc5301ecc32acfad9ce6df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cef277561f533c5574542eb80232393befd9384d9eefd21c4154cda3be2f8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cef277561f533c5574542eb80232393befd9384d9eefd21c4154cda3be2f8d6->enter($__internal_8cef277561f533c5574542eb80232393befd9384d9eefd21c4154cda3be2f8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8cef277561f533c5574542eb80232393befd9384d9eefd21c4154cda3be2f8d6->leave($__internal_8cef277561f533c5574542eb80232393befd9384d9eefd21c4154cda3be2f8d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f032a70bf41503afab904f0c9597713609c1f9f98802c1f23c75877e0fa8a953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f032a70bf41503afab904f0c9597713609c1f9f98802c1f23c75877e0fa8a953->enter($__internal_f032a70bf41503afab904f0c9597713609c1f9f98802c1f23c75877e0fa8a953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f032a70bf41503afab904f0c9597713609c1f9f98802c1f23c75877e0fa8a953->leave($__internal_f032a70bf41503afab904f0c9597713609c1f9f98802c1f23c75877e0fa8a953_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a535cc80ff237e929eec95fd6bab514a590410deb9526c7ab10213dea181804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a535cc80ff237e929eec95fd6bab514a590410deb9526c7ab10213dea181804->enter($__internal_1a535cc80ff237e929eec95fd6bab514a590410deb9526c7ab10213dea181804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a535cc80ff237e929eec95fd6bab514a590410deb9526c7ab10213dea181804->leave($__internal_1a535cc80ff237e929eec95fd6bab514a590410deb9526c7ab10213dea181804_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_371cdffa832c04e2c5951a56b2f53e218259a7677378df293ef1f121f4a32520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371cdffa832c04e2c5951a56b2f53e218259a7677378df293ef1f121f4a32520->enter($__internal_371cdffa832c04e2c5951a56b2f53e218259a7677378df293ef1f121f4a32520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_371cdffa832c04e2c5951a56b2f53e218259a7677378df293ef1f121f4a32520->leave($__internal_371cdffa832c04e2c5951a56b2f53e218259a7677378df293ef1f121f4a32520_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
