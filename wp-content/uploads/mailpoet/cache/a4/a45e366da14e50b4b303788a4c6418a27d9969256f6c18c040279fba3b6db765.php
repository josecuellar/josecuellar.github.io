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

/* premium_old.html */
class __TwigTemplate_c58a86102d3332a028581ec112fd51566363107b161a006a3c073c8cbd8d8805 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "premium_old.html", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'after_javascript' => [$this, 'block_after_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"wrap mailpoet-about-wrap\">

  ";
        // line 6
        if (($context["display_discount"] ?? null)) {
            // line 7
            echo "  <div class=\"mailpoet-discount-container\">
    <h1>";
            // line 8
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Discounts up to 50% for a limited time");
            echo "</h1>
    <p>";
            // line 9
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Don’t miss out on our only sale of the year which ends on November 30.");
            echo "</p>
    <p>";
            // line 10
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("There’s never been a better time to change gears.");
            echo "</p>
    <a
      href=\"";
            // line 12
            echo $this->env->getExtension('MailPoet\Twig\Functions')->addReferralId((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=discount"));
            echo "\"
      class=\"button button-primary\"
      style=\"font-size: 1.5em; padding: 10px 18px; height: 46px;\"
    >
      ";
            // line 16
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save up to 50%");
            echo "
    </a>
  </div>
  ";
        }
        // line 20
        echo "
  <h1 style=\"text-align: center; margin-right: 0;\">";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("What is MailPoet Premium?");
        echo "</h1>

  <p class=\"about-text\" style=\"text-align: center; margin-right: 0;\">";
        // line 23
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Check out the brief video below. Or, keep reading!");
        echo "</p>

  <hr>

  <div class=\"headline-feature feature-video\">
    <div class=\"videoWrapper\">
      <iframe src=\"https://player.vimeo.com/video/225337083\" width=\"1050\" height=\"591\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe>
    </div>
  </div>

  <hr>

  <h2>";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Insightful Statistics");
        echo "</h2>

  <div class=\"feature-section one-col\">
    <p class=\"lead-description\">";
        // line 38
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Which links get the most clicks? Which subscribers opened your emails? With MailPoet's stats program, it's easy to find out. Need even more details? Integrating with Google Analytics is as easy as 1-2-3.");
        echo "</p>
    ";
        // line 39
        $context["video_url"] = $this->env->getExtension('MailPoet\Twig\Assets')->generateCdnUrl("premium/premium-page-animated-stats.mp4");
        // line 40
        echo "    <video autoplay loop width=\"100%\" class=\"mailpoet_video\">
      <source type=\"video/mp4\" src=\"";
        // line 41
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["video_url"] ?? null), "html", null, true);
        echo "\" />
      <a href=\"";
        // line 42
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["video_url"] ?? null), "html", null, true);
        echo "\">";
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["video_url"] ?? null), "html", null, true);
        echo "</a>
    </video>
  </div>

  <hr>

  <h2>";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Hello Inbox, Goodbye Spambox!");
        echo "</h2>

  <div class=\"feature-section one-col\">
    <p class=\"lead-description\">";
        // line 51
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Having issues with reaching your subscribers? Always ending up in the spam box? Don't panic! You're not alone - over a quarter of our plugin users have sending issues, usually because they are sending emails via their web host. Instead, try using the new MailPoet Sending Service.");
        echo "</p>
    <table class=\"widefat\">
      <thead>
        <tr>
         <td></td>
         <td><strong>";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet");
        echo "</strong></td>
         <td><strong>";
        // line 57
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Web host");
        echo "</strong></td>
         <td><strong>";
        // line 58
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Third party");
        echo "</strong></td>
        </tr>
      </thead>
      <tbody>
        <tr class=\"alternate\">
         <td><strong>";
        // line 63
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Speed");
        echo "</strong></td>
         <td>";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("50,000 / hour");
        echo "</td>
         <td>";
        // line 65
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("300 / hour");
        echo "</td>
         <td>";
        // line 66
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("2,000 / hour");
        echo "</td>
        </tr>
        <tr>
         <td><strong>";
        // line 69
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Daily email limits");
        echo "</strong></td>
         <td>";
        // line 70
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("None");
        echo "</td>
         <td>";
        // line 71
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "</td>
         <td>";
        // line 72
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Depends");
        echo "</td>
        </tr>
        <tr class=\"alternate\">
         <td><strong>";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Personal deliverability support");
        echo "</strong></td>
         <td>";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes!");
        echo "</td>
         <td>";
        // line 77
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</td>
         <td>";
        // line 78
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</td>
        </tr>
        <tr>
         <td><strong>";
        // line 81
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF and DKIM Signatures");
        echo "</strong></td>
         <td>";
        // line 82
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No need!");
        echo "</td>
         <td>";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Update your DNS");
        echo "</td>
         <td>";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Depends");
        echo "</td>
        </tr>
        <tr class=\"alternate\">
         <td><strong>";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Double opt-in");
        echo "</strong></td>
         <td>";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enforced");
        echo "</td>
         <td>";
        // line 89
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Not enforced");
        echo "</td>
         <td>";
        // line 90
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Depends");
        echo "</td>
        </tr>
        <tr>
          <td colspan=\"4\">
            <div style=\"text-align: center\">
              <a
                href=\"https://kb.mailpoet.com/article/181-comparison-table-of-sending-methods?utm_source=plugin&utm_medium=premium&utm_campaign=compare\"
                data-beacon-article=\"58a7182a2c7d3a576d3548c5\"
                target=\"_blank\"
              >
                ";
        // line 100
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View full comparison table");
        echo "
              </a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <p>";
        // line 107
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Spammers are ineligible to use the MailPoet Sending Service. We reserve the right to cancel any sending plan if we detect more than 5% hard bounces. [link]Customers are required to clean their lists before joining MailPoet[/link]."), "https://kb.mailpoet.com/article/127-checklist-before-importing-subscribers?utm_source=plugin&utm_medium=premium&utm_campaign=clean-lists", ["target" => "_blank", "data-beacon-article" => "57ce07ffc6979108399a044b"]);
        // line 110
        echo "</p>
  </div>

  <hr>

  <div class=\"feature-section\">
    <h2>";
        // line 116
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("We’re Here to Help!");
        echo "</h2>
    ";
        // line 117
        $context["video_url"] = $this->env->getExtension('MailPoet\Twig\Assets')->generateCdnUrl("premium/premium-page-animated-support.mp4");
        // line 118
        echo "    <video autoplay loop width=\"100%\" class=\"mailpoet_video half-width-centered\">
      <source type=\"video/mp4\" src=\"";
        // line 119
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["video_url"] ?? null), "html", null, true);
        echo "\" />
      <a href=\"";
        // line 120
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["video_url"] ?? null), "html", null, true);
        echo "\">";
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["video_url"] ?? null), "html", null, true);
        echo "</a>
    </video>
    <p>";
        // line 122
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("We pride ourselves on giving nearly round-the-clock support. Our remote team spans several continents, hemispheres, and time-zones! If you’ve got a problem, we will help you fix it!");
        echo "</p>
  </div>

  <hr>

  <h2>";
        // line 127
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Get Started for Just \$15");
        echo "</h2>

  <div class=\"feature-section one-col\">
    <p class=\"lead-description\">";
        // line 130
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Our plans start at just \$15 per month. Plus, if you pay annually, you’ll get two months for free!");
        echo "</p>
    <br>
    <p style=\"text-align: center\">
      <a
        target=\"_blank\"
        href=\"";
        // line 135
        echo $this->env->getExtension('MailPoet\Twig\Functions')->addReferralId((("https://account.mailpoet.com?s=" . ($context["subscriber_count"] ?? null)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase"));
        echo "\"
        class=\"button button-primary\"
        style=\"font-size: 1.5em; padding: 10px 18px; height: 46px;\"
      >";
        // line 138
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Purchase Now");
        echo "</a>
    </p>
    <br>
    <div style=\"width: 65%; margin: 0 auto;\">
      <p style=\"text-align: center\">";
        // line 142
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Already a Premium customer? [link]Add your Key in the Settings page[/link]."), admin_url("admin.php?page=mailpoet-settings#premium"), ["target" => "_blank"]);
        // line 145
        echo "</p>
      <p style=\"text-align: center\">";
        // line 146
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Don’t need to use our sending service? Not a problem; we understand. You can also [link]buy the Premium[/link] features separately. Prices start at \$149 per year for 1 website, \$249 for 4 sites and \$499 for an unlimited number of sites."), $this->env->getExtension('MailPoet\Twig\Functions')->addReferralId("https://account.mailpoet.com/premium?utm_source=plugin&utm_medium=premium&utm_campaign=buy-premium"), ["target" => "_blank"]);
        // line 149
        echo "</p>
    </div>
  </div>

</div>

";
    }

    // line 157
    public function block_after_javascript($context, array $blocks = [])
    {
        // line 158
        echo "<script type=\"text/javascript\">
  MailPoet.trackEvent('Premium page viewed', {
    'MailPoet Free version': window.mailpoet_version
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "premium_old.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 158,  351 => 157,  341 => 149,  339 => 146,  336 => 145,  334 => 142,  327 => 138,  321 => 135,  313 => 130,  307 => 127,  299 => 122,  292 => 120,  288 => 119,  285 => 118,  283 => 117,  279 => 116,  271 => 110,  269 => 107,  259 => 100,  246 => 90,  242 => 89,  238 => 88,  234 => 87,  228 => 84,  224 => 83,  220 => 82,  216 => 81,  210 => 78,  206 => 77,  202 => 76,  198 => 75,  192 => 72,  188 => 71,  184 => 70,  180 => 69,  174 => 66,  170 => 65,  166 => 64,  162 => 63,  154 => 58,  150 => 57,  146 => 56,  138 => 51,  132 => 48,  121 => 42,  117 => 41,  114 => 40,  112 => 39,  108 => 38,  102 => 35,  87 => 23,  82 => 21,  79 => 20,  72 => 16,  65 => 12,  60 => 10,  56 => 9,  52 => 8,  49 => 7,  47 => 6,  43 => 4,  40 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "premium_old.html", "/homepages/10/d628789933/htdocs/WP/wp-content/plugins/mailpoet/views/premium_old.html");
    }
}
