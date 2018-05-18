<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_7ff47359e8ffc92a665f1ad82a6b5894d6173a4c3b0e1b9c4b2a5a23b131ae7c extends Twig_Template
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
        $__internal_5e1ea50aa2d834a6f3b8f5f90631d5a8e4633d11f10a475a21f6fe3abeaf6fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1ea50aa2d834a6f3b8f5f90631d5a8e4633d11f10a475a21f6fe3abeaf6fef->enter($__internal_5e1ea50aa2d834a6f3b8f5f90631d5a8e4633d11f10a475a21f6fe3abeaf6fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_e808970254c6befbda6332eec511eca9b96a29374bc447f5cf49299e7596d100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e808970254c6befbda6332eec511eca9b96a29374bc447f5cf49299e7596d100->enter($__internal_e808970254c6befbda6332eec511eca9b96a29374bc447f5cf49299e7596d100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_5e1ea50aa2d834a6f3b8f5f90631d5a8e4633d11f10a475a21f6fe3abeaf6fef->leave($__internal_5e1ea50aa2d834a6f3b8f5f90631d5a8e4633d11f10a475a21f6fe3abeaf6fef_prof);

        
        $__internal_e808970254c6befbda6332eec511eca9b96a29374bc447f5cf49299e7596d100->leave($__internal_e808970254c6befbda6332eec511eca9b96a29374bc447f5cf49299e7596d100_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "C:\\projet-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\label_null.html.twig");
    }
}
