<?php


namespace AppBundle\DataFixtures\ORM\Dev;

use Hautelook\AliceBundle\Doctrine\DataFixtures\AbstractLoader;


class DataLoader extends AbstractLoader
{
    /**
     * {@inheritdoc}
     */
    public function getFixtures()
    {
        return [
            __DIR__.'/genus.yml',
            __DIR__.'/genusNote.yml'
        ];
    }

    function text($length = 10) {
//        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = 'abcdefghijklmnopqrstuvwxyz ayioaooaaaeeayiiaaaaooooaooa';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function paragraph($paragraph = 1)
    {
        return file_get_contents('http://loripsum.net/api/'. $paragraph . '/medium/plaintext/');
    }

    function userName($paragraph = 1)
    {
        $p = file_get_contents('http://loripsum.net/api/'. $paragraph . '/long/');
        return substr($p, 3, 12);
    }
}


