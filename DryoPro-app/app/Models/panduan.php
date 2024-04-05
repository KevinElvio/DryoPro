<?php

namespace App\Models;

class Panduan
{
    private static $panduan = [
        [
            "title" => "Panduan Penginstallan",
            "panduan" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Habitasse platea dictumst quisque sagittis purus sit. Praesent semper feugiat nibh sed
            pulvinar proin gravida hendrerit lectus. Eget nullam non nisi est sit amet facilisis.<br><br>
    
            1. Volutpat est velit egestas dui. Nulla pharetra diam sit amet nisl suscipit adipiscing.
            Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim.
            Aliquet porttitor lacus luctus accumsan.
            Pharetra magna ac placerat vestibulum lectus mauris ultrices eros.
            habitats platea dictumst. Amet justo donec enim diam vulputate ut pharetra. Tellus elementum sagittis vitae
            et leo duis ut. Nibh praesent tristique magna sit amet purus gravida. Nunc eget lorem dolor sed viverra
            ipsum nunc aliquet. Mauris vitae ultricies leo integer malesuada nunc vel. Facilisi cras fermentum odio eu
            feugiat.",
    
        ],
        [
            "title" => "Cara Mematikan Mesin",
            "panduan" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Habitasse platea dictumst quisque sagittis purus sit. Praesent semper feugiat nibh sed
            pulvinar proin gravida hendrerit lectus. Eget nullam non nisi est sit amet facilisis.<br><br>
    
            1. Volutpat est velit egestas dui. Nulla pharetra diam sit amet nisl suscipit adipiscing.
            Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim.
            Aliquet porttitor lacus luctus accumsan.
            Pharetra magna ac placerat vestibulum lectus mauris ultrices eros.
            habitats platea dictumst. Amet justo donec enim diam vulputate ut pharetra. Tellus elementum sagittis vitae
            et leo duis ut. Nibh praesent tristique magna sit amet purus gravida. Nunc eget lorem dolor sed viverra
            ipsum nunc aliquet. Mauris vitae ultricies leo integer malesuada nunc vel. Facilisi cras fermentum odio eu
            feugiat.",
    
        ],
    ];

    public static function all()
    {
        return self::$panduan;
    }
}
