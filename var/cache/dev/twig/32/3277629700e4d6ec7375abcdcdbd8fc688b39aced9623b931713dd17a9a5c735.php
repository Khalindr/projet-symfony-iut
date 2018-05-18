<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_9464a52c555839262be05eaea1ba800d379b43df292cff6df0b192634227bccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae57a883965319a2a46f075bef339794c34b7e5b1beee65a602425adc7866ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae57a883965319a2a46f075bef339794c34b7e5b1beee65a602425adc7866ec0->enter($__internal_ae57a883965319a2a46f075bef339794c34b7e5b1beee65a602425adc7866ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_6a6e957e10cd2285a62bf169471bffcdbb602b2795982cf5bdc7d810eac95d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6e957e10cd2285a62bf169471bffcdbb602b2795982cf5bdc7d810eac95d85->enter($__internal_6a6e957e10cd2285a62bf169471bffcdbb602b2795982cf5bdc7d810eac95d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae57a883965319a2a46f075bef339794c34b7e5b1beee65a602425adc7866ec0->leave($__internal_ae57a883965319a2a46f075bef339794c34b7e5b1beee65a602425adc7866ec0_prof);

        
        $__internal_6a6e957e10cd2285a62bf169471bffcdbb602b2795982cf5bdc7d810eac95d85->leave($__internal_6a6e957e10cd2285a62bf169471bffcdbb602b2795982cf5bdc7d810eac95d85_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d130a244a09a5484815077c093d71e284a09e18fe2beb5ef773a2f861a860f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d130a244a09a5484815077c093d71e284a09e18fe2beb5ef773a2f861a860f0->enter($__internal_3d130a244a09a5484815077c093d71e284a09e18fe2beb5ef773a2f861a860f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd96f8ff1c3b98b7429acbdb61c83747dee7297174214f2edcb176ccaf3412a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd96f8ff1c3b98b7429acbdb61c83747dee7297174214f2edcb176ccaf3412a8->enter($__internal_fd96f8ff1c3b98b7429acbdb61c83747dee7297174214f2edcb176ccaf3412a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon compte";
        
        $__internal_fd96f8ff1c3b98b7429acbdb61c83747dee7297174214f2edcb176ccaf3412a8->leave($__internal_fd96f8ff1c3b98b7429acbdb61c83747dee7297174214f2edcb176ccaf3412a8_prof);

        
        $__internal_3d130a244a09a5484815077c093d71e284a09e18fe2beb5ef773a2f861a860f0->leave($__internal_3d130a244a09a5484815077c093d71e284a09e18fe2beb5ef773a2f861a860f0_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a97e3335a304d83823b4c449250945a032379ea6e9d686cee4d299b132062f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97e3335a304d83823b4c449250945a032379ea6e9d686cee4d299b132062f7c->enter($__internal_a97e3335a304d83823b4c449250945a032379ea6e9d686cee4d299b132062f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ebdb2e40e2155447b69d1e13ee21d49a266254e3b0f26b09314265204e4ca57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebdb2e40e2155447b69d1e13ee21d49a266254e3b0f26b09314265204e4ca57->enter($__internal_0ebdb2e40e2155447b69d1e13ee21d49a266254e3b0f26b09314265204e4ca57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_0ebdb2e40e2155447b69d1e13ee21d49a266254e3b0f26b09314265204e4ca57->leave($__internal_0ebdb2e40e2155447b69d1e13ee21d49a266254e3b0f26b09314265204e4ca57_prof);

        
        $__internal_a97e3335a304d83823b4c449250945a032379ea6e9d686cee4d299b132062f7c->leave($__internal_a97e3335a304d83823b4c449250945a032379ea6e9d686cee4d299b132062f7c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_09b66d3bec79561a296dc8f51cf774eabce32a0eba5c0f6d8fb04dfbe3072740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b66d3bec79561a296dc8f51cf774eabce32a0eba5c0f6d8fb04dfbe3072740->enter($__internal_09b66d3bec79561a296dc8f51cf774eabce32a0eba5c0f6d8fb04dfbe3072740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fe113cd6608478deb3a7edbea2869e672708044aa5aae5bd8f34e65994275a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe113cd6608478deb3a7edbea2869e672708044aa5aae5bd8f34e65994275a2->enter($__internal_0fe113cd6608478deb3a7edbea2869e672708044aa5aae5bd8f34e65994275a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div>
    ";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "</div>
";
        
        $__internal_0fe113cd6608478deb3a7edbea2869e672708044aa5aae5bd8f34e65994275a2->leave($__internal_0fe113cd6608478deb3a7edbea2869e672708044aa5aae5bd8f34e65994275a2_prof);

        
        $__internal_09b66d3bec79561a296dc8f51cf774eabce32a0eba5c0f6d8fb04dfbe3072740->leave($__internal_09b66d3bec79561a296dc8f51cf774eabce32a0eba5c0f6d8fb04dfbe3072740_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bb4558a74fa8845ad3a7152d10c006966c5bca6e3bb30cd66e45537faee8876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb4558a74fa8845ad3a7152d10c006966c5bca6e3bb30cd66e45537faee8876->enter($__internal_4bb4558a74fa8845ad3a7152d10c006966c5bca6e3bb30cd66e45537faee8876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb1971ecd2fe579bae3e11d116c0fcd010ff536e70c2b7ebbd15e9fc7f05a19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1971ecd2fe579bae3e11d116c0fcd010ff536e70c2b7ebbd15e9fc7f05a19c->enter($__internal_eb1971ecd2fe579bae3e11d116c0fcd010ff536e70c2b7ebbd15e9fc7f05a19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    ";
        
        $__internal_eb1971ecd2fe579bae3e11d116c0fcd010ff536e70c2b7ebbd15e9fc7f05a19c->leave($__internal_eb1971ecd2fe579bae3e11d116c0fcd010ff536e70c2b7ebbd15e9fc7f05a19c_prof);

        
        $__internal_4bb4558a74fa8845ad3a7152d10c006966c5bca6e3bb30cd66e45537faee8876->leave($__internal_4bb4558a74fa8845ad3a7152d10c006966c5bca6e3bb30cd66e45537faee8876_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 7,  103 => 6,  92 => 8,  90 => 6,  87 => 5,  78 => 4,  61 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Mon compte{% endblock %}
{% block menu %}{% endblock %}
{% block body %}
<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% endblock %}
", "@FOSUser/layout.html.twig", "C:\\projet-symfony\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
