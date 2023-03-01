<?php

declare(strict_types=1);

class Docs
{
    public string $name;
    public string $description;
    public string $type;
    public bool $isVisualComponent;
    public array $defaultExample;
    public array $definitions;
    public string $category;
    public string $subCategory;
    public string $thumbnail;
    /** @var string[] */
    public array $examples;
    public array $related;

    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'isVisualComponent' => $this->isVisualComponent,
            'defaultExample' => $this->defaultExample,
            'definitions' => $this->definitions,
            'category' => $this->category,
            'subCategory' => $this->subCategory,
            'thumbnail' => $this->thumbnail,
            'examples' => $this->examples,
            'related' => $this->related,
        ];
    }
}

$docs = new Docs();
$docs->name = 'ApiVersion';
$docs->description = 'ApiVersion is a really cool thing';
$docs->isVisualComponent = false;
// $docs->defaultExample = [
//     "codeblock" => [
//         "tabs" => [
//             [
//                 "title" => 'Authentication defaultExample',
//                 "code" => './examples/AuthenticationSectionExample.ts',
//                 "language" => 'typescript',
//             ],
//         ],
//         "title" => 'Authentication defaultExample',
//     ],
// ];
$docs->definitions = [
    [
        "title" => 'Template schemas',
        "description" => '**Template schemas** are the data shape that are used to generate the page.',
        "type" => 'ApiVersion',
    ],
];
$docs->category = 'Category';
$docs->subCategory = 'Subcategory';
$docs->thumbnail = 'thumbnail.png';
$docs->examples = [
    "description" => 'A section for examples.',
    // "examples" => [
    //     [
    //         "description" => 'Examples for the authentication schema.',
    //         "codeblock" => [
    //             "tabs" => [
    //                 [
    //                     "title" => 'The .doc file example',
    //                     "code" => './examples/AuthenticationSectionExample.ts',
    //                     "language" => 'typescript',
    //                 ],
    //             ],
    //             "title" => 'Authentication example',
    //         ],
    //     ],
    // ],
];
$docs->related = [
    [
        "name" => 'Static page',
        "url" => '/api/generate-docs/template/static-page-template',
        "type" => 'template',
    ],
];

return $docs;
