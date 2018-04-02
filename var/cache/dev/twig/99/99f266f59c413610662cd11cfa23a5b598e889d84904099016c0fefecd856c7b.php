<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_68f8a600a97daab33526f76ef500b32f261595419993e3dba667d3bdc4d891bd extends Twig_Template
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
        $__internal_86a92fc31847eeaa7e3cf507b20e0a312bd8245fa8700b99e8ddd8ad07be915c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a92fc31847eeaa7e3cf507b20e0a312bd8245fa8700b99e8ddd8ad07be915c->enter($__internal_86a92fc31847eeaa7e3cf507b20e0a312bd8245fa8700b99e8ddd8ad07be915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4678f602080989bed4a44949158c3318b70f61ba04f0616100dad70646a207bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4678f602080989bed4a44949158c3318b70f61ba04f0616100dad70646a207bc->enter($__internal_4678f602080989bed4a44949158c3318b70f61ba04f0616100dad70646a207bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_86a92fc31847eeaa7e3cf507b20e0a312bd8245fa8700b99e8ddd8ad07be915c->leave($__internal_86a92fc31847eeaa7e3cf507b20e0a312bd8245fa8700b99e8ddd8ad07be915c_prof);

        
        $__internal_4678f602080989bed4a44949158c3318b70f61ba04f0616100dad70646a207bc->leave($__internal_4678f602080989bed4a44949158c3318b70f61ba04f0616100dad70646a207bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
