<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_607620e819293e06b3faa79469cb591ed751f1065f335cce2578b7312af5dc9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d038f3578065d1779580a31d58d5da20b9c5a64c08833409c1d385c69077efba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d038f3578065d1779580a31d58d5da20b9c5a64c08833409c1d385c69077efba->enter($__internal_d038f3578065d1779580a31d58d5da20b9c5a64c08833409c1d385c69077efba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ef9fc43bfbe84060b4cfb2a58788566adfe23df3b11ad8e7a863c04c8e2fef14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9fc43bfbe84060b4cfb2a58788566adfe23df3b11ad8e7a863c04c8e2fef14->enter($__internal_ef9fc43bfbe84060b4cfb2a58788566adfe23df3b11ad8e7a863c04c8e2fef14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d038f3578065d1779580a31d58d5da20b9c5a64c08833409c1d385c69077efba->leave($__internal_d038f3578065d1779580a31d58d5da20b9c5a64c08833409c1d385c69077efba_prof);

        
        $__internal_ef9fc43bfbe84060b4cfb2a58788566adfe23df3b11ad8e7a863c04c8e2fef14->leave($__internal_ef9fc43bfbe84060b4cfb2a58788566adfe23df3b11ad8e7a863c04c8e2fef14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_251597534afdef3e5b414c3c1987b59409158a32be07a73f99a4af32a23d1db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251597534afdef3e5b414c3c1987b59409158a32be07a73f99a4af32a23d1db4->enter($__internal_251597534afdef3e5b414c3c1987b59409158a32be07a73f99a4af32a23d1db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f751285a71cca2a4c1cc8736ce65ebf837847bab9d9135a4e653c06d229e6d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f751285a71cca2a4c1cc8736ce65ebf837847bab9d9135a4e653c06d229e6d50->enter($__internal_f751285a71cca2a4c1cc8736ce65ebf837847bab9d9135a4e653c06d229e6d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f751285a71cca2a4c1cc8736ce65ebf837847bab9d9135a4e653c06d229e6d50->leave($__internal_f751285a71cca2a4c1cc8736ce65ebf837847bab9d9135a4e653c06d229e6d50_prof);

        
        $__internal_251597534afdef3e5b414c3c1987b59409158a32be07a73f99a4af32a23d1db4->leave($__internal_251597534afdef3e5b414c3c1987b59409158a32be07a73f99a4af32a23d1db4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4343fd83720c177eed68d9cb6e90132a1bd4cf1972b56a64954a88e6a36ebcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4343fd83720c177eed68d9cb6e90132a1bd4cf1972b56a64954a88e6a36ebcf1->enter($__internal_4343fd83720c177eed68d9cb6e90132a1bd4cf1972b56a64954a88e6a36ebcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8e20de266515b10e5aa01930e3cbdf25f903d3310a6739347e92cb79cea1fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e20de266515b10e5aa01930e3cbdf25f903d3310a6739347e92cb79cea1fc2->enter($__internal_e8e20de266515b10e5aa01930e3cbdf25f903d3310a6739347e92cb79cea1fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8e20de266515b10e5aa01930e3cbdf25f903d3310a6739347e92cb79cea1fc2->leave($__internal_e8e20de266515b10e5aa01930e3cbdf25f903d3310a6739347e92cb79cea1fc2_prof);

        
        $__internal_4343fd83720c177eed68d9cb6e90132a1bd4cf1972b56a64954a88e6a36ebcf1->leave($__internal_4343fd83720c177eed68d9cb6e90132a1bd4cf1972b56a64954a88e6a36ebcf1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c85906276f5034f529e42e2c9bc9335d33dcd822bddec388c2ff9fdb40ec03be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85906276f5034f529e42e2c9bc9335d33dcd822bddec388c2ff9fdb40ec03be->enter($__internal_c85906276f5034f529e42e2c9bc9335d33dcd822bddec388c2ff9fdb40ec03be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6fead2d76a189659d71d6f819bf09950820fad73c124b0dfa62d478a53565d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fead2d76a189659d71d6f819bf09950820fad73c124b0dfa62d478a53565d2->enter($__internal_a6fead2d76a189659d71d6f819bf09950820fad73c124b0dfa62d478a53565d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a6fead2d76a189659d71d6f819bf09950820fad73c124b0dfa62d478a53565d2->leave($__internal_a6fead2d76a189659d71d6f819bf09950820fad73c124b0dfa62d478a53565d2_prof);

        
        $__internal_c85906276f5034f529e42e2c9bc9335d33dcd822bddec388c2ff9fdb40ec03be->leave($__internal_c85906276f5034f529e42e2c9bc9335d33dcd822bddec388c2ff9fdb40ec03be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\projet-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
