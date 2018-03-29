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
        $__internal_47adb0a9634409ad009911ff1b3ab7b330b9ac8ae6c21f50f5804f18a3096ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47adb0a9634409ad009911ff1b3ab7b330b9ac8ae6c21f50f5804f18a3096ce2->enter($__internal_47adb0a9634409ad009911ff1b3ab7b330b9ac8ae6c21f50f5804f18a3096ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_32e6b7c53c9bcc0f73ddb8402262a8afb470ff8d01f4e594cc07b259662f313e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e6b7c53c9bcc0f73ddb8402262a8afb470ff8d01f4e594cc07b259662f313e->enter($__internal_32e6b7c53c9bcc0f73ddb8402262a8afb470ff8d01f4e594cc07b259662f313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_47adb0a9634409ad009911ff1b3ab7b330b9ac8ae6c21f50f5804f18a3096ce2->leave($__internal_47adb0a9634409ad009911ff1b3ab7b330b9ac8ae6c21f50f5804f18a3096ce2_prof);

        
        $__internal_32e6b7c53c9bcc0f73ddb8402262a8afb470ff8d01f4e594cc07b259662f313e->leave($__internal_32e6b7c53c9bcc0f73ddb8402262a8afb470ff8d01f4e594cc07b259662f313e_prof);

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
