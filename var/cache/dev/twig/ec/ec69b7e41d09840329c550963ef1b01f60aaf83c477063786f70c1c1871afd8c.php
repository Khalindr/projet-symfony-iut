<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a2a24f9a0d7e17d5b69e08a24b0faf582b1ece123a7332e9767ed4630ec7d70a extends Twig_Template
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
        $__internal_da23c8e510b673fa9cc3ff69b4f988ff29d91280a0b5355ad08d4ce4065a851d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da23c8e510b673fa9cc3ff69b4f988ff29d91280a0b5355ad08d4ce4065a851d->enter($__internal_da23c8e510b673fa9cc3ff69b4f988ff29d91280a0b5355ad08d4ce4065a851d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_63e95d6d7d3b34195c4ca1495a0507991e5a5d38918aca6c2fc5dc65f49a7a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e95d6d7d3b34195c4ca1495a0507991e5a5d38918aca6c2fc5dc65f49a7a4e->enter($__internal_63e95d6d7d3b34195c4ca1495a0507991e5a5d38918aca6c2fc5dc65f49a7a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da23c8e510b673fa9cc3ff69b4f988ff29d91280a0b5355ad08d4ce4065a851d->leave($__internal_da23c8e510b673fa9cc3ff69b4f988ff29d91280a0b5355ad08d4ce4065a851d_prof);

        
        $__internal_63e95d6d7d3b34195c4ca1495a0507991e5a5d38918aca6c2fc5dc65f49a7a4e->leave($__internal_63e95d6d7d3b34195c4ca1495a0507991e5a5d38918aca6c2fc5dc65f49a7a4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2d99068132d8d556d8526d7db11aa6078185c922c666d6a172f8b3ccaf5034f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d99068132d8d556d8526d7db11aa6078185c922c666d6a172f8b3ccaf5034f->enter($__internal_f2d99068132d8d556d8526d7db11aa6078185c922c666d6a172f8b3ccaf5034f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ff04852654ac0902f28c44fda06e19f542aaa682dc762727533fed87d6e00e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff04852654ac0902f28c44fda06e19f542aaa682dc762727533fed87d6e00e7->enter($__internal_0ff04852654ac0902f28c44fda06e19f542aaa682dc762727533fed87d6e00e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0ff04852654ac0902f28c44fda06e19f542aaa682dc762727533fed87d6e00e7->leave($__internal_0ff04852654ac0902f28c44fda06e19f542aaa682dc762727533fed87d6e00e7_prof);

        
        $__internal_f2d99068132d8d556d8526d7db11aa6078185c922c666d6a172f8b3ccaf5034f->leave($__internal_f2d99068132d8d556d8526d7db11aa6078185c922c666d6a172f8b3ccaf5034f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e57944fbbfd3db441644bd77b4e5c604d32be18a88b1d82fabb2f5c40b9c82a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57944fbbfd3db441644bd77b4e5c604d32be18a88b1d82fabb2f5c40b9c82a5->enter($__internal_e57944fbbfd3db441644bd77b4e5c604d32be18a88b1d82fabb2f5c40b9c82a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5b6b651b4008f62f575bedf9dfdd84102a0254005e15f94e1d4a53a4597a37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b6b651b4008f62f575bedf9dfdd84102a0254005e15f94e1d4a53a4597a37f->enter($__internal_d5b6b651b4008f62f575bedf9dfdd84102a0254005e15f94e1d4a53a4597a37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d5b6b651b4008f62f575bedf9dfdd84102a0254005e15f94e1d4a53a4597a37f->leave($__internal_d5b6b651b4008f62f575bedf9dfdd84102a0254005e15f94e1d4a53a4597a37f_prof);

        
        $__internal_e57944fbbfd3db441644bd77b4e5c604d32be18a88b1d82fabb2f5c40b9c82a5->leave($__internal_e57944fbbfd3db441644bd77b4e5c604d32be18a88b1d82fabb2f5c40b9c82a5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca0ba034e246a9388b163372ce9befbbaf1efa11cc54a1552df2baddad607ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0ba034e246a9388b163372ce9befbbaf1efa11cc54a1552df2baddad607ecb->enter($__internal_ca0ba034e246a9388b163372ce9befbbaf1efa11cc54a1552df2baddad607ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2d8d1328fa967e98ca5a57b0ae12e59f957cf99157491df50b720699ff577ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d8d1328fa967e98ca5a57b0ae12e59f957cf99157491df50b720699ff577ee->enter($__internal_e2d8d1328fa967e98ca5a57b0ae12e59f957cf99157491df50b720699ff577ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e2d8d1328fa967e98ca5a57b0ae12e59f957cf99157491df50b720699ff577ee->leave($__internal_e2d8d1328fa967e98ca5a57b0ae12e59f957cf99157491df50b720699ff577ee_prof);

        
        $__internal_ca0ba034e246a9388b163372ce9befbbaf1efa11cc54a1552df2baddad607ecb->leave($__internal_ca0ba034e246a9388b163372ce9befbbaf1efa11cc54a1552df2baddad607ecb_prof);

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
