<?php

/* BackBundle:admin:home.html.twig */
class __TwigTemplate_ffdc54f0ddbc3459171b8831a7ed37ab0909e6f89d39ffbe5638a4bb90412aea extends Twig_Template
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
        $__internal_4cf814a8019732379c77f87b76592676bb2df71709c2df2e4406b3426a2e4d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf814a8019732379c77f87b76592676bb2df71709c2df2e4406b3426a2e4d39->enter($__internal_4cf814a8019732379c77f87b76592676bb2df71709c2df2e4406b3426a2e4d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $__internal_0a2370c69cf9b9f8f5b996ccf59c44eea0cc832e6b42c0579892e6c52bd0c293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2370c69cf9b9f8f5b996ccf59c44eea0cc832e6b42c0579892e6c52bd0c293->enter($__internal_0a2370c69cf9b9f8f5b996ccf59c44eea0cc832e6b42c0579892e6c52bd0c293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf814a8019732379c77f87b76592676bb2df71709c2df2e4406b3426a2e4d39->leave($__internal_4cf814a8019732379c77f87b76592676bb2df71709c2df2e4406b3426a2e4d39_prof);

        
        $__internal_0a2370c69cf9b9f8f5b996ccf59c44eea0cc832e6b42c0579892e6c52bd0c293->leave($__internal_0a2370c69cf9b9f8f5b996ccf59c44eea0cc832e6b42c0579892e6c52bd0c293_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7709255e328a9bc1e4dd9eabaac4e321050709d4d869d41aa20fee076d1abca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7709255e328a9bc1e4dd9eabaac4e321050709d4d869d41aa20fee076d1abca->enter($__internal_b7709255e328a9bc1e4dd9eabaac4e321050709d4d869d41aa20fee076d1abca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36429b52aa7fe6ea7052442a9e154263f9538bd974ee1c9449e642237bd16df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36429b52aa7fe6ea7052442a9e154263f9538bd974ee1c9449e642237bd16df1->enter($__internal_36429b52aa7fe6ea7052442a9e154263f9538bd974ee1c9449e642237bd16df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36429b52aa7fe6ea7052442a9e154263f9538bd974ee1c9449e642237bd16df1->leave($__internal_36429b52aa7fe6ea7052442a9e154263f9538bd974ee1c9449e642237bd16df1_prof);

        
        $__internal_b7709255e328a9bc1e4dd9eabaac4e321050709d4d869d41aa20fee076d1abca->leave($__internal_b7709255e328a9bc1e4dd9eabaac4e321050709d4d869d41aa20fee076d1abca_prof);

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
