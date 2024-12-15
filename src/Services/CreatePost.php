<?php

namespace App\Services;

use App\Repositories\PostsRepository;
use App\Models\Post;
use Ramsey\Uuid\Uuid;
use Exception;

class CreatePost
{
    private PostsRepository $repository;

    public function __construct(PostsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data): array
    {
        if (empty($data['author_uuid']) || empty($data['title']) || empty($data['text'])) {
            return ['status' => 'error', 'message' => 'Не заполнены обязательные поля!'];
        }

        if (!Uuid::isValid($data['author_uuid'])) {
            return ['status' => 'error', 'message' => 'Неверный формат id!'];
        }

        try {
            $post = new Post(Uuid::uuid4(), $data['author_uuid'], $data['title'], $data['text']);
            $this->repository->save($post);
            return ['status' => 'success', 'message' => 'Пост создан'];
        } catch (Exception $e) {
            return ['status' => 'error', 'message' => 'Ошибка сохранения поста!'];
        }
    }
}
