<?php
use_helper('I18N');
echo get_partial(templateName: 'banner');
readfile(dirname(__FILE__) . '/../webapp/index.html');