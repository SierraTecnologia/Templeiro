<?php

namespace Templeiro\Entitys;


class ProjectEntity extends EntityAbstract
{
    
    /**
     * Return diretory path
     *
     * @return string
     */
    public function getTargetPath(): string
    {
        return $this->code->getTargetPath();
    }
}