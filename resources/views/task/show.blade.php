<h1>タスク詳細</h1>
<p>ID {{ $task->id }}</p>
<p>{{ $task->body }}</p>

  <form action="/task/{{ $task->id }}" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align">削除</button>
  </form>


<a href="/task">一覧に戻る</a>