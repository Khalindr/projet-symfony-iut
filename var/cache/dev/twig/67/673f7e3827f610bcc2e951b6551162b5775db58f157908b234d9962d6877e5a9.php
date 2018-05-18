<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_9297df845270451c0f2bbb3c147be0d354251f94a4cb9c1f063ca19966eb0172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51044917f0799a11b9f80795bac1d3bcdd0ab3360dbb3b9aa43241f7b0048744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51044917f0799a11b9f80795bac1d3bcdd0ab3360dbb3b9aa43241f7b0048744->enter($__internal_51044917f0799a11b9f80795bac1d3bcdd0ab3360dbb3b9aa43241f7b0048744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_d99f4f5cd31b508c03dd63bcd5d5b27797a06a3aaf58b09f30dc25e52a554055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99f4f5cd31b508c03dd63bcd5d5b27797a06a3aaf58b09f30dc25e52a554055->enter($__internal_d99f4f5cd31b508c03dd63bcd5d5b27797a06a3aaf58b09f30dc25e52a554055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_51044917f0799a11b9f80795bac1d3bcdd0ab3360dbb3b9aa43241f7b0048744->leave($__internal_51044917f0799a11b9f80795bac1d3bcdd0ab3360dbb3b9aa43241f7b0048744_prof);

        
        $__internal_d99f4f5cd31b508c03dd63bcd5d5b27797a06a3aaf58b09f30dc25e52a554055->leave($__internal_d99f4f5cd31b508c03dd63bcd5d5b27797a06a3aaf58b09f30dc25e52a554055_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6f919b4d55e11e7669403249d46c6d0f0db0971399e7fcbfad399176208f2624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f919b4d55e11e7669403249d46c6d0f0db0971399e7fcbfad399176208f2624->enter($__internal_6f919b4d55e11e7669403249d46c6d0f0db0971399e7fcbfad399176208f2624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_411cb8dde1aa8d1db3a7ee7b541cf883061a79bcfa5834a8c65a5873e085032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411cb8dde1aa8d1db3a7ee7b541cf883061a79bcfa5834a8c65a5873e085032f->enter($__internal_411cb8dde1aa8d1db3a7ee7b541cf883061a79bcfa5834a8c65a5873e085032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_411cb8dde1aa8d1db3a7ee7b541cf883061a79bcfa5834a8c65a5873e085032f->leave($__internal_411cb8dde1aa8d1db3a7ee7b541cf883061a79bcfa5834a8c65a5873e085032f_prof);

        
        $__internal_6f919b4d55e11e7669403249d46c6d0f0db0971399e7fcbfad399176208f2624->leave($__internal_6f919b4d55e11e7669403249d46c6d0f0db0971399e7fcbfad399176208f2624_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_eb19cd4a5c665d0d8c148e06b3dbc49aac2f16c54693bab37848223949d870c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb19cd4a5c665d0d8c148e06b3dbc49aac2f16c54693bab37848223949d870c2->enter($__internal_eb19cd4a5c665d0d8c148e06b3dbc49aac2f16c54693bab37848223949d870c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a2d482af5b7702cc9aa76dc5c62b3e51d8a058412465a4e51837be404c737307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d482af5b7702cc9aa76dc5c62b3e51d8a058412465a4e51837be404c737307->enter($__internal_a2d482af5b7702cc9aa76dc5c62b3e51d8a058412465a4e51837be404c737307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text") &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_a2d482af5b7702cc9aa76dc5c62b3e51d8a058412465a4e51837be404c737307->leave($__internal_a2d482af5b7702cc9aa76dc5c62b3e51d8a058412465a4e51837be404c737307_prof);

        
        $__internal_eb19cd4a5c665d0d8c148e06b3dbc49aac2f16c54693bab37848223949d870c2->leave($__internal_eb19cd4a5c665d0d8c148e06b3dbc49aac2f16c54693bab37848223949d870c2_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f42e5b40a4e6dc084b265cc49a38b8e0afa9848f0238a3f76d5e4753ea6d13d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42e5b40a4e6dc084b265cc49a38b8e0afa9848f0238a3f76d5e4753ea6d13d2->enter($__internal_f42e5b40a4e6dc084b265cc49a38b8e0afa9848f0238a3f76d5e4753ea6d13d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_cc3102d90a6331cd6f63a65182e351af5d2111a8bf8609b3ae52983b36bb3944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3102d90a6331cd6f63a65182e351af5d2111a8bf8609b3ae52983b36bb3944->enter($__internal_cc3102d90a6331cd6f63a65182e351af5d2111a8bf8609b3ae52983b36bb3944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text") &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_cc3102d90a6331cd6f63a65182e351af5d2111a8bf8609b3ae52983b36bb3944->leave($__internal_cc3102d90a6331cd6f63a65182e351af5d2111a8bf8609b3ae52983b36bb3944_prof);

        
        $__internal_f42e5b40a4e6dc084b265cc49a38b8e0afa9848f0238a3f76d5e4753ea6d13d2->leave($__internal_f42e5b40a4e6dc084b265cc49a38b8e0afa9848f0238a3f76d5e4753ea6d13d2_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_651f45621f5ccef6dfbf75bfaeb05e26da849ee523c75bacab52bdbb57132a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651f45621f5ccef6dfbf75bfaeb05e26da849ee523c75bacab52bdbb57132a40->enter($__internal_651f45621f5ccef6dfbf75bfaeb05e26da849ee523c75bacab52bdbb57132a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_90fc77e517662afeaaedaa1e2995e75428d1e4d8017d09764a3320f005ea5240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fc77e517662afeaaedaa1e2995e75428d1e4d8017d09764a3320f005ea5240->enter($__internal_90fc77e517662afeaaedaa1e2995e75428d1e4d8017d09764a3320f005ea5240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text") &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_90fc77e517662afeaaedaa1e2995e75428d1e4d8017d09764a3320f005ea5240->leave($__internal_90fc77e517662afeaaedaa1e2995e75428d1e4d8017d09764a3320f005ea5240_prof);

        
        $__internal_651f45621f5ccef6dfbf75bfaeb05e26da849ee523c75bacab52bdbb57132a40->leave($__internal_651f45621f5ccef6dfbf75bfaeb05e26da849ee523c75bacab52bdbb57132a40_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_45d15ec2f836d111ac0bacdb1387327b8b3cb560771f5654849f2861cbd44b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d15ec2f836d111ac0bacdb1387327b8b3cb560771f5654849f2861cbd44b59->enter($__internal_45d15ec2f836d111ac0bacdb1387327b8b3cb560771f5654849f2861cbd44b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_eaee7d12fa6fe31687b881e7a9021ca12ddf56fb8c9575b3fad031a74da289f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaee7d12fa6fe31687b881e7a9021ca12ddf56fb8c9575b3fad031a74da289f8->enter($__internal_eaee7d12fa6fe31687b881e7a9021ca12ddf56fb8c9575b3fad031a74da289f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text") &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_eaee7d12fa6fe31687b881e7a9021ca12ddf56fb8c9575b3fad031a74da289f8->leave($__internal_eaee7d12fa6fe31687b881e7a9021ca12ddf56fb8c9575b3fad031a74da289f8_prof);

        
        $__internal_45d15ec2f836d111ac0bacdb1387327b8b3cb560771f5654849f2861cbd44b59->leave($__internal_45d15ec2f836d111ac0bacdb1387327b8b3cb560771f5654849f2861cbd44b59_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_22a7d406d26b12c5bdc1022740a9803fdebcc4802b407bda797eef0aad05a00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a7d406d26b12c5bdc1022740a9803fdebcc4802b407bda797eef0aad05a00a->enter($__internal_22a7d406d26b12c5bdc1022740a9803fdebcc4802b407bda797eef0aad05a00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7a610b70c455182c5bccd8a3bd7e1db5614f8b93c90c231b4974e65e460296d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a610b70c455182c5bccd8a3bd7e1db5614f8b93c90c231b4974e65e460296d9->enter($__internal_7a610b70c455182c5bccd8a3bd7e1db5614f8b93c90c231b4974e65e460296d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7a610b70c455182c5bccd8a3bd7e1db5614f8b93c90c231b4974e65e460296d9->leave($__internal_7a610b70c455182c5bccd8a3bd7e1db5614f8b93c90c231b4974e65e460296d9_prof);

        
        $__internal_22a7d406d26b12c5bdc1022740a9803fdebcc4802b407bda797eef0aad05a00a->leave($__internal_22a7d406d26b12c5bdc1022740a9803fdebcc4802b407bda797eef0aad05a00a_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bd3aabb0f351ee81e6a556be9e0629b5101094b9e9fc2cc21f7a1ed1b74a8e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3aabb0f351ee81e6a556be9e0629b5101094b9e9fc2cc21f7a1ed1b74a8e90->enter($__internal_bd3aabb0f351ee81e6a556be9e0629b5101094b9e9fc2cc21f7a1ed1b74a8e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e23be4c11d9e0a6b072fc0476594c736a2cfd77421c5259e301ad5bda9411f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23be4c11d9e0a6b072fc0476594c736a2cfd77421c5259e301ad5bda9411f93->enter($__internal_e23be4c11d9e0a6b072fc0476594c736a2cfd77421c5259e301ad5bda9411f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e23be4c11d9e0a6b072fc0476594c736a2cfd77421c5259e301ad5bda9411f93->leave($__internal_e23be4c11d9e0a6b072fc0476594c736a2cfd77421c5259e301ad5bda9411f93_prof);

        
        $__internal_bd3aabb0f351ee81e6a556be9e0629b5101094b9e9fc2cc21f7a1ed1b74a8e90->leave($__internal_bd3aabb0f351ee81e6a556be9e0629b5101094b9e9fc2cc21f7a1ed1b74a8e90_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_8da3d823b97a650322f99b0b63d27fac6ca7766ac728c98618350d9d281b9623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da3d823b97a650322f99b0b63d27fac6ca7766ac728c98618350d9d281b9623->enter($__internal_8da3d823b97a650322f99b0b63d27fac6ca7766ac728c98618350d9d281b9623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_8035faeb03bdb430c50863c6aea13b08d6152ac02826c3d395f6525de06378b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8035faeb03bdb430c50863c6aea13b08d6152ac02826c3d395f6525de06378b3->enter($__internal_8035faeb03bdb430c50863c6aea13b08d6152ac02826c3d395f6525de06378b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_8035faeb03bdb430c50863c6aea13b08d6152ac02826c3d395f6525de06378b3->leave($__internal_8035faeb03bdb430c50863c6aea13b08d6152ac02826c3d395f6525de06378b3_prof);

        
        $__internal_8da3d823b97a650322f99b0b63d27fac6ca7766ac728c98618350d9d281b9623->leave($__internal_8da3d823b97a650322f99b0b63d27fac6ca7766ac728c98618350d9d281b9623_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b54431e01c376db8b690970320c424ad55ac3c80a1e66ac09cf27bc664f69cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54431e01c376db8b690970320c424ad55ac3c80a1e66ac09cf27bc664f69cdf->enter($__internal_b54431e01c376db8b690970320c424ad55ac3c80a1e66ac09cf27bc664f69cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1412f78810868212ad6c49aa8e35eace92ac456cb4cbd4306243d64d3762d9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1412f78810868212ad6c49aa8e35eace92ac456cb4cbd4306243d64d3762d9c0->enter($__internal_1412f78810868212ad6c49aa8e35eace92ac456cb4cbd4306243d64d3762d9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1412f78810868212ad6c49aa8e35eace92ac456cb4cbd4306243d64d3762d9c0->leave($__internal_1412f78810868212ad6c49aa8e35eace92ac456cb4cbd4306243d64d3762d9c0_prof);

        
        $__internal_b54431e01c376db8b690970320c424ad55ac3c80a1e66ac09cf27bc664f69cdf->leave($__internal_b54431e01c376db8b690970320c424ad55ac3c80a1e66ac09cf27bc664f69cdf_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_17b48ad69f13fb631fc80f10de9515c07b063d55c1d64294519b1dd948e71b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b48ad69f13fb631fc80f10de9515c07b063d55c1d64294519b1dd948e71b26->enter($__internal_17b48ad69f13fb631fc80f10de9515c07b063d55c1d64294519b1dd948e71b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_90992617b4b4876a1b3f667e85c020bae1bb343f2d42708eae57c9b733ebc599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90992617b4b4876a1b3f667e85c020bae1bb343f2d42708eae57c9b733ebc599->enter($__internal_90992617b4b4876a1b3f667e85c020bae1bb343f2d42708eae57c9b733ebc599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_90992617b4b4876a1b3f667e85c020bae1bb343f2d42708eae57c9b733ebc599->leave($__internal_90992617b4b4876a1b3f667e85c020bae1bb343f2d42708eae57c9b733ebc599_prof);

        
        $__internal_17b48ad69f13fb631fc80f10de9515c07b063d55c1d64294519b1dd948e71b26->leave($__internal_17b48ad69f13fb631fc80f10de9515c07b063d55c1d64294519b1dd948e71b26_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_48a4a3bb8649519b231a2922b0e4ed02da8d463e5705bd5f5cb73a034d2ee034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a4a3bb8649519b231a2922b0e4ed02da8d463e5705bd5f5cb73a034d2ee034->enter($__internal_48a4a3bb8649519b231a2922b0e4ed02da8d463e5705bd5f5cb73a034d2ee034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b0b039c8abdb3d4e4279e01b75a454eccc9e3832807cbf56c7a8c6b139f13757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b039c8abdb3d4e4279e01b75a454eccc9e3832807cbf56c7a8c6b139f13757->enter($__internal_b0b039c8abdb3d4e4279e01b75a454eccc9e3832807cbf56c7a8c6b139f13757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_b0b039c8abdb3d4e4279e01b75a454eccc9e3832807cbf56c7a8c6b139f13757->leave($__internal_b0b039c8abdb3d4e4279e01b75a454eccc9e3832807cbf56c7a8c6b139f13757_prof);

        
        $__internal_48a4a3bb8649519b231a2922b0e4ed02da8d463e5705bd5f5cb73a034d2ee034->leave($__internal_48a4a3bb8649519b231a2922b0e4ed02da8d463e5705bd5f5cb73a034d2ee034_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7848fb4ab5e6bc591638eacc91207d5d342999e05f97a163473302b97fe446db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7848fb4ab5e6bc591638eacc91207d5d342999e05f97a163473302b97fe446db->enter($__internal_7848fb4ab5e6bc591638eacc91207d5d342999e05f97a163473302b97fe446db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f64c3d8a133a2c7feee91be13b0cb7d6cfd37628979c4bbca9c86fd67d49a9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64c3d8a133a2c7feee91be13b0cb7d6cfd37628979c4bbca9c86fd67d49a9c4->enter($__internal_f64c3d8a133a2c7feee91be13b0cb7d6cfd37628979c4bbca9c86fd67d49a9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_f64c3d8a133a2c7feee91be13b0cb7d6cfd37628979c4bbca9c86fd67d49a9c4->leave($__internal_f64c3d8a133a2c7feee91be13b0cb7d6cfd37628979c4bbca9c86fd67d49a9c4_prof);

        
        $__internal_7848fb4ab5e6bc591638eacc91207d5d342999e05f97a163473302b97fe446db->leave($__internal_7848fb4ab5e6bc591638eacc91207d5d342999e05f97a163473302b97fe446db_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_296069a6238c0ddadd34a6b9922f4ca38e065b0d7780655e7110c8342d77d239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296069a6238c0ddadd34a6b9922f4ca38e065b0d7780655e7110c8342d77d239->enter($__internal_296069a6238c0ddadd34a6b9922f4ca38e065b0d7780655e7110c8342d77d239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_22248b7e1091acfefd2bff1ec3b650db5d0a3c7abbd3989a49c24932d1cf3a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22248b7e1091acfefd2bff1ec3b650db5d0a3c7abbd3989a49c24932d1cf3a87->enter($__internal_22248b7e1091acfefd2bff1ec3b650db5d0a3c7abbd3989a49c24932d1cf3a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_22248b7e1091acfefd2bff1ec3b650db5d0a3c7abbd3989a49c24932d1cf3a87->leave($__internal_22248b7e1091acfefd2bff1ec3b650db5d0a3c7abbd3989a49c24932d1cf3a87_prof);

        
        $__internal_296069a6238c0ddadd34a6b9922f4ca38e065b0d7780655e7110c8342d77d239->leave($__internal_296069a6238c0ddadd34a6b9922f4ca38e065b0d7780655e7110c8342d77d239_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_74aad47ac489460b6a0034921cf7e22ad705ec847a8e6e7f0d27f72837eecbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74aad47ac489460b6a0034921cf7e22ad705ec847a8e6e7f0d27f72837eecbc6->enter($__internal_74aad47ac489460b6a0034921cf7e22ad705ec847a8e6e7f0d27f72837eecbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3410dcb226332095e69575ffcd00cf99e4f0a4631c56b85ca7c47674adc9b0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3410dcb226332095e69575ffcd00cf99e4f0a4631c56b85ca7c47674adc9b0b2->enter($__internal_3410dcb226332095e69575ffcd00cf99e4f0a4631c56b85ca7c47674adc9b0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 147
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
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
            // line 154
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_3410dcb226332095e69575ffcd00cf99e4f0a4631c56b85ca7c47674adc9b0b2->leave($__internal_3410dcb226332095e69575ffcd00cf99e4f0a4631c56b85ca7c47674adc9b0b2_prof);

        
        $__internal_74aad47ac489460b6a0034921cf7e22ad705ec847a8e6e7f0d27f72837eecbc6->leave($__internal_74aad47ac489460b6a0034921cf7e22ad705ec847a8e6e7f0d27f72837eecbc6_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a49a3026bb1642618d195c25f8f8172b909af79f452e2e5a99f49938b751ee5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49a3026bb1642618d195c25f8f8172b909af79f452e2e5a99f49938b751ee5d->enter($__internal_a49a3026bb1642618d195c25f8f8172b909af79f452e2e5a99f49938b751ee5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_11bec2caf9f5a29d8d80c6969c400e9314b5718678102f115309340cb62ad7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bec2caf9f5a29d8d80c6969c400e9314b5718678102f115309340cb62ad7d8->enter($__internal_11bec2caf9f5a29d8d80c6969c400e9314b5718678102f115309340cb62ad7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_11bec2caf9f5a29d8d80c6969c400e9314b5718678102f115309340cb62ad7d8->leave($__internal_11bec2caf9f5a29d8d80c6969c400e9314b5718678102f115309340cb62ad7d8_prof);

        
        $__internal_a49a3026bb1642618d195c25f8f8172b909af79f452e2e5a99f49938b751ee5d->leave($__internal_a49a3026bb1642618d195c25f8f8172b909af79f452e2e5a99f49938b751ee5d_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_573633b2c37b096294ff0bb6ccc8b505b2999432eb9e3b7fab7302a5c965ffeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573633b2c37b096294ff0bb6ccc8b505b2999432eb9e3b7fab7302a5c965ffeb->enter($__internal_573633b2c37b096294ff0bb6ccc8b505b2999432eb9e3b7fab7302a5c965ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a93a169a952e967832d40f074e6697c46a0cab32965c38e1c69dd97c952bb057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93a169a952e967832d40f074e6697c46a0cab32965c38e1c69dd97c952bb057->enter($__internal_a93a169a952e967832d40f074e6697c46a0cab32965c38e1c69dd97c952bb057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_a93a169a952e967832d40f074e6697c46a0cab32965c38e1c69dd97c952bb057->leave($__internal_a93a169a952e967832d40f074e6697c46a0cab32965c38e1c69dd97c952bb057_prof);

        
        $__internal_573633b2c37b096294ff0bb6ccc8b505b2999432eb9e3b7fab7302a5c965ffeb->leave($__internal_573633b2c37b096294ff0bb6ccc8b505b2999432eb9e3b7fab7302a5c965ffeb_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form.parent %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\projet-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
