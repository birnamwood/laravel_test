<table>
  <thead>
    <tr>
      <td>タスク</td>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>
      <td>{{ $task->body }}</td>
    </tr>
    @endforeach
  </tbody>
</table>