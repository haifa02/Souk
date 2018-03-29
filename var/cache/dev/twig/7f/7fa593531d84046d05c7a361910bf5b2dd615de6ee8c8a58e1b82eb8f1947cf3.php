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
        $__internal_c0ad2c915f3d28ccb9e932b79eaf2e3d0407fb3a76f88289bde17ce2546438c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ad2c915f3d28ccb9e932b79eaf2e3d0407fb3a76f88289bde17ce2546438c9->enter($__internal_c0ad2c915f3d28ccb9e932b79eaf2e3d0407fb3a76f88289bde17ce2546438c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3a667b41c5038adb102558750a8afc7214bedcf4387b3163ec6ba700ee74406c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a667b41c5038adb102558750a8afc7214bedcf4387b3163ec6ba700ee74406c->enter($__internal_3a667b41c5038adb102558750a8afc7214bedcf4387b3163ec6ba700ee74406c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c0ad2c915f3d28ccb9e932b79eaf2e3d0407fb3a76f88289bde17ce2546438c9->leave($__internal_c0ad2c915f3d28ccb9e932b79eaf2e3d0407fb3a76f88289bde17ce2546438c9_prof);

        
        $__internal_3a667b41c5038adb102558750a8afc7214bedcf4387b3163ec6ba700ee74406c->leave($__internal_3a667b41c5038adb102558750a8afc7214bedcf4387b3163ec6ba700ee74406c_prof);

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
