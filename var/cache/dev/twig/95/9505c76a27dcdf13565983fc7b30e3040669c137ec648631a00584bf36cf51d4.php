<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6c4aa4e34d8bff29b2051cccc8321076fac68610557f10cd64006c977502c820 extends Twig_Template
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
        $__internal_d35d5e3674b7b716584063761ad48b186497cb71aacae04638ddac766a85cc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35d5e3674b7b716584063761ad48b186497cb71aacae04638ddac766a85cc98->enter($__internal_d35d5e3674b7b716584063761ad48b186497cb71aacae04638ddac766a85cc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5ab8ade7eca32f0ca248e9dedd2551325d7eef6733b83448b9eea5e73227d610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab8ade7eca32f0ca248e9dedd2551325d7eef6733b83448b9eea5e73227d610->enter($__internal_5ab8ade7eca32f0ca248e9dedd2551325d7eef6733b83448b9eea5e73227d610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d35d5e3674b7b716584063761ad48b186497cb71aacae04638ddac766a85cc98->leave($__internal_d35d5e3674b7b716584063761ad48b186497cb71aacae04638ddac766a85cc98_prof);

        
        $__internal_5ab8ade7eca32f0ca248e9dedd2551325d7eef6733b83448b9eea5e73227d610->leave($__internal_5ab8ade7eca32f0ca248e9dedd2551325d7eef6733b83448b9eea5e73227d610_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82c4a16ec1fde5cca3494bdd14b4c07391919d53a0b60e459a45481bac78d67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c4a16ec1fde5cca3494bdd14b4c07391919d53a0b60e459a45481bac78d67f->enter($__internal_82c4a16ec1fde5cca3494bdd14b4c07391919d53a0b60e459a45481bac78d67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d412e65cee7c964288d18922776323c035345ee51d77d749c368acb101d9f6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d412e65cee7c964288d18922776323c035345ee51d77d749c368acb101d9f6ba->enter($__internal_d412e65cee7c964288d18922776323c035345ee51d77d749c368acb101d9f6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d412e65cee7c964288d18922776323c035345ee51d77d749c368acb101d9f6ba->leave($__internal_d412e65cee7c964288d18922776323c035345ee51d77d749c368acb101d9f6ba_prof);

        
        $__internal_82c4a16ec1fde5cca3494bdd14b4c07391919d53a0b60e459a45481bac78d67f->leave($__internal_82c4a16ec1fde5cca3494bdd14b4c07391919d53a0b60e459a45481bac78d67f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac5bce8252dfdf9af2742cd6f48fc947373d5f6305425c7a2fbbaad09153cccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5bce8252dfdf9af2742cd6f48fc947373d5f6305425c7a2fbbaad09153cccb->enter($__internal_ac5bce8252dfdf9af2742cd6f48fc947373d5f6305425c7a2fbbaad09153cccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa0e454aa25a9fcbe64a5c654d5691fa7376e9ec40873849e8fe682a4a3341ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0e454aa25a9fcbe64a5c654d5691fa7376e9ec40873849e8fe682a4a3341ee->enter($__internal_fa0e454aa25a9fcbe64a5c654d5691fa7376e9ec40873849e8fe682a4a3341ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa0e454aa25a9fcbe64a5c654d5691fa7376e9ec40873849e8fe682a4a3341ee->leave($__internal_fa0e454aa25a9fcbe64a5c654d5691fa7376e9ec40873849e8fe682a4a3341ee_prof);

        
        $__internal_ac5bce8252dfdf9af2742cd6f48fc947373d5f6305425c7a2fbbaad09153cccb->leave($__internal_ac5bce8252dfdf9af2742cd6f48fc947373d5f6305425c7a2fbbaad09153cccb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_94572a06619ea52537b07ce7392308416b3ff52c32582ff6c3ea266841268d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94572a06619ea52537b07ce7392308416b3ff52c32582ff6c3ea266841268d6b->enter($__internal_94572a06619ea52537b07ce7392308416b3ff52c32582ff6c3ea266841268d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1627c86c621e2896625f05b0c808d196cc3974c912ea26be9cf78f059ae828c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1627c86c621e2896625f05b0c808d196cc3974c912ea26be9cf78f059ae828c->enter($__internal_d1627c86c621e2896625f05b0c808d196cc3974c912ea26be9cf78f059ae828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d1627c86c621e2896625f05b0c808d196cc3974c912ea26be9cf78f059ae828c->leave($__internal_d1627c86c621e2896625f05b0c808d196cc3974c912ea26be9cf78f059ae828c_prof);

        
        $__internal_94572a06619ea52537b07ce7392308416b3ff52c32582ff6c3ea266841268d6b->leave($__internal_94572a06619ea52537b07ce7392308416b3ff52c32582ff6c3ea266841268d6b_prof);

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
