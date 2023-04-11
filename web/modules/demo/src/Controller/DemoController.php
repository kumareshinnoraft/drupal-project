<?php

namespace Drupal\demo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Demo routes.
 */
class DemoController extends ControllerBase {

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
