<?php

/* default/category.html.twig */
class __TwigTemplate_1988def42b3668db4ec9a57b56caa3bfdc185b474665e4bcc25c202b9a712963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/category.html.twig", 1);
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
        $__internal_17832d3a6851322a3e420c17e8b180164ba713085a8c97b944f2afd999c638d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17832d3a6851322a3e420c17e8b180164ba713085a8c97b944f2afd999c638d0->enter($__internal_17832d3a6851322a3e420c17e8b180164ba713085a8c97b944f2afd999c638d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/category.html.twig"));

        $__internal_c0bf850bad6783feebb797317f4ff2c77ab15c901b28a74bdf55971b244f8cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bf850bad6783feebb797317f4ff2c77ab15c901b28a74bdf55971b244f8cc3->enter($__internal_c0bf850bad6783feebb797317f4ff2c77ab15c901b28a74bdf55971b244f8cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17832d3a6851322a3e420c17e8b180164ba713085a8c97b944f2afd999c638d0->leave($__internal_17832d3a6851322a3e420c17e8b180164ba713085a8c97b944f2afd999c638d0_prof);

        
        $__internal_c0bf850bad6783feebb797317f4ff2c77ab15c901b28a74bdf55971b244f8cc3->leave($__internal_c0bf850bad6783feebb797317f4ff2c77ab15c901b28a74bdf55971b244f8cc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8f32f2faf6c048cb1290198f5af833acf595afa2644967fe92fb17d33098cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f32f2faf6c048cb1290198f5af833acf595afa2644967fe92fb17d33098cdd->enter($__internal_a8f32f2faf6c048cb1290198f5af833acf595afa2644967fe92fb17d33098cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef99c2a3e4b9ca4a8acec505b9b06ece75d2a42e428a0e46bd6f191e4354c645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef99c2a3e4b9ca4a8acec505b9b06ece75d2a42e428a0e46bd6f191e4354c645->enter($__internal_ef99c2a3e4b9ca4a8acec505b9b06ece75d2a42e428a0e46bd6f191e4354c645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-full\">
        <h1>Dans ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "titre", array()), "html", null, true);
        echo ", je préfère...</h1>
        <div class=\"row\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/versus.png"), "html", null, true);
        echo "\" alt=\"\" id=\"versus\">
            <div class=\"col-md-6 prop-conteneur\">
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("votecat", array("category" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "titre", array()), "id" => $this->getAttribute((isset($context["prop1"]) ? $context["prop1"] : $this->getContext($context, "prop1")), "id", array()))), "html", null, true);
        echo "\"><img src=\"/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prop1"]) ? $context["prop1"] : $this->getContext($context, "prop1")), "imageName", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prop1"]) ? $context["prop1"] : $this->getContext($context, "prop1")), "titre", array()), "html", null, true);
        echo "\" id=\"\"></a>
            </div>
            <div class=\"col-md-6 prop-conteneur\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("votecat", array("category" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "titre", array()), "id" => $this->getAttribute((isset($context["prop2"]) ? $context["prop2"] : $this->getContext($context, "prop2")), "id", array()))), "html", null, true);
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
        
        $__internal_ef99c2a3e4b9ca4a8acec505b9b06ece75d2a42e428a0e46bd6f191e4354c645->leave($__internal_ef99c2a3e4b9ca4a8acec505b9b06ece75d2a42e428a0e46bd6f191e4354c645_prof);

        
        $__internal_a8f32f2faf6c048cb1290198f5af833acf595afa2644967fe92fb17d33098cdd->leave($__internal_a8f32f2faf6c048cb1290198f5af833acf595afa2644967fe92fb17d33098cdd_prof);

    }

    public function getTemplateName()
    {
        return "default/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  62 => 9,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container-full\">
        <h1>Dans {{ cat.titre }}, je préfère...</h1>
        <div class=\"row\">
            <img src=\"{{ asset('bundles/app/images/versus.png') }}\" alt=\"\" id=\"versus\">
            <div class=\"col-md-6 prop-conteneur\">
                <a href=\"{{url('votecat', {'category':cat.titre,'id':prop1.id})}}\"><img src=\"/uploads/{{ prop1.imageName }}\" alt=\"{{ prop1.titre }}\" id=\"\"></a>
            </div>
            <div class=\"col-md-6 prop-conteneur\">
                <a href=\"{{url('votecat', {'category':cat.titre,'id':prop2.id})}}\"><img src=\"/uploads/{{ prop2.imageName }}\" alt=\"{{ prop2.titre }}\" id=\"\"></a>
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
{% endblock %}", "default/category.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\default\\category.html.twig");
    }
}
