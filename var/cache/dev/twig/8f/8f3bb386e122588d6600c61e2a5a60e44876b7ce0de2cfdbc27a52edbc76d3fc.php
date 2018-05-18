<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cf1071bf3e044f9c0f2f167cb8ec257796c11267e8a59c6bea7dd6d1f15ce16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fe6352812b4369557b91076b38122a2509e58954c43937358c96818090a894f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe6352812b4369557b91076b38122a2509e58954c43937358c96818090a894f->enter($__internal_0fe6352812b4369557b91076b38122a2509e58954c43937358c96818090a894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3897da1e56e35f1f6a2421d015d17e044b58c15c60af2d732073cbe93a31af93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3897da1e56e35f1f6a2421d015d17e044b58c15c60af2d732073cbe93a31af93->enter($__internal_3897da1e56e35f1f6a2421d015d17e044b58c15c60af2d732073cbe93a31af93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0fe6352812b4369557b91076b38122a2509e58954c43937358c96818090a894f->leave($__internal_0fe6352812b4369557b91076b38122a2509e58954c43937358c96818090a894f_prof);

        
        $__internal_3897da1e56e35f1f6a2421d015d17e044b58c15c60af2d732073cbe93a31af93->leave($__internal_3897da1e56e35f1f6a2421d015d17e044b58c15c60af2d732073cbe93a31af93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_158e9e8d3b0e0b935ba3490d9f19a8132509510ec05354ccccf8c051c157d2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158e9e8d3b0e0b935ba3490d9f19a8132509510ec05354ccccf8c051c157d2a8->enter($__internal_158e9e8d3b0e0b935ba3490d9f19a8132509510ec05354ccccf8c051c157d2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ddb0a254a8d3570432e4f5b89ecdc121f8734b340175996ebcf8e9a64b15087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddb0a254a8d3570432e4f5b89ecdc121f8734b340175996ebcf8e9a64b15087->enter($__internal_4ddb0a254a8d3570432e4f5b89ecdc121f8734b340175996ebcf8e9a64b15087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4ddb0a254a8d3570432e4f5b89ecdc121f8734b340175996ebcf8e9a64b15087->leave($__internal_4ddb0a254a8d3570432e4f5b89ecdc121f8734b340175996ebcf8e9a64b15087_prof);

        
        $__internal_158e9e8d3b0e0b935ba3490d9f19a8132509510ec05354ccccf8c051c157d2a8->leave($__internal_158e9e8d3b0e0b935ba3490d9f19a8132509510ec05354ccccf8c051c157d2a8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b2b4361d91e7b7191a26241b6e40ec50a3f2c392b2365f07c9615143f4c2284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2b4361d91e7b7191a26241b6e40ec50a3f2c392b2365f07c9615143f4c2284->enter($__internal_2b2b4361d91e7b7191a26241b6e40ec50a3f2c392b2365f07c9615143f4c2284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e94df85af61bd8b225ce00a78783763751d1935ee268dd085ddc77feff79d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e94df85af61bd8b225ce00a78783763751d1935ee268dd085ddc77feff79d08->enter($__internal_1e94df85af61bd8b225ce00a78783763751d1935ee268dd085ddc77feff79d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1e94df85af61bd8b225ce00a78783763751d1935ee268dd085ddc77feff79d08->leave($__internal_1e94df85af61bd8b225ce00a78783763751d1935ee268dd085ddc77feff79d08_prof);

        
        $__internal_2b2b4361d91e7b7191a26241b6e40ec50a3f2c392b2365f07c9615143f4c2284->leave($__internal_2b2b4361d91e7b7191a26241b6e40ec50a3f2c392b2365f07c9615143f4c2284_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_681eda3efc1ca531f745e07bc71f36d0da1e1a16f876190ebae525e88d0f44fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681eda3efc1ca531f745e07bc71f36d0da1e1a16f876190ebae525e88d0f44fa->enter($__internal_681eda3efc1ca531f745e07bc71f36d0da1e1a16f876190ebae525e88d0f44fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89ae1549e090c7eab7848b5b9af553823ebb870e327f04c404767e1be2fae478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ae1549e090c7eab7848b5b9af553823ebb870e327f04c404767e1be2fae478->enter($__internal_89ae1549e090c7eab7848b5b9af553823ebb870e327f04c404767e1be2fae478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89ae1549e090c7eab7848b5b9af553823ebb870e327f04c404767e1be2fae478->leave($__internal_89ae1549e090c7eab7848b5b9af553823ebb870e327f04c404767e1be2fae478_prof);

        
        $__internal_681eda3efc1ca531f745e07bc71f36d0da1e1a16f876190ebae525e88d0f44fa->leave($__internal_681eda3efc1ca531f745e07bc71f36d0da1e1a16f876190ebae525e88d0f44fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\projet-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
