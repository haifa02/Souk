<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_246bf19dbf9acc4b300357d20bad63ea432d98b9a8915f93603439eb5aab7cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_d784df748f59e2526f105c3ecc07d5e0fbad1b2a754fe5b3a22f4ef324fab2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d784df748f59e2526f105c3ecc07d5e0fbad1b2a754fe5b3a22f4ef324fab2cb->enter($__internal_d784df748f59e2526f105c3ecc07d5e0fbad1b2a754fe5b3a22f4ef324fab2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3fa77095f6fb44cd3e72bf951d2d15297dcad05d3d4e3f4cd3b4fa0661057b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa77095f6fb44cd3e72bf951d2d15297dcad05d3d4e3f4cd3b4fa0661057b44->enter($__internal_3fa77095f6fb44cd3e72bf951d2d15297dcad05d3d4e3f4cd3b4fa0661057b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d784df748f59e2526f105c3ecc07d5e0fbad1b2a754fe5b3a22f4ef324fab2cb->leave($__internal_d784df748f59e2526f105c3ecc07d5e0fbad1b2a754fe5b3a22f4ef324fab2cb_prof);

        
        $__internal_3fa77095f6fb44cd3e72bf951d2d15297dcad05d3d4e3f4cd3b4fa0661057b44->leave($__internal_3fa77095f6fb44cd3e72bf951d2d15297dcad05d3d4e3f4cd3b4fa0661057b44_prof);

    }

    // line 4
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_abc95afe809681e0e1b74ea59fb49482e07810f80117b5ee51f8eebe10b137a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc95afe809681e0e1b74ea59fb49482e07810f80117b5ee51f8eebe10b137a6->enter($__internal_abc95afe809681e0e1b74ea59fb49482e07810f80117b5ee51f8eebe10b137a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_2a28f13ecfa6d23a4bbd8bff309f3daa5290f5fc8f774c149f44afc5657db533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a28f13ecfa6d23a4bbd8bff309f3daa5290f5fc8f774c149f44afc5657db533->enter($__internal_2a28f13ecfa6d23a4bbd8bff309f3daa5290f5fc8f774c149f44afc5657db533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

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
        echo "    <div class=\"col-md-3\"></div>
    <div class=\"col-md-6 login-right\">
        <h3>Connexion Membres</h3>
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 13
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 14
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 16
        echo "            <div>
                <span for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></span>
                <input class=\"login_input\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\">
            </div>
            <div>
                <span for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "<label>*</label></span>
                <input class=\"login_input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\">
            </div>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </br>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
    </div>


";
        
        $__internal_2a28f13ecfa6d23a4bbd8bff309f3daa5290f5fc8f774c149f44afc5657db533->leave($__internal_2a28f13ecfa6d23a4bbd8bff309f3daa5290f5fc8f774c149f44afc5657db533_prof);

        
        $__internal_abc95afe809681e0e1b74ea59fb49482e07810f80117b5ee51f8eebe10b137a6->leave($__internal_abc95afe809681e0e1b74ea59fb49482e07810f80117b5ee51f8eebe10b137a6_prof);

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
        return array (  102 => 27,  97 => 25,  90 => 21,  84 => 18,  80 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  60 => 9,  54 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}

{% block formulaire %}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"col-md-3\"></div>
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
