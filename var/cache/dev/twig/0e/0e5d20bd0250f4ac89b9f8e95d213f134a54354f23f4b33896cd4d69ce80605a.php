<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ae0deb548ed99a91ddc8a7df55d0a1acc3ea1fc685b45c5178e2688d3a04071f extends Twig_Template
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
        $__internal_ae9c5dcb2f9a0e4ca830a544b487cf3803476770282336333e6efc2116cec7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9c5dcb2f9a0e4ca830a544b487cf3803476770282336333e6efc2116cec7f0->enter($__internal_ae9c5dcb2f9a0e4ca830a544b487cf3803476770282336333e6efc2116cec7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_97a56c1229413ec07b9613a6f1cd62ea06e969b5231e582b7594932d2ced1216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a56c1229413ec07b9613a6f1cd62ea06e969b5231e582b7594932d2ced1216->enter($__internal_97a56c1229413ec07b9613a6f1cd62ea06e969b5231e582b7594932d2ced1216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ae9c5dcb2f9a0e4ca830a544b487cf3803476770282336333e6efc2116cec7f0->leave($__internal_ae9c5dcb2f9a0e4ca830a544b487cf3803476770282336333e6efc2116cec7f0_prof);

        
        $__internal_97a56c1229413ec07b9613a6f1cd62ea06e969b5231e582b7594932d2ced1216->leave($__internal_97a56c1229413ec07b9613a6f1cd62ea06e969b5231e582b7594932d2ced1216_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
