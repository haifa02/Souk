<?php

/* BackBundle:admin:home.html.twig */
class __TwigTemplate_eae467047e8c49abd77c455630681235f182030b765d9d8f0cbbe2276599bd74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::panel.html.twig", "BackBundle:admin:home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b43d0cf187ad41d0f9be31de95c589f612f6b8e1c4d40f52a528ee7445ba164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b43d0cf187ad41d0f9be31de95c589f612f6b8e1c4d40f52a528ee7445ba164->enter($__internal_4b43d0cf187ad41d0f9be31de95c589f612f6b8e1c4d40f52a528ee7445ba164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $__internal_4ac1f21a0a8dffad0fe7cba06ebe8fa1a6cb9e41097eccee41dd32085f59313b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac1f21a0a8dffad0fe7cba06ebe8fa1a6cb9e41097eccee41dd32085f59313b->enter($__internal_4ac1f21a0a8dffad0fe7cba06ebe8fa1a6cb9e41097eccee41dd32085f59313b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b43d0cf187ad41d0f9be31de95c589f612f6b8e1c4d40f52a528ee7445ba164->leave($__internal_4b43d0cf187ad41d0f9be31de95c589f612f6b8e1c4d40f52a528ee7445ba164_prof);

        
        $__internal_4ac1f21a0a8dffad0fe7cba06ebe8fa1a6cb9e41097eccee41dd32085f59313b->leave($__internal_4ac1f21a0a8dffad0fe7cba06ebe8fa1a6cb9e41097eccee41dd32085f59313b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfd0ddff9bc2f461a85398d892f76cd2d61512e6b3467b0561e8225ba97407df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd0ddff9bc2f461a85398d892f76cd2d61512e6b3467b0561e8225ba97407df->enter($__internal_bfd0ddff9bc2f461a85398d892f76cd2d61512e6b3467b0561e8225ba97407df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ce3b51f2b29fad72692ac096c19ea7ce03e2d880138c986fb216cfbd7fa4275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce3b51f2b29fad72692ac096c19ea7ce03e2d880138c986fb216cfbd7fa4275->enter($__internal_4ce3b51f2b29fad72692ac096c19ea7ce03e2d880138c986fb216cfbd7fa4275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-md-12\">
    <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-info back-widget-set text-center\">
                <i class=\"fa fa-history fa-5x\"></i>
                <h3>500+&nbsp; <i class=\"fa fa-dollar\"></i></h3>
               Amount Pending For Approval
            </div>
        </div>
  <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-success back-widget-set text-center\">
                <i class=\"fa fa-bars fa-5x\"></i>
                <h3>300+ Tasks</h3>
                Pending For New Events
            </div>
        </div>
   <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-warning back-widget-set text-center\">
                <i class=\"fa fa-recycle fa-5x\"></i>
                <h3>56+ Calls</h3>
               To Be Made For New Orders
            </div>
        </div>
   <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-danger back-widget-set text-center\">
                <i class=\"fa fa-briefcase fa-5x\"></i>
                <h3>30+ Issues </h3>
                That Should Be Resolved Now
            </div>
        </div>
</div>

";
        
        $__internal_4ce3b51f2b29fad72692ac096c19ea7ce03e2d880138c986fb216cfbd7fa4275->leave($__internal_4ce3b51f2b29fad72692ac096c19ea7ce03e2d880138c986fb216cfbd7fa4275_prof);

        
        $__internal_bfd0ddff9bc2f461a85398d892f76cd2d61512e6b3467b0561e8225ba97407df->leave($__internal_bfd0ddff9bc2f461a85398d892f76cd2d61512e6b3467b0561e8225ba97407df_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:admin:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackBundle::panel.html.twig' %}

{% block body %}
<div class=\"col-md-12\">
    <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-info back-widget-set text-center\">
                <i class=\"fa fa-history fa-5x\"></i>
                <h3>500+&nbsp; <i class=\"fa fa-dollar\"></i></h3>
               Amount Pending For Approval
            </div>
        </div>
  <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-success back-widget-set text-center\">
                <i class=\"fa fa-bars fa-5x\"></i>
                <h3>300+ Tasks</h3>
                Pending For New Events
            </div>
        </div>
   <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-warning back-widget-set text-center\">
                <i class=\"fa fa-recycle fa-5x\"></i>
                <h3>56+ Calls</h3>
               To Be Made For New Orders
            </div>
        </div>
   <div class=\"col-md-3 col-sm-3 col-xs-6\">
          <div class=\"alert alert-danger back-widget-set text-center\">
                <i class=\"fa fa-briefcase fa-5x\"></i>
                <h3>30+ Issues </h3>
                That Should Be Resolved Now
            </div>
        </div>
</div>

{% endblock %}
", "BackBundle:admin:home.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/admin/home.html.twig");
    }
}
