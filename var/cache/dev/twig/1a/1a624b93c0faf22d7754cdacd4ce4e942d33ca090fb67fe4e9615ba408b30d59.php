<?php

/* @Twig/layout.html.twig */
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
        $__internal_ce9a92bfe285186ae5854f7910b301f9b169eb71be76d78d62feb2fe5bbd2fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9a92bfe285186ae5854f7910b301f9b169eb71be76d78d62feb2fe5bbd2fbe->enter($__internal_ce9a92bfe285186ae5854f7910b301f9b169eb71be76d78d62feb2fe5bbd2fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bcbcd98172e696ec35b8fb68050833bb20f1131fec395c1cb3bf10ef0ca47802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbcd98172e696ec35b8fb68050833bb20f1131fec395c1cb3bf10ef0ca47802->enter($__internal_bcbcd98172e696ec35b8fb68050833bb20f1131fec395c1cb3bf10ef0ca47802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ce9a92bfe285186ae5854f7910b301f9b169eb71be76d78d62feb2fe5bbd2fbe->leave($__internal_ce9a92bfe285186ae5854f7910b301f9b169eb71be76d78d62feb2fe5bbd2fbe_prof);

        
        $__internal_bcbcd98172e696ec35b8fb68050833bb20f1131fec395c1cb3bf10ef0ca47802->leave($__internal_bcbcd98172e696ec35b8fb68050833bb20f1131fec395c1cb3bf10ef0ca47802_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd80632688e086ad0e30b64f11fdf40d783cf8b0c8d63a9b7365c67b0083efb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd80632688e086ad0e30b64f11fdf40d783cf8b0c8d63a9b7365c67b0083efb0->enter($__internal_bd80632688e086ad0e30b64f11fdf40d783cf8b0c8d63a9b7365c67b0083efb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fba7704e855103989c9f0975106604b50f3fcdb6b92d5e8593b26b32ab70d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fba7704e855103989c9f0975106604b50f3fcdb6b92d5e8593b26b32ab70d23->enter($__internal_7fba7704e855103989c9f0975106604b50f3fcdb6b92d5e8593b26b32ab70d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7fba7704e855103989c9f0975106604b50f3fcdb6b92d5e8593b26b32ab70d23->leave($__internal_7fba7704e855103989c9f0975106604b50f3fcdb6b92d5e8593b26b32ab70d23_prof);

        
        $__internal_bd80632688e086ad0e30b64f11fdf40d783cf8b0c8d63a9b7365c67b0083efb0->leave($__internal_bd80632688e086ad0e30b64f11fdf40d783cf8b0c8d63a9b7365c67b0083efb0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d3e8d4d5814b55803103860bef250931b1df5305dee393349810079046f2206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3e8d4d5814b55803103860bef250931b1df5305dee393349810079046f2206->enter($__internal_7d3e8d4d5814b55803103860bef250931b1df5305dee393349810079046f2206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c75cdd735f28f715c654d0d11d50a69c732cfdc3de8d62753282fa65e8c21211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75cdd735f28f715c654d0d11d50a69c732cfdc3de8d62753282fa65e8c21211->enter($__internal_c75cdd735f28f715c654d0d11d50a69c732cfdc3de8d62753282fa65e8c21211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c75cdd735f28f715c654d0d11d50a69c732cfdc3de8d62753282fa65e8c21211->leave($__internal_c75cdd735f28f715c654d0d11d50a69c732cfdc3de8d62753282fa65e8c21211_prof);

        
        $__internal_7d3e8d4d5814b55803103860bef250931b1df5305dee393349810079046f2206->leave($__internal_7d3e8d4d5814b55803103860bef250931b1df5305dee393349810079046f2206_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_538e8aa754398b385458e73491a1c154a4785e2ab2ae05d80789261a71bc0f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538e8aa754398b385458e73491a1c154a4785e2ab2ae05d80789261a71bc0f7b->enter($__internal_538e8aa754398b385458e73491a1c154a4785e2ab2ae05d80789261a71bc0f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebd0592c2176dcb0b892b89e8a979c50858351eea151be73377a7788c65c01ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd0592c2176dcb0b892b89e8a979c50858351eea151be73377a7788c65c01ee->enter($__internal_ebd0592c2176dcb0b892b89e8a979c50858351eea151be73377a7788c65c01ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ebd0592c2176dcb0b892b89e8a979c50858351eea151be73377a7788c65c01ee->leave($__internal_ebd0592c2176dcb0b892b89e8a979c50858351eea151be73377a7788c65c01ee_prof);

        
        $__internal_538e8aa754398b385458e73491a1c154a4785e2ab2ae05d80789261a71bc0f7b->leave($__internal_538e8aa754398b385458e73491a1c154a4785e2ab2ae05d80789261a71bc0f7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
