<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_fffb7788184a173a4ed5d684cbfdb0644076d5e7bbc19a843220a3cade6a7943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e46fddf1b74467b463f9aab42e8ec34ba7ed37c8898e021b5a4cf8efecfe4183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46fddf1b74467b463f9aab42e8ec34ba7ed37c8898e021b5a4cf8efecfe4183->enter($__internal_e46fddf1b74467b463f9aab42e8ec34ba7ed37c8898e021b5a4cf8efecfe4183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_5a35bb3e5d756c9207f431697d149300850c60dbfbb7faf3c881f2982417f6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a35bb3e5d756c9207f431697d149300850c60dbfbb7faf3c881f2982417f6b4->enter($__internal_5a35bb3e5d756c9207f431697d149300850c60dbfbb7faf3c881f2982417f6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e46fddf1b74467b463f9aab42e8ec34ba7ed37c8898e021b5a4cf8efecfe4183->leave($__internal_e46fddf1b74467b463f9aab42e8ec34ba7ed37c8898e021b5a4cf8efecfe4183_prof);

        
        $__internal_5a35bb3e5d756c9207f431697d149300850c60dbfbb7faf3c881f2982417f6b4->leave($__internal_5a35bb3e5d756c9207f431697d149300850c60dbfbb7faf3c881f2982417f6b4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_64bb895cc054de7472d26151ca7cd63f39e3625c545aa768a7121165d8384950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bb895cc054de7472d26151ca7cd63f39e3625c545aa768a7121165d8384950->enter($__internal_64bb895cc054de7472d26151ca7cd63f39e3625c545aa768a7121165d8384950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_801b19c1674763aa71e9736088d601a64b08e6faac66c229faf99b718de3a8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801b19c1674763aa71e9736088d601a64b08e6faac66c229faf99b718de3a8d7->enter($__internal_801b19c1674763aa71e9736088d601a64b08e6faac66c229faf99b718de3a8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_801b19c1674763aa71e9736088d601a64b08e6faac66c229faf99b718de3a8d7->leave($__internal_801b19c1674763aa71e9736088d601a64b08e6faac66c229faf99b718de3a8d7_prof);

        
        $__internal_64bb895cc054de7472d26151ca7cd63f39e3625c545aa768a7121165d8384950->leave($__internal_64bb895cc054de7472d26151ca7cd63f39e3625c545aa768a7121165d8384950_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8ac8d6a4f2f3a63617a2e37471c1fecb438b0e53d2f5b3d143567f0ae3c747da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac8d6a4f2f3a63617a2e37471c1fecb438b0e53d2f5b3d143567f0ae3c747da->enter($__internal_8ac8d6a4f2f3a63617a2e37471c1fecb438b0e53d2f5b3d143567f0ae3c747da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ffdb184548b4581c1f32c13e26f767e27e6e6bef5d80218676e0afd2301366f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdb184548b4581c1f32c13e26f767e27e6e6bef5d80218676e0afd2301366f7->enter($__internal_ffdb184548b4581c1f32c13e26f767e27e6e6bef5d80218676e0afd2301366f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ffdb184548b4581c1f32c13e26f767e27e6e6bef5d80218676e0afd2301366f7->leave($__internal_ffdb184548b4581c1f32c13e26f767e27e6e6bef5d80218676e0afd2301366f7_prof);

        
        $__internal_8ac8d6a4f2f3a63617a2e37471c1fecb438b0e53d2f5b3d143567f0ae3c747da->leave($__internal_8ac8d6a4f2f3a63617a2e37471c1fecb438b0e53d2f5b3d143567f0ae3c747da_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0bfb0490db068f192838da2125e8102ac5c7572e76060b704057516067a69c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfb0490db068f192838da2125e8102ac5c7572e76060b704057516067a69c45->enter($__internal_0bfb0490db068f192838da2125e8102ac5c7572e76060b704057516067a69c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d4e0a16907e0d4f6ab3e9faddd54fc39f1eb33861dc9028997a8ecbb93ce4b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e0a16907e0d4f6ab3e9faddd54fc39f1eb33861dc9028997a8ecbb93ce4b6f->enter($__internal_d4e0a16907e0d4f6ab3e9faddd54fc39f1eb33861dc9028997a8ecbb93ce4b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d4e0a16907e0d4f6ab3e9faddd54fc39f1eb33861dc9028997a8ecbb93ce4b6f->leave($__internal_d4e0a16907e0d4f6ab3e9faddd54fc39f1eb33861dc9028997a8ecbb93ce4b6f_prof);

        
        $__internal_0bfb0490db068f192838da2125e8102ac5c7572e76060b704057516067a69c45->leave($__internal_0bfb0490db068f192838da2125e8102ac5c7572e76060b704057516067a69c45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
