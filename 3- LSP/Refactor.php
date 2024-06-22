<?php

class VideoPlayer
{
    public $allow_ext = ['mp4', 'avi', 'mov'];
    public function play($file)
    {
        if (!in_array($file, $this->allow_ext)) {
            throw new Exception("Error Processing Request", 1);
        }
    }
}

class AviVideoPlayer extends VideoPlayer
{
    public $allow_ext = ['avi'];

    public function play($file)
    {
        if (!in_array($file, $this->allow_ext)) {
            throw new Exception("Error Processing Request", 1);
        }

        //........
    }
}

/**
 * Opcion 2
 */

interface Player
{
    public function play($file);
}


class VideoPlayerV2 implements Player
{
    public function play($file)
    {
    }
}

class AviVideoPlayerV2 implements Player
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) != 'avi') {
            throw new Exception("Error Processing Request", 1);
        }
    }
}


function x(Player $player)
{
    return $player->play("mivideo.avi");
}
