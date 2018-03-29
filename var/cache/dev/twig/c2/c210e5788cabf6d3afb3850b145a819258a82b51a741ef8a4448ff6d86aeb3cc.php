<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_32c4ecc7ef9e1b53178bf7484c3a1557f5df16907efff51a36fc403f4d07e911 extends Twig_Template
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
        $__internal_48f9faaa00c5a4def189ab4980de3e70cad1adb4f654caba6af97d62fcbe0a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f9faaa00c5a4def189ab4980de3e70cad1adb4f654caba6af97d62fcbe0a35->enter($__internal_48f9faaa00c5a4def189ab4980de3e70cad1adb4f654caba6af97d62fcbe0a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bf4aef71013bb5778b5232504a7b6279c7971ed69aa33a32bae5313073e9b908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4aef71013bb5778b5232504a7b6279c7971ed69aa33a32bae5313073e9b908->enter($__internal_bf4aef71013bb5778b5232504a7b6279c7971ed69aa33a32bae5313073e9b908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_48f9faaa00c5a4def189ab4980de3e70cad1adb4f654caba6af97d62fcbe0a35->leave($__internal_48f9faaa00c5a4def189ab4980de3e70cad1adb4f654caba6af97d62fcbe0a35_prof);

        
        $__internal_bf4aef71013bb5778b5232504a7b6279c7971ed69aa33a32bae5313073e9b908->leave($__internal_bf4aef71013bb5778b5232504a7b6279c7971ed69aa33a32bae5313073e9b908_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
