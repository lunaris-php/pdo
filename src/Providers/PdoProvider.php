<?php

    namespace Lunaris\Pdo\Providers;

    class PdoProvider {
        public function getCommands() {
            return [
                "make:query" => \Lunaris\Pdo\Commands\MakeQuery::class
            ];
        }
    }