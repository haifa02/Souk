<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_6abb498b344c2b529bee3c60440e64911d864e6beec45653369655d10151596d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSMessageBundle:Message:sent.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ab140f3ae144ccd1302e3b11151d546245c880609f6921fa06a867e67e31546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab140f3ae144ccd1302e3b11151d546245c880609f6921fa06a867e67e31546->enter($__internal_2ab140f3ae144ccd1302e3b11151d546245c880609f6921fa06a867e67e31546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $__internal_509bba7e7156aeaf5049a6678b10959aa6f21b1cad600e7adba045c84c281e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509bba7e7156aeaf5049a6678b10959aa6f21b1cad600e7adba045c84c281e24->enter($__internal_509bba7e7156aeaf5049a6678b10959aa6f21b1cad600e7adba045c84c281e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab140f3ae144ccd1302e3b11151d546245c880609f6921fa06a867e67e31546->leave($__internal_2ab140f3ae144ccd1302e3b11151d546245c880609f6921fa06a867e67e31546_prof);

        
        $__internal_509bba7e7156aeaf5049a6678b10959aa6f21b1cad600e7adba045c84c281e24->leave($__internal_509bba7e7156aeaf5049a6678b10959aa6f21b1cad600e7adba045c84c281e24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df9bceb73b23bb28fac0fad69aa51e76e7db955c5d238b81aefdf486d678a304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9bceb73b23bb28fac0fad69aa51e76e7db955c5d238b81aefdf486d678a304->enter($__internal_df9bceb73b23bb28fac0fad69aa51e76e7db955c5d238b81aefdf486d678a304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f725f7b134ee776d8a6192530abe278a52f248074ac48f266d98f26c085809a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f725f7b134ee776d8a6192530abe278a52f248074ac48f266d98f26c085809a8->enter($__internal_f725f7b134ee776d8a6192530abe278a52f248074ac48f266d98f26c085809a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</h2>
<br/>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container\">
 <div class=\"mail-box\">
                  <aside class=\"sm-side\">
                      
                      <div class=\"inbox-body\">
                          <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\"  class=\"btn btn-compose\">
                              ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        // line 16
        echo "                          </a>                          
                      </div>
                      <ul class=\"inbox-nav inbox-divider\">
                          <li>
                              <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\"><i class=\"fa fa-inbox\"></i> Inbox <span class=\"label label-danger pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->getNbUnread(($context["threads"] ?? $this->getContext($context, "threads"))), "html", null, true);
        echo "</span></a>

                          </li>
                          <li class=\"active\">
                              <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_sent");
        echo "\"><i class=\"fa fa-envelope-o\"></i> Envoyés</a>
                          </li>
                         
                          <li>
                              <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_deleted");
        echo "\"><i class=\" fa fa-trash-o\"></i> Corbeille</a>
                          </li>
                      </ul>
                      

                      

                  </aside>
                  <aside class=\"lg-side\">
                      <div class=\"inbox-head\">
                          <h3>Inbox</h3>
                         
                      </div>
                      <div class=\"inbox-body\">
                         <div class=\"mail-option\">
                             

                             <div class=\"btn-group\">
                                 <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_sent");
        echo "\" class=\"btn mini tooltips\">
                                     <i class=\" fa fa-refresh\"></i>
                                 </a>
                             </div>
                             
                            

                         </div>
                          ";
        // line 54
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:sent.html.twig", 54)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 55
        echo "
                      </div>
                  </aside>
              </div>
</div>
";
        
        $__internal_f725f7b134ee776d8a6192530abe278a52f248074ac48f266d98f26c085809a8->leave($__internal_f725f7b134ee776d8a6192530abe278a52f248074ac48f266d98f26c085809a8_prof);

        
        $__internal_df9bceb73b23bb28fac0fad69aa51e76e7db955c5d238b81aefdf486d678a304->leave($__internal_df9bceb73b23bb28fac0fad69aa51e76e7db955c5d238b81aefdf486d678a304_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 55,  124 => 54,  113 => 46,  92 => 28,  85 => 24,  76 => 20,  70 => 16,  68 => 15,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}

<h2>{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</h2>
<br/>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container\">
 <div class=\"mail-box\">
                  <aside class=\"sm-side\">
                      
                      <div class=\"inbox-body\">
                          <a href=\"{{ url('fos_message_thread_new' )}}\"  class=\"btn btn-compose\">
                              {% trans from 'FOSMessageBundle' %}send_new{% endtrans %}
                          </a>                          
                      </div>
                      <ul class=\"inbox-nav inbox-divider\">
                          <li>
                              <a href=\"{{path('fos_message_inbox')}}\"><i class=\"fa fa-inbox\"></i> Inbox <span class=\"label label-danger pull-right\">{{fos_message_nb_unread(threads)}}</span></a>

                          </li>
                          <li class=\"active\">
                              <a href=\"{{path('fos_message_sent')}}\"><i class=\"fa fa-envelope-o\"></i> Envoyés</a>
                          </li>
                         
                          <li>
                              <a href=\"{{path('fos_message_deleted')}}\"><i class=\" fa fa-trash-o\"></i> Corbeille</a>
                          </li>
                      </ul>
                      

                      

                  </aside>
                  <aside class=\"lg-side\">
                      <div class=\"inbox-head\">
                          <h3>Inbox</h3>
                         
                      </div>
                      <div class=\"inbox-body\">
                         <div class=\"mail-option\">
                             

                             <div class=\"btn-group\">
                                 <a href=\"{{path('fos_message_sent')}}\" class=\"btn mini tooltips\">
                                     <i class=\" fa fa-refresh\"></i>
                                 </a>
                             </div>
                             
                            

                         </div>
                          {% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

                      </div>
                  </aside>
              </div>
</div>
{% endblock %}
", "FOSMessageBundle:Message:sent.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/Message/sent.html.twig");
    }
}
