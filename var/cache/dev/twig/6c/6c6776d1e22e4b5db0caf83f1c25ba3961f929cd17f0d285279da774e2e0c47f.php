<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_4a285d0b287bd495bf327a9da5142d72ec9c971a58eac549d0913dea1724f256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
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
        $__internal_eed52e707b7fa0a540fe0d13f6b67f5cbf2091afc75f360942f409271b6aff70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed52e707b7fa0a540fe0d13f6b67f5cbf2091afc75f360942f409271b6aff70->enter($__internal_eed52e707b7fa0a540fe0d13f6b67f5cbf2091afc75f360942f409271b6aff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $__internal_cb7324dd041fc46dd241c19f3b7738c1dedf620cdcea6515ff590650ec49dd41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7324dd041fc46dd241c19f3b7738c1dedf620cdcea6515ff590650ec49dd41->enter($__internal_cb7324dd041fc46dd241c19f3b7738c1dedf620cdcea6515ff590650ec49dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed52e707b7fa0a540fe0d13f6b67f5cbf2091afc75f360942f409271b6aff70->leave($__internal_eed52e707b7fa0a540fe0d13f6b67f5cbf2091afc75f360942f409271b6aff70_prof);

        
        $__internal_cb7324dd041fc46dd241c19f3b7738c1dedf620cdcea6515ff590650ec49dd41->leave($__internal_cb7324dd041fc46dd241c19f3b7738c1dedf620cdcea6515ff590650ec49dd41_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_f5b599a82b317cdd90c7ea031e77413934fb3997ad7c2b1638151d116cda8ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b599a82b317cdd90c7ea031e77413934fb3997ad7c2b1638151d116cda8ff0->enter($__internal_f5b599a82b317cdd90c7ea031e77413934fb3997ad7c2b1638151d116cda8ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_cbe970b9729e100734d35920f6e534bad809590fb8953ec2ef956bc4b16966a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe970b9729e100734d35920f6e534bad809590fb8953ec2ef956bc4b16966a4->enter($__internal_cbe970b9729e100734d35920f6e534bad809590fb8953ec2ef956bc4b16966a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo "</h2>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"messenger_thread_message\">
        <div class=\"messenger_thread_message_info\">
            ";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message_info", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array())), "%date%" => twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()))), "FOSMessageBundle");
            // line 11
            echo "        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<h3>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>

";
        
        $__internal_cbe970b9729e100734d35920f6e534bad809590fb8953ec2ef956bc4b16966a4->leave($__internal_cbe970b9729e100734d35920f6e534bad809590fb8953ec2ef956bc4b16966a4_prof);

        
        $__internal_f5b599a82b317cdd90c7ea031e77413934fb3997ad7c2b1638151d116cda8ff0->leave($__internal_f5b599a82b317cdd90c7ea031e77413934fb3997ad7c2b1638151d116cda8ff0_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  93 => 21,  88 => 19,  85 => 18,  75 => 14,  71 => 13,  67 => 11,  65 => 10,  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{{ thread.subject }}</h2>

{% for message in thread.messages %}
    <div class=\"messenger_thread_message\">
        <div class=\"messenger_thread_message_info\">
            {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}
        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_{{ message.id }}\">
            {{ message.body }}
        </div>
    </div>
{% endfor %}

<h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>

<form action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" />
</form>

{% endblock %}
", "FOSMessageBundle:Message:thread.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/thread.html.twig");
    }
}
