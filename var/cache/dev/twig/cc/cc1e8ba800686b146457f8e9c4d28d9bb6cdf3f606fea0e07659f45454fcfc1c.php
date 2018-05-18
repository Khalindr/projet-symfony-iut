<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_57a0f2618d182582261b2c60443666a3899cc96825d8d10c7db26be805e69c1a extends Twig_Template
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
        $__internal_4a65ad67337e00eb876d7ea62f2fc010f8cc2447d1b7f4001ee2a447da876b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a65ad67337e00eb876d7ea62f2fc010f8cc2447d1b7f4001ee2a447da876b12->enter($__internal_4a65ad67337e00eb876d7ea62f2fc010f8cc2447d1b7f4001ee2a447da876b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_377508264cf13206f62d2bae98cedc7780a46f2b4f16cc21661fe1a2d38b3a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377508264cf13206f62d2bae98cedc7780a46f2b4f16cc21661fe1a2d38b3a3d->enter($__internal_377508264cf13206f62d2bae98cedc7780a46f2b4f16cc21661fe1a2d38b3a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a65ad67337e00eb876d7ea62f2fc010f8cc2447d1b7f4001ee2a447da876b12->leave($__internal_4a65ad67337e00eb876d7ea62f2fc010f8cc2447d1b7f4001ee2a447da876b12_prof);

        
        $__internal_377508264cf13206f62d2bae98cedc7780a46f2b4f16cc21661fe1a2d38b3a3d->leave($__internal_377508264cf13206f62d2bae98cedc7780a46f2b4f16cc21661fe1a2d38b3a3d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4eb1d0eeaae56ddfa30efb64fc9586eca77bd017d77ae67cbc779aad4227afd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb1d0eeaae56ddfa30efb64fc9586eca77bd017d77ae67cbc779aad4227afd1->enter($__internal_4eb1d0eeaae56ddfa30efb64fc9586eca77bd017d77ae67cbc779aad4227afd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ec7f1cf591faa5189983208ac7fa9290ed8d9f77bfff6691c8fbe3376033f62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7f1cf591faa5189983208ac7fa9290ed8d9f77bfff6691c8fbe3376033f62e->enter($__internal_ec7f1cf591faa5189983208ac7fa9290ed8d9f77bfff6691c8fbe3376033f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ec7f1cf591faa5189983208ac7fa9290ed8d9f77bfff6691c8fbe3376033f62e->leave($__internal_ec7f1cf591faa5189983208ac7fa9290ed8d9f77bfff6691c8fbe3376033f62e_prof);

        
        $__internal_4eb1d0eeaae56ddfa30efb64fc9586eca77bd017d77ae67cbc779aad4227afd1->leave($__internal_4eb1d0eeaae56ddfa30efb64fc9586eca77bd017d77ae67cbc779aad4227afd1_prof);

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
