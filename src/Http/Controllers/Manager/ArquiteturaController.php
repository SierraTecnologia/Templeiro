<?php

namespace Templeiro\Http\Controllers\Manager;

use Templeiro\Services\TempleiroService;
use Illuminate\Support\Facades\Schema;

use Templeiro\Models\Code\Field;
use Templeiro\Models\Infra\Domain;
use Templeiro\Models\Infra\Container;


use Telefonica\Models\Actors\Business;
use Telefonica\Models\Actors\Person;


use Templeiro\Models\Code\Project;
use Templeiro\Models\Code\Wiki;
use Population\Models\Features\Qa\Analyser;


use Telefonica\Models\Digital\Account;
use Integrations\Models\Token;



use Informate\Models\Entytys\Fisicos\Weapon;

class ArquiteturaController extends Controller
{
    protected $service;

    public function __construct(TempleiroService $service)
    {
        parent::__construct();

        $this->service = $service;
    }

    public function index()
    {
        // $service = $this->service;

        $service = new \Support\Services\RepositoryService(new \Support\Services\ModelService(Field::class));
        $registros = $service->getTableData();
        //     $teams = $this->repositoryService->paginated($request->user()->id);

        //Domain
        

        return view(
            'facilitador::components.repositories.index',
            compact('service', 'registros')
        );

        // return view(
        //     'casa::finances.index',
        //     compact('service')
        // );
    }
}
