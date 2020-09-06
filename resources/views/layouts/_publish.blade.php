<div class="rounded p-2">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" id="body" class="mt-1 form-control bg-light" style="border: none" placeholder="cicero" required></textarea>
        <hr>
        <img src="{{ auth()->user()->avatar }} "  class="rounded-circle mt-2 ml-1 mb-1" alt="" height="50px" width="50px">
       
        <button type="submit" class="float-right btn btn-primary flex-left mt-2 mb-1 mr-1">Cicero</button>
    </form>
   

    @error('body')
    <div class="alert alert-danger mr-1 ml-1">{{ $message }}</div>
    @enderror


</div>