<?php

if (defined('WP_CLI') && WP_CLI) {

    class WP_Timber_Vue extends WP_CLI_Command
    {
        public function test_cli()
        {
            WP_CLI::success('CLI is working!');
        }
    }

    WP_CLI::add_command('wptimbervue', 'WP_Timber_Vue');
}
