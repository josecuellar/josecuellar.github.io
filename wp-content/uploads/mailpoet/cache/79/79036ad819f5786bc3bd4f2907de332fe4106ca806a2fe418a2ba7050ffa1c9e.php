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

/* emails/statsNotification.txt */
class __TwigTemplate_7ba8592e680d9dbd613b6433937dd05410e253cb85cabe19013f4b469d7dd246 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("emails/statsNotificationLayout.txt", "emails/statsNotification.txt", 1);
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
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your stats are in!");
        echo "

";
        // line 6
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
        echo "

";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("open rate");
        echo ": ";
        echo number_format_i18n(($context["opened"] ?? null));
        echo "%
  ";
        // line 9
        echo $this->env->getExtension('MailPoet\Twig\Functions')->openedStatsText(($context["opened"] ?? null));
        echo "

";
        // line 11
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("click rate");
        echo ": ";
        echo number_format_i18n(($context["clicked"] ?? null));
        echo "%
  ";
        // line 12
        echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsText(($context["opened"] ?? null));
        echo "

";
        // line 14
        if ((($context["topLinkClicks"] ?? null) > 0)) {
            // line 15
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Most clicked link");
            echo "
  ";
            // line 16
            echo \MailPoetVendor\twig_escape_filter($this->env, ($context["topLink"] ?? null), "html", null, true);
            echo "

  ";
            // line 18
            echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("%s unique clicks"), ["%s" => ($context["topLinkClicks"] ?? null)]), "html", null, true);
            echo "
";
        }
        // line 20
        echo "
";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View all stats");
        echo "
  ";
        // line 22
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["linkStats"] ?? null), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "emails/statsNotification.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  93 => 21,  90 => 20,  85 => 18,  80 => 16,  76 => 15,  74 => 14,  69 => 12,  63 => 11,  58 => 9,  52 => 8,  47 => 6,  42 => 4,  39 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "emails/statsNotification.txt", "/homepages/10/d628789933/htdocs/WP/wp-content/plugins/mailpoet/views/emails/statsNotification.txt");
    }
}
