<?php

namespace Drupal\web\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Web routes.
 */
class WebController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    // $build['content'] = [
    //   '#type' => 'item',
    //   '#markup' => $this->t('It works!'),
    // ];

    // return $build;

    return [
      '#theme' => 'demo',
      '#content' => "THis is a dummy content"
    ];
  }
  
}
