<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_a9581cd8af6ac6e1802915462e95fcfbdd7cc7ee4637e377fc1b86c8011c15c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8820d6487f7e5138dd6a07e0bf15e6e5feb4f079206e02f4625501201858d6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8820d6487f7e5138dd6a07e0bf15e6e5feb4f079206e02f4625501201858d6e5->enter($__internal_8820d6487f7e5138dd6a07e0bf15e6e5feb4f079206e02f4625501201858d6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_79a43f01dbf4195ff64bd25b7390d77a3375d12c6958611e8aadac16825280c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a43f01dbf4195ff64bd25b7390d77a3375d12c6958611e8aadac16825280c4->enter($__internal_79a43f01dbf4195ff64bd25b7390d77a3375d12c6958611e8aadac16825280c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"]) ? $context["__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"] : $this->getContext($context, "__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"]) ? $context["__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"] : $this->getContext($context, "__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8820d6487f7e5138dd6a07e0bf15e6e5feb4f079206e02f4625501201858d6e5->leave($__internal_8820d6487f7e5138dd6a07e0bf15e6e5feb4f079206e02f4625501201858d6e5_prof);

        
        $__internal_79a43f01dbf4195ff64bd25b7390d77a3375d12c6958611e8aadac16825280c4->leave($__internal_79a43f01dbf4195ff64bd25b7390d77a3375d12c6958611e8aadac16825280c4_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a91bcdef9bbdeeeb2252ff82bf4add85a23450e84feaee53bf637bf6fc18926d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91bcdef9bbdeeeb2252ff82bf4add85a23450e84feaee53bf637bf6fc18926d->enter($__internal_a91bcdef9bbdeeeb2252ff82bf4add85a23450e84feaee53bf637bf6fc18926d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_0c8945e7588e72c418a04087c106bcf0b942f509b6ff0115796dc19267e462b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8945e7588e72c418a04087c106bcf0b942f509b6ff0115796dc19267e462b1->enter($__internal_0c8945e7588e72c418a04087c106bcf0b942f509b6ff0115796dc19267e462b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_0c8945e7588e72c418a04087c106bcf0b942f509b6ff0115796dc19267e462b1->leave($__internal_0c8945e7588e72c418a04087c106bcf0b942f509b6ff0115796dc19267e462b1_prof);

        
        $__internal_a91bcdef9bbdeeeb2252ff82bf4add85a23450e84feaee53bf637bf6fc18926d->leave($__internal_a91bcdef9bbdeeeb2252ff82bf4add85a23450e84feaee53bf637bf6fc18926d_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5305ba174677b9d64843188c8fbd0c83ca4f776980f4db0b8cc4c6ac33f026bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5305ba174677b9d64843188c8fbd0c83ca4f776980f4db0b8cc4c6ac33f026bc->enter($__internal_5305ba174677b9d64843188c8fbd0c83ca4f776980f4db0b8cc4c6ac33f026bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_38d7b611ec23aae620e94f96922ef5168013806c1336d1eeef10119c69b9786b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d7b611ec23aae620e94f96922ef5168013806c1336d1eeef10119c69b9786b->enter($__internal_38d7b611ec23aae620e94f96922ef5168013806c1336d1eeef10119c69b9786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_38d7b611ec23aae620e94f96922ef5168013806c1336d1eeef10119c69b9786b->leave($__internal_38d7b611ec23aae620e94f96922ef5168013806c1336d1eeef10119c69b9786b_prof);

        
        $__internal_5305ba174677b9d64843188c8fbd0c83ca4f776980f4db0b8cc4c6ac33f026bc->leave($__internal_5305ba174677b9d64843188c8fbd0c83ca4f776980f4db0b8cc4c6ac33f026bc_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5c1059b84e3146df08e5ca4adc7d8c165500aefd78884a6384bf2feb88681f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1059b84e3146df08e5ca4adc7d8c165500aefd78884a6384bf2feb88681f3c->enter($__internal_5c1059b84e3146df08e5ca4adc7d8c165500aefd78884a6384bf2feb88681f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_7a36936ea882dcddcc3493edb470d36e27a4450c5875fc60fa2678467b600a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a36936ea882dcddcc3493edb470d36e27a4450c5875fc60fa2678467b600a03->enter($__internal_7a36936ea882dcddcc3493edb470d36e27a4450c5875fc60fa2678467b600a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"]) ? $context["__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd"] : $this->getContext($context, "__internal_aa9c324323f818671f19ccc49cbf726f396da467c3865ddd5daae1b488fc2cfd")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7a36936ea882dcddcc3493edb470d36e27a4450c5875fc60fa2678467b600a03->leave($__internal_7a36936ea882dcddcc3493edb470d36e27a4450c5875fc60fa2678467b600a03_prof);

        
        $__internal_5c1059b84e3146df08e5ca4adc7d8c165500aefd78884a6384bf2feb88681f3c->leave($__internal_5c1059b84e3146df08e5ca4adc7d8c165500aefd78884a6384bf2feb88681f3c_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_ddf9e5d44c695b9200fc5c86660079832c10089894e139dc14904250116e70cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf9e5d44c695b9200fc5c86660079832c10089894e139dc14904250116e70cc->enter($__internal_ddf9e5d44c695b9200fc5c86660079832c10089894e139dc14904250116e70cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_916a52ec40afd07de4b6d584068c9124fb2d9d3a3361d8d9749fc95eb01c18c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916a52ec40afd07de4b6d584068c9124fb2d9d3a3361d8d9749fc95eb01c18c6->enter($__internal_916a52ec40afd07de4b6d584068c9124fb2d9d3a3361d8d9749fc95eb01c18c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_916a52ec40afd07de4b6d584068c9124fb2d9d3a3361d8d9749fc95eb01c18c6->leave($__internal_916a52ec40afd07de4b6d584068c9124fb2d9d3a3361d8d9749fc95eb01c18c6_prof);

        
        $__internal_ddf9e5d44c695b9200fc5c86660079832c10089894e139dc14904250116e70cc->leave($__internal_ddf9e5d44c695b9200fc5c86660079832c10089894e139dc14904250116e70cc_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_a383d498df21c2b07d45a120602a84464f6ae5f27a0d945426535181a789a698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a383d498df21c2b07d45a120602a84464f6ae5f27a0d945426535181a789a698->enter($__internal_a383d498df21c2b07d45a120602a84464f6ae5f27a0d945426535181a789a698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_1be9c03c21717fadd77d1960518eb8244f99469cc578664f5cf4a376580e0463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be9c03c21717fadd77d1960518eb8244f99469cc578664f5cf4a376580e0463->enter($__internal_1be9c03c21717fadd77d1960518eb8244f99469cc578664f5cf4a376580e0463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_1be9c03c21717fadd77d1960518eb8244f99469cc578664f5cf4a376580e0463->leave($__internal_1be9c03c21717fadd77d1960518eb8244f99469cc578664f5cf4a376580e0463_prof);

        
        $__internal_a383d498df21c2b07d45a120602a84464f6ae5f27a0d945426535181a789a698->leave($__internal_a383d498df21c2b07d45a120602a84464f6ae5f27a0d945426535181a789a698_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_29ef4a8266d5ebd7234cfe82113af84306100238024cfaaa5f47712eb4acf56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ef4a8266d5ebd7234cfe82113af84306100238024cfaaa5f47712eb4acf56e->enter($__internal_29ef4a8266d5ebd7234cfe82113af84306100238024cfaaa5f47712eb4acf56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_481883b2d9517f204507a64dda9c51bfbc8cbf7bf987641e0c0a80c0b968d799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481883b2d9517f204507a64dda9c51bfbc8cbf7bf987641e0c0a80c0b968d799->enter($__internal_481883b2d9517f204507a64dda9c51bfbc8cbf7bf987641e0c0a80c0b968d799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_481883b2d9517f204507a64dda9c51bfbc8cbf7bf987641e0c0a80c0b968d799->leave($__internal_481883b2d9517f204507a64dda9c51bfbc8cbf7bf987641e0c0a80c0b968d799_prof);

        
        $__internal_29ef4a8266d5ebd7234cfe82113af84306100238024cfaaa5f47712eb4acf56e->leave($__internal_29ef4a8266d5ebd7234cfe82113af84306100238024cfaaa5f47712eb4acf56e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "C:\\projet-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\new.html.twig");
    }
}
