<?php
/**
 * Serviço referente a linha no banco de dados
 */

namespace Templeiro\Services;

use Illuminate\Filesystem\Filesystem;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

use Templeiro\Models\Code\Project;
use Templeiro\Bundle\CoreBundle\EventDispatcher\TempleiroEvents;
use Templeiro\Bundle\CoreBundle\EventDispatcher\Event\ProjectEvent;

/**
 * 
 */
class RepositoryFolderService
{
    


    public static function readFolderPackages($item, string $realPath): void
    {
        if (in_array($item, ['.', '..'])) {
            return;
        }

        if (is_file($realPath . $item)) {
            return;
        }

        if (!is_dir($realPath . $item)) {
            return ;
        }
        $filesystem = app(Filesystem::class);
        
        if ($filesystem->exists($realPath . $item.'/composer.lock')) {
            // Get the composer.lock file
            $composer = json_decode(
                $filesystem->get($realPath . $item.'/composer.json')
            );
            json_decode(
                $filesystem->get($realPath . $item.'/composer.lock')
            );

            $project = new Project();
            $project->setName($composer->name);
            $project->setSlug($composer->name);

            $project->save();

            $event = new ProjectEvent($project);
            event($event); // @todo TempleiroEvents::PROJECT_CREATE   templeiro_core.event_dispatcher

            // //@todo
            // unset($composerLock->packages);
            // dd(
            //     // $composerLock,
            //     $composer,
            //     $realPath . $item
            // );

            // // // Loop through all the packages and get the version of transmissor
            // // foreach ($composerLock->packages as $package) {
            // //     if ($package->name == $this->packageName) {
            // //         $this->version = $package->version;
            // //         break;
            // //     }
            // // }
        }

        return ;
    }
}
