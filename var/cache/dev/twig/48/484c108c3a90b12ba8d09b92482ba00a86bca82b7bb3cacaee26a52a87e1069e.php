<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_729fb7983bdb3053eff509cbd403b0c6fce7ae19caa98362552e6662c5856ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SoukUserBundle::layout.html.twig", "@FOSUser/Security/login_content.html.twig", 1);
        $this->blocks = array(
            'fromulaire' => array($this, 'block_fromulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SoukUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cecfce8c5b15e7fa81e2bb9003a4ce69d377f1d4065f989c90222e6c1827de6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecfce8c5b15e7fa81e2bb9003a4ce69d377f1d4065f989c90222e6c1827de6c->enter($__internal_cecfce8c5b15e7fa81e2bb9003a4ce69d377f1d4065f989c90222e6c1827de6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_c13b7aff86a15589fdf889c430e94321ef224ccb38ed4cb86b740dd71817d2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13b7aff86a15589fdf889c430e94321ef224ccb38ed4cb86b740dd71817d2bd->enter($__internal_c13b7aff86a15589fdf889c430e94321ef224ccb38ed4cb86b740dd71817d2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cecfce8c5b15e7fa81e2bb9003a4ce69d377f1d4065f989c90222e6c1827de6c->leave($__internal_cecfce8c5b15e7fa81e2bb9003a4ce69d377f1d4065f989c90222e6c1827de6c_prof);

        
        $__internal_c13b7aff86a15589fdf889c430e94321ef224ccb38ed4cb86b740dd71817d2bd->leave($__internal_c13b7aff86a15589fdf889c430e94321ef224ccb38ed4cb86b740dd71817d2bd_prof);

    }

    // line 5
    public function block_fromulaire($context, array $blocks = array())
    {
        $__internal_8c13b0c99c65dd1b6c25a46f08ab883fb29140be5fed0e79b404567c648a699a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c13b0c99c65dd1b6c25a46f08ab883fb29140be5fed0e79b404567c648a699a->enter($__internal_8c13b0c99c65dd1b6c25a46f08ab883fb29140be5fed0e79b404567c648a699a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fromulaire"));

        $__internal_0df258ce97cf102eafb274297ce94da4c5b739e88babdb1acba2b750824e0750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df258ce97cf102eafb274297ce94da4c5b739e88babdb1acba2b750824e0750->enter($__internal_0df258ce97cf102eafb274297ce94da4c5b739e88babdb1acba2b750824e0750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fromulaire"));

        // line 6
        echo "
    ";
        // line 7
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 11
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 12
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 14
        echo "
    <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />

    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
    ";
        
        $__internal_0df258ce97cf102eafb274297ce94da4c5b739e88babdb1acba2b750824e0750->leave($__internal_0df258ce97cf102eafb274297ce94da4c5b739e88babdb1acba2b750824e0750_prof);

        
        $__internal_8c13b0c99c65dd1b6c25a46f08ab883fb29140be5fed0e79b404567c648a699a->leave($__internal_8c13b0c99c65dd1b6c25a46f08ab883fb29140be5fed0e79b404567c648a699a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  92 => 22,  85 => 18,  80 => 16,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  60 => 10,  54 => 8,  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SoukUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fromulaire %}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>
    {% endblock fromulaire %}", "@FOSUser/Security/login_content.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
