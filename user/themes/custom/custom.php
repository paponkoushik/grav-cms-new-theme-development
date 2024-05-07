<?php

namespace Grav\custom;

use Grav\Common\Theme;

class Custom extends Theme
{
  public static function getSubscribedEvents(): array
  {
    return [
      'onThemeInitialized' => ['onThemeInitialized', 0]
    ];
  }

  public function onThemeInitialized(): void
  {
    if ($this->isAdmin()) {
      $this->active = false;
      return;
    }

    $this->enable([
      'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
    ]);
  }

  public function onTwigSiteVariables(): void
  {
    $this->grav['assets']->addCss('theme://css/header.css');
    $this->grav['assets']->addCss('theme://css/footer.css');
    $this->grav['assets']->addCss('theme://css/sidebar.css');
    $this->grav['assets']->addCss('theme://css/navigation.css');
    $this->grav['assets']->addCss('theme://css/custom.css');
  }
}