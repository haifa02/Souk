<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5a2ff557b3e61b1bc77ae8945333204d96b7b4c3f2efef6123e427d22dd5d45f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6cfb3e79bc1a1b630476de6289f2122ed78bea0ce2f25e8beceb7f7caaf4b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cfb3e79bc1a1b630476de6289f2122ed78bea0ce2f25e8beceb7f7caaf4b25->enter($__internal_c6cfb3e79bc1a1b630476de6289f2122ed78bea0ce2f25e8beceb7f7caaf4b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_c0cd54340eaf1e33e54526bd98e0554aed8ace1aede33c6484b71dca83efaec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cd54340eaf1e33e54526bd98e0554aed8ace1aede33c6484b71dca83efaec7->enter($__internal_c0cd54340eaf1e33e54526bd98e0554aed8ace1aede33c6484b71dca83efaec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c6cfb3e79bc1a1b630476de6289f2122ed78bea0ce2f25e8beceb7f7caaf4b25->leave($__internal_c6cfb3e79bc1a1b630476de6289f2122ed78bea0ce2f25e8beceb7f7caaf4b25_prof);

        
        $__internal_c0cd54340eaf1e33e54526bd98e0554aed8ace1aede33c6484b71dca83efaec7->leave($__internal_c0cd54340eaf1e33e54526bd98e0554aed8ace1aede33c6484b71dca83efaec7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
