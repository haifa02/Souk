<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_4ae5ce309e2c1664c3c6caba0622927b19e86940dc1329d0c5dcbe7c57c1aebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_0b027e9a11b6e591bf04a0e4e917efbece4f39234902c5dc514aba05dfd09a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b027e9a11b6e591bf04a0e4e917efbece4f39234902c5dc514aba05dfd09a11->enter($__internal_0b027e9a11b6e591bf04a0e4e917efbece4f39234902c5dc514aba05dfd09a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_0399bbb6f57344272e18bb1cc2b4754b2f0c69b69c530a2148afa9abbf4bcb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0399bbb6f57344272e18bb1cc2b4754b2f0c69b69c530a2148afa9abbf4bcb54->enter($__internal_0399bbb6f57344272e18bb1cc2b4754b2f0c69b69c530a2148afa9abbf4bcb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b027e9a11b6e591bf04a0e4e917efbece4f39234902c5dc514aba05dfd09a11->leave($__internal_0b027e9a11b6e591bf04a0e4e917efbece4f39234902c5dc514aba05dfd09a11_prof);

        
        $__internal_0399bbb6f57344272e18bb1cc2b4754b2f0c69b69c530a2148afa9abbf4bcb54->leave($__internal_0399bbb6f57344272e18bb1cc2b4754b2f0c69b69c530a2148afa9abbf4bcb54_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_dacdf4bed301727fcdbe1e452a7391d6717bbaeff043dea44d7ed45fa5cdd76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacdf4bed301727fcdbe1e452a7391d6717bbaeff043dea44d7ed45fa5cdd76d->enter($__internal_dacdf4bed301727fcdbe1e452a7391d6717bbaeff043dea44d7ed45fa5cdd76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_e37fed8460e7a281bc39f083739e68b85649a8f858084d5e458f8d7466ceb61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37fed8460e7a281bc39f083739e68b85649a8f858084d5e458f8d7466ceb61f->enter($__internal_e37fed8460e7a281bc39f083739e68b85649a8f858084d5e458f8d7466ceb61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 5
        echo "
    ";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"col-md-6 login-right\">
        <h3>Connexion Membres</h3>
        <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 12
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 13
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 15
        echo "            <div>
                <span for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></span>
                <input class=\"login_input\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\">
            </div>
            <div>
                <span for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></span>
                <input class=\"login_input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\">
            </div>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </br>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
    </div>


";
        
        $__internal_e37fed8460e7a281bc39f083739e68b85649a8f858084d5e458f8d7466ceb61f->leave($__internal_e37fed8460e7a281bc39f083739e68b85649a8f858084d5e458f8d7466ceb61f_prof);

        
        $__internal_dacdf4bed301727fcdbe1e452a7391d6717bbaeff043dea44d7ed45fa5cdd76d->leave($__internal_dacdf4bed301727fcdbe1e452a7391d6717bbaeff043dea44d7ed45fa5cdd76d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  96 => 24,  89 => 20,  83 => 17,  79 => 16,  76 => 15,  70 => 13,  68 => 12,  64 => 11,  60 => 9,  54 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::layout.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}

{% block formulaire %}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"col-md-6 login-right\">
        <h3>Connexion Membres</h3>
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div>
                <span for=\"username\">{{ 'security.login.username'|trans }}<label>*</label></span>
                <input class=\"login_input\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\">
            </div>
            <div>
                <span for=\"password\">{{ 'security.login.password'|trans }}<label>*</label></span>
                <input class=\"login_input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\">
            </div>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </br>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
        </form>
    </div>


{% endblock formulaire %}
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Security/login.html.twig");
    }
}
