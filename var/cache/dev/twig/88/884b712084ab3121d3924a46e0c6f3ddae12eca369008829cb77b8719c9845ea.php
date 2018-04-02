<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_93906083fe60f27d2d110d96e9453fae7e0c34d6f4f7b6de011057b6734f722e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f091b30419640f061b22fd7981e2ccec2fb1dc26473c0c4edddab0b225024b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f091b30419640f061b22fd7981e2ccec2fb1dc26473c0c4edddab0b225024b18->enter($__internal_f091b30419640f061b22fd7981e2ccec2fb1dc26473c0c4edddab0b225024b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_24bcf8974029680c4e56abf177d2dda91a989264c0823f93719706f68826dc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24bcf8974029680c4e56abf177d2dda91a989264c0823f93719706f68826dc0e->enter($__internal_24bcf8974029680c4e56abf177d2dda91a989264c0823f93719706f68826dc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f091b30419640f061b22fd7981e2ccec2fb1dc26473c0c4edddab0b225024b18->leave($__internal_f091b30419640f061b22fd7981e2ccec2fb1dc26473c0c4edddab0b225024b18_prof);

        
        $__internal_24bcf8974029680c4e56abf177d2dda91a989264c0823f93719706f68826dc0e->leave($__internal_24bcf8974029680c4e56abf177d2dda91a989264c0823f93719706f68826dc0e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b680e60423664ac45f9b2327aad298479a46a7060699b1a71366d5c3f03c209e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b680e60423664ac45f9b2327aad298479a46a7060699b1a71366d5c3f03c209e->enter($__internal_b680e60423664ac45f9b2327aad298479a46a7060699b1a71366d5c3f03c209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dcfc16089b91f089e374e3febff220117a7cb5174195f7fe7420593197fd2ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfc16089b91f089e374e3febff220117a7cb5174195f7fe7420593197fd2ba4->enter($__internal_dcfc16089b91f089e374e3febff220117a7cb5174195f7fe7420593197fd2ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dcfc16089b91f089e374e3febff220117a7cb5174195f7fe7420593197fd2ba4->leave($__internal_dcfc16089b91f089e374e3febff220117a7cb5174195f7fe7420593197fd2ba4_prof);

        
        $__internal_b680e60423664ac45f9b2327aad298479a46a7060699b1a71366d5c3f03c209e->leave($__internal_b680e60423664ac45f9b2327aad298479a46a7060699b1a71366d5c3f03c209e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2770e059b05cb558f365c6633aebdcd73cc82099db38276dd88685856b87211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2770e059b05cb558f365c6633aebdcd73cc82099db38276dd88685856b87211->enter($__internal_c2770e059b05cb558f365c6633aebdcd73cc82099db38276dd88685856b87211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_403722a9f232f46fbbf52fdf2d6d19ca1e48e733d41e12212e510d5f19ce1309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403722a9f232f46fbbf52fdf2d6d19ca1e48e733d41e12212e510d5f19ce1309->enter($__internal_403722a9f232f46fbbf52fdf2d6d19ca1e48e733d41e12212e510d5f19ce1309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_403722a9f232f46fbbf52fdf2d6d19ca1e48e733d41e12212e510d5f19ce1309->leave($__internal_403722a9f232f46fbbf52fdf2d6d19ca1e48e733d41e12212e510d5f19ce1309_prof);

        
        $__internal_c2770e059b05cb558f365c6633aebdcd73cc82099db38276dd88685856b87211->leave($__internal_c2770e059b05cb558f365c6633aebdcd73cc82099db38276dd88685856b87211_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a1bc69882bbd274d1afb08a68f8a769cabff01068b8ab2cf5d5fd34e5be64f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1bc69882bbd274d1afb08a68f8a769cabff01068b8ab2cf5d5fd34e5be64f0->enter($__internal_3a1bc69882bbd274d1afb08a68f8a769cabff01068b8ab2cf5d5fd34e5be64f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c3f89731a2d6e051a24519fca0ab9ad39110e452c5391d2634710d9b799c7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3f89731a2d6e051a24519fca0ab9ad39110e452c5391d2634710d9b799c7b1->enter($__internal_7c3f89731a2d6e051a24519fca0ab9ad39110e452c5391d2634710d9b799c7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7c3f89731a2d6e051a24519fca0ab9ad39110e452c5391d2634710d9b799c7b1->leave($__internal_7c3f89731a2d6e051a24519fca0ab9ad39110e452c5391d2634710d9b799c7b1_prof);

        
        $__internal_3a1bc69882bbd274d1afb08a68f8a769cabff01068b8ab2cf5d5fd34e5be64f0->leave($__internal_3a1bc69882bbd274d1afb08a68f8a769cabff01068b8ab2cf5d5fd34e5be64f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
