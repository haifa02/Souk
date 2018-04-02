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
        $__internal_357c4a5790350d378a9e55bccaeece709cd3501af1f4ac13ba4e8633b746183a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357c4a5790350d378a9e55bccaeece709cd3501af1f4ac13ba4e8633b746183a->enter($__internal_357c4a5790350d378a9e55bccaeece709cd3501af1f4ac13ba4e8633b746183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c6eed6e715e9a977e1b4f1d1afef2de50fcd6ace84c8e4e94c50faafbfb46367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6eed6e715e9a977e1b4f1d1afef2de50fcd6ace84c8e4e94c50faafbfb46367->enter($__internal_c6eed6e715e9a977e1b4f1d1afef2de50fcd6ace84c8e4e94c50faafbfb46367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_357c4a5790350d378a9e55bccaeece709cd3501af1f4ac13ba4e8633b746183a->leave($__internal_357c4a5790350d378a9e55bccaeece709cd3501af1f4ac13ba4e8633b746183a_prof);

        
        $__internal_c6eed6e715e9a977e1b4f1d1afef2de50fcd6ace84c8e4e94c50faafbfb46367->leave($__internal_c6eed6e715e9a977e1b4f1d1afef2de50fcd6ace84c8e4e94c50faafbfb46367_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8482fead497f324a2ba72878d6604c551e3766cd03bd67d11b9ca1d052e4bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8482fead497f324a2ba72878d6604c551e3766cd03bd67d11b9ca1d052e4bbf->enter($__internal_a8482fead497f324a2ba72878d6604c551e3766cd03bd67d11b9ca1d052e4bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75141b30438a8282dac6c0883ea46c21f8827691c34393c75ee94cce96e3cd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75141b30438a8282dac6c0883ea46c21f8827691c34393c75ee94cce96e3cd6c->enter($__internal_75141b30438a8282dac6c0883ea46c21f8827691c34393c75ee94cce96e3cd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_75141b30438a8282dac6c0883ea46c21f8827691c34393c75ee94cce96e3cd6c->leave($__internal_75141b30438a8282dac6c0883ea46c21f8827691c34393c75ee94cce96e3cd6c_prof);

        
        $__internal_a8482fead497f324a2ba72878d6604c551e3766cd03bd67d11b9ca1d052e4bbf->leave($__internal_a8482fead497f324a2ba72878d6604c551e3766cd03bd67d11b9ca1d052e4bbf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cdc299f88c74d437744e8cf481e8cf881b76750516c24c8419fb1ae1d6b4cb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc299f88c74d437744e8cf481e8cf881b76750516c24c8419fb1ae1d6b4cb8e->enter($__internal_cdc299f88c74d437744e8cf481e8cf881b76750516c24c8419fb1ae1d6b4cb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b38b8473b0ff9488797c2a07a0999f197c7495ffc868884c122a67c9caeb3c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38b8473b0ff9488797c2a07a0999f197c7495ffc868884c122a67c9caeb3c77->enter($__internal_b38b8473b0ff9488797c2a07a0999f197c7495ffc868884c122a67c9caeb3c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b38b8473b0ff9488797c2a07a0999f197c7495ffc868884c122a67c9caeb3c77->leave($__internal_b38b8473b0ff9488797c2a07a0999f197c7495ffc868884c122a67c9caeb3c77_prof);

        
        $__internal_cdc299f88c74d437744e8cf481e8cf881b76750516c24c8419fb1ae1d6b4cb8e->leave($__internal_cdc299f88c74d437744e8cf481e8cf881b76750516c24c8419fb1ae1d6b4cb8e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34c4f39c07734581c7915c8c33322cfb299a4abb882a11acf731b7c70564efc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c4f39c07734581c7915c8c33322cfb299a4abb882a11acf731b7c70564efc6->enter($__internal_34c4f39c07734581c7915c8c33322cfb299a4abb882a11acf731b7c70564efc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e06d5671260705e270af3f4a7bf50d8f1961adcc15a8ca52e7629d2a2c83bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e06d5671260705e270af3f4a7bf50d8f1961adcc15a8ca52e7629d2a2c83bc9->enter($__internal_7e06d5671260705e270af3f4a7bf50d8f1961adcc15a8ca52e7629d2a2c83bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7e06d5671260705e270af3f4a7bf50d8f1961adcc15a8ca52e7629d2a2c83bc9->leave($__internal_7e06d5671260705e270af3f4a7bf50d8f1961adcc15a8ca52e7629d2a2c83bc9_prof);

        
        $__internal_34c4f39c07734581c7915c8c33322cfb299a4abb882a11acf731b7c70564efc6->leave($__internal_34c4f39c07734581c7915c8c33322cfb299a4abb882a11acf731b7c70564efc6_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
