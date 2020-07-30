<?php
/**
 * Rotinas de Inclusão de Dados
 */

namespace Templeiro\Events;

use Templeiro\Models\Code\Commit;
use Templeiro\Models\Infra\Pipeline;

class NewCommit
{
    public function __construct(Commit $commit)
    {

        // $pipeline = Pipeline::create([

        // ]);

        // Analisa o Commit

        $analyser = $commit;
    }
}
