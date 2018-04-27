<?php

header('Content-Disposition: attachment; filename="range.txt"');
header('Content-Type: text/plain'); # Don't use application/force-download - it's not a real MIME type, and the Content-Disposition header is sufficient
header('Content-Length: ' . strlen($str));
header('Connection: close');
