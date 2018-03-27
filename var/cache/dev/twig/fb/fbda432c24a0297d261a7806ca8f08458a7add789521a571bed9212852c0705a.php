<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
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
        $__internal_ea8c747e48aa18262c97cc4cffecfb0584f422165498aaaaf65dbfcacd2a2b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8c747e48aa18262c97cc4cffecfb0584f422165498aaaaf65dbfcacd2a2b80->enter($__internal_ea8c747e48aa18262c97cc4cffecfb0584f422165498aaaaf65dbfcacd2a2b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5f04b954098f16ed30f9a8b6e0d34f205f2a997476fb7a286891995b3ef171c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f04b954098f16ed30f9a8b6e0d34f205f2a997476fb7a286891995b3ef171c3->enter($__internal_5f04b954098f16ed30f9a8b6e0d34f205f2a997476fb7a286891995b3ef171c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea8c747e48aa18262c97cc4cffecfb0584f422165498aaaaf65dbfcacd2a2b80->leave($__internal_ea8c747e48aa18262c97cc4cffecfb0584f422165498aaaaf65dbfcacd2a2b80_prof);

        
        $__internal_5f04b954098f16ed30f9a8b6e0d34f205f2a997476fb7a286891995b3ef171c3->leave($__internal_5f04b954098f16ed30f9a8b6e0d34f205f2a997476fb7a286891995b3ef171c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0c38ec018dc3a72a8c2619bb33f39a32b3fbfa897731438c7c754fe9f3d78bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c38ec018dc3a72a8c2619bb33f39a32b3fbfa897731438c7c754fe9f3d78bc->enter($__internal_b0c38ec018dc3a72a8c2619bb33f39a32b3fbfa897731438c7c754fe9f3d78bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6eb7305c57acf69db104277df0d5c05f25b1c21f60cad0d47ae0c13305628d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6eb7305c57acf69db104277df0d5c05f25b1c21f60cad0d47ae0c13305628d5->enter($__internal_c6eb7305c57acf69db104277df0d5c05f25b1c21f60cad0d47ae0c13305628d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c6eb7305c57acf69db104277df0d5c05f25b1c21f60cad0d47ae0c13305628d5->leave($__internal_c6eb7305c57acf69db104277df0d5c05f25b1c21f60cad0d47ae0c13305628d5_prof);

        
        $__internal_b0c38ec018dc3a72a8c2619bb33f39a32b3fbfa897731438c7c754fe9f3d78bc->leave($__internal_b0c38ec018dc3a72a8c2619bb33f39a32b3fbfa897731438c7c754fe9f3d78bc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07e36046215c7f5033e548e6b6a626fa460ef595f3acd92ead4037fd514919b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e36046215c7f5033e548e6b6a626fa460ef595f3acd92ead4037fd514919b5->enter($__internal_07e36046215c7f5033e548e6b6a626fa460ef595f3acd92ead4037fd514919b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9548bc4223ad61f45bdcddb3fb158f8876387ba7d5287f0557aa3d7c1f189e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9548bc4223ad61f45bdcddb3fb158f8876387ba7d5287f0557aa3d7c1f189e71->enter($__internal_9548bc4223ad61f45bdcddb3fb158f8876387ba7d5287f0557aa3d7c1f189e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9548bc4223ad61f45bdcddb3fb158f8876387ba7d5287f0557aa3d7c1f189e71->leave($__internal_9548bc4223ad61f45bdcddb3fb158f8876387ba7d5287f0557aa3d7c1f189e71_prof);

        
        $__internal_07e36046215c7f5033e548e6b6a626fa460ef595f3acd92ead4037fd514919b5->leave($__internal_07e36046215c7f5033e548e6b6a626fa460ef595f3acd92ead4037fd514919b5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b6d7e07e3fb41c7c96e5813501dc381deb2444df2d05d5fe3fc36facc78885c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6d7e07e3fb41c7c96e5813501dc381deb2444df2d05d5fe3fc36facc78885c->enter($__internal_4b6d7e07e3fb41c7c96e5813501dc381deb2444df2d05d5fe3fc36facc78885c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac524bd361ba7dff6536bfc131c17de6164eb7459eddb2bd4e42d602df0b5184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac524bd361ba7dff6536bfc131c17de6164eb7459eddb2bd4e42d602df0b5184->enter($__internal_ac524bd361ba7dff6536bfc131c17de6164eb7459eddb2bd4e42d602df0b5184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ac524bd361ba7dff6536bfc131c17de6164eb7459eddb2bd4e42d602df0b5184->leave($__internal_ac524bd361ba7dff6536bfc131c17de6164eb7459eddb2bd4e42d602df0b5184_prof);

        
        $__internal_4b6d7e07e3fb41c7c96e5813501dc381deb2444df2d05d5fe3fc36facc78885c->leave($__internal_4b6d7e07e3fb41c7c96e5813501dc381deb2444df2d05d5fe3fc36facc78885c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
