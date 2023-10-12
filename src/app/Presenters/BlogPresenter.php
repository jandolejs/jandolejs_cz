<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Presenter;
use JetBrains\PhpStorm\NoReturn;
use Nette\Application\UI\Form;


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

    public function renderEdit(int $id): void
    {
        if (!$this->getUser()->isLoggedIn()) {
            $this->error('Please login to edit this post');
        }

        $post = $this->database
            ->table('posts')
            ->get($id);

        if (!$post) {
            $this->error('Post not found');
        }

        $this->getComponent('postForm')
            ->setDefaults($post->toArray());
    }


    protected function createComponentPostForm(): Form
    {
        $form = new Form;
        $form->addText('title', 'Title:')
            ->setRequired();
        $form->addText('heading', 'Heading:')
            ->setRequired();
        $form->addTextArea('content', 'Content:')
            ->setRequired();

        $form->addSubmit('send', 'Save and publish');
        $form->onSuccess[] = $this->postFormSucceeded(...);

        return $form;
    }

    #[NoReturn] private function postFormSucceeded(array $data): void
    {
        $postId = $this->getParameter('id');

        if ($postId) {
            $post = $this->database
                ->table('posts')
                ->get($postId);
            $post->update($data);

        } else {
            $post = $this->database
                ->table('posts')
                ->insert($data);
        }

        $this->flashMessage('Post was published', 'success');
        $this->redirect('Blog:post', $post->id);
    }
}
