<?php
namespace Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(Request $request)
    {
        return new Response('hello world!');
    }
}
