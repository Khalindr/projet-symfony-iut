<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ff6ac95898385c8b4a5585f35a2253f14caac78080d82b5e6ea1452b0890c243 extends Twig_Template
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
        $__internal_0cda08dad4f0d660c80c35dca483f3fec6c110c5ddfb335725f56703d8eee671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cda08dad4f0d660c80c35dca483f3fec6c110c5ddfb335725f56703d8eee671->enter($__internal_0cda08dad4f0d660c80c35dca483f3fec6c110c5ddfb335725f56703d8eee671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f0c4e09a5e3d570d7befa611f0fce870c03c58d0c3012783205a0693a8b4fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0c4e09a5e3d570d7befa611f0fce870c03c58d0c3012783205a0693a8b4fa1->enter($__internal_1f0c4e09a5e3d570d7befa611f0fce870c03c58d0c3012783205a0693a8b4fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cda08dad4f0d660c80c35dca483f3fec6c110c5ddfb335725f56703d8eee671->leave($__internal_0cda08dad4f0d660c80c35dca483f3fec6c110c5ddfb335725f56703d8eee671_prof);

        
        $__internal_1f0c4e09a5e3d570d7befa611f0fce870c03c58d0c3012783205a0693a8b4fa1->leave($__internal_1f0c4e09a5e3d570d7befa611f0fce870c03c58d0c3012783205a0693a8b4fa1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28e76f4451c834ac0586abace61577124a2f94fe39c7e5b7dda40ed592103bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e76f4451c834ac0586abace61577124a2f94fe39c7e5b7dda40ed592103bca->enter($__internal_28e76f4451c834ac0586abace61577124a2f94fe39c7e5b7dda40ed592103bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b930cfb4c521ef0b838de0c9a8a14b07045e56d71858010a9fd26104ee4b4aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b930cfb4c521ef0b838de0c9a8a14b07045e56d71858010a9fd26104ee4b4aba->enter($__internal_b930cfb4c521ef0b838de0c9a8a14b07045e56d71858010a9fd26104ee4b4aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b930cfb4c521ef0b838de0c9a8a14b07045e56d71858010a9fd26104ee4b4aba->leave($__internal_b930cfb4c521ef0b838de0c9a8a14b07045e56d71858010a9fd26104ee4b4aba_prof);

        
        $__internal_28e76f4451c834ac0586abace61577124a2f94fe39c7e5b7dda40ed592103bca->leave($__internal_28e76f4451c834ac0586abace61577124a2f94fe39c7e5b7dda40ed592103bca_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e025dce97e73e3537887e0354c459f13ea8820d1d919d69d6699b7d6a54d5962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e025dce97e73e3537887e0354c459f13ea8820d1d919d69d6699b7d6a54d5962->enter($__internal_e025dce97e73e3537887e0354c459f13ea8820d1d919d69d6699b7d6a54d5962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03e5be6e74006af83a795e4a796e42854cb700d6a2e8322fb200e0c4bfae1caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e5be6e74006af83a795e4a796e42854cb700d6a2e8322fb200e0c4bfae1caf->enter($__internal_03e5be6e74006af83a795e4a796e42854cb700d6a2e8322fb200e0c4bfae1caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03e5be6e74006af83a795e4a796e42854cb700d6a2e8322fb200e0c4bfae1caf->leave($__internal_03e5be6e74006af83a795e4a796e42854cb700d6a2e8322fb200e0c4bfae1caf_prof);

        
        $__internal_e025dce97e73e3537887e0354c459f13ea8820d1d919d69d6699b7d6a54d5962->leave($__internal_e025dce97e73e3537887e0354c459f13ea8820d1d919d69d6699b7d6a54d5962_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b69da56569247d8604fee5cd3af4c4cceee16e85197f9ea1292bff544f063927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69da56569247d8604fee5cd3af4c4cceee16e85197f9ea1292bff544f063927->enter($__internal_b69da56569247d8604fee5cd3af4c4cceee16e85197f9ea1292bff544f063927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a58c1ed4c9e2dbff3a16fec7e6c53b6c89a7bb772c66e6e5520612131aadeb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58c1ed4c9e2dbff3a16fec7e6c53b6c89a7bb772c66e6e5520612131aadeb98->enter($__internal_a58c1ed4c9e2dbff3a16fec7e6c53b6c89a7bb772c66e6e5520612131aadeb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a58c1ed4c9e2dbff3a16fec7e6c53b6c89a7bb772c66e6e5520612131aadeb98->leave($__internal_a58c1ed4c9e2dbff3a16fec7e6c53b6c89a7bb772c66e6e5520612131aadeb98_prof);

        
        $__internal_b69da56569247d8604fee5cd3af4c4cceee16e85197f9ea1292bff544f063927->leave($__internal_b69da56569247d8604fee5cd3af4c4cceee16e85197f9ea1292bff544f063927_prof);

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
