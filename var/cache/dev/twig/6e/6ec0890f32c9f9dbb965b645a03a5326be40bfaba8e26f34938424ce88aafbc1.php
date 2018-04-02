<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_272e13c85893e077d880aeda02554d4b9340bfcbd54a96cb86b7dbda7c003e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea9a34369562e294244cd094eb46970daed73112785765eebc33a874550c4dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9a34369562e294244cd094eb46970daed73112785765eebc33a874550c4dcb->enter($__internal_ea9a34369562e294244cd094eb46970daed73112785765eebc33a874550c4dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_7885c1b748695c3b77b175c87a5d611debda0cce7ad7781860885a13e76c0dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7885c1b748695c3b77b175c87a5d611debda0cce7ad7781860885a13e76c0dd1->enter($__internal_7885c1b748695c3b77b175c87a5d611debda0cce7ad7781860885a13e76c0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ea9a34369562e294244cd094eb46970daed73112785765eebc33a874550c4dcb->leave($__internal_ea9a34369562e294244cd094eb46970daed73112785765eebc33a874550c4dcb_prof);

        
        $__internal_7885c1b748695c3b77b175c87a5d611debda0cce7ad7781860885a13e76c0dd1->leave($__internal_7885c1b748695c3b77b175c87a5d611debda0cce7ad7781860885a13e76c0dd1_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_34d7642204300e11786175c50ceef3592544ae65b5c39ec5e4478654efc43ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d7642204300e11786175c50ceef3592544ae65b5c39ec5e4478654efc43ae3->enter($__internal_34d7642204300e11786175c50ceef3592544ae65b5c39ec5e4478654efc43ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f3b8dfc8277a2c6b53111a8531c8c80926f4db4f3ef8716b87202dc167287729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b8dfc8277a2c6b53111a8531c8c80926f4db4f3ef8716b87202dc167287729->enter($__internal_f3b8dfc8277a2c6b53111a8531c8c80926f4db4f3ef8716b87202dc167287729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f3b8dfc8277a2c6b53111a8531c8c80926f4db4f3ef8716b87202dc167287729->leave($__internal_f3b8dfc8277a2c6b53111a8531c8c80926f4db4f3ef8716b87202dc167287729_prof);

        
        $__internal_34d7642204300e11786175c50ceef3592544ae65b5c39ec5e4478654efc43ae3->leave($__internal_34d7642204300e11786175c50ceef3592544ae65b5c39ec5e4478654efc43ae3_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fc89458ac4e21893d97ae2864a8e0e62648bfc00176e606367b6a36ceb2b8030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc89458ac4e21893d97ae2864a8e0e62648bfc00176e606367b6a36ceb2b8030->enter($__internal_fc89458ac4e21893d97ae2864a8e0e62648bfc00176e606367b6a36ceb2b8030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8876f0890ccdc40eb84c2476b61e0d37ca7b002ae2b3ac5b1eaa82d26cb5f120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8876f0890ccdc40eb84c2476b61e0d37ca7b002ae2b3ac5b1eaa82d26cb5f120->enter($__internal_8876f0890ccdc40eb84c2476b61e0d37ca7b002ae2b3ac5b1eaa82d26cb5f120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_8876f0890ccdc40eb84c2476b61e0d37ca7b002ae2b3ac5b1eaa82d26cb5f120->leave($__internal_8876f0890ccdc40eb84c2476b61e0d37ca7b002ae2b3ac5b1eaa82d26cb5f120_prof);

        
        $__internal_fc89458ac4e21893d97ae2864a8e0e62648bfc00176e606367b6a36ceb2b8030->leave($__internal_fc89458ac4e21893d97ae2864a8e0e62648bfc00176e606367b6a36ceb2b8030_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_64b64777dcd511b6fcd13d4b5ae0f9d3c23a78a9c2c4b7893b79158d918ede22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b64777dcd511b6fcd13d4b5ae0f9d3c23a78a9c2c4b7893b79158d918ede22->enter($__internal_64b64777dcd511b6fcd13d4b5ae0f9d3c23a78a9c2c4b7893b79158d918ede22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b80e77e3542c41e805bb3a011137cdeda21ce9ac974b319ce36aadd356e73f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80e77e3542c41e805bb3a011137cdeda21ce9ac974b319ce36aadd356e73f66->enter($__internal_b80e77e3542c41e805bb3a011137cdeda21ce9ac974b319ce36aadd356e73f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b80e77e3542c41e805bb3a011137cdeda21ce9ac974b319ce36aadd356e73f66->leave($__internal_b80e77e3542c41e805bb3a011137cdeda21ce9ac974b319ce36aadd356e73f66_prof);

        
        $__internal_64b64777dcd511b6fcd13d4b5ae0f9d3c23a78a9c2c4b7893b79158d918ede22->leave($__internal_64b64777dcd511b6fcd13d4b5ae0f9d3c23a78a9c2c4b7893b79158d918ede22_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3fbaee5c353633af49d1b60b930b0f0bfb871fb60dff03d4d37e4ac9ba8073d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbaee5c353633af49d1b60b930b0f0bfb871fb60dff03d4d37e4ac9ba8073d4->enter($__internal_3fbaee5c353633af49d1b60b930b0f0bfb871fb60dff03d4d37e4ac9ba8073d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8e1e611b879186d541ac0137f08fc3b7ea68f76e14a3a43463794d44c3b2824f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1e611b879186d541ac0137f08fc3b7ea68f76e14a3a43463794d44c3b2824f->enter($__internal_8e1e611b879186d541ac0137f08fc3b7ea68f76e14a3a43463794d44c3b2824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_6ab9616c5b490df674160b533a9a241cdff383e667d2fa1ee8d2ca07f29914eb = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_5abf98252ae00db2059a56a6b7fb6d0f9f187aab7105f4fa5c95fa799697edb7 = "{{") && ('' === $__internal_5abf98252ae00db2059a56a6b7fb6d0f9f187aab7105f4fa5c95fa799697edb7 || 0 === strpos($__internal_6ab9616c5b490df674160b533a9a241cdff383e667d2fa1ee8d2ca07f29914eb, $__internal_5abf98252ae00db2059a56a6b7fb6d0f9f187aab7105f4fa5c95fa799697edb7)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_e0522ca9472707230e392b22062db4eb85586990d688156647912af64c75dce1 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_e6e01f446a88b219f9860470b6d6690f37f3f0740f0f50d39f72604db3784d94 = "}}") && ('' === $__internal_e6e01f446a88b219f9860470b6d6690f37f3f0740f0f50d39f72604db3784d94 || $__internal_e6e01f446a88b219f9860470b6d6690f37f3f0740f0f50d39f72604db3784d94 === substr($__internal_e0522ca9472707230e392b22062db4eb85586990d688156647912af64c75dce1, -strlen($__internal_e6e01f446a88b219f9860470b6d6690f37f3f0740f0f50d39f72604db3784d94))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_8e1e611b879186d541ac0137f08fc3b7ea68f76e14a3a43463794d44c3b2824f->leave($__internal_8e1e611b879186d541ac0137f08fc3b7ea68f76e14a3a43463794d44c3b2824f_prof);

        
        $__internal_3fbaee5c353633af49d1b60b930b0f0bfb871fb60dff03d4d37e4ac9ba8073d4->leave($__internal_3fbaee5c353633af49d1b60b930b0f0bfb871fb60dff03d4d37e4ac9ba8073d4_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_eab5f6928492e78a3bb430e64f5988771cc3fa64a1623278030bf08616c5ad56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab5f6928492e78a3bb430e64f5988771cc3fa64a1623278030bf08616c5ad56->enter($__internal_eab5f6928492e78a3bb430e64f5988771cc3fa64a1623278030bf08616c5ad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_de4967834b18af7d596f6fa86f6f8be19af4c1f37c1c42f458ad3657aacc9c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4967834b18af7d596f6fa86f6f8be19af4c1f37c1c42f458ad3657aacc9c07->enter($__internal_de4967834b18af7d596f6fa86f6f8be19af4c1f37c1c42f458ad3657aacc9c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_de4967834b18af7d596f6fa86f6f8be19af4c1f37c1c42f458ad3657aacc9c07->leave($__internal_de4967834b18af7d596f6fa86f6f8be19af4c1f37c1c42f458ad3657aacc9c07_prof);

        
        $__internal_eab5f6928492e78a3bb430e64f5988771cc3fa64a1623278030bf08616c5ad56->leave($__internal_eab5f6928492e78a3bb430e64f5988771cc3fa64a1623278030bf08616c5ad56_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3a4dd928f32ae3415837acb954a1f4360cff221bffeac138c876857e1f79a67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4dd928f32ae3415837acb954a1f4360cff221bffeac138c876857e1f79a67d->enter($__internal_3a4dd928f32ae3415837acb954a1f4360cff221bffeac138c876857e1f79a67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_744fc83d3c1c4ab7206713a8608bdc3c5239a7a355fccfffd56cf8279a3916ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744fc83d3c1c4ab7206713a8608bdc3c5239a7a355fccfffd56cf8279a3916ce->enter($__internal_744fc83d3c1c4ab7206713a8608bdc3c5239a7a355fccfffd56cf8279a3916ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_744fc83d3c1c4ab7206713a8608bdc3c5239a7a355fccfffd56cf8279a3916ce->leave($__internal_744fc83d3c1c4ab7206713a8608bdc3c5239a7a355fccfffd56cf8279a3916ce_prof);

        
        $__internal_3a4dd928f32ae3415837acb954a1f4360cff221bffeac138c876857e1f79a67d->leave($__internal_3a4dd928f32ae3415837acb954a1f4360cff221bffeac138c876857e1f79a67d_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6ecd8881a1f70961afb76585ee1dcafd0670d21711c5987aae7ca3ca34063503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecd8881a1f70961afb76585ee1dcafd0670d21711c5987aae7ca3ca34063503->enter($__internal_6ecd8881a1f70961afb76585ee1dcafd0670d21711c5987aae7ca3ca34063503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_4237f1c65ff653eb69da84d1c4ca052cd856ffc74d76f2ccb0319a9fd6471fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4237f1c65ff653eb69da84d1c4ca052cd856ffc74d76f2ccb0319a9fd6471fd9->enter($__internal_4237f1c65ff653eb69da84d1c4ca052cd856ffc74d76f2ccb0319a9fd6471fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_4237f1c65ff653eb69da84d1c4ca052cd856ffc74d76f2ccb0319a9fd6471fd9->leave($__internal_4237f1c65ff653eb69da84d1c4ca052cd856ffc74d76f2ccb0319a9fd6471fd9_prof);

        
        $__internal_6ecd8881a1f70961afb76585ee1dcafd0670d21711c5987aae7ca3ca34063503->leave($__internal_6ecd8881a1f70961afb76585ee1dcafd0670d21711c5987aae7ca3ca34063503_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_be726e1ed7f3e1db8e37dfb88552afe62c691626f50803436b023c76f8f2bcea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be726e1ed7f3e1db8e37dfb88552afe62c691626f50803436b023c76f8f2bcea->enter($__internal_be726e1ed7f3e1db8e37dfb88552afe62c691626f50803436b023c76f8f2bcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_683e37e1c9c850d8628e6596549a8d57e479aa75a756674aa2df666bdc05673a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683e37e1c9c850d8628e6596549a8d57e479aa75a756674aa2df666bdc05673a->enter($__internal_683e37e1c9c850d8628e6596549a8d57e479aa75a756674aa2df666bdc05673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_683e37e1c9c850d8628e6596549a8d57e479aa75a756674aa2df666bdc05673a->leave($__internal_683e37e1c9c850d8628e6596549a8d57e479aa75a756674aa2df666bdc05673a_prof);

        
        $__internal_be726e1ed7f3e1db8e37dfb88552afe62c691626f50803436b023c76f8f2bcea->leave($__internal_be726e1ed7f3e1db8e37dfb88552afe62c691626f50803436b023c76f8f2bcea_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_7f7e61da198ef813ca67e7a327adcb6d8122715a2d325014fcb76e951a0678b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7e61da198ef813ca67e7a327adcb6d8122715a2d325014fcb76e951a0678b2->enter($__internal_7f7e61da198ef813ca67e7a327adcb6d8122715a2d325014fcb76e951a0678b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_c304f5df5900c02a60a0cdae3442760b4b00c23e43592fa7a02b96cedc815801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c304f5df5900c02a60a0cdae3442760b4b00c23e43592fa7a02b96cedc815801->enter($__internal_c304f5df5900c02a60a0cdae3442760b4b00c23e43592fa7a02b96cedc815801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_c304f5df5900c02a60a0cdae3442760b4b00c23e43592fa7a02b96cedc815801->leave($__internal_c304f5df5900c02a60a0cdae3442760b4b00c23e43592fa7a02b96cedc815801_prof);

        
        $__internal_7f7e61da198ef813ca67e7a327adcb6d8122715a2d325014fcb76e951a0678b2->leave($__internal_7f7e61da198ef813ca67e7a327adcb6d8122715a2d325014fcb76e951a0678b2_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_19965b2f4168e2b154385b5f9f76829a7ea3e3a338c6ace6061dcfcaec701737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19965b2f4168e2b154385b5f9f76829a7ea3e3a338c6ace6061dcfcaec701737->enter($__internal_19965b2f4168e2b154385b5f9f76829a7ea3e3a338c6ace6061dcfcaec701737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7cdd1a8c839751231b91d4d31f3c1a5bc9581af0f8e50a1f6492ec303828cf46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdd1a8c839751231b91d4d31f3c1a5bc9581af0f8e50a1f6492ec303828cf46->enter($__internal_7cdd1a8c839751231b91d4d31f3c1a5bc9581af0f8e50a1f6492ec303828cf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_7cdd1a8c839751231b91d4d31f3c1a5bc9581af0f8e50a1f6492ec303828cf46->leave($__internal_7cdd1a8c839751231b91d4d31f3c1a5bc9581af0f8e50a1f6492ec303828cf46_prof);

        
        $__internal_19965b2f4168e2b154385b5f9f76829a7ea3e3a338c6ace6061dcfcaec701737->leave($__internal_19965b2f4168e2b154385b5f9f76829a7ea3e3a338c6ace6061dcfcaec701737_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d153bafbeb5d18e0b565f9a2d499206e5f24416dd143e67b8016ce1ba1785e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d153bafbeb5d18e0b565f9a2d499206e5f24416dd143e67b8016ce1ba1785e10->enter($__internal_d153bafbeb5d18e0b565f9a2d499206e5f24416dd143e67b8016ce1ba1785e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a9e19a3d2de5d77b4e3a53660b8104f66bebc51f8eb3f310abb7540e7173d42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e19a3d2de5d77b4e3a53660b8104f66bebc51f8eb3f310abb7540e7173d42d->enter($__internal_a9e19a3d2de5d77b4e3a53660b8104f66bebc51f8eb3f310abb7540e7173d42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_a9e19a3d2de5d77b4e3a53660b8104f66bebc51f8eb3f310abb7540e7173d42d->leave($__internal_a9e19a3d2de5d77b4e3a53660b8104f66bebc51f8eb3f310abb7540e7173d42d_prof);

        
        $__internal_d153bafbeb5d18e0b565f9a2d499206e5f24416dd143e67b8016ce1ba1785e10->leave($__internal_d153bafbeb5d18e0b565f9a2d499206e5f24416dd143e67b8016ce1ba1785e10_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f8067947915310158cbcb6410be69633c5d8e8852366474218250acbc60e87da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8067947915310158cbcb6410be69633c5d8e8852366474218250acbc60e87da->enter($__internal_f8067947915310158cbcb6410be69633c5d8e8852366474218250acbc60e87da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_31be36d0600b9ec5241ff41fb5a5b2a2996fcb4582d6461848ecf43dc81b0efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31be36d0600b9ec5241ff41fb5a5b2a2996fcb4582d6461848ecf43dc81b0efe->enter($__internal_31be36d0600b9ec5241ff41fb5a5b2a2996fcb4582d6461848ecf43dc81b0efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_31be36d0600b9ec5241ff41fb5a5b2a2996fcb4582d6461848ecf43dc81b0efe->leave($__internal_31be36d0600b9ec5241ff41fb5a5b2a2996fcb4582d6461848ecf43dc81b0efe_prof);

        
        $__internal_f8067947915310158cbcb6410be69633c5d8e8852366474218250acbc60e87da->leave($__internal_f8067947915310158cbcb6410be69633c5d8e8852366474218250acbc60e87da_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_802480def7a8909f5fe1e1d7b9c1439807c86bd7cba0394410bf7bd4c4cd5899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802480def7a8909f5fe1e1d7b9c1439807c86bd7cba0394410bf7bd4c4cd5899->enter($__internal_802480def7a8909f5fe1e1d7b9c1439807c86bd7cba0394410bf7bd4c4cd5899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c29db201574cce8935edd0ba8786dd8a4b6203267e9573e95a59f6b54c8b2f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29db201574cce8935edd0ba8786dd8a4b6203267e9573e95a59f6b54c8b2f6a->enter($__internal_c29db201574cce8935edd0ba8786dd8a4b6203267e9573e95a59f6b54c8b2f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_c29db201574cce8935edd0ba8786dd8a4b6203267e9573e95a59f6b54c8b2f6a->leave($__internal_c29db201574cce8935edd0ba8786dd8a4b6203267e9573e95a59f6b54c8b2f6a_prof);

        
        $__internal_802480def7a8909f5fe1e1d7b9c1439807c86bd7cba0394410bf7bd4c4cd5899->leave($__internal_802480def7a8909f5fe1e1d7b9c1439807c86bd7cba0394410bf7bd4c4cd5899_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4423ff63b471c6799e1a3caab34f528fe6a7395a2ae24a0052a6b07c0d20b7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4423ff63b471c6799e1a3caab34f528fe6a7395a2ae24a0052a6b07c0d20b7a3->enter($__internal_4423ff63b471c6799e1a3caab34f528fe6a7395a2ae24a0052a6b07c0d20b7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d091762622308e8436ca6d9bf99cb8d4ca2479fa886b2e3efc5d93df396af99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d091762622308e8436ca6d9bf99cb8d4ca2479fa886b2e3efc5d93df396af99c->enter($__internal_d091762622308e8436ca6d9bf99cb8d4ca2479fa886b2e3efc5d93df396af99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d091762622308e8436ca6d9bf99cb8d4ca2479fa886b2e3efc5d93df396af99c->leave($__internal_d091762622308e8436ca6d9bf99cb8d4ca2479fa886b2e3efc5d93df396af99c_prof);

        
        $__internal_4423ff63b471c6799e1a3caab34f528fe6a7395a2ae24a0052a6b07c0d20b7a3->leave($__internal_4423ff63b471c6799e1a3caab34f528fe6a7395a2ae24a0052a6b07c0d20b7a3_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5873e1cd7dabebda2c1f2e3aa235bbca50248151ec4b0bb519b9d5576985426a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5873e1cd7dabebda2c1f2e3aa235bbca50248151ec4b0bb519b9d5576985426a->enter($__internal_5873e1cd7dabebda2c1f2e3aa235bbca50248151ec4b0bb519b9d5576985426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2b68f5fce4b6d0901bad145177f27a5f657ba60934f25c1d96379ba0ab8f5393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b68f5fce4b6d0901bad145177f27a5f657ba60934f25c1d96379ba0ab8f5393->enter($__internal_2b68f5fce4b6d0901bad145177f27a5f657ba60934f25c1d96379ba0ab8f5393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2b68f5fce4b6d0901bad145177f27a5f657ba60934f25c1d96379ba0ab8f5393->leave($__internal_2b68f5fce4b6d0901bad145177f27a5f657ba60934f25c1d96379ba0ab8f5393_prof);

        
        $__internal_5873e1cd7dabebda2c1f2e3aa235bbca50248151ec4b0bb519b9d5576985426a->leave($__internal_5873e1cd7dabebda2c1f2e3aa235bbca50248151ec4b0bb519b9d5576985426a_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_68156dcff8ba13554c2ed2c12196668a5e5f87e9cb3151e1d975072fb40bc8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68156dcff8ba13554c2ed2c12196668a5e5f87e9cb3151e1d975072fb40bc8d5->enter($__internal_68156dcff8ba13554c2ed2c12196668a5e5f87e9cb3151e1d975072fb40bc8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c0837e48b6c275b02d3da3545f447e2470fb01c12e8445c2ed4d5400331dfefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0837e48b6c275b02d3da3545f447e2470fb01c12e8445c2ed4d5400331dfefa->enter($__internal_c0837e48b6c275b02d3da3545f447e2470fb01c12e8445c2ed4d5400331dfefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c0837e48b6c275b02d3da3545f447e2470fb01c12e8445c2ed4d5400331dfefa->leave($__internal_c0837e48b6c275b02d3da3545f447e2470fb01c12e8445c2ed4d5400331dfefa_prof);

        
        $__internal_68156dcff8ba13554c2ed2c12196668a5e5f87e9cb3151e1d975072fb40bc8d5->leave($__internal_68156dcff8ba13554c2ed2c12196668a5e5f87e9cb3151e1d975072fb40bc8d5_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_20f279f6529fd83aa197c3a4d4c4cea757000fc9b8e96a29ecc08882e79ddac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f279f6529fd83aa197c3a4d4c4cea757000fc9b8e96a29ecc08882e79ddac4->enter($__internal_20f279f6529fd83aa197c3a4d4c4cea757000fc9b8e96a29ecc08882e79ddac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_4aa7500f40a23462180f3ac9a57cf5f07c1c970a2ea75b16545605ca5af2e067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa7500f40a23462180f3ac9a57cf5f07c1c970a2ea75b16545605ca5af2e067->enter($__internal_4aa7500f40a23462180f3ac9a57cf5f07c1c970a2ea75b16545605ca5af2e067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4aa7500f40a23462180f3ac9a57cf5f07c1c970a2ea75b16545605ca5af2e067->leave($__internal_4aa7500f40a23462180f3ac9a57cf5f07c1c970a2ea75b16545605ca5af2e067_prof);

        
        $__internal_20f279f6529fd83aa197c3a4d4c4cea757000fc9b8e96a29ecc08882e79ddac4->leave($__internal_20f279f6529fd83aa197c3a4d4c4cea757000fc9b8e96a29ecc08882e79ddac4_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2dc42b190bf33da5863418e710482d717a8728cdfeb2aa8ac5a840d579cc96e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc42b190bf33da5863418e710482d717a8728cdfeb2aa8ac5a840d579cc96e8->enter($__internal_2dc42b190bf33da5863418e710482d717a8728cdfeb2aa8ac5a840d579cc96e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c5bae7b905b87183ff724db677bef72f4a3c23bc36931975f1dd636449760123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bae7b905b87183ff724db677bef72f4a3c23bc36931975f1dd636449760123->enter($__internal_c5bae7b905b87183ff724db677bef72f4a3c23bc36931975f1dd636449760123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
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
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_c5bae7b905b87183ff724db677bef72f4a3c23bc36931975f1dd636449760123->leave($__internal_c5bae7b905b87183ff724db677bef72f4a3c23bc36931975f1dd636449760123_prof);

        
        $__internal_2dc42b190bf33da5863418e710482d717a8728cdfeb2aa8ac5a840d579cc96e8->leave($__internal_2dc42b190bf33da5863418e710482d717a8728cdfeb2aa8ac5a840d579cc96e8_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b510004242178ee72a7660d33ebb68c97a750402e7655626fd15e564f64f83bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b510004242178ee72a7660d33ebb68c97a750402e7655626fd15e564f64f83bb->enter($__internal_b510004242178ee72a7660d33ebb68c97a750402e7655626fd15e564f64f83bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a9d9d52f7534f37f1ce5b5877c6c1f9ed6127cf9242c876ab0380a5580a3a365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d9d52f7534f37f1ce5b5877c6c1f9ed6127cf9242c876ab0380a5580a3a365->enter($__internal_a9d9d52f7534f37f1ce5b5877c6c1f9ed6127cf9242c876ab0380a5580a3a365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_a9d9d52f7534f37f1ce5b5877c6c1f9ed6127cf9242c876ab0380a5580a3a365->leave($__internal_a9d9d52f7534f37f1ce5b5877c6c1f9ed6127cf9242c876ab0380a5580a3a365_prof);

        
        $__internal_b510004242178ee72a7660d33ebb68c97a750402e7655626fd15e564f64f83bb->leave($__internal_b510004242178ee72a7660d33ebb68c97a750402e7655626fd15e564f64f83bb_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_df3d90d348495985a4f3f242c0362220e94ffafc26af73ee8283bc3d4d1c8f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3d90d348495985a4f3f242c0362220e94ffafc26af73ee8283bc3d4d1c8f3c->enter($__internal_df3d90d348495985a4f3f242c0362220e94ffafc26af73ee8283bc3d4d1c8f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a69a7b4ebc6eb59966c7da6bd0b40feb7d3dd8852c0f246c6b910e8fb090b258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69a7b4ebc6eb59966c7da6bd0b40feb7d3dd8852c0f246c6b910e8fb090b258->enter($__internal_a69a7b4ebc6eb59966c7da6bd0b40feb7d3dd8852c0f246c6b910e8fb090b258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_a69a7b4ebc6eb59966c7da6bd0b40feb7d3dd8852c0f246c6b910e8fb090b258->leave($__internal_a69a7b4ebc6eb59966c7da6bd0b40feb7d3dd8852c0f246c6b910e8fb090b258_prof);

        
        $__internal_df3d90d348495985a4f3f242c0362220e94ffafc26af73ee8283bc3d4d1c8f3c->leave($__internal_df3d90d348495985a4f3f242c0362220e94ffafc26af73ee8283bc3d4d1c8f3c_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_638188fc7af34f23f888d0da35ac26798e8b27dc69789fc7ba3ee3f5093b3ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638188fc7af34f23f888d0da35ac26798e8b27dc69789fc7ba3ee3f5093b3ffe->enter($__internal_638188fc7af34f23f888d0da35ac26798e8b27dc69789fc7ba3ee3f5093b3ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0eac54d207b3996a3405ec8111de2d4e9b732de8bc8545154a80722d7f5eec4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eac54d207b3996a3405ec8111de2d4e9b732de8bc8545154a80722d7f5eec4c->enter($__internal_0eac54d207b3996a3405ec8111de2d4e9b732de8bc8545154a80722d7f5eec4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0eac54d207b3996a3405ec8111de2d4e9b732de8bc8545154a80722d7f5eec4c->leave($__internal_0eac54d207b3996a3405ec8111de2d4e9b732de8bc8545154a80722d7f5eec4c_prof);

        
        $__internal_638188fc7af34f23f888d0da35ac26798e8b27dc69789fc7ba3ee3f5093b3ffe->leave($__internal_638188fc7af34f23f888d0da35ac26798e8b27dc69789fc7ba3ee3f5093b3ffe_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b99c1acd954c9f171b255286ed3612289f83c99218ec5f7f77fc40384941b255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99c1acd954c9f171b255286ed3612289f83c99218ec5f7f77fc40384941b255->enter($__internal_b99c1acd954c9f171b255286ed3612289f83c99218ec5f7f77fc40384941b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7311853f28e1821e3b07219a64108be9d37c26836cd5ffe0872d58a18be287d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7311853f28e1821e3b07219a64108be9d37c26836cd5ffe0872d58a18be287d1->enter($__internal_7311853f28e1821e3b07219a64108be9d37c26836cd5ffe0872d58a18be287d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7311853f28e1821e3b07219a64108be9d37c26836cd5ffe0872d58a18be287d1->leave($__internal_7311853f28e1821e3b07219a64108be9d37c26836cd5ffe0872d58a18be287d1_prof);

        
        $__internal_b99c1acd954c9f171b255286ed3612289f83c99218ec5f7f77fc40384941b255->leave($__internal_b99c1acd954c9f171b255286ed3612289f83c99218ec5f7f77fc40384941b255_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e176a2d33710c284b57e381d7c82b1362c65a4710755d0989564058b3c19c146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e176a2d33710c284b57e381d7c82b1362c65a4710755d0989564058b3c19c146->enter($__internal_e176a2d33710c284b57e381d7c82b1362c65a4710755d0989564058b3c19c146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0ce25bf288d06851d305d5cf79194c0d49c7180381fbce56336e1e17987dff95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce25bf288d06851d305d5cf79194c0d49c7180381fbce56336e1e17987dff95->enter($__internal_0ce25bf288d06851d305d5cf79194c0d49c7180381fbce56336e1e17987dff95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0ce25bf288d06851d305d5cf79194c0d49c7180381fbce56336e1e17987dff95->leave($__internal_0ce25bf288d06851d305d5cf79194c0d49c7180381fbce56336e1e17987dff95_prof);

        
        $__internal_e176a2d33710c284b57e381d7c82b1362c65a4710755d0989564058b3c19c146->leave($__internal_e176a2d33710c284b57e381d7c82b1362c65a4710755d0989564058b3c19c146_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1f9525250972f177322bfb5fc38d00496066d3e72aeff564dfabd10f1a520397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9525250972f177322bfb5fc38d00496066d3e72aeff564dfabd10f1a520397->enter($__internal_1f9525250972f177322bfb5fc38d00496066d3e72aeff564dfabd10f1a520397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_254a216e7bf127c30ae85493f72b8a3f4e3063b01a1e31343892d26ba3334b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254a216e7bf127c30ae85493f72b8a3f4e3063b01a1e31343892d26ba3334b9f->enter($__internal_254a216e7bf127c30ae85493f72b8a3f4e3063b01a1e31343892d26ba3334b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_254a216e7bf127c30ae85493f72b8a3f4e3063b01a1e31343892d26ba3334b9f->leave($__internal_254a216e7bf127c30ae85493f72b8a3f4e3063b01a1e31343892d26ba3334b9f_prof);

        
        $__internal_1f9525250972f177322bfb5fc38d00496066d3e72aeff564dfabd10f1a520397->leave($__internal_1f9525250972f177322bfb5fc38d00496066d3e72aeff564dfabd10f1a520397_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_812ddb01965d8ea7183999b35f8565e9e33c3b2e965cbb34789fee9353fa7699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812ddb01965d8ea7183999b35f8565e9e33c3b2e965cbb34789fee9353fa7699->enter($__internal_812ddb01965d8ea7183999b35f8565e9e33c3b2e965cbb34789fee9353fa7699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_81a38e1a131f6208dee805b90098b919c36667eddf4f2a8a24b58a53c6ee7849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a38e1a131f6208dee805b90098b919c36667eddf4f2a8a24b58a53c6ee7849->enter($__internal_81a38e1a131f6208dee805b90098b919c36667eddf4f2a8a24b58a53c6ee7849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_81a38e1a131f6208dee805b90098b919c36667eddf4f2a8a24b58a53c6ee7849->leave($__internal_81a38e1a131f6208dee805b90098b919c36667eddf4f2a8a24b58a53c6ee7849_prof);

        
        $__internal_812ddb01965d8ea7183999b35f8565e9e33c3b2e965cbb34789fee9353fa7699->leave($__internal_812ddb01965d8ea7183999b35f8565e9e33c3b2e965cbb34789fee9353fa7699_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4e20aae1c6706e44543b3ea0dcb006d68cf5b7a29edbb355e0d29021ac401d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e20aae1c6706e44543b3ea0dcb006d68cf5b7a29edbb355e0d29021ac401d20->enter($__internal_4e20aae1c6706e44543b3ea0dcb006d68cf5b7a29edbb355e0d29021ac401d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_490761d3f78d7aa457b3b702aa9ef2795e3c64c1cfe3a59ca164fb78f56105ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490761d3f78d7aa457b3b702aa9ef2795e3c64c1cfe3a59ca164fb78f56105ed->enter($__internal_490761d3f78d7aa457b3b702aa9ef2795e3c64c1cfe3a59ca164fb78f56105ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_490761d3f78d7aa457b3b702aa9ef2795e3c64c1cfe3a59ca164fb78f56105ed->leave($__internal_490761d3f78d7aa457b3b702aa9ef2795e3c64c1cfe3a59ca164fb78f56105ed_prof);

        
        $__internal_4e20aae1c6706e44543b3ea0dcb006d68cf5b7a29edbb355e0d29021ac401d20->leave($__internal_4e20aae1c6706e44543b3ea0dcb006d68cf5b7a29edbb355e0d29021ac401d20_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3e5809e78bd2a36298b7e41399f802b0eae55ce0b4a11282b5e9515d45337e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5809e78bd2a36298b7e41399f802b0eae55ce0b4a11282b5e9515d45337e8a->enter($__internal_3e5809e78bd2a36298b7e41399f802b0eae55ce0b4a11282b5e9515d45337e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_19d2f57233d9843897e6cb4ffdcfeff8329b489cd8d366c7a5674f1963f83782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d2f57233d9843897e6cb4ffdcfeff8329b489cd8d366c7a5674f1963f83782->enter($__internal_19d2f57233d9843897e6cb4ffdcfeff8329b489cd8d366c7a5674f1963f83782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_19d2f57233d9843897e6cb4ffdcfeff8329b489cd8d366c7a5674f1963f83782->leave($__internal_19d2f57233d9843897e6cb4ffdcfeff8329b489cd8d366c7a5674f1963f83782_prof);

        
        $__internal_3e5809e78bd2a36298b7e41399f802b0eae55ce0b4a11282b5e9515d45337e8a->leave($__internal_3e5809e78bd2a36298b7e41399f802b0eae55ce0b4a11282b5e9515d45337e8a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
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
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
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
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
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
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
