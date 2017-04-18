<?php

namespace Ayio\Ui\Workers;

use Ayio\Ui\Models\Menu;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class MenuWorker implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $menu;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($menu)
    {
        $this->menu = $menu;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $menu = new Menu();
        $menu->title = $this->menu->title;
        $menu->url = $this->menu->url;
        $menu->save();
    }
}
