<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_8c233cb59d9b701ff049939e3a8f9b9288de8c5c074cbc0c73a9243e49b83121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1792bd8fc045d837422b929e93444dd15c7ab44ba35a7989529a9b2c2e21aff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1792bd8fc045d837422b929e93444dd15c7ab44ba35a7989529a9b2c2e21aff2->enter($__internal_1792bd8fc045d837422b929e93444dd15c7ab44ba35a7989529a9b2c2e21aff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_404672f0534798b517795c41753148bb07c668ab420fb8121694e17af4a5ac45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404672f0534798b517795c41753148bb07c668ab420fb8121694e17af4a5ac45->enter($__internal_404672f0534798b517795c41753148bb07c668ab420fb8121694e17af4a5ac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_1792bd8fc045d837422b929e93444dd15c7ab44ba35a7989529a9b2c2e21aff2->leave($__internal_1792bd8fc045d837422b929e93444dd15c7ab44ba35a7989529a9b2c2e21aff2_prof);

        
        $__internal_404672f0534798b517795c41753148bb07c668ab420fb8121694e17af4a5ac45->leave($__internal_404672f0534798b517795c41753148bb07c668ab420fb8121694e17af4a5ac45_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_60e487d554aa7b00fa80131b6935a45b110a7a4ebb7c5ff9661f208e7ca975da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e487d554aa7b00fa80131b6935a45b110a7a4ebb7c5ff9661f208e7ca975da->enter($__internal_60e487d554aa7b00fa80131b6935a45b110a7a4ebb7c5ff9661f208e7ca975da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d12208267536cfdd536c02b4ed6e2da29a2a928b8b61ecaa96734d42353cd18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12208267536cfdd536c02b4ed6e2da29a2a928b8b61ecaa96734d42353cd18a->enter($__internal_d12208267536cfdd536c02b4ed6e2da29a2a928b8b61ecaa96734d42353cd18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d12208267536cfdd536c02b4ed6e2da29a2a928b8b61ecaa96734d42353cd18a->leave($__internal_d12208267536cfdd536c02b4ed6e2da29a2a928b8b61ecaa96734d42353cd18a_prof);

        
        $__internal_60e487d554aa7b00fa80131b6935a45b110a7a4ebb7c5ff9661f208e7ca975da->leave($__internal_60e487d554aa7b00fa80131b6935a45b110a7a4ebb7c5ff9661f208e7ca975da_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f31f8a3fc9f0c9e1387934d5c99f59771c4176971b3bb8ad2ce2fed13575c0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31f8a3fc9f0c9e1387934d5c99f59771c4176971b3bb8ad2ce2fed13575c0fe->enter($__internal_f31f8a3fc9f0c9e1387934d5c99f59771c4176971b3bb8ad2ce2fed13575c0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_bde6583cfdbbb75aa500d6d8ad85fb216e4be19ca58b7894b5dd66927438efb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde6583cfdbbb75aa500d6d8ad85fb216e4be19ca58b7894b5dd66927438efb3->enter($__internal_bde6583cfdbbb75aa500d6d8ad85fb216e4be19ca58b7894b5dd66927438efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bde6583cfdbbb75aa500d6d8ad85fb216e4be19ca58b7894b5dd66927438efb3->leave($__internal_bde6583cfdbbb75aa500d6d8ad85fb216e4be19ca58b7894b5dd66927438efb3_prof);

        
        $__internal_f31f8a3fc9f0c9e1387934d5c99f59771c4176971b3bb8ad2ce2fed13575c0fe->leave($__internal_f31f8a3fc9f0c9e1387934d5c99f59771c4176971b3bb8ad2ce2fed13575c0fe_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_5baf480563cfe09edb21fb6c13525959fa5bcb64781a144f6dd685178547f351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5baf480563cfe09edb21fb6c13525959fa5bcb64781a144f6dd685178547f351->enter($__internal_5baf480563cfe09edb21fb6c13525959fa5bcb64781a144f6dd685178547f351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7889c71d835abafbff0359ff53218587e54bd1b88acfd9cc764b5a870e44a12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7889c71d835abafbff0359ff53218587e54bd1b88acfd9cc764b5a870e44a12c->enter($__internal_7889c71d835abafbff0359ff53218587e54bd1b88acfd9cc764b5a870e44a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_7889c71d835abafbff0359ff53218587e54bd1b88acfd9cc764b5a870e44a12c->leave($__internal_7889c71d835abafbff0359ff53218587e54bd1b88acfd9cc764b5a870e44a12c_prof);

        
        $__internal_5baf480563cfe09edb21fb6c13525959fa5bcb64781a144f6dd685178547f351->leave($__internal_5baf480563cfe09edb21fb6c13525959fa5bcb64781a144f6dd685178547f351_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_98aa203baec8af2cbc80dbaf498163eb9d6c14ed20c23ac31640c0a657a72a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98aa203baec8af2cbc80dbaf498163eb9d6c14ed20c23ac31640c0a657a72a9f->enter($__internal_98aa203baec8af2cbc80dbaf498163eb9d6c14ed20c23ac31640c0a657a72a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5a403b4ced20e6986cc3f947c49a42688dc8d8674c1a0ebcab55b700823ab2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a403b4ced20e6986cc3f947c49a42688dc8d8674c1a0ebcab55b700823ab2c8->enter($__internal_5a403b4ced20e6986cc3f947c49a42688dc8d8674c1a0ebcab55b700823ab2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_5a403b4ced20e6986cc3f947c49a42688dc8d8674c1a0ebcab55b700823ab2c8->leave($__internal_5a403b4ced20e6986cc3f947c49a42688dc8d8674c1a0ebcab55b700823ab2c8_prof);

        
        $__internal_98aa203baec8af2cbc80dbaf498163eb9d6c14ed20c23ac31640c0a657a72a9f->leave($__internal_98aa203baec8af2cbc80dbaf498163eb9d6c14ed20c23ac31640c0a657a72a9f_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_77caf7302b0871362ab708bda8096fb328c89ef2cc365282a9d4c930243beeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77caf7302b0871362ab708bda8096fb328c89ef2cc365282a9d4c930243beeff->enter($__internal_77caf7302b0871362ab708bda8096fb328c89ef2cc365282a9d4c930243beeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8898a1b82ff5ebd24c2ebb30d9201830269430fecb50617475ed8d672c9a5eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8898a1b82ff5ebd24c2ebb30d9201830269430fecb50617475ed8d672c9a5eb6->enter($__internal_8898a1b82ff5ebd24c2ebb30d9201830269430fecb50617475ed8d672c9a5eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_8898a1b82ff5ebd24c2ebb30d9201830269430fecb50617475ed8d672c9a5eb6->leave($__internal_8898a1b82ff5ebd24c2ebb30d9201830269430fecb50617475ed8d672c9a5eb6_prof);

        
        $__internal_77caf7302b0871362ab708bda8096fb328c89ef2cc365282a9d4c930243beeff->leave($__internal_77caf7302b0871362ab708bda8096fb328c89ef2cc365282a9d4c930243beeff_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_19ffa6f7003fd153e36e497b833097c4f763507da8b14ba228fd0d1104d0e764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ffa6f7003fd153e36e497b833097c4f763507da8b14ba228fd0d1104d0e764->enter($__internal_19ffa6f7003fd153e36e497b833097c4f763507da8b14ba228fd0d1104d0e764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_1b997b8a53566b076bf651c985c36242a0965aecd84eb868bd855fb807f4094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b997b8a53566b076bf651c985c36242a0965aecd84eb868bd855fb807f4094d->enter($__internal_1b997b8a53566b076bf651c985c36242a0965aecd84eb868bd855fb807f4094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_1b997b8a53566b076bf651c985c36242a0965aecd84eb868bd855fb807f4094d->leave($__internal_1b997b8a53566b076bf651c985c36242a0965aecd84eb868bd855fb807f4094d_prof);

        
        $__internal_19ffa6f7003fd153e36e497b833097c4f763507da8b14ba228fd0d1104d0e764->leave($__internal_19ffa6f7003fd153e36e497b833097c4f763507da8b14ba228fd0d1104d0e764_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a4ed12408f8cd70b2952db9432edf2b9821626c321eb218ec09d16f7976624e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ed12408f8cd70b2952db9432edf2b9821626c321eb218ec09d16f7976624e1->enter($__internal_a4ed12408f8cd70b2952db9432edf2b9821626c321eb218ec09d16f7976624e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_91c3a73324132723660273b14f9198620b58810ae4f4df5ea312f304d4a07a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c3a73324132723660273b14f9198620b58810ae4f4df5ea312f304d4a07a4c->enter($__internal_91c3a73324132723660273b14f9198620b58810ae4f4df5ea312f304d4a07a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_91c3a73324132723660273b14f9198620b58810ae4f4df5ea312f304d4a07a4c->leave($__internal_91c3a73324132723660273b14f9198620b58810ae4f4df5ea312f304d4a07a4c_prof);

        
        $__internal_a4ed12408f8cd70b2952db9432edf2b9821626c321eb218ec09d16f7976624e1->leave($__internal_a4ed12408f8cd70b2952db9432edf2b9821626c321eb218ec09d16f7976624e1_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_40e6ea4bf08f0849b72cf381acf27cda169edfc461ccc5f030deba33dbd0a235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e6ea4bf08f0849b72cf381acf27cda169edfc461ccc5f030deba33dbd0a235->enter($__internal_40e6ea4bf08f0849b72cf381acf27cda169edfc461ccc5f030deba33dbd0a235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_1c81a04540ab9277cd56660d65eb028a6643205312b09f9ce55955c284f9bf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c81a04540ab9277cd56660d65eb028a6643205312b09f9ce55955c284f9bf9b->enter($__internal_1c81a04540ab9277cd56660d65eb028a6643205312b09f9ce55955c284f9bf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1c81a04540ab9277cd56660d65eb028a6643205312b09f9ce55955c284f9bf9b->leave($__internal_1c81a04540ab9277cd56660d65eb028a6643205312b09f9ce55955c284f9bf9b_prof);

        
        $__internal_40e6ea4bf08f0849b72cf381acf27cda169edfc461ccc5f030deba33dbd0a235->leave($__internal_40e6ea4bf08f0849b72cf381acf27cda169edfc461ccc5f030deba33dbd0a235_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_76cb358edb4a2178770ec7a4a5a6c8e89c597e2b6fc604475a465a4caa6c760b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76cb358edb4a2178770ec7a4a5a6c8e89c597e2b6fc604475a465a4caa6c760b->enter($__internal_76cb358edb4a2178770ec7a4a5a6c8e89c597e2b6fc604475a465a4caa6c760b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_86c3bb9fe49c6c4dadee75b0ac58ac8b33126d9499f5645b2523ba796324764c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c3bb9fe49c6c4dadee75b0ac58ac8b33126d9499f5645b2523ba796324764c->enter($__internal_86c3bb9fe49c6c4dadee75b0ac58ac8b33126d9499f5645b2523ba796324764c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_86c3bb9fe49c6c4dadee75b0ac58ac8b33126d9499f5645b2523ba796324764c->leave($__internal_86c3bb9fe49c6c4dadee75b0ac58ac8b33126d9499f5645b2523ba796324764c_prof);

        
        $__internal_76cb358edb4a2178770ec7a4a5a6c8e89c597e2b6fc604475a465a4caa6c760b->leave($__internal_76cb358edb4a2178770ec7a4a5a6c8e89c597e2b6fc604475a465a4caa6c760b_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4d0a34180af4ceea06b8936fbe1fa5cfd23759c2e2c40f75d06eaaaa111b2536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0a34180af4ceea06b8936fbe1fa5cfd23759c2e2c40f75d06eaaaa111b2536->enter($__internal_4d0a34180af4ceea06b8936fbe1fa5cfd23759c2e2c40f75d06eaaaa111b2536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a8eb7bc41d774597128b7d46364d708f84062825e0812942ba6cc29e98ab1a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8eb7bc41d774597128b7d46364d708f84062825e0812942ba6cc29e98ab1a6e->enter($__internal_a8eb7bc41d774597128b7d46364d708f84062825e0812942ba6cc29e98ab1a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_a8eb7bc41d774597128b7d46364d708f84062825e0812942ba6cc29e98ab1a6e->leave($__internal_a8eb7bc41d774597128b7d46364d708f84062825e0812942ba6cc29e98ab1a6e_prof);

        
        $__internal_4d0a34180af4ceea06b8936fbe1fa5cfd23759c2e2c40f75d06eaaaa111b2536->leave($__internal_4d0a34180af4ceea06b8936fbe1fa5cfd23759c2e2c40f75d06eaaaa111b2536_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
