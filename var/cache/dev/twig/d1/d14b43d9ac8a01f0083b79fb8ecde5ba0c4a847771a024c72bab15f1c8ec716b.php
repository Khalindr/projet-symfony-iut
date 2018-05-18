<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_fca2755eaa850d5605814001e77c70b640333d6fb93caf7389e5efae5f774a77 extends Twig_Template
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
        $__internal_340f5a39474f04ec372388d4c19d9ca3f142dc4e145bdf94d75b02d671b71f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340f5a39474f04ec372388d4c19d9ca3f142dc4e145bdf94d75b02d671b71f82->enter($__internal_340f5a39474f04ec372388d4c19d9ca3f142dc4e145bdf94d75b02d671b71f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_04c05bbd66028090f9f85604bbdbd3566a342620570b3b4acc95cabc93465d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c05bbd66028090f9f85604bbdbd3566a342620570b3b4acc95cabc93465d20->enter($__internal_04c05bbd66028090f9f85604bbdbd3566a342620570b3b4acc95cabc93465d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div class=\"valign\">
<div class=\"container \">
    <div class=\"row\">
        <div class=\"col-md-6 offset-md-2\">

            <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                ";
        // line 12
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 13
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
                ";
        }
        // line 15
        echo "                <div class=\"text-center mb-4\">
                    <h1 class=\"text-primary\">Admin</h1>
                </div>

                <div class=\"form-label-group\">
                    <input type=\"text\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" required autofocus>
                    <label for=\"inputEmail\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <div class=\"form-label-group\">
                    <input type=\"password\"  name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" required>
                    <label for=\"inputPassword\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\" value=\"one\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </label>
                </div>

                <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>


                <p class=\"mt-5 mb-3 text-muted text-center\">&copy; ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
            </form>

        </div>
    </div>
</div></div>";
        
        $__internal_340f5a39474f04ec372388d4c19d9ca3f142dc4e145bdf94d75b02d671b71f82->leave($__internal_340f5a39474f04ec372388d4c19d9ca3f142dc4e145bdf94d75b02d671b71f82_prof);

        
        $__internal_04c05bbd66028090f9f85604bbdbd3566a342620570b3b4acc95cabc93465d20->leave($__internal_04c05bbd66028090f9f85604bbdbd3566a342620570b3b4acc95cabc93465d20_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  92 => 35,  85 => 31,  77 => 26,  73 => 25,  66 => 21,  62 => 20,  55 => 15,  49 => 13,  47 => 12,  43 => 11,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"valign\">
<div class=\"container \">
    <div class=\"row\">
        <div class=\"col-md-6 offset-md-2\">

            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                {% endif %}
                <div class=\"text-center mb-4\">
                    <h1 class=\"text-primary\">Admin</h1>
                </div>

                <div class=\"form-label-group\">
                    <input type=\"text\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" required autofocus>
                    <label for=\"inputEmail\">{{ 'security.login.username'|trans }}</label>
                </div>

                <div class=\"form-label-group\">
                    <input type=\"password\"  name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\" required>
                    <label for=\"inputPassword\">{{ 'security.login.password'|trans }}</label>
                </div>

                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\" value=\"one\"> {{ 'security.login.remember_me'|trans }}
                    </label>
                </div>

                <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"/>


                <p class=\"mt-5 mb-3 text-muted text-center\">&copy; {{ 'now'|date('Y') }}</p>
            </form>

        </div>
    </div>
</div></div>", "@FOSUser/Security/login_content.html.twig", "C:\\projet-symfony\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
