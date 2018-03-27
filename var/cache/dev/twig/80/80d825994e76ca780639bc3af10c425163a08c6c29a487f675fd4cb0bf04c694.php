<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_978f789652de3bb538b1f29c0e64102ba24e67b7eebdabc8145e4f742bbd8b94 extends Twig_Template
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
        $__internal_5e4b0e352ece99077e41552890591ad38d67d7b4b595d4f1d264c6a66c098b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4b0e352ece99077e41552890591ad38d67d7b4b595d4f1d264c6a66c098b2a->enter($__internal_5e4b0e352ece99077e41552890591ad38d67d7b4b595d4f1d264c6a66c098b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_33156cf5c295820dee4eb3071b0098f137fc036a08183a6441a8b342798bfd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33156cf5c295820dee4eb3071b0098f137fc036a08183a6441a8b342798bfd75->enter($__internal_33156cf5c295820dee4eb3071b0098f137fc036a08183a6441a8b342798bfd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e4b0e352ece99077e41552890591ad38d67d7b4b595d4f1d264c6a66c098b2a->leave($__internal_5e4b0e352ece99077e41552890591ad38d67d7b4b595d4f1d264c6a66c098b2a_prof);

        
        $__internal_33156cf5c295820dee4eb3071b0098f137fc036a08183a6441a8b342798bfd75->leave($__internal_33156cf5c295820dee4eb3071b0098f137fc036a08183a6441a8b342798bfd75_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_d71558e7b1220d88763c3362743edd24f7163ba1a89565d2c6c8fb29a66849f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71558e7b1220d88763c3362743edd24f7163ba1a89565d2c6c8fb29a66849f2->enter($__internal_d71558e7b1220d88763c3362743edd24f7163ba1a89565d2c6c8fb29a66849f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_07820f2c769d093bfb42c16ec7af3724e3003b8c0243a0e588fa276ca4f17b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07820f2c769d093bfb42c16ec7af3724e3003b8c0243a0e588fa276ca4f17b40->enter($__internal_07820f2c769d093bfb42c16ec7af3724e3003b8c0243a0e588fa276ca4f17b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        
        $__internal_07820f2c769d093bfb42c16ec7af3724e3003b8c0243a0e588fa276ca4f17b40->leave($__internal_07820f2c769d093bfb42c16ec7af3724e3003b8c0243a0e588fa276ca4f17b40_prof);

        
        $__internal_d71558e7b1220d88763c3362743edd24f7163ba1a89565d2c6c8fb29a66849f2->leave($__internal_d71558e7b1220d88763c3362743edd24f7163ba1a89565d2c6c8fb29a66849f2_prof);

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
