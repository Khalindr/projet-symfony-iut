<?php

/* default/search.html.twig */
class __TwigTemplate_4516c8454dfe688207d86a148da63fe090d8539c15591bd9f67bb1c3ddd492d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/search.html.twig", 1);
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
        $__internal_3bb0781ead49265a5e56898aef547c708b67f8e8061778ea52632a2f60ae023e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb0781ead49265a5e56898aef547c708b67f8e8061778ea52632a2f60ae023e->enter($__internal_3bb0781ead49265a5e56898aef547c708b67f8e8061778ea52632a2f60ae023e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/search.html.twig"));

        $__internal_5c321785df438fcbb00bb3b922e3803ce0027294b347750aad4a7805e188320f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c321785df438fcbb00bb3b922e3803ce0027294b347750aad4a7805e188320f->enter($__internal_5c321785df438fcbb00bb3b922e3803ce0027294b347750aad4a7805e188320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb0781ead49265a5e56898aef547c708b67f8e8061778ea52632a2f60ae023e->leave($__internal_3bb0781ead49265a5e56898aef547c708b67f8e8061778ea52632a2f60ae023e_prof);

        
        $__internal_5c321785df438fcbb00bb3b922e3803ce0027294b347750aad4a7805e188320f->leave($__internal_5c321785df438fcbb00bb3b922e3803ce0027294b347750aad4a7805e188320f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e678a2b22ec095640719961d8d40a053bb4797f481c76f3827f4b198748921d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e678a2b22ec095640719961d8d40a053bb4797f481c76f3827f4b198748921d->enter($__internal_0e678a2b22ec095640719961d8d40a053bb4797f481c76f3827f4b198748921d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e329cbf395e12ad84ea4885827693b4d7586a3de9cc62a86fd3ddebdb2bbc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e329cbf395e12ad84ea4885827693b4d7586a3de9cc62a86fd3ddebdb2bbc4b->enter($__internal_4e329cbf395e12ad84ea4885827693b4d7586a3de9cc62a86fd3ddebdb2bbc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Page de recherche</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        // line 7
        if ((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))) {
            // line 8
            echo "        <div class=\"container\">
            <div class=\"card-columns\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "                    <div class=\"\">
                        <div class=\"card panel-default \">
                            <div class=\"card-header\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</div>
                            <div class=\"card-body\">
                                ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div>
        </div>
    ";
        } else {
            // line 23
            echo "        <h2>Aucun contenu</h2>
    ";
        }
        
        $__internal_4e329cbf395e12ad84ea4885827693b4d7586a3de9cc62a86fd3ddebdb2bbc4b->leave($__internal_4e329cbf395e12ad84ea4885827693b4d7586a3de9cc62a86fd3ddebdb2bbc4b_prof);

        
        $__internal_0e678a2b22ec095640719961d8d40a053bb4797f481c76f3827f4b198748921d->leave($__internal_0e678a2b22ec095640719961d8d40a053bb4797f481c76f3827f4b198748921d_prof);

    }

    public function getTemplateName()
    {
        return "default/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  87 => 20,  76 => 15,  71 => 13,  67 => 11,  63 => 10,  59 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Page de recherche</h1>

    {{ form(form) }}
    {% if news %}
        <div class=\"container\">
            <div class=\"card-columns\">
                {% for item in news %}
                    <div class=\"\">
                        <div class=\"card panel-default \">
                            <div class=\"card-header\">{{ item.title }}</div>
                            <div class=\"card-body\">
                                {{ item.content }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% else %}
        <h2>Aucun contenu</h2>
    {% endif %}
{% endblock %}
", "default/search.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\default\\search.html.twig");
    }
}
