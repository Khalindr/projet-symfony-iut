<?php

/* default/post_listing.html.twig */
class __TwigTemplate_98ee8432d3e61d883ad940dd79f364bf5490300dc3f67ba68f88088c26dc9ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/post_listing.html.twig", 1);
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
        $__internal_2e5fc935f84bbd5e0fc07573e4c15c74b7e2dfabb3b893da8627dfac0e502d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5fc935f84bbd5e0fc07573e4c15c74b7e2dfabb3b893da8627dfac0e502d3c->enter($__internal_2e5fc935f84bbd5e0fc07573e4c15c74b7e2dfabb3b893da8627dfac0e502d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post_listing.html.twig"));

        $__internal_31da3721562455e0bacd8b582a973295de828bcf39c0176228a88735def8a2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31da3721562455e0bacd8b582a973295de828bcf39c0176228a88735def8a2ca->enter($__internal_31da3721562455e0bacd8b582a973295de828bcf39c0176228a88735def8a2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post_listing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e5fc935f84bbd5e0fc07573e4c15c74b7e2dfabb3b893da8627dfac0e502d3c->leave($__internal_2e5fc935f84bbd5e0fc07573e4c15c74b7e2dfabb3b893da8627dfac0e502d3c_prof);

        
        $__internal_31da3721562455e0bacd8b582a973295de828bcf39c0176228a88735def8a2ca->leave($__internal_31da3721562455e0bacd8b582a973295de828bcf39c0176228a88735def8a2ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fe9635f722b24b2e85c266e68b8a076337a8617de840dc2063179dc036247dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe9635f722b24b2e85c266e68b8a076337a8617de840dc2063179dc036247dd->enter($__internal_3fe9635f722b24b2e85c266e68b8a076337a8617de840dc2063179dc036247dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08d7f03f6c45510264b70bab6d967b07bbe7af1a1bc80ab5a31dd125ffaa2989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d7f03f6c45510264b70bab6d967b07bbe7af1a1bc80ab5a31dd125ffaa2989->enter($__internal_08d7f03f6c45510264b70bab6d967b07bbe7af1a1bc80ab5a31dd125ffaa2989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2 style=\"margin-bottom: 50px;\">Je préfère... des news</h2>
        </div>
    </div>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "        <div class=\"row\">
            <div class=\"col-md-8\">
                <h3><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("news_show", array("slug" => $this->getAttribute($context["post"], "slug", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                <div style=\"font-style: italic\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "dateCreated", array()), "d/m/Y"), "html", null, true);
            echo "
                </div>
                <div>";
            // line 16
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["post"], "content", array()), 300), "html", null, true);
            echo "</div>
            </div>
            <div class=\"col-md-4\" style=\"overflow-x: hidden;\">
                <img src=\"/uploads/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "imageName", array()), "html", null, true);
            echo "\" alt=\"\">
            </div>
        </div>
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_08d7f03f6c45510264b70bab6d967b07bbe7af1a1bc80ab5a31dd125ffaa2989->leave($__internal_08d7f03f6c45510264b70bab6d967b07bbe7af1a1bc80ab5a31dd125ffaa2989_prof);

        
        $__internal_3fe9635f722b24b2e85c266e68b8a076337a8617de840dc2063179dc036247dd->leave($__internal_3fe9635f722b24b2e85c266e68b8a076337a8617de840dc2063179dc036247dd_prof);

    }

    public function getTemplateName()
    {
        return "default/post_listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  76 => 16,  71 => 14,  64 => 12,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2 style=\"margin-bottom: 50px;\">Je préfère... des news</h2>
        </div>
    </div>
    {% for post in posts %}
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h3><a href=\"{{ url('news_show', {slug: post.slug()}) }}\">{{ post.title }}</a></h3>
                <div style=\"font-style: italic\">
                    {{ post.dateCreated|date('d/m/Y') }}
                </div>
                <div>{{ post.content|truncate(300) }}</div>
            </div>
            <div class=\"col-md-4\" style=\"overflow-x: hidden;\">
                <img src=\"/uploads/{{ post.imageName }}\" alt=\"\">
            </div>
        </div>
        <hr>
    {% endfor %}
{% endblock %}", "default/post_listing.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\default\\post_listing.html.twig");
    }
}
