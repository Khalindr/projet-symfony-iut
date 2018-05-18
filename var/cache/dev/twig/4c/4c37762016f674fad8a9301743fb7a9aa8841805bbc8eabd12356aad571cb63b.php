<?php

/* default/categories.html.twig */
class __TwigTemplate_0a5c4ceda8305334c8f44dfa287a5939b8b8ad8cd4c04aba11a67a18b408d3f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/categories.html.twig", 1);
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
        $__internal_f379ede601eb980da52b27c0c7c538cc7224dc85aaded798d27471160b949e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f379ede601eb980da52b27c0c7c538cc7224dc85aaded798d27471160b949e42->enter($__internal_f379ede601eb980da52b27c0c7c538cc7224dc85aaded798d27471160b949e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/categories.html.twig"));

        $__internal_966f5b25bbc56dd7ebaa283277205f6f1b19d23f20b7f208212c8c4cbcb01c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966f5b25bbc56dd7ebaa283277205f6f1b19d23f20b7f208212c8c4cbcb01c9e->enter($__internal_966f5b25bbc56dd7ebaa283277205f6f1b19d23f20b7f208212c8c4cbcb01c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f379ede601eb980da52b27c0c7c538cc7224dc85aaded798d27471160b949e42->leave($__internal_f379ede601eb980da52b27c0c7c538cc7224dc85aaded798d27471160b949e42_prof);

        
        $__internal_966f5b25bbc56dd7ebaa283277205f6f1b19d23f20b7f208212c8c4cbcb01c9e->leave($__internal_966f5b25bbc56dd7ebaa283277205f6f1b19d23f20b7f208212c8c4cbcb01c9e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_727de90c862a71a793766de3985431be39410a39b991617f4e175ad3f42cb3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727de90c862a71a793766de3985431be39410a39b991617f4e175ad3f42cb3ae->enter($__internal_727de90c862a71a793766de3985431be39410a39b991617f4e175ad3f42cb3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_803f334db786ea8a52e03993e0515e444fadebd306312ee0cb67a2947170ee9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803f334db786ea8a52e03993e0515e444fadebd306312ee0cb67a2947170ee9e->enter($__internal_803f334db786ea8a52e03993e0515e444fadebd306312ee0cb67a2947170ee9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["top"]) {
            // line 5
            echo "        <h1><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("category", array("slug" => $this->getAttribute($context["top"], "titre", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["top"], "titre", array()), "html", null, true);
            echo "</a></h1>
        ";
            // line 7
            echo "        ";
            // line 8
            echo "        ";
            if ( !(null === $this->getAttribute($context["top"], "itemGagnant", array()))) {
                // line 9
                echo "            <strong>Nos votants préfèrent :</strong> <i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["top"], "itemGagnant", array()), "titre", array()), "html", null, true);
                echo "</i>
            <br>
            <img width=\"\" src=\"/uploads/";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["top"], "itemGagnant", array()), "imageName", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["top"], "itemGagnant", array()), "titre", array()), "html", null, true);
                echo "\" style=\"width: 500px;\">

            ";
            }
            // line 14
            echo "        ";
            // line 15
            echo "
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_803f334db786ea8a52e03993e0515e444fadebd306312ee0cb67a2947170ee9e->leave($__internal_803f334db786ea8a52e03993e0515e444fadebd306312ee0cb67a2947170ee9e_prof);

        
        $__internal_727de90c862a71a793766de3985431be39410a39b991617f4e175ad3f42cb3ae->leave($__internal_727de90c862a71a793766de3985431be39410a39b991617f4e175ad3f42cb3ae_prof);

    }

    public function getTemplateName()
    {
        return "default/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  80 => 14,  72 => 11,  66 => 9,  63 => 8,  61 => 7,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}

{%  block body %}
    {% for top in categories %}
        <h1><a href=\"{{url('category', {'slug':top.titre})}}\">{{ top.titre }}</a></h1>
        {#{%  if post.category %}<h2>Catégorie : {{ post.category.title }}</h2>{% endif %}#}
        {#<div>{{ post.content }}</div>#}
        {% if top.itemGagnant is not null %}
            <strong>Nos votants préfèrent :</strong> <i>{{ top.itemGagnant.titre }}</i>
            <br>
            <img width=\"\" src=\"/uploads/{{ top.itemGagnant.imageName }}\" alt=\"{{ top.itemGagnant.titre }}\" style=\"width: 500px;\">

            {% endif %}
        {#<p>{{ dump(top.itemGagnant) }}</p>#}

        <hr>
    {% endfor %}
{% endblock %}", "default/categories.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\default\\categories.html.twig");
    }
}
