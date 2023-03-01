<?php

declare(strict_types=1);

class Docs
{
    public string $id;
    public string $title;
    public string $description;
    public string $featureFlag;
    public string $image;
    public string $darkImage;
    public string $tabletImage;
    public string $tabletDarkImage;
    public string $mobileImage;
    public string $mobileDarkImage;
    public array $sections;

    public function jsonSerialize()
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "featureFlag" => $this->featureFlag,
            "image" => $this->image,
            "darkImage" => $this->darkImage,
            "tabletImage" => $this->tabletImage,
            "tabletDarkImage" => $this->tabletDarkImage,
            "mobileImage" => $this->mobileImage,
            "mobileDarkImage" => $this->mobileDarkImage,
            "sections" => $this->sections,
        ];
    }
}

$docs = new Docs();

$docs->id = 'shopify-api-php';
$docs->title = 'Test title';
$docs->description = 'Test description';
$docs->image = '/assets/landing-pages/templated-apis/hero.png';
$docs->darkImage = '/assets/landing-pages/templated-apis/hero-dark.png';
$docs->tabletImage = '/assets/landing-pages/templated-apis/hero.png';
$docs->tabletDarkImage = '/assets/landing-pages/templated-apis/hero-dark.png';
$docs->mobileImage = '/assets/landing-pages/templated-apis/hero.png';
$docs->mobileDarkImage = '/assets/landing-pages/templated-apis/hero-dark.png';
$docs->sections = [
    [
        "type" => 'Resource',
        "anchorLink" => 'Resource anchorLink',
        "title" => 'Resource title',
        "resources" => [
            [
                "name" => 'Resource name',
                "subtitle" => 'Resource subtitle',
                "url" => '/docs/api/shopify-api-php/category/subcategory/apiversion',
                "type" => 'Resource type',
                "featureFlag" => 'Resource featureFlag',
            ],
        ],
    ],
];

return $docs;
