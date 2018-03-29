<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_ab405d075226a12bd25337e39532cee7652324a2fbb7b48236dd0aa5e50a3bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaf615f6e1db9dffcec4276cecf1b6e5834849ce724e8ef4201a8c4190af6c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf615f6e1db9dffcec4276cecf1b6e5834849ce724e8ef4201a8c4190af6c59->enter($__internal_aaf615f6e1db9dffcec4276cecf1b6e5834849ce724e8ef4201a8c4190af6c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_494c8a44f91e98605f7d85c757119661a2b0d0c829d74c338e5be1374bd559e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494c8a44f91e98605f7d85c757119661a2b0d0c829d74c338e5be1374bd559e4->enter($__internal_494c8a44f91e98605f7d85c757119661a2b0d0c829d74c338e5be1374bd559e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf615f6e1db9dffcec4276cecf1b6e5834849ce724e8ef4201a8c4190af6c59->leave($__internal_aaf615f6e1db9dffcec4276cecf1b6e5834849ce724e8ef4201a8c4190af6c59_prof);

        
        $__internal_494c8a44f91e98605f7d85c757119661a2b0d0c829d74c338e5be1374bd559e4->leave($__internal_494c8a44f91e98605f7d85c757119661a2b0d0c829d74c338e5be1374bd559e4_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_da031902075454bacc0972fda48f7e8711819f7c628ff000f3a0eccd8626b285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da031902075454bacc0972fda48f7e8711819f7c628ff000f3a0eccd8626b285->enter($__internal_da031902075454bacc0972fda48f7e8711819f7c628ff000f3a0eccd8626b285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_520c508221111fce377215afd88d16fd7227c5f6583f3e30814df382734e7c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520c508221111fce377215afd88d16fd7227c5f6583f3e30814df382734e7c75->enter($__internal_520c508221111fce377215afd88d16fd7227c5f6583f3e30814df382734e7c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_520c508221111fce377215afd88d16fd7227c5f6583f3e30814df382734e7c75->leave($__internal_520c508221111fce377215afd88d16fd7227c5f6583f3e30814df382734e7c75_prof);

        
        $__internal_da031902075454bacc0972fda48f7e8711819f7c628ff000f3a0eccd8626b285->leave($__internal_da031902075454bacc0972fda48f7e8711819f7c628ff000f3a0eccd8626b285_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2c14ecd6f29cf8c446af7de95d9e204897bab85cb7884cdb4ac3ada1fb33fade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c14ecd6f29cf8c446af7de95d9e204897bab85cb7884cdb4ac3ada1fb33fade->enter($__internal_2c14ecd6f29cf8c446af7de95d9e204897bab85cb7884cdb4ac3ada1fb33fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7ea3f2d7e06acf995979f7ec2ed09923b145efe2be9f70ed6329361ac66db98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea3f2d7e06acf995979f7ec2ed09923b145efe2be9f70ed6329361ac66db98f->enter($__internal_7ea3f2d7e06acf995979f7ec2ed09923b145efe2be9f70ed6329361ac66db98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7ea3f2d7e06acf995979f7ec2ed09923b145efe2be9f70ed6329361ac66db98f->leave($__internal_7ea3f2d7e06acf995979f7ec2ed09923b145efe2be9f70ed6329361ac66db98f_prof);

        
        $__internal_2c14ecd6f29cf8c446af7de95d9e204897bab85cb7884cdb4ac3ada1fb33fade->leave($__internal_2c14ecd6f29cf8c446af7de95d9e204897bab85cb7884cdb4ac3ada1fb33fade_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_aeb6abab2aadea6daf192d75fd77eef8a4d2b7e11dcc2e4b6e7af2b14e39b065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb6abab2aadea6daf192d75fd77eef8a4d2b7e11dcc2e4b6e7af2b14e39b065->enter($__internal_aeb6abab2aadea6daf192d75fd77eef8a4d2b7e11dcc2e4b6e7af2b14e39b065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f970369c613c469e510e8e7df22fbe308349ebdd8cff11436f93e7d9de5efe40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f970369c613c469e510e8e7df22fbe308349ebdd8cff11436f93e7d9de5efe40->enter($__internal_f970369c613c469e510e8e7df22fbe308349ebdd8cff11436f93e7d9de5efe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f970369c613c469e510e8e7df22fbe308349ebdd8cff11436f93e7d9de5efe40->leave($__internal_f970369c613c469e510e8e7df22fbe308349ebdd8cff11436f93e7d9de5efe40_prof);

        
        $__internal_aeb6abab2aadea6daf192d75fd77eef8a4d2b7e11dcc2e4b6e7af2b14e39b065->leave($__internal_aeb6abab2aadea6daf192d75fd77eef8a4d2b7e11dcc2e4b6e7af2b14e39b065_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d1675d91f0acdf1185c35b3aba8f1529abf6fbe720478743c69b9d355747df08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1675d91f0acdf1185c35b3aba8f1529abf6fbe720478743c69b9d355747df08->enter($__internal_d1675d91f0acdf1185c35b3aba8f1529abf6fbe720478743c69b9d355747df08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a0739edafe1aa5e845e91d9613fd07ed7ed76c1333d0a6b6fee7d2df2c14b266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0739edafe1aa5e845e91d9613fd07ed7ed76c1333d0a6b6fee7d2df2c14b266->enter($__internal_a0739edafe1aa5e845e91d9613fd07ed7ed76c1333d0a6b6fee7d2df2c14b266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_a0739edafe1aa5e845e91d9613fd07ed7ed76c1333d0a6b6fee7d2df2c14b266->leave($__internal_a0739edafe1aa5e845e91d9613fd07ed7ed76c1333d0a6b6fee7d2df2c14b266_prof);

        
        $__internal_d1675d91f0acdf1185c35b3aba8f1529abf6fbe720478743c69b9d355747df08->leave($__internal_d1675d91f0acdf1185c35b3aba8f1529abf6fbe720478743c69b9d355747df08_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fcb93e2c7f6573835d4445576dd5ec2399a8b2b205f44c718127c3a70bb10197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb93e2c7f6573835d4445576dd5ec2399a8b2b205f44c718127c3a70bb10197->enter($__internal_fcb93e2c7f6573835d4445576dd5ec2399a8b2b205f44c718127c3a70bb10197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cc5d840a44216e30edbdad175757d6e10d2867f13a5bdbbe6dd69d4aefa828d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5d840a44216e30edbdad175757d6e10d2867f13a5bdbbe6dd69d4aefa828d9->enter($__internal_cc5d840a44216e30edbdad175757d6e10d2867f13a5bdbbe6dd69d4aefa828d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_cc5d840a44216e30edbdad175757d6e10d2867f13a5bdbbe6dd69d4aefa828d9->leave($__internal_cc5d840a44216e30edbdad175757d6e10d2867f13a5bdbbe6dd69d4aefa828d9_prof);

        
        $__internal_fcb93e2c7f6573835d4445576dd5ec2399a8b2b205f44c718127c3a70bb10197->leave($__internal_fcb93e2c7f6573835d4445576dd5ec2399a8b2b205f44c718127c3a70bb10197_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6b2e535658c986a0a1efb692fcbc86e5986e49493cbb88661369972493062079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2e535658c986a0a1efb692fcbc86e5986e49493cbb88661369972493062079->enter($__internal_6b2e535658c986a0a1efb692fcbc86e5986e49493cbb88661369972493062079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2caac818c622833d76fd6c6fc607372f5fde371da9981b8aad5280871a4afc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2caac818c622833d76fd6c6fc607372f5fde371da9981b8aad5280871a4afc13->enter($__internal_2caac818c622833d76fd6c6fc607372f5fde371da9981b8aad5280871a4afc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_2caac818c622833d76fd6c6fc607372f5fde371da9981b8aad5280871a4afc13->leave($__internal_2caac818c622833d76fd6c6fc607372f5fde371da9981b8aad5280871a4afc13_prof);

        
        $__internal_6b2e535658c986a0a1efb692fcbc86e5986e49493cbb88661369972493062079->leave($__internal_6b2e535658c986a0a1efb692fcbc86e5986e49493cbb88661369972493062079_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_48e32072e00ae207370c2b60100147b5b450319cb7dc05576b1a5ecc7c9ae322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e32072e00ae207370c2b60100147b5b450319cb7dc05576b1a5ecc7c9ae322->enter($__internal_48e32072e00ae207370c2b60100147b5b450319cb7dc05576b1a5ecc7c9ae322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c737489c415442f34ff1fad9a902958cf37e750b584bfd0ac109cbf9a81b2804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c737489c415442f34ff1fad9a902958cf37e750b584bfd0ac109cbf9a81b2804->enter($__internal_c737489c415442f34ff1fad9a902958cf37e750b584bfd0ac109cbf9a81b2804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_c737489c415442f34ff1fad9a902958cf37e750b584bfd0ac109cbf9a81b2804->leave($__internal_c737489c415442f34ff1fad9a902958cf37e750b584bfd0ac109cbf9a81b2804_prof);

        
        $__internal_48e32072e00ae207370c2b60100147b5b450319cb7dc05576b1a5ecc7c9ae322->leave($__internal_48e32072e00ae207370c2b60100147b5b450319cb7dc05576b1a5ecc7c9ae322_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_66f4f4bb26283ed3daffd612dc60926b7bd48ecfed6eb0bac8d6a2678a4cd439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f4f4bb26283ed3daffd612dc60926b7bd48ecfed6eb0bac8d6a2678a4cd439->enter($__internal_66f4f4bb26283ed3daffd612dc60926b7bd48ecfed6eb0bac8d6a2678a4cd439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_b3f677eb5b2fabfdcb301110c72c6c3772eb17f60cd8ac6c68ae3bf203452830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f677eb5b2fabfdcb301110c72c6c3772eb17f60cd8ac6c68ae3bf203452830->enter($__internal_b3f677eb5b2fabfdcb301110c72c6c3772eb17f60cd8ac6c68ae3bf203452830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_b3f677eb5b2fabfdcb301110c72c6c3772eb17f60cd8ac6c68ae3bf203452830->leave($__internal_b3f677eb5b2fabfdcb301110c72c6c3772eb17f60cd8ac6c68ae3bf203452830_prof);

        
        $__internal_66f4f4bb26283ed3daffd612dc60926b7bd48ecfed6eb0bac8d6a2678a4cd439->leave($__internal_66f4f4bb26283ed3daffd612dc60926b7bd48ecfed6eb0bac8d6a2678a4cd439_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f3dabcbdee383513af7e02363e9226e7b6c67572dcba72d516f82776bde2ba01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3dabcbdee383513af7e02363e9226e7b6c67572dcba72d516f82776bde2ba01->enter($__internal_f3dabcbdee383513af7e02363e9226e7b6c67572dcba72d516f82776bde2ba01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8247c1c024ceaf073eb54475f663ded1e8f914a57174ae218f499dc97228944d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8247c1c024ceaf073eb54475f663ded1e8f914a57174ae218f499dc97228944d->enter($__internal_8247c1c024ceaf073eb54475f663ded1e8f914a57174ae218f499dc97228944d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_8247c1c024ceaf073eb54475f663ded1e8f914a57174ae218f499dc97228944d->leave($__internal_8247c1c024ceaf073eb54475f663ded1e8f914a57174ae218f499dc97228944d_prof);

        
        $__internal_f3dabcbdee383513af7e02363e9226e7b6c67572dcba72d516f82776bde2ba01->leave($__internal_f3dabcbdee383513af7e02363e9226e7b6c67572dcba72d516f82776bde2ba01_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4e3f5ff5ff598622ce65c528a560219393f4c45f77f31b748eca7b0e1a97c6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3f5ff5ff598622ce65c528a560219393f4c45f77f31b748eca7b0e1a97c6e8->enter($__internal_4e3f5ff5ff598622ce65c528a560219393f4c45f77f31b748eca7b0e1a97c6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_aa8be305c2cb41b2cc4d3d3d451eb01b54f1ec58fbd562899e64ff191c7d7d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8be305c2cb41b2cc4d3d3d451eb01b54f1ec58fbd562899e64ff191c7d7d66->enter($__internal_aa8be305c2cb41b2cc4d3d3d451eb01b54f1ec58fbd562899e64ff191c7d7d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_aa8be305c2cb41b2cc4d3d3d451eb01b54f1ec58fbd562899e64ff191c7d7d66->leave($__internal_aa8be305c2cb41b2cc4d3d3d451eb01b54f1ec58fbd562899e64ff191c7d7d66_prof);

        
        $__internal_4e3f5ff5ff598622ce65c528a560219393f4c45f77f31b748eca7b0e1a97c6e8->leave($__internal_4e3f5ff5ff598622ce65c528a560219393f4c45f77f31b748eca7b0e1a97c6e8_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cb1b18fddfab0683950f078680933c4e768f0e38db19da1703eee8e29e845f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1b18fddfab0683950f078680933c4e768f0e38db19da1703eee8e29e845f60->enter($__internal_cb1b18fddfab0683950f078680933c4e768f0e38db19da1703eee8e29e845f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_cc6292a5ed42bf65e4eebef3e103e6877b10b2c2d9a6fb2abaafb15c6f07fe82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6292a5ed42bf65e4eebef3e103e6877b10b2c2d9a6fb2abaafb15c6f07fe82->enter($__internal_cc6292a5ed42bf65e4eebef3e103e6877b10b2c2d9a6fb2abaafb15c6f07fe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_cc6292a5ed42bf65e4eebef3e103e6877b10b2c2d9a6fb2abaafb15c6f07fe82->leave($__internal_cc6292a5ed42bf65e4eebef3e103e6877b10b2c2d9a6fb2abaafb15c6f07fe82_prof);

        
        $__internal_cb1b18fddfab0683950f078680933c4e768f0e38db19da1703eee8e29e845f60->leave($__internal_cb1b18fddfab0683950f078680933c4e768f0e38db19da1703eee8e29e845f60_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_910f8f3adef8732e914b5471fe23cce7bba749dc26179a1d29110412838a4d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910f8f3adef8732e914b5471fe23cce7bba749dc26179a1d29110412838a4d60->enter($__internal_910f8f3adef8732e914b5471fe23cce7bba749dc26179a1d29110412838a4d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0e46b9852ed984a3b418288805aa25b373bfc09abcd6b7cdc6a81640b50ffe03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e46b9852ed984a3b418288805aa25b373bfc09abcd6b7cdc6a81640b50ffe03->enter($__internal_0e46b9852ed984a3b418288805aa25b373bfc09abcd6b7cdc6a81640b50ffe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_0e46b9852ed984a3b418288805aa25b373bfc09abcd6b7cdc6a81640b50ffe03->leave($__internal_0e46b9852ed984a3b418288805aa25b373bfc09abcd6b7cdc6a81640b50ffe03_prof);

        
        $__internal_910f8f3adef8732e914b5471fe23cce7bba749dc26179a1d29110412838a4d60->leave($__internal_910f8f3adef8732e914b5471fe23cce7bba749dc26179a1d29110412838a4d60_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_83cc05c1f1f1382d85f670425ff46aa6e1c42ec4b846f194846f85e0170c6790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cc05c1f1f1382d85f670425ff46aa6e1c42ec4b846f194846f85e0170c6790->enter($__internal_83cc05c1f1f1382d85f670425ff46aa6e1c42ec4b846f194846f85e0170c6790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_47c02ba738a8f7da8af13b2d4490349efd6f94cfde40871b4e232b4a90ffe843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c02ba738a8f7da8af13b2d4490349efd6f94cfde40871b4e232b4a90ffe843->enter($__internal_47c02ba738a8f7da8af13b2d4490349efd6f94cfde40871b4e232b4a90ffe843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_47c02ba738a8f7da8af13b2d4490349efd6f94cfde40871b4e232b4a90ffe843->leave($__internal_47c02ba738a8f7da8af13b2d4490349efd6f94cfde40871b4e232b4a90ffe843_prof);

        
        $__internal_83cc05c1f1f1382d85f670425ff46aa6e1c42ec4b846f194846f85e0170c6790->leave($__internal_83cc05c1f1f1382d85f670425ff46aa6e1c42ec4b846f194846f85e0170c6790_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_38e99751aa881f2de4d2adbd0ef51e95394315a0c16e4c5694cdfe34bee31d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e99751aa881f2de4d2adbd0ef51e95394315a0c16e4c5694cdfe34bee31d7f->enter($__internal_38e99751aa881f2de4d2adbd0ef51e95394315a0c16e4c5694cdfe34bee31d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b62a735977b02b5da234baaa0d01599417022a486b29bf668f04364ca749ebe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62a735977b02b5da234baaa0d01599417022a486b29bf668f04364ca749ebe9->enter($__internal_b62a735977b02b5da234baaa0d01599417022a486b29bf668f04364ca749ebe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b62a735977b02b5da234baaa0d01599417022a486b29bf668f04364ca749ebe9->leave($__internal_b62a735977b02b5da234baaa0d01599417022a486b29bf668f04364ca749ebe9_prof);

        
        $__internal_38e99751aa881f2de4d2adbd0ef51e95394315a0c16e4c5694cdfe34bee31d7f->leave($__internal_38e99751aa881f2de4d2adbd0ef51e95394315a0c16e4c5694cdfe34bee31d7f_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5d95867d8060aad9fc9de2cd5208db17d096506db2f101426e368c70fac30686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d95867d8060aad9fc9de2cd5208db17d096506db2f101426e368c70fac30686->enter($__internal_5d95867d8060aad9fc9de2cd5208db17d096506db2f101426e368c70fac30686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0f8d64e2f3d9bda6113b609ef911564bd62a1b214bad379c8a3a8966f4dcf755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8d64e2f3d9bda6113b609ef911564bd62a1b214bad379c8a3a8966f4dcf755->enter($__internal_0f8d64e2f3d9bda6113b609ef911564bd62a1b214bad379c8a3a8966f4dcf755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0f8d64e2f3d9bda6113b609ef911564bd62a1b214bad379c8a3a8966f4dcf755->leave($__internal_0f8d64e2f3d9bda6113b609ef911564bd62a1b214bad379c8a3a8966f4dcf755_prof);

        
        $__internal_5d95867d8060aad9fc9de2cd5208db17d096506db2f101426e368c70fac30686->leave($__internal_5d95867d8060aad9fc9de2cd5208db17d096506db2f101426e368c70fac30686_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b7b0f0f87628920f3d8728041659a9578483c2a3d59e2a2f823b34593da044fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b0f0f87628920f3d8728041659a9578483c2a3d59e2a2f823b34593da044fb->enter($__internal_b7b0f0f87628920f3d8728041659a9578483c2a3d59e2a2f823b34593da044fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_7d0383f47c5dd7fb066e4f8c8d6575d08b890fb24a3706b4affbc864686130e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0383f47c5dd7fb066e4f8c8d6575d08b890fb24a3706b4affbc864686130e7->enter($__internal_7d0383f47c5dd7fb066e4f8c8d6575d08b890fb24a3706b4affbc864686130e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7d0383f47c5dd7fb066e4f8c8d6575d08b890fb24a3706b4affbc864686130e7->leave($__internal_7d0383f47c5dd7fb066e4f8c8d6575d08b890fb24a3706b4affbc864686130e7_prof);

        
        $__internal_b7b0f0f87628920f3d8728041659a9578483c2a3d59e2a2f823b34593da044fb->leave($__internal_b7b0f0f87628920f3d8728041659a9578483c2a3d59e2a2f823b34593da044fb_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_868db761442eead80901e3637e8c6c279e0f6a810c56c56aca5f41515987ade7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868db761442eead80901e3637e8c6c279e0f6a810c56c56aca5f41515987ade7->enter($__internal_868db761442eead80901e3637e8c6c279e0f6a810c56c56aca5f41515987ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3acb54932aea5ce8e101231816513aefedfb884aab7f1b59654561db54b9c4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acb54932aea5ce8e101231816513aefedfb884aab7f1b59654561db54b9c4f2->enter($__internal_3acb54932aea5ce8e101231816513aefedfb884aab7f1b59654561db54b9c4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_3acb54932aea5ce8e101231816513aefedfb884aab7f1b59654561db54b9c4f2->leave($__internal_3acb54932aea5ce8e101231816513aefedfb884aab7f1b59654561db54b9c4f2_prof);

        
        $__internal_868db761442eead80901e3637e8c6c279e0f6a810c56c56aca5f41515987ade7->leave($__internal_868db761442eead80901e3637e8c6c279e0f6a810c56c56aca5f41515987ade7_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5c5a6d477b12811461ed12345b9a9c8fe676e7145035a61c25080edfce45235d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5a6d477b12811461ed12345b9a9c8fe676e7145035a61c25080edfce45235d->enter($__internal_5c5a6d477b12811461ed12345b9a9c8fe676e7145035a61c25080edfce45235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8b302b77de5d2c35f8de84cf4031a71bf3e1f82d6297bb8bd7c89cca677ca2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b302b77de5d2c35f8de84cf4031a71bf3e1f82d6297bb8bd7c89cca677ca2c6->enter($__internal_8b302b77de5d2c35f8de84cf4031a71bf3e1f82d6297bb8bd7c89cca677ca2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_8b302b77de5d2c35f8de84cf4031a71bf3e1f82d6297bb8bd7c89cca677ca2c6->leave($__internal_8b302b77de5d2c35f8de84cf4031a71bf3e1f82d6297bb8bd7c89cca677ca2c6_prof);

        
        $__internal_5c5a6d477b12811461ed12345b9a9c8fe676e7145035a61c25080edfce45235d->leave($__internal_5c5a6d477b12811461ed12345b9a9c8fe676e7145035a61c25080edfce45235d_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_31941d410925de337c33c44bfc969492a751bc112cb5376e29c1bd1648341300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31941d410925de337c33c44bfc969492a751bc112cb5376e29c1bd1648341300->enter($__internal_31941d410925de337c33c44bfc969492a751bc112cb5376e29c1bd1648341300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6d2dceca2a9d27858b8a9e3b3dddb3447c0a609c18b111a73bd37c4baa819eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2dceca2a9d27858b8a9e3b3dddb3447c0a609c18b111a73bd37c4baa819eb0->enter($__internal_6d2dceca2a9d27858b8a9e3b3dddb3447c0a609c18b111a73bd37c4baa819eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6d2dceca2a9d27858b8a9e3b3dddb3447c0a609c18b111a73bd37c4baa819eb0->leave($__internal_6d2dceca2a9d27858b8a9e3b3dddb3447c0a609c18b111a73bd37c4baa819eb0_prof);

        
        $__internal_31941d410925de337c33c44bfc969492a751bc112cb5376e29c1bd1648341300->leave($__internal_31941d410925de337c33c44bfc969492a751bc112cb5376e29c1bd1648341300_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d76bb0304d45cb1195d5b4cba1394ff4fbe3715f31b008571d31e416075b4b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76bb0304d45cb1195d5b4cba1394ff4fbe3715f31b008571d31e416075b4b0a->enter($__internal_d76bb0304d45cb1195d5b4cba1394ff4fbe3715f31b008571d31e416075b4b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1d9b688024f3db1f4e9f63a50f6f9f23fdd02550bc4b9c6829a20226574bb2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9b688024f3db1f4e9f63a50f6f9f23fdd02550bc4b9c6829a20226574bb2cf->enter($__internal_1d9b688024f3db1f4e9f63a50f6f9f23fdd02550bc4b9c6829a20226574bb2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1d9b688024f3db1f4e9f63a50f6f9f23fdd02550bc4b9c6829a20226574bb2cf->leave($__internal_1d9b688024f3db1f4e9f63a50f6f9f23fdd02550bc4b9c6829a20226574bb2cf_prof);

        
        $__internal_d76bb0304d45cb1195d5b4cba1394ff4fbe3715f31b008571d31e416075b4b0a->leave($__internal_d76bb0304d45cb1195d5b4cba1394ff4fbe3715f31b008571d31e416075b4b0a_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ae988b28ee9eaac20216a8e654d82b64a552b0d1b23018cb9dc096dfde9a8df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae988b28ee9eaac20216a8e654d82b64a552b0d1b23018cb9dc096dfde9a8df2->enter($__internal_ae988b28ee9eaac20216a8e654d82b64a552b0d1b23018cb9dc096dfde9a8df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9e9377dc6b1595467722515d6942499e4ef7cdf4d888d4b3169b2f2bf4ade017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9377dc6b1595467722515d6942499e4ef7cdf4d888d4b3169b2f2bf4ade017->enter($__internal_9e9377dc6b1595467722515d6942499e4ef7cdf4d888d4b3169b2f2bf4ade017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9e9377dc6b1595467722515d6942499e4ef7cdf4d888d4b3169b2f2bf4ade017->leave($__internal_9e9377dc6b1595467722515d6942499e4ef7cdf4d888d4b3169b2f2bf4ade017_prof);

        
        $__internal_ae988b28ee9eaac20216a8e654d82b64a552b0d1b23018cb9dc096dfde9a8df2->leave($__internal_ae988b28ee9eaac20216a8e654d82b64a552b0d1b23018cb9dc096dfde9a8df2_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4d66300d8a323b41c3bb55a7d1f57284ce86a3d101db61b90b9527f02baecae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d66300d8a323b41c3bb55a7d1f57284ce86a3d101db61b90b9527f02baecae6->enter($__internal_4d66300d8a323b41c3bb55a7d1f57284ce86a3d101db61b90b9527f02baecae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1393b11546fd561edf9728dd5ffc40472df7aba13ce29398644d3d56350f8c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1393b11546fd561edf9728dd5ffc40472df7aba13ce29398644d3d56350f8c1a->enter($__internal_1393b11546fd561edf9728dd5ffc40472df7aba13ce29398644d3d56350f8c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1393b11546fd561edf9728dd5ffc40472df7aba13ce29398644d3d56350f8c1a->leave($__internal_1393b11546fd561edf9728dd5ffc40472df7aba13ce29398644d3d56350f8c1a_prof);

        
        $__internal_4d66300d8a323b41c3bb55a7d1f57284ce86a3d101db61b90b9527f02baecae6->leave($__internal_4d66300d8a323b41c3bb55a7d1f57284ce86a3d101db61b90b9527f02baecae6_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c684de1ef742c568c178a6524aaa465f6b06b736e448cded31659b0cd7807e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c684de1ef742c568c178a6524aaa465f6b06b736e448cded31659b0cd7807e87->enter($__internal_c684de1ef742c568c178a6524aaa465f6b06b736e448cded31659b0cd7807e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_46269215963581fd9b22cfb77767c1edcba05ac211a4a28526d22ad7067f2cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46269215963581fd9b22cfb77767c1edcba05ac211a4a28526d22ad7067f2cbc->enter($__internal_46269215963581fd9b22cfb77767c1edcba05ac211a4a28526d22ad7067f2cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_46269215963581fd9b22cfb77767c1edcba05ac211a4a28526d22ad7067f2cbc->leave($__internal_46269215963581fd9b22cfb77767c1edcba05ac211a4a28526d22ad7067f2cbc_prof);

        
        $__internal_c684de1ef742c568c178a6524aaa465f6b06b736e448cded31659b0cd7807e87->leave($__internal_c684de1ef742c568c178a6524aaa465f6b06b736e448cded31659b0cd7807e87_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8bbe931677a08b8ed1c3e0d8c6e77f64505ccaf5065e8b0b8eca94920f500054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbe931677a08b8ed1c3e0d8c6e77f64505ccaf5065e8b0b8eca94920f500054->enter($__internal_8bbe931677a08b8ed1c3e0d8c6e77f64505ccaf5065e8b0b8eca94920f500054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d216d61b926933795eca485fd786aeedc6cf93139c84c0a9f66d46d0d837b88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d216d61b926933795eca485fd786aeedc6cf93139c84c0a9f66d46d0d837b88f->enter($__internal_d216d61b926933795eca485fd786aeedc6cf93139c84c0a9f66d46d0d837b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_d216d61b926933795eca485fd786aeedc6cf93139c84c0a9f66d46d0d837b88f->leave($__internal_d216d61b926933795eca485fd786aeedc6cf93139c84c0a9f66d46d0d837b88f_prof);

        
        $__internal_8bbe931677a08b8ed1c3e0d8c6e77f64505ccaf5065e8b0b8eca94920f500054->leave($__internal_8bbe931677a08b8ed1c3e0d8c6e77f64505ccaf5065e8b0b8eca94920f500054_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1b312890d2f3703d0def3f2e9b50035ab5a5beab09b8c15a0be750b7b01a5d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b312890d2f3703d0def3f2e9b50035ab5a5beab09b8c15a0be750b7b01a5d8d->enter($__internal_1b312890d2f3703d0def3f2e9b50035ab5a5beab09b8c15a0be750b7b01a5d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2aac85ce34b112a72034093ecc99315effb25e935b5f67f3976bf3e162d2e847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aac85ce34b112a72034093ecc99315effb25e935b5f67f3976bf3e162d2e847->enter($__internal_2aac85ce34b112a72034093ecc99315effb25e935b5f67f3976bf3e162d2e847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_2aac85ce34b112a72034093ecc99315effb25e935b5f67f3976bf3e162d2e847->leave($__internal_2aac85ce34b112a72034093ecc99315effb25e935b5f67f3976bf3e162d2e847_prof);

        
        $__internal_1b312890d2f3703d0def3f2e9b50035ab5a5beab09b8c15a0be750b7b01a5d8d->leave($__internal_1b312890d2f3703d0def3f2e9b50035ab5a5beab09b8c15a0be750b7b01a5d8d_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
