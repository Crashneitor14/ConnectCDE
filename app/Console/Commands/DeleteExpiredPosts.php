<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Carbon\Carbon;
use App\Http\Controllers\PostController;

class DeleteExpiredPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Borra Post Vencidos';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $expiredPosts = Post::where('expiracion', '<', Carbon::now())->get();

        foreach ($expiredPosts as $post) {
        $imagePath = $post->imagen;
        $post->delete();
        if ($imagePath && file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }
        }

        session()->flash('status','Publicaciones expiradas eliminados correctamente.');
    }
}
