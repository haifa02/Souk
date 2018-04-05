<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_c1eee9fc077b50877ca76952dce5dfb3ef244032bcabca8918b2843dfe038cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a785208658868b3008054dd5390d77af66d37cc69e95e6ddd03eff8880c1ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a785208658868b3008054dd5390d77af66d37cc69e95e6ddd03eff8880c1ec0->enter($__internal_8a785208658868b3008054dd5390d77af66d37cc69e95e6ddd03eff8880c1ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $__internal_790c87fa8cd9cdd0e057ceb3c29750fd56adceab4eea465b1f4331fd17f3a9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790c87fa8cd9cdd0e057ceb3c29750fd56adceab4eea465b1f4331fd17f3a9f8->enter($__internal_790c87fa8cd9cdd0e057ceb3c29750fd56adceab4eea465b1f4331fd17f3a9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</title>
    </head>

    <body>

        <h1>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</h1>

        <ul>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_inbox");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_sent");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_deleted");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a></li>
        </ul>

        ";
        // line 18
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 19
        echo "
    </body>
</html>
";
        
        $__internal_8a785208658868b3008054dd5390d77af66d37cc69e95e6ddd03eff8880c1ec0->leave($__internal_8a785208658868b3008054dd5390d77af66d37cc69e95e6ddd03eff8880c1ec0_prof);

        
        $__internal_790c87fa8cd9cdd0e057ceb3c29750fd56adceab4eea465b1f4331fd17f3a9f8->leave($__internal_790c87fa8cd9cdd0e057ceb3c29750fd56adceab4eea465b1f4331fd17f3a9f8_prof);

    }

    // line 18
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_9bd91bdd4df77b2088b67967aaf406a29f62ebb2021b9cb10d719b5b74a8e901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd91bdd4df77b2088b67967aaf406a29f62ebb2021b9cb10d719b5b74a8e901->enter($__internal_9bd91bdd4df77b2088b67967aaf406a29f62ebb2021b9cb10d719b5b74a8e901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_9e5289b7d4fdb0d7867dfea141ef77a5d18d36f3fa2056ff2ba68944d379a412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5289b7d4fdb0d7867dfea141ef77a5d18d36f3fa2056ff2ba68944d379a412->enter($__internal_9e5289b7d4fdb0d7867dfea141ef77a5d18d36f3fa2056ff2ba68944d379a412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_9e5289b7d4fdb0d7867dfea141ef77a5d18d36f3fa2056ff2ba68944d379a412->leave($__internal_9e5289b7d4fdb0d7867dfea141ef77a5d18d36f3fa2056ff2ba68944d379a412_prof);

        
        $__internal_9bd91bdd4df77b2088b67967aaf406a29f62ebb2021b9cb10d719b5b74a8e901->leave($__internal_9bd91bdd4df77b2088b67967aaf406a29f62ebb2021b9cb10d719b5b74a8e901_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  71 => 19,  69 => 18,  61 => 15,  55 => 14,  49 => 13,  43 => 10,  35 => 5,  31 => 4,  26 => 1,);
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
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset={{ _charset }}\" />
        <title>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</title>
    </head>

    <body>

        <h1>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</h1>

        <ul>
            <li><a href=\"{{ url('fos_message_inbox') }}\">{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</a></li>
            <li><a href=\"{{ url('fos_message_sent') }}\">{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</a></li>
            <li><a href=\"{{ url('fos_message_deleted') }}\">{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</a></li>
        </ul>

        {% block fos_message_content %}{% endblock %}

    </body>
</html>
", "FOSMessageBundle::layout.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/layout.html.twig");
    }
}
