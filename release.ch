#!/bin/bash

rsync -rva  --exclude='.git/'   ./site/  vemamuwo@sl1702.web.hostpoint.ch:/home/vemamuwo/www/cliplab.ch/site/
