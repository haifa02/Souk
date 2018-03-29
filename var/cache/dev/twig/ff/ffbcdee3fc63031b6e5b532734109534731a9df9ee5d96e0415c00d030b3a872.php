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
        $__internal_dc662793e16cb1c2910325175382a1780b4aed0c19af4294522c38e1ef1fa6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc662793e16cb1c2910325175382a1780b4aed0c19af4294522c38e1ef1fa6a4->enter($__internal_dc662793e16cb1c2910325175382a1780b4aed0c19af4294522c38e1ef1fa6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_90e9ea7447a48fbd7e7c74711e1a67041ae34d610b5d02b40f74bf37f5e2ec76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e9ea7447a48fbd7e7c74711e1a67041ae34d610b5d02b40f74bf37f5e2ec76->enter($__internal_90e9ea7447a48fbd7e7c74711e1a67041ae34d610b5d02b40f74bf37f5e2ec76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dc662793e16cb1c2910325175382a1780b4aed0c19af4294522c38e1ef1fa6a4->leave($__internal_dc662793e16cb1c2910325175382a1780b4aed0c19af4294522c38e1ef1fa6a4_prof);

        
        $__internal_90e9ea7447a48fbd7e7c74711e1a67041ae34d610b5d02b40f74bf37f5e2ec76->leave($__internal_90e9ea7447a48fbd7e7c74711e1a67041ae34d610b5d02b40f74bf37f5e2ec76_prof);

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
