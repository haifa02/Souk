<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_49bb974e56e11c68bc338419765de7be76379401802c1623d8804632636b5b8c extends Twig_Template
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
        $__internal_c039f000117d91479953f4df4de9802ba71a82f908212faed33752b2c2c8c272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c039f000117d91479953f4df4de9802ba71a82f908212faed33752b2c2c8c272->enter($__internal_c039f000117d91479953f4df4de9802ba71a82f908212faed33752b2c2c8c272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8be0124ea5a76830b2d193486d0384ddb8b467c0eebf0565ecd638d446e25175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be0124ea5a76830b2d193486d0384ddb8b467c0eebf0565ecd638d446e25175->enter($__internal_8be0124ea5a76830b2d193486d0384ddb8b467c0eebf0565ecd638d446e25175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c039f000117d91479953f4df4de9802ba71a82f908212faed33752b2c2c8c272->leave($__internal_c039f000117d91479953f4df4de9802ba71a82f908212faed33752b2c2c8c272_prof);

        
        $__internal_8be0124ea5a76830b2d193486d0384ddb8b467c0eebf0565ecd638d446e25175->leave($__internal_8be0124ea5a76830b2d193486d0384ddb8b467c0eebf0565ecd638d446e25175_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
