<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bbc5bb4e996e66192582f2f3da59e2c0b9be6c22ca0b73bd7fb8e3f2a6007110 extends Twig_Template
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
        $__internal_efa53eb5bf9ae9190e078a92263894b3d3bdd7e7420583bad10b850a187cc5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa53eb5bf9ae9190e078a92263894b3d3bdd7e7420583bad10b850a187cc5ab->enter($__internal_efa53eb5bf9ae9190e078a92263894b3d3bdd7e7420583bad10b850a187cc5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_27d19302d05802bd4e1cfffea0e2a00853c4750ad93009e986fb8ed72b80d288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d19302d05802bd4e1cfffea0e2a00853c4750ad93009e986fb8ed72b80d288->enter($__internal_27d19302d05802bd4e1cfffea0e2a00853c4750ad93009e986fb8ed72b80d288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_efa53eb5bf9ae9190e078a92263894b3d3bdd7e7420583bad10b850a187cc5ab->leave($__internal_efa53eb5bf9ae9190e078a92263894b3d3bdd7e7420583bad10b850a187cc5ab_prof);

        
        $__internal_27d19302d05802bd4e1cfffea0e2a00853c4750ad93009e986fb8ed72b80d288->leave($__internal_27d19302d05802bd4e1cfffea0e2a00853c4750ad93009e986fb8ed72b80d288_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24cd6fdfd79f45dac6ab63eb86f397c489e15e44cfdb38be5bceba9d1f4bf40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24cd6fdfd79f45dac6ab63eb86f397c489e15e44cfdb38be5bceba9d1f4bf40d->enter($__internal_24cd6fdfd79f45dac6ab63eb86f397c489e15e44cfdb38be5bceba9d1f4bf40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08ba08eda9968fa7ae9c8785ab87b58213ba63d2e05a5af0173d0324f3b8d4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ba08eda9968fa7ae9c8785ab87b58213ba63d2e05a5af0173d0324f3b8d4ca->enter($__internal_08ba08eda9968fa7ae9c8785ab87b58213ba63d2e05a5af0173d0324f3b8d4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_08ba08eda9968fa7ae9c8785ab87b58213ba63d2e05a5af0173d0324f3b8d4ca->leave($__internal_08ba08eda9968fa7ae9c8785ab87b58213ba63d2e05a5af0173d0324f3b8d4ca_prof);

        
        $__internal_24cd6fdfd79f45dac6ab63eb86f397c489e15e44cfdb38be5bceba9d1f4bf40d->leave($__internal_24cd6fdfd79f45dac6ab63eb86f397c489e15e44cfdb38be5bceba9d1f4bf40d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_80a5dea09f448bd8505adbb4fcbfe2cf9dcd3967eff4fe690cc418d369bb27cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a5dea09f448bd8505adbb4fcbfe2cf9dcd3967eff4fe690cc418d369bb27cb->enter($__internal_80a5dea09f448bd8505adbb4fcbfe2cf9dcd3967eff4fe690cc418d369bb27cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b86516217bbcddeedbcb59f57ab6974aaeaacf339c51ea0eaa986aafff221273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86516217bbcddeedbcb59f57ab6974aaeaacf339c51ea0eaa986aafff221273->enter($__internal_b86516217bbcddeedbcb59f57ab6974aaeaacf339c51ea0eaa986aafff221273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b86516217bbcddeedbcb59f57ab6974aaeaacf339c51ea0eaa986aafff221273->leave($__internal_b86516217bbcddeedbcb59f57ab6974aaeaacf339c51ea0eaa986aafff221273_prof);

        
        $__internal_80a5dea09f448bd8505adbb4fcbfe2cf9dcd3967eff4fe690cc418d369bb27cb->leave($__internal_80a5dea09f448bd8505adbb4fcbfe2cf9dcd3967eff4fe690cc418d369bb27cb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_588c21b68142dcd964d8a3313de51ed876736f81da5fb33b9e2eb004f34c1a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588c21b68142dcd964d8a3313de51ed876736f81da5fb33b9e2eb004f34c1a53->enter($__internal_588c21b68142dcd964d8a3313de51ed876736f81da5fb33b9e2eb004f34c1a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03ce17043d7c5b71c0b04d2dd6a809f0e0f5648598c4dda1cae276acd1d5ef08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ce17043d7c5b71c0b04d2dd6a809f0e0f5648598c4dda1cae276acd1d5ef08->enter($__internal_03ce17043d7c5b71c0b04d2dd6a809f0e0f5648598c4dda1cae276acd1d5ef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_03ce17043d7c5b71c0b04d2dd6a809f0e0f5648598c4dda1cae276acd1d5ef08->leave($__internal_03ce17043d7c5b71c0b04d2dd6a809f0e0f5648598c4dda1cae276acd1d5ef08_prof);

        
        $__internal_588c21b68142dcd964d8a3313de51ed876736f81da5fb33b9e2eb004f34c1a53->leave($__internal_588c21b68142dcd964d8a3313de51ed876736f81da5fb33b9e2eb004f34c1a53_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
