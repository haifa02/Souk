<?php

/* FOSMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_23d8b6d655d0b7d5310712fc182cfa07ddc4dd91663b51e14ef790860008603d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:newThread.html.twig", 1);
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
        $__internal_2c2ea8000005ad8a1e0bac7495aece1b6dd512441f1ac5f28985aa4e1ec3ab93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2ea8000005ad8a1e0bac7495aece1b6dd512441f1ac5f28985aa4e1ec3ab93->enter($__internal_2c2ea8000005ad8a1e0bac7495aece1b6dd512441f1ac5f28985aa4e1ec3ab93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $__internal_9387945a9cdb2f187124661f6d904a8358046cb08946f98d4569f3b15f746b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9387945a9cdb2f187124661f6d904a8358046cb08946f98d4569f3b15f746b10->enter($__internal_9387945a9cdb2f187124661f6d904a8358046cb08946f98d4569f3b15f746b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c2ea8000005ad8a1e0bac7495aece1b6dd512441f1ac5f28985aa4e1ec3ab93->leave($__internal_2c2ea8000005ad8a1e0bac7495aece1b6dd512441f1ac5f28985aa4e1ec3ab93_prof);

        
        $__internal_9387945a9cdb2f187124661f6d904a8358046cb08946f98d4569f3b15f746b10->leave($__internal_9387945a9cdb2f187124661f6d904a8358046cb08946f98d4569f3b15f746b10_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_b4d3c571e2845e38959e7b9897a1402890429a8c6fabc41f79312579e0d41f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d3c571e2845e38959e7b9897a1402890429a8c6fabc41f79312579e0d41f40->enter($__internal_b4d3c571e2845e38959e7b9897a1402890429a8c6fabc41f79312579e0d41f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_202829ec57f6447c80dbefa43a8b4b4075a781913c47c13e1f6fab5577ceb679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202829ec57f6447c80dbefa43a8b4b4075a781913c47c13e1f6fab5577ceb679->enter($__internal_202829ec57f6447c80dbefa43a8b4b4075a781913c47c13e1f6fab5577ceb679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</h2>

<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\" method=\"post\">
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>

";
        
        $__internal_202829ec57f6447c80dbefa43a8b4b4075a781913c47c13e1f6fab5577ceb679->leave($__internal_202829ec57f6447c80dbefa43a8b4b4075a781913c47c13e1f6fab5577ceb679_prof);

        
        $__internal_b4d3c571e2845e38959e7b9897a1402890429a8c6fabc41f79312579e0d41f40->leave($__internal_b4d3c571e2845e38959e7b9897a1402890429a8c6fabc41f79312579e0d41f40_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</h2>

<form action=\"{{ url('fos_message_thread_new') }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" />
</form>

{% endblock %}
", "FOSMessageBundle:Message:newThread.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/newThread.html.twig");
    }
}
