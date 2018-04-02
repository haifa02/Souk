<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_62553c9d240d303338d4860042497b9d9784e537811cf0681a8342cbbe7816f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:sent.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db4dde3e119828c7863c69a7f2e0d905b39d91eb1910269b8b909fb7083071fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4dde3e119828c7863c69a7f2e0d905b39d91eb1910269b8b909fb7083071fb->enter($__internal_db4dde3e119828c7863c69a7f2e0d905b39d91eb1910269b8b909fb7083071fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $__internal_c98310de8164bae510f9aecf3019dcdb255583f8eee82327fb09da56ddb2d57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98310de8164bae510f9aecf3019dcdb255583f8eee82327fb09da56ddb2d57d->enter($__internal_c98310de8164bae510f9aecf3019dcdb255583f8eee82327fb09da56ddb2d57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4dde3e119828c7863c69a7f2e0d905b39d91eb1910269b8b909fb7083071fb->leave($__internal_db4dde3e119828c7863c69a7f2e0d905b39d91eb1910269b8b909fb7083071fb_prof);

        
        $__internal_c98310de8164bae510f9aecf3019dcdb255583f8eee82327fb09da56ddb2d57d->leave($__internal_c98310de8164bae510f9aecf3019dcdb255583f8eee82327fb09da56ddb2d57d_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_cadac1b567f99efde5a5e20bec558769cefbb58e75bc16510105efd7df6ac5f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadac1b567f99efde5a5e20bec558769cefbb58e75bc16510105efd7df6ac5f8->enter($__internal_cadac1b567f99efde5a5e20bec558769cefbb58e75bc16510105efd7df6ac5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_18d0000da0ef6541f144183dd224b1b237b691e424dbfa6e894a3297da2a7f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d0000da0ef6541f144183dd224b1b237b691e424dbfa6e894a3297da2a7f3b->enter($__internal_18d0000da0ef6541f144183dd224b1b237b691e424dbfa6e894a3297da2a7f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:sent.html.twig", 7)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_18d0000da0ef6541f144183dd224b1b237b691e424dbfa6e894a3297da2a7f3b->leave($__internal_18d0000da0ef6541f144183dd224b1b237b691e424dbfa6e894a3297da2a7f3b_prof);

        
        $__internal_cadac1b567f99efde5a5e20bec558769cefbb58e75bc16510105efd7df6ac5f8->leave($__internal_cadac1b567f99efde5a5e20bec558769cefbb58e75bc16510105efd7df6ac5f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FOSMessageBundle::layout.html.twig' %}

{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:sent.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/sent.html.twig");
    }
}
