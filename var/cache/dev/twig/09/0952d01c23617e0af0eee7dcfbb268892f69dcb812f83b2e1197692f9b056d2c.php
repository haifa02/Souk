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
        $__internal_281434d144bf274bbef731ab76b1c45701eb798fc6e1c1897bc7f58c8179bf87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281434d144bf274bbef731ab76b1c45701eb798fc6e1c1897bc7f58c8179bf87->enter($__internal_281434d144bf274bbef731ab76b1c45701eb798fc6e1c1897bc7f58c8179bf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $__internal_8ada82686f26b33c8e9eccb1532c092525d0bd0f236a47fbfc3d69ccb97ed488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ada82686f26b33c8e9eccb1532c092525d0bd0f236a47fbfc3d69ccb97ed488->enter($__internal_8ada82686f26b33c8e9eccb1532c092525d0bd0f236a47fbfc3d69ccb97ed488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281434d144bf274bbef731ab76b1c45701eb798fc6e1c1897bc7f58c8179bf87->leave($__internal_281434d144bf274bbef731ab76b1c45701eb798fc6e1c1897bc7f58c8179bf87_prof);

        
        $__internal_8ada82686f26b33c8e9eccb1532c092525d0bd0f236a47fbfc3d69ccb97ed488->leave($__internal_8ada82686f26b33c8e9eccb1532c092525d0bd0f236a47fbfc3d69ccb97ed488_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7314cb045af01f173e4b0e8ee9bfa1038016b4f7d3e32090318b82f7e4640fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7314cb045af01f173e4b0e8ee9bfa1038016b4f7d3e32090318b82f7e4640fa6->enter($__internal_7314cb045af01f173e4b0e8ee9bfa1038016b4f7d3e32090318b82f7e4640fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75623eda630255845ef648e7509b775aafd3e85db01a77a0567997bdc51fdbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75623eda630255845ef648e7509b775aafd3e85db01a77a0567997bdc51fdbfc->enter($__internal_75623eda630255845ef648e7509b775aafd3e85db01a77a0567997bdc51fdbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_75623eda630255845ef648e7509b775aafd3e85db01a77a0567997bdc51fdbfc->leave($__internal_75623eda630255845ef648e7509b775aafd3e85db01a77a0567997bdc51fdbfc_prof);

        
        $__internal_7314cb045af01f173e4b0e8ee9bfa1038016b4f7d3e32090318b82f7e4640fa6->leave($__internal_7314cb045af01f173e4b0e8ee9bfa1038016b4f7d3e32090318b82f7e4640fa6_prof);

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
