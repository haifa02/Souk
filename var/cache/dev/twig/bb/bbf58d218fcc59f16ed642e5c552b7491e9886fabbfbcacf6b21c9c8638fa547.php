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
        $__internal_bb830381c783bd9b3575fce46d191aec6dc57fe350fc401cabef009c5dbab740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb830381c783bd9b3575fce46d191aec6dc57fe350fc401cabef009c5dbab740->enter($__internal_bb830381c783bd9b3575fce46d191aec6dc57fe350fc401cabef009c5dbab740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0e01a2ce2188ed3f997f6e9ada61d797aff280ff2339afdebca4598d74f327b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e01a2ce2188ed3f997f6e9ada61d797aff280ff2339afdebca4598d74f327b0->enter($__internal_0e01a2ce2188ed3f997f6e9ada61d797aff280ff2339afdebca4598d74f327b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_bb830381c783bd9b3575fce46d191aec6dc57fe350fc401cabef009c5dbab740->leave($__internal_bb830381c783bd9b3575fce46d191aec6dc57fe350fc401cabef009c5dbab740_prof);

        
        $__internal_0e01a2ce2188ed3f997f6e9ada61d797aff280ff2339afdebca4598d74f327b0->leave($__internal_0e01a2ce2188ed3f997f6e9ada61d797aff280ff2339afdebca4598d74f327b0_prof);

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
