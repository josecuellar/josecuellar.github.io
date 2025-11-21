<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* emails/statsNotificationAutomatedEmails.txt */
class __TwigTemplate_cafa7d8dcc07579dc30583f52edee6acb25b0580009d1c7e81a56879a57eaeec extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("emails/statsNotificationLayout.txt", "emails/statsNotificationAutomatedEmails.txt", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "emails/statsNotificationLayout.txt";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your monthly stats are in!");
        echo "

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = \MailPoetVendor\twig_ensure_traversable(($context["newsletters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 8
            echo "------------------------------------------
  ";
            // line 9
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "subject", []), "html", null, true);
            echo "
  ";
            // line 10
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("open rate");
            echo ": ";
            echo number_format_i18n($this->getAttribute($context["newsletter"], "opened", []), 1);
            echo "% (";
            echo $this->env->getExtension('MailPoet\Twig\Functions')->openedStatsText($this->getAttribute($context["newsletter"], "opened", []));
            echo ")
  ";
            // line 11
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("click rate");
            echo ": ";
            echo number_format_i18n($this->getAttribute($context["newsletter"], "clicked", []), 1);
            echo "% (";
            echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsText($this->getAttribute($context["newsletter"], "clicked", []));
            echo ")
  ";
            // line 12
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View all stats");
            echo "
    ";
            // line 13
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "linkStats", []), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "------------------------------------------
";
    }

    public function getTemplateName()
    {
        return "emails/statsNotificationAutomatedEmails.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  81 => 13,  77 => 12,  69 => 11,  61 => 10,  57 => 9,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "emails/statsNotificationAutomatedEmails.txt", "/homepages/10/d628789933/htdocs/WP/wp-content/plugins/mailpoet/views/emails/statsNotificationAutomatedEmails.txt");
    }
}
