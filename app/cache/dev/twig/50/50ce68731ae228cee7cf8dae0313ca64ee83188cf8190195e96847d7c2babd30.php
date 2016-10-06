<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c54d292471ff850ea0eb19f60ab9fc9afcbf792d95ed10059d2791ed2967a22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe471f0f37f5b4b491d5220041e9d950c7a13923b52c554b8c0eab5702705ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe471f0f37f5b4b491d5220041e9d950c7a13923b52c554b8c0eab5702705ed->enter($__internal_bbe471f0f37f5b4b491d5220041e9d950c7a13923b52c554b8c0eab5702705ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe471f0f37f5b4b491d5220041e9d950c7a13923b52c554b8c0eab5702705ed->leave($__internal_bbe471f0f37f5b4b491d5220041e9d950c7a13923b52c554b8c0eab5702705ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01dc42336529869e40434eacfcbe673a73f84942ef97db5fc49007d95bc7b3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dc42336529869e40434eacfcbe673a73f84942ef97db5fc49007d95bc7b3ff->enter($__internal_01dc42336529869e40434eacfcbe673a73f84942ef97db5fc49007d95bc7b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01dc42336529869e40434eacfcbe673a73f84942ef97db5fc49007d95bc7b3ff->leave($__internal_01dc42336529869e40434eacfcbe673a73f84942ef97db5fc49007d95bc7b3ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8f8832600c5653d300c8cd2083e5c49b5340b5bee7b2103299b2f78d41a8f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f8832600c5653d300c8cd2083e5c49b5340b5bee7b2103299b2f78d41a8f8a->enter($__internal_d8f8832600c5653d300c8cd2083e5c49b5340b5bee7b2103299b2f78d41a8f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8f8832600c5653d300c8cd2083e5c49b5340b5bee7b2103299b2f78d41a8f8a->leave($__internal_d8f8832600c5653d300c8cd2083e5c49b5340b5bee7b2103299b2f78d41a8f8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c42027b94a620debfe0105fbea4baa5288c317146e7ece46685cc140bb5d4b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42027b94a620debfe0105fbea4baa5288c317146e7ece46685cc140bb5d4b51->enter($__internal_c42027b94a620debfe0105fbea4baa5288c317146e7ece46685cc140bb5d4b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c42027b94a620debfe0105fbea4baa5288c317146e7ece46685cc140bb5d4b51->leave($__internal_c42027b94a620debfe0105fbea4baa5288c317146e7ece46685cc140bb5d4b51_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
