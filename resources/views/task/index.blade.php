<h1>タスク一覧</h1>
<table>
  <thead>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>
      <td>
        <a href="/task/{{ $task->id }}/">{{ $task->id }}</a>
      </td>
      <td>{{ $task->body }}</td>
    </tr>
    @endforeach
  </tbody>
</table>