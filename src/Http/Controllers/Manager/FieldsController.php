<?php

namespace Templeiro\Http\Controllers\Manager;

use Templeiro\Services\TempleiroService;
use Illuminate\Support\Facades\Schema;

use Templeiro\Models\Code\Field;

class FieldsController extends Controller
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
