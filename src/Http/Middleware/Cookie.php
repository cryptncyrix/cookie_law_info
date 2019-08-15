<?php declare(strict_types=1);
namespace cyrixbiz\cookie\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class Cookie
 * @package cyrixbiz\cookie\Middleware
 */
class Cookie {

    /**
     * Create a new filter instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return Response|null
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        if(! $this->checkResponse($response))
        {
            return $this->addViewToResponseOnTheFly($response);
        }
        return $response;
    }

    /**
     * @param $response
     * @return bool
     */
    protected function checkResponse($response) : bool
    {
        $return = false;
        if(config('cookie.cookie.enable'))
        {
            if(
                ! $response instanceof Response ||
                is_null(
                    $this->getPositionFromTag(
                        $this->getContent($response),
                        config('cookie.cookie.tag')
                    )
                )
            )
            {
                $return = true;
            }
        }
        return $return;
    }

    /**
     * @param Response $response
     * @return null|string
     */
    protected function getContent(Response $response) : ?string
    {
        return $response->getContent();
    }

    /**
     * @param Response $response
     * @return Response|null
     */
    protected function addViewToResponseOnTheFly(Response $response) : ?Response
    {
        $content        = $this->getContent($response);
        $tagPosition    = $this->getPositionFromTag($content, config('cookie.cookie.tag'));
        $content        = ''
            . substr($content, 0 , $tagPosition)
            . view(config('cookie.cookie.layout'))->render()
            . substr($content, $tagPosition);
        return $response->setContent($content);
    }

    /**
     * @param string $content
     * @param string $tag
     * @return int|null
     */
    protected function getPositionFromTag(string $content, string $tag) : ?int
    {
        $pos = strripos($content, $tag);
        if ($pos === false)
        {
            return null;
        }
        return $pos;
    }
}
