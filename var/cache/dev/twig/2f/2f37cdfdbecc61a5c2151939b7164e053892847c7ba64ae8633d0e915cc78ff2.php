<?php

/* menu.html.twig */
class __TwigTemplate_2365b2c533fc439d751b027109a0e47718510f45d2f9e5de50be457c6eaa7804 extends Twig_Template
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
        $__internal_e438ac2c2160e1f71e8ecb3ff2a8bcfce0acbfa7d2641434179e53a05a2b9262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e438ac2c2160e1f71e8ecb3ff2a8bcfce0acbfa7d2641434179e53a05a2b9262->enter($__internal_e438ac2c2160e1f71e8ecb3ff2a8bcfce0acbfa7d2641434179e53a05a2b9262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6431c93169d3fc546b5f84714f5fd6050c49de8c77836017359dfc4e54a9adb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6431c93169d3fc546b5f84714f5fd6050c49de8c77836017359dfc4e54a9adb7->enter($__internal_6431c93169d3fc546b5f84714f5fd6050c49de8c77836017359dfc4e54a9adb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "
<div class=\"container\">
    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a class=\"nav-link ";
        // line 4
        if (twig_in_filter("homepage", (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "\">Accueil</a></li>
        ";
        // line 6
        echo "        <li class=\"nav-item\"><a class=\"nav-link ";
        if (twig_in_filter("presentation_", (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("presentation_index");
        echo "\">Présentation</a></li>
        <li class=\"nav-item\"><a class=\"nav-link ";
        // line 7
        if (twig_in_filter("searchhp", (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("searchhp");
        echo "\">Recherche</a></li>
        <li class=\"nav-item\"><a class=\"nav-link ";
        // line 8
        if (twig_in_filter("news_list", (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("news_list");
        echo "\">News</a></li>
        <li class=\"nav-item\"><a class=\"nav-link ";
        // line 9
        if (twig_in_filter("category", (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("category_list");
        echo "\">Nos Tops</a></li>
    </ul>
</div>";
        
        $__internal_e438ac2c2160e1f71e8ecb3ff2a8bcfce0acbfa7d2641434179e53a05a2b9262->leave($__internal_e438ac2c2160e1f71e8ecb3ff2a8bcfce0acbfa7d2641434179e53a05a2b9262_prof);

        
        $__internal_6431c93169d3fc546b5f84714f5fd6050c49de8c77836017359dfc4e54a9adb7->leave($__internal_6431c93169d3fc546b5f84714f5fd6050c49de8c77836017359dfc4e54a9adb7_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  55 => 8,  47 => 7,  38 => 6,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"container\">
    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a class=\"nav-link {% if \"homepage\" in route  %}active{% endif %}\" href=\"{{ url('homepage') }}\">Accueil</a></li>
        {#<li class=\"nav-item\"><a class=\"nav-link {% if \"admin_post_\" in route  %}active{% endif %}\" href=\"{{ url('admin_post_index') }}\">Posts</a></li>#}
        <li class=\"nav-item\"><a class=\"nav-link {% if \"presentation_\" in route  %}active{% endif %}\" href=\"{{ url('presentation_index') }}\">Présentation</a></li>
        <li class=\"nav-item\"><a class=\"nav-link {% if \"searchhp\" in route  %}active{% endif %}\" href=\"{{ url('searchhp') }}\">Recherche</a></li>
        <li class=\"nav-item\"><a class=\"nav-link {% if \"news_list\" in route  %}active{% endif %}\" href=\"{{ url('news_list') }}\">News</a></li>
        <li class=\"nav-item\"><a class=\"nav-link {% if \"category\" in route %}active{% endif %}\" href=\"{{ url('category_list') }}\">Nos Tops</a></li>
    </ul>
</div>", "menu.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\menu.html.twig");
    }
}
