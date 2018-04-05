<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_91762ae72a1b4eb908a9a30f9ff3bff08d3576ad43fccfdfab678fd78b569252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 1);
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
        $__internal_b8829b1a1bcdc7ad4882cbd772d9f1f5ea11450947948ba79d0275d57fc562b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8829b1a1bcdc7ad4882cbd772d9f1f5ea11450947948ba79d0275d57fc562b5->enter($__internal_b8829b1a1bcdc7ad4882cbd772d9f1f5ea11450947948ba79d0275d57fc562b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $__internal_4b862a67d1ad2c8b055774c4dc3ae2f103e41191f4327ab0abcf70f243890eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b862a67d1ad2c8b055774c4dc3ae2f103e41191f4327ab0abcf70f243890eea->enter($__internal_4b862a67d1ad2c8b055774c4dc3ae2f103e41191f4327ab0abcf70f243890eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8829b1a1bcdc7ad4882cbd772d9f1f5ea11450947948ba79d0275d57fc562b5->leave($__internal_b8829b1a1bcdc7ad4882cbd772d9f1f5ea11450947948ba79d0275d57fc562b5_prof);

        
        $__internal_4b862a67d1ad2c8b055774c4dc3ae2f103e41191f4327ab0abcf70f243890eea->leave($__internal_4b862a67d1ad2c8b055774c4dc3ae2f103e41191f4327ab0abcf70f243890eea_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_cdf4c909306e890f9a39f12052e3ad45c338ff9b0aab2c20aade2bebb4b6a5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf4c909306e890f9a39f12052e3ad45c338ff9b0aab2c20aade2bebb4b6a5c8->enter($__internal_cdf4c909306e890f9a39f12052e3ad45c338ff9b0aab2c20aade2bebb4b6a5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_7b00f0610335c1beb137faec12372222e2f5ad51291dea863c32f506fe219845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b00f0610335c1beb137faec12372222e2f5ad51291dea863c32f506fe219845->enter($__internal_7b00f0610335c1beb137faec12372222e2f5ad51291dea863c32f506fe219845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</h2>

<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</a>

";
        // line 9
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 9)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 10
        echo "
";
        
        $__internal_7b00f0610335c1beb137faec12372222e2f5ad51291dea863c32f506fe219845->leave($__internal_7b00f0610335c1beb137faec12372222e2f5ad51291dea863c32f506fe219845_prof);

        
        $__internal_cdf4c909306e890f9a39f12052e3ad45c338ff9b0aab2c20aade2bebb4b6a5c8->leave($__internal_cdf4c909306e890f9a39f12052e3ad45c338ff9b0aab2c20aade2bebb4b6a5c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  64 => 9,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</h2>

<a href=\"{{ url('fos_message_thread_new' )}}\">{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</a>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:inbox.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/inbox.html.twig");
    }
}
