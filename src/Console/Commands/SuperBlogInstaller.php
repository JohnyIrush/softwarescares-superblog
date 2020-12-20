<?php

namespace SoftwaresCares\SuperBlog\Console\Commands;

use Illuminate\Console\Command;

class SuperBlogInstaller extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'superblog:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installing  SuperBlog, a Modern Content Magement System';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Installing BlogPackage...');

        $this->info('Publishing configuration...');

        $this->call('vendor:publish', [
            '--provider' => "JohnDoe\BlogPackage\BlogPackageServiceProvider",
            '--tag' => "config"
        ]);

        $this->info('Installed BlogPackage');

    }
}
