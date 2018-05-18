<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d93db430f99e50593f3c1bbe0eea62e6426ae66cea382a70cd9b32d98391878d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_843b2900f9bad422465952cb7f3d9a3cd6485a69a2b15fd8a5df7a81efa90218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843b2900f9bad422465952cb7f3d9a3cd6485a69a2b15fd8a5df7a81efa90218->enter($__internal_843b2900f9bad422465952cb7f3d9a3cd6485a69a2b15fd8a5df7a81efa90218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_616496284661eda4fe7f2c0b3f9bcd480445f907b068c4eeef64c98f3fd91557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616496284661eda4fe7f2c0b3f9bcd480445f907b068c4eeef64c98f3fd91557->enter($__internal_616496284661eda4fe7f2c0b3f9bcd480445f907b068c4eeef64c98f3fd91557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_843b2900f9bad422465952cb7f3d9a3cd6485a69a2b15fd8a5df7a81efa90218->leave($__internal_843b2900f9bad422465952cb7f3d9a3cd6485a69a2b15fd8a5df7a81efa90218_prof);

        
        $__internal_616496284661eda4fe7f2c0b3f9bcd480445f907b068c4eeef64c98f3fd91557->leave($__internal_616496284661eda4fe7f2c0b3f9bcd480445f907b068c4eeef64c98f3fd91557_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfab04ab066e15984df1a8eea71d33f6e8de1652951980a3926561815de65eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfab04ab066e15984df1a8eea71d33f6e8de1652951980a3926561815de65eb6->enter($__internal_bfab04ab066e15984df1a8eea71d33f6e8de1652951980a3926561815de65eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc93f97f1305cfde8291f3db2518fd5b256a0116cbe8a0378aeb0d2b38203545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc93f97f1305cfde8291f3db2518fd5b256a0116cbe8a0378aeb0d2b38203545->enter($__internal_cc93f97f1305cfde8291f3db2518fd5b256a0116cbe8a0378aeb0d2b38203545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_cc93f97f1305cfde8291f3db2518fd5b256a0116cbe8a0378aeb0d2b38203545->leave($__internal_cc93f97f1305cfde8291f3db2518fd5b256a0116cbe8a0378aeb0d2b38203545_prof);

        
        $__internal_bfab04ab066e15984df1a8eea71d33f6e8de1652951980a3926561815de65eb6->leave($__internal_bfab04ab066e15984df1a8eea71d33f6e8de1652951980a3926561815de65eb6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\projet-symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
