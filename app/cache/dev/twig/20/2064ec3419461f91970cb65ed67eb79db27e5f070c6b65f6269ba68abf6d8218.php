<?php

/* ComparateurBundle:comparateur:index.html.twig */
class __TwigTemplate_a865a19de0eb972a6b40c0b9376bb3c8d95af465a14ae8f779d0bd9b49b3ffd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ComparateurBundle:comparateur:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7451202ca1ad7db31d313a0b33161cc1641e59b0e501671b3e551d267e77960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7451202ca1ad7db31d313a0b33161cc1641e59b0e501671b3e551d267e77960->enter($__internal_d7451202ca1ad7db31d313a0b33161cc1641e59b0e501671b3e551d267e77960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ComparateurBundle:comparateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7451202ca1ad7db31d313a0b33161cc1641e59b0e501671b3e551d267e77960->leave($__internal_d7451202ca1ad7db31d313a0b33161cc1641e59b0e501671b3e551d267e77960_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0178077c85a323b19671f82906bad8bbf3c8886941fd160e1c8228f01d81ba57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0178077c85a323b19671f82906bad8bbf3c8886941fd160e1c8228f01d81ba57->enter($__internal_0178077c85a323b19671f82906bad8bbf3c8886941fd160e1c8228f01d81ba57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comparateur list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Produit</th>
                <th>Destination</th>
                <th>Prix</th>
                <th>Proteines</th>
                <th>Humidite</th>
                <th>Ps</th>
                <th>Hagberg</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comparateurs"]) ? $context["comparateurs"] : $this->getContext($context, "comparateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["comparateur"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comparateur_show", array("id" => $this->getAttribute($context["comparateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comparateur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["comparateur"], "produit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["comparateur"], "destination", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["comparateur"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["comparateur"], "proteines", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["comparateur"], "humidite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["comparateur"], "ps", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["comparateur"], "hagberg", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comparateur_show", array("id" => $this->getAttribute($context["comparateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comparateur_edit", array("id" => $this->getAttribute($context["comparateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comparateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comparateur_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_0178077c85a323b19671f82906bad8bbf3c8886941fd160e1c8228f01d81ba57->leave($__internal_0178077c85a323b19671f82906bad8bbf3c8886941fd160e1c8228f01d81ba57_prof);

    }

    public function getTemplateName()
    {
        return "ComparateurBundle:comparateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  121 => 43,  109 => 37,  103 => 34,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comparateur list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Produit</th>
                <th>Destination</th>
                <th>Prix</th>
                <th>Proteines</th>
                <th>Humidite</th>
                <th>Ps</th>
                <th>Hagberg</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for comparateur in comparateurs %}
            <tr>
                <td><a href=\"{{ path('comparateur_show', { 'id': comparateur.id }) }}\">{{ comparateur.id }}</a></td>
                <td>{{ comparateur.produit }}</td>
                <td>{{ comparateur.destination }}</td>
                <td>{{ comparateur.prix }}</td>
                <td>{{ comparateur.proteines }}</td>
                <td>{{ comparateur.humidite }}</td>
                <td>{{ comparateur.ps }}</td>
                <td>{{ comparateur.hagberg }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('comparateur_show', { 'id': comparateur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('comparateur_edit', { 'id': comparateur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comparateur_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
