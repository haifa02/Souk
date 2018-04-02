<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5b828c762bddd7d74c22067ec8bcf5f30562af75b346849003848334c7a4d1d0 extends Twig_Template
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
        $__internal_0a0318e2b9ac9a85e6f7177a119ee1631416a9ed530677087892ff50944b0c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0318e2b9ac9a85e6f7177a119ee1631416a9ed530677087892ff50944b0c4e->enter($__internal_0a0318e2b9ac9a85e6f7177a119ee1631416a9ed530677087892ff50944b0c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2672612b190d26ebb745835d735f04bf318509a8f5d12a5c854800c683763481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2672612b190d26ebb745835d735f04bf318509a8f5d12a5c854800c683763481->enter($__internal_2672612b190d26ebb745835d735f04bf318509a8f5d12a5c854800c683763481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0a0318e2b9ac9a85e6f7177a119ee1631416a9ed530677087892ff50944b0c4e->leave($__internal_0a0318e2b9ac9a85e6f7177a119ee1631416a9ed530677087892ff50944b0c4e_prof);

        
        $__internal_2672612b190d26ebb745835d735f04bf318509a8f5d12a5c854800c683763481->leave($__internal_2672612b190d26ebb745835d735f04bf318509a8f5d12a5c854800c683763481_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_614064dee2dbd21a9cb542c96adddce0d5e7184baedae971103ec7b506ffa62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614064dee2dbd21a9cb542c96adddce0d5e7184baedae971103ec7b506ffa62a->enter($__internal_614064dee2dbd21a9cb542c96adddce0d5e7184baedae971103ec7b506ffa62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed86215d79fb857f36accc06edc6e3396fff1664d4c3272ec3d78f8db38197ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed86215d79fb857f36accc06edc6e3396fff1664d4c3272ec3d78f8db38197ef->enter($__internal_ed86215d79fb857f36accc06edc6e3396fff1664d4c3272ec3d78f8db38197ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ed86215d79fb857f36accc06edc6e3396fff1664d4c3272ec3d78f8db38197ef->leave($__internal_ed86215d79fb857f36accc06edc6e3396fff1664d4c3272ec3d78f8db38197ef_prof);

        
        $__internal_614064dee2dbd21a9cb542c96adddce0d5e7184baedae971103ec7b506ffa62a->leave($__internal_614064dee2dbd21a9cb542c96adddce0d5e7184baedae971103ec7b506ffa62a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3134346ed419ab8373fd5f993cc0bb9128331e57026b66742492a0e67d8bd3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3134346ed419ab8373fd5f993cc0bb9128331e57026b66742492a0e67d8bd3fc->enter($__internal_3134346ed419ab8373fd5f993cc0bb9128331e57026b66742492a0e67d8bd3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56a013b1bcb1cf719f63f561b87fea851b5e468dabb0de272b60839e5e2a6cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a013b1bcb1cf719f63f561b87fea851b5e468dabb0de272b60839e5e2a6cce->enter($__internal_56a013b1bcb1cf719f63f561b87fea851b5e468dabb0de272b60839e5e2a6cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_56a013b1bcb1cf719f63f561b87fea851b5e468dabb0de272b60839e5e2a6cce->leave($__internal_56a013b1bcb1cf719f63f561b87fea851b5e468dabb0de272b60839e5e2a6cce_prof);

        
        $__internal_3134346ed419ab8373fd5f993cc0bb9128331e57026b66742492a0e67d8bd3fc->leave($__internal_3134346ed419ab8373fd5f993cc0bb9128331e57026b66742492a0e67d8bd3fc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0025ec8a671ce1606462714f0d82f83f91c4503fac81b3a3d3f177159dbab99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0025ec8a671ce1606462714f0d82f83f91c4503fac81b3a3d3f177159dbab99e->enter($__internal_0025ec8a671ce1606462714f0d82f83f91c4503fac81b3a3d3f177159dbab99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b4ae4a13afd48818db4520574588b9d5a011f2f2277a6c0098fddedd98a1225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4ae4a13afd48818db4520574588b9d5a011f2f2277a6c0098fddedd98a1225->enter($__internal_9b4ae4a13afd48818db4520574588b9d5a011f2f2277a6c0098fddedd98a1225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b4ae4a13afd48818db4520574588b9d5a011f2f2277a6c0098fddedd98a1225->leave($__internal_9b4ae4a13afd48818db4520574588b9d5a011f2f2277a6c0098fddedd98a1225_prof);

        
        $__internal_0025ec8a671ce1606462714f0d82f83f91c4503fac81b3a3d3f177159dbab99e->leave($__internal_0025ec8a671ce1606462714f0d82f83f91c4503fac81b3a3d3f177159dbab99e_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
