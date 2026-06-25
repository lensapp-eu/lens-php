<?php

return [

    /*
     | Turn Lens on or off. Handy to fully disable it in production.
     */
    'enabled' => env('LENS_ENABLED', true),

    /*
     | The two delivery channels, independently toggleable:
     |   - local: send to the Lens desktop app (live local debugging)
     |   - cloud: send to Lens Cloud (needs a project key below)
     | Examples: cloud only -> LENS_LOCAL=false; app only -> LENS_CLOUD=false.
     */
    'local' => env('LENS_LOCAL', true),
    'cloud' => env('LENS_CLOUD', true),

    /*
     | Host and port the Lens desktop app listens on.
     */
    'host' => env('LENS_HOST', '127.0.0.1'),
    'port' => env('LENS_PORT', 23600),

    /*
     | Your Lens Cloud project key. Copy it from your project's settings in
     | Lens Cloud and set LENS_PROJECT_KEY in your .env. It links this project to the
     | right project in Lens Cloud and the desktop app.
     */
    'key' => env('LENS_PROJECT_KEY'),

    /*
     | Lens Cloud base URL. Defaults to the hosted cloud; override for local dev.
     | Events go here when 'cloud' is on and a key is set. Local dev: http://localhost:3000.
     */
    'cloud_url' => env('LENS_CLOUD_URL', 'https://app.lensapp.eu'),

    /*
     | Automatically catch Laravel exceptions and send them to Lens.
     | Set to false if you only want to log manually.
     */
    'catch_exceptions' => env('LENS_CATCH_EXCEPTIONS', true),

    /*
     | Stream every database query to Lens. Handy while debugging, noisy if
     | left on permanently, toggle per environment.
     */
    'queries' => env('LENS_QUERIES', false),

    /*
     | Extra Laravel streams. Toggle per environment, handy while debugging,
     | noisy if left on permanently.
     */
    'mails'  => env('LENS_MAILS', false),
    'jobs'   => env('LENS_JOBS', false),
    'events' => env('LENS_EVENTS', false),
    'models' => env('LENS_MODELS', false),
    'notifications' => env('LENS_NOTIFICATIONS', false),

];
