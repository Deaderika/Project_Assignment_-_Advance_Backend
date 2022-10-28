<?php

namespace App\ContohBootcamp\Services;

use App\ContohBootcamp\Repositories\TaskRepository;

class TaskService {
	private TaskRepository $taskRepository;

	public function __construct() {
		$this->taskRepository = new TaskRepository();
	}

	/**
	 * NOTE: untuk mengambil semua tasks di collection task
	 */
	public function getTasks()
	{
		$tasks = $this->taskRepository->getAll();
		return $tasks;
	}

	/**
	 * NOTE: menambahkan task
	 */
	public function addTask(array $data)
	{
		$taskId = $this->taskRepository->create($data);
		return $taskId;
	}

	/**
	 * NOTE: UNTUK mengambil data task
	 */
	public function getById(string $taskId)
	{
		$task = $this->taskRepository->getById($taskId);
		return $task;
	}

	/**
	 * NOTE: untuk update task
	 */
	public function updateTask(array $editTask, array $formData)
	{
		if(isset($formData['title']))
		{
			$editTask['title'] = $formData['title'];
		}

		if(isset($formData['description']))
		{
			$editTask['description'] = $formData['description'];
		}

		$id = $this->taskRepository->save($editTask);
		return $id;
	}

	/**
	 * NOTE: UNTUK menghapus data task
	 */
	public function delete(string $taskId)
	{
		$task = $this->taskRepository->delete($taskId);
		return $task;
	}

	/**
	 * NOTE: untuk assign task
	 */
	public function assignTask(array $editTask, array $formData)
	{
		if(isset($formData['assigned']))
		{
			$editTask['assigned'] = $formData['assigned'];
		}

		$id = $this->taskRepository->save($editTask);
		return $id;
	}

	/**
	 * NOTE: untuk unassign task
	 */
	public function unassignTask(array $editTask)
	{
		$editTask['assigned'] = null;

		$id = $this->taskRepository->save($editTask);
		return $id;
	}

	/**
	 * NOTE: untuk membuat subtask
	 */
	public function createSubtask(array $editTask, array $formData)
	{
		if(isset($formData))
		{
			$editTask['subtasks'] = $formData;
		}

		$id = $this->taskRepository->save($editTask);
		return $id;
	}

	/**
	 * NOTE: untuk menghapus subtask
	 */
	public function deleteSubtask(array $editTask, array $formData)
	{
		if(isset($formData))
		{
			$editTask['subtasks'] = $formData;
		}

		$id = $this->taskRepository->save($editTask);
		return $id;
	}
}