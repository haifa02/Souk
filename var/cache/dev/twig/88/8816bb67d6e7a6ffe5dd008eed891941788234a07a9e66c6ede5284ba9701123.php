<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
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
        $__internal_967d5868ab8f5f2c91d07af4da95a1f78638b879a77ea9feafce0335b326d8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967d5868ab8f5f2c91d07af4da95a1f78638b879a77ea9feafce0335b326d8a6->enter($__internal_967d5868ab8f5f2c91d07af4da95a1f78638b879a77ea9feafce0335b326d8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ddf7db4926e72a917dae1a2d121d1fb3aacc81bc5dfc43800a0174b118e6b809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf7db4926e72a917dae1a2d121d1fb3aacc81bc5dfc43800a0174b118e6b809->enter($__internal_ddf7db4926e72a917dae1a2d121d1fb3aacc81bc5dfc43800a0174b118e6b809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_967d5868ab8f5f2c91d07af4da95a1f78638b879a77ea9feafce0335b326d8a6->leave($__internal_967d5868ab8f5f2c91d07af4da95a1f78638b879a77ea9feafce0335b326d8a6_prof);

        
        $__internal_ddf7db4926e72a917dae1a2d121d1fb3aacc81bc5dfc43800a0174b118e6b809->leave($__internal_ddf7db4926e72a917dae1a2d121d1fb3aacc81bc5dfc43800a0174b118e6b809_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6aed801e4d87335d25b8c01683a62072c408ac91655779319dcc732aefb2529e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aed801e4d87335d25b8c01683a62072c408ac91655779319dcc732aefb2529e->enter($__internal_6aed801e4d87335d25b8c01683a62072c408ac91655779319dcc732aefb2529e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e97825bdd094c1ed681669ad011b812d6f12a35baa2acaf0bfb9ce3006441d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e97825bdd094c1ed681669ad011b812d6f12a35baa2acaf0bfb9ce3006441d4->enter($__internal_9e97825bdd094c1ed681669ad011b812d6f12a35baa2acaf0bfb9ce3006441d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9e97825bdd094c1ed681669ad011b812d6f12a35baa2acaf0bfb9ce3006441d4->leave($__internal_9e97825bdd094c1ed681669ad011b812d6f12a35baa2acaf0bfb9ce3006441d4_prof);

        
        $__internal_6aed801e4d87335d25b8c01683a62072c408ac91655779319dcc732aefb2529e->leave($__internal_6aed801e4d87335d25b8c01683a62072c408ac91655779319dcc732aefb2529e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0f17ed17f1a77cbdb986680a035a11d3f69f0cc1e74180877d7bddfd1be6038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f17ed17f1a77cbdb986680a035a11d3f69f0cc1e74180877d7bddfd1be6038->enter($__internal_b0f17ed17f1a77cbdb986680a035a11d3f69f0cc1e74180877d7bddfd1be6038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f3951c9d27129e51bb7d453194bf750004425aea3635715ca6ec723b3d4cffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3951c9d27129e51bb7d453194bf750004425aea3635715ca6ec723b3d4cffa->enter($__internal_0f3951c9d27129e51bb7d453194bf750004425aea3635715ca6ec723b3d4cffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0f3951c9d27129e51bb7d453194bf750004425aea3635715ca6ec723b3d4cffa->leave($__internal_0f3951c9d27129e51bb7d453194bf750004425aea3635715ca6ec723b3d4cffa_prof);

        
        $__internal_b0f17ed17f1a77cbdb986680a035a11d3f69f0cc1e74180877d7bddfd1be6038->leave($__internal_b0f17ed17f1a77cbdb986680a035a11d3f69f0cc1e74180877d7bddfd1be6038_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccc0229283720977bcb6b98a4fe75a7fef98074711d78d067aaa0e54a2fcc31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc0229283720977bcb6b98a4fe75a7fef98074711d78d067aaa0e54a2fcc31a->enter($__internal_ccc0229283720977bcb6b98a4fe75a7fef98074711d78d067aaa0e54a2fcc31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0b1265fb26e206ed69d93208a94a09117ba99165db80e381b278194e01267af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b1265fb26e206ed69d93208a94a09117ba99165db80e381b278194e01267af->enter($__internal_e0b1265fb26e206ed69d93208a94a09117ba99165db80e381b278194e01267af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0b1265fb26e206ed69d93208a94a09117ba99165db80e381b278194e01267af->leave($__internal_e0b1265fb26e206ed69d93208a94a09117ba99165db80e381b278194e01267af_prof);

        
        $__internal_ccc0229283720977bcb6b98a4fe75a7fef98074711d78d067aaa0e54a2fcc31a->leave($__internal_ccc0229283720977bcb6b98a4fe75a7fef98074711d78d067aaa0e54a2fcc31a_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
