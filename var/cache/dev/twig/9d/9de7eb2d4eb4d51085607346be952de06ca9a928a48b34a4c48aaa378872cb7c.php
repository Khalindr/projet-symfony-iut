<?php

/* default/categories.html.twig */
class __TwigTemplate_82f5f9af2681ac3351da059d1fe8e552ed3def4e0f7f822d899bb323ce8ec337 extends Twig_Template
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
        $__internal_37183a4c50ce65cf8179e0009f700faeb8d5d586557b56714fe194e01f1beec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37183a4c50ce65cf8179e0009f700faeb8d5d586557b56714fe194e01f1beec5->enter($__internal_37183a4c50ce65cf8179e0009f700faeb8d5d586557b56714fe194e01f1beec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/categories.html.twig"));

        $__internal_bcd127b7a8219a78aede37af6566e25eb1a8fa793e1da55a44e09050ff934a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd127b7a8219a78aede37af6566e25eb1a8fa793e1da55a44e09050ff934a5c->enter($__internal_bcd127b7a8219a78aede37af6566e25eb1a8fa793e1da55a44e09050ff934a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37183a4c50ce65cf8179e0009f700faeb8d5d586557b56714fe194e01f1beec5->leave($__internal_37183a4c50ce65cf8179e0009f700faeb8d5d586557b56714fe194e01f1beec5_prof);

        
        $__internal_bcd127b7a8219a78aede37af6566e25eb1a8fa793e1da55a44e09050ff934a5c->leave($__internal_bcd127b7a8219a78aede37af6566e25eb1a8fa793e1da55a44e09050ff934a5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff163f42c08f79b1b92ca0fdf56dad731673befb6b3bf3599125c7bf20989cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff163f42c08f79b1b92ca0fdf56dad731673befb6b3bf3599125c7bf20989cc->enter($__internal_1ff163f42c08f79b1b92ca0fdf56dad731673befb6b3bf3599125c7bf20989cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0fdfe198446d9ebb77b225c1b9c461de8f23d98174a189970b457ed19c713ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fdfe198446d9ebb77b225c1b9c461de8f23d98174a189970b457ed19c713ff->enter($__internal_d0fdfe198446d9ebb77b225c1b9c461de8f23d98174a189970b457ed19c713ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postCategories"]) ? $context["postCategories"] : $this->getContext($context, "postCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["top"]) {
            // line 5
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["top"], "titre", array()), "html", null, true);
            echo "
        </h1>
        ";
            // line 8
            echo "        ";
            // line 9
            echo "
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d0fdfe198446d9ebb77b225c1b9c461de8f23d98174a189970b457ed19c713ff->leave($__internal_d0fdfe198446d9ebb77b225c1b9c461de8f23d98174a189970b457ed19c713ff_prof);

        
        $__internal_1ff163f42c08f79b1b92ca0fdf56dad731673befb6b3bf3599125c7bf20989cc->leave($__internal_1ff163f42c08f79b1b92ca0fdf56dad731673befb6b3bf3599125c7bf20989cc_prof);

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
        return array (  62 => 9,  60 => 8,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% for top in postCategories %}
        <h1>{{ top.titre }}
        </h1>
        {#{%  if post.category %}<h2>Catégorie : {{ post.category.title }}</h2>{% endif %}#}
        {#<div>{{ post.content }}</div>#}

        <hr>
    {% endfor %}
{% endblock %}", "default/categories.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\default\\categories.html.twig");
    }
}
