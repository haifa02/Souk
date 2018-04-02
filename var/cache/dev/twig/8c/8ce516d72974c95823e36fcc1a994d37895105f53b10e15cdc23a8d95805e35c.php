<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_654b76337e2d00ca99a4b761b5892ee49f86f5d0b1d3c6dce6ebc26d7a575219 extends Twig_Template
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
        $__internal_31ce34d644694e2cf7dd83354fba40ce5d7e866f822db260aabb9c3f098ebf20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ce34d644694e2cf7dd83354fba40ce5d7e866f822db260aabb9c3f098ebf20->enter($__internal_31ce34d644694e2cf7dd83354fba40ce5d7e866f822db260aabb9c3f098ebf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_eedeb35b739b89e49302b394729f54eb6cf23f5758d71aa88d237353fb48d9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedeb35b739b89e49302b394729f54eb6cf23f5758d71aa88d237353fb48d9bb->enter($__internal_eedeb35b739b89e49302b394729f54eb6cf23f5758d71aa88d237353fb48d9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_31ce34d644694e2cf7dd83354fba40ce5d7e866f822db260aabb9c3f098ebf20->leave($__internal_31ce34d644694e2cf7dd83354fba40ce5d7e866f822db260aabb9c3f098ebf20_prof);

        
        $__internal_eedeb35b739b89e49302b394729f54eb6cf23f5758d71aa88d237353fb48d9bb->leave($__internal_eedeb35b739b89e49302b394729f54eb6cf23f5758d71aa88d237353fb48d9bb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ea7659df20dbe6482ac84a0931532f8994567fd3c476edb842d7ba7108e42c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7659df20dbe6482ac84a0931532f8994567fd3c476edb842d7ba7108e42c49->enter($__internal_ea7659df20dbe6482ac84a0931532f8994567fd3c476edb842d7ba7108e42c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a378eaac604b82e1cf24fd8120f86355747fd866d367417f6775777bf14c5b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a378eaac604b82e1cf24fd8120f86355747fd866d367417f6775777bf14c5b14->enter($__internal_a378eaac604b82e1cf24fd8120f86355747fd866d367417f6775777bf14c5b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a378eaac604b82e1cf24fd8120f86355747fd866d367417f6775777bf14c5b14->leave($__internal_a378eaac604b82e1cf24fd8120f86355747fd866d367417f6775777bf14c5b14_prof);

        
        $__internal_ea7659df20dbe6482ac84a0931532f8994567fd3c476edb842d7ba7108e42c49->leave($__internal_ea7659df20dbe6482ac84a0931532f8994567fd3c476edb842d7ba7108e42c49_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e6788cf4e9e8b1bf012d66cd36824e22d6232a32dff43f28547bcbfa05d892c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6788cf4e9e8b1bf012d66cd36824e22d6232a32dff43f28547bcbfa05d892c1->enter($__internal_e6788cf4e9e8b1bf012d66cd36824e22d6232a32dff43f28547bcbfa05d892c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_954051080be27a02fd30dcdf464e0e347097f70f1288ef447f5dd85beea5631e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954051080be27a02fd30dcdf464e0e347097f70f1288ef447f5dd85beea5631e->enter($__internal_954051080be27a02fd30dcdf464e0e347097f70f1288ef447f5dd85beea5631e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_954051080be27a02fd30dcdf464e0e347097f70f1288ef447f5dd85beea5631e->leave($__internal_954051080be27a02fd30dcdf464e0e347097f70f1288ef447f5dd85beea5631e_prof);

        
        $__internal_e6788cf4e9e8b1bf012d66cd36824e22d6232a32dff43f28547bcbfa05d892c1->leave($__internal_e6788cf4e9e8b1bf012d66cd36824e22d6232a32dff43f28547bcbfa05d892c1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dcb293f014bce002ba6845bc13defe80ee2ae71e3be451dbc5d6efc19045650e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb293f014bce002ba6845bc13defe80ee2ae71e3be451dbc5d6efc19045650e->enter($__internal_dcb293f014bce002ba6845bc13defe80ee2ae71e3be451dbc5d6efc19045650e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d53d9073e74f6f93b3729bc941fb433d460ea385ad09198fadc281b7834936f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53d9073e74f6f93b3729bc941fb433d460ea385ad09198fadc281b7834936f8->enter($__internal_d53d9073e74f6f93b3729bc941fb433d460ea385ad09198fadc281b7834936f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d53d9073e74f6f93b3729bc941fb433d460ea385ad09198fadc281b7834936f8->leave($__internal_d53d9073e74f6f93b3729bc941fb433d460ea385ad09198fadc281b7834936f8_prof);

        
        $__internal_dcb293f014bce002ba6845bc13defe80ee2ae71e3be451dbc5d6efc19045650e->leave($__internal_dcb293f014bce002ba6845bc13defe80ee2ae71e3be451dbc5d6efc19045650e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
