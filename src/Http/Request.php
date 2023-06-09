<?php


namespace Dragon2517\Future\Http;

class Request
{
    public function __construct(
        private array $get,
        private array $server,
        private string $body,

    ) {
    }

    public function method(): string
    {
        return $this->server['REQUEST_METHOD'];
    }

    public function path()
    {
        $components = parse_url($this->server['REQUEST_URI']);
        $path = explode('/', $components['path'],);
        // return $components;
        $url = '';
        for ($i = 1; $i < count($path); $i++) {
            $url = $url . '/' . $path[$i];
        }
        return $path;
    }
}
