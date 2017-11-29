<?php
/**
 * Created by PhpStorm.
 * User: Sale
 * Date: 11/29/2017
 * Time: 12:26 AM
 */

namespace AppBundle\Service;


class MarkdownTransformer
{
    private $markdownParser;

    public function __construct($markdownParser)
    {
        $this->markdownParser = $markdownParser;
    }

    public function parse($str)
    {
        return $this->markdownParser
            ->transform($str);
    }
}