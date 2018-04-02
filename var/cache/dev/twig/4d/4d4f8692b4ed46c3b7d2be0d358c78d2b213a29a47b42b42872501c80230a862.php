<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c43000fe0a97536004bd1662cc95ba996ed7913a124e700c760bbe10eb132f97 extends Twig_Template
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
        $__internal_82c1c1ad94d572fbf44ef3586d925295ea3dfeab3308ce19fa32567236ac6dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c1c1ad94d572fbf44ef3586d925295ea3dfeab3308ce19fa32567236ac6dcb->enter($__internal_82c1c1ad94d572fbf44ef3586d925295ea3dfeab3308ce19fa32567236ac6dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5e1ca7dd96756934a0d920a750e3b15ae825d4905d4db7993a4ea5099b5cd487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1ca7dd96756934a0d920a750e3b15ae825d4905d4db7993a4ea5099b5cd487->enter($__internal_5e1ca7dd96756934a0d920a750e3b15ae825d4905d4db7993a4ea5099b5cd487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_82c1c1ad94d572fbf44ef3586d925295ea3dfeab3308ce19fa32567236ac6dcb->leave($__internal_82c1c1ad94d572fbf44ef3586d925295ea3dfeab3308ce19fa32567236ac6dcb_prof);

        
        $__internal_5e1ca7dd96756934a0d920a750e3b15ae825d4905d4db7993a4ea5099b5cd487->leave($__internal_5e1ca7dd96756934a0d920a750e3b15ae825d4905d4db7993a4ea5099b5cd487_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
