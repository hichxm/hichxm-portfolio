<?php

namespace Hichxm\Http\Controller;

use Symfony\Component\HttpFoundation\Response;
abstract class Controller
{

    /**
     * Sends an HTTP response with the specified content, status code, and headers.
     *
     * @param string|null $content The body content of the response. Defaults to an empty string.
     * @param int $status The HTTP status code of the response. Defaults to 200.
     * @param array $headers An associative array of headers to include in the response. Defaults to an empty array.
     *
     * @return Response The generated HTTP response.
     */
    protected function response(?string $content = '', int $status = 200, array $headers = []): Response
    {
        return new Response($content, $status, $headers);
    }
}