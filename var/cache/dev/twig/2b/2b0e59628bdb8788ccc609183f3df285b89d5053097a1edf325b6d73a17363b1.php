<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b14b59aafef127ca78f5bac363755e1daa0e21d7e9aab4aab4fe7ca72316450b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14b59aafef127ca78f5bac363755e1daa0e21d7e9aab4aab4fe7ca72316450b->enter($__internal_b14b59aafef127ca78f5bac363755e1daa0e21d7e9aab4aab4fe7ca72316450b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5a19758506e7374092e5ff1a02b5f88f563f1ffaffaec0342da90a875df50885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a19758506e7374092e5ff1a02b5f88f563f1ffaffaec0342da90a875df50885->enter($__internal_5a19758506e7374092e5ff1a02b5f88f563f1ffaffaec0342da90a875df50885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b14b59aafef127ca78f5bac363755e1daa0e21d7e9aab4aab4fe7ca72316450b->leave($__internal_b14b59aafef127ca78f5bac363755e1daa0e21d7e9aab4aab4fe7ca72316450b_prof);

        
        $__internal_5a19758506e7374092e5ff1a02b5f88f563f1ffaffaec0342da90a875df50885->leave($__internal_5a19758506e7374092e5ff1a02b5f88f563f1ffaffaec0342da90a875df50885_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d088dd9bc76aaa4f2a3aac67e110d976d0cfc186345267ef9c26afbc6df438ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d088dd9bc76aaa4f2a3aac67e110d976d0cfc186345267ef9c26afbc6df438ae->enter($__internal_d088dd9bc76aaa4f2a3aac67e110d976d0cfc186345267ef9c26afbc6df438ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d141e1919b36b1e23b7e0ea3d886c356ef02f4700ebe887f794995528c9aec60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d141e1919b36b1e23b7e0ea3d886c356ef02f4700ebe887f794995528c9aec60->enter($__internal_d141e1919b36b1e23b7e0ea3d886c356ef02f4700ebe887f794995528c9aec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d141e1919b36b1e23b7e0ea3d886c356ef02f4700ebe887f794995528c9aec60->leave($__internal_d141e1919b36b1e23b7e0ea3d886c356ef02f4700ebe887f794995528c9aec60_prof);

        
        $__internal_d088dd9bc76aaa4f2a3aac67e110d976d0cfc186345267ef9c26afbc6df438ae->leave($__internal_d088dd9bc76aaa4f2a3aac67e110d976d0cfc186345267ef9c26afbc6df438ae_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_71eb1f1ad3705e6f4ac005b96cc1a668e66d930d4f0a80646d0d691497271b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71eb1f1ad3705e6f4ac005b96cc1a668e66d930d4f0a80646d0d691497271b44->enter($__internal_71eb1f1ad3705e6f4ac005b96cc1a668e66d930d4f0a80646d0d691497271b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92cf40b42e53a325b31433a0fe6056273b7e8ca9e8b5fbaf08ffcecf020a14d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cf40b42e53a325b31433a0fe6056273b7e8ca9e8b5fbaf08ffcecf020a14d0->enter($__internal_92cf40b42e53a325b31433a0fe6056273b7e8ca9e8b5fbaf08ffcecf020a14d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92cf40b42e53a325b31433a0fe6056273b7e8ca9e8b5fbaf08ffcecf020a14d0->leave($__internal_92cf40b42e53a325b31433a0fe6056273b7e8ca9e8b5fbaf08ffcecf020a14d0_prof);

        
        $__internal_71eb1f1ad3705e6f4ac005b96cc1a668e66d930d4f0a80646d0d691497271b44->leave($__internal_71eb1f1ad3705e6f4ac005b96cc1a668e66d930d4f0a80646d0d691497271b44_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf291cba6d7f61f5f7e65d1de6c7739e1b9640cbbfd6dec55eb5c967d70d937f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf291cba6d7f61f5f7e65d1de6c7739e1b9640cbbfd6dec55eb5c967d70d937f->enter($__internal_bf291cba6d7f61f5f7e65d1de6c7739e1b9640cbbfd6dec55eb5c967d70d937f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d08a16eb204baefe838383b6135f6ddc80614ecffcdb5986fc32a0eaba8e949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d08a16eb204baefe838383b6135f6ddc80614ecffcdb5986fc32a0eaba8e949->enter($__internal_1d08a16eb204baefe838383b6135f6ddc80614ecffcdb5986fc32a0eaba8e949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1d08a16eb204baefe838383b6135f6ddc80614ecffcdb5986fc32a0eaba8e949->leave($__internal_1d08a16eb204baefe838383b6135f6ddc80614ecffcdb5986fc32a0eaba8e949_prof);

        
        $__internal_bf291cba6d7f61f5f7e65d1de6c7739e1b9640cbbfd6dec55eb5c967d70d937f->leave($__internal_bf291cba6d7f61f5f7e65d1de6c7739e1b9640cbbfd6dec55eb5c967d70d937f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
