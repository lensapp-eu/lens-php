<?php

use LensApp\Lens\Lens;

if (! function_exists('lens')) {
    /**
     * Send one or more values to the Lens desktop app and Lens Cloud.
     * Chainable: lens('hello')->red()->label('Test')
     */
    function lens(mixed ...$args): Lens
    {
        return new Lens($args);
    }
}
