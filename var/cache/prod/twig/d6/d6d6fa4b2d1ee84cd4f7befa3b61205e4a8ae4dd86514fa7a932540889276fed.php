<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_89271072967acaa8119e31f3565940144a9641fb2fac73960af6e9cf9f4480b8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>

";
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
        return array (  79 => 42,  74 => 40,  68 => 37,  64 => 36,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
