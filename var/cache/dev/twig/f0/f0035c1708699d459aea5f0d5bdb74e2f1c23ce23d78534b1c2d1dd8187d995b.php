<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_28953c826059811778d5e5b1b47901c1ec39d30c9f9debe5011f6391982dec35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_66325018cc34799ed2f6f060c471a8ca46bc8143af85108c3f528c620cef991c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66325018cc34799ed2f6f060c471a8ca46bc8143af85108c3f528c620cef991c->enter($__internal_66325018cc34799ed2f6f060c471a8ca46bc8143af85108c3f528c620cef991c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e52c9225f417c5b54c1efa47ba9443bf9a2ae65f86a9bc9280c368bfdf86d036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52c9225f417c5b54c1efa47ba9443bf9a2ae65f86a9bc9280c368bfdf86d036->enter($__internal_e52c9225f417c5b54c1efa47ba9443bf9a2ae65f86a9bc9280c368bfdf86d036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66325018cc34799ed2f6f060c471a8ca46bc8143af85108c3f528c620cef991c->leave($__internal_66325018cc34799ed2f6f060c471a8ca46bc8143af85108c3f528c620cef991c_prof);

        
        $__internal_e52c9225f417c5b54c1efa47ba9443bf9a2ae65f86a9bc9280c368bfdf86d036->leave($__internal_e52c9225f417c5b54c1efa47ba9443bf9a2ae65f86a9bc9280c368bfdf86d036_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1224daf28621af9d7e69eb26bb332647ba44e04486d2f8683cb28cf4e872d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1224daf28621af9d7e69eb26bb332647ba44e04486d2f8683cb28cf4e872d7a->enter($__internal_c1224daf28621af9d7e69eb26bb332647ba44e04486d2f8683cb28cf4e872d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a41dd1e6a1fcefe96c1f9f59da6f488bda89c7ebb4d941c2d0e3ab44d37c7149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41dd1e6a1fcefe96c1f9f59da6f488bda89c7ebb4d941c2d0e3ab44d37c7149->enter($__internal_a41dd1e6a1fcefe96c1f9f59da6f488bda89c7ebb4d941c2d0e3ab44d37c7149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a41dd1e6a1fcefe96c1f9f59da6f488bda89c7ebb4d941c2d0e3ab44d37c7149->leave($__internal_a41dd1e6a1fcefe96c1f9f59da6f488bda89c7ebb4d941c2d0e3ab44d37c7149_prof);

        
        $__internal_c1224daf28621af9d7e69eb26bb332647ba44e04486d2f8683cb28cf4e872d7a->leave($__internal_c1224daf28621af9d7e69eb26bb332647ba44e04486d2f8683cb28cf4e872d7a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b06d8fa615440297a587a7fd0c371817a6e89c23ecdc9739a6e7a9a815c587b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b06d8fa615440297a587a7fd0c371817a6e89c23ecdc9739a6e7a9a815c587b->enter($__internal_6b06d8fa615440297a587a7fd0c371817a6e89c23ecdc9739a6e7a9a815c587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03690d64a8471528a4c91d386a7d69eb8a71d9ed729b94f1ab3c7d80a3297ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03690d64a8471528a4c91d386a7d69eb8a71d9ed729b94f1ab3c7d80a3297ed2->enter($__internal_03690d64a8471528a4c91d386a7d69eb8a71d9ed729b94f1ab3c7d80a3297ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_03690d64a8471528a4c91d386a7d69eb8a71d9ed729b94f1ab3c7d80a3297ed2->leave($__internal_03690d64a8471528a4c91d386a7d69eb8a71d9ed729b94f1ab3c7d80a3297ed2_prof);

        
        $__internal_6b06d8fa615440297a587a7fd0c371817a6e89c23ecdc9739a6e7a9a815c587b->leave($__internal_6b06d8fa615440297a587a7fd0c371817a6e89c23ecdc9739a6e7a9a815c587b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a598237c20447dea443fa78f05b452c0c5748ad31351674df70fc467304c025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a598237c20447dea443fa78f05b452c0c5748ad31351674df70fc467304c025->enter($__internal_3a598237c20447dea443fa78f05b452c0c5748ad31351674df70fc467304c025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70efdfff4e894945695df27e95849037a1fd7338541d5f0f3c0f57f3c4123d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70efdfff4e894945695df27e95849037a1fd7338541d5f0f3c0f57f3c4123d64->enter($__internal_70efdfff4e894945695df27e95849037a1fd7338541d5f0f3c0f57f3c4123d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_70efdfff4e894945695df27e95849037a1fd7338541d5f0f3c0f57f3c4123d64->leave($__internal_70efdfff4e894945695df27e95849037a1fd7338541d5f0f3c0f57f3c4123d64_prof);

        
        $__internal_3a598237c20447dea443fa78f05b452c0c5748ad31351674df70fc467304c025->leave($__internal_3a598237c20447dea443fa78f05b452c0c5748ad31351674df70fc467304c025_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\projet-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
