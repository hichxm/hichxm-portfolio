<?php

namespace Hichxm\Http\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public const DATA = [
        'categories' => [
            [
                'name' => 'Languages de programmation',
                'sub-categories' =>  [
                    [
                        'name' => 'Backend',
                        'elements' =>  [
                            [
                                'name' => 'PHP',
                                'image_path' => 'php.png',
                            ],
                            [
                                'name' => 'NodeJS',
                                'image_path' => 'nodejs.png',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Frontend',
                        'elements' =>  [
                            [
                                'name' => 'ViteJS',
                                'image_path' => 'vite.png',
                            ],
                            [
                                'name' => 'React',
                                'image_path' => 'react.png',
                            ],
                            [
                                'name' => 'VueJS',
                                'image_path' => 'vue.png',
                            ],
                            [
                                'name' => 'Webpack',
                                'image_path' => 'webpack.png',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Frameworks',
                        'elements' =>  [
                            [
                                'name' => 'Laravel',
                                'image_path' => 'laravel.png',
                            ],
                            [
                                'name' => 'Symfony',
                                'image_path' => 'symfony.png',
                            ],
                            [
                                'name' => 'ExpressJS',
                                'image_path' => 'express.png',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Services',
                'sub-categories' =>  [
                    [
                        'name' => 'Cloud',
                        'elements' =>  [
                            [
                                'name' => 'OVHCloud',
                                'image_path' => 'ovh.png',
                            ],
                            [
                                'name' => 'AWS',
                                'image_path' => 'aws.png',
                            ],
                            [
                                'name' => 'Scaleway',
                                'image_path' => 'scaleway.png',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Logs & Monitoring',
                        'elements' =>  [
                            [
                                'name' => 'Plesk',
                                'image_path' => 'plesk.png',
                            ],
                            [
                                'name' => 'cPanel',
                                'image_path' => 'cpanel.png',
                            ],
                            [
                                'name' => 'Grafana',
                                'image_path' => 'grafana.png',
                            ],
                            [
                                'name' => 'Graylog',
                                'image_path' => 'graylog.png',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Databases',
                        'elements' =>  [
                            [
                                'name' => 'PostgreSQL',
                                'image_path' => 'pgsql.png',
                            ],
                            [
                                'name' => 'MySQL',
                                'image_path' => 'mysql.png',
                            ],
                            [
                                'name' => 'MongoDB',
                                'image_path' => 'mongodb.png',
                            ],
                            [
                                'name' => 'Elasticsearch',
                                'image_path' => 'elasticsearch.png',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

    public static function home(Request $request, Response $response): Response
    {
        $content = render_template('layout.twig', [
            'data' => self::DATA,
        ]);

        $response->setContent($content);
        $response->setStatusCode(200);

        return $response;
    }
}