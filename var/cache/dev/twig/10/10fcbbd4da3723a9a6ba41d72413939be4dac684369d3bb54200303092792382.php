<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7e0d0353b1e5c25c43a29a5e1c3ff81a1ed519fca987cc5c62b1eb9c89e5d977 extends Twig_Template
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
        $__internal_c070e8b2fe88c7234fec5b011a2fe5e59d58a35f5680e506bec93005d8fe9e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c070e8b2fe88c7234fec5b011a2fe5e59d58a35f5680e506bec93005d8fe9e09->enter($__internal_c070e8b2fe88c7234fec5b011a2fe5e59d58a35f5680e506bec93005d8fe9e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_ff7f2a1330a6a8334b5df336ec448c44ab57dadc58bd403e4d73ff2e0ef8bb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7f2a1330a6a8334b5df336ec448c44ab57dadc58bd403e4d73ff2e0ef8bb80->enter($__internal_ff7f2a1330a6a8334b5df336ec448c44ab57dadc58bd403e4d73ff2e0ef8bb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c070e8b2fe88c7234fec5b011a2fe5e59d58a35f5680e506bec93005d8fe9e09->leave($__internal_c070e8b2fe88c7234fec5b011a2fe5e59d58a35f5680e506bec93005d8fe9e09_prof);

        
        $__internal_ff7f2a1330a6a8334b5df336ec448c44ab57dadc58bd403e4d73ff2e0ef8bb80->leave($__internal_ff7f2a1330a6a8334b5df336ec448c44ab57dadc58bd403e4d73ff2e0ef8bb80_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_bfb7e1e8e986a189d4fdfaf761ce23922ad86b69c2f8f5be6fddf63ec5c7ac9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb7e1e8e986a189d4fdfaf761ce23922ad86b69c2f8f5be6fddf63ec5c7ac9f->enter($__internal_bfb7e1e8e986a189d4fdfaf761ce23922ad86b69c2f8f5be6fddf63ec5c7ac9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_102284a7d864eec402438f36afbac6dffbbef695091610ef6dfb1c0f54647353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102284a7d864eec402438f36afbac6dffbbef695091610ef6dfb1c0f54647353->enter($__internal_102284a7d864eec402438f36afbac6dffbbef695091610ef6dfb1c0f54647353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_102284a7d864eec402438f36afbac6dffbbef695091610ef6dfb1c0f54647353->leave($__internal_102284a7d864eec402438f36afbac6dffbbef695091610ef6dfb1c0f54647353_prof);

        
        $__internal_bfb7e1e8e986a189d4fdfaf761ce23922ad86b69c2f8f5be6fddf63ec5c7ac9f->leave($__internal_bfb7e1e8e986a189d4fdfaf761ce23922ad86b69c2f8f5be6fddf63ec5c7ac9f_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\src\\Souk\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
