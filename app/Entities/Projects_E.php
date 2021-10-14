<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Projects_E extends Entity
{
    public function setFotoPost($file)
    {
        $fileName = $file->getRandomName();
        $writePath = './upload/Foto Projek';

        // Save ke folder uploads
        $file->move($writePath, $fileName);

        // Simpan nama file
        $this->attributes['foto_post'] = $fileName;
        return $this;
    }
}