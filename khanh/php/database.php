<?php
// Define PostgreSQL database server connect parameters.
define('PG_HOST', 'ec2-54-158-190-214.compute-1.amazonaws.com');
define('PG_PORT', 5432);
define('PG_DATABASE', 'da50gtql9m43to');
define('PG_USER', 'dsztnpjrcqsina');
define('PG_PASSWORD', '59e353dd5c1efa83ae56549357f7cc39de97cd9502fb715be30d2b1295eb5e84');
define('ERROR_ON_CONNECT_FAILED', 'Connection failed!');

// Merge connect string and connect db server with default parameters.
function getDB() {
    return pg_pconnect (' host=' . PG_HOST .
                        ' port=' . PG_PORT .
                        ' dbname=' . PG_DATABASE .
                        ' user=' . PG_USER .
                        ' password=' . PG_PASSWORD
                       ) or die (ERROR_ON_CONNECT_FAILED);
}
?>