<?php

/* default/index.html.twig */
class __TwigTemplate_e39e0736d513422038127872890b8556a5a9d2a41eb3d3d3ed976bc5185fa326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_60ff15079f19de89a0fee6960834c802c29c37d854288d7ba20d37fe7e229752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ff15079f19de89a0fee6960834c802c29c37d854288d7ba20d37fe7e229752->enter($__internal_60ff15079f19de89a0fee6960834c802c29c37d854288d7ba20d37fe7e229752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1573a85deaa6dcbb4e896ebc6e4c23e4361e641daa278d64a76f5b623e1f8c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1573a85deaa6dcbb4e896ebc6e4c23e4361e641daa278d64a76f5b623e1f8c0e->enter($__internal_1573a85deaa6dcbb4e896ebc6e4c23e4361e641daa278d64a76f5b623e1f8c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ff15079f19de89a0fee6960834c802c29c37d854288d7ba20d37fe7e229752->leave($__internal_60ff15079f19de89a0fee6960834c802c29c37d854288d7ba20d37fe7e229752_prof);

        
        $__internal_1573a85deaa6dcbb4e896ebc6e4c23e4361e641daa278d64a76f5b623e1f8c0e->leave($__internal_1573a85deaa6dcbb4e896ebc6e4c23e4361e641daa278d64a76f5b623e1f8c0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74612e6283a37607d841c7e67ad55bac7c2a6bf0b47f2764ec4da2077aad15d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74612e6283a37607d841c7e67ad55bac7c2a6bf0b47f2764ec4da2077aad15d8->enter($__internal_74612e6283a37607d841c7e67ad55bac7c2a6bf0b47f2764ec4da2077aad15d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4077e35a4d741376ce7d2d483c2272a6d5b8f714068d58b84e9485bae3dcb453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4077e35a4d741376ce7d2d483c2272a6d5b8f714068d58b84e9485bae3dcb453->enter($__internal_4077e35a4d741376ce7d2d483c2272a6d5b8f714068d58b84e9485bae3dcb453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-full\">
    <h1>Je préfère...</h1>
        <div class=\"row\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/versus.png"), "html", null, true);
        echo "\" alt=\"\" id=\"versus\">
            <div class=\"col-md-6 prop-conteneur\">
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("vote", array("id" => $this->getAttribute((isset($context["prop1"]) ? $context["prop1"] : $this->getContext($context, "prop1")), "id", array()))), "html", null, true);
        echo "\"><img src=\"/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prop1"]) ? $context["prop1"] : $this->getContext($context, "prop1")), "imageName", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prop1"]) ? $context["prop1"] : $this->getContext($context, "prop1")), "titre", array()), "html", null, true);
        echo "\" id=\"\"></a>
            </div>
            <div class=\"col-md-6 prop-conteneur\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("vote", array("id" => $this->getAttribute((isset($context["prop2"]) ? $context["prop2"] : $this->getContext($context, "prop2")), "id", array()))), "html", null, true);
        echo "\"><img src=\"/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prop2"]) ? $context["prop2"] : $this->getContext($context, "prop2")), "imageName", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prop2"]) ? $context["prop2"] : $this->getContext($context, "prop2")), "titre", array()), "html", null, true);
        echo "\" id=\"\"></a>
            </div>
        </div>

    </div>

    <style>
        #versus {
            position: absolute;
            z-index:55;
            width:300px;
            left:50%;
            top:50%;
            transform: translate(-150px,-150px);
        }
        .prop-conteneur {
            display: flex;
            justify-content:center;
            align-items: center;
            width: 50vw;
            height:80vh;
            overflow: hidden;
            background: lightblue;
            cursor: pointer;
        }
        .prop-conteneur a {
            background: red;
        }
        .prop-conteneur img {
            -webkit-transition: all 800ms;
            -moz-transition: all 800ms;
            -ms-transition: all 800ms;
            -o-transition: all 800ms;
            transition: all 800ms;
            /*filter: grayscale(100%);*/
            cursor: pointer;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            top:0;
            left:0;
        }
        /*.prop-conteneur:first-of-type::before {*/
            /*content: '';*/
            /*position: absolute;*/
            /*top:0;*/
            /*left:0;*/
            /*width:100%;*/
            /*height: 100%;*/
            /*background: deepskyblue;*/
            /*opacity:0.5;*/
            /*z-index:50;*/
            /*transition: all 500ms;*/
        /*}*/
        /*.prop-conteneur:last-of-type::before {*/
            /*content: '';*/
            /*position: absolute;*/
            /*top:0;*/
            /*left:0;*/
            /*width:100%;*/
            /*height: 100%;*/
            /*background: red;*/
            /*opacity:0.5;*/
            /*z-index:50;*/
            /*transition: all 500ms;*/
        /*}*/
        .prop-conteneur:hover::before {
            opacity:0;
        }
        .prop-conteneur:hover img {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
            -webkit-transform-origin: top center;
            -moz-transform-origin: top center;
            -ms-transform-origin: top center;
            -o-transform-origin: top center;
            transform-origin: top center;
        }
        .prop-conteneur:first-child {
            border-right: 1px solid #000;
        }
        .prop-conteneur:last-child {
            border-left: 1px solid #000;
        }
        h1 {
            margin-top:30px;
        }
        .alert {
            position: absolute;
            background: green;
            color: #fff;
        }
    </style>
