<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f099fc96f6c4bdc2627f4db5980f7bfd4bd3005352c87a19779e0587d7440481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db78d4c4397c7173ab6c67775f2ac9f676ff21efbc00175b3dcf1542995c87ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db78d4c4397c7173ab6c67775f2ac9f676ff21efbc00175b3dcf1542995c87ac->enter($__internal_db78d4c4397c7173ab6c67775f2ac9f676ff21efbc00175b3dcf1542995c87ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c14a63e57a6f56ffc692eca7a199567b4ab6b4f08fe737b7678731f93b5a476d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14a63e57a6f56ffc692eca7a199567b4ab6b4f08fe737b7678731f93b5a476d->enter($__internal_c14a63e57a6f56ffc692eca7a199567b4ab6b4f08fe737b7678731f93b5a476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_db78d4c4397c7173ab6c67775f2ac9f676ff21efbc00175b3dcf1542995c87ac->leave($__internal_db78d4c4397c7173ab6c67775f2ac9f676ff21efbc00175b3dcf1542995c87ac_prof);

        
        $__internal_c14a63e57a6f56ffc692eca7a199567b4ab6b4f08fe737b7678731f93b5a476d->leave($__internal_c14a63e57a6f56ffc692eca7a199567b4ab6b4f08fe737b7678731f93b5a476d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
