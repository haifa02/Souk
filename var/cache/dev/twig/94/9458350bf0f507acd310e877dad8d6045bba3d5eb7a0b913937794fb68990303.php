<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f072bb457faad82d262e89df58c07aa48caa41f94a16c80213dd0012d72fe0ce extends Twig_Template
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
        $__internal_976923089cf975304a34c14841fec6ac94edd14c0876b3aaa76c3c11ef4b6a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976923089cf975304a34c14841fec6ac94edd14c0876b3aaa76c3c11ef4b6a2a->enter($__internal_976923089cf975304a34c14841fec6ac94edd14c0876b3aaa76c3c11ef4b6a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3be472a57ee9523b0ad48fe22d4a5bb3af1af01f48a7cf060baf2cf9a23d3f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be472a57ee9523b0ad48fe22d4a5bb3af1af01f48a7cf060baf2cf9a23d3f40->enter($__internal_3be472a57ee9523b0ad48fe22d4a5bb3af1af01f48a7cf060baf2cf9a23d3f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_976923089cf975304a34c14841fec6ac94edd14c0876b3aaa76c3c11ef4b6a2a->leave($__internal_976923089cf975304a34c14841fec6ac94edd14c0876b3aaa76c3c11ef4b6a2a_prof);

        
        $__internal_3be472a57ee9523b0ad48fe22d4a5bb3af1af01f48a7cf060baf2cf9a23d3f40->leave($__internal_3be472a57ee9523b0ad48fe22d4a5bb3af1af01f48a7cf060baf2cf9a23d3f40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
