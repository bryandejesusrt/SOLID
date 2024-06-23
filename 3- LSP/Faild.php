<?php

/**
 * PRINCIPIO DE SUSTITUCIÓN DE LISKOV
 */
class VideoPlayer
{
    public function play($file)
    {
    }
}

class AviVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) != 'avi') {
            throw new Exception("Error Processing Request", 1);
        }
    }
}


function record(VideoPlayer $play){

}
