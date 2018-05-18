<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1cd2bb376f0bcfa3d09c6d3e0558a639668c4e49335d6dfa9bc065beb3c94076 extends Twig_Template
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
        $__internal_3fd14a43082b2ac26f6fe5c0135e062ae6b8d1f7483ac85e7b85f83c279794bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd14a43082b2ac26f6fe5c0135e062ae6b8d1f7483ac85e7b85f83c279794bc->enter($__internal_3fd14a43082b2ac26f6fe5c0135e062ae6b8d1f7483ac85e7b85f83c279794bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2583ed7ff01c8a9fef0d0300e1e26f5760e943ec574142af997e488704bdd00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2583ed7ff01c8a9fef0d0300e1e26f5760e943ec574142af997e488704bdd00b->enter($__internal_2583ed7ff01c8a9fef0d0300e1e26f5760e943ec574142af997e488704bdd00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd14a43082b2ac26f6fe5c0135e062ae6b8d1f7483ac85e7b85f83c279794bc->leave($__internal_3fd14a43082b2ac26f6fe5c0135e062ae6b8d1f7483ac85e7b85f83c279794bc_prof);

        
        $__internal_2583ed7ff01c8a9fef0d0300e1e26f5760e943ec574142af997e488704bdd00b->leave($__internal_2583ed7ff01c8a9fef0d0300e1e26f5760e943ec574142af997e488704bdd00b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d104cc805757436313ed4f5ae97f222ea485d93705a437e38a707c6f3a83ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d104cc805757436313ed4f5ae97f222ea485d93705a437e38a707c6f3a83ed3->enter($__internal_4d104cc805757436313ed4f5ae97f222ea485d93705a437e38a707c6f3a83ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e50dae18f6bd4451ff885cad8c0cf8d7900c0e644bb71306844a17f886832b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e50dae18f6bd4451ff885cad8c0cf8d7900c0e644bb71306844a17f886832b7->enter($__internal_0e50dae18f6bd4451ff885cad8c0cf8d7900c0e644bb71306844a17f886832b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e50dae18f6bd4451ff885cad8c0cf8d7900c0e644bb71306844a17f886832b7->leave($__internal_0e50dae18f6bd4451ff885cad8c0cf8d7900c0e644bb71306844a17f886832b7_prof);

        
        $__internal_4d104cc805757436313ed4f5ae97f222ea485d93705a437e38a707c6f3a83ed3->leave($__internal_4d104cc805757436313ed4f5ae97f222ea485d93705a437e38a707c6f3a83ed3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_347dedc7aa09749be706ebd5e7433a755d622eab4720054ec0cd2e87768c104a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347dedc7aa09749be706ebd5e7433a755d622eab4720054ec0cd2e87768c104a->enter($__internal_347dedc7aa09749be706ebd5e7433a755d622eab4720054ec0cd2e87768c104a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb451d54735d70b47bafaad96e36136b7b3a38016b4a08bf3b6fd66903d053ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb451d54735d70b47bafaad96e36136b7b3a38016b4a08bf3b6fd66903d053ce->enter($__internal_fb451d54735d70b47bafaad96e36136b7b3a38016b4a08bf3b6fd66903d053ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb451d54735d70b47bafaad96e36136b7b3a38016b4a08bf3b6fd66903d053ce->leave($__internal_fb451d54735d70b47bafaad96e36136b7b3a38016b4a08bf3b6fd66903d053ce_prof);

        
        $__internal_347dedc7aa09749be706ebd5e7433a755d622eab4720054ec0cd2e87768c104a->leave($__internal_347dedc7aa09749be706ebd5e7433a755d622eab4720054ec0cd2e87768c104a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f19321cfa92c83ec313282866b0890c75e4579d377f86a1cf417cc0477585497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19321cfa92c83ec313282866b0890c75e4579d377f86a1cf417cc0477585497->enter($__internal_f19321cfa92c83ec313282866b0890c75e4579d377f86a1cf417cc0477585497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c91b760e2fdf8bf3d03ccc4ddb9da8d7692a3185e283434d2abf3179eac4fab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91b760e2fdf8bf3d03ccc4ddb9da8d7692a3185e283434d2abf3179eac4fab3->enter($__internal_c91b760e2fdf8bf3d03ccc4ddb9da8d7692a3185e283434d2abf3179eac4fab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c91b760e2fdf8bf3d03ccc4ddb9da8d7692a3185e283434d2abf3179eac4fab3->leave($__internal_c91b760e2fdf8bf3d03ccc4ddb9da8d7692a3185e283434d2abf3179eac4fab3_prof);

        
        $__internal_f19321cfa92c83ec313282866b0890c75e4579d377f86a1cf417cc0477585497->leave($__internal_f19321cfa92c83ec313282866b0890c75e4579d377f86a1cf417cc0477585497_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\projet-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
