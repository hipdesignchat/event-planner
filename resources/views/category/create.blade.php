@extends ('template/layout')
@section ('content')
  <form method="POST" action="/category">
    {{ csrf_field() }}
    <p>
      <label for="title">Title</label><input type="text" name="title" id="title">
    </p>
    <p>
      <label for="description">Description</label>
      <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </p>
    <p>
      <label for="colour">Category Colour</label>
      <input type="color" id="colour" name="colour">
    </p>
    <p>
      <button type="submit">Create Category</button>
    </p>
  </form>
@endsection
