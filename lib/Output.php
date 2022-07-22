<?php

namespace Lum\Plugins;

use Lum\Web as LW;

class Output extends LW\Output
{
  /**
   * Set headers for JSON output.
   * 
   * @param bool $ieSupport - If IE is detected, use 'text/plain'.
   *   This option was a terrible hack for a terrible browser.
   *   It's been removed entirely from the `Lum\Web\Output` library,
   *   and is only kept here for backwards compatibility. Don't use it,
   *   and don't use IE, that browser is dead, let it be dead!
   * 
   * @return void 
   */
  public static function json ($ieSupport=false)
  {
    if ($ieSupport && LW\Client::is_ie())
    { // A horrible hack for IE.
      header('Content-Type: text/plain');
    }
    else
    { // The standard JSON MIME type.
      header('Content-Type: application/json');
    }
  }
}
