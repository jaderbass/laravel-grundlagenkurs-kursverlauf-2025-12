@if($errors->any())
  <div class="callout warning">
    <p><strong>Es sind Fehler aufgetreten:</strong></p>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif