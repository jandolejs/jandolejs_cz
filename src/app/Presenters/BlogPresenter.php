<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenter;


final class BlogPresenter extends Presenter
{
    public function renderDefault(): void
    {
        $this->template->posts = $this->database
            ->table('posts')
            ->order('created_at DESC')
            ->limit(10);
    }

    public function renderPost(int $id): void
    {
        $post = $this->database
            ->table('posts')
            ->get($id);

        if (!$post) {
            $this->error('Post not found');
        }

        $this->template->post = $post;
    }
}
