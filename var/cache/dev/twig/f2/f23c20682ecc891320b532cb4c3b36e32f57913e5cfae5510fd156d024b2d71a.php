<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_323654fc4f8ddaf397077fdcf3fcc7ec0bce9623fa80d660d8e16669865208ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f14854350f9955837a995a71c77c791f0003d44c13c76a230940e966828b417d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14854350f9955837a995a71c77c791f0003d44c13c76a230940e966828b417d->enter($__internal_f14854350f9955837a995a71c77c791f0003d44c13c76a230940e966828b417d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_9cf5e42a37621ec0646284c88f71a485983cda2fd5383c2e31183362e4caf1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf5e42a37621ec0646284c88f71a485983cda2fd5383c2e31183362e4caf1a7->enter($__internal_9cf5e42a37621ec0646284c88f71a485983cda2fd5383c2e31183362e4caf1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('date_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('time_widget', $context, $blocks);
        // line 78
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 116
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 140
        echo "
";
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('choice_label', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('radio_label', $context, $blocks);
        // line 156
        echo "
";
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('button_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('choice_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('date_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('time_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_f14854350f9955837a995a71c77c791f0003d44c13c76a230940e966828b417d->leave($__internal_f14854350f9955837a995a71c77c791f0003d44c13c76a230940e966828b417d_prof);

        
        $__internal_9cf5e42a37621ec0646284c88f71a485983cda2fd5383c2e31183362e4caf1a7->leave($__internal_9cf5e42a37621ec0646284c88f71a485983cda2fd5383c2e31183362e4caf1a7_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6eef0a8f5c346e28c63d98b5a105ed5c3218e1aad776fc2b531185d3d2735508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eef0a8f5c346e28c63d98b5a105ed5c3218e1aad776fc2b531185d3d2735508->enter($__internal_6eef0a8f5c346e28c63d98b5a105ed5c3218e1aad776fc2b531185d3d2735508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_31b9f32ec0846585ef9d72cf10b0f8cca2cf54b897c83ab34b230504496c50bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b9f32ec0846585ef9d72cf10b0f8cca2cf54b897c83ab34b230504496c50bb->enter($__internal_31b9f32ec0846585ef9d72cf10b0f8cca2cf54b897c83ab34b230504496c50bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_31b9f32ec0846585ef9d72cf10b0f8cca2cf54b897c83ab34b230504496c50bb->leave($__internal_31b9f32ec0846585ef9d72cf10b0f8cca2cf54b897c83ab34b230504496c50bb_prof);

        
        $__internal_6eef0a8f5c346e28c63d98b5a105ed5c3218e1aad776fc2b531185d3d2735508->leave($__internal_6eef0a8f5c346e28c63d98b5a105ed5c3218e1aad776fc2b531185d3d2735508_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a0dc17e358b707a8157d02af069d1b6def067d52ba0d02ffac1e22e752618b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0dc17e358b707a8157d02af069d1b6def067d52ba0d02ffac1e22e752618b96->enter($__internal_a0dc17e358b707a8157d02af069d1b6def067d52ba0d02ffac1e22e752618b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e458a9707df5c39f3ed917c53faae6c4e5ff9a71255b4d758d5f7d778b978f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e458a9707df5c39f3ed917c53faae6c4e5ff9a71255b4d758d5f7d778b978f0a->enter($__internal_e458a9707df5c39f3ed917c53faae6c4e5ff9a71255b4d758d5f7d778b978f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        echo "<div class=\"input-group";
        echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter((isset($context["group_class"]) ? $context["group_class"] : $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
        echo "\">";
        // line 12
        $context["append"] = (is_string($__internal_be9649d7188b37d8f31abc26b634091b23b5c32c7edd191e84889af10be9b407 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_c097f818c1cb2d0ce358912182c33dd6b8e2bbc113047fd4f1028d1dd41e91fb = "{{") && ('' === $__internal_c097f818c1cb2d0ce358912182c33dd6b8e2bbc113047fd4f1028d1dd41e91fb || 0 === strpos($__internal_be9649d7188b37d8f31abc26b634091b23b5c32c7edd191e84889af10be9b407, $__internal_c097f818c1cb2d0ce358912182c33dd6b8e2bbc113047fd4f1028d1dd41e91fb)));
        // line 13
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 14
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>";
        }
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 17
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 18
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>";
        }
        // line 20
        echo "</div>";
        
        $__internal_e458a9707df5c39f3ed917c53faae6c4e5ff9a71255b4d758d5f7d778b978f0a->leave($__internal_e458a9707df5c39f3ed917c53faae6c4e5ff9a71255b4d758d5f7d778b978f0a_prof);

        
        $__internal_a0dc17e358b707a8157d02af069d1b6def067d52ba0d02ffac1e22e752618b96->leave($__internal_a0dc17e358b707a8157d02af069d1b6def067d52ba0d02ffac1e22e752618b96_prof);

    }

    // line 23
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4b22253cc6c07769f8f796879aeec85f891622df4f079591712ceac451f86d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b22253cc6c07769f8f796879aeec85f891622df4f079591712ceac451f86d08->enter($__internal_4b22253cc6c07769f8f796879aeec85f891622df4f079591712ceac451f86d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ce8c5e5e5bae5f6b03100e3209bff938b07805b0d0c77832f7b3af061147af1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8c5e5e5bae5f6b03100e3209bff938b07805b0d0c77832f7b3af061147af1b->enter($__internal_ce8c5e5e5bae5f6b03100e3209bff938b07805b0d0c77832f7b3af061147af1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 24
        echo "<div class=\"input-group\">";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 26
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_ce8c5e5e5bae5f6b03100e3209bff938b07805b0d0c77832f7b3af061147af1b->leave($__internal_ce8c5e5e5bae5f6b03100e3209bff938b07805b0d0c77832f7b3af061147af1b_prof);

        
        $__internal_4b22253cc6c07769f8f796879aeec85f891622df4f079591712ceac451f86d08->leave($__internal_4b22253cc6c07769f8f796879aeec85f891622df4f079591712ceac451f86d08_prof);

    }

    // line 30
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d9b27625f6718b1206cdfd8ad45340c72e86dcaaff5b1d70c275c835599803cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b27625f6718b1206cdfd8ad45340c72e86dcaaff5b1d70c275c835599803cd->enter($__internal_d9b27625f6718b1206cdfd8ad45340c72e86dcaaff5b1d70c275c835599803cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a958fb68f7d45fbc66c8b95d03a71632902e8e5a6962f01127dcdf5256f201a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a958fb68f7d45fbc66c8b95d03a71632902e8e5a6962f01127dcdf5256f201a2->enter($__internal_a958fb68f7d45fbc66c8b95d03a71632902e8e5a6962f01127dcdf5256f201a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 31
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 32
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 34
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 35
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 40
            echo "</div>";
        }
        
        $__internal_a958fb68f7d45fbc66c8b95d03a71632902e8e5a6962f01127dcdf5256f201a2->leave($__internal_a958fb68f7d45fbc66c8b95d03a71632902e8e5a6962f01127dcdf5256f201a2_prof);

        
        $__internal_d9b27625f6718b1206cdfd8ad45340c72e86dcaaff5b1d70c275c835599803cd->leave($__internal_d9b27625f6718b1206cdfd8ad45340c72e86dcaaff5b1d70c275c835599803cd_prof);

    }

    // line 44
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_014737b359d081461243644484deec604725e113adc0f37047c3a9579e93906b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014737b359d081461243644484deec604725e113adc0f37047c3a9579e93906b->enter($__internal_014737b359d081461243644484deec604725e113adc0f37047c3a9579e93906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a75971f01e23d0904d81ed082a7f310f371bd4ad2689870cbca92dd8a063d316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75971f01e23d0904d81ed082a7f310f371bd4ad2689870cbca92dd8a063d316->enter($__internal_a75971f01e23d0904d81ed082a7f310f371bd4ad2689870cbca92dd8a063d316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 45
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 46
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 48
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 49
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 50
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 52
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 53
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 54
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 55
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 57
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 58
                echo "</div>";
            }
        }
        
        $__internal_a75971f01e23d0904d81ed082a7f310f371bd4ad2689870cbca92dd8a063d316->leave($__internal_a75971f01e23d0904d81ed082a7f310f371bd4ad2689870cbca92dd8a063d316_prof);

        
        $__internal_014737b359d081461243644484deec604725e113adc0f37047c3a9579e93906b->leave($__internal_014737b359d081461243644484deec604725e113adc0f37047c3a9579e93906b_prof);

    }

    // line 63
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_39451c58e9bb6c0cb41774a5c56f4eb216a9c12a16716fead56bdc533632d6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39451c58e9bb6c0cb41774a5c56f4eb216a9c12a16716fead56bdc533632d6e9->enter($__internal_39451c58e9bb6c0cb41774a5c56f4eb216a9c12a16716fead56bdc533632d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a6dffd084eb1c43bf76695c533f0a4e25f0c03f9eb80a569f519c740bdee3a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6dffd084eb1c43bf76695c533f0a4e25f0c03f9eb80a569f519c740bdee3a9c->enter($__internal_a6dffd084eb1c43bf76695c533f0a4e25f0c03f9eb80a569f519c740bdee3a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 64
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 65
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 68
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 69
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 72
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 73
                echo "</div>";
            }
        }
        
        $__internal_a6dffd084eb1c43bf76695c533f0a4e25f0c03f9eb80a569f519c740bdee3a9c->leave($__internal_a6dffd084eb1c43bf76695c533f0a4e25f0c03f9eb80a569f519c740bdee3a9c_prof);

        
        $__internal_39451c58e9bb6c0cb41774a5c56f4eb216a9c12a16716fead56bdc533632d6e9->leave($__internal_39451c58e9bb6c0cb41774a5c56f4eb216a9c12a16716fead56bdc533632d6e9_prof);

    }

    // line 78
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5738c4145f13c934cf771deb1542e0a32ad3317cceaf5c083eea1d368aa8bdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5738c4145f13c934cf771deb1542e0a32ad3317cceaf5c083eea1d368aa8bdfb->enter($__internal_5738c4145f13c934cf771deb1542e0a32ad3317cceaf5c083eea1d368aa8bdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_e7b33d304bf73c6c2b9f21eb5be9ffc902b7ea45524ef822a062141d1a272d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b33d304bf73c6c2b9f21eb5be9ffc902b7ea45524ef822a062141d1a272d2a->enter($__internal_e7b33d304bf73c6c2b9f21eb5be9ffc902b7ea45524ef822a062141d1a272d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 79
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 80
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 82
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 83
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 85
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 86
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 89
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 90
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 91
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 92
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 93
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 94
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 95
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 96
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 100
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 101
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 102
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 103
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 104
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 105
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 107
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 111
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 112
            echo "</div>";
        }
        
        $__internal_e7b33d304bf73c6c2b9f21eb5be9ffc902b7ea45524ef822a062141d1a272d2a->leave($__internal_e7b33d304bf73c6c2b9f21eb5be9ffc902b7ea45524ef822a062141d1a272d2a_prof);

        
        $__internal_5738c4145f13c934cf771deb1542e0a32ad3317cceaf5c083eea1d368aa8bdfb->leave($__internal_5738c4145f13c934cf771deb1542e0a32ad3317cceaf5c083eea1d368aa8bdfb_prof);

    }

    // line 116
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_16c5ba00d1883b041e9aa982f41249246fd650f7f6b01a0917ef94747d7d414b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c5ba00d1883b041e9aa982f41249246fd650f7f6b01a0917ef94747d7d414b->enter($__internal_16c5ba00d1883b041e9aa982f41249246fd650f7f6b01a0917ef94747d7d414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7b8a27c692322a0f8652726cc2b1484e3550df709a721ef19c6a02bdb92c0ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8a27c692322a0f8652726cc2b1484e3550df709a721ef19c6a02bdb92c0ed7->enter($__internal_7b8a27c692322a0f8652726cc2b1484e3550df709a721ef19c6a02bdb92c0ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 117
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 118
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_7b8a27c692322a0f8652726cc2b1484e3550df709a721ef19c6a02bdb92c0ed7->leave($__internal_7b8a27c692322a0f8652726cc2b1484e3550df709a721ef19c6a02bdb92c0ed7_prof);

        
        $__internal_16c5ba00d1883b041e9aa982f41249246fd650f7f6b01a0917ef94747d7d414b->leave($__internal_16c5ba00d1883b041e9aa982f41249246fd650f7f6b01a0917ef94747d7d414b_prof);

    }

    // line 121
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5b1b35134887d88e81e1b08d79fa0809a91f41622ce840a6c0df1eeea8a0f000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1b35134887d88e81e1b08d79fa0809a91f41622ce840a6c0df1eeea8a0f000->enter($__internal_5b1b35134887d88e81e1b08d79fa0809a91f41622ce840a6c0df1eeea8a0f000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_240b45957337780cf244d9788fbe7e0c3942a2de98ed39a1a2924c451088747d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240b45957337780cf244d9788fbe7e0c3942a2de98ed39a1a2924c451088747d->enter($__internal_240b45957337780cf244d9788fbe7e0c3942a2de98ed39a1a2924c451088747d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 122
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 125
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 126
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 130
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 133
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 134
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "</div>";
        }
        
        $__internal_240b45957337780cf244d9788fbe7e0c3942a2de98ed39a1a2924c451088747d->leave($__internal_240b45957337780cf244d9788fbe7e0c3942a2de98ed39a1a2924c451088747d_prof);

        
        $__internal_5b1b35134887d88e81e1b08d79fa0809a91f41622ce840a6c0df1eeea8a0f000->leave($__internal_5b1b35134887d88e81e1b08d79fa0809a91f41622ce840a6c0df1eeea8a0f000_prof);

    }

    // line 143
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d5a96eee82a6fcac918bc2930fbf0304bed4e820a5bfbd1dfae971c944553624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a96eee82a6fcac918bc2930fbf0304bed4e820a5bfbd1dfae971c944553624->enter($__internal_d5a96eee82a6fcac918bc2930fbf0304bed4e820a5bfbd1dfae971c944553624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0a7404228c26916841482d6816dd5bf4b1c4d6dbae73e700b506b87797628cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7404228c26916841482d6816dd5bf4b1c4d6dbae73e700b506b87797628cd0->enter($__internal_0a7404228c26916841482d6816dd5bf4b1c4d6dbae73e700b506b87797628cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 145
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 146
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0a7404228c26916841482d6816dd5bf4b1c4d6dbae73e700b506b87797628cd0->leave($__internal_0a7404228c26916841482d6816dd5bf4b1c4d6dbae73e700b506b87797628cd0_prof);

        
        $__internal_d5a96eee82a6fcac918bc2930fbf0304bed4e820a5bfbd1dfae971c944553624->leave($__internal_d5a96eee82a6fcac918bc2930fbf0304bed4e820a5bfbd1dfae971c944553624_prof);

    }

    // line 149
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_935fd65ad155e1326ebe1d4bc50ca2e407a1d7b9babb7fbea803d84137be2a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935fd65ad155e1326ebe1d4bc50ca2e407a1d7b9babb7fbea803d84137be2a8e->enter($__internal_935fd65ad155e1326ebe1d4bc50ca2e407a1d7b9babb7fbea803d84137be2a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e367c1b4b8af74754ce7b4c170da5741fcf404ac0b3b801c9b3816951474e3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e367c1b4b8af74754ce7b4c170da5741fcf404ac0b3b801c9b3816951474e3b5->enter($__internal_e367c1b4b8af74754ce7b4c170da5741fcf404ac0b3b801c9b3816951474e3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 150
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e367c1b4b8af74754ce7b4c170da5741fcf404ac0b3b801c9b3816951474e3b5->leave($__internal_e367c1b4b8af74754ce7b4c170da5741fcf404ac0b3b801c9b3816951474e3b5_prof);

        
        $__internal_935fd65ad155e1326ebe1d4bc50ca2e407a1d7b9babb7fbea803d84137be2a8e->leave($__internal_935fd65ad155e1326ebe1d4bc50ca2e407a1d7b9babb7fbea803d84137be2a8e_prof);

    }

    // line 153
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7187b2d92b28d226c7a7508f0ebd56ab7fb51c5928803aef3cb770ca3ab77990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7187b2d92b28d226c7a7508f0ebd56ab7fb51c5928803aef3cb770ca3ab77990->enter($__internal_7187b2d92b28d226c7a7508f0ebd56ab7fb51c5928803aef3cb770ca3ab77990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_73099d42f7da3a58be86dc605a3a7cdbdd446d4506e785593bcdcfd86736b6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73099d42f7da3a58be86dc605a3a7cdbdd446d4506e785593bcdcfd86736b6fb->enter($__internal_73099d42f7da3a58be86dc605a3a7cdbdd446d4506e785593bcdcfd86736b6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 154
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_73099d42f7da3a58be86dc605a3a7cdbdd446d4506e785593bcdcfd86736b6fb->leave($__internal_73099d42f7da3a58be86dc605a3a7cdbdd446d4506e785593bcdcfd86736b6fb_prof);

        
        $__internal_7187b2d92b28d226c7a7508f0ebd56ab7fb51c5928803aef3cb770ca3ab77990->leave($__internal_7187b2d92b28d226c7a7508f0ebd56ab7fb51c5928803aef3cb770ca3ab77990_prof);

    }

    // line 159
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e8bec5c4cc233cca2ab1ebb409f0d7b7055a4db5168be00638a06d3bfd5d1db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bec5c4cc233cca2ab1ebb409f0d7b7055a4db5168be00638a06d3bfd5d1db5->enter($__internal_e8bec5c4cc233cca2ab1ebb409f0d7b7055a4db5168be00638a06d3bfd5d1db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8c6d11fad1efe4d51a2bc027e5c866ebdebc121f71a4dbfd4267f4c92b8fccef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6d11fad1efe4d51a2bc027e5c866ebdebc121f71a4dbfd4267f4c92b8fccef->enter($__internal_8c6d11fad1efe4d51a2bc027e5c866ebdebc121f71a4dbfd4267f4c92b8fccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 160
        echo "<div class=\"form-group\">";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 162
        echo "</div>";
        
        $__internal_8c6d11fad1efe4d51a2bc027e5c866ebdebc121f71a4dbfd4267f4c92b8fccef->leave($__internal_8c6d11fad1efe4d51a2bc027e5c866ebdebc121f71a4dbfd4267f4c92b8fccef_prof);

        
        $__internal_e8bec5c4cc233cca2ab1ebb409f0d7b7055a4db5168be00638a06d3bfd5d1db5->leave($__internal_e8bec5c4cc233cca2ab1ebb409f0d7b7055a4db5168be00638a06d3bfd5d1db5_prof);

    }

    // line 165
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b81c31a5679bfccece3bdb9ce5f2f4571e5b46b3d7d3bc3daffd874540df06a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81c31a5679bfccece3bdb9ce5f2f4571e5b46b3d7d3bc3daffd874540df06a2->enter($__internal_b81c31a5679bfccece3bdb9ce5f2f4571e5b46b3d7d3bc3daffd874540df06a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9419c45659dcd41c7f049c74fb2e801c48891f31a36602e6df65b11190f0bf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9419c45659dcd41c7f049c74fb2e801c48891f31a36602e6df65b11190f0bf69->enter($__internal_9419c45659dcd41c7f049c74fb2e801c48891f31a36602e6df65b11190f0bf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 166
        $context["force_error"] = true;
        // line 167
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9419c45659dcd41c7f049c74fb2e801c48891f31a36602e6df65b11190f0bf69->leave($__internal_9419c45659dcd41c7f049c74fb2e801c48891f31a36602e6df65b11190f0bf69_prof);

        
        $__internal_b81c31a5679bfccece3bdb9ce5f2f4571e5b46b3d7d3bc3daffd874540df06a2->leave($__internal_b81c31a5679bfccece3bdb9ce5f2f4571e5b46b3d7d3bc3daffd874540df06a2_prof);

    }

    // line 170
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_99f8e1b3e3f0127ecce438d715d076fae88d0c64ffed8c378e547a0bb6637ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f8e1b3e3f0127ecce438d715d076fae88d0c64ffed8c378e547a0bb6637ca3->enter($__internal_99f8e1b3e3f0127ecce438d715d076fae88d0c64ffed8c378e547a0bb6637ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_25a1da6d1d6d37a8a4156dbcce1fb752921d62b1ccd28f3983c2266a61c2d056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a1da6d1d6d37a8a4156dbcce1fb752921d62b1ccd28f3983c2266a61c2d056->enter($__internal_25a1da6d1d6d37a8a4156dbcce1fb752921d62b1ccd28f3983c2266a61c2d056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_25a1da6d1d6d37a8a4156dbcce1fb752921d62b1ccd28f3983c2266a61c2d056->leave($__internal_25a1da6d1d6d37a8a4156dbcce1fb752921d62b1ccd28f3983c2266a61c2d056_prof);

        
        $__internal_99f8e1b3e3f0127ecce438d715d076fae88d0c64ffed8c378e547a0bb6637ca3->leave($__internal_99f8e1b3e3f0127ecce438d715d076fae88d0c64ffed8c378e547a0bb6637ca3_prof);

    }

    // line 175
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b3d3c66c0e2e92684349915a0a55cf166f8bc37d73835ed235c72c1802ccc2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d3c66c0e2e92684349915a0a55cf166f8bc37d73835ed235c72c1802ccc2c6->enter($__internal_b3d3c66c0e2e92684349915a0a55cf166f8bc37d73835ed235c72c1802ccc2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b679805309e68524e58505f3992973d0c1bd6bcf577f706a1819d4b48fc892e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b679805309e68524e58505f3992973d0c1bd6bcf577f706a1819d4b48fc892e2->enter($__internal_b679805309e68524e58505f3992973d0c1bd6bcf577f706a1819d4b48fc892e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b679805309e68524e58505f3992973d0c1bd6bcf577f706a1819d4b48fc892e2->leave($__internal_b679805309e68524e58505f3992973d0c1bd6bcf577f706a1819d4b48fc892e2_prof);

        
        $__internal_b3d3c66c0e2e92684349915a0a55cf166f8bc37d73835ed235c72c1802ccc2c6->leave($__internal_b3d3c66c0e2e92684349915a0a55cf166f8bc37d73835ed235c72c1802ccc2c6_prof);

    }

    // line 180
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_907b1a7513a3a15cf892a833a32400110123be7e8e4f8a134f69ed03aa157493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907b1a7513a3a15cf892a833a32400110123be7e8e4f8a134f69ed03aa157493->enter($__internal_907b1a7513a3a15cf892a833a32400110123be7e8e4f8a134f69ed03aa157493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c53186eb895dbfad020d3cd9144f220aa1ea385ae554fef3a7c4e2940f6f3c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53186eb895dbfad020d3cd9144f220aa1ea385ae554fef3a7c4e2940f6f3c8f->enter($__internal_c53186eb895dbfad020d3cd9144f220aa1ea385ae554fef3a7c4e2940f6f3c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c53186eb895dbfad020d3cd9144f220aa1ea385ae554fef3a7c4e2940f6f3c8f->leave($__internal_c53186eb895dbfad020d3cd9144f220aa1ea385ae554fef3a7c4e2940f6f3c8f_prof);

        
        $__internal_907b1a7513a3a15cf892a833a32400110123be7e8e4f8a134f69ed03aa157493->leave($__internal_907b1a7513a3a15cf892a833a32400110123be7e8e4f8a134f69ed03aa157493_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  731 => 182,  729 => 181,  720 => 180,  710 => 177,  708 => 176,  699 => 175,  689 => 172,  687 => 171,  678 => 170,  668 => 167,  666 => 166,  657 => 165,  647 => 162,  645 => 161,  643 => 160,  634 => 159,  624 => 154,  615 => 153,  605 => 150,  596 => 149,  586 => 146,  584 => 145,  575 => 143,  564 => 137,  558 => 134,  557 => 133,  556 => 132,  552 => 131,  548 => 130,  541 => 126,  540 => 125,  539 => 124,  535 => 123,  533 => 122,  524 => 121,  514 => 118,  512 => 117,  503 => 116,  492 => 112,  488 => 111,  483 => 107,  477 => 106,  471 => 105,  465 => 104,  459 => 103,  453 => 102,  447 => 101,  441 => 100,  436 => 96,  430 => 95,  424 => 94,  418 => 93,  412 => 92,  406 => 91,  400 => 90,  394 => 89,  389 => 86,  386 => 85,  384 => 84,  380 => 83,  378 => 82,  375 => 80,  373 => 79,  364 => 78,  352 => 73,  350 => 72,  340 => 71,  335 => 69,  333 => 68,  331 => 67,  328 => 65,  326 => 64,  317 => 63,  305 => 58,  303 => 57,  301 => 55,  300 => 54,  299 => 53,  298 => 52,  293 => 50,  291 => 49,  289 => 48,  286 => 46,  284 => 45,  275 => 44,  264 => 40,  262 => 39,  260 => 38,  258 => 37,  256 => 36,  252 => 35,  250 => 34,  247 => 32,  245 => 31,  236 => 30,  225 => 26,  223 => 25,  221 => 24,  212 => 23,  202 => 20,  197 => 18,  195 => 17,  193 => 16,  188 => 14,  186 => 13,  184 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 180,  137 => 179,  135 => 175,  132 => 174,  130 => 170,  127 => 169,  125 => 165,  122 => 164,  120 => 159,  117 => 158,  114 => 156,  112 => 153,  109 => 152,  107 => 149,  104 => 148,  102 => 143,  99 => 142,  96 => 140,  94 => 121,  91 => 120,  89 => 116,  87 => 78,  85 => 63,  82 => 62,  80 => 44,  77 => 43,  75 => 30,  72 => 29,  70 => 23,  67 => 22,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    <div class=\"input-group{{ group_class|default('') }}\">
        {%- set append = money_pattern starts with '{{' -%}
        {%- if not append -%}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {%- endif -%}
        {{- block('form_widget_simple') -}}
        {%- if append -%}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {%- endif -%}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "C:\\projet-symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}
