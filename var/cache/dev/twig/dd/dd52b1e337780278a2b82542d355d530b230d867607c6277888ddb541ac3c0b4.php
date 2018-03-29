<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
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
        $__internal_15f9eb92f8f6fc3b0188bc93604c0c17640ee05bee6a42c77d3f5fe4d5336f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f9eb92f8f6fc3b0188bc93604c0c17640ee05bee6a42c77d3f5fe4d5336f1f->enter($__internal_15f9eb92f8f6fc3b0188bc93604c0c17640ee05bee6a42c77d3f5fe4d5336f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a127355c4e9e05d46da95ad0b1e35b0c890bde9f3274b167a7f735a6e1e27d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a127355c4e9e05d46da95ad0b1e35b0c890bde9f3274b167a7f735a6e1e27d72->enter($__internal_a127355c4e9e05d46da95ad0b1e35b0c890bde9f3274b167a7f735a6e1e27d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_15f9eb92f8f6fc3b0188bc93604c0c17640ee05bee6a42c77d3f5fe4d5336f1f->leave($__internal_15f9eb92f8f6fc3b0188bc93604c0c17640ee05bee6a42c77d3f5fe4d5336f1f_prof);

        
        $__internal_a127355c4e9e05d46da95ad0b1e35b0c890bde9f3274b167a7f735a6e1e27d72->leave($__internal_a127355c4e9e05d46da95ad0b1e35b0c890bde9f3274b167a7f735a6e1e27d72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01cce3de3ee07ead4436fb2f7a39dba6ab9398b41a5112f0a6b2160bbebcf128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cce3de3ee07ead4436fb2f7a39dba6ab9398b41a5112f0a6b2160bbebcf128->enter($__internal_01cce3de3ee07ead4436fb2f7a39dba6ab9398b41a5112f0a6b2160bbebcf128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbc831c63e3746096949f83e8c82a3450554a0978ccdce804adeb0a1ce5fba9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc831c63e3746096949f83e8c82a3450554a0978ccdce804adeb0a1ce5fba9f->enter($__internal_dbc831c63e3746096949f83e8c82a3450554a0978ccdce804adeb0a1ce5fba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dbc831c63e3746096949f83e8c82a3450554a0978ccdce804adeb0a1ce5fba9f->leave($__internal_dbc831c63e3746096949f83e8c82a3450554a0978ccdce804adeb0a1ce5fba9f_prof);

        
        $__internal_01cce3de3ee07ead4436fb2f7a39dba6ab9398b41a5112f0a6b2160bbebcf128->leave($__internal_01cce3de3ee07ead4436fb2f7a39dba6ab9398b41a5112f0a6b2160bbebcf128_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bfe51dfd835eef658570351ad0f824cbcc1044e9003bc98bf3c2436123c665e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfe51dfd835eef658570351ad0f824cbcc1044e9003bc98bf3c2436123c665e->enter($__internal_9bfe51dfd835eef658570351ad0f824cbcc1044e9003bc98bf3c2436123c665e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93a09934a48558072eb48d4a3f0621d0ea81d7be87fa7dd73b61475a1ef8ddd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a09934a48558072eb48d4a3f0621d0ea81d7be87fa7dd73b61475a1ef8ddd4->enter($__internal_93a09934a48558072eb48d4a3f0621d0ea81d7be87fa7dd73b61475a1ef8ddd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_93a09934a48558072eb48d4a3f0621d0ea81d7be87fa7dd73b61475a1ef8ddd4->leave($__internal_93a09934a48558072eb48d4a3f0621d0ea81d7be87fa7dd73b61475a1ef8ddd4_prof);

        
        $__internal_9bfe51dfd835eef658570351ad0f824cbcc1044e9003bc98bf3c2436123c665e->leave($__internal_9bfe51dfd835eef658570351ad0f824cbcc1044e9003bc98bf3c2436123c665e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_74a1947f6a2ba6600a1171ed09299a8cf92ab5956e9717dcc94430bbdedaed57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a1947f6a2ba6600a1171ed09299a8cf92ab5956e9717dcc94430bbdedaed57->enter($__internal_74a1947f6a2ba6600a1171ed09299a8cf92ab5956e9717dcc94430bbdedaed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bfe69a5edabccd73dfe9ccecbd5a24af8ac12dcc98f18b10c12aabfad7699cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfe69a5edabccd73dfe9ccecbd5a24af8ac12dcc98f18b10c12aabfad7699cc->enter($__internal_8bfe69a5edabccd73dfe9ccecbd5a24af8ac12dcc98f18b10c12aabfad7699cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8bfe69a5edabccd73dfe9ccecbd5a24af8ac12dcc98f18b10c12aabfad7699cc->leave($__internal_8bfe69a5edabccd73dfe9ccecbd5a24af8ac12dcc98f18b10c12aabfad7699cc_prof);

        
        $__internal_74a1947f6a2ba6600a1171ed09299a8cf92ab5956e9717dcc94430bbdedaed57->leave($__internal_74a1947f6a2ba6600a1171ed09299a8cf92ab5956e9717dcc94430bbdedaed57_prof);

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
