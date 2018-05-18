<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_bcd47287dc06cf2d1555a8a901083e47f8898cdaaf7cbdfc00c6a5ef58752555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22f105dbaa99c3ba473b55feb5cf51c543ec931bab66bee235f4ccea27c721ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f105dbaa99c3ba473b55feb5cf51c543ec931bab66bee235f4ccea27c721ab->enter($__internal_22f105dbaa99c3ba473b55feb5cf51c543ec931bab66bee235f4ccea27c721ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_ec227d443150589546669eac957c04291d1f92ca34f6f89f93f00547b8ccb30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec227d443150589546669eac957c04291d1f92ca34f6f89f93f00547b8ccb30b->enter($__internal_ec227d443150589546669eac957c04291d1f92ca34f6f89f93f00547b8ccb30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_22f105dbaa99c3ba473b55feb5cf51c543ec931bab66bee235f4ccea27c721ab->leave($__internal_22f105dbaa99c3ba473b55feb5cf51c543ec931bab66bee235f4ccea27c721ab_prof);

        
        $__internal_ec227d443150589546669eac957c04291d1f92ca34f6f89f93f00547b8ccb30b->leave($__internal_ec227d443150589546669eac957c04291d1f92ca34f6f89f93f00547b8ccb30b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "C:\\projet-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_id.html.twig");
    }
}
