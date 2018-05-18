<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_bc2ca2799a1fae18e44626751a0e9f0f559e7c9f07e336c85c6711b9f4383149 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f2f7f352fb633930d59a4f3b0917365c0cb752f817d77a097cd9dd8d07555af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2f7f352fb633930d59a4f3b0917365c0cb752f817d77a097cd9dd8d07555af->enter($__internal_2f2f7f352fb633930d59a4f3b0917365c0cb752f817d77a097cd9dd8d07555af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        $__internal_064d325e0b66964938a09a9d977eecfd4161c5bfa47af00d4969a34cc76eed7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064d325e0b66964938a09a9d977eecfd4161c5bfa47af00d4969a34cc76eed7c->enter($__internal_064d325e0b66964938a09a9d977eecfd4161c5bfa47af00d4969a34cc76eed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"]) ? $context["__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"] : $this->getContext($context, "__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"]) ? $context["__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"] : $this->getContext($context, "__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f2f7f352fb633930d59a4f3b0917365c0cb752f817d77a097cd9dd8d07555af->leave($__internal_2f2f7f352fb633930d59a4f3b0917365c0cb752f817d77a097cd9dd8d07555af_prof);

        
        $__internal_064d325e0b66964938a09a9d977eecfd4161c5bfa47af00d4969a34cc76eed7c->leave($__internal_064d325e0b66964938a09a9d977eecfd4161c5bfa47af00d4969a34cc76eed7c_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c016448d1c9b4c2c77cf6928e5f709b07043de9f2dbebf478d442c1be3a3694f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c016448d1c9b4c2c77cf6928e5f709b07043de9f2dbebf478d442c1be3a3694f->enter($__internal_c016448d1c9b4c2c77cf6928e5f709b07043de9f2dbebf478d442c1be3a3694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_fb122df184ea45f236234ab6781fae0accb9093ba12bb660df7829a57e219df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb122df184ea45f236234ab6781fae0accb9093ba12bb660df7829a57e219df7->enter($__internal_fb122df184ea45f236234ab6781fae0accb9093ba12bb660df7829a57e219df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_fb122df184ea45f236234ab6781fae0accb9093ba12bb660df7829a57e219df7->leave($__internal_fb122df184ea45f236234ab6781fae0accb9093ba12bb660df7829a57e219df7_prof);

        
        $__internal_c016448d1c9b4c2c77cf6928e5f709b07043de9f2dbebf478d442c1be3a3694f->leave($__internal_c016448d1c9b4c2c77cf6928e5f709b07043de9f2dbebf478d442c1be3a3694f_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_64a4111d689eaf6a07d0396a1d43d566b668e0d229c181371ade75a864866e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a4111d689eaf6a07d0396a1d43d566b668e0d229c181371ade75a864866e08->enter($__internal_64a4111d689eaf6a07d0396a1d43d566b668e0d229c181371ade75a864866e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_44e8fa0cee0c79e947da6489e137c3f763a625909d2fbb3dd3fa7ab16d53b03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e8fa0cee0c79e947da6489e137c3f763a625909d2fbb3dd3fa7ab16d53b03f->enter($__internal_44e8fa0cee0c79e947da6489e137c3f763a625909d2fbb3dd3fa7ab16d53b03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_44e8fa0cee0c79e947da6489e137c3f763a625909d2fbb3dd3fa7ab16d53b03f->leave($__internal_44e8fa0cee0c79e947da6489e137c3f763a625909d2fbb3dd3fa7ab16d53b03f_prof);

        
        $__internal_64a4111d689eaf6a07d0396a1d43d566b668e0d229c181371ade75a864866e08->leave($__internal_64a4111d689eaf6a07d0396a1d43d566b668e0d229c181371ade75a864866e08_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0cf3e7818a286ff63cd8e44ca08a59cc27ce8bccf7a649bc1d6ef54dd14ceeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf3e7818a286ff63cd8e44ca08a59cc27ce8bccf7a649bc1d6ef54dd14ceeec->enter($__internal_0cf3e7818a286ff63cd8e44ca08a59cc27ce8bccf7a649bc1d6ef54dd14ceeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_3989e4b79ef490caf2a7fe9dc8016457b983917b372c40741f04a7117b75cf15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3989e4b79ef490caf2a7fe9dc8016457b983917b372c40741f04a7117b75cf15->enter($__internal_3989e4b79ef490caf2a7fe9dc8016457b983917b372c40741f04a7117b75cf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"]) ? $context["__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24"] : $this->getContext($context, "__internal_b5b22dc350849921f3b767601be752cb29085a398579c1ef577a42edddc69d24")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3989e4b79ef490caf2a7fe9dc8016457b983917b372c40741f04a7117b75cf15->leave($__internal_3989e4b79ef490caf2a7fe9dc8016457b983917b372c40741f04a7117b75cf15_prof);

        
        $__internal_0cf3e7818a286ff63cd8e44ca08a59cc27ce8bccf7a649bc1d6ef54dd14ceeec->leave($__internal_0cf3e7818a286ff63cd8e44ca08a59cc27ce8bccf7a649bc1d6ef54dd14ceeec_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_5b809d926dfb6127afd7f5f8ac8dfe584b91776c64129b2b5705d13063454764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b809d926dfb6127afd7f5f8ac8dfe584b91776c64129b2b5705d13063454764->enter($__internal_5b809d926dfb6127afd7f5f8ac8dfe584b91776c64129b2b5705d13063454764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_dfb836b00cbc11840e773b87c616ade725d5f43b59bb282fe1335d49d5dfc6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb836b00cbc11840e773b87c616ade725d5f43b59bb282fe1335d49d5dfc6fe->enter($__internal_dfb836b00cbc11840e773b87c616ade725d5f43b59bb282fe1335d49d5dfc6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_dfb836b00cbc11840e773b87c616ade725d5f43b59bb282fe1335d49d5dfc6fe->leave($__internal_dfb836b00cbc11840e773b87c616ade725d5f43b59bb282fe1335d49d5dfc6fe_prof);

        
        $__internal_5b809d926dfb6127afd7f5f8ac8dfe584b91776c64129b2b5705d13063454764->leave($__internal_5b809d926dfb6127afd7f5f8ac8dfe584b91776c64129b2b5705d13063454764_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_15d04ec244817ac0661f827aa7011a5d7b3c973e4fbd9a0c577a20f35824cba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d04ec244817ac0661f827aa7011a5d7b3c973e4fbd9a0c577a20f35824cba5->enter($__internal_15d04ec244817ac0661f827aa7011a5d7b3c973e4fbd9a0c577a20f35824cba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_46f280199e0c8edd05c4a19f1d072efa94c4edd8f81d15dd2663224d672fdca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f280199e0c8edd05c4a19f1d072efa94c4edd8f81d15dd2663224d672fdca4->enter($__internal_46f280199e0c8edd05c4a19f1d072efa94c4edd8f81d15dd2663224d672fdca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_46f280199e0c8edd05c4a19f1d072efa94c4edd8f81d15dd2663224d672fdca4->leave($__internal_46f280199e0c8edd05c4a19f1d072efa94c4edd8f81d15dd2663224d672fdca4_prof);

        
        $__internal_15d04ec244817ac0661f827aa7011a5d7b3c973e4fbd9a0c577a20f35824cba5->leave($__internal_15d04ec244817ac0661f827aa7011a5d7b3c973e4fbd9a0c577a20f35824cba5_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_21aa728c0cd55311d0701f270de84e4c22385f4034311ed25ba6b479768a6670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21aa728c0cd55311d0701f270de84e4c22385f4034311ed25ba6b479768a6670->enter($__internal_21aa728c0cd55311d0701f270de84e4c22385f4034311ed25ba6b479768a6670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_c7d5cf2cc72f925b76c8c5db993dd241e5eef6f5a04aef9be12a08ba8ec81b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d5cf2cc72f925b76c8c5db993dd241e5eef6f5a04aef9be12a08ba8ec81b17->enter($__internal_c7d5cf2cc72f925b76c8c5db993dd241e5eef6f5a04aef9be12a08ba8ec81b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_c7d5cf2cc72f925b76c8c5db993dd241e5eef6f5a04aef9be12a08ba8ec81b17->leave($__internal_c7d5cf2cc72f925b76c8c5db993dd241e5eef6f5a04aef9be12a08ba8ec81b17_prof);

        
        $__internal_21aa728c0cd55311d0701f270de84e4c22385f4034311ed25ba6b479768a6670->leave($__internal_21aa728c0cd55311d0701f270de84e4c22385f4034311ed25ba6b479768a6670_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_5696434bbf7a286daba8fe021d2035dbddba237c53d64057c9f3424c3d537fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5696434bbf7a286daba8fe021d2035dbddba237c53d64057c9f3424c3d537fb1->enter($__internal_5696434bbf7a286daba8fe021d2035dbddba237c53d64057c9f3424c3d537fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_391c3f08d57d7986505b4d047c3619c9387d98af66ddb954a4d2e024000871e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391c3f08d57d7986505b4d047c3619c9387d98af66ddb954a4d2e024000871e1->enter($__internal_391c3f08d57d7986505b4d047c3619c9387d98af66ddb954a4d2e024000871e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_391c3f08d57d7986505b4d047c3619c9387d98af66ddb954a4d2e024000871e1->leave($__internal_391c3f08d57d7986505b4d047c3619c9387d98af66ddb954a4d2e024000871e1_prof);

        
        $__internal_5696434bbf7a286daba8fe021d2035dbddba237c53d64057c9f3424c3d537fb1->leave($__internal_5696434bbf7a286daba8fe021d2035dbddba237c53d64057c9f3424c3d537fb1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "C:\\projet-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\edit.html.twig");
    }
}
