<?php

/* We now have to tell phpMyAdmin that SSL must be used whenever a connection is made. */
$cfg['ForceSSL'] = false;

/* Uploads setup */
$cfg['UploadDir'] = '/var/www/upload';
$cfg['SaveDir'] = '/var/www/save';

$cfg['CheckConfigurationPermissions'] = false;
$cfg['ShowPhpInfo'] = true;
