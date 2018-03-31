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
        $__internal_c10e95c5bc0df534b9515b137bdfb322b72d915dda4f8110cfaf3e8c0b7e6901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10e95c5bc0df534b9515b137bdfb322b72d915dda4f8110cfaf3e8c0b7e6901->enter($__internal_c10e95c5bc0df534b9515b137bdfb322b72d915dda4f8110cfaf3e8c0b7e6901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fae2ef7fae32e4aa514e46bf6dc221fb676b92771f935ff8d3e9d4bbfe27db74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae2ef7fae32e4aa514e46bf6dc221fb676b92771f935ff8d3e9d4bbfe27db74->enter($__internal_fae2ef7fae32e4aa514e46bf6dc221fb676b92771f935ff8d3e9d4bbfe27db74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c10e95c5bc0df534b9515b137bdfb322b72d915dda4f8110cfaf3e8c0b7e6901->leave($__internal_c10e95c5bc0df534b9515b137bdfb322b72d915dda4f8110cfaf3e8c0b7e6901_prof);

        
        $__internal_fae2ef7fae32e4aa514e46bf6dc221fb676b92771f935ff8d3e9d4bbfe27db74->leave($__internal_fae2ef7fae32e4aa514e46bf6dc221fb676b92771f935ff8d3e9d4bbfe27db74_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9ab84532878b69cdf97dccb74d1f207f2155e0528ed805b2800d6a764a5a349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ab84532878b69cdf97dccb74d1f207f2155e0528ed805b2800d6a764a5a349->enter($__internal_d9ab84532878b69cdf97dccb74d1f207f2155e0528ed805b2800d6a764a5a349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_050a14e2f7c75ab1c3690c43da75487bbc0da23e5b913567ea8f230893b4533f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050a14e2f7c75ab1c3690c43da75487bbc0da23e5b913567ea8f230893b4533f->enter($__internal_050a14e2f7c75ab1c3690c43da75487bbc0da23e5b913567ea8f230893b4533f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_050a14e2f7c75ab1c3690c43da75487bbc0da23e5b913567ea8f230893b4533f->leave($__internal_050a14e2f7c75ab1c3690c43da75487bbc0da23e5b913567ea8f230893b4533f_prof);

        
        $__internal_d9ab84532878b69cdf97dccb74d1f207f2155e0528ed805b2800d6a764a5a349->leave($__internal_d9ab84532878b69cdf97dccb74d1f207f2155e0528ed805b2800d6a764a5a349_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dde920d3807cc41315e5caab6cf4d8edf92d025f295aa6ee96f5add10d3a6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dde920d3807cc41315e5caab6cf4d8edf92d025f295aa6ee96f5add10d3a6b4->enter($__internal_8dde920d3807cc41315e5caab6cf4d8edf92d025f295aa6ee96f5add10d3a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb5ad678141abb61bc1b5ae9f383c251b9df7ea7503ee4b82db4f4f8b0518a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5ad678141abb61bc1b5ae9f383c251b9df7ea7503ee4b82db4f4f8b0518a11->enter($__internal_bb5ad678141abb61bc1b5ae9f383c251b9df7ea7503ee4b82db4f4f8b0518a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bb5ad678141abb61bc1b5ae9f383c251b9df7ea7503ee4b82db4f4f8b0518a11->leave($__internal_bb5ad678141abb61bc1b5ae9f383c251b9df7ea7503ee4b82db4f4f8b0518a11_prof);

        
        $__internal_8dde920d3807cc41315e5caab6cf4d8edf92d025f295aa6ee96f5add10d3a6b4->leave($__internal_8dde920d3807cc41315e5caab6cf4d8edf92d025f295aa6ee96f5add10d3a6b4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_625736a025811c58aaf40c957b531a730650c410a0c2b6d3e94ce9d3fc529471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625736a025811c58aaf40c957b531a730650c410a0c2b6d3e94ce9d3fc529471->enter($__internal_625736a025811c58aaf40c957b531a730650c410a0c2b6d3e94ce9d3fc529471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ecc77dcaa36b94aa0747a1bbd5f2d6ea2fc7f829ee06e2b10d5a27c9a060c8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc77dcaa36b94aa0747a1bbd5f2d6ea2fc7f829ee06e2b10d5a27c9a060c8b7->enter($__internal_ecc77dcaa36b94aa0747a1bbd5f2d6ea2fc7f829ee06e2b10d5a27c9a060c8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ecc77dcaa36b94aa0747a1bbd5f2d6ea2fc7f829ee06e2b10d5a27c9a060c8b7->leave($__internal_ecc77dcaa36b94aa0747a1bbd5f2d6ea2fc7f829ee06e2b10d5a27c9a060c8b7_prof);

        
        $__internal_625736a025811c58aaf40c957b531a730650c410a0c2b6d3e94ce9d3fc529471->leave($__internal_625736a025811c58aaf40c957b531a730650c410a0c2b6d3e94ce9d3fc529471_prof);

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
