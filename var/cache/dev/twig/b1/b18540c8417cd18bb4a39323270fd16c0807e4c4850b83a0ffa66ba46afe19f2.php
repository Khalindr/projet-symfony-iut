<?php

/* base.html.twig */
class __TwigTemplate_fdb300c8a2ef3713592757e8b2be4bf5d96063416dd465c1980c276d0868969e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7789966ce3ec6dc6b10c6a54a283f9413dfbb1143655834ecb85a464fb2285bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7789966ce3ec6dc6b10c6a54a283f9413dfbb1143655834ecb85a464fb2285bf->enter($__internal_7789966ce3ec6dc6b10c6a54a283f9413dfbb1143655834ecb85a464fb2285bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5e65c33c9fad68a0ff7cb9cbf9121118dc7c7c35f4b379003c7ac35fa5565828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e65c33c9fad68a0ff7cb9cbf9121118dc7c7c35f4b379003c7ac35fa5565828->enter($__internal_5e65c33c9fad68a0ff7cb9cbf9121118dc7c7c35f4b379003c7ac35fa5565828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <script
            src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
            integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
            crossorigin=\"anonymous\"></script>
</head>
<body>
";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 39
        echo "<div class=\"container-full\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 43
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "

    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "</div>
";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</body>
</html>
";
        
        $__internal_7789966ce3ec6dc6b10c6a54a283f9413dfbb1143655834ecb85a464fb2285bf->leave($__internal_7789966ce3ec6dc6b10c6a54a283f9413dfbb1143655834ecb85a464fb2285bf_prof);

        
        $__internal_5e65c33c9fad68a0ff7cb9cbf9121118dc7c7c35f4b379003c7ac35fa5565828->leave($__internal_5e65c33c9fad68a0ff7cb9cbf9121118dc7c7c35f4b379003c7ac35fa5565828_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db9533f928d124d90fdab1c021f3cc941900bd922cda48db77e8bd568f466490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9533f928d124d90fdab1c021f3cc941900bd922cda48db77e8bd568f466490->enter($__internal_db9533f928d124d90fdab1c021f3cc941900bd922cda48db77e8bd568f466490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b249f91bee9c09e2edf18343a73997caabd7f2513beee466e462b4608bf6306d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b249f91bee9c09e2edf18343a73997caabd7f2513beee466e462b4608bf6306d->enter($__internal_b249f91bee9c09e2edf18343a73997caabd7f2513beee466e462b4608bf6306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b249f91bee9c09e2edf18343a73997caabd7f2513beee466e462b4608bf6306d->leave($__internal_b249f91bee9c09e2edf18343a73997caabd7f2513beee466e462b4608bf6306d_prof);

        
        $__internal_db9533f928d124d90fdab1c021f3cc941900bd922cda48db77e8bd568f466490->leave($__internal_db9533f928d124d90fdab1c021f3cc941900bd922cda48db77e8bd568f466490_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16d03b6f2047a5e0b7876b96548634a2c46e549737fc8fe651282065d78370c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d03b6f2047a5e0b7876b96548634a2c46e549737fc8fe651282065d78370c7->enter($__internal_16d03b6f2047a5e0b7876b96548634a2c46e549737fc8fe651282065d78370c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_81a45cb23b72f570e0ba5399515367b4a39e848379e74add2de74081a620edd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a45cb23b72f570e0ba5399515367b4a39e848379e74add2de74081a620edd3->enter($__internal_81a45cb23b72f570e0ba5399515367b4a39e848379e74add2de74081a620edd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\"
              integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/layout.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_81a45cb23b72f570e0ba5399515367b4a39e848379e74add2de74081a620edd3->leave($__internal_81a45cb23b72f570e0ba5399515367b4a39e848379e74add2de74081a620edd3_prof);

        
        $__internal_16d03b6f2047a5e0b7876b96548634a2c46e549737fc8fe651282065d78370c7->leave($__internal_16d03b6f2047a5e0b7876b96548634a2c46e549737fc8fe651282065d78370c7_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bcffd693a5c7c371aa714368e8a71a589b712e59065b0f7087baaab43f2f655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bcffd693a5c7c371aa714368e8a71a589b712e59065b0f7087baaab43f2f655->enter($__internal_7bcffd693a5c7c371aa714368e8a71a589b712e59065b0f7087baaab43f2f655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e04142492c4ad391ee3fe4e031009dd89380a82d99bc7c8dfa2c92be34f69e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e04142492c4ad391ee3fe4e031009dd89380a82d99bc7c8dfa2c92be34f69e0->enter($__internal_4e04142492c4ad391ee3fe4e031009dd89380a82d99bc7c8dfa2c92be34f69e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "
   ";
        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle\\Controller\\DefaultController::getMenuAction", array("route" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 26
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))));
        // line 27
        echo "

    <div class=\"container\">
    ";
        // line 30
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 31
            echo "        <div class=\"float-right\">
        <i class=\"fa fa-user\"></i> Utilisateur : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "

            ";
            // line 34
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                echo "TOP";
            }
            // line 35
            echo "        </div>
    ";
        }
        // line 37
        echo "    </div>
";
        
        $__internal_4e04142492c4ad391ee3fe4e031009dd89380a82d99bc7c8dfa2c92be34f69e0->leave($__internal_4e04142492c4ad391ee3fe4e031009dd89380a82d99bc7c8dfa2c92be34f69e0_prof);

        
        $__internal_7bcffd693a5c7c371aa714368e8a71a589b712e59065b0f7087baaab43f2f655->leave($__internal_7bcffd693a5c7c371aa714368e8a71a589b712e59065b0f7087baaab43f2f655_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_88440285b55f1cdba5ab368730c3f077dbfdb33b8e8ac2703382be40ffd210af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88440285b55f1cdba5ab368730c3f077dbfdb33b8e8ac2703382be40ffd210af->enter($__internal_88440285b55f1cdba5ab368730c3f077dbfdb33b8e8ac2703382be40ffd210af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2905bdb634ffb5649e7c7003e23b107089e5e832aee5ef2728258afc3a0c90e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2905bdb634ffb5649e7c7003e23b107089e5e832aee5ef2728258afc3a0c90e5->enter($__internal_2905bdb634ffb5649e7c7003e23b107089e5e832aee5ef2728258afc3a0c90e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        \$twig->addExtension(new Twig_Extensions_Extension_Text());
        <h1>Page non trouvée</h1>
    ";
        
        $__internal_2905bdb634ffb5649e7c7003e23b107089e5e832aee5ef2728258afc3a0c90e5->leave($__internal_2905bdb634ffb5649e7c7003e23b107089e5e832aee5ef2728258afc3a0c90e5_prof);

        
        $__internal_88440285b55f1cdba5ab368730c3f077dbfdb33b8e8ac2703382be40ffd210af->leave($__internal_88440285b55f1cdba5ab368730c3f077dbfdb33b8e8ac2703382be40ffd210af_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5b607478ea494f42c1a570b2a5796dc3bd2ff0c9a3b57931360859beb729b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b607478ea494f42c1a570b2a5796dc3bd2ff0c9a3b57931360859beb729b6a->enter($__internal_c5b607478ea494f42c1a570b2a5796dc3bd2ff0c9a3b57931360859beb729b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_64dbd0dfe0c1c9e90091133448c5e539b70b5376b19177a5d4c6c4bc5fac523d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64dbd0dfe0c1c9e90091133448c5e539b70b5376b19177a5d4c6c4bc5fac523d->enter($__internal_64dbd0dfe0c1c9e90091133448c5e539b70b5376b19177a5d4c6c4bc5fac523d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
            integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
            integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"
            integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\"
            crossorigin=\"anonymous\"></script>
";
        
        $__internal_64dbd0dfe0c1c9e90091133448c5e539b70b5376b19177a5d4c6c4bc5fac523d->leave($__internal_64dbd0dfe0c1c9e90091133448c5e539b70b5376b19177a5d4c6c4bc5fac523d_prof);

        
        $__internal_c5b607478ea494f42c1a570b2a5796dc3bd2ff0c9a3b57931360859beb729b6a->leave($__internal_c5b607478ea494f42c1a570b2a5796dc3bd2ff0c9a3b57931360859beb729b6a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 55,  231 => 54,  219 => 50,  210 => 49,  199 => 37,  195 => 35,  191 => 34,  186 => 32,  183 => 31,  181 => 30,  176 => 27,  174 => 26,  173 => 24,  170 => 23,  167 => 21,  158 => 20,  146 => 11,  142 => 10,  137 => 7,  128 => 6,  110 => 5,  98 => 65,  96 => 54,  93 => 53,  91 => 49,  87 => 47,  81 => 46,  72 => 43,  67 => 42,  62 => 41,  58 => 40,  55 => 39,  53 => 20,  42 => 13,  40 => 6,  36 => 5,  30 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\"
              integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/layout.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    <script
            src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
            integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
            crossorigin=\"anonymous\"></script>
</head>
<body>
{% block menu %}

   {# {% include 'menu.html.twig' %} #}

    {{ render(controller(
    'AppBundle\\\\Controller\\\\DefaultController::getMenuAction',
    {'route': app.request.attributes.get('_route')}
    )) }}

    <div class=\"container\">
    {% if app.user %}
        <div class=\"float-right\">
        <i class=\"fa fa-user\"></i> Utilisateur : {{ app.user.username }}

            {% if is_granted('ROLE_SUPER_ADMIN') %}TOP{% endif %}
        </div>
    {% endif  %}
    </div>
{% endblock %}
<div class=\"container-full\">
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}


    {% block body %}
        \$twig->addExtension(new Twig_Extensions_Extension_Text());
        <h1>Page non trouvée</h1>
    {% endblock %}
</div>
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
            integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
            integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"
            integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\"
            crossorigin=\"anonymous\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\projet-symfony\\app\\Resources\\views\\base.html.twig");
    }
}
