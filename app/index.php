<?php
// Tells the player to treat this as raw text
header('Content-Type: text/plain');

$manifest = "https://livem-d-01-icc-we.akamaized.net/variant/v1/dai-event-prd-pal-west/vcg-01-d/DASH_DASH/Live/channel(vcg-01-ch-hd-02)/manifest.mpd?vcfilter=5f8c15b4-5bac-41cf-b227-3685f47e6160";
$clearkey = "ae7076b647133606b704d33e4cef5134:810251515584cf71216d9a2d1ebf04bb";

// The "Pipe" format for NS Player
echo $manifest . "|drmScheme=clearkey&drmLicense=" . $clearkey;