";
        
        $__internal_4077e35a4d741376ce7d2d483c2272a6d5b8f714068d58b84e9485bae3dcb453->leave($__internal_4077e35a4d741376ce7d2d483c2272a6d5b8f714068d58b84e9485bae3dcb453_prof);

        
        $__internal_74612e6283a37607d841c7e67ad55bac7c2a6bf0b47f2764ec4da2077aad15d8->leave($__internal_74612e6283a37607d841c7e67ad55bac7c2a6bf0b47f2764ec4da2077aad15d8_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container-full\">
    <h1>Je préfère...</h1>
        <div class=\"row\">
            <img src=\"{{ asset('bundles/app/images/versus.png') }}\" alt=\"\" id=\"versus\">
            <div class=\"col-md-6 prop-conteneur\">
                <a href=\"{{url('vote', {'id':prop1.id})}}\"><img src=\"/uploads/{{ prop1.imageName }}\" alt=\"{{ prop1.titre }}\" id=\"\"></a>
            </div>
            <div class=\"col-md-6 prop-conteneur\">
                <a href=\"{{url('vote', {'id':prop2.id})}}\"><img src=\"/uploads/{{ prop2.imageName }}\" alt=\"{{ prop2.titre }}\" id=\"\"></a>
            </div>
        </div>

    </div>

    <style>
        #versus {
            position: absolute;
            z-index:55;
            width:300px;
            left:50%;
            top:50%;
            transform: translate(-150px,-150px);
        }
        .prop-conteneur {
            display: flex;
            justify-content:center;
            align-items: center;
            width: 50vw;
            height:80vh;
            overflow: hidden;
            background: lightblue;
            cursor: pointer;
        }
        .prop-conteneur a {
            background: red;
        }
        .prop-conteneur img {
            -webkit-transition: all 800ms;
            -moz-transition: all 800ms;
            -ms-transition: all 800ms;
            -o-transition: all 800ms;
            transition: all 800ms;
            /*filter: grayscale(100%);*/
            cursor: pointer;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            top:0;
            left:0;
        }
        /*.prop-conteneur:first-of-type::before {*/
            /*content: '';*/
            /*position: absolute;*/
            /*top:0;*/
            /*left:0;*/
            /*width:100%;*/
            /*height: 100%;*/
            /*background: deepskyblue;*/
            /*opacity:0.5;*/
            /*z-index:50;*/
            /*transition: all 500ms;*/
        /*}*/
        /*.prop-conteneur:last-of-type::before {*/
            /*content: '';*/
            /*position: absolute;*/
            /*top:0;*/
            /*left:0;*/
            /*width:100%;*/
            /*height: 100%;*/
            /*background: red;*/
            /*opacity:0.5;*/
            /*z-index:50;*/
            /*transition: all 500ms;*/
        /*}*/
        .prop-conteneur:hover::before {
            opacity:0;
        }
        .prop-conteneur:hover img {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
            -webkit-transform-origin: top center;
            -moz-transform-origin: top center;
            -ms-transform-origin: top center;
            -o-transform-origin: top center;
            transform-origin: top center;
        }
        .prop-conteneur:first-child {
            border-right: 1px solid #000;
        }
        .prop-conteneur:last-child {
            border-left: 1px solid #000;
        }
        h1 {
            margin-top:30px;
        }
        .alert {
            position: absolute;
            background: green;
            color: #fff;
        }
    </style>
{% endblock %}

", "default/index.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\default\\index.html.twig");
    }
}
