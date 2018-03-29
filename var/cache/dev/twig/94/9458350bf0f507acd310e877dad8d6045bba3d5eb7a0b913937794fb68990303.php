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
        $__internal_6d3f6bac449b77cd589634f1995d1ea69fc9e317c11f5314b0b55ea54b629c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3f6bac449b77cd589634f1995d1ea69fc9e317c11f5314b0b55ea54b629c2f->enter($__internal_6d3f6bac449b77cd589634f1995d1ea69fc9e317c11f5314b0b55ea54b629c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_20cfa341b70970667a1221489c5d9d060ef81d12da364b0e29c87653c040ac76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cfa341b70970667a1221489c5d9d060ef81d12da364b0e29c87653c040ac76->enter($__internal_20cfa341b70970667a1221489c5d9d060ef81d12da364b0e29c87653c040ac76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6d3f6bac449b77cd589634f1995d1ea69fc9e317c11f5314b0b55ea54b629c2f->leave($__internal_6d3f6bac449b77cd589634f1995d1ea69fc9e317c11f5314b0b55ea54b629c2f_prof);

        
        $__internal_20cfa341b70970667a1221489c5d9d060ef81d12da364b0e29c87653c040ac76->leave($__internal_20cfa341b70970667a1221489c5d9d060ef81d12da364b0e29c87653c040ac76_prof);

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
