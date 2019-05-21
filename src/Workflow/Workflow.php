<?php

/**
 * Created by PhpStorm.
 * Author: mingbai
 * Date: 19-5-21
 * Time: 下午3:31
 */
namespace src\Workflow;
class Workflow implements \raoul2000\workflow\source\file\IWorkflowDefinitionProvider
{
    public function getDefinition()
    {
        return [
            'initialStatusId' => 'draft',
            'status' => [
                'draft' => [
                    'transition' => ['correction']
                ],
                'correction' => [
                    'transition' => ['draft','ready']
                ],
                'ready' => [
                    'transition' => ['draft', 'correction', 'published']
                ],
                'published' => [
                    'transition' => ['ready', 'archived']
                ],
                'archived' => [
                    'transition' => ['ready']
                ]
            ]
        ];
    }
}