#!/bin/bash

rsync -rva  --exclude='cache/' --exclude='sessions/' --exclude='config/config.php'   ./site/  vemamuwo@sl1702.web.hostpoint.ch:/home/vemamuwo/www/cliplab.ch/site/
