<?php

use Models\Measurement;
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $app->group('/api', function () use ($app) {
        $app->get('/measurements', function () {
            $data = Measurement::all();
            return $this->response->withJson($data, 200);
        });
        $app->get('/measurements/since/{since}', function (Request $request, Response $response, $args) {
            $sinceTimestamp = $args['since'];
            $sinceDate = date('Y-m-d H:i:s', $sinceTimestamp);

            $data = Measurement::findSince($sinceDate);

            return $this->response->withJson($data, 200);
        });
        $app->post('/measurement', function (Request $request) {
            $body = $request->getParsedBody();

            $data = Measurement::create([
                'temperature' => $body['temperature'],
                'relative_humidity' => $body['relative_humidity'],
            ]);
            return $this->response->withJson($data, 200);
        });
    });
};