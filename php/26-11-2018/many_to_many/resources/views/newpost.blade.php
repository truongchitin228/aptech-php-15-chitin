<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="{{asset('ckeditor_4.11.1_standard/ckeditor/ckeditor.js')}}"></script>
<!-- <script> CKEDITOR.replace('editor1'); </script> -->
  </head>
  <body>
  <form action="{{route(''}}">
    <div class="controller">
    <div class="row">
    <h1>tôi tên tín</h1>
    <input type="hidden" name="_method" value="PUT">
    <br>
    content: <input type="text" name="name">
    <br>
    title: <input type="text" name="title">
    <br>
    description: <input type="text" name="description">
    <br>
    <select>
    @foreach($Categories as $Category)
  <option value="{{$Category->id}}">{{$Category->name}}</option>
  @endforeach
</select>
<form>
<div class="form-group">
    <button class="summit"> đăng nhập </button></div>
    </div>
    <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>
    </div>
    </form>
  </body>
</html>