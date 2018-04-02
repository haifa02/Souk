<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ec416e03217a3aec189a9d755b2511ba70848f3dd3b036c5dc3f5ff39e9a9384 extends Twig_Template
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
        $__internal_6082b60a64585290e1e48eea5b65adc1b75e648730c383c11277cd703d4978df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6082b60a64585290e1e48eea5b65adc1b75e648730c383c11277cd703d4978df->enter($__internal_6082b60a64585290e1e48eea5b65adc1b75e648730c383c11277cd703d4978df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e0ea3c13167057d0047d50edeb5b0368d7f43d737fb77e6c8df5e484159f4a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ea3c13167057d0047d50edeb5b0368d7f43d737fb77e6c8df5e484159f4a13->enter($__internal_e0ea3c13167057d0047d50edeb5b0368d7f43d737fb77e6c8df5e484159f4a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6082b60a64585290e1e48eea5b65adc1b75e648730c383c11277cd703d4978df->leave($__internal_6082b60a64585290e1e48eea5b65adc1b75e648730c383c11277cd703d4978df_prof);

        
        $__internal_e0ea3c13167057d0047d50edeb5b0368d7f43d737fb77e6c8df5e484159f4a13->leave($__internal_e0ea3c13167057d0047d50edeb5b0368d7f43d737fb77e6c8df5e484159f4a13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
