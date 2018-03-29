<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
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
        $__internal_c526c04fa597db965a5fcb44159e82c2205055bed63d2d02163a07d6e45a06e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c526c04fa597db965a5fcb44159e82c2205055bed63d2d02163a07d6e45a06e9->enter($__internal_c526c04fa597db965a5fcb44159e82c2205055bed63d2d02163a07d6e45a06e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cd842c298472a3a0e4ef3045085c3d4d118b55ce5307d2cc1e28ea8261d278f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd842c298472a3a0e4ef3045085c3d4d118b55ce5307d2cc1e28ea8261d278f7->enter($__internal_cd842c298472a3a0e4ef3045085c3d4d118b55ce5307d2cc1e28ea8261d278f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c526c04fa597db965a5fcb44159e82c2205055bed63d2d02163a07d6e45a06e9->leave($__internal_c526c04fa597db965a5fcb44159e82c2205055bed63d2d02163a07d6e45a06e9_prof);

        
        $__internal_cd842c298472a3a0e4ef3045085c3d4d118b55ce5307d2cc1e28ea8261d278f7->leave($__internal_cd842c298472a3a0e4ef3045085c3d4d118b55ce5307d2cc1e28ea8261d278f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0c56732f2f469f9609d2b82717a0f1afc135dfaa7cfe72208578b72ee89a93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c56732f2f469f9609d2b82717a0f1afc135dfaa7cfe72208578b72ee89a93d->enter($__internal_d0c56732f2f469f9609d2b82717a0f1afc135dfaa7cfe72208578b72ee89a93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3964bfcb33cee71993478a45f63a0ba4892dd4271b03483f9e285a1fc0adae95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3964bfcb33cee71993478a45f63a0ba4892dd4271b03483f9e285a1fc0adae95->enter($__internal_3964bfcb33cee71993478a45f63a0ba4892dd4271b03483f9e285a1fc0adae95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3964bfcb33cee71993478a45f63a0ba4892dd4271b03483f9e285a1fc0adae95->leave($__internal_3964bfcb33cee71993478a45f63a0ba4892dd4271b03483f9e285a1fc0adae95_prof);

        
        $__internal_d0c56732f2f469f9609d2b82717a0f1afc135dfaa7cfe72208578b72ee89a93d->leave($__internal_d0c56732f2f469f9609d2b82717a0f1afc135dfaa7cfe72208578b72ee89a93d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfe498001ef42b57e11db28c5f65f7d095c50a8f1bf50b286410c0b1663eacff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe498001ef42b57e11db28c5f65f7d095c50a8f1bf50b286410c0b1663eacff->enter($__internal_dfe498001ef42b57e11db28c5f65f7d095c50a8f1bf50b286410c0b1663eacff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1de05661fbe8a1df00864bd36640d71b7e7036a880f4a54d05e455c76aa9739f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de05661fbe8a1df00864bd36640d71b7e7036a880f4a54d05e455c76aa9739f->enter($__internal_1de05661fbe8a1df00864bd36640d71b7e7036a880f4a54d05e455c76aa9739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1de05661fbe8a1df00864bd36640d71b7e7036a880f4a54d05e455c76aa9739f->leave($__internal_1de05661fbe8a1df00864bd36640d71b7e7036a880f4a54d05e455c76aa9739f_prof);

        
        $__internal_dfe498001ef42b57e11db28c5f65f7d095c50a8f1bf50b286410c0b1663eacff->leave($__internal_dfe498001ef42b57e11db28c5f65f7d095c50a8f1bf50b286410c0b1663eacff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68100a6452f68bc78c4555df6f360e1e65fd88f74a54aae26308f23477903a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68100a6452f68bc78c4555df6f360e1e65fd88f74a54aae26308f23477903a4a->enter($__internal_68100a6452f68bc78c4555df6f360e1e65fd88f74a54aae26308f23477903a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b6abd1928dee88bb55002dc1ce9890fa83ad5cfc91b407084e7c942bef4169b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6abd1928dee88bb55002dc1ce9890fa83ad5cfc91b407084e7c942bef4169b0->enter($__internal_b6abd1928dee88bb55002dc1ce9890fa83ad5cfc91b407084e7c942bef4169b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b6abd1928dee88bb55002dc1ce9890fa83ad5cfc91b407084e7c942bef4169b0->leave($__internal_b6abd1928dee88bb55002dc1ce9890fa83ad5cfc91b407084e7c942bef4169b0_prof);

        
        $__internal_68100a6452f68bc78c4555df6f360e1e65fd88f74a54aae26308f23477903a4a->leave($__internal_68100a6452f68bc78c4555df6f360e1e65fd88f74a54aae26308f23477903a4a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
