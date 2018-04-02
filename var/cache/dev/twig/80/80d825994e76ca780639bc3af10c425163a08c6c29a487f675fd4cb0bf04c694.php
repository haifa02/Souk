<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_978f789652de3bb538b1f29c0e64102ba24e67b7eebdabc8145e4f742bbd8b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d72b23b18792d367bfa5d9e6e0681146739cf888f9169abd5ab6fb7ca3dc2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d72b23b18792d367bfa5d9e6e0681146739cf888f9169abd5ab6fb7ca3dc2c6->enter($__internal_2d72b23b18792d367bfa5d9e6e0681146739cf888f9169abd5ab6fb7ca3dc2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_a0320f81553d007af4a9a0a5e49569280762a4f4b668af923fb5de267971cd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0320f81553d007af4a9a0a5e49569280762a4f4b668af923fb5de267971cd7f->enter($__internal_a0320f81553d007af4a9a0a5e49569280762a4f4b668af923fb5de267971cd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d72b23b18792d367bfa5d9e6e0681146739cf888f9169abd5ab6fb7ca3dc2c6->leave($__internal_2d72b23b18792d367bfa5d9e6e0681146739cf888f9169abd5ab6fb7ca3dc2c6_prof);

        
        $__internal_a0320f81553d007af4a9a0a5e49569280762a4f4b668af923fb5de267971cd7f->leave($__internal_a0320f81553d007af4a9a0a5e49569280762a4f4b668af923fb5de267971cd7f_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_4b56d752bb1c1433b1cc53a96eeaa1d8fd5c402705d5d15c2b911b316732cd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b56d752bb1c1433b1cc53a96eeaa1d8fd5c402705d5d15c2b911b316732cd5c->enter($__internal_4b56d752bb1c1433b1cc53a96eeaa1d8fd5c402705d5d15c2b911b316732cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_bf96185a45e099ed103dccc995e235d256541692bfdf8179ecc0b7c53c24b932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf96185a45e099ed103dccc995e235d256541692bfdf8179ecc0b7c53c24b932->enter($__internal_bf96185a45e099ed103dccc995e235d256541692bfdf8179ecc0b7c53c24b932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 5
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>


<script>
    \$(document).ready(function(){
        \$('select').removeAttr('multiple');
        \$('select').val('ROLE_CLIENT');
        \$('#img-com').hide();
        \$('#img-cl').show();

        \$('#com').hide(100);
        \$(\"#btn-cl\").addClass('active');
        \$(\"#btn-com\").removeClass('active');
        \$('select').css('visibility','hidden');
        \$(\"#btn-cl\").click(function(){
            \$('#fos_user_registration_form_skills').val('');
            \$('#com').hide(100);
            \$('#cl').show(100);

            \$('#img-com').hide(100);
            \$('#img-cl').show(100);
            //\$('#fos_user_registration_form_domaine').val('null');
            \$('select').val('ROLE_CLIENT');
            \$(\"#btn-cl\").addClass('active');
            \$(\"#btn-com\").removeClass('active');
        });
        \$(\"#btn-com\").click(function(){
            //\$('#fos_user_registration_form_skills').val('null');
            //\$('#fos_user_registration_form_domaine').val('');
            \$('#com').show(100);
            \$('#cl').hide(100);

            \$('#img-cl').hide(100);
            \$('#img-com').show(100);

            \$('select').val('ROLE_COM');
            \$(\"#btn-cl\").removeClass('active');
            \$(\"#btn-com\").addClass('active');
        });
    });
</script>
<ul class=\"nav nav-tabs nav-justified\" role=\"tablist\" id=\"tabs\">
    <li id=\"btn-cl\" class=\"active\"> <span>Vous êtes un Client   </span>  <img id=\"img-cl\" src=\"/bundles/front/images/check.png\"/></li>
    <li id=\"btn-com\"> <span>Vous êtes un Commercial   </span>   <img id=\"img-com\" src=\"/bundles/front/images/check.png\"/></li>
</ul>
    <div class=\"row\" id=\"tab\">
        <div class=\"col-md-12\">
            <br/>
            <br/>
            <br/>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\" class=\"box-form text-left\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'label');
        echo "
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'errors');
        echo "
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-12\" id=\"com\">
                    <div class=\"form-group\">
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre_commercial", array()), 'label');
        echo "
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre_commercial", array()), 'errors');
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre_commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                </div>
                <div class=\"col-md-12\" id=\"cl\">



                </div>
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-8 text-center\">
                    <input type=\"submit\" value=\"S'inscrire\" class=\"sign\" />
                </div>
            </div>
            <div class=\"col-md-3\"></div>
            ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </div></div>


";
        
        $__internal_bf96185a45e099ed103dccc995e235d256541692bfdf8179ecc0b7c53c24b932->leave($__internal_bf96185a45e099ed103dccc995e235d256541692bfdf8179ecc0b7c53c24b932_prof);

        
        $__internal_4b56d752bb1c1433b1cc53a96eeaa1d8fd5c402705d5d15c2b911b316732cd5c->leave($__internal_4b56d752bb1c1433b1cc53a96eeaa1d8fd5c402705d5d15c2b911b316732cd5c_prof);

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
        return array (  256 => 126,  245 => 118,  241 => 117,  237 => 116,  231 => 113,  227 => 112,  223 => 111,  214 => 105,  210 => 104,  206 => 103,  200 => 100,  196 => 99,  192 => 98,  178 => 87,  174 => 86,  170 => 85,  162 => 80,  158 => 79,  154 => 78,  148 => 75,  144 => 74,  140 => 73,  132 => 68,  128 => 67,  124 => 66,  118 => 63,  114 => 62,  110 => 61,  101 => 55,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block formulaire %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>


<script>
    \$(document).ready(function(){
        \$('select').removeAttr('multiple');
        \$('select').val('ROLE_CLIENT');
        \$('#img-com').hide();
        \$('#img-cl').show();

        \$('#com').hide(100);
        \$(\"#btn-cl\").addClass('active');
        \$(\"#btn-com\").removeClass('active');
        \$('select').css('visibility','hidden');
        \$(\"#btn-cl\").click(function(){
            \$('#fos_user_registration_form_skills').val('');
            \$('#com').hide(100);
            \$('#cl').show(100);

            \$('#img-com').hide(100);
            \$('#img-cl').show(100);
            //\$('#fos_user_registration_form_domaine').val('null');
            \$('select').val('ROLE_CLIENT');
            \$(\"#btn-cl\").addClass('active');
            \$(\"#btn-com\").removeClass('active');
        });
        \$(\"#btn-com\").click(function(){
            //\$('#fos_user_registration_form_skills').val('null');
            //\$('#fos_user_registration_form_domaine').val('');
            \$('#com').show(100);
            \$('#cl').hide(100);

            \$('#img-cl').hide(100);
            \$('#img-com').show(100);

            \$('select').val('ROLE_COM');
            \$(\"#btn-cl\").removeClass('active');
            \$(\"#btn-com\").addClass('active');
        });
    });
</script>
<ul class=\"nav nav-tabs nav-justified\" role=\"tablist\" id=\"tabs\">
    <li id=\"btn-cl\" class=\"active\"> <span>Vous êtes un Client   </span>  <img id=\"img-cl\" src=\"/bundles/front/images/check.png\"/></li>
    <li id=\"btn-com\"> <span>Vous êtes un Commercial   </span>   <img id=\"img-com\" src=\"/bundles/front/images/check.png\"/></li>
</ul>
    <div class=\"row\" id=\"tab\">
        <div class=\"col-md-12\">
            <br/>
            <br/>
            <br/>
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\" class=\"box-form text-left\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.nom) }}
                        {{ form_errors(form.nom) }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.prenom) }}
                        {{ form_errors(form.prenom) }}
                        {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                    </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.mobile) }}
                        {{ form_errors(form.mobile) }}
                        {{ form_widget(form.mobile, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.adresse) }}
                        {{ form_errors(form.adresse) }}
                        {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"col-md-12\" id=\"com\">
                    <div class=\"form-group\">
                        {{ form_label(form.titre_commercial) }}
                        {{ form_errors(form.titre_commercial) }}
                        {{ form_widget(form.titre_commercial, {'attr': {'class': 'form-control'}}) }}
                    </div>

                </div>
                <div class=\"col-md-12\" id=\"cl\">



                </div>
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.email) }}
                        {{ form_errors(form.email) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.username) }}
                        {{ form_errors(form.username) }}
                        {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.plainPassword.first) }}
                        {{ form_errors(form.plainPassword.first) }}
                        {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        {{ form_label(form.plainPassword.second) }}
                        {{ form_errors(form.plainPassword.second) }}
                        {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"col-md-8 text-center\">
                    <input type=\"submit\" value=\"S'inscrire\" class=\"sign\" />
                </div>
            </div>
            <div class=\"col-md-3\"></div>
            {{ form_end(form) }}

        </div></div>


{% endblock formulaire %}
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
