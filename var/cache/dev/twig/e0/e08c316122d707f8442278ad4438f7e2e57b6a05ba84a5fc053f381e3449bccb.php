<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_46cadd57cfb4c6ad58c3606eea9b631bd757fd50f395fbf3b82349d26cf627be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f31517bbb4c9cad41413cd92f20196613a2da3c8de8de704c745628f3ee97d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31517bbb4c9cad41413cd92f20196613a2da3c8de8de704c745628f3ee97d4a->enter($__internal_f31517bbb4c9cad41413cd92f20196613a2da3c8de8de704c745628f3ee97d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_55398e429aad1dc621a83f0cd6c0a0f890e5d4f7e6990154162fdbfd1fe3a1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55398e429aad1dc621a83f0cd6c0a0f890e5d4f7e6990154162fdbfd1fe3a1b0->enter($__internal_55398e429aad1dc621a83f0cd6c0a0f890e5d4f7e6990154162fdbfd1fe3a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));
=======
        $__internal_05a8e919d05fc2766971bd57a13010d5bd14e0f65b6af07e5ac49421bbfc39f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a8e919d05fc2766971bd57a13010d5bd14e0f65b6af07e5ac49421bbfc39f0->enter($__internal_05a8e919d05fc2766971bd57a13010d5bd14e0f65b6af07e5ac49421bbfc39f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_a062d9c1a12228c7f519f19be876f37704665d6bb668dca198cae816ddf757ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a062d9c1a12228c7f519f19be876f37704665d6bb668dca198cae816ddf757ac->enter($__internal_a062d9c1a12228c7f519f19be876f37704665d6bb668dca198cae816ddf757ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        // line 3
        $context["helper"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#999", "section" => "#444", "event_listener" => "#00B8F5", "event_listener_loading" => "#00B8F5", "template" => "#66CC00", "doctrine" => "#FF6633", "propel" => "#FF6633");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
<<<<<<< HEAD
        $__internal_f31517bbb4c9cad41413cd92f20196613a2da3c8de8de704c745628f3ee97d4a->leave($__internal_f31517bbb4c9cad41413cd92f20196613a2da3c8de8de704c745628f3ee97d4a_prof);

        
        $__internal_55398e429aad1dc621a83f0cd6c0a0f890e5d4f7e6990154162fdbfd1fe3a1b0->leave($__internal_55398e429aad1dc621a83f0cd6c0a0f890e5d4f7e6990154162fdbfd1fe3a1b0_prof);
=======
        $__internal_05a8e919d05fc2766971bd57a13010d5bd14e0f65b6af07e5ac49421bbfc39f0->leave($__internal_05a8e919d05fc2766971bd57a13010d5bd14e0f65b6af07e5ac49421bbfc39f0_prof);

        
        $__internal_a062d9c1a12228c7f519f19be876f37704665d6bb668dca198cae816ddf757ac->leave($__internal_a062d9c1a12228c7f519f19be876f37704665d6bb668dca198cae816ddf757ac_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

    }

    // line 17
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_8cc9443f4a1bd873eeab43faebc16d7712605f8cbf12fdbe02d4687b4cb78829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc9443f4a1bd873eeab43faebc16d7712605f8cbf12fdbe02d4687b4cb78829->enter($__internal_8cc9443f4a1bd873eeab43faebc16d7712605f8cbf12fdbe02d4687b4cb78829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0ed9e23eb6834ca2500accb13a10fa8d6139e85928d0817bdc50662f8693055b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed9e23eb6834ca2500accb13a10fa8d6139e85928d0817bdc50662f8693055b->enter($__internal_0ed9e23eb6834ca2500accb13a10fa8d6139e85928d0817bdc50662f8693055b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_26d6388ff89fadd1b56645fd10bf62a66844e14ed1c11cf44e9d8026e0068f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d6388ff89fadd1b56645fd10bf62a66844e14ed1c11cf44e9d8026e0068f8e->enter($__internal_26d6388ff89fadd1b56645fd10bf62a66844e14ed1c11cf44e9d8026e0068f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fbabe72a9947f4c048dc26318e70534ba2ad821bc314cf094f355bc3e4852b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbabe72a9947f4c048dc26318e70534ba2ad821bc314cf094f355bc3e4852b4f->enter($__internal_fbabe72a9947f4c048dc26318e70534ba2ad821bc314cf094f355bc3e4852b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        // line 18
        echo "    ";
        $context["total_time"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration", array()))) : ("n/a"));
        // line 19
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inittime", array()))) : ("n/a"));
        // line 20
        echo "    ";
        $context["status_color"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array())) && ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration", array()) > 1000))) ? ("yellow") : (""));
        // line 21
        echo "
    ";
        // line 22
        ob_start();
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["total_time"]) ? $context["total_time"] : $this->getContext($context, "total_time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        ob_start();
        // line 29
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["total_time"]) ? $context["total_time"] : $this->getContext($context, "total_time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["initialization_time"]) ? $context["initialization_time"] : $this->getContext($context, "initialization_time")), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_0ed9e23eb6834ca2500accb13a10fa8d6139e85928d0817bdc50662f8693055b->leave($__internal_0ed9e23eb6834ca2500accb13a10fa8d6139e85928d0817bdc50662f8693055b_prof);

        
        $__internal_8cc9443f4a1bd873eeab43faebc16d7712605f8cbf12fdbe02d4687b4cb78829->leave($__internal_8cc9443f4a1bd873eeab43faebc16d7712605f8cbf12fdbe02d4687b4cb78829_prof);
=======
        $__internal_fbabe72a9947f4c048dc26318e70534ba2ad821bc314cf094f355bc3e4852b4f->leave($__internal_fbabe72a9947f4c048dc26318e70534ba2ad821bc314cf094f355bc3e4852b4f_prof);

        
        $__internal_26d6388ff89fadd1b56645fd10bf62a66844e14ed1c11cf44e9d8026e0068f8e->leave($__internal_26d6388ff89fadd1b56645fd10bf62a66844e14ed1c11cf44e9d8026e0068f8e_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_c35aebb6e1f31f42d188bb210faa0981ef6f76f5e2a14a32374daa6b7cd75221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35aebb6e1f31f42d188bb210faa0981ef6f76f5e2a14a32374daa6b7cd75221->enter($__internal_c35aebb6e1f31f42d188bb210faa0981ef6f76f5e2a14a32374daa6b7cd75221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_10a21ed7f6504c71d1f44b155a643bdf8f3f957a9e1634939c67d0389d0d6361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a21ed7f6504c71d1f44b155a643bdf8f3f957a9e1634939c67d0389d0d6361->enter($__internal_10a21ed7f6504c71d1f44b155a643bdf8f3f957a9e1634939c67d0389d0d6361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_adcba8c2bf2685ec5a9a6b74e9065c523d8835555181db3e82ce0a3fb4109ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adcba8c2bf2685ec5a9a6b74e9065c523d8835555181db3e82ce0a3fb4109ca2->enter($__internal_adcba8c2bf2685ec5a9a6b74e9065c523d8835555181db3e82ce0a3fb4109ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aba91aabf3c0213c4aefe1a367b8398073aa90ac2d8aaa2636e7942dd5216237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba91aabf3c0213c4aefe1a367b8398073aa90ac2d8aaa2636e7942dd5216237->enter($__internal_aba91aabf3c0213c4aefe1a367b8398073aa90ac2d8aaa2636e7942dd5216237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        // line 43
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 44
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
<<<<<<< HEAD
        $__internal_10a21ed7f6504c71d1f44b155a643bdf8f3f957a9e1634939c67d0389d0d6361->leave($__internal_10a21ed7f6504c71d1f44b155a643bdf8f3f957a9e1634939c67d0389d0d6361_prof);

        
        $__internal_c35aebb6e1f31f42d188bb210faa0981ef6f76f5e2a14a32374daa6b7cd75221->leave($__internal_c35aebb6e1f31f42d188bb210faa0981ef6f76f5e2a14a32374daa6b7cd75221_prof);
=======
        $__internal_aba91aabf3c0213c4aefe1a367b8398073aa90ac2d8aaa2636e7942dd5216237->leave($__internal_aba91aabf3c0213c4aefe1a367b8398073aa90ac2d8aaa2636e7942dd5216237_prof);

        
        $__internal_adcba8c2bf2685ec5a9a6b74e9065c523d8835555181db3e82ce0a3fb4109ca2->leave($__internal_adcba8c2bf2685ec5a9a6b74e9065c523d8835555181db3e82ce0a3fb4109ca2_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_8533340e86e869b7e51ff7d5b042058cbbd728e8074b3320f50b2f7175d358f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8533340e86e869b7e51ff7d5b042058cbbd728e8074b3320f50b2f7175d358f9->enter($__internal_8533340e86e869b7e51ff7d5b042058cbbd728e8074b3320f50b2f7175d358f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5bd38f868b66c7807ce98551ebcbf09a3bda66df7404ce840b85a41580052c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd38f868b66c7807ce98551ebcbf09a3bda66df7404ce840b85a41580052c17->enter($__internal_5bd38f868b66c7807ce98551ebcbf09a3bda66df7404ce840b85a41580052c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_955ac6170b8ff1340effb2f796076b79d0d6d36930668ed0be064f9d10703dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955ac6170b8ff1340effb2f796076b79d0d6d36930668ed0be064f9d10703dca->enter($__internal_955ac6170b8ff1340effb2f796076b79d0d6d36930668ed0be064f9d10703dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2105e9150804106ab8abf18c52ede00bbe661db3a8055f1dc70fdedcbcfba180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2105e9150804106ab8abf18c52ede00bbe661db3a8055f1dc70fdedcbcfba180->enter($__internal_2105e9150804106ab8abf18c52ede00bbe661db3a8055f1dc70fdedcbcfba180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        // line 50
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 54
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 59
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inittime", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 63
        if ($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "collectors", array()), "memory", array())) {
            // line 64
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, sprintf("%.2f", (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "collectors", array()), "memory", array()), "memory", array()) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 71
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 75
            echo (((twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 78
            $context["subrequests_time"] = 0;
            // line 79
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "                ";
                $context["subrequests_time"] = ((isset($context["subrequests_time"]) ? $context["subrequests_time"] : $this->getContext($context, "subrequests_time")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), "__section__", array()), "duration", array()));
                // line 81
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["subrequests_time"]) ? $context["subrequests_time"] : $this->getContext($context, "subrequests_time")), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 85
            echo (((twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 88
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 92
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()))) {
            // line 93
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    ";
        } else {
            // line 97
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
<<<<<<< HEAD
        $__internal_5bd38f868b66c7807ce98551ebcbf09a3bda66df7404ce840b85a41580052c17->leave($__internal_5bd38f868b66c7807ce98551ebcbf09a3bda66df7404ce840b85a41580052c17_prof);

        
        $__internal_8533340e86e869b7e51ff7d5b042058cbbd728e8074b3320f50b2f7175d358f9->leave($__internal_8533340e86e869b7e51ff7d5b042058cbbd728e8074b3320f50b2f7175d358f9_prof);
=======
        $__internal_2105e9150804106ab8abf18c52ede00bbe661db3a8055f1dc70fdedcbcfba180->leave($__internal_2105e9150804106ab8abf18c52ede00bbe661db3a8055f1dc70fdedcbcfba180_prof);

        
        $__internal_955ac6170b8ff1340effb2f796076b79d0d6d36930668ed0be064f9d10703dca->leave($__internal_955ac6170b8ff1340effb2f796076b79d0d6d36930668ed0be064f9d10703dca_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

    }

    // line 101
    public function block_panelContent($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_a46d3a71e53fe6fe0b3d18876344d7aaf3ad483115da4627af96c6fb380002cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46d3a71e53fe6fe0b3d18876344d7aaf3ad483115da4627af96c6fb380002cd->enter($__internal_a46d3a71e53fe6fe0b3d18876344d7aaf3ad483115da4627af96c6fb380002cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_c1c5d2dd504f3b02d83799f2ef0845f0a9d3eff0d5cd34d83787bc4d413ecdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c5d2dd504f3b02d83799f2ef0845f0a9d3eff0d5cd34d83787bc4d413ecdef->enter($__internal_c1c5d2dd504f3b02d83799f2ef0845f0a9d3eff0d5cd34d83787bc4d413ecdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));
=======
        $__internal_e86023077e1757098a4b9d1d2d22e1195b8a93fc866753ffdde5812b402622a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86023077e1757098a4b9d1d2d22e1195b8a93fc866753ffdde5812b402622a8->enter($__internal_e86023077e1757098a4b9d1d2d22e1195b8a93fc866753ffdde5812b402622a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_c603372e6c611fa52b20008c287d438a49cc5789bd6e4bf84cc2f80d2c6f3d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c603372e6c611fa52b20008c287d438a49cc5789bd6e4bf84cc2f80d2c6f3d35->enter($__internal_c603372e6c611fa52b20008c287d438a49cc5789bd6e4bf84cc2f80d2c6f3d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        // line 102
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 109
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array())) {
            // line 110
            echo "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 111
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method")));
            echo "
            <small>
                ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 117
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 118
            echo "        <h3>
            Main Request <small>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 122
        echo "
    ";
        // line 123
        echo $context["helper"]->getdisplay_timeline(("timeline_" . (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo "

    ";
        // line 125
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()))) {
            // line 126
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 128
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo ")</small></h3>

        ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 131
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array());
                // line 132
                echo "            <h4>
                <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "identifier", array()), "html", null, true);
                echo "</a>
                <small>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 137
                echo $context["helper"]->getdisplay_timeline(("timeline_" . $this->getAttribute($context["child"], "token", array())), (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "    ";
        }
        // line 140
        echo "
    <script>";
        // line 141
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 183
        echo twig_jsonencode_filter((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 456
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 458
        echo $context["helper"]->getdump_request_data((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), (isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 460
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()))) {
            // line 461
            echo "                ,
";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 463
                echo $context["helper"]->getdump_request_data($this->getAttribute($context["child"], "token", array()), $context["child"], $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 466
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 498
        echo "</script>
";
        
<<<<<<< HEAD
        $__internal_c1c5d2dd504f3b02d83799f2ef0845f0a9d3eff0d5cd34d83787bc4d413ecdef->leave($__internal_c1c5d2dd504f3b02d83799f2ef0845f0a9d3eff0d5cd34d83787bc4d413ecdef_prof);

        
        $__internal_a46d3a71e53fe6fe0b3d18876344d7aaf3ad483115da4627af96c6fb380002cd->leave($__internal_a46d3a71e53fe6fe0b3d18876344d7aaf3ad483115da4627af96c6fb380002cd_prof);
=======
        $__internal_c603372e6c611fa52b20008c287d438a49cc5789bd6e4bf84cc2f80d2c6f3d35->leave($__internal_c603372e6c611fa52b20008c287d438a49cc5789bd6e4bf84cc2f80d2c6f3d35_prof);

        
        $__internal_e86023077e1757098a4b9d1d2d22e1195b8a93fc866753ffdde5812b402622a8->leave($__internal_e86023077e1757098a4b9d1d2d22e1195b8a93fc866753ffdde5812b402622a8_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

    }

    // line 501
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
<<<<<<< HEAD
            $__internal_05e46faf16a042cc6cac34f2cf5e8b7077c8889dc06574deac59ba68a34bc68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_05e46faf16a042cc6cac34f2cf5e8b7077c8889dc06574deac59ba68a34bc68c->enter($__internal_05e46faf16a042cc6cac34f2cf5e8b7077c8889dc06574deac59ba68a34bc68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_abdc0f5c62aa236753e3eee59de4c73fd5acd57b4ef3eb2718a00a596299e5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_abdc0f5c62aa236753e3eee59de4c73fd5acd57b4ef3eb2718a00a596299e5d7->enter($__internal_abdc0f5c62aa236753e3eee59de4c73fd5acd57b4ef3eb2718a00a596299e5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 503
            $context["__internal_5509c75346c423179d1eaef19eba7de9c48e18c582832813001c06cd6c1509eb"] = $this;
=======
            $__internal_c01d8cf3993f1776c2fb16544a4f371308a398b06889f843304e3dcdcd99876f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c01d8cf3993f1776c2fb16544a4f371308a398b06889f843304e3dcdcd99876f->enter($__internal_c01d8cf3993f1776c2fb16544a4f371308a398b06889f843304e3dcdcd99876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_7a0b03e50879b6bada2874af871ced57deb96f66efc10923c79b012f960e74ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7a0b03e50879b6bada2874af871ced57deb96f66efc10923c79b012f960e74ae->enter($__internal_7a0b03e50879b6bada2874af871ced57deb96f66efc10923c79b012f960e74ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 503
            $context["__internal_c4099b4caddc88e978302e55ab357bbca84cf1d06dffbbd486840401ae45db0c"] = $this;
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b
            // line 504
            echo "                {
                    \"id\": \"";
            // line 505
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 506
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__", array()), "origin", array()) - (isset($context["origin"]) ? $context["origin"] : $this->getContext($context, "origin")))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 508
<<<<<<< HEAD
            echo $context["__internal_5509c75346c423179d1eaef19eba7de9c48e18c582832813001c06cd6c1509eb"]->getdump_events((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
=======
            echo $context["__internal_c4099b4caddc88e978302e55ab357bbca84cf1d06dffbbd486840401ae45db0c"]->getdump_events((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b
            echo "
                    ]
                }
";
            
<<<<<<< HEAD
            $__internal_abdc0f5c62aa236753e3eee59de4c73fd5acd57b4ef3eb2718a00a596299e5d7->leave($__internal_abdc0f5c62aa236753e3eee59de4c73fd5acd57b4ef3eb2718a00a596299e5d7_prof);

            
            $__internal_05e46faf16a042cc6cac34f2cf5e8b7077c8889dc06574deac59ba68a34bc68c->leave($__internal_05e46faf16a042cc6cac34f2cf5e8b7077c8889dc06574deac59ba68a34bc68c_prof);
=======
            $__internal_7a0b03e50879b6bada2874af871ced57deb96f66efc10923c79b012f960e74ae->leave($__internal_7a0b03e50879b6bada2874af871ced57deb96f66efc10923c79b012f960e74ae_prof);

            
            $__internal_c01d8cf3993f1776c2fb16544a4f371308a398b06889f843304e3dcdcd99876f->leave($__internal_c01d8cf3993f1776c2fb16544a4f371308a398b06889f843304e3dcdcd99876f_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 514
    public function getdump_events($__events__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
<<<<<<< HEAD
            $__internal_ddf1d625721b23c06da4da00789d5a4267df745da4bec86ad077b99f96163a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ddf1d625721b23c06da4da00789d5a4267df745da4bec86ad077b99f96163a72->enter($__internal_ddf1d625721b23c06da4da00789d5a4267df745da4bec86ad077b99f96163a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_0ef2469a89b0aca7a47037e9c0f361ab32c6f3b0f745fe1e84ac340aa6ff6b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0ef2469a89b0aca7a47037e9c0f361ab32c6f3b0f745fe1e84ac340aa6ff6b21->enter($__internal_0ef2469a89b0aca7a47037e9c0f361ab32c6f3b0f745fe1e84ac340aa6ff6b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));
=======
            $__internal_1276f085645262c5850e0ba96063abbe91050a3b7d354534dc5e2b868625ac7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1276f085645262c5850e0ba96063abbe91050a3b7d354534dc5e2b868625ac7d->enter($__internal_1276f085645262c5850e0ba96063abbe91050a3b7d354534dc5e2b868625ac7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_fc0e913389754b1712328d6471b2536d26667e16bc2b02bc9e0d0d0072fc384f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fc0e913389754b1712328d6471b2536d26667e16bc2b02bc9e0d0d0072fc384f->enter($__internal_fc0e913389754b1712328d6471b2536d26667e16bc2b02bc9e0d0d0072fc384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
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
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 517
                if (("__section__" != $context["name"])) {
                    // line 518
                    echo "                        {
                            \"name\": \"";
                    // line 519
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 520
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 521
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 522
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 523
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 524
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 525
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($context["event"], "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 527
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "periods", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 528
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "endtime", array())), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 530
                    echo "]
                        }";
                    // line 531
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                    echo "
";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
<<<<<<< HEAD
            $__internal_0ef2469a89b0aca7a47037e9c0f361ab32c6f3b0f745fe1e84ac340aa6ff6b21->leave($__internal_0ef2469a89b0aca7a47037e9c0f361ab32c6f3b0f745fe1e84ac340aa6ff6b21_prof);

            
            $__internal_ddf1d625721b23c06da4da00789d5a4267df745da4bec86ad077b99f96163a72->leave($__internal_ddf1d625721b23c06da4da00789d5a4267df745da4bec86ad077b99f96163a72_prof);
=======
            $__internal_fc0e913389754b1712328d6471b2536d26667e16bc2b02bc9e0d0d0072fc384f->leave($__internal_fc0e913389754b1712328d6471b2536d26667e16bc2b02bc9e0d0d0072fc384f_prof);

            
            $__internal_1276f085645262c5850e0ba96063abbe91050a3b7d354534dc5e2b868625ac7d->leave($__internal_1276f085645262c5850e0ba96063abbe91050a3b7d354534dc5e2b868625ac7d_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 537
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
<<<<<<< HEAD
            $__internal_53ea7d4851526cd237000c6d0146c6e06882e9253d8ba0911d7b2506d3db76fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_53ea7d4851526cd237000c6d0146c6e06882e9253d8ba0911d7b2506d3db76fe->enter($__internal_53ea7d4851526cd237000c6d0146c6e06882e9253d8ba0911d7b2506d3db76fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_29dd6298fba732adc4cab2e5be79c0fb95209c93fbf82e989ec65e2a71f46bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_29dd6298fba732adc4cab2e5be79c0fb95209c93fbf82e989ec65e2a71f46bf3->enter($__internal_29dd6298fba732adc4cab2e5be79c0fb95209c93fbf82e989ec65e2a71f46bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));
=======
            $__internal_a56ab982107266e0eff51d8c2a3611645c17349636cf1d4ce321d1de8da15fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a56ab982107266e0eff51d8c2a3611645c17349636cf1d4ce321d1de8da15fd6->enter($__internal_a56ab982107266e0eff51d8c2a3611645c17349636cf1d4ce321d1de8da15fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_3e295799bf01a41194cdcb667e0ac889037b83dc3a52246c25c76f5e93ff887f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3e295799bf01a41194cdcb667e0ac889037b83dc3a52246c25c76f5e93ff887f->enter($__internal_3e295799bf01a41194cdcb667e0ac889037b83dc3a52246c25c76f5e93ff887f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

            // line 538
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 540
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 541
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 543
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 544
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
            
<<<<<<< HEAD
            $__internal_29dd6298fba732adc4cab2e5be79c0fb95209c93fbf82e989ec65e2a71f46bf3->leave($__internal_29dd6298fba732adc4cab2e5be79c0fb95209c93fbf82e989ec65e2a71f46bf3_prof);

            
            $__internal_53ea7d4851526cd237000c6d0146c6e06882e9253d8ba0911d7b2506d3db76fe->leave($__internal_53ea7d4851526cd237000c6d0146c6e06882e9253d8ba0911d7b2506d3db76fe_prof);
=======
            $__internal_3e295799bf01a41194cdcb667e0ac889037b83dc3a52246c25c76f5e93ff887f->leave($__internal_3e295799bf01a41194cdcb667e0ac889037b83dc3a52246c25c76f5e93ff887f_prof);

            
            $__internal_a56ab982107266e0eff51d8c2a3611645c17349636cf1d4ce321d1de8da15fd6->leave($__internal_a56ab982107266e0eff51d8c2a3611645c17349636cf1d4ce321d1de8da15fd6_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1032 => 544,  1029 => 543,  1018 => 541,  1014 => 540,  1010 => 538,  990 => 537,  954 => 531,  951 => 530,  932 => 528,  915 => 527,  911 => 525,  907 => 524,  903 => 523,  899 => 522,  895 => 521,  891 => 520,  887 => 519,  884 => 518,  882 => 517,  865 => 516,  847 => 514,  822 => 508,  817 => 506,  813 => 505,  810 => 504,  808 => 503,  787 => 501,  776 => 498,  742 => 466,  724 => 463,  707 => 462,  704 => 461,  702 => 460,  697 => 458,  692 => 456,  416 => 183,  372 => 141,  369 => 140,  366 => 139,  358 => 137,  352 => 134,  346 => 133,  343 => 132,  340 => 131,  336 => 130,  331 => 128,  327 => 126,  325 => 125,  320 => 123,  317 => 122,  311 => 119,  308 => 118,  306 => 117,  300 => 114,  296 => 113,  291 => 111,  288 => 110,  286 => 109,  277 => 102,  268 => 101,  254 => 97,  248 => 93,  246 => 92,  240 => 88,  234 => 85,  230 => 84,  226 => 82,  220 => 81,  217 => 80,  212 => 79,  210 => 78,  204 => 75,  200 => 74,  195 => 71,  193 => 70,  190 => 69,  183 => 65,  180 => 64,  178 => 63,  171 => 59,  163 => 54,  157 => 50,  148 => 49,  134 => 44,  131 => 43,  122 => 42,  110 => 39,  107 => 38,  101 => 35,  94 => 31,  90 => 29,  88 => 28,  85 => 27,  79 => 24,  74 => 23,  72 => 22,  69 => 21,  66 => 20,  63 => 19,  60 => 18,  51 => 17,  41 => 1,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% if colors is not defined %}
    {% set colors = {
        'default':                '#999',
        'section':                '#444',
        'event_listener':         '#00B8F5',
        'event_listener_loading': '#00B8F5',
        'template':               '#66CC00',
        'doctrine':               '#FF6633',
        'propel':                 '#FF6633',
    } %}
{% endif %}

{% block toolbar %}
    {% set total_time = collector.events|length ? '%.0f'|format(collector.duration) : 'n/a' %}
    {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}
    {% set status_color = collector.events|length and collector.duration > 1000 ? 'yellow' : '' %}

    {% set icon %}
        {{ include('@WebProfiler/Icon/time.svg') }}
        <span class=\"sf-toolbar-value\">{{ total_time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ total_time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>{{ initialization_time }} ms</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/time.svg') }}</span>
        <strong>Performance</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.duration) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.inittime) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        {% if profile.collectors.memory %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%.2f'|format(profile.collectors.memory.memory / 1024 / 1024) }} <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        {% endif %}

        {% if profile.children|length > 0 %}
            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">{{ profile.children|length }}</span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }}</span>
            </div>

            {% set subrequests_time = 0 %}
            {% for child in profile.children %}
                {% set subrequests_time = subrequests_time + child.getcollector('time').events.__section__.duration %}
            {% endfor %}

            <div class=\"metric\">
                <span class=\"value\">{{ subrequests_time }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }} time</span>
            </div>
        {% endif %}
    </div>

    <h2>Execution timeline</h2>

    {% if collector.events is empty %}
        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    {% if profile.parent %}
        <h3 class=\"dump-inline\">
            Sub-Request {{ profiler_dump(profile.getcollector('request').requestattributes.get('_controller')) }}
            <small>
                {{ collector.events.__section__.duration }} ms
                <a class=\"newline\" href=\"{{ path('_profiler', { token: profile.parent.token, panel: 'time' }) }}\">Return to parent request</a>
            </small>
        </h3>
    {% elseif profile.children|length > 0 %}
        <h3>
            Main Request <small>{{ collector.events.__section__.duration }} ms</small>
        </h3>
    {% endif %}

    {{ helper.display_timeline('timeline_' ~ token, collector.events, colors) }}

    {% if profile.children|length %}
        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>({{ profile.children|length }})</small></h3>

        {% for child in profile.children %}
            {% set events = child.getcollector('time').events %}
            <h4>
                <a href=\"{{ path('_profiler', { token: child.token, panel: 'time' }) }}\">{{ child.getcollector('request').identifier }}</a>
                <small>{{ events.__section__.duration }} ms</small>
            </h4>

            {{ helper.display_timeline('timeline_' ~ child.token, events, colors) }}
        {% endfor %}
    {% endif %}

    <script>{% autoescape 'js' %}//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = {{ colors|json_encode|raw }},
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": {{ \"%F\"|format(collector.events.__section__.endtime) }},
            \"requests\": [
{{ helper.dump_request_data(token, profile, collector.events, collector.events.__section__.origin) }}

{% if profile.children|length %}
                ,
{% for child in profile.children %}
{{ helper.dump_request_data(child.token, child, child.getcollector('time').events, collector.events.__section__.origin) }}{{ loop.last ? '' : ',' }}
{% endfor %}
{% endif %}
            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>{% endautoescape %}</script>
{% endblock %}

{% macro dump_request_data(token, profile, events, origin) %}
{% autoescape 'js' %}
{% from _self import dump_events %}
                {
                    \"id\": \"{{ token }}\",
                    \"left\": {{ \"%F\"|format(events.__section__.origin - origin) }},
                    \"events\": [
{{ dump_events(events) }}
                    ]
                }
{% endautoescape %}
{% endmacro %}

{% macro dump_events(events) %}
{% autoescape 'js' %}
{% for name, event in events %}
{% if '__section__' != name %}
                        {
                            \"name\": \"{{ name }}\",
                            \"category\": \"{{ event.category }}\",
                            \"origin\": {{ \"%F\"|format(event.origin) }},
                            \"starttime\": {{ \"%F\"|format(event.starttime) }},
                            \"endtime\": {{ \"%F\"|format(event.endtime) }},
                            \"duration\": {{ \"%F\"|format(event.duration) }},
                            \"memory\": {{ \"%.1F\"|format(event.memory / 1024 / 1024) }},
                            \"periods\": [
                                {%- for period in event.periods -%}
                                    {\"start\": {{ \"%F\"|format(period.starttime) }}, \"end\": {{ \"%F\"|format(period.endtime) }}}{{ loop.last ? '' : ', ' }}
                                {%- endfor -%}
                            ]
                        }{{ loop.last ? '' : ',' }}
{% endif %}
{% endfor %}
{% endautoescape %}
{% endmacro %}

{% macro display_timeline(id, events, colors) %}
    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            {% for category, color in colors %}
                <span data-color=\"{{ color }}\">{{ category }}</span>
            {% endfor %}
        </div>
        <canvas width=\"680\" height=\"\" id=\"{{ id }}\" class=\"timeline\"></canvas>
    </div>
{% endmacro %}
<<<<<<< HEAD
", "@WebProfiler/Collector/time.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\time.html.twig");
=======
", "@WebProfiler/Collector/time.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\time.html.twig");
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b
    }
}