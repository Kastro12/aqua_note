<?php
/**
 * Created by PhpStorm.
 * User: Sale
 * Date: 11/29/2017
 * Time: 12:07 PM
 */

namespace AppBundle\Twig;


use AppBundle\Service\MarkdownTransformer;

class MarkdownExtension extends \Twig_Extension
{


    private $markdownTransformer;

    public function __construct(MarkdownTransformer $markdownTransformer)
    {

        $this->markdownTransformer = $markdownTransformer;
    }


    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('markdownify', array($this, 'parseMarkdown'), [
                'is_safe' => ['html']
            ])
        ];
    }

    public function parseMarkdown($str)
    {
        return $this->markdownTransformer->parse($str);
    }


    public function getName()
    {
        return 'app_markdown';
    }

}