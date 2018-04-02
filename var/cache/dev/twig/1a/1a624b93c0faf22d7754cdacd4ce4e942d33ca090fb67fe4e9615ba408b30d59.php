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
        $__internal_16d7caccaf2d0c4bf15cad7cdb8adcb07c3b819546af0d0da2ae4c46413e776a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d7caccaf2d0c4bf15cad7cdb8adcb07c3b819546af0d0da2ae4c46413e776a->enter($__internal_16d7caccaf2d0c4bf15cad7cdb8adcb07c3b819546af0d0da2ae4c46413e776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_8c77965d9d4a7fcbbf71e9a2870ad03d0e336230a954f69a37fbb28f357d12d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c77965d9d4a7fcbbf71e9a2870ad03d0e336230a954f69a37fbb28f357d12d7->enter($__internal_8c77965d9d4a7fcbbf71e9a2870ad03d0e336230a954f69a37fbb28f357d12d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_16d7caccaf2d0c4bf15cad7cdb8adcb07c3b819546af0d0da2ae4c46413e776a->leave($__internal_16d7caccaf2d0c4bf15cad7cdb8adcb07c3b819546af0d0da2ae4c46413e776a_prof);

        
        $__internal_8c77965d9d4a7fcbbf71e9a2870ad03d0e336230a954f69a37fbb28f357d12d7->leave($__internal_8c77965d9d4a7fcbbf71e9a2870ad03d0e336230a954f69a37fbb28f357d12d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43fe8705304b79d42559625f2d3ee9c2552cdfb5159fc8c93849cc20443cb303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fe8705304b79d42559625f2d3ee9c2552cdfb5159fc8c93849cc20443cb303->enter($__internal_43fe8705304b79d42559625f2d3ee9c2552cdfb5159fc8c93849cc20443cb303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_503556c3b61636be64f6201e3a32f7f4975971408172897961714e5683086a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503556c3b61636be64f6201e3a32f7f4975971408172897961714e5683086a06->enter($__internal_503556c3b61636be64f6201e3a32f7f4975971408172897961714e5683086a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_503556c3b61636be64f6201e3a32f7f4975971408172897961714e5683086a06->leave($__internal_503556c3b61636be64f6201e3a32f7f4975971408172897961714e5683086a06_prof);

        
        $__internal_43fe8705304b79d42559625f2d3ee9c2552cdfb5159fc8c93849cc20443cb303->leave($__internal_43fe8705304b79d42559625f2d3ee9c2552cdfb5159fc8c93849cc20443cb303_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f262c45d025641b05c523aa14449357cfe204749a2a0ffc5fbe70598c19aa17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f262c45d025641b05c523aa14449357cfe204749a2a0ffc5fbe70598c19aa17->enter($__internal_8f262c45d025641b05c523aa14449357cfe204749a2a0ffc5fbe70598c19aa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f02ead226e612ea6e8b3de7afeecb82c6134c52739264afea95a10d6b27c1eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02ead226e612ea6e8b3de7afeecb82c6134c52739264afea95a10d6b27c1eba->enter($__internal_f02ead226e612ea6e8b3de7afeecb82c6134c52739264afea95a10d6b27c1eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f02ead226e612ea6e8b3de7afeecb82c6134c52739264afea95a10d6b27c1eba->leave($__internal_f02ead226e612ea6e8b3de7afeecb82c6134c52739264afea95a10d6b27c1eba_prof);

        
        $__internal_8f262c45d025641b05c523aa14449357cfe204749a2a0ffc5fbe70598c19aa17->leave($__internal_8f262c45d025641b05c523aa14449357cfe204749a2a0ffc5fbe70598c19aa17_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d715ff6386de46d1e4e930a4feecf86600402b7a5064aaf99bfb9d89abd34da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d715ff6386de46d1e4e930a4feecf86600402b7a5064aaf99bfb9d89abd34da9->enter($__internal_d715ff6386de46d1e4e930a4feecf86600402b7a5064aaf99bfb9d89abd34da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fb9544f697f33ac9733fc7f7e8de833a26e3aea4316f6dd88f8775672e37e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb9544f697f33ac9733fc7f7e8de833a26e3aea4316f6dd88f8775672e37e1e->enter($__internal_8fb9544f697f33ac9733fc7f7e8de833a26e3aea4316f6dd88f8775672e37e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fb9544f697f33ac9733fc7f7e8de833a26e3aea4316f6dd88f8775672e37e1e->leave($__internal_8fb9544f697f33ac9733fc7f7e8de833a26e3aea4316f6dd88f8775672e37e1e_prof);

        
        $__internal_d715ff6386de46d1e4e930a4feecf86600402b7a5064aaf99bfb9d89abd34da9->leave($__internal_d715ff6386de46d1e4e930a4feecf86600402b7a5064aaf99bfb9d89abd34da9_prof);

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
