<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_97336f8d47c001e47e7c192bc789590c4f0e3db876d2483a043ea2037073e349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b336336225186522963e8eba4a0b4a434860a6699ba69e20777b8390b6240504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b336336225186522963e8eba4a0b4a434860a6699ba69e20777b8390b6240504->enter($__internal_b336336225186522963e8eba4a0b4a434860a6699ba69e20777b8390b6240504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_4727d46c79ca668ca5b594460657c8a80ed737d6088baf64f4db5fd17fd2d4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4727d46c79ca668ca5b594460657c8a80ed737d6088baf64f4db5fd17fd2d4f1->enter($__internal_4727d46c79ca668ca5b594460657c8a80ed737d6088baf64f4db5fd17fd2d4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b336336225186522963e8eba4a0b4a434860a6699ba69e20777b8390b6240504->leave($__internal_b336336225186522963e8eba4a0b4a434860a6699ba69e20777b8390b6240504_prof);

        
        $__internal_4727d46c79ca668ca5b594460657c8a80ed737d6088baf64f4db5fd17fd2d4f1->leave($__internal_4727d46c79ca668ca5b594460657c8a80ed737d6088baf64f4db5fd17fd2d4f1_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_65a463d25b72d2ebc704aa4a01e5f7ff3b2009819ebfdc4b729114c9f8e8988b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a463d25b72d2ebc704aa4a01e5f7ff3b2009819ebfdc4b729114c9f8e8988b->enter($__internal_65a463d25b72d2ebc704aa4a01e5f7ff3b2009819ebfdc4b729114c9f8e8988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_9c25e20f5e16738d2ea1813a5ce2448accb5c5f8341d7addcc3153efef2aab8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c25e20f5e16738d2ea1813a5ce2448accb5c5f8341d7addcc3153efef2aab8f->enter($__internal_9c25e20f5e16738d2ea1813a5ce2448accb5c5f8341d7addcc3153efef2aab8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 5
        echo "    <script>
        \$(document).ready(function() {
            \$('select').removeAttr('multiple');
            \$('.tiit').val(\"null\");
            \$('.login-right div:nth-child(6)').height(0);
            \$('.login-right div:nth-child(6)').css('visibility','hidden');
            \$('select').on('change', function() {
                if(this.value=='ROLE_COM'){
                    \$('.login-right div:nth-child(6)').css('visibility','visible');
                    \$('.tiit').val(\"\");
                    \$('.login-right div:nth-child(6)').height(100);
                }else{
                    \$('.login-right div:nth-child(6)').css('visibility','hidden');
                    \$('.tiit').val(\"null\");
                    \$('.login-right div:nth-child(6)').height(0);
                }
            });

        });
    </script>
    <style>
        .login-right div{width:50%!important;float:left;}
        .login-right div:last-child{width:100%!important;}
        .login-right div:first-child{width:100%!important;}
        .login-right div:nth-child(6){width:100%!important;}
        label{
            display: block;}
    </style>
<div class=\"col-md-12 login-right\">


    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <br/>
    <div>
        <input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_9c25e20f5e16738d2ea1813a5ce2448accb5c5f8341d7addcc3153efef2aab8f->leave($__internal_9c25e20f5e16738d2ea1813a5ce2448accb5c5f8341d7addcc3153efef2aab8f_prof);

        
        $__internal_65a463d25b72d2ebc704aa4a01e5f7ff3b2009819ebfdc4b729114c9f8e8988b->leave($__internal_65a463d25b72d2ebc704aa4a01e5f7ff3b2009819ebfdc4b729114c9f8e8988b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  92 => 40,  86 => 37,  82 => 36,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block formulaire %}
    <script>
        \$(document).ready(function() {
            \$('select').removeAttr('multiple');
            \$('.tiit').val(\"null\");
            \$('.login-right div:nth-child(6)').height(0);
            \$('.login-right div:nth-child(6)').css('visibility','hidden');
            \$('select').on('change', function() {
                if(this.value=='ROLE_COM'){
                    \$('.login-right div:nth-child(6)').css('visibility','visible');
                    \$('.tiit').val(\"\");
                    \$('.login-right div:nth-child(6)').height(100);
                }else{
                    \$('.login-right div:nth-child(6)').css('visibility','hidden');
                    \$('.tiit').val(\"null\");
                    \$('.login-right div:nth-child(6)').height(0);
                }
            });

        });
    </script>
    <style>
        .login-right div{width:50%!important;float:left;}
        .login-right div:last-child{width:100%!important;}
        .login-right div:first-child{width:100%!important;}
        .login-right div:nth-child(6){width:100%!important;}
        label{
            display: block;}
    </style>
<div class=\"col-md-12 login-right\">


    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <br/>
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}
</div>

{% endblock formulaire %}
", "@FOSUser/Registration/register.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
