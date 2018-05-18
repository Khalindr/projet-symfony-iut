<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b1f49e5eeed6419b237a19debccc25005260feb316baa42e05ce3fc241ff71b0 extends Twig_Template
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
        $__internal_a327a39d09160d70b3ebd554d925d467476fb30137e42d594686b1e1815b172d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a327a39d09160d70b3ebd554d925d467476fb30137e42d594686b1e1815b172d->enter($__internal_a327a39d09160d70b3ebd554d925d467476fb30137e42d594686b1e1815b172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aebb309e55dd3e2fc69420df992a21f718ee53ed846da20d1ab501536cadcbca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebb309e55dd3e2fc69420df992a21f718ee53ed846da20d1ab501536cadcbca->enter($__internal_aebb309e55dd3e2fc69420df992a21f718ee53ed846da20d1ab501536cadcbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a327a39d09160d70b3ebd554d925d467476fb30137e42d594686b1e1815b172d->leave($__internal_a327a39d09160d70b3ebd554d925d467476fb30137e42d594686b1e1815b172d_prof);

        
        $__internal_aebb309e55dd3e2fc69420df992a21f718ee53ed846da20d1ab501536cadcbca->leave($__internal_aebb309e55dd3e2fc69420df992a21f718ee53ed846da20d1ab501536cadcbca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4cec2dcac56289d49b045788fd3fc10e36a0eafe8f14689936210c3da6a2efe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cec2dcac56289d49b045788fd3fc10e36a0eafe8f14689936210c3da6a2efe2->enter($__internal_4cec2dcac56289d49b045788fd3fc10e36a0eafe8f14689936210c3da6a2efe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_254167ce2ae87c4acba303689737ef6d991594d16a34e28a55c3f2000e4f9548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254167ce2ae87c4acba303689737ef6d991594d16a34e28a55c3f2000e4f9548->enter($__internal_254167ce2ae87c4acba303689737ef6d991594d16a34e28a55c3f2000e4f9548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_254167ce2ae87c4acba303689737ef6d991594d16a34e28a55c3f2000e4f9548->leave($__internal_254167ce2ae87c4acba303689737ef6d991594d16a34e28a55c3f2000e4f9548_prof);

        
        $__internal_4cec2dcac56289d49b045788fd3fc10e36a0eafe8f14689936210c3da6a2efe2->leave($__internal_4cec2dcac56289d49b045788fd3fc10e36a0eafe8f14689936210c3da6a2efe2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96b1a3c3d8128569d34e8cceda1192be927c0500749bcf37b238280d3f6915f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b1a3c3d8128569d34e8cceda1192be927c0500749bcf37b238280d3f6915f1->enter($__internal_96b1a3c3d8128569d34e8cceda1192be927c0500749bcf37b238280d3f6915f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf480ae1dc318e763da556701d8c27b1530d6be1796d5f24992ed74bfc5f7886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf480ae1dc318e763da556701d8c27b1530d6be1796d5f24992ed74bfc5f7886->enter($__internal_cf480ae1dc318e763da556701d8c27b1530d6be1796d5f24992ed74bfc5f7886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf480ae1dc318e763da556701d8c27b1530d6be1796d5f24992ed74bfc5f7886->leave($__internal_cf480ae1dc318e763da556701d8c27b1530d6be1796d5f24992ed74bfc5f7886_prof);

        
        $__internal_96b1a3c3d8128569d34e8cceda1192be927c0500749bcf37b238280d3f6915f1->leave($__internal_96b1a3c3d8128569d34e8cceda1192be927c0500749bcf37b238280d3f6915f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e9e8debe6a48103a4a77f114f7cab46ae1c1fb84bcab4c5fa59ec58daf563fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9e8debe6a48103a4a77f114f7cab46ae1c1fb84bcab4c5fa59ec58daf563fa->enter($__internal_3e9e8debe6a48103a4a77f114f7cab46ae1c1fb84bcab4c5fa59ec58daf563fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0bb30d94ffe3785a924373b9f182fa09c55b70705c3f236995190f3b3a927d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb30d94ffe3785a924373b9f182fa09c55b70705c3f236995190f3b3a927d8a->enter($__internal_0bb30d94ffe3785a924373b9f182fa09c55b70705c3f236995190f3b3a927d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0bb30d94ffe3785a924373b9f182fa09c55b70705c3f236995190f3b3a927d8a->leave($__internal_0bb30d94ffe3785a924373b9f182fa09c55b70705c3f236995190f3b3a927d8a_prof);

        
        $__internal_3e9e8debe6a48103a4a77f114f7cab46ae1c1fb84bcab4c5fa59ec58daf563fa->leave($__internal_3e9e8debe6a48103a4a77f114f7cab46ae1c1fb84bcab4c5fa59ec58daf563fa_prof);

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
