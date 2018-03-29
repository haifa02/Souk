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
        $__internal_4a96b7be472f8e057e1e756954eb74e06b67451b4cdef339f001c797fdf5c053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a96b7be472f8e057e1e756954eb74e06b67451b4cdef339f001c797fdf5c053->enter($__internal_4a96b7be472f8e057e1e756954eb74e06b67451b4cdef339f001c797fdf5c053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $__internal_19616055372698bd81080a4929217c4e7af42fe61423ee0f7821092938fdbc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19616055372698bd81080a4929217c4e7af42fe61423ee0f7821092938fdbc0f->enter($__internal_19616055372698bd81080a4929217c4e7af42fe61423ee0f7821092938fdbc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:admin:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a96b7be472f8e057e1e756954eb74e06b67451b4cdef339f001c797fdf5c053->leave($__internal_4a96b7be472f8e057e1e756954eb74e06b67451b4cdef339f001c797fdf5c053_prof);

        
        $__internal_19616055372698bd81080a4929217c4e7af42fe61423ee0f7821092938fdbc0f->leave($__internal_19616055372698bd81080a4929217c4e7af42fe61423ee0f7821092938fdbc0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8eb1fb1b3939fcc8c2e92215c26dacfe11f9d1f7d41fefbb0ed358c19f04923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8eb1fb1b3939fcc8c2e92215c26dacfe11f9d1f7d41fefbb0ed358c19f04923->enter($__internal_d8eb1fb1b3939fcc8c2e92215c26dacfe11f9d1f7d41fefbb0ed358c19f04923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52abe4ad144417c980925ef107c0511a8da754fb868412be54a87eee0b9ca85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52abe4ad144417c980925ef107c0511a8da754fb868412be54a87eee0b9ca85f->enter($__internal_52abe4ad144417c980925ef107c0511a8da754fb868412be54a87eee0b9ca85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52abe4ad144417c980925ef107c0511a8da754fb868412be54a87eee0b9ca85f->leave($__internal_52abe4ad144417c980925ef107c0511a8da754fb868412be54a87eee0b9ca85f_prof);

        
        $__internal_d8eb1fb1b3939fcc8c2e92215c26dacfe11f9d1f7d41fefbb0ed358c19f04923->leave($__internal_d8eb1fb1b3939fcc8c2e92215c26dacfe11f9d1f7d41fefbb0ed358c19f04923_prof);

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
