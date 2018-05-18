<?php

/* default/post_show.html.twig */
class __TwigTemplate_a08a1080f106704dd7e48edd396724a3e4624e8d73f21022acdbea826f93cd41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/post_show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_289aa08cffad94ea764c2bd8d2ad1f1dadb6c509955cca5f9761cfabecd0c29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289aa08cffad94ea764c2bd8d2ad1f1dadb6c509955cca5f9761cfabecd0c29d->enter($__internal_289aa08cffad94ea764c2bd8d2ad1f1dadb6c509955cca5f9761cfabecd0c29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post_show.html.twig"));

        $__internal_ef552475fb105dee11904bd01cda2da37bbb4bf4a16a80b1af559100e836990e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef552475fb105dee11904bd01cda2da37bbb4bf4a16a80b1af559100e836990e->enter($__internal_ef552475fb105dee11904bd01cda2da37bbb4bf4a16a80b1af559100e836990e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_289aa08cffad94ea764c2bd8d2ad1f1dadb6c509955cca5f9761cfabecd0c29d->leave($__internal_289aa08cffad94ea764c2bd8d2ad1f1dadb6c509955cca5f9761cfabecd0c29d_prof);

        
        $__internal_ef552475fb105dee11904bd01cda2da37bbb4bf4a16a80b1af559100e836990e->leave($__internal_ef552475fb105dee11904bd01cda2da37bbb4bf4a16a80b1af559100e836990e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f5e1e30cd150fbaf48499643ce59a5d352831fb4814413184a0d3d8a6c75475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5e1e30cd150fbaf48499643ce59a5d352831fb4814413184a0d3d8a6c75475->enter($__internal_0f5e1e30cd150fbaf48499643ce59a5d352831fb4814413184a0d3d8a6c75475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24cd06a63d6918da65a09848a053cb427ab4cedd9601b9ca442a92d02f70a0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cd06a63d6918da65a09848a053cb427ab4cedd9601b9ca442a92d02f70a0a8->enter($__internal_24cd06a63d6918da65a09848a053cb427ab4cedd9601b9ca442a92d02f70a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("news_list");
        echo "\" class=\"btn btn-notice\">Retour</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
            <div style=\"font-style: italic\">
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "dateCreated", array()), "d/m/Y"), "html", null, true);
        echo "
            </div>
            <div>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"col-md-4\" style=\"overflow-x: hidden;\">
            <img src=\"/uploads/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imageName", array()), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>

";
        
        $__internal_24cd06a63d6918da65a09848a053cb427ab4cedd9601b9ca442a92d02f70a0a8->leave($__internal_24cd06a63d6918da65a09848a053cb427ab4cedd9601b9ca442a92d02f70a0a8_prof);

        
        $__internal_0f5e1e30cd150fbaf48499643ce59a5d352831fb4814413184a0d3d8a6c75475->leave($__internal_0f5e1e30cd150fbaf48499643ce59a5d352831fb4814413184a0d3d8a6c75475_prof);

    }

    public function getTemplateName()
    {
        return "default/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 15,  66 => 13,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'base.html.twig' %}

{%  block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <a href=\"{{ url('news_list') }}\" class=\"btn btn-notice\">Retour</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h1>{{ post.title }}</h1>
            <div style=\"font-style: italic\">
                {{ post.dateCreated|date('d/m/Y') }}
            </div>
            <div>{{ post.content }}</div>
        </div>
        <div class=\"col-md-4\" style=\"overflow-x: hidden;\">
            <img src=\"/uploads/{{ post.imageName }}\" alt=\"\">
        </div>
    </div>

{% endblock %}", "default/post_show.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\default\\post_show.html.twig");
    }
}
