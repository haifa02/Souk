<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_74404cfbaab62615167fa8295a48daeebaad5590d20ad9ca14845a1f5d98fa59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_905ee4ad0accd02542accaab53f4e0cf40a6b659bf59dce503633ce1b935698b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905ee4ad0accd02542accaab53f4e0cf40a6b659bf59dce503633ce1b935698b->enter($__internal_905ee4ad0accd02542accaab53f4e0cf40a6b659bf59dce503633ce1b935698b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_9152fa82c0dea2802b2907a4d35538dd47e50f9489bce916bc00f1ea0fac93ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9152fa82c0dea2802b2907a4d35538dd47e50f9489bce916bc00f1ea0fac93ba->enter($__internal_9152fa82c0dea2802b2907a4d35538dd47e50f9489bce916bc00f1ea0fac93ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_905ee4ad0accd02542accaab53f4e0cf40a6b659bf59dce503633ce1b935698b->leave($__internal_905ee4ad0accd02542accaab53f4e0cf40a6b659bf59dce503633ce1b935698b_prof);

        
        $__internal_9152fa82c0dea2802b2907a4d35538dd47e50f9489bce916bc00f1ea0fac93ba->leave($__internal_9152fa82c0dea2802b2907a4d35538dd47e50f9489bce916bc00f1ea0fac93ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
