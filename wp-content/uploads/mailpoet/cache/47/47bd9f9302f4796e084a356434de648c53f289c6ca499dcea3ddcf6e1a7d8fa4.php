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

/* emails/statsNotificationLayout.txt */
class __TwigTemplate_54ff458a9bfaecfdf44a4ec0f7b86ab7e9b88946976410850ee1b4b50012d434 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("How to improve my open rate?");
        echo " https://www.mailpoet.com/how-to-improve-open-rates/
";
        // line 4
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("And my click rate?");
        echo " https://www.mailpoet.com/how-to-improve-click-rates/
";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Disable these emails");
        echo " ";
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["linkSettings"] ?? null), "html", null, true);
        echo "
";
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "emails/statsNotificationLayout.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 1,  44 => 5,  40 => 4,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "emails/statsNotificationLayout.txt", "/homepages/10/d628789933/htdocs/WP/wp-content/plugins/mailpoet/views/emails/statsNotificationLayout.txt");
    }
}
