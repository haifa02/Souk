<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fffaeb478b2987bb7b5ece03ef70a3245bd567e390a16a1695e114d312304c59 extends Twig_Template
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
        $__internal_2ddc4ccfebf5b0c3c2cd6cf5e1ea08fe0e2d653354a15e7754e3cf69bce77099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ddc4ccfebf5b0c3c2cd6cf5e1ea08fe0e2d653354a15e7754e3cf69bce77099->enter($__internal_2ddc4ccfebf5b0c3c2cd6cf5e1ea08fe0e2d653354a15e7754e3cf69bce77099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0d1d7551aa400190769d2b831e44f6cc3337234cbf3d71eb4e426db7a916c9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1d7551aa400190769d2b831e44f6cc3337234cbf3d71eb4e426db7a916c9cf->enter($__internal_0d1d7551aa400190769d2b831e44f6cc3337234cbf3d71eb4e426db7a916c9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2ddc4ccfebf5b0c3c2cd6cf5e1ea08fe0e2d653354a15e7754e3cf69bce77099->leave($__internal_2ddc4ccfebf5b0c3c2cd6cf5e1ea08fe0e2d653354a15e7754e3cf69bce77099_prof);

        
        $__internal_0d1d7551aa400190769d2b831e44f6cc3337234cbf3d71eb4e426db7a916c9cf->leave($__internal_0d1d7551aa400190769d2b831e44f6cc3337234cbf3d71eb4e426db7a916c9cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
