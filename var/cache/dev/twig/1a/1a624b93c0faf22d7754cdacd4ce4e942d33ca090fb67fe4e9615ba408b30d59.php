<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_7b6ea27a706f66da5d28251b52981f743c9c125fbbb648e38b994e383742fa9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f1dff1f180cdb7c73cc9c42888ce083757032082420ac91264cd852b29e348e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1dff1f180cdb7c73cc9c42888ce083757032082420ac91264cd852b29e348e->enter($__internal_3f1dff1f180cdb7c73cc9c42888ce083757032082420ac91264cd852b29e348e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_c2a7a7f770d59a488e5cf2357d9d7217d305f4c396fdb00e0efe60487686b09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a7a7f770d59a488e5cf2357d9d7217d305f4c396fdb00e0efe60487686b09f->enter($__internal_c2a7a7f770d59a488e5cf2357d9d7217d305f4c396fdb00e0efe60487686b09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3f1dff1f180cdb7c73cc9c42888ce083757032082420ac91264cd852b29e348e->leave($__internal_3f1dff1f180cdb7c73cc9c42888ce083757032082420ac91264cd852b29e348e_prof);

        
        $__internal_c2a7a7f770d59a488e5cf2357d9d7217d305f4c396fdb00e0efe60487686b09f->leave($__internal_c2a7a7f770d59a488e5cf2357d9d7217d305f4c396fdb00e0efe60487686b09f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8596ab05c90f14a0c55c180647c5e265ee53ef677bf8758f13084691bddeba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8596ab05c90f14a0c55c180647c5e265ee53ef677bf8758f13084691bddeba5->enter($__internal_c8596ab05c90f14a0c55c180647c5e265ee53ef677bf8758f13084691bddeba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36507aced4933bf5337e816071085ff2d4832f1e0a494e1cc9476f456e8c6bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36507aced4933bf5337e816071085ff2d4832f1e0a494e1cc9476f456e8c6bf1->enter($__internal_36507aced4933bf5337e816071085ff2d4832f1e0a494e1cc9476f456e8c6bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_36507aced4933bf5337e816071085ff2d4832f1e0a494e1cc9476f456e8c6bf1->leave($__internal_36507aced4933bf5337e816071085ff2d4832f1e0a494e1cc9476f456e8c6bf1_prof);

        
        $__internal_c8596ab05c90f14a0c55c180647c5e265ee53ef677bf8758f13084691bddeba5->leave($__internal_c8596ab05c90f14a0c55c180647c5e265ee53ef677bf8758f13084691bddeba5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b6977d0b040dd0ef56019c9b12fe9a42e472ae58295df0081609f5ff31408ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6977d0b040dd0ef56019c9b12fe9a42e472ae58295df0081609f5ff31408ba->enter($__internal_3b6977d0b040dd0ef56019c9b12fe9a42e472ae58295df0081609f5ff31408ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32d6727364612e4dea6e431ff96fd01c6947892c9ecf9fa606d1f8c33293a32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d6727364612e4dea6e431ff96fd01c6947892c9ecf9fa606d1f8c33293a32c->enter($__internal_32d6727364612e4dea6e431ff96fd01c6947892c9ecf9fa606d1f8c33293a32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_32d6727364612e4dea6e431ff96fd01c6947892c9ecf9fa606d1f8c33293a32c->leave($__internal_32d6727364612e4dea6e431ff96fd01c6947892c9ecf9fa606d1f8c33293a32c_prof);

        
        $__internal_3b6977d0b040dd0ef56019c9b12fe9a42e472ae58295df0081609f5ff31408ba->leave($__internal_3b6977d0b040dd0ef56019c9b12fe9a42e472ae58295df0081609f5ff31408ba_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d21920741486095aec9e33bab15f14b7a7428501378009288b7e40a9a2e46f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21920741486095aec9e33bab15f14b7a7428501378009288b7e40a9a2e46f4c->enter($__internal_d21920741486095aec9e33bab15f14b7a7428501378009288b7e40a9a2e46f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6155716656df51748fae3f8e3f0397950143792d90a8889537acad7adfc6ba45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6155716656df51748fae3f8e3f0397950143792d90a8889537acad7adfc6ba45->enter($__internal_6155716656df51748fae3f8e3f0397950143792d90a8889537acad7adfc6ba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6155716656df51748fae3f8e3f0397950143792d90a8889537acad7adfc6ba45->leave($__internal_6155716656df51748fae3f8e3f0397950143792d90a8889537acad7adfc6ba45_prof);

        
        $__internal_d21920741486095aec9e33bab15f14b7a7428501378009288b7e40a9a2e46f4c->leave($__internal_d21920741486095aec9e33bab15f14b7a7428501378009288b7e40a9a2e46f4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
