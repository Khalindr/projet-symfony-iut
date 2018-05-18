<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_843ca09061c106ad3f7a1d6229816e4b9e4cdb5f32948e9ca06a2ac3365a669d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00bcdc4493624950098e7ab429fc472b2eef895c31e02d71bda3f67a26f91fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bcdc4493624950098e7ab429fc472b2eef895c31e02d71bda3f67a26f91fae->enter($__internal_00bcdc4493624950098e7ab429fc472b2eef895c31e02d71bda3f67a26f91fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_abc4e72fcd90a07a42601a9b46c1f97c4c7a7e6374f68675d1a0e46a97f9f826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc4e72fcd90a07a42601a9b46c1f97c4c7a7e6374f68675d1a0e46a97f9f826->enter($__internal_abc4e72fcd90a07a42601a9b46c1f97c4c7a7e6374f68675d1a0e46a97f9f826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00bcdc4493624950098e7ab429fc472b2eef895c31e02d71bda3f67a26f91fae->leave($__internal_00bcdc4493624950098e7ab429fc472b2eef895c31e02d71bda3f67a26f91fae_prof);

        
        $__internal_abc4e72fcd90a07a42601a9b46c1f97c4c7a7e6374f68675d1a0e46a97f9f826->leave($__internal_abc4e72fcd90a07a42601a9b46c1f97c4c7a7e6374f68675d1a0e46a97f9f826_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5afe529435ce469da907f51802bdbe16d84e2f3f21c83b1b7b561b8e1669a7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afe529435ce469da907f51802bdbe16d84e2f3f21c83b1b7b561b8e1669a7a5->enter($__internal_5afe529435ce469da907f51802bdbe16d84e2f3f21c83b1b7b561b8e1669a7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9e6a94300b7a976782709caf7780b83ff60473394b39db63e4315240f7ffa915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6a94300b7a976782709caf7780b83ff60473394b39db63e4315240f7ffa915->enter($__internal_9e6a94300b7a976782709caf7780b83ff60473394b39db63e4315240f7ffa915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9e6a94300b7a976782709caf7780b83ff60473394b39db63e4315240f7ffa915->leave($__internal_9e6a94300b7a976782709caf7780b83ff60473394b39db63e4315240f7ffa915_prof);

        
        $__internal_5afe529435ce469da907f51802bdbe16d84e2f3f21c83b1b7b561b8e1669a7a5->leave($__internal_5afe529435ce469da907f51802bdbe16d84e2f3f21c83b1b7b561b8e1669a7a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\projet-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
