<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_923b61752abd76d19e2cdf172d41cbb12782cedbfa7e1fddefec764d07a04d2c extends Twig_Template
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
        $__internal_454904fef90425185bae36af5662a90a2e33dfb158129b2e349130fbf0993f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454904fef90425185bae36af5662a90a2e33dfb158129b2e349130fbf0993f53->enter($__internal_454904fef90425185bae36af5662a90a2e33dfb158129b2e349130fbf0993f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_b867e0c2ee331069d74b9946f0922d37235f9b546e9f94d470e905be74df13c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b867e0c2ee331069d74b9946f0922d37235f9b546e9f94d470e905be74df13c6->enter($__internal_b867e0c2ee331069d74b9946f0922d37235f9b546e9f94d470e905be74df13c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_454904fef90425185bae36af5662a90a2e33dfb158129b2e349130fbf0993f53->leave($__internal_454904fef90425185bae36af5662a90a2e33dfb158129b2e349130fbf0993f53_prof);

        
        $__internal_b867e0c2ee331069d74b9946f0922d37235f9b546e9f94d470e905be74df13c6->leave($__internal_b867e0c2ee331069d74b9946f0922d37235f9b546e9f94d470e905be74df13c6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "C:\\projet-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_string.html.twig");
    }
}
