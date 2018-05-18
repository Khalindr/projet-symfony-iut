<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_7a7add2b1a5f4bf333c5994a263104fd9e4098678fd7bc6f10e5734a86f9d70a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebca0425d8700695a7f8a2d8e95aa3ce1f03c1fcff6a8789161d05c4bae6d954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebca0425d8700695a7f8a2d8e95aa3ce1f03c1fcff6a8789161d05c4bae6d954->enter($__internal_ebca0425d8700695a7f8a2d8e95aa3ce1f03c1fcff6a8789161d05c4bae6d954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_73fa33bf983be0207f4630a7c2a8154da0c798735855e685f134cfe3cde6ef5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fa33bf983be0207f4630a7c2a8154da0c798735855e685f134cfe3cde6ef5e->enter($__internal_73fa33bf983be0207f4630a7c2a8154da0c798735855e685f134cfe3cde6ef5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 569
        echo "
";
        // line 571
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 593
        echo "
";
        // line 595
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_ebca0425d8700695a7f8a2d8e95aa3ce1f03c1fcff6a8789161d05c4bae6d954->leave($__internal_ebca0425d8700695a7f8a2d8e95aa3ce1f03c1fcff6a8789161d05c4bae6d954_prof);

        
        $__internal_73fa33bf983be0207f4630a7c2a8154da0c798735855e685f134cfe3cde6ef5e->leave($__internal_73fa33bf983be0207f4630a7c2a8154da0c798735855e685f134cfe3cde6ef5e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_558262eec8289bb6d663f91709b40f8a4fff4d23bd5fd6c41a81a031ec089afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558262eec8289bb6d663f91709b40f8a4fff4d23bd5fd6c41a81a031ec089afd->enter($__internal_558262eec8289bb6d663f91709b40f8a4fff4d23bd5fd6c41a81a031ec089afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d0198be147a0f4874493ab93fa1ae81415c6eae8f26dc70af773c13a79400987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0198be147a0f4874493ab93fa1ae81415c6eae8f26dc70af773c13a79400987->enter($__internal_d0198be147a0f4874493ab93fa1ae81415c6eae8f26dc70af773c13a79400987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_d0198be147a0f4874493ab93fa1ae81415c6eae8f26dc70af773c13a79400987->leave($__internal_d0198be147a0f4874493ab93fa1ae81415c6eae8f26dc70af773c13a79400987_prof);

        
        $__internal_558262eec8289bb6d663f91709b40f8a4fff4d23bd5fd6c41a81a031ec089afd->leave($__internal_558262eec8289bb6d663f91709b40f8a4fff4d23bd5fd6c41a81a031ec089afd_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_4eb937730b46fb3c3a6366ea8cb8c3fc9294ed3ea3439be69dc628c4485fbc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb937730b46fb3c3a6366ea8cb8c3fc9294ed3ea3439be69dc628c4485fbc92->enter($__internal_4eb937730b46fb3c3a6366ea8cb8c3fc9294ed3ea3439be69dc628c4485fbc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_7c9d3f1eaefc1c37fe461c8c175c56b174d489ca20a2997e2021b0b46f9f984d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9d3f1eaefc1c37fe461c8c175c56b174d489ca20a2997e2021b0b46f9f984d->enter($__internal_7c9d3f1eaefc1c37fe461c8c175c56b174d489ca20a2997e2021b0b46f9f984d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_7c9d3f1eaefc1c37fe461c8c175c56b174d489ca20a2997e2021b0b46f9f984d->leave($__internal_7c9d3f1eaefc1c37fe461c8c175c56b174d489ca20a2997e2021b0b46f9f984d_prof);

        
        $__internal_4eb937730b46fb3c3a6366ea8cb8c3fc9294ed3ea3439be69dc628c4485fbc92->leave($__internal_4eb937730b46fb3c3a6366ea8cb8c3fc9294ed3ea3439be69dc628c4485fbc92_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cd26aa8acef8fdc5c8957fcf2e8ab780171d65265c46703e76305661b96ec207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd26aa8acef8fdc5c8957fcf2e8ab780171d65265c46703e76305661b96ec207->enter($__internal_cd26aa8acef8fdc5c8957fcf2e8ab780171d65265c46703e76305661b96ec207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_96f7cf15c4be736551dc23da82b0349b917c99a9a3d25814ec6f5f750b26dd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f7cf15c4be736551dc23da82b0349b917c99a9a3d25814ec6f5f750b26dd76->enter($__internal_96f7cf15c4be736551dc23da82b0349b917c99a9a3d25814ec6f5f750b26dd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_96f7cf15c4be736551dc23da82b0349b917c99a9a3d25814ec6f5f750b26dd76->leave($__internal_96f7cf15c4be736551dc23da82b0349b917c99a9a3d25814ec6f5f750b26dd76_prof);

        
        $__internal_cd26aa8acef8fdc5c8957fcf2e8ab780171d65265c46703e76305661b96ec207->leave($__internal_cd26aa8acef8fdc5c8957fcf2e8ab780171d65265c46703e76305661b96ec207_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_474046f2f922408fe403069fdaf38baa5c88fcf6e7835caa929eeec1fb63f61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474046f2f922408fe403069fdaf38baa5c88fcf6e7835caa929eeec1fb63f61f->enter($__internal_474046f2f922408fe403069fdaf38baa5c88fcf6e7835caa929eeec1fb63f61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d3b9929f2274f9ae4c8d5236873ff6e49f8307a51051efd72f31c48ffa50e2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b9929f2274f9ae4c8d5236873ff6e49f8307a51051efd72f31c48ffa50e2ba->enter($__internal_d3b9929f2274f9ae4c8d5236873ff6e49f8307a51051efd72f31c48ffa50e2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d3b9929f2274f9ae4c8d5236873ff6e49f8307a51051efd72f31c48ffa50e2ba->leave($__internal_d3b9929f2274f9ae4c8d5236873ff6e49f8307a51051efd72f31c48ffa50e2ba_prof);

        
        $__internal_474046f2f922408fe403069fdaf38baa5c88fcf6e7835caa929eeec1fb63f61f->leave($__internal_474046f2f922408fe403069fdaf38baa5c88fcf6e7835caa929eeec1fb63f61f_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e5df560e9f42f9bfed74fabc94ce0551d3dacdc8404ac60f18e0768180db833e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5df560e9f42f9bfed74fabc94ce0551d3dacdc8404ac60f18e0768180db833e->enter($__internal_e5df560e9f42f9bfed74fabc94ce0551d3dacdc8404ac60f18e0768180db833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_91134bbb856d37626ad55adb4caf8be94042e48ed8d93042772033697415d412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91134bbb856d37626ad55adb4caf8be94042e48ed8d93042772033697415d412->enter($__internal_91134bbb856d37626ad55adb4caf8be94042e48ed8d93042772033697415d412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_91134bbb856d37626ad55adb4caf8be94042e48ed8d93042772033697415d412->leave($__internal_91134bbb856d37626ad55adb4caf8be94042e48ed8d93042772033697415d412_prof);

        
        $__internal_e5df560e9f42f9bfed74fabc94ce0551d3dacdc8404ac60f18e0768180db833e->leave($__internal_e5df560e9f42f9bfed74fabc94ce0551d3dacdc8404ac60f18e0768180db833e_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_cab0d7e19399eacd33d5d417d457995480e476f92d73073bfec47324c9ffd15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab0d7e19399eacd33d5d417d457995480e476f92d73073bfec47324c9ffd15f->enter($__internal_cab0d7e19399eacd33d5d417d457995480e476f92d73073bfec47324c9ffd15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_16314424bb3ee01b658c7f91a82ab744730b85aca74e29e08c104248e3fbf026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16314424bb3ee01b658c7f91a82ab744730b85aca74e29e08c104248e3fbf026->enter($__internal_16314424bb3ee01b658c7f91a82ab744730b85aca74e29e08c104248e3fbf026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 76
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
        
        $__internal_16314424bb3ee01b658c7f91a82ab744730b85aca74e29e08c104248e3fbf026->leave($__internal_16314424bb3ee01b658c7f91a82ab744730b85aca74e29e08c104248e3fbf026_prof);

        
        $__internal_cab0d7e19399eacd33d5d417d457995480e476f92d73073bfec47324c9ffd15f->leave($__internal_cab0d7e19399eacd33d5d417d457995480e476f92d73073bfec47324c9ffd15f_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6411d4eda86e1687f070226ebd78e4750fa1dd9ccdbdc05ec35f411039ba2222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6411d4eda86e1687f070226ebd78e4750fa1dd9ccdbdc05ec35f411039ba2222->enter($__internal_6411d4eda86e1687f070226ebd78e4750fa1dd9ccdbdc05ec35f411039ba2222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d3ca099681c8b85447560a13b762e449c7ae74eced84ab683dc78d772f4ad687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ca099681c8b85447560a13b762e449c7ae74eced84ab683dc78d772f4ad687->enter($__internal_d3ca099681c8b85447560a13b762e449c7ae74eced84ab683dc78d772f4ad687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_d3ca099681c8b85447560a13b762e449c7ae74eced84ab683dc78d772f4ad687->leave($__internal_d3ca099681c8b85447560a13b762e449c7ae74eced84ab683dc78d772f4ad687_prof);

        
        $__internal_6411d4eda86e1687f070226ebd78e4750fa1dd9ccdbdc05ec35f411039ba2222->leave($__internal_6411d4eda86e1687f070226ebd78e4750fa1dd9ccdbdc05ec35f411039ba2222_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b8212d1aebceeae661b8cf7ef6796041b00743409215f11e8f0afd74bb55c1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8212d1aebceeae661b8cf7ef6796041b00743409215f11e8f0afd74bb55c1d0->enter($__internal_b8212d1aebceeae661b8cf7ef6796041b00743409215f11e8f0afd74bb55c1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4ba3ad9a7a0d8f75454ff616dd1b2a11d0149479d2bc89568e7bb30f4ddb01a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba3ad9a7a0d8f75454ff616dd1b2a11d0149479d2bc89568e7bb30f4ddb01a9->enter($__internal_4ba3ad9a7a0d8f75454ff616dd1b2a11d0149479d2bc89568e7bb30f4ddb01a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
        
        $__internal_4ba3ad9a7a0d8f75454ff616dd1b2a11d0149479d2bc89568e7bb30f4ddb01a9->leave($__internal_4ba3ad9a7a0d8f75454ff616dd1b2a11d0149479d2bc89568e7bb30f4ddb01a9_prof);

        
        $__internal_b8212d1aebceeae661b8cf7ef6796041b00743409215f11e8f0afd74bb55c1d0->leave($__internal_b8212d1aebceeae661b8cf7ef6796041b00743409215f11e8f0afd74bb55c1d0_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_095a93af7c361c99def01a321e2106e0e316adb5d4a71cd2df07cb999efdc6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095a93af7c361c99def01a321e2106e0e316adb5d4a71cd2df07cb999efdc6c9->enter($__internal_095a93af7c361c99def01a321e2106e0e316adb5d4a71cd2df07cb999efdc6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_af8d8caa4d6c652dcd812e83aff50cce36671dc1021b0f9a3b08e5b9d6f775f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8d8caa4d6c652dcd812e83aff50cce36671dc1021b0f9a3b08e5b9d6f775f8->enter($__internal_af8d8caa4d6c652dcd812e83aff50cce36671dc1021b0f9a3b08e5b9d6f775f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 108
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 120
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_af8d8caa4d6c652dcd812e83aff50cce36671dc1021b0f9a3b08e5b9d6f775f8->leave($__internal_af8d8caa4d6c652dcd812e83aff50cce36671dc1021b0f9a3b08e5b9d6f775f8_prof);

        
        $__internal_095a93af7c361c99def01a321e2106e0e316adb5d4a71cd2df07cb999efdc6c9->leave($__internal_095a93af7c361c99def01a321e2106e0e316adb5d4a71cd2df07cb999efdc6c9_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_dd800878683db2ef05c806deb936f907e33b56bc4bc351c3326a9c20bdb11265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd800878683db2ef05c806deb936f907e33b56bc4bc351c3326a9c20bdb11265->enter($__internal_dd800878683db2ef05c806deb936f907e33b56bc4bc351c3326a9c20bdb11265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_59d8be44c9602ce2062e237aed4820df26d683119d7c2409668ee912667614ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d8be44c9602ce2062e237aed4820df26d683119d7c2409668ee912667614ce->enter($__internal_59d8be44c9602ce2062e237aed4820df26d683119d7c2409668ee912667614ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 127
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 136
                echo "</div>";
            }
        }
        
        $__internal_59d8be44c9602ce2062e237aed4820df26d683119d7c2409668ee912667614ce->leave($__internal_59d8be44c9602ce2062e237aed4820df26d683119d7c2409668ee912667614ce_prof);

        
        $__internal_dd800878683db2ef05c806deb936f907e33b56bc4bc351c3326a9c20bdb11265->leave($__internal_dd800878683db2ef05c806deb936f907e33b56bc4bc351c3326a9c20bdb11265_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_da8db400868b2cd2425d0ba5c8cee3998338ed8d0d8b44f8895ef36fe9914393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8db400868b2cd2425d0ba5c8cee3998338ed8d0d8b44f8895ef36fe9914393->enter($__internal_da8db400868b2cd2425d0ba5c8cee3998338ed8d0d8b44f8895ef36fe9914393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d63fd184c914b45df0274dd133c53f28b2cd2c1844709c55a02cb4ab42f25e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63fd184c914b45df0274dd133c53f28b2cd2c1844709c55a02cb4ab42f25e87->enter($__internal_d63fd184c914b45df0274dd133c53f28b2cd2c1844709c55a02cb4ab42f25e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 142
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_d63fd184c914b45df0274dd133c53f28b2cd2c1844709c55a02cb4ab42f25e87->leave($__internal_d63fd184c914b45df0274dd133c53f28b2cd2c1844709c55a02cb4ab42f25e87_prof);

        
        $__internal_da8db400868b2cd2425d0ba5c8cee3998338ed8d0d8b44f8895ef36fe9914393->leave($__internal_da8db400868b2cd2425d0ba5c8cee3998338ed8d0d8b44f8895ef36fe9914393_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ff142801f5846056e8927696b175906e71145bca7e0d21673a66f909e7f7c78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff142801f5846056e8927696b175906e71145bca7e0d21673a66f909e7f7c78f->enter($__internal_ff142801f5846056e8927696b175906e71145bca7e0d21673a66f909e7f7c78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a677fbfcef8ead70c193922bc04187918665cd4ba4af3ac9b5b702ce60bd7f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a677fbfcef8ead70c193922bc04187918665cd4ba4af3ac9b5b702ce60bd7f3d->enter($__internal_a677fbfcef8ead70c193922bc04187918665cd4ba4af3ac9b5b702ce60bd7f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 170
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 174
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 183
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
        
        $__internal_a677fbfcef8ead70c193922bc04187918665cd4ba4af3ac9b5b702ce60bd7f3d->leave($__internal_a677fbfcef8ead70c193922bc04187918665cd4ba4af3ac9b5b702ce60bd7f3d_prof);

        
        $__internal_ff142801f5846056e8927696b175906e71145bca7e0d21673a66f909e7f7c78f->leave($__internal_ff142801f5846056e8927696b175906e71145bca7e0d21673a66f909e7f7c78f_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2641518c1e931bd0e4bbee59660b6f09dba417fd2e0764d32f9b575cc335f6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2641518c1e931bd0e4bbee59660b6f09dba417fd2e0764d32f9b575cc335f6b6->enter($__internal_2641518c1e931bd0e4bbee59660b6f09dba417fd2e0764d32f9b575cc335f6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c59b6fdc427065fbec31e4baec5263a712386a1bd52945bc8e1a57301c4a3045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59b6fdc427065fbec31e4baec5263a712386a1bd52945bc8e1a57301c4a3045->enter($__internal_c59b6fdc427065fbec31e4baec5263a712386a1bd52945bc8e1a57301c4a3045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 194
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
        
        $__internal_c59b6fdc427065fbec31e4baec5263a712386a1bd52945bc8e1a57301c4a3045->leave($__internal_c59b6fdc427065fbec31e4baec5263a712386a1bd52945bc8e1a57301c4a3045_prof);

        
        $__internal_2641518c1e931bd0e4bbee59660b6f09dba417fd2e0764d32f9b575cc335f6b6->leave($__internal_2641518c1e931bd0e4bbee59660b6f09dba417fd2e0764d32f9b575cc335f6b6_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f50dd6d19ea158bd7ded0cadabf0fbcddeb0a354417d061cca263aca1154193f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50dd6d19ea158bd7ded0cadabf0fbcddeb0a354417d061cca263aca1154193f->enter($__internal_f50dd6d19ea158bd7ded0cadabf0fbcddeb0a354417d061cca263aca1154193f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e7a6859d053cfb2c0582611a5be6767a9d1bd67d7d9f9b546a9cdb6770b3d8d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a6859d053cfb2c0582611a5be6767a9d1bd67d7d9f9b546a9cdb6770b3d8d1->enter($__internal_e7a6859d053cfb2c0582611a5be6767a9d1bd67d7d9f9b546a9cdb6770b3d8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 203
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 205
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
        
        $__internal_e7a6859d053cfb2c0582611a5be6767a9d1bd67d7d9f9b546a9cdb6770b3d8d1->leave($__internal_e7a6859d053cfb2c0582611a5be6767a9d1bd67d7d9f9b546a9cdb6770b3d8d1_prof);

        
        $__internal_f50dd6d19ea158bd7ded0cadabf0fbcddeb0a354417d061cca263aca1154193f->leave($__internal_f50dd6d19ea158bd7ded0cadabf0fbcddeb0a354417d061cca263aca1154193f_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_79714b1490efc9b59e6d7a2e6b2b7eaaa4a21208ff18dc5ed65c52201b9ef031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79714b1490efc9b59e6d7a2e6b2b7eaaa4a21208ff18dc5ed65c52201b9ef031->enter($__internal_79714b1490efc9b59e6d7a2e6b2b7eaaa4a21208ff18dc5ed65c52201b9ef031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d610b198ea0b0bbe9e5852dcef47d2f8c87915f36538870816c285578d8b41a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d610b198ea0b0bbe9e5852dcef47d2f8c87915f36538870816c285578d8b41a7->enter($__internal_d610b198ea0b0bbe9e5852dcef47d2f8c87915f36538870816c285578d8b41a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d610b198ea0b0bbe9e5852dcef47d2f8c87915f36538870816c285578d8b41a7->leave($__internal_d610b198ea0b0bbe9e5852dcef47d2f8c87915f36538870816c285578d8b41a7_prof);

        
        $__internal_79714b1490efc9b59e6d7a2e6b2b7eaaa4a21208ff18dc5ed65c52201b9ef031->leave($__internal_79714b1490efc9b59e6d7a2e6b2b7eaaa4a21208ff18dc5ed65c52201b9ef031_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7d710ac9391611a015ca39921b1b89b9b86b5f8f29329267bef225cc2b703270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d710ac9391611a015ca39921b1b89b9b86b5f8f29329267bef225cc2b703270->enter($__internal_7d710ac9391611a015ca39921b1b89b9b86b5f8f29329267bef225cc2b703270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_659de735cd2d6bd351017f858b692b0ec58536b4347914a506c2bc719428cfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659de735cd2d6bd351017f858b692b0ec58536b4347914a506c2bc719428cfec->enter($__internal_659de735cd2d6bd351017f858b692b0ec58536b4347914a506c2bc719428cfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_659de735cd2d6bd351017f858b692b0ec58536b4347914a506c2bc719428cfec->leave($__internal_659de735cd2d6bd351017f858b692b0ec58536b4347914a506c2bc719428cfec_prof);

        
        $__internal_7d710ac9391611a015ca39921b1b89b9b86b5f8f29329267bef225cc2b703270->leave($__internal_7d710ac9391611a015ca39921b1b89b9b86b5f8f29329267bef225cc2b703270_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b57776b9c1c4a499289487916848834cb6617888ce3204c92153f78427012a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57776b9c1c4a499289487916848834cb6617888ce3204c92153f78427012a29->enter($__internal_b57776b9c1c4a499289487916848834cb6617888ce3204c92153f78427012a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a1db7222f08bb6f76731753c61f57b94a842c26629e026023bfef9d9b1973604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1db7222f08bb6f76731753c61f57b94a842c26629e026023bfef9d9b1973604->enter($__internal_a1db7222f08bb6f76731753c61f57b94a842c26629e026023bfef9d9b1973604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a1db7222f08bb6f76731753c61f57b94a842c26629e026023bfef9d9b1973604->leave($__internal_a1db7222f08bb6f76731753c61f57b94a842c26629e026023bfef9d9b1973604_prof);

        
        $__internal_b57776b9c1c4a499289487916848834cb6617888ce3204c92153f78427012a29->leave($__internal_b57776b9c1c4a499289487916848834cb6617888ce3204c92153f78427012a29_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9a4f96b2af3f544460ba276a3356d8750feaba5e408c7f73dd1171d6c154f638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4f96b2af3f544460ba276a3356d8750feaba5e408c7f73dd1171d6c154f638->enter($__internal_9a4f96b2af3f544460ba276a3356d8750feaba5e408c7f73dd1171d6c154f638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_559283f02719c7a590556275f40bbb323c12654c5ade3382986000c8a0ad8755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559283f02719c7a590556275f40bbb323c12654c5ade3382986000c8a0ad8755->enter($__internal_559283f02719c7a590556275f40bbb323c12654c5ade3382986000c8a0ad8755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_559283f02719c7a590556275f40bbb323c12654c5ade3382986000c8a0ad8755->leave($__internal_559283f02719c7a590556275f40bbb323c12654c5ade3382986000c8a0ad8755_prof);

        
        $__internal_9a4f96b2af3f544460ba276a3356d8750feaba5e408c7f73dd1171d6c154f638->leave($__internal_9a4f96b2af3f544460ba276a3356d8750feaba5e408c7f73dd1171d6c154f638_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c7f44d65c25717e6cf5ab4e68cac4b7d3b5def332f30c00dc3577f6be57a24ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f44d65c25717e6cf5ab4e68cac4b7d3b5def332f30c00dc3577f6be57a24ae->enter($__internal_c7f44d65c25717e6cf5ab4e68cac4b7d3b5def332f30c00dc3577f6be57a24ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f8f924abedeff8f3b4c5ab5ed3a66c8b233eb318147419c305a31cd2558face1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f924abedeff8f3b4c5ab5ed3a66c8b233eb318147419c305a31cd2558face1->enter($__internal_f8f924abedeff8f3b4c5ab5ed3a66c8b233eb318147419c305a31cd2558face1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 237
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 245
                echo "        ";
            }
            // line 246
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 247
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 248
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) ? ((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) : ($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
        
        $__internal_f8f924abedeff8f3b4c5ab5ed3a66c8b233eb318147419c305a31cd2558face1->leave($__internal_f8f924abedeff8f3b4c5ab5ed3a66c8b233eb318147419c305a31cd2558face1_prof);

        
        $__internal_c7f44d65c25717e6cf5ab4e68cac4b7d3b5def332f30c00dc3577f6be57a24ae->leave($__internal_c7f44d65c25717e6cf5ab4e68cac4b7d3b5def332f30c00dc3577f6be57a24ae_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6c643c589d503bdf3e73ea6092b75548e9960d5ee52539a161272da478c577d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c643c589d503bdf3e73ea6092b75548e9960d5ee52539a161272da478c577d3->enter($__internal_6c643c589d503bdf3e73ea6092b75548e9960d5ee52539a161272da478c577d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_25b9566a0114c4a27dd4edf7460967f58633c795632b5765f3d5b444179320dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b9566a0114c4a27dd4edf7460967f58633c795632b5765f3d5b444179320dd->enter($__internal_25b9566a0114c4a27dd4edf7460967f58633c795632b5765f3d5b444179320dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 256
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 261
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
        
        $__internal_25b9566a0114c4a27dd4edf7460967f58633c795632b5765f3d5b444179320dd->leave($__internal_25b9566a0114c4a27dd4edf7460967f58633c795632b5765f3d5b444179320dd_prof);

        
        $__internal_6c643c589d503bdf3e73ea6092b75548e9960d5ee52539a161272da478c577d3->leave($__internal_6c643c589d503bdf3e73ea6092b75548e9960d5ee52539a161272da478c577d3_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_ac0beabd5028e90702e35c98bf62587da96958a282c7ff76a2d8b9e4edbeda10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0beabd5028e90702e35c98bf62587da96958a282c7ff76a2d8b9e4edbeda10->enter($__internal_ac0beabd5028e90702e35c98bf62587da96958a282c7ff76a2d8b9e4edbeda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_88ef4f0ca9dd7aaeae793e42de6b39d69e8d698cb584050dfdbb5972e2a0c2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ef4f0ca9dd7aaeae793e42de6b39d69e8d698cb584050dfdbb5972e2a0c2d1->enter($__internal_88ef4f0ca9dd7aaeae793e42de6b39d69e8d698cb584050dfdbb5972e2a0c2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_88ef4f0ca9dd7aaeae793e42de6b39d69e8d698cb584050dfdbb5972e2a0c2d1->leave($__internal_88ef4f0ca9dd7aaeae793e42de6b39d69e8d698cb584050dfdbb5972e2a0c2d1_prof);

        
        $__internal_ac0beabd5028e90702e35c98bf62587da96958a282c7ff76a2d8b9e4edbeda10->leave($__internal_ac0beabd5028e90702e35c98bf62587da96958a282c7ff76a2d8b9e4edbeda10_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_71f51fdbf136f87ee3c32784a147f95d8fdbcd1a0710105442d3999d79e05237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f51fdbf136f87ee3c32784a147f95d8fdbcd1a0710105442d3999d79e05237->enter($__internal_71f51fdbf136f87ee3c32784a147f95d8fdbcd1a0710105442d3999d79e05237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9eda1e825119a4daa364a14aba938ff7618421fd9b988e22aba63589eafa36bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eda1e825119a4daa364a14aba938ff7618421fd9b988e22aba63589eafa36bc->enter($__internal_9eda1e825119a4daa364a14aba938ff7618421fd9b988e22aba63589eafa36bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 317
        echo "</div>";
        
        $__internal_9eda1e825119a4daa364a14aba938ff7618421fd9b988e22aba63589eafa36bc->leave($__internal_9eda1e825119a4daa364a14aba938ff7618421fd9b988e22aba63589eafa36bc_prof);

        
        $__internal_71f51fdbf136f87ee3c32784a147f95d8fdbcd1a0710105442d3999d79e05237->leave($__internal_71f51fdbf136f87ee3c32784a147f95d8fdbcd1a0710105442d3999d79e05237_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_143fe40bfd158ac57c315978f5bf69c929da6a86fc6a66b1d39bb48a5cd65ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143fe40bfd158ac57c315978f5bf69c929da6a86fc6a66b1d39bb48a5cd65ae5->enter($__internal_143fe40bfd158ac57c315978f5bf69c929da6a86fc6a66b1d39bb48a5cd65ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_b1568798fb50f0b0620286cbc69953e84a359ddb4e2d83644e9abe9061b2926e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1568798fb50f0b0620286cbc69953e84a359ddb4e2d83644e9abe9061b2926e->enter($__internal_b1568798fb50f0b0620286cbc69953e84a359ddb4e2d83644e9abe9061b2926e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b1568798fb50f0b0620286cbc69953e84a359ddb4e2d83644e9abe9061b2926e->leave($__internal_b1568798fb50f0b0620286cbc69953e84a359ddb4e2d83644e9abe9061b2926e_prof);

        
        $__internal_143fe40bfd158ac57c315978f5bf69c929da6a86fc6a66b1d39bb48a5cd65ae5->leave($__internal_143fe40bfd158ac57c315978f5bf69c929da6a86fc6a66b1d39bb48a5cd65ae5_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a1d31bf997d964cc484de56de807864b401825d96605974dcb0a063d5988574f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d31bf997d964cc484de56de807864b401825d96605974dcb0a063d5988574f->enter($__internal_a1d31bf997d964cc484de56de807864b401825d96605974dcb0a063d5988574f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_82c2cf23305c01a0f29717a8ef00d8548eba1156422bb02b43dcb75ea29242e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c2cf23305c01a0f29717a8ef00d8548eba1156422bb02b43dcb75ea29242e5->enter($__internal_82c2cf23305c01a0f29717a8ef00d8548eba1156422bb02b43dcb75ea29242e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_82c2cf23305c01a0f29717a8ef00d8548eba1156422bb02b43dcb75ea29242e5->leave($__internal_82c2cf23305c01a0f29717a8ef00d8548eba1156422bb02b43dcb75ea29242e5_prof);

        
        $__internal_a1d31bf997d964cc484de56de807864b401825d96605974dcb0a063d5988574f->leave($__internal_a1d31bf997d964cc484de56de807864b401825d96605974dcb0a063d5988574f_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_274c73bc11c8a10e6b1ae9176367522bb0450c5238a608abed3e262c32864e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274c73bc11c8a10e6b1ae9176367522bb0450c5238a608abed3e262c32864e41->enter($__internal_274c73bc11c8a10e6b1ae9176367522bb0450c5238a608abed3e262c32864e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_5952d8982ec55bfa552d6c03247276adc61931c659436ba1a107ae70d72022cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5952d8982ec55bfa552d6c03247276adc61931c659436ba1a107ae70d72022cd->enter($__internal_5952d8982ec55bfa552d6c03247276adc61931c659436ba1a107ae70d72022cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5952d8982ec55bfa552d6c03247276adc61931c659436ba1a107ae70d72022cd->leave($__internal_5952d8982ec55bfa552d6c03247276adc61931c659436ba1a107ae70d72022cd_prof);

        
        $__internal_274c73bc11c8a10e6b1ae9176367522bb0450c5238a608abed3e262c32864e41->leave($__internal_274c73bc11c8a10e6b1ae9176367522bb0450c5238a608abed3e262c32864e41_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b71f4fdde0587485aa92e222a184a37285d29c4114cf67eb96dfa435b06d86e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71f4fdde0587485aa92e222a184a37285d29c4114cf67eb96dfa435b06d86e1->enter($__internal_b71f4fdde0587485aa92e222a184a37285d29c4114cf67eb96dfa435b06d86e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d3f5e48ecc9d8a4976f1994876b878599db1aff3c7d3bee5005ac11683e726c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f5e48ecc9d8a4976f1994876b878599db1aff3c7d3bee5005ac11683e726c5->enter($__internal_d3f5e48ecc9d8a4976f1994876b878599db1aff3c7d3bee5005ac11683e726c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d3f5e48ecc9d8a4976f1994876b878599db1aff3c7d3bee5005ac11683e726c5->leave($__internal_d3f5e48ecc9d8a4976f1994876b878599db1aff3c7d3bee5005ac11683e726c5_prof);

        
        $__internal_b71f4fdde0587485aa92e222a184a37285d29c4114cf67eb96dfa435b06d86e1->leave($__internal_b71f4fdde0587485aa92e222a184a37285d29c4114cf67eb96dfa435b06d86e1_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ef8fc5e4c9948748010f86d35f190bbd66811cddac1eb7344e43bf26339f5494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8fc5e4c9948748010f86d35f190bbd66811cddac1eb7344e43bf26339f5494->enter($__internal_ef8fc5e4c9948748010f86d35f190bbd66811cddac1eb7344e43bf26339f5494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b3cf7b7e7b12dec5a05e9ef8295dfd87cb1dd68dfe221c0093160d0b2014d1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3cf7b7e7b12dec5a05e9ef8295dfd87cb1dd68dfe221c0093160d0b2014d1c1->enter($__internal_b3cf7b7e7b12dec5a05e9ef8295dfd87cb1dd68dfe221c0093160d0b2014d1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_b3cf7b7e7b12dec5a05e9ef8295dfd87cb1dd68dfe221c0093160d0b2014d1c1->leave($__internal_b3cf7b7e7b12dec5a05e9ef8295dfd87cb1dd68dfe221c0093160d0b2014d1c1_prof);

        
        $__internal_ef8fc5e4c9948748010f86d35f190bbd66811cddac1eb7344e43bf26339f5494->leave($__internal_ef8fc5e4c9948748010f86d35f190bbd66811cddac1eb7344e43bf26339f5494_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8b73cc95f8629f1c795f403660a64ddcae00485b0c431a4824eafb06088caf84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b73cc95f8629f1c795f403660a64ddcae00485b0c431a4824eafb06088caf84->enter($__internal_8b73cc95f8629f1c795f403660a64ddcae00485b0c431a4824eafb06088caf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6005f20e794613b72fc9c8612572464311193848544e07d380c5776baeac7f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6005f20e794613b72fc9c8612572464311193848544e07d380c5776baeac7f63->enter($__internal_6005f20e794613b72fc9c8612572464311193848544e07d380c5776baeac7f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 348
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 351
        echo "</div>";
        
        $__internal_6005f20e794613b72fc9c8612572464311193848544e07d380c5776baeac7f63->leave($__internal_6005f20e794613b72fc9c8612572464311193848544e07d380c5776baeac7f63_prof);

        
        $__internal_8b73cc95f8629f1c795f403660a64ddcae00485b0c431a4824eafb06088caf84->leave($__internal_8b73cc95f8629f1c795f403660a64ddcae00485b0c431a4824eafb06088caf84_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_547c84885cc4b07c303d5cd8568115ec88ec85715cbcd68f78b38e3cd4d41f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547c84885cc4b07c303d5cd8568115ec88ec85715cbcd68f78b38e3cd4d41f51->enter($__internal_547c84885cc4b07c303d5cd8568115ec88ec85715cbcd68f78b38e3cd4d41f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b9802d854c890ebdc74e2918e743f581a3d816eefc536f3b9564c0908f07053f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9802d854c890ebdc74e2918e743f581a3d816eefc536f3b9564c0908f07053f->enter($__internal_b9802d854c890ebdc74e2918e743f581a3d816eefc536f3b9564c0908f07053f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 357
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
        
        $__internal_b9802d854c890ebdc74e2918e743f581a3d816eefc536f3b9564c0908f07053f->leave($__internal_b9802d854c890ebdc74e2918e743f581a3d816eefc536f3b9564c0908f07053f_prof);

        
        $__internal_547c84885cc4b07c303d5cd8568115ec88ec85715cbcd68f78b38e3cd4d41f51->leave($__internal_547c84885cc4b07c303d5cd8568115ec88ec85715cbcd68f78b38e3cd4d41f51_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d5d9423326bfeb86010cbf2baf55e1539452eb907bc3513df9a5102b7f06a203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d9423326bfeb86010cbf2baf55e1539452eb907bc3513df9a5102b7f06a203->enter($__internal_d5d9423326bfeb86010cbf2baf55e1539452eb907bc3513df9a5102b7f06a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_da63418f5b0393252826664fe7fd2711df1761c413b2c325d1112d9998640f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da63418f5b0393252826664fe7fd2711df1761c413b2c325d1112d9998640f61->enter($__internal_da63418f5b0393252826664fe7fd2711df1761c413b2c325d1112d9998640f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 376
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_da63418f5b0393252826664fe7fd2711df1761c413b2c325d1112d9998640f61->leave($__internal_da63418f5b0393252826664fe7fd2711df1761c413b2c325d1112d9998640f61_prof);

        
        $__internal_d5d9423326bfeb86010cbf2baf55e1539452eb907bc3513df9a5102b7f06a203->leave($__internal_d5d9423326bfeb86010cbf2baf55e1539452eb907bc3513df9a5102b7f06a203_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_5cc8494248be3198086dd004a1a5b1a9fd14074f663ed7fce43952d15842daa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc8494248be3198086dd004a1a5b1a9fd14074f663ed7fce43952d15842daa2->enter($__internal_5cc8494248be3198086dd004a1a5b1a9fd14074f663ed7fce43952d15842daa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_42c41c9db19721cff488213d53961fb8ea35908966f6960b05cff4f0ab34288f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c41c9db19721cff488213d53961fb8ea35908966f6960b05cff4f0ab34288f->enter($__internal_42c41c9db19721cff488213d53961fb8ea35908966f6960b05cff4f0ab34288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_42c41c9db19721cff488213d53961fb8ea35908966f6960b05cff4f0ab34288f->leave($__internal_42c41c9db19721cff488213d53961fb8ea35908966f6960b05cff4f0ab34288f_prof);

        
        $__internal_5cc8494248be3198086dd004a1a5b1a9fd14074f663ed7fce43952d15842daa2->leave($__internal_5cc8494248be3198086dd004a1a5b1a9fd14074f663ed7fce43952d15842daa2_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_3e09b39183d4e588ad8b263df957d0764c0bb4fabc58b503fdb9f97a02932de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e09b39183d4e588ad8b263df957d0764c0bb4fabc58b503fdb9f97a02932de7->enter($__internal_3e09b39183d4e588ad8b263df957d0764c0bb4fabc58b503fdb9f97a02932de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_83803d8e33097ae30d813903d6d410b7366dd77aff1f7a131a6a2eb70b7b7d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83803d8e33097ae30d813903d6d410b7366dd77aff1f7a131a6a2eb70b7b7d9a->enter($__internal_83803d8e33097ae30d813903d6d410b7366dd77aff1f7a131a6a2eb70b7b7d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_83803d8e33097ae30d813903d6d410b7366dd77aff1f7a131a6a2eb70b7b7d9a->leave($__internal_83803d8e33097ae30d813903d6d410b7366dd77aff1f7a131a6a2eb70b7b7d9a_prof);

        
        $__internal_3e09b39183d4e588ad8b263df957d0764c0bb4fabc58b503fdb9f97a02932de7->leave($__internal_3e09b39183d4e588ad8b263df957d0764c0bb4fabc58b503fdb9f97a02932de7_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_675503df47631de269352b878ed0c0e0c1a1a991a0e0b93d1051fefecfe974b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675503df47631de269352b878ed0c0e0c1a1a991a0e0b93d1051fefecfe974b1->enter($__internal_675503df47631de269352b878ed0c0e0c1a1a991a0e0b93d1051fefecfe974b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_aeebbb2c59604f666834bca2913c509e966ef7141dbbec35134f16a4c9598a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeebbb2c59604f666834bca2913c509e966ef7141dbbec35134f16a4c9598a80->enter($__internal_aeebbb2c59604f666834bca2913c509e966ef7141dbbec35134f16a4c9598a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_aeebbb2c59604f666834bca2913c509e966ef7141dbbec35134f16a4c9598a80->leave($__internal_aeebbb2c59604f666834bca2913c509e966ef7141dbbec35134f16a4c9598a80_prof);

        
        $__internal_675503df47631de269352b878ed0c0e0c1a1a991a0e0b93d1051fefecfe974b1->leave($__internal_675503df47631de269352b878ed0c0e0c1a1a991a0e0b93d1051fefecfe974b1_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_b39638beeb0129c92da6d109a04032af3fd8fe19a833188975e220c4f07270ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39638beeb0129c92da6d109a04032af3fd8fe19a833188975e220c4f07270ad->enter($__internal_b39638beeb0129c92da6d109a04032af3fd8fe19a833188975e220c4f07270ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_56873d5c0e9697a4299cd41ab14626c8f347cb9d8421bf2485cd56bb4e8582f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56873d5c0e9697a4299cd41ab14626c8f347cb9d8421bf2485cd56bb4e8582f3->enter($__internal_56873d5c0e9697a4299cd41ab14626c8f347cb9d8421bf2485cd56bb4e8582f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_56873d5c0e9697a4299cd41ab14626c8f347cb9d8421bf2485cd56bb4e8582f3->leave($__internal_56873d5c0e9697a4299cd41ab14626c8f347cb9d8421bf2485cd56bb4e8582f3_prof);

        
        $__internal_b39638beeb0129c92da6d109a04032af3fd8fe19a833188975e220c4f07270ad->leave($__internal_b39638beeb0129c92da6d109a04032af3fd8fe19a833188975e220c4f07270ad_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_93b7ab53d0d79977d02a7e5fff88617a6491927361f651f51024ce1ae75a2c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b7ab53d0d79977d02a7e5fff88617a6491927361f651f51024ce1ae75a2c47->enter($__internal_93b7ab53d0d79977d02a7e5fff88617a6491927361f651f51024ce1ae75a2c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_aa949c5f086c3168ca105de639deb643b978628683ac3db30fc59daac1174efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa949c5f086c3168ca105de639deb643b978628683ac3db30fc59daac1174efe->enter($__internal_aa949c5f086c3168ca105de639deb643b978628683ac3db30fc59daac1174efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_aa949c5f086c3168ca105de639deb643b978628683ac3db30fc59daac1174efe->leave($__internal_aa949c5f086c3168ca105de639deb643b978628683ac3db30fc59daac1174efe_prof);

        
        $__internal_93b7ab53d0d79977d02a7e5fff88617a6491927361f651f51024ce1ae75a2c47->leave($__internal_93b7ab53d0d79977d02a7e5fff88617a6491927361f651f51024ce1ae75a2c47_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_d220f64f473cfc2029a0622c9aebfef3da4d54ca00146907c61d8280e47a92b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d220f64f473cfc2029a0622c9aebfef3da4d54ca00146907c61d8280e47a92b0->enter($__internal_d220f64f473cfc2029a0622c9aebfef3da4d54ca00146907c61d8280e47a92b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_eb816dd5b3eab495682dd7b8dbafd62b58a58aead189c7b737d0252deb98ea6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb816dd5b3eab495682dd7b8dbafd62b58a58aead189c7b737d0252deb98ea6b->enter($__internal_eb816dd5b3eab495682dd7b8dbafd62b58a58aead189c7b737d0252deb98ea6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_eb816dd5b3eab495682dd7b8dbafd62b58a58aead189c7b737d0252deb98ea6b->leave($__internal_eb816dd5b3eab495682dd7b8dbafd62b58a58aead189c7b737d0252deb98ea6b_prof);

        
        $__internal_d220f64f473cfc2029a0622c9aebfef3da4d54ca00146907c61d8280e47a92b0->leave($__internal_d220f64f473cfc2029a0622c9aebfef3da4d54ca00146907c61d8280e47a92b0_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_3662e7a24df124f747901775d5044ea0bb00f75078d6b0407d6762b900a7259f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3662e7a24df124f747901775d5044ea0bb00f75078d6b0407d6762b900a7259f->enter($__internal_3662e7a24df124f747901775d5044ea0bb00f75078d6b0407d6762b900a7259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_d83032a9016c864ba36c5c1e298938e5b56ad44e87017aa642d325d1fa48d096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83032a9016c864ba36c5c1e298938e5b56ad44e87017aa642d325d1fa48d096->enter($__internal_d83032a9016c864ba36c5c1e298938e5b56ad44e87017aa642d325d1fa48d096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 461
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 470
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 471
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 475
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 481
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 482
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 483
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 484
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 485
        echo "
";
        
        $__internal_d83032a9016c864ba36c5c1e298938e5b56ad44e87017aa642d325d1fa48d096->leave($__internal_d83032a9016c864ba36c5c1e298938e5b56ad44e87017aa642d325d1fa48d096_prof);

        
        $__internal_3662e7a24df124f747901775d5044ea0bb00f75078d6b0407d6762b900a7259f->leave($__internal_3662e7a24df124f747901775d5044ea0bb00f75078d6b0407d6762b900a7259f_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_33b34a50e204972b8b411da4ab265ba8c01fc220182987b7a5c7792e16144d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b34a50e204972b8b411da4ab265ba8c01fc220182987b7a5c7792e16144d08->enter($__internal_33b34a50e204972b8b411da4ab265ba8c01fc220182987b7a5c7792e16144d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_347b2ee8fb115ca820a822c0f756152b69563642b7f70ed9439010aa4d341533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347b2ee8fb115ca820a822c0f756152b69563642b7f70ed9439010aa4d341533->enter($__internal_347b2ee8fb115ca820a822c0f756152b69563642b7f70ed9439010aa4d341533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 490
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        if ((twig_length_filter($this->env, (isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : $this->getContext($context, "easyadmin_form_tabs"))) > 0)) {
            // line 493
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : $this->getContext($context, "easyadmin_form_tabs")));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 497
                echo "                            <li class=\"";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 498
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 499
                if ((($this->getAttribute($context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 500
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 502
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "label", array(), "array"), "html", null, true);
                echo "
                                    ";
                // line 503
                if (($this->getAttribute($context["tab_config"], "errors", array()) > 0)) {
                    // line 504
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("form.tab.error_badge_title", $this->getAttribute($context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 505
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 508
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : $this->getContext($context, "easyadmin_form_tabs")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 514
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 516
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 524
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 526
        echo "    </div>
";
        
        $__internal_347b2ee8fb115ca820a822c0f756152b69563642b7f70ed9439010aa4d341533->leave($__internal_347b2ee8fb115ca820a822c0f756152b69563642b7f70ed9439010aa4d341533_prof);

        
        $__internal_33b34a50e204972b8b411da4ab265ba8c01fc220182987b7a5c7792e16144d08->leave($__internal_33b34a50e204972b8b411da4ab265ba8c01fc220182987b7a5c7792e16144d08_prof);

    }

    // line 529
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        $__internal_ef1f8bf12e401975fe82ef74e0ed6dc4ce2087e8b188dbd0892b86ff55081387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1f8bf12e401975fe82ef74e0ed6dc4ce2087e8b188dbd0892b86ff55081387->enter($__internal_ef1f8bf12e401975fe82ef74e0ed6dc4ce2087e8b188dbd0892b86ff55081387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        $__internal_b46a7fd80fc92b4d7b5e399ddac08a010af8c6c0e5887979fc8362fcd39db242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46a7fd80fc92b4d7b5e399ddac08a010af8c6c0e5887979fc8362fcd39db242->enter($__internal_b46a7fd80fc92b4d7b5e399ddac08a010af8c6c0e5887979fc8362fcd39db242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 530
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !$this->getAttribute($context["group_config"], "form_tab", array()) || ($this->getAttribute($context["group_config"], "form_tab", array()) == (isset($context["tab_name"]) ? $context["tab_name"] : $this->getContext($context, "tab_name"))))) {
                // line 531
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 533
                if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                    // line 534
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 536
                    if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                        // line 537
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 539
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
                    echo "
                        </h3>
                    </div>
                ";
                }
                // line 543
                echo "
                <div class=\"box-body\">
                    ";
                // line 545
                if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                    // line 546
                    echo "                        <p class=\"help-block\">";
                    echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 548
                echo "
                    <div class=\"row\">
                        ";
                // line 550
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 551
                        echo "                            ";
                        if (( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) ? $context["tab_name"] : $this->getContext($context, "tab_name"))))) {
                            // line 552
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 553
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 556
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 557
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 562
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) ? $context["tab_name"] : $this->getContext($context, "tab_name")))))) {
                    // line 563
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 564
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b46a7fd80fc92b4d7b5e399ddac08a010af8c6c0e5887979fc8362fcd39db242->leave($__internal_b46a7fd80fc92b4d7b5e399ddac08a010af8c6c0e5887979fc8362fcd39db242_prof);

        
        $__internal_ef1f8bf12e401975fe82ef74e0ed6dc4ce2087e8b188dbd0892b86ff55081387->leave($__internal_ef1f8bf12e401975fe82ef74e0ed6dc4ce2087e8b188dbd0892b86ff55081387_prof);

    }

    // line 571
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_b0f44574355d3cfd1c34f0c3411e3d8faeb8760ed046999a07c110e03b55858b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f44574355d3cfd1c34f0c3411e3d8faeb8760ed046999a07c110e03b55858b->enter($__internal_b0f44574355d3cfd1c34f0c3411e3d8faeb8760ed046999a07c110e03b55858b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_336dde74b354cf6880d948957e4f5a67783cd0e417501c1f4c46031b73d1ef8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336dde74b354cf6880d948957e4f5a67783cd0e417501c1f4c46031b73d1ef8d->enter($__internal_336dde74b354cf6880d948957e4f5a67783cd0e417501c1f4c46031b73d1ef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 572
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 573
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 576
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 579
        echo "
";
        
        $__internal_336dde74b354cf6880d948957e4f5a67783cd0e417501c1f4c46031b73d1ef8d->leave($__internal_336dde74b354cf6880d948957e4f5a67783cd0e417501c1f4c46031b73d1ef8d_prof);

        
        $__internal_b0f44574355d3cfd1c34f0c3411e3d8faeb8760ed046999a07c110e03b55858b->leave($__internal_b0f44574355d3cfd1c34f0c3411e3d8faeb8760ed046999a07c110e03b55858b_prof);

    }

    // line 582
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_820b6b181cc346427cdcc472a4b9b6f4335b4c4af16ad8b265b0938b9f92790a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820b6b181cc346427cdcc472a4b9b6f4335b4c4af16ad8b265b0938b9f92790a->enter($__internal_820b6b181cc346427cdcc472a4b9b6f4335b4c4af16ad8b265b0938b9f92790a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_f5039d397d7e214b39486eb01c4e840b7ed1372c19656000ed18d9bf8aebaf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5039d397d7e214b39486eb01c4e840b7ed1372c19656000ed18d9bf8aebaf95->enter($__internal_f5039d397d7e214b39486eb01c4e840b7ed1372c19656000ed18d9bf8aebaf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 583
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 584
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f5039d397d7e214b39486eb01c4e840b7ed1372c19656000ed18d9bf8aebaf95->leave($__internal_f5039d397d7e214b39486eb01c4e840b7ed1372c19656000ed18d9bf8aebaf95_prof);

        
        $__internal_820b6b181cc346427cdcc472a4b9b6f4335b4c4af16ad8b265b0938b9f92790a->leave($__internal_820b6b181cc346427cdcc472a4b9b6f4335b4c4af16ad8b265b0938b9f92790a_prof);

    }

    // line 588
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_5cb4c47361cf24e390977ca505b028645f3b38959677ddd74a807d37afd90c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb4c47361cf24e390977ca505b028645f3b38959677ddd74a807d37afd90c8d->enter($__internal_5cb4c47361cf24e390977ca505b028645f3b38959677ddd74a807d37afd90c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_23d3b1d77fd350866bd88a6568c2e25e42a458fc6f227f12ae7a22a9f7b73d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d3b1d77fd350866bd88a6568c2e25e42a458fc6f227f12ae7a22a9f7b73d11->enter($__internal_23d3b1d77fd350866bd88a6568c2e25e42a458fc6f227f12ae7a22a9f7b73d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 589
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_23d3b1d77fd350866bd88a6568c2e25e42a458fc6f227f12ae7a22a9f7b73d11->leave($__internal_23d3b1d77fd350866bd88a6568c2e25e42a458fc6f227f12ae7a22a9f7b73d11_prof);

        
        $__internal_5cb4c47361cf24e390977ca505b028645f3b38959677ddd74a807d37afd90c8d->leave($__internal_5cb4c47361cf24e390977ca505b028645f3b38959677ddd74a807d37afd90c8d_prof);

    }

    // line 595
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_453fff634dad54446257daab72dc618b123aba779250e2047dbfcd3c562d4ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453fff634dad54446257daab72dc618b123aba779250e2047dbfcd3c562d4ec6->enter($__internal_453fff634dad54446257daab72dc618b123aba779250e2047dbfcd3c562d4ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_db16a2cd3ffe17408a28aa8d429a3a86b4b1eab925e56bf5e7b159c3b138a557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db16a2cd3ffe17408a28aa8d429a3a86b4b1eab925e56bf5e7b159c3b138a557->enter($__internal_db16a2cd3ffe17408a28aa8d429a3a86b4b1eab925e56bf5e7b159c3b138a557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 596
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 597
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 598
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 599
            echo "            <h2>
                ";
            // line 600
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 601
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 604
        echo "
        ";
        // line 605
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 606
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 608
        echo "    </div>
";
        
        $__internal_db16a2cd3ffe17408a28aa8d429a3a86b4b1eab925e56bf5e7b159c3b138a557->leave($__internal_db16a2cd3ffe17408a28aa8d429a3a86b4b1eab925e56bf5e7b159c3b138a557_prof);

        
        $__internal_453fff634dad54446257daab72dc618b123aba779250e2047dbfcd3c562d4ec6->leave($__internal_453fff634dad54446257daab72dc618b123aba779250e2047dbfcd3c562d4ec6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2111 => 608,  2105 => 606,  2103 => 605,  2100 => 604,  2093 => 601,  2087 => 600,  2084 => 599,  2082 => 598,  2077 => 597,  2074 => 596,  2065 => 595,  2052 => 589,  2043 => 588,  2033 => 584,  2030 => 583,  2021 => 582,  2010 => 579,  2008 => 576,  2007 => 573,  2005 => 572,  1996 => 571,  1982 => 567,  1972 => 564,  1967 => 563,  1961 => 562,  1951 => 557,  1944 => 556,  1938 => 553,  1933 => 552,  1930 => 551,  1925 => 550,  1921 => 548,  1915 => 546,  1913 => 545,  1909 => 543,  1901 => 539,  1895 => 537,  1893 => 536,  1889 => 534,  1887 => 533,  1881 => 531,  1874 => 530,  1865 => 529,  1854 => 526,  1848 => 524,  1842 => 520,  1824 => 516,  1814 => 514,  1797 => 513,  1793 => 511,  1785 => 508,  1779 => 505,  1774 => 504,  1772 => 503,  1767 => 502,  1761 => 500,  1759 => 499,  1753 => 498,  1746 => 497,  1742 => 496,  1737 => 493,  1735 => 492,  1732 => 491,  1729 => 490,  1720 => 489,  1709 => 485,  1707 => 484,  1706 => 483,  1705 => 482,  1704 => 481,  1703 => 480,  1702 => 479,  1699 => 478,  1697 => 477,  1694 => 476,  1692 => 475,  1691 => 473,  1688 => 472,  1686 => 471,  1685 => 470,  1684 => 469,  1678 => 466,  1675 => 465,  1672 => 463,  1669 => 462,  1666 => 461,  1657 => 460,  1643 => 454,  1641 => 453,  1636 => 449,  1634 => 448,  1625 => 447,  1613 => 443,  1607 => 440,  1603 => 439,  1597 => 436,  1593 => 435,  1590 => 434,  1587 => 433,  1585 => 432,  1582 => 431,  1576 => 429,  1574 => 428,  1570 => 427,  1567 => 426,  1565 => 425,  1556 => 424,  1543 => 421,  1540 => 420,  1531 => 419,  1515 => 412,  1510 => 411,  1504 => 408,  1501 => 407,  1499 => 406,  1495 => 404,  1487 => 402,  1484 => 401,  1482 => 400,  1479 => 399,  1477 => 398,  1468 => 397,  1455 => 394,  1452 => 393,  1443 => 392,  1430 => 388,  1427 => 387,  1418 => 386,  1408 => 383,  1405 => 382,  1402 => 381,  1399 => 380,  1396 => 379,  1390 => 377,  1387 => 376,  1378 => 373,  1366 => 369,  1362 => 367,  1353 => 365,  1349 => 364,  1346 => 363,  1340 => 361,  1338 => 360,  1334 => 359,  1331 => 358,  1328 => 357,  1325 => 356,  1316 => 355,  1306 => 351,  1304 => 350,  1302 => 349,  1294 => 348,  1285 => 347,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1233 => 335,  1223 => 332,  1221 => 331,  1212 => 330,  1202 => 327,  1200 => 326,  1191 => 325,  1181 => 322,  1179 => 321,  1170 => 320,  1160 => 317,  1158 => 316,  1152 => 315,  1143 => 314,  1128 => 308,  1123 => 306,  1119 => 304,  1105 => 295,  1099 => 294,  1088 => 286,  1083 => 283,  1080 => 282,  1078 => 281,  1072 => 279,  1063 => 278,  1053 => 275,  1047 => 273,  1045 => 272,  1043 => 270,  1036 => 265,  1030 => 264,  1026 => 262,  1024 => 261,  1022 => 259,  1020 => 258,  1012 => 257,  1010 => 256,  1001 => 255,  989 => 249,  987 => 248,  985 => 247,  970 => 246,  967 => 245,  964 => 244,  961 => 243,  958 => 242,  955 => 241,  952 => 240,  949 => 239,  946 => 238,  943 => 237,  940 => 236,  938 => 235,  929 => 234,  919 => 231,  910 => 230,  900 => 227,  891 => 226,  881 => 223,  879 => 222,  870 => 220,  860 => 217,  858 => 216,  849 => 215,  838 => 209,  836 => 208,  834 => 207,  831 => 205,  829 => 204,  827 => 203,  818 => 202,  807 => 198,  805 => 197,  803 => 196,  800 => 194,  798 => 193,  796 => 192,  787 => 191,  776 => 187,  770 => 184,  769 => 183,  768 => 182,  764 => 181,  760 => 180,  757 => 178,  751 => 175,  750 => 174,  749 => 173,  745 => 172,  743 => 171,  741 => 170,  732 => 169,  717 => 163,  712 => 161,  708 => 159,  695 => 149,  690 => 146,  687 => 145,  685 => 144,  683 => 143,  681 => 142,  672 => 141,  660 => 136,  657 => 135,  649 => 134,  644 => 132,  642 => 131,  640 => 130,  637 => 128,  635 => 127,  626 => 126,  614 => 121,  612 => 120,  610 => 118,  609 => 117,  608 => 116,  607 => 115,  602 => 113,  600 => 112,  598 => 111,  595 => 109,  593 => 108,  584 => 107,  573 => 103,  571 => 102,  569 => 101,  567 => 100,  565 => 99,  561 => 98,  559 => 97,  556 => 95,  554 => 94,  545 => 93,  534 => 89,  532 => 88,  530 => 87,  521 => 86,  511 => 83,  505 => 81,  503 => 80,  501 => 79,  495 => 77,  492 => 76,  490 => 75,  487 => 74,  478 => 73,  468 => 70,  466 => 69,  457 => 68,  447 => 65,  445 => 64,  436 => 63,  426 => 60,  423 => 58,  421 => 57,  412 => 56,  397 => 50,  392 => 48,  388 => 46,  375 => 36,  370 => 33,  367 => 32,  365 => 31,  363 => 29,  354 => 28,  342 => 23,  340 => 21,  334 => 18,  332 => 17,  329 => 16,  326 => 15,  324 => 13,  323 => 12,  322 => 11,  321 => 9,  320 => 8,  319 => 7,  317 => 5,  315 => 4,  306 => 3,  296 => 595,  293 => 593,  291 => 588,  288 => 586,  286 => 582,  283 => 581,  281 => 571,  278 => 569,  276 => 529,  273 => 528,  271 => 489,  268 => 487,  266 => 460,  263 => 459,  261 => 447,  258 => 446,  256 => 424,  253 => 423,  251 => 419,  248 => 418,  246 => 397,  243 => 396,  241 => 392,  238 => 391,  236 => 386,  234 => 373,  232 => 355,  229 => 353,  227 => 347,  224 => 346,  222 => 340,  219 => 339,  217 => 335,  214 => 334,  212 => 330,  209 => 329,  207 => 325,  204 => 324,  202 => 320,  199 => 319,  197 => 314,  194 => 313,  192 => 278,  189 => 277,  187 => 255,  184 => 254,  181 => 252,  179 => 234,  176 => 233,  174 => 230,  171 => 229,  169 => 226,  166 => 225,  164 => 220,  161 => 219,  159 => 215,  156 => 214,  153 => 212,  151 => 202,  148 => 201,  146 => 191,  143 => 190,  141 => 169,  138 => 168,  136 => 141,  133 => 140,  131 => 126,  128 => 125,  126 => 107,  123 => 106,  121 => 93,  118 => 92,  116 => 86,  113 => 85,  111 => 73,  108 => 72,  106 => 68,  103 => 67,  101 => 63,  98 => 62,  96 => 56,  93 => 55,  91 => 28,  88 => 27,  85 => 25,  83 => 3,  80 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}
    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {{- block('item_actions') -}}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% if easyadmin_form_tabs | length > 0 %}
            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <li class=\"{% if tab_config.active %}active{% endif %}\">
                                <a href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                    {% if tab_config.icon|default(false) %}
                                        <i class=\"fa fa-{{ tab_config.icon }}\"></i>
                                    {% endif %}
                                    {{ tab_config['label'] }}
                                    {% if tab_config.errors > 0 %}
                                        <span class=\"label label-danger\" title=\"{{ 'form.tab.error_badge_title'|transchoice(tab_config.errors, {}, 'EasyAdminBundle') }}\">
                                            {{ tab_config.errors }}
                                        </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %}\">
                                <div class=\"row\">
                                    {{ block('easyadmin_widget_groups') }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {{ block('easyadmin_widget_groups') }}
        {% endif %}
    </div>
{% endblock easyadmin_widget %}

{% block easyadmin_widget_groups %}
    {% for group_name, group_config in easyadmin_form_groups if not group_config.form_tab or group_config.form_tab == tab_name %}
        <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
            <div class=\"box box-default\">
                {% if group_config.label|default(false) or group_config.icon|default(false) %}
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            {% if group_config.icon|default(false) %}
                                <i class=\"fa fa-{{ group_config.icon }}\"></i>
                            {% endif %}
                            {{ group_config.label|trans(domain = _translation_domain)|raw }}
                        </h3>
                    </div>
                {% endif %}

                <div class=\"box-body\">
                    {% if group_config.help|default(false) %}
                        <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                    {% endif %}

                    <div class=\"row\">
                        {% for field in form if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                            {% if not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% for field in form if 'hidden' not in field.vars.block_prefixes and (not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name) %}
            <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                {{ form_row(field) }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock easyadmin_widget_groups %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "C:\\projet-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\form\\bootstrap_3_layout.html.twig");
    }
}
