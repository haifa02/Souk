<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_102f04a56a3d4944dfc6366c63dfb31f9cf6b7926393de22e7c234f955252dba extends Twig_Template
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
        $__internal_a5a330e497e54ee9918b103e53fef9ea8a93a7dfc867a8ac2046b28c0a4a5820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a330e497e54ee9918b103e53fef9ea8a93a7dfc867a8ac2046b28c0a4a5820->enter($__internal_a5a330e497e54ee9918b103e53fef9ea8a93a7dfc867a8ac2046b28c0a4a5820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ae67c972f84ac61913c829089494e3c7ea41b8721340700570f016ce738a80c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae67c972f84ac61913c829089494e3c7ea41b8721340700570f016ce738a80c2->enter($__internal_ae67c972f84ac61913c829089494e3c7ea41b8721340700570f016ce738a80c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a5a330e497e54ee9918b103e53fef9ea8a93a7dfc867a8ac2046b28c0a4a5820->leave($__internal_a5a330e497e54ee9918b103e53fef9ea8a93a7dfc867a8ac2046b28c0a4a5820_prof);

        
        $__internal_ae67c972f84ac61913c829089494e3c7ea41b8721340700570f016ce738a80c2->leave($__internal_ae67c972f84ac61913c829089494e3c7ea41b8721340700570f016ce738a80c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
