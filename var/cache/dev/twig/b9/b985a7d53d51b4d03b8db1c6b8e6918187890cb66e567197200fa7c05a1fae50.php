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
        $__internal_d3214ef4880a6e7d3e7ac5da71a86debd407076fd9f6778fb88a83e47a062193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3214ef4880a6e7d3e7ac5da71a86debd407076fd9f6778fb88a83e47a062193->enter($__internal_d3214ef4880a6e7d3e7ac5da71a86debd407076fd9f6778fb88a83e47a062193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b05d210da0bb09c291d11810e08b0547a65a9dbe677c4935c46ac2fe6c932189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05d210da0bb09c291d11810e08b0547a65a9dbe677c4935c46ac2fe6c932189->enter($__internal_b05d210da0bb09c291d11810e08b0547a65a9dbe677c4935c46ac2fe6c932189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_d3214ef4880a6e7d3e7ac5da71a86debd407076fd9f6778fb88a83e47a062193->leave($__internal_d3214ef4880a6e7d3e7ac5da71a86debd407076fd9f6778fb88a83e47a062193_prof);

        
        $__internal_b05d210da0bb09c291d11810e08b0547a65a9dbe677c4935c46ac2fe6c932189->leave($__internal_b05d210da0bb09c291d11810e08b0547a65a9dbe677c4935c46ac2fe6c932189_prof);

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
