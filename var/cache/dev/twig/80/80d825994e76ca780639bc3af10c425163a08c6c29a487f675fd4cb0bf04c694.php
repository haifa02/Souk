<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_978f789652de3bb538b1f29c0e64102ba24e67b7eebdabc8145e4f742bbd8b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e9ad3d0c2f7d95216047acf451c0abe6163c8b0424575e27a745a193f06825d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ad3d0c2f7d95216047acf451c0abe6163c8b0424575e27a745a193f06825d7->enter($__internal_e9ad3d0c2f7d95216047acf451c0abe6163c8b0424575e27a745a193f06825d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_510c13191496bf2fe653883781a035c664ef3169465111372564977e464e49fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510c13191496bf2fe653883781a035c664ef3169465111372564977e464e49fd->enter($__internal_510c13191496bf2fe653883781a035c664ef3169465111372564977e464e49fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ad3d0c2f7d95216047acf451c0abe6163c8b0424575e27a745a193f06825d7->leave($__internal_e9ad3d0c2f7d95216047acf451c0abe6163c8b0424575e27a745a193f06825d7_prof);

        
        $__internal_510c13191496bf2fe653883781a035c664ef3169465111372564977e464e49fd->leave($__internal_510c13191496bf2fe653883781a035c664ef3169465111372564977e464e49fd_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_9a93fd971b51a3a4d813c27ee099aaa58ecbbdadb1aa23751745b1c97c0715af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a93fd971b51a3a4d813c27ee099aaa58ecbbdadb1aa23751745b1c97c0715af->enter($__internal_9a93fd971b51a3a4d813c27ee099aaa58ecbbdadb1aa23751745b1c97c0715af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_06709376fdd37e1c158bfae3aef9a58a19a35193528f32486d77a85d6463f245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06709376fdd37e1c158bfae3aef9a58a19a35193528f32486d77a85d6463f245->enter($__internal_06709376fdd37e1c158bfae3aef9a58a19a35193528f32486d77a85d6463f245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        
        $__internal_06709376fdd37e1c158bfae3aef9a58a19a35193528f32486d77a85d6463f245->leave($__internal_06709376fdd37e1c158bfae3aef9a58a19a35193528f32486d77a85d6463f245_prof);

        
        $__internal_9a93fd971b51a3a4d813c27ee099aaa58ecbbdadb1aa23751745b1c97c0715af->leave($__internal_9a93fd971b51a3a4d813c27ee099aaa58ecbbdadb1aa23751745b1c97c0715af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
