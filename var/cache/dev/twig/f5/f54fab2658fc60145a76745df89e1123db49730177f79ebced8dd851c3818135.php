<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b674088368c5b23596bd935f26f636fc97aeac8257ecbe3900baa8c0926f39cd extends Twig_Template
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
        $__internal_45405bf64906e85b14360700cee6f30a181debf5bfcb62b4ab3774f7e81fef70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45405bf64906e85b14360700cee6f30a181debf5bfcb62b4ab3774f7e81fef70->enter($__internal_45405bf64906e85b14360700cee6f30a181debf5bfcb62b4ab3774f7e81fef70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_11d61a915e081be5c40f32b64196f58e2c01d2184b89271c8f454df1febb5539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d61a915e081be5c40f32b64196f58e2c01d2184b89271c8f454df1febb5539->enter($__internal_11d61a915e081be5c40f32b64196f58e2c01d2184b89271c8f454df1febb5539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_45405bf64906e85b14360700cee6f30a181debf5bfcb62b4ab3774f7e81fef70->leave($__internal_45405bf64906e85b14360700cee6f30a181debf5bfcb62b4ab3774f7e81fef70_prof);

        
        $__internal_11d61a915e081be5c40f32b64196f58e2c01d2184b89271c8f454df1febb5539->leave($__internal_11d61a915e081be5c40f32b64196f58e2c01d2184b89271c8f454df1febb5539_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cdb62fb16f29a17a568d669163c4dc4fc47d578d6d1b6de2f115aefe717e6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdb62fb16f29a17a568d669163c4dc4fc47d578d6d1b6de2f115aefe717e6f6->enter($__internal_2cdb62fb16f29a17a568d669163c4dc4fc47d578d6d1b6de2f115aefe717e6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d50d4c2fe20877e838a42868e80ed4f0da86bf9e6c61e91e8b407b16f958b78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50d4c2fe20877e838a42868e80ed4f0da86bf9e6c61e91e8b407b16f958b78e->enter($__internal_d50d4c2fe20877e838a42868e80ed4f0da86bf9e6c61e91e8b407b16f958b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d50d4c2fe20877e838a42868e80ed4f0da86bf9e6c61e91e8b407b16f958b78e->leave($__internal_d50d4c2fe20877e838a42868e80ed4f0da86bf9e6c61e91e8b407b16f958b78e_prof);

        
        $__internal_2cdb62fb16f29a17a568d669163c4dc4fc47d578d6d1b6de2f115aefe717e6f6->leave($__internal_2cdb62fb16f29a17a568d669163c4dc4fc47d578d6d1b6de2f115aefe717e6f6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_715a9d5e8aa8302e27c538e46d428365941cb63c2cd1bf8986ea0ab8bdf72c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715a9d5e8aa8302e27c538e46d428365941cb63c2cd1bf8986ea0ab8bdf72c66->enter($__internal_715a9d5e8aa8302e27c538e46d428365941cb63c2cd1bf8986ea0ab8bdf72c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb5dc8610584bdea1f443f36accf3543e6f8b9dcc329c4088ad204ae85c1f5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5dc8610584bdea1f443f36accf3543e6f8b9dcc329c4088ad204ae85c1f5d7->enter($__internal_cb5dc8610584bdea1f443f36accf3543e6f8b9dcc329c4088ad204ae85c1f5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cb5dc8610584bdea1f443f36accf3543e6f8b9dcc329c4088ad204ae85c1f5d7->leave($__internal_cb5dc8610584bdea1f443f36accf3543e6f8b9dcc329c4088ad204ae85c1f5d7_prof);

        
        $__internal_715a9d5e8aa8302e27c538e46d428365941cb63c2cd1bf8986ea0ab8bdf72c66->leave($__internal_715a9d5e8aa8302e27c538e46d428365941cb63c2cd1bf8986ea0ab8bdf72c66_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_64b3b5c70e6ffbc95fd669d346a8284699c74789f54bb6b1d121c461847129c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b3b5c70e6ffbc95fd669d346a8284699c74789f54bb6b1d121c461847129c4->enter($__internal_64b3b5c70e6ffbc95fd669d346a8284699c74789f54bb6b1d121c461847129c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ebb57f7e67e2685fc6657565b93eeac56043ad5135d080c004f3863b135604e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebb57f7e67e2685fc6657565b93eeac56043ad5135d080c004f3863b135604e->enter($__internal_3ebb57f7e67e2685fc6657565b93eeac56043ad5135d080c004f3863b135604e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ebb57f7e67e2685fc6657565b93eeac56043ad5135d080c004f3863b135604e->leave($__internal_3ebb57f7e67e2685fc6657565b93eeac56043ad5135d080c004f3863b135604e_prof);

        
        $__internal_64b3b5c70e6ffbc95fd669d346a8284699c74789f54bb6b1d121c461847129c4->leave($__internal_64b3b5c70e6ffbc95fd669d346a8284699c74789f54bb6b1d121c461847129c4_prof);

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
