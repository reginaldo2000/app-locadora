<?php 

namespace Source;

use League\Plates\Engine;

class View {

    public static function render(string $view, array $params = []) {
        $template = new Engine(__DIR__."/../views");
        return $template->render($view, $params);
    }
}