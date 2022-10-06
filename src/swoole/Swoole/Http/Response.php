<?php

declare(strict_types=1);

namespace Swoole\Http;

use Swoole\WebSocket\Frame;

/**
 * The HTTP Response class.
 *
 * @not-serializable Objects of this class cannot be serialized.
 */
class Response
{
    /**
     * File descriptor of the underlying socket connection.
     */
    public int $fd = 0;

    public $socket;

    /**
     * HTTP headers.
     */
    public array $header;

    /**
     * HTTP cookies.
     */
    public array $cookie;

    /**
     * Trailer fields.
     *
     * Trailer fields can be useful for supplying message integrity checks, digital signatures, delivery metrics, or
     * post-processing status information. They are included at the end of the response message.
     *
     * @see https://httpwg.org/specs/rfc9110.html#trailer.fields HTTP Semantics (#trailer.fields)
     * @see https://httpwg.org/specs/rfc9112.html#chunked.trailer.section HTTP/1.1 (#chunked.trailer.section)
     */
    public array $trailer;

    /**
     * Update property $header, $cookie and $trailer to the latest values.
     *
     * This method provides a way to access headers, cookies, and trailers of the HTTP response. When needed, call
     * this method first before accessing property $header, $cookie, and/or $trailer.
     *
     * This method won't work after method Response::end() or Response::detach() is called.
     *
     * @return bool Return TRUE on success; return FALSE if the HTTP connection has been closed or detached.
     */
    public function initHeader(): bool
    {
    }

    public function isWritable(): bool
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Http\Response::setCookie().
     * @see \Swoole\Http\Response::setCookie()
     */
    public function cookie(string $name, string $value = '', int $expires = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false, string $samesite = '', string $priority = ''): bool
    {
    }

    /**
     * @alias Alias of method \Swoole\Http\Response::cookie().
     * @see \Swoole\Http\Response::cookie()
     */
    public function setCookie(string $name, string $value = '', int $expires = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false, string $samesite = '', string $priority = ''): bool
    {
    }

    public function rawcookie(string $name, string $value = '', int $expires = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false, string $samesite = '', string $priority = ''): bool
    {
    }

    /**
     * Set HTTP status code.
     *
     * @param int $http_code HTTP status code.
     * @param string $reason The reason phrase to be used with the provided status code. Optional.
     * @return bool Return TRUE on success, or FALSE when failed (e.g., if the HTTP connection has been closed or detached).
     * @alias This method has an alias of \Swoole\Http\Response::setStatusCode().
     * @see \Swoole\Http\Response::setStatusCode()
     */
    public function status(int $http_code, string $reason = ''): bool
    {
    }

    /**
     * Set HTTP status code.
     *
     * @param int $http_code HTTP status code.
     * @param string $reason The reason phrase to be used with the provided status code. Optional.
     * @return bool Return TRUE on success, or FALSE when failed (e.g., if the HTTP connection has been closed or detached).
     * @alias Alias of method \Swoole\Http\Response::status().
     * @see \Swoole\Http\Response::status()
     */
    public function setStatusCode(int $http_code, string $reason = ''): bool
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Http\Response::setHeader().
     * @see \Swoole\Http\Response::setHeader()
     */
    public function header(string $key, string|array $value, bool $format = true): bool
    {
    }

    /**
     * @alias Alias of method \Swoole\Http\Response::header().
     * @see \Swoole\Http\Response::header()
     */
    public function setHeader(string $key, string|array $value, bool $format = true): bool
    {
    }

    /**
     * Add a trailer to the HTTP response.
     *
     * @param string $key Name of the trailer field. It must be less than 128 bytes in length.
     * @return bool TRUE on success, or FALSE when failed. Typically, it fails because of one of the following reasons:
     *              - Name of the trailer field is too long.
     *              - The HTTP connection has been closed.
     *              - The HTTP connection has been detached.
     */
    public function trailer(string $key, string $value): bool
    {
    }

    public function ping(): bool
    {
    }

    public function goaway(int $error_code = 0, string $debug_data = ''): bool
    {
    }

    public function write(string $content): bool
    {
    }

    public function end(?string $content = null): bool
    {
    }

    public function sendfile(string $filename, int $offset = 0, int $length = 0): bool
    {
    }

    public function redirect(string $location, int $http_code = 302): bool
    {
    }

    public function detach(): bool
    {
    }

    public static function create(int|array|object $server = -1, int $fd = -1): Response|false
    {
    }

    /**
     * Upgrade the HTTP server connection to the WebSocket protocol by performing a handshake with the server.
     *
     * @return bool Returns true on success or false on failure.
     */
    public function upgrade(): bool
    {
    }

    public function push(Frame|string $data, int $opcode = SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = SWOOLE_WEBSOCKET_FLAG_FIN): bool
    {
    }

    public function recv(float $timeout = 0): Frame|string|false
    {
    }

    /**
     * Close a WebSocket connection.
     *
     * @return bool Returns true on success or false on failure.
     */
    public function close(): bool
    {
    }
}
